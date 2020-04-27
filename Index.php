<DOCTYPE! html>
    <head>
        <title>Titre</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--A revoir cette balise-->
        <link rel="icon" type="image/png" href="Img/Favicon/icon.png" /><!--icon dans l'onglet-->
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        </div>
        <div class="navbar-dark bg-dark">
            <nav class="w-75 f-size20px mx-auto navbar navbar-expand-lg">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active mx-3">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#prix">Prix</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#infos">Infos</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#formulaireContact">Contact</a>
                        </li>
                    </ul>
                    <div class="inline my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!--mettre le paramètre mode sombre-->
                                    <p>Thème sombre</p>

                                
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>






        
        <div class="py-5" id="price">
            <H2 class="text-center display-4">Prix</H2>
            <div>
                <div>
                    <div>

                    </div>
                    <div>
                        
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5" id="infos">
            <H2 class="text-center display-4">Infos</H2>
        </div>
        
        <div class="py-5" id="formulaireContact"> <!--py-5 signifie padding bottom et top de 3rem--> <!--bg-light-->
            <H2 class="text-center display-4">Nous contacter</H2>
            <form class="container" action="test.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom</label><input type="text" class="form-control" name="nom" id="nom" placeholder="NOM"/>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label><input type="text" class="form-control" name="prenom" id="prenom" placeholder="PRENOM"/>
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label><input type="email" class="form-control" name="email" id="email" placeholder="EMAIL"/>
                </div>
                <div class="form-group">
                    <div class="w-100">
                        <label for="message">Message (facultatif)</label><textarea class="form-control " name="message" id="message" rows="10" maxlength="1000"placeholder="Message (1000 caractères maximum)" /></textarea>
                    </div>
                    <div classe="w-100 float-right">   
                        <small class="form-text text-muted text-right" id="str-infos">
                            <p><span id="compteur">0</span>/1000 caractères</p>
                        </small>
                    </div>
                </div>
                <div class="w-100">
                    <button type="submit" class="btn btn-primary w-50 p-2 my-4 d-block mx-auto" name="btn-envoyer">Envoyer</button>
                </div>
            </form>
        </div>
<!--formualire pour ajouter un avis-->
        
       <footer class="footer">
            <div>
                
            </div>
            <div class="social">
                <!--icones réseaux sociaux instagram, Youtube, twitter-->
            </div>
       </footer>
        <a href="connexionDonnées.php">connexion au données</a>
        <!--Partie Script-->
        <script>
            var zoneTexte = document.getElementById('message');
            zoneTexte.addEventListener('keyup', function() {
                var compteur = document.getElementById('compteur');
                compteur.innerHTML = zoneTexte.value.length;
            });
        </script>
        <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-a11y="true"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>