<html>
    <head>
        <title>titre</title>
    </head>
    <body>
        <p>Message envoyé !</p>
        <a href="index.php">retour à l'acceuil</a>
        <?php   
            header("Refresh: 20;url=index.php");
        ?>
    </body>
</html>