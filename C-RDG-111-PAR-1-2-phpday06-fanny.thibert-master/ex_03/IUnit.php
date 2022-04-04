<?php
interface IUnit {
    public function equip($equip);
    public function attack($attack);
    public function receiveDamage($rDamage);
    public function moveCloseTo($move);
    public function recoverAP();
}