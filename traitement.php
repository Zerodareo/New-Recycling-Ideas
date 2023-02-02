<?php
include 'frontpage.html';

    $erreurs = false;

    if(isset($_POST['envoyer'])){
        $email = trim($_POST['email']);
        $sujet = trim($_POST['sujet']);
        $message = trim($_POST['message']);
        echo $email.'<br>'.$sujet.'<br>'.$message;
    }
    if( $_POST['message'] != "" ){
        echo "<p class='succes'>". $_POST['message'] ."</p>";
    }
    else{
        $erreurs = true;
        echo "<p class='erreur'>Merci de renseigner un message</p>";
    }
    if( $_POST['email'] != "" ){
        echo "<p class='succes'>". $_POST['email'] ."</p>";
    }
    else{
        $erreurs = true;
        echo "<p class='erreur'>Merci de renseigner un email</p>";
    }

?>