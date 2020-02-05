<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Prodotto.php';
// Entro nel dettaglio:
class VideoGioco extends Prodotto {
    public $STEAM_rank;
    public $genere;
    // Includo una funzione per valutare, in percentuale, il gradimento.
    public function vg_rank() {
        echo "<p>Videogioco con <strong>".($this->STEAM_rank*100)."%</strong> dei voti positivi su STEAM.</p>";
    }
};


//
// class Fattorino extends Persona {
//     public $matricola;
//     public $mezzo;
//     public $km_ora;
//
//     public function tempiConsegna($distanza) {
//         return $distanza * ($this->km_ora / 60);
//     }
//
// }

?>
