<?php

class personnage
{

    private $_pseudo;
    private $_vie;
    private $_attaque;


    public function __construct($pseudo,$vie,$attaque)
    {
        $this->_vie=$vie;
        $this->_pseudo=$pseudo;
        $this->_attaque=$attaque;

        try {
            
            $BDD=new PDO('mysql:host=192.168.64.175;dbname=Exo_Caudron', 'user', 'user');

        }catch(Exception $e){
            
            $e->getMessage();
        }
    }

    public function getAttaque(){
        return  $this->_attaque;
    }

    public function affiche()
    {
        echo "<p>Votre vie est de ".$this->_vie." et votre pseudo est ".$this->_pseudo;
        
    }
    public function getPseudo()
    {
        return  $this->_pseudo;
        
    }
    public function attaque($PersoAttaquant)
    {
        echo "<p>".$PersoAttaquant->getPseudo()." vous attaque et vous perdez ".$PersoAttaquant->getAttaque()." point de vie ";
        $this->_vie=$this->_vie-$PersoAttaquant->getAttaque();
    }
    public function defense($PersoDéfend)
    {
        echo "<p>".$PersoDéfend->getPseudo().", contre l'attaque avec succés ";
        $this->_vie=$this->_vie+10;
    }
    public function affichePV()
    {
        echo "<p>".$this->_pseudo.", il vous reste ".$this->_vie." point de vie ";
    }



}