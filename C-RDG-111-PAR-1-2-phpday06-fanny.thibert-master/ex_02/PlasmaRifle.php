<?php
include_once("AWeapon.php");
class PlasmaRifle extends AWeapon {
    
    public function __construct()
    {
        parent::__construct($name="Plasma Rifle", $apcost=5, $damage=21);
    }
    public function attack()
    {
        echo "PIOU\n";
    }

}