<?php

# Permet de savoir si le login est correcte ou non
function check_connexion($database, $username, $mdp){
    $stmt = $database->query("select * from utilisateur");
    while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
        # Si le nom d'utilisateur et le mdp sont corrects
        if($username == $ligne[3] && password_verify($mdp, $ligne[4]))
            # Retourne les infos de l'utilisateur
            return $ligne;
    }
    # Si on ne trouve rien on retourne un "utilisateur vide"
    return array();
}

# Permet de savoir si le login de l'admin est correcte ou non
function check_connexionAdmin($database, $mdp){
    $stmt = $database->query("select * from utilisateur");
    while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
        # Si le nom d'utilisateur et le mdp sont corrects
        if(password_verify($mdp, $ligne[4]))
            # Retourne les infos de l'utilisateur
            return $ligne;
    }
    # Si on ne trouve rien on retourne un "utilisateur vide"
    return array();
}


Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('GET /candidature', function(){
    Flight::render("candidature.tpl",array());
});

Flight::route('GET /admin', function(){
    Flight::render("admin.tpl",array());
});

Flight::route('GET /success', function(){
    Flight::render("success.tpl",array("value" => $_POST));
});

Flight::route('POST /register', function(){

    $db = Flight::get('db');
    $data = Flight::request()->data;
    $messages=array();

    $stmt = $db->prepare("select * from utilisateur");
    # prepare() pour éviter les injections SQL
    $stmt->execute();
    # Si aucun résultat, alors l'email n'existe pas dans la BDD
    $id = $stmt->rowCount();

    $nom = $data->nom;
    $prenom = $data->prenom;
    $password = $data->password;
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
    $email = $data->email;
    $adresse = $data->adresse;
    $codepostal = $data->codepostal;
    $telephone = $data->telephone;

    //On vérifie si un nom est entré
    if (empty(trim($nom))) {
        $messages['nom'] = "Nom obligatoire";
    }

    //On vérifie si un prenom est entré
    if (empty(trim($prenom))) {
        $messages['prenom'] = "Prénom obligatoire";
    }

    //On vérifie si un mot de passe est entré
    if (empty(trim($password))) {
        $messages['password'] = "Mot de passe obligatoire";
    }

    //On vérifie si le mot de passe entré est suffisament long
    if (strlen($password) < 8) {
        $messages['password'] = "Mot de passe de 8 caractères minimum";
    }
    
    //On vérifie si une adresse e-mail est entrée
    if (empty(trim($email))) {
        $messages['email'] = "Adresse email obligatoire";

    //Si il y en a une, on vérifie sa validité
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messages['email'] = "Adresse email non valide";

    //Si valide et non vide, on vérifie si elle existe déjà dans la BD
    } else {
        $testDupli = Flight::get('db')->prepare(
            "select representant.email from representant where representant.email like :recherche"); //On prépare la requête SQL
        $testDupli->execute(array(':recherche' => "%$email%")); //On exécute la requête SQL
        if ($testDupli->fetch(PDO::FETCH_NUM) != 0) { //On vérifie le résultat de la requête  
            $messages['email']="Adresse email déjà existante";
        }
    }

    //On vérifie si une adresse est entrée
    if (empty(trim($adresse))) {
        $messages['adresse']="Adresse obligatoire";
    }

    //On vérifie si un code postal est entré
    if (empty(trim($codepostal))) {
        $messages['codepostal']="Code postal obligatoire";
    }

    //On vérifie si un numéro de téléphone est entré
    if (empty(trim($telephone))) {
        $messages['telephone']="Numéro de téléphone obligatoire";
    }

    //Si on a des erreurs, on affiche les messages ($messages) et les valeurs post ($_post)
    if (count($messages) > 0){
        Flight::render("register.tpl", array(
            'messages' => $messages,   
            'valeurs' => $_POST
        ));

    //Si on a pas d'erreurs, on affiche la page de succès et on insère les informations du register dans la BD
    } else {
        $st=Flight::get('db')->prepare(
            "insert into utilisateur values(:id, :nom,:prenom,:email,:password,:adresse,:codepostal,:telephone,:admin)"
        );
        $st->execute(array(
            ':id' => $id,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $hashed_pwd,
            ':adresse' => $adresse,
            ':codepostal' => $codepostal, 
            ':telephone' => $telephone,
            ':admin' => 0
        ));
        Flight::redirect('/success');
    }
});

Flight::route('POST /login', function(){
    # On récupère la BDD
    $db = Flight::get('db');
    # On récupère les informations que l'utilisateur a saisi
    $username = $_POST["email"];
    $mdp = $_POST["password"];
    # On fait appel à notre méthode pour vérifier si l'utilisateur
    # existe
    $conn = check_connexion($db, $username, $mdp);
    # Si l'utilisateur n'est pas vide (existe)
    if(!empty($conn)){
        # On stocke dans le tableau $_SESSION les informations en
        # rapport avec la session de l'utilisateur
        $_SESSION["session_on"] = TRUE;
        $_SESSION["informations"] = $conn;
        # On redirige vers la page d'accueil
        Flight::redirect("/");
    }
    else{
        # Si l'utilisateur se trompe, alors on redirige l'utilisateur
        # vers la page de login avec les informations qu'il a saisi
        # précédemment
        $messages['password'] = "Mot de passe ou email incorrect";
        Flight::render("login.tpl", array(
            'messages' => $messages,   
            'valeurs' => $_POST
        ));
    }
});

Flight::route('POST /admin', function(){
    # On récupère la BDD
    $db = Flight::get('db');
    # On récupère les informations que l'utilisateur a saisi
    $mdp = $_POST["password"];
    # On fait appel à notre méthode pour vérifier si l'utilisateur
    # existe
    $conn = check_connexionAdmin($db, $mdp);
    # Si l'utilisateur n'est pas vide (existe)
    if(!empty($conn)){
        # On stocke dans le tableau $_SESSION les informations en
        # rapport avec la session de l'utilisateur
        $_SESSION["session_on"] = TRUE;
        $_SESSION["informations"] = $conn;
        # On redirige vers la page d'accueil
        Flight::redirect("/");
    }
    else{
        # Si l'utilisateur se trompe, alors on redirige l'utilisateur
        # vers la page de login avec les informations qu'il a saisi
        # précédemment
        $messages['password'] = "Mot de passe incorrect";
        Flight::render("admin.tpl", array(
            'messages' => $messages,   
            'valeurs' => $_POST
        ));
    }
});
?>