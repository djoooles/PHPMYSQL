<?php

    class mojAuto
    {
        public $marka;
        public $model;
        public $tip;
        public $tipMotora;
        public $kubikaza;
        public $kw;
        public $pogon;
        public $godiste;

        public function godineAuta()
    {
        $trenutnaGodina = date("Y");
        echo $trenutnaGodina-$this->godiste;
        
    }
    }










?>