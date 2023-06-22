<?php 
    class Cuccie extends Prodotti{

        public $dimensioneCuccia;
        public $materialeCuccia;
        
        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto, $recensione, $dimensioneCuccia, $materialeCuccia )
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
            $this->recensione = $recensione;
            $this->dimensioneCuccia = $dimensioneCuccia;
            $this->materialeCuccia = $materialeCuccia;
        }

    }
?>