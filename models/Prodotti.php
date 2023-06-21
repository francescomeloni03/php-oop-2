<?php 
    class Prodotti{
        public $nome;
        public $prezzo;
        public $descrizioneOggetto;
        public $imgProdotto;

        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto )
        {
            $this->nome = $name;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
        }

    }


?>