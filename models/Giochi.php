<?php 
    class Giochi extends Prodotti{
        public $dimensioneGioco;
        public $pesoGioco;
        
        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto, $recensione, $dimensioneGioco, $pesoGioco )
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
            $this->recensione = $recensione;
			$this->dimensioneGioco = $dimensioneGioco;
			$this->pesoGioco = $pesoGioco; 
        }

    }
?>