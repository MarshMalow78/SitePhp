<?php

    require_once 'connexion.php';

    if ($_POST['Content']!= '') 
    {
        $data = [
            'Content' => $_POST['Content'],
            'date' => date('Y-m-d H:i:s')
        ];

        $requete = $database->prepare('INSERT INTO articles (Content, date) VALUES (:Content, :date)');
        $requete->execute($data);

    if ($requete) {
            header('Location: index.php');
        
        } else {
            echo 'Une erreur est survenue !';
        }

    } else {
        echo 'Remplissez tous les champs !';
    }

?>