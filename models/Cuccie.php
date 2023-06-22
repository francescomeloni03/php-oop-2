<?php 
    class Cuccie extends Prodotti{

        public $dimensioneCuccia;
        public $materialeCuccia;
        
        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto, $dimensioneCuccia, $materialeCuccia )
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
            $this->dimensioneCuccia = $dimensioneCuccia;
            $this->materialeCuccia = $materialeCuccia;
        }

    }
?>