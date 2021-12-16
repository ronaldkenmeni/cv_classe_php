<?php

    $titre = "Cursus académique";
    $sous = "Diplomes et formations certifiantes";
    $c1 = "DIPET 2 Eectronique -";
    $c2 = "@ENSET de Douala";
    $c3 = "Aoùt 2016 -";
    $c4 = "Gestion d'éclairage d'une maison (Androide + Arduino)";
    $c5 = "Oracle Certified Associate -";
    $c6 = "@Kentix Sarl";
    $c7 = "Mars 2009 -";
    $c8 = "Oracle Database 11g Administration";
    $c9 = "Oracle SQL Certified -";
    $c10 = "@Kentix Sarl";
    $c11 = "Decembre 2008 -";
    $c12 = "SQL 2, SQL 3, XML";
    $c13 = "License pro -";
    $c14 = "@Douala Institute of Tech.";
    $c15 = "Octobre 2008 -";
    $c16 = "Télécommunication & Réseaux";
    $c17 = "DEC / BTS -";
    $c18 = "@CCNB Dieppe - Canada";
    $c19 = "Septembre 2007-";
    $c20 = "Programmation Appliquée Pour Internet";
    $c21 = "Baccalauréat -";
    $c22 = "@Lycée Technique de Douala Bassa";
    $c23 = "Juin 2005 -";
    $c24 = "Electrotechnique, mention BIEN(major de centre)";

