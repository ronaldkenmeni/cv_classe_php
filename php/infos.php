<?php
    class infos{
        public $datenaiss;
        public $origine;
        public $statut;
        public $quartier;
        public $lieu;
        public $map;
        public $tel;
        public $forum;
        public $email;
        public $compte;
        public $nb_projet;
        public $nb_contrat;
        public $nb_exp;
        
    function __construct($datenaiss,$origine,$statut,$quartier,$lieu,$map,$tel,$forum,$email,$compte,$nb_projet,$nb_contrat,$nb_exp)
    {
        $this->datenaiss=$datenaiss;
        $this->origine=$origine;
        $this->statut=$statut;
        $this->quartier=$quartier;
        $this->lieu=$lieu;
        $this->map=$map;
        $this->tel=$tel;
        $this->forum=$forum;
        $this->email=$email;
        $this->compte=$compte;
        $this->nb_projet=$nb_projet;
        $this->nb_contrat=$nb_contrat;
        $this->nb_exp=$nb_exp;  
    }
    function get_datenaiss(){
        return $this->datenaiss;
    }
    function get_origine(){
        return $this->origine;
    }
    function get_statut(){
        return $this->statut;
    }
    function get_quartier(){
        return $this->quartier;
    }
    function get_lieu(){
        return $this->lieu;
    }
    function get_map(){
        return $this->map;
    }
    function get_tel(){
        return $this->tel;
    }
    function get_forum(){
        return $this->forum;
    }
    function get_email(){
        return $this->email;
    }
    function get_compte(){
        return $this->compte;
    }
    function get_nb_projet(){
        return $this->nb_projet;
    }
    function get_nb_contrat(){
        return $this->nb_contrat;
    }
    function get_nb_exp(){
        return $this->nb_exp;
    }
    }
    $infos = new infos("Né le 20 octobre 1986","Originaire du Sud Cameroun","Marié, 02 enfants - Santé RAS","Résident a ndogbong","Douala - Cameroun","Map: 4.053276, 9.765047","(+237)674 053 983","Mobile,Telegram,Whatsapp","junioressono@gmail.com","Google+,Twitter,Linkedin,Github","+ 45 PROJETS","+ 31 CONTRATS"," 12 ANS D'EXP");
?>


        <div class="milieu">
                        <div class="infos">
                            <ul>
                                <li>
                                    <span class="icon"><img src="icon/birthday_cake_26px.png"></span>
                                    <span class="text">
                                        <?php
                                            echo $infos->get_datenaiss();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_origine();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_statut();
                                        ?>
                                        <br>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><img src="icon/location_filled_50px.png"></span>
                                    <span class="text">
                                        <?php
                                            echo $infos->get_quartier();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_lieu();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_map();
                                        ?>
                                        <br>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><img src="icon/phone_26px.png"></span>
                                    <span class="text">
                                        <?php
                                            echo $infos->get_tel();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_forum();
                                        ?>
                                        <br>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><img src="icon/message_30px.png"></span>
                                    <span class="text">
                                        <?php
                                            echo $infos->get_email();
                                        ?>
                                        <br>
                                        <?php
                                            echo $infos->get_compte();
                                        ?>
                                        <br>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="nombre">
                            <h5>
                                <?php
                                    echo $infos->get_nb_projet();
                                ?>
                            </h5>
                            <h5>
                                <?php
                                    echo $infos->get_nb_contrat();
                                ?>
                            </h5>
                            <h5>
                                <?php
                                    echo $infos->get_nb_exp();
                                ?>
                            </h5>
                        </div>
        </div>
    