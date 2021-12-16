<?php
    class interet{
        public $titre;
        public $sous;
        
    function __construct($titre,$sous)
    {
        $this->titre=$titre;
        $this->sous=$sous;  
    }
    function get_titre(){
        return $this->titre;
    }
    function get_sous(){
        return $this->sous;
    }
    }
    $interet = new interet("Points d'intérêts","Simple passe-temps pour se faire un peu plaisir");
?>



    <body>
       <section2>
            <div class="espace-titre">
                <h2>
                   <?php
                        echo $interet->get_titre();
                    ?> 
                </h2>
            </div>
                <h4>
                    <span class="italic">
                        <?php
                            echo $interet->get_sous();
                        ?>
                    </span>
                </h4>
                <img src="icon/Capture.PNG">
        </section2> 
    

                    