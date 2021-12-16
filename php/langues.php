<?php
    class language{
        public $titre;
        public $sous;
        public $langue1;
        public $langue2;
        
    function __construct($titre,$sous,$langue1,$langue2)
    {
        $this->titre=$titre;
        $this->sous=$sous;
        $this->langue1=$langue1;
        $this->langue2=$langue2;  
    }
    function get_titre(){
        return $this->titre;
    }
    function get_sous(){
        return $this->sous;
    }
    function get_langue1(){
        return $this->langue1;
    }
    function get_langue2(){
        return $this->langue2;
    }
    }
    $language = new language("Langues","Pratiquées en entreprise","Français","Anglais");
?>



       <section3>
                        <div class="espace-titre">
                            <h2>
                                <?php
                                    echo $language->get_titre();
                                ?>
                            </h2>
                        </div>
                        <h4><span class="italic">
                                <?php
                                    echo $language->get_sous();
                                ?>
                            </span>
                        </h4>
                        <ul>
                            <li>
                                <span class="icon"><img src="icon/check_all_30px.png"></span>
                                <span class="text">
                                     <?php
                                        echo $language->get_langue1();;
                                     ?>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><img src="icon/check_all_30px.png"></span>
                                <span class="text">
                                    <?php
                                        echo $language->get_langue2();;
                                     ?>
                                </span>
                            </li>
                        </ul>
        </section3>
   


