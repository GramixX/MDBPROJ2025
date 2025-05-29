<?php
class angajati{
    public $nume;
    public $functie;
    
    public function getNume(){
        return $this->nume;
    }
    
    public function getFunctie(){
        return $this->functie;
    }
    
    public function setNume($name){
        return $this->nume= $name;
    }
    
    public function setFunctie($function){
        return $this->functie = $function;
    }
    
    public function afisareNume(){
        echo $this->nume;
    }
    
    public function afisareFunctie(){
        echo $this->functie;
    }
}
class masini{
    public $marca;
    public $an_fabricatie;
    public $stoc;
    public $pret;
    
    public function getMarca(){
        return $this->marca;
    }
    public function getAn_fabricatie(){
        return $this->an_fabricatie;
    }
    public function getStoc(){
        return $this->stoc;
    }
    public function getPret(){
        return $this->pret;
    }
    public function setMarca($mark){
        return $this->marca=$mark;
    }
    public function setAn_fabricatie($an_fab){
        return $this->an_fabricatie=$an_fab;
    }
    public function setStoc($stock){
        return $this->stoc=$stock;
    }
    public function setPret($price){
        return $this->pret=$price;
    }
    public function AfisareMarca(){
        echo $this->marca;
    }
    public function AfisareAn_fabricatie(){
        echo $this->an_fabricatie;
    }
    public function AfisareStoc(){
        echo $this->stoc;
    }
    public function AfisarePret(){
        echo $this->pret;
    }
}

define('CAPTCHA_SESSION_VAR','CAPTCHA');

class Captcha
{
	static public function reset($k=NULL)
	{
		$_SESSION[CAPTCHA_SESSION_VAR] = NULL;
	}
	
	static public function getCaptcha()
	{
		if(!isset($_SESSION[CAPTCHA_SESSION_VAR]) || $_SESSION[CAPTCHA_SESSION_VAR]===NULL){
                    
			$chars="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                        $size = strlen( $chars );
                        $_SESSION[CAPTCHA_SESSION_VAR]="";
                        for( $i = 0; $i < 6; $i++ ) {
                        $str= $chars[ rand( 0, $size - 1 ) ];
                        $_SESSION[CAPTCHA_SESSION_VAR]=$_SESSION[CAPTCHA_SESSION_VAR].$str;
                        }
                        
                }
                return $_SESSION[CAPTCHA_SESSION_VAR];
        }
        
	static public function check($str)
	{
		return !empty($_SESSION[CAPTCHA_SESSION_VAR]) && $str==$_SESSION[CAPTCHA_SESSION_VAR];
	}
}

?>