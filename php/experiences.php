<?php

    $titre = "Expérience profésionnelle";
    $sous = "Expertise en entreprise";
    $t1 = "Chef des projets technologiques - ";
    $t2 = "@Ets.M DE M";
    $t3 = "De Juillet 2019 à ce jour - http://mdem.cm";
    $t4 = "Chef du projet annuaire-universel.cm de l'ART";
    $t5 = "Fondateur & DT-";
    $t6 = "@Startup ChickDev";
    $t7 = "De Juin 2015 à ce jour - http://chickdev.com";
    $t8 = "Réalisation de plusieurs sites web et applications web et mobiles";
    $t9 = "Enseignant -";
    $t10 = "@Institut Universitaire de la Côte";
    $t11 = "De Octobre 2011 à ce jour - http://istdi.net";
    $t12 = '"Analyse. UML & MERISE","BD/SQL. ORACLE & MySQL","Dév. IOS & Android","Bl & Big Data Talent Dl & Hadoop". 1ère , 2ème  et 4ème année';
    $t13 = "Développeur en chef -";
    $t14 = "@Kayroual group";
    $t15 = "De Mai 2013 à Juin 2015 - http://khayroual.com";
    $t16 = "Réalisation de multiples projets logiciels et web, infographie,...";
    $t17 = "Responsable commerciale -";
    $t18 = "@BAO Sarl";
    $t19 = "De Decembre 2012 à Juin 2013 - http://bao-sarl.com";
    $t20 = "Définition des stratégies commerciales, Contrôle de qualité, suivi...";
?>
<?php
    class experiences{
        public $titre;
        public $sous;
        public $t1;
        public $t2;
        public $t3;
        public $t4;
        public $t5;
        public $t6;
        public $t7;
        public $t8;
        public $t9;
        public $t10;
        public $t11;
        public $t12;
        public $t13;
        public $t14;
        public $t15;
        public $t16;
        public $t17;
        public $t18;
        public $t19;
        public $t20;
        
    function __construct($titre,$sous,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$t16,$t17,$t18,$t19,$t20)
    {
        $this->titre=$titre;
        $this->sous=$sous;
        $this->t1=$t1;
        $this->t2=$t2;
        $this->t3=$t3;
        $this->t4=$t4;
        $this->t5=$t5;
        $this->t6=$t6;
        $this->t7=$t7;
        $this->t8=$t8;
        $this->t9=$t9;
        $this->t10=$t10; 
        $this->t11=$t11;
        $this->t12=$t12;
        $this->t13=$t13;
        $this->t14=$t14;
        $this->t15=$t15;
        $this->t16=$t16;
        $this->t17=$t17;
        $this->t18=$t18;
        $this->t19=$t19;
        $this->t20=$t20;
    }
    function get_titre(){
        return $this->titre;
    }
    function get_sous(){
        return $this->sous;
    }
    function get_t1(){
        return $this->t1;
    }
    function get_t2(){
        return $this->t2;
    }
    function get_t3(){
        return $this->t3;
    }
    function get_t4(){
        return $this->t4;
    }
    function get_t5(){
        return $this->t5;
    }
    function get_t6(){
        return $this->t6;
    }
    function get_t7(){
        return $this->t7;
    }
    function get_t8(){
        return $this->t8;
    }
    function get_t9(){
        return $this->t9;
    }
    function get_t10(){
        return $this->t10;
    }
    function get_t11(){
        return $this->t11;
    }
    function get_t12(){
        return $this->t12;
    }
    function get_t13(){
        return $this->t13;
    }
    function get_t14(){
        return $this->t14;
    }
    function get_t15(){
        return $this->t15;
    }
    function get_t16(){
        return $this->t16;
    }
    function get_t17(){
        return $this->t17;
    }
    function get_t18(){
        return $this->t18;
    }
    function get_t19(){
        return $this->t19;
    }
    function get_t20(){
        return $this->t20;
    }
    }
    $experiences = new experiences("Expérience profésionnelle",
    "Expertise en entreprise",
    "Chef des projets technologiques - ",
    "@Ets.M DE M",
    "De Juillet 2019 à ce jour - http://mdem.cm",
    "Chef du projet annuaire-universel.cm de l'ART",
    "Fondateur & DT-",
    "@Startup ChickDev",
    "De Juin 2015 à ce jour - http://chickdev.com",
    "Réalisation de plusieurs sites web et applications web et mobiles",
    "Enseignant -",
    "@Institut Universitaire de la Côte",
    "De Octobre 2011 à ce jour - http://istdi.net",
    '"Analyse. UML & MERISE","BD/SQL. ORACLE & MySQL","Dév. IOS & Android","Bl & Big Data Talent Dl & Hadoop". 1ère , 2ème  et 4ème année',
    "Développeur en chef -",
    "@Kayroual group",
    "De Mai 2013 à Juin 2015 - http://khayroual.com",
    "Réalisation de multiples projets logiciels et web, infographie,...",
    "Responsable commerciale -",
    "@BAO Sarl",
    "De Decembre 2012 à Juin 2013 - http://bao-sarl.com",
    "Définition des stratégies commerciales, Contrôle de qualité, suivi...");
