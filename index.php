<?php
    class profil{
        public $nom;
        public $fonction;
        
    function __construct($nom,$fonction)
    {
        $this->nom=$nom;
        $this->fonction=$fonction;
    }
    function get_nom(){
        return $this->nom;
    }
    function get_fonction(){
        return $this->fonction;
    }
   
    }
    $profil = new profil("Ronald Kenmeni","Architecte logiciel/ Devops");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"  href="index.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My CV</title>
    </head>
    <body>
        <div class="tout">
            <div class="gauche">
                <div class="haut">
                    <div class="en-tete">
                        <img src="icon/menu_48px.png" class="icon">
                        <div class="recherche">
                            <input type="search" placeholder="Besoin d'un projet ?" name="search" class="srch">
                        </div>
                        <img src="icon/search_24px.png" class="icon">
                        <img src="icon/vertical_line_50px.png" class="icon">
                        <img src="icon/delete_sign_filled_50px.png" class="icon">
                    </div>
                    <div class="profile">
                        <div class="img">
                            <img src="icon/747.jpg">
                        </div>
                        <h2>
                            <?php
                                echo $profil->get_nom();
                            ?>
                            <br>
                            <span>
                                <?php
                                    echo $profil->get_fonction();
                                ?>
                            </span>
                        </h2>
                    </div>
                    <div class="croix"  id="plus" onclick="action();">
                        <img src="icon/plus_100px.png">
                    </div>
                    <script>
                        function action(){
                            if (document.getElementById('plus').className == 'croix'){
                                document.getElementById('plus').className = 'croix-active';
                                document.getElementById('boxx').className ='box-active';
                                document.getElementById('boxx1').className = 'box1-active';
                                document.getElementById('boxx2').className =    'box2-active';

                            }else {
                                document.getElementById('plus').className = 'croix';
                                document.getElementById('boxx').className ='box';
                                document.getElementById('boxx1').className = 'box1';
                                document.getElementById('boxx2').className =   'box2';
                            } 
                        }
                    </script>

                    <div class="box" id="boxx">
                        <a href="./editer/accueil.php" class="item edit"><img src="icon/edit_user_50px.png"></a>
                    </div>

                    <div class="box1" id="boxx1">
                        <a href="mail.php" class="item email"><img src="icon/email_40px.png"></a>
                    </div>

                    <div class="box2" id="boxx2">
                        <a href="pdf.php" class="item pdf"><img src="icon/pdf_2_30px.png"></a>
                    </div>
                    
                        

                
                </div>
                    <?php
                        include 'php/infos.php';
                    ?>
                <div class="bas">
                   <?php
                        include 'php/competences.php';
                   ?>   
                </div>
            </div>
            <div class="droite">
                 <div class="exp">
                    <?php
                        include 'php/experiences.php';
                    ?>
                </div>
                <div class="englobe">
                    <div class="interet">
                        <?php
                            include 'php/interet.php';
                        ?>
                    </div>
                    <div class="langues">
                        <?php
                            include 'php/langues.php';
                        ?>
                    </div>
                </div>
                <div class="cursus">
                    <?php
                        include 'php/cursus.php';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>