<?php

require 'Duo.php';

class Balmond extends Duo{
	// public function fighter(){
 //        return parent::fighter();
 //    }

	public function tanker(){
        return parent::tanker();
    }

    public function __call($name, $arguments) {
        // Note: value dari $name adalah case sensitive.  
        echo "'$name' Hero iki tipe tank dan fighter  "
        . implode(', ', $arguments) . "<br/>";
    }
}

 