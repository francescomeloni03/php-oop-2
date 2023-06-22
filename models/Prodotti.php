<?php 


require_once __DIR__ . "/../Traits/Peso.php";



    class Prodotti{

        use pesoProdotto;


        public $nome;
        public $prezzo;
        public $descrizioneOggetto;
        public $imgProdotto;
        public $recensione;

        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto, $recensione )
        {
            $this->nome = $name;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
            $this->recensione = $recensione;
        }


        public function getRecensione() {
            if( $this->recensione >= 8) {
                throw new Exception( "Eccellente");
            }

            if( $this->recensione >= 6 ) {
                throw new Exception( "Buono");
            } else if($this->recensione < 6)
                throw new Exception( "Non buono");
            
        }

    }


?>