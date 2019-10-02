<?php

class Duo{
	// final public function fighter() {
 //        return "saya juga fighter. <br/>";
 //    }

    public function tanker() {
        return "saya juga tanker. <br/>";
    }

    public function me(){
    	return "Hero tank dan fighter. <br/>";
    }

    public function angka($isi){
    	if ($isi > 1) {
        throw new Exception("Wes Bener Bos. <br/>");
    	}
    	return true;
    }
}