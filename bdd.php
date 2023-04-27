<?php
    require_once 'connexion.php';

    if ($_POST['Nom']!='' && $_POST['Pseudo']!= '' && $_POST['mail']!='' && $_POST['Password'] != '' && $_POST['Picture']!='') {
        $data = [
            'Nom' => $_POST['Nom'],
            'Pseudo' => $_POST['Pseudo'],
            'mail' => $_POST['mail'],
            'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT),
            'Picture' => $_POST['Picture'],
        ];

        $requete = $database->prepare('INSERT INTO Users (Nom,Pseudo,mail,Password,Picture) VALUES (:Nom,:Pseudo,:mail,:Password,:Picture)');
        $requete->execute($data);

        if($requete) {
            header('Location: index.php');

        } else {
            echo 'Une erreur est survenue';
        }
    } else {
        echo 'remplissez tous les champs';
    }
?>