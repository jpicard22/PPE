<?php

class Delta {


    private $reglement;

    public function __construct()
    {
        require __DIR__.'/../data/datas.php';
        $this->reglement = $dataReglement;
    }

    

    /**
     * Get the value of reglement
     */ 
    public function getReglement()
    {
        return $this->reglement;
    }


}


?>