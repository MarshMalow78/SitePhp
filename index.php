<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="signin.php">Inscription</a>

    <br>

    <form action="rechercher.php" method="GET">
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value="Rechercher...">
    </form>

    <br>
    <br>

    <form action="inserer.php" method="POST">

        <label for="Content">Contenu : </label>
        <textarea name="Content" id="Content" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">
    </form>
    <?php
        require_once 'connexion.php';

        $requete = $database->prepare('SELECT * FROM articles ORDER BY date DESC');
        $requete->execute();

        $xxx = $database->prepare('SELECT * FROM users');
        $xxx->execute();
        
        $articles = $requete->fetchALL(PDO::FETCH_ASSOC);

        $users = $xxx->fetchALL(PDO::FETCH_ASSOC);

        foreach($articles as $article) { 
            foreach($users as $user) {?>
            <br>
            <div>
                <img src="<?php echo $user['Picture'];?>">
                <p><?php echo $article['Content'];?></p>
                <span><?php echo $article['date'];?></span>
                <a href="supprimer.php?id=<?php echo $article['id']; ?>">Supprimer</a>
            </div>
        <?php       
            }
        }
    ?>
</body>
</html>