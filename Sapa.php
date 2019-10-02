<?php

trait Hai{
	public function halo(){
		return "Halo, kamu tak sapa sekarang. <br/>";
	}
}

class Sapa{
	use Hai;
}