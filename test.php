<?php
    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO donnes_clients (nom, prenom, email, message, date_ajout) VALUES(?, ?, ?, ?, NOW())');
    $req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']));

    // Redirection du visiteur vers la page du minichat
    header('Location: backindex.php');

?>
    if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']) AND !empty($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']))
        {
            echo'<p>Votre message a bien été envoyé ! <br/><a href="index.php">retour à l\'acceuil</a></p>';
            header("Refresh: 20;url=index.php");
        }
    else {
        header("location : index.php");
    }