?>
<?php
    class cursus{
        public $titre;
        public $sous;
        public $c1;
        public $c2;
        public $c3;
        public $c4;
        public $c5;
        public $c6;
        public $c7;
        public $c8;
        public $c9;
        public $c10;
        public $c11;
        public $c12;
        public $c13;
        public $c14;
        public $c15;
        public $c16;
        public $c17;
        public $c18;
        public $c19;
        public $c20;
        public $c21;
        public $c22;
        public $c23;
        public $c24;
        
    function __construct($titre,$sous,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8,$c9,$c10,$c11,$c12,$c13,$c14,$c15,$c16,$c17,$c18,$c19,$c20,$c21,$c22,$c23,$c24)
    {
        $this->titre=$titre;
        $this->sous=$sous;
        $this->c1=$c1;
        $this->c2=$c2;
        $this->c3=$c3;
        $this->c4=$c4;
        $this->c5=$c5;
        $this->c6=$c6;
        $this->c7=$c7;
        $this->c8=$c8;
        $this->c9=$c9;
        $this->c10=$c10; 
        $this->c11=$c11;
        $this->c12=$c12;
        $this->c13=$c13;
        $this->c14=$c14;
        $this->c15=$c15;
        $this->c16=$c16;
        $this->c17=$c17;
        $this->c18=$c18;
        $this->c19=$c19;
        $this->c20=$c20;
        $this->c21=$c21;
        $this->c22=$c22;
        $this->c23=$c23;
        $this->c24=$c24;
    }
    function get_titre(){
        return $this->titre;
    }
    function get_sous(){
        return $this->sous;
    }
    function get_c1(){
        return $this->c1;
    }
    function get_c2(){
        return $this->c2;
    }
    function get_c3(){
        return $this->c3;
    }
    function get_c4(){
        return $this->c4;
    }
    function get_c5(){
        return $this->c5;
    }
    function get_c6(){
        return $this->c6;
    }
    function get_c7(){
        return $this->c7;
    }
    function get_c8(){
        return $this->c8;
    }
    function get_c9(){
        return $this->c9;
    }
    function get_c10(){
        return $this->c10;
    }
    function get_c11(){
        return $this->c11;
    }
    function get_c12(){
        return $this->c12;
    }
    function get_c13(){
        return $this->c13;
    }
    function get_c14(){
        return $this->c14;
    }
    function get_c15(){
        return $this->c15;
    }
    function get_c16(){
        return $this->c16;
    }
    function get_c17(){
        return $this->c17;
    }
    function get_c18(){
        return $this->c18;
    }
    function get_c19(){
        return $this->c19;
    }
    function get_c20(){
        return $this->c20;
    }
    function get_c21(){
        return $this->c21;
    }
    function get_c22(){
        return $this->c22;
    }
    function get_c23(){
        return $this->c23;
    }
    function get_c24(){
        return $this->c24;
    }
    }
    $cursus = new cursus("Cursus académique",
    "Diplomes et formations certifiantes",
    "DIPET 2 Eectronique -",
    "@ENSET de Douala",
    "Aoùt 2016 -",
    "Gestion d'éclairage d'une maison (Androide + Arduino)",
    "Oracle Certified Associate -",
    "@Kentix Sarl",
    "Mars 2009 -",
    "Oracle Database 11g Administration",
    "Oracle SQL Certified -",
    "@Kentix Sarl",
    "Decembre 2008 -",
    "SQL 2, SQL 3, XML",
    "License pro -",
    "@Douala Institute of Tech.",
    "Octobre 2008 -",
    "Télécommunication & Réseaux",
    "DEC / BTS -",
    "@CCNB Dieppe - Canada",
    "Septembre 2007-",
    "Programmation Appliquée Pour Internet",
    "Baccalauréat -",
    "@Lycée Technique de Douala Bassa",
    "Juin 2005 -",
    "Electrotechnique, mention BIEN(major de centre)");
    ?>




                <section4>
                    <div class="cursus-color">
                        <div class="icon-titre2">
                            <img src="icon/graduation_cap_26px.png" width="50px" height="50px">
                        </div>
                        <div class="titre">
                            <h2>
                                <?php
                                    echo $cursus->get_titre();
                                ?>
                            </h2>
                            <h4>
                                <span class="italic">
                                    <?php
                                        echo $cursus->get_sous();
                                    ?>
                                </span>
                            </h4>
                        </div>
                        <div class="recule">
                        <img src="icon/menu_2_filled_50px.png" class="menu">
                        </div>
                    </div>
                    <div class="marge">
                        <ul>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c1();
                                        ?>
                                    </h3>
                                    <h2>
                                        <?php
                                            echo $cursus->get_c2();
                                        ?>
                                    </h2>
                                </div>
                                <span>
                                    <h5>
                                        <?php
                                            echo  $cursus->get_c3();
                                        ?>
                                    </h5>
                                    <span class="italic"> 
                                        <?php
                                            echo $cursus->get_c4();
                                        ?>
                                    </span>
                                </span>
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c5();
                                        ?>
                                        <h2>
                                            <?php
                                                echo $cursus->get_c6();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                                <span>
                                    <h5>
                                        <?php
                                            echo $cursus->get_c7();
                                        ?>
                                    </h5>
                                    <span class="italic"> 
                                        <?php
                                            echo $cursus->get_c8();
                                        ?>
                                    </span>
                                </span>

                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c9();
                                        ?>
                                        <h2>
                                            <?php
                                                echo $cursus->get_c10();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                                <span>
                                    <h5>
                                        <?php
                                            echo $cursus->get_c11();
                                        ?>
                                    </h5>
                                    <span class="italic"> 
                                        <?php
                                            echo $cursus->get_c12();
                                        ?>
                                    </span>
                                </span> 
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c13();
                                        ?>
                                        <h2>
                                            <?php
                                                echo $cursus->get_c14();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <span>
                                   <h5>
                                       <?php
                                            echo $cursus->get_c15();
                                        ?>
                                   </h5>
                                   <span class="italic"> 
                                       <?php
                                            echo $cursus->get_c16();
                                        ?>
                                   </span>
                                </span>  
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c17();
                                        ?>
                                        <h2>
                                            <?php
                                                echo $cursus->get_c18();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <span>
                                   <h5>
                                       <?php
                                            echo $cursus->get_c19();
                                       ?>
                                   </h5>
                                   <span class="italic"> 
                                       <?php
                                            echo $cursus->get_c20();
                                        ?>
                                   </span>
                                </span>  
                            </li>
                            <li>
                                <div class="joindre">
                                    <h3>
                                        <?php
                                            echo $cursus->get_c21();
                                        ?>
                                        <h2>
                                            <?php
                                                echo $cursus->get_c22();
                                            ?>
                                        </h2>
                                    </h3>
                                </div>
                               <span>
                                   <h5>
                                       <?php
                                            echo $cursus->get_c23();
                                       ?>
                                   </h5>
                                   <span class="italic">  
                                       <?php
                                            echo $cursus->get_c24();
                                       ?>
                                   </span>
                                </span>  
                            </li>
                        </ul>
                    </div>
                </section4>
    