?>



        
<section1>
                    <div class="exp-color">
                        <div class="icon-titre">
                            <img src="icon/company_30px.png" width="80" height="80">
                        </div>
                        <div class="titre">
                            <h2>
                                <?php
                                    echo $experiences->get_titre();
                                ?>
                            </h2>
                            <h4>
                                <span class="italic">
                                   <?php
                                        echo $experiences->get_sous();
                                    ?> 
                                </span>
                            </h4>
                        </div>
                        <div class="recule">
                            <img src="icon/menu_2_filled_50px.png">
                        </div>
                    </div>
                    <div class="marge">
                        <ul>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $experiences->get_t1();
                                        ?>  
                                    </h3>
                                    <h2> 
                                        <?php
                                            echo $experiences->get_t2();
                                        ?> 
                                    </h2>
                                </div>
                                <h5>
                                    <?php
                                        echo $experiences->get_t3();
                                    ?> 
                                </h5>
                                <h4>
                                    <?php
                                        echo $experiences->get_t4();
                                    ?>
                                </h4>
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                         <?php
                                            echo $experiences->get_t5();
                                         ?>
                                        <h2> 
                                            <?php
                                                echo $experiences->get_t6();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                                <h5>
                                  <?php
                                    echo $experiences->get_t7();
                                  ?>  
                                </h5>
                                <h4>
                                   <?php
                                     echo $experiences->get_t8();
                                  ?> 
                                </h4>

                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                             echo $experiences->get_t9();
                                          ?>
                                        <h2>
                                            <?php
                                                 echo $experiences->get_t10();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <h5>
                                   <?php
                                        echo $experiences->get_t11();
                                   ?>
                               </h5>
                               <h4>
                                  <?php
                                        echo $experiences->get_t12();
                                  ?>  
                               </h4>
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $experiences->get_t13();
                                        ?>
                                        <h2> 
                                            <?php
                                                 echo $experiences->get_t14();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <h5>
                                   <?php
                                        echo $experiences->get_t15();
                                   ?>
                                </h5>
                               <h4>
                                   <?php
                                        echo $experiences->get_t16();
                                   ?>
                                </h4> 
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                                 echo $experiences->get_t17();
                                        ?>
                                        <h2> 
                                            <?php
                                                 echo $experiences->get_t18();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <h5>
                                   <?php
                                        echo $experiences->get_t19();
                                   ?>
                                </h5>
                               <h4>
                                   <?php
                                        echo $experiences->get_t20();
                                   ?>
                                </h4>  
                            </li>

                        </ul>
                    </div>
                </section1>
    

      