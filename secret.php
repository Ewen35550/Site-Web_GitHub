<?php
    if (isset($_POST['pseudo']) AND $_POST['pseudo'] == "Ben" AND isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "Zeub")
    {

    }
    else
    { 
        header('Location: secret.php');
    }
?>
<DOCTYPE! html lang="en">
<html>
    <head>
        <title>Titre</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--A revoir cette balise-->
        <link rel="icon" type="image/png" href="Img/Favicon/icon.png" /><!--icon dans l'onglet-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Données clients</li>
            </ol>
        </nav>
        <!--essayer de faire des filtres pour trier-->
        <div class="my-5">
            <h2 class="text-center">Données de nos clients</h2>
        </div>
        <div class="w-75 p-3, mx-auto" id="table">
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOM</th>
                        <th scope="col">PRENOM</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DATE</th>
                    </tr>
                </thead>
                <?php 
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $req = $bdd -> query('SELECT * FROM donnes_clients LIMIT 0, 50');
                while ($donnees = $req -> fetch())
                {
                ?>
                <tbody class="text-center">
                    <tr>
                        <th scope="row"><?php echo $donnees['id']; ?></th>
                        <td><?php echo strip_tags($donnees['nom']); ?></td>
                        <td><?php echo strip_tags($donnees['prenom']); ?></td>
                        <td><?php echo strip_tags($donnees['email']); ?></td><!--faire une balise message-->
                        <td><?php echo $donnees['date_ajout']; ?></td>
                    </tr>
                </tbody>
                <?php 
                }
                //code a revoir lorqu'il sera possible d'avoir un hébergeur web pour savoir si un mail s'envoie
                while ($donnees = $req -> fetch()){
                    $to      = 'drouin.benjamin3@gmail.com';
                    $subject = 'NOUVEAU CLIENT';
                    $message ='Voici les information du nouveau client.';
                    $infos = array(
                        $donnees['nom'], 
                        $donnes['prenom'], 
                        $donnes['email']
                    );
        
                    mail($to, $subject, $message, $infos);
                }
                ?>
            </table>
        </div>
        <!--Partie Script-->
        <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-a11y="true"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>