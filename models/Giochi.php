<?php 
    class Giochi extends Prodotti{
        public $dimensioneGioco;
        public $pesoGioco;
        
        public function __construct($nome, $prezzo, $descrizioneOggetto, $imgProdotto, $dimensioneGioco, $pesoGioco )
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->descrizioneOggetto = $descrizioneOggetto;
            $this->imgProdotto = $imgProdotto;
			$this->dimensioneGioco = $dimensioneGioco;
			$this->pesoGioco = $pesoGioco; 
        }

    }
?>