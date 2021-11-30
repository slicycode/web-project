<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('GET /fichier', function(){
    Flight::render("fichier.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('GET /profil', function(){
        Flight::render("profil.tpl",array());
});

Flight::route('POST /register', function(){
    $db = Flight::get('db');
    $data = Flight::request()->data;
    $messages=array();

    $user= $data->user;
    $password=$data->password;
    $hashed_pwd=password_hash($password, PASSWORD_DEFAULT);
    $email= $data->email;
    $city= $data->city;
    $country= $data->country;

    //On vérifie si un nom d'utilisateur est entré
    if (empty(trim($user))) {
        $messages['user']="Nom d'utilisateur obligatoire";
    }

    //On vérifie si un mot de passe est entré
    if (empty(trim($password))) {
        $messages['password']="Mot de passe obligatoire";
    }

    //On vérifie si le mot de passe entré est suffisament long
    if (strlen($password) < 8) {
        $messages['password']="Mot de passe de 8 caractères minimum requis";
    }
    
    //On vérifie si une adresse e-mail est entrée
    if (empty(trim($email))) {
        $messages['email']="Adresse email obligatoire";
    //Si il y en a une, on vérifie sa validité
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messages['email']="Adresse email non valide";
    //Si valide et non vide, on vérifie si elle existe déjà dans la BD
    } else {
        $testDupli=Flight::get('db')->prepare(
            "select utilisateur.email from utilisateur where utilisateur.email like :recherche"); //On prépare la requête SQL
        $testDupli->execute(array(':recherche' => "%$email%")); //On exécute la requête SQL
        if ($testDupli->fetch(PDO::FETCH_NUM) != 0) { //On vérifie le résultat de la requête  
            $messages['email']="Adresse email déjà existante";
        }
    }

    //On vérifie si une ville est entrée
    if (empty(trim($city))) {
        $messages['city']="Ville obligatoire";
    }
    //On vérifie si un pays est entré
    if (empty(trim($country))) {
        $messages['country']="Pays obligatoire";
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
            "insert into utilisateur values (:user,:email,:password,:city,:country)" //a changer
        );
        $st->execute(array(
            ':user' => $user,
            ':email' => $email,
            ':password' => $hashed_pwd,
            ':city' => $city,
            ':country' => $country 
        ));
        Flight::redirect('/success');
    }
});

Flight::route('POST /login', function(){

});
?>
