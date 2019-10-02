<?php

namespace Heroes;
require 'HeroInterface.php';

use Interfaces\HeroInterface;

class Hero implements HeroInterface{
	public function attack(){
        return "Saya mempunyai attack besar. <br/>";
    }

    final public function speed(){
        return "Saya mempunyai speed tinggi. <br/>";
    }

    public function defend(){
        return "Saya memiliki defend kuat. <br/>";
    }
}
