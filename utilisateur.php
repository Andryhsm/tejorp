<?php
require './protection.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>utilisateur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.miin.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/cerulean.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/set2.css" />
        <style>
            body
            {
                background: url("img/fruit_Pod1.jpg") no-repeat fixed;
                background-size: cover;    
                color: #fff;
                font-family: "Calibri"; 
                font-size: 20px;
            }
            img.zoomEffect {
                -moz-transition: all 0.5s ease-in-out 0s;
                -webkit-transition: all 0.5s ease-in-out 0s;
                -o-transition: all 0.5s ease-in-out 0s;
                -ms-transition: all 0.5s ease-in-out 0s;
                transition: all 0.5s ease-in-out 0s;
                opacity: 0.7;
                cursor: pointer;
            }
            img.zoomEffect:hover {
                -moz-transform: rotate(5deg) scale(1.10);
                -webkit-transform: rotate(5deg) scale(1.10);
                -o-transform: rotate(5deg) scale(1.10);
                -ms-transform: rotate(5deg) scale(1.10);
                transform: rotate(5deg) scale(1.10);
                opacity: 1;
            }
            .maitso{
                background-color: #8c993d;
                width: 100%;
                height: 11vw;
            }
        </style>
    </head>
    <body>

        <div class="maitso"></div>

        <div class="container" style="margin-top: -11vw;">
            <div class="grid">
                <br><br>
                <div class="row col-lg-offset-1" style="margin-bottom: 50px; ">
                    <div class="col-lg-3">
                        <img class="img-responsive img-circle" style="vertical-align: center; background-color: white;" width="180px" heigth="180px" src="./image-person/<?php echo $_SESSION['photo']; ?>">
                    </div>
                    <div class="col-lg-6" style="background-color: white; height: 170px; border-bottom-left-radius: 6px; border-top-left-radius: 6px;">

                        <h2 style="color: green;"> <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?> </h2>
                        <h3><?php echo utf8_encode($_SESSION['statut']); ?></h3>
                        <h5>Téléphone: <?php echo $_SESSION['tel']; ?> &nbsp;&nbsp; Email: <?php echo $_SESSION['email']; ?></h5>
                    </div>
                    <div class="col-lg-2" style="background-color: white; height: 170px; border-bottom-right-radius: 6px; border-top-right-radius: 6px;">
                        <br>
                        <a href="./modification.php"> <img class="zoomEffect img-responsive" width="90px" src="./img/edit.png" alt="Modifier image" title="Modifier mon profil"> </a>
                    </div>

                </div>


                <figure class="effect-ming">
                    <img src="img/installation.png" alt="img09"/>
                    <figcaption>
                        <h2> <span style="color: #e29000;">Installation</span></h2>
                        <p>Enregistrer des nouveaux patients.</p>
                        <a href="./page.php">View more</a>
                    </figcaption>			
                </figure>
                <figure class="effect-ming">
                    <img src="img/controle.png" alt="img08"/>
                    <figcaption>
                        <h2><span style="color: #e29000;">Controle</span></h2>
                        <p>Controler les patients qui sont déja enregistré.</p>
                        <a href="controle.php">View more</a>
                    </figcaption>			
                </figure>

                <div class="pull-right">
                    <br>
                    <a class="btn btn-warning" href="./logout.php">Déconnexion</a>
                </div>
            </div>

        </div>
        <script src="./bootstrap/js/jquery.js"></script>   
        <script src="./bootstrap/js/bootstrap.min.js"></script> 

    </body>
</html>


