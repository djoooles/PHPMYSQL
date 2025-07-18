<?php 
    class Osoba
    {
        public $ime;
        public $prezime;
        public $godinaRodjenja;
        public $datumRodjenja;
        public $visina;
        public $tezina;

        public function racunajGodine()
        {   
            $trenutnkaGodina = date("Y");
            echo $trenutnkaGodina-$this->godinaRodjenja;
        }
    }

    
    




?>