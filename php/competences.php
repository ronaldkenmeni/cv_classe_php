<?php
    class competences{
        public $titre1;
        public $sous1;
        public $titre2;
        public $sous2;
        public $titre3;
        public $sous3;
        public $titre4;
        public $sous4;
        public $titre5;
        public $sous5;
        public $titre6;
        public $sous6;
        
    function __construct($titre1,$sous1,$titre2,$sous2,$titre3,$sous3,$titre4,$sous4,$titre5,$sous5,$titre6,$sous6)
    {
        $this->titre1=$titre1;
        $this->sous1=$sous1;
        $this->titre2=$titre2;
        $this->sous2=$sous2;
        $this->titre3=$titre3;
        $this->sous3=$sous3;
        $this->titre4=$titre4;
        $this->sous4=$sous4;
        $this->titre5=$titre5;
        $this->sous5=$sous5;
        $this->titre6=$titre6;
        $this->sous6=$sous6; 
    }
    function get_titre1(){
        return $this->titre1;
    }
    function get_sous1(){
        return $this->sous1;
    }
    function get_titre2(){
        return $this->titre2;
    }
    function get_sous2(){
        return $this->sous2;
    }
    function get_titre3(){
        return $this->titre3;
    }
    function get_sous3(){
        return $this->sous3;
    }
    function get_titre4(){
        return $this->titre4;
    }
    function get_sous4(){
        return $this->sous4;
    }
    function get_titre5(){
        return $this->titre5;
    }
    function get_sous5(){
        return $this->sous5;
    }
    function get_titre6(){
        return $this->titre6;
    }
    function get_sous6(){
        return $this->sous6;
    }
    }
    $competences = new competences("Développement front-end","HTML5,SASS,VueJS,Angular,JavaFX,...","Développement back-end","NodeJS,Drupal 8,Laravel,Kotlin,Java EE 7","Développement mobile","Android Kotlin,IOS Swift, Cordova, Flutter","UI/UX Design","Photoshop CC,Adobe XD, Material Design","Base de données & Big Data","Oracle 11g, PostgreSQL, Hadoop, Talend DI","Outils/Environnements","Visual Paradigm, Git, Docker, K8s, Linux");
?>
        
                    <div class="competences">
                         <ul>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                               echo $competences->get_titre1(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous1(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 90%;"></div>
                                </span>
                            </li>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                               echo $competences->get_titre2(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous2(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 75%;"></div>
                                </span>
                            </li>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                                echo $competences->get_titre3(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous3(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 87%;"></div>
                                </span>
                            </li>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                                echo $competences->get_titre4(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous4(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 60%;"></div>
                                </span>
                            </li>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                                echo $competences->get_titre5(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous5(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 95%;"></div>
                                </span>
                            </li>
                            <li>
                                <div class="comp">
                                    <img src="icon/check_all_30px.png">
                                    <h2>
                                        <span class="text">
                                            <?php
                                                echo $competences->get_titre6(); 
                                            ?>
                                        </span>
                                    </h2>
                                    <img src="icon/Star.png">
                                </div>
                                <h5>
                                    <?php
                                        echo $competences->get_sous6(); 
                                    ?>
                                </h5>
                                <span class="pourcentage">
                                    <div style="width: 90%;"></div>
                                </span>
                            </li>
                         </ul>
                    </div>



