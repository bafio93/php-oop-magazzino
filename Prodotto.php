<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $anno;

    public function visualizza() {
        echo "<h3>".$this->nome."</h3><h5>Anno: ".$this->anno."</h5>";
    }

    public function offerta($sconto) {
        if ($sconto) {
            echo "<p>In offerta! Questo prodotto di solito costa: ".$this->prezzo.", ma oggi costa solo: ".((1-$sconto)*$this->prezzo)."!</p>";
        } else {
            echo "<p>Questo prodotto costa: ".$this->prezzo.".</p>";
        }
    }
};

// class Persona {
//     public $nome;
//     public $cognome;
//     public $genere;
//
//     public function stampaNome() {
//         echo $this->nome . ' ' . $this->cognome;
//     }
// }

?>
