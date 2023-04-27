<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bdd.php" method="POST">

        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom">        
        
        <label for="Pseudo">Pseudo :</label>
        <input type="text" name="Pseudo" id="Pseudo">

        <label for="mail">Mail :</label>
        <input type="text" name="mail" id="mail">

        <label for="Password">Password :</label>
        <input type="password" name="Password" id="Password">

        <label for="Picture">Picture :</label>
        <input type="text" name="Picture" id="Picture">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>