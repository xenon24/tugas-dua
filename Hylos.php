<?php

namespace Heroes;
require 'Tank.php';



use Abstracts\Tank;

class Hylos extends Tank{
	public function __destruct() {
        echo 'Saya Hylos. <br/>';
    }

	public	function __construct() {
        echo 'Saya Hero Tank. <br/>';
    }

	public function greet(){
		return "Saya adalah Hero Tank. <br/>";
	}

	public function getInformasi($tipe){
		return "Saya Tank Kuda : ".$tipe."<br/>";
	}
}