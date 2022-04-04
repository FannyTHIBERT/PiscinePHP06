<?php
abstract class AWeapon {
    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee;
    public function __construct($name="", $apcost=0, $damage=0, $melee=false)
    {
        $this->name = $name;
        $this->apcost = $apcost;
        $this->damage = $damage;
        $this->melee = $melee;
        if(is_string($name) == false || is_int($apcost) == false || is_int($damage) == false)
        {
            throw new Exception("Error in AWeapon constructor. Bad parameters.");
        }
        return true;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getApcost()
    {
        return $this->apcost;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function isMelee()
    {
        return $this->melee;
    }
    abstract public function attack();
    
}
/*<?php
include_once("AWeapon.php");
include_once("PlasmaRifle.php");
include_once("PowerFist.php");
 
$laser = new PlasmaRifle("Laser");
$laser->attack();
var_dump($laser);
 
$poing = new PowerFist("Poing");
$poing->attack();
var_dump($poing);*/