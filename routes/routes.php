<?php

function assign_table($nom_table, $nom_var, $nom_champ1, $nom_champ2){

    $stmt = Flight::get('db')->query("select * from $nom_table");
    $contenu = array();
    while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
            array_push($contenu, array($nom_champ1 => $ligne[0], $nom_champ2 => $ligne[1]));
    }
    # Permet d'accèder aux départements sur tous les templates
    Flight::view()->assign($nom_var, $contenu);

}

assign_table("departement", "departements", "id_dep", "nom_dep");

assign_table("scene", "scenes", "id_scene", "nom_scene");

if(isset($_SESSION["session_on"])){
    Flight::view()->assign("session", $_SESSION);
};

# Permet de savoir si le login est correcte ou non
function check_connexion($database, $username, $mdp){
    $stmt = $database->query("select * from utilisateur");
    while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
        # Si le nom d'utilisateur et le mdp sont correctes
        if($username == $ligne[3] && password_verify($mdp, $ligne[4]))
            # Retourne les infos de l'utilisateur
            return $ligne;
    }
    # Si on ne trouve rien on retourne un "utilisateur vide"
    return array();
}

Flight::route('/', function(){
    Flight::render("index.tpl", array());
});

# Permet à l'utilisateur de se déconnecter
Flight::route('GET /logout', function(){
    # On vide la variable session pour "fermer la session"
    $_SESSION = array();
    # On redirrige vers la racine du site donc l'index
    Flight::redirect("/");
});

Flight::route('GET /register', function(){
    if (isset($_SESSION["session_on"])){
        Flight::redirect("/");
    }else{
        Flight::render("register.tpl",array());
    }
});

Flight::route('GET /login', function(){
    if (isset($_SESSION["session_on"])){
        Flight::redirect("/");
    }else{
        Flight::render("login.tpl",array());
    }
});

Flight::route('GET /candidature', function(){
    $db = Flight::get('db');
    $stmt = $db->query("select * from candidature");
    $peut_candidater = true;
    while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
        if($ligne[1] == $_SESSION["informations"][0]){
            Flight::render("erreurcandidature.tpl", array());
            $peut_candidater = false;
        }
    }
    if($peut_candidater)
        Flight::render("candidature.tpl",array());
});

Flight::route('GET /liste_candidatures', function(){
    if(isset($_SESSION["session_on"])  && $_SESSION["informations"][8] == 1){
        $db = Flight::get('db');
        $stmt = $db->query("select * from candidature");
        $candidatures = array();
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                array_push($candidatures, $ligne);
        }
        $stmt = $db->query("select * from departement");
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                for($i=0; $i<count($candidatures); $i++){
                    if($candidatures[$i][3] == $ligne[0]){
                        $candidatures[$i][3] = $ligne[1];
                    }
                }
        }
        $stmt = $db->query("select * from scene");
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                for($i=0; $i<count($candidatures); $i++){
                    if($candidatures[$i][4] == $ligne[0]){
                        $candidatures[$i][4] = $ligne[1];
                    }
                }
        }
        Flight::render("liste_candidatures.tpl",array("candidatures" => $candidatures));
    }else{
        Flight::redirect("/login");
    }
    
});

Flight::route('GET /candidature-@idcand', function($idcand){
    if(isset($_SESSION["session_on"])  && $_SESSION["informations"][8] == 1){
        $db = Flight::get('db');
        $stmt = $db->prepare("select * from candidature where candidature.id_candi = :id");
        $stmt->execute(array(
            ":id" => $idcand
        ));
        $candidature = array();
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                array_push($candidature, $ligne);
        }
        $stmt = $db->query("select * from departement");
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                if($candidature[0][3] == $ligne[0]){
                    $candidature[0][3] = $ligne[1];
                }
        }
        $stmt = $db->query("select * from scene");
        while ($ligne = $stmt->fetch(PDO::FETCH_NUM)) { # On parcourt tout la table utilisateur
                if($candidature[0][3] == $ligne[0]){
                    $candidature[0][3] = $ligne[1];
                }
        }
        Flight::render("detailscandidature.tpl", array("candidature" => $candidature[0]));
    }else{
        Flight::redirect("/login");
    }
});

Flight::route('POST /candidature', function(){
    print_r($_POST);
    $db = Flight::get('db');
    $data = Flight::request()->data;
    $messages=array();

    $photo_ext = array("png", "jpg", "jpeg");

    $nom_fichiers = array();

    $var_post = array("nom_groupe", "id_dep", "id_scene", "style", "annee", "presentation", "experience", "site", "nom_rep", "prenom_rep", "email_rep", "postal_rep", "adresse_rep", "tel_rep");

    $var_files = array("photo1", "photo2", "musique1", "musique2", "musique3", "ftechnique", "docsacem");

    foreach($var_post as $element){
        if(empty(trim($_POST[$element]))){
            $messages[$element] = "Champ obligatoire";
        }
    }

    foreach($var_files as $element){
        if(empty(trim($_FILES[$element]["name"]))){
            $messages[$element] = "Champ obligatoire";
        }
    }

    if (count($messages) > 0){

        Flight::render("candidature.tpl",array("messages" => $messages, "valeurs" => $_POST));

    }else{


        # Vérification des extensions et upload des fichiers
        for ($i = 1; $i <= 2; $i ++){
            if (in_array(pathinfo($_FILES["photo$i"]["name"], PATHINFO_EXTENSION), $photo_ext)){
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["photo$i"]["name"];
                move_uploaded_file($_FILES["photo$i"]["tmp_name"] , "./uploads/Photos/" . $nom_fichier);
                $nom_fichiers["photo$i"] = $nom_fichier;
            }else{
                $messages["photo$i"] = "Format incorrect (jpg ou png)";
            }
        }

        for ($i = 1; $i <= 3; $i ++){
            if (pathinfo($_FILES["musique$i"]["name"], PATHINFO_EXTENSION) == "mp3"){
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["musique$i"]["name"];
                move_uploaded_file($_FILES["musique$i"]["tmp_name"] , "./uploads/Musiques/" . $nom_fichier);
                $nom_fichiers["musique$i"] = $nom_fichier;
            }else{
                $messages["musique$i"] = "Format incorrect (mp3)";
            }
        }

        if (pathinfo($_FILES["ftechnique"]["name"], PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["ftechnique"]["name"];
            move_uploaded_file($_FILES["ftechnique"]["tmp_name"] , "./uploads/FicheTechnique/" . $nom_fichier);
            $nom_fichiers["ftechnique"] = $nom_fichier;
        }else{
            $messages["ftechnique"] = "Format incorrect (pdf)";
        }

        if (pathinfo($_FILES["docsacem"]["name"], PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["docsacem"]["name"];
            move_uploaded_file($_FILES["docsacem"]["tmp_name"] , "./uploads/SACEM/" . $nom_fichier);
            $nom_fichiers["docsacem"] = $nom_fichier;
        }else{
            $messages["docsacem"] = "Format incorrect (pdf)";
        }
        
        if(!empty($_FILES["dossier"])){
            if (pathinfo($_FILES["dossier"]["name"], PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["dossier"]["name"];
            move_uploaded_file($_FILES["dossier"]["tmp_name"] , "./uploads/DossiersPresse/" . $nom_fichier);
            $nom_fichiers["dossier"] = $nom_fichier;
        }else{
            $messages["dossier"] = "Format incorrect (pdf)";
        }
        
        if(count($messages) > 0){
            Flight::render("candidature.tpl",array("messages" => $messages, "valeurs" => $_POST));
        }else{
            $stmt = Flight::get('db')->query("select * from candidature");
            $id_candidature = $stmt->rowCount();
            $st=Flight::get('db')->prepare(
            "insert into candidature values(:id, :id_ut, :nom,:dep,:scene,:style,:rep,:annee,:presentation,:experience,:site,:soundcloud,:youtube,:assos,:sacem,:producteur,:musique1,:musique2,:musique3,:dossier,:photo1,:photo2,:fiche,:docsacem)"
            );
            $st->execute(array(
                ':id' => $id_candidature,
                ':id_ut' => $_SESSION["informations"][0],
                ':nom' => $_POST["nom_groupe"],
                ':dep' => $_POST["id_dep"],
                ':scene' => $_POST["id_scene"],
                ':style' => $_POST["style"],
                ':rep' => $id_candidature,
                ':annee' => $_POST['annee'],
                'presentation' => $_POST["presentation"],
                'experience' => $_POST['experience'],
                ':site' => $_POST["site"],
                ':soundcloud' => $_POST["soundcloud"],
                ":youtube" => $_POST["youtube"],
                ":assos" => $_POST["assos"] ? 1 : 0,
                ":sacem" => $_POST["sacem"] ? 1 : 0,
                ":producteur" => $_POST["producteur"] ? 1 : 0,
                ":musique1" => $nom_fichiers["musique1"],
                ":musique2" => $nom_fichiers["musique2"],
                ":musique3" => $nom_fichiers["musique3"],
                ":dossier" => $nom_fichiers["dossier"],
                ":photo1" => $nom_fichiers["photo1"],
                ":photo2" => $nom_fichiers["photo2"],
                ":fiche" => $nom_fichiers["ftechnique"],
                ":docsacem" => $nom_fichiers["docsacem"],
            ));
            $st=Flight::get('db')->prepare(
            "insert into representant values(:id, :nom,:prenom,:adresse,:codepostal,:email,:telephone)"
            );
            $st->execute(array(
                ':id' => $id_candidature,
                ':nom' => $_POST["nom_rep"],
                ':prenom' => $_POST["prenom_rep"],
                ':email' => $_POST["email_rep"],
                ':adresse' => $_POST["adresse_rep"],
                ':codepostal' => $_POST["postal_rep"], 
                ':telephone' => $_POST["tel_rep"],
            ));
            $stmt = Flight::get('db')->query("select * from membre");
            $nb_membre_table = $stmt->rowCount();
            for($i=0; $i < $_POST["nb_membre"]; $i++){
                $id_membre = $i + 1;
                $st=Flight::get('db')->prepare(
                "insert into membre values(:id, :nom,:prenom,:instrument,:groupe)"
                );
                $st->execute(array(
                    ':id' => $nb_membre_table + $i,
                    ':nom' => $_POST["nom_mem" . $id_membre],
                    ':prenom' => $_POST["prenom_mem" . $id_membre],
                    ':instrument' => $_POST["instrument_mem" . $id_membre],
                    ':groupe' => $id_candidature,
                ));
            }
            

            Flight::redirect("/");
        }
    }
}

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
?>