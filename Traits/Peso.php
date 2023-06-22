<?php

trait pesoProdotto {

    private $peso;

    public function GetPeso () {
        return $this->peso;
    }

    public function SetPeso($peso, $unità = "kg") {
        $this->peso = "$peso $unità";
    }

}




?>