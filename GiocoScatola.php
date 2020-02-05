<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Prodotto.php';
// Entro nel dettaglio:
class GiocoScatola extends Prodotto {
    public $BGG_rank;
    public $tempo_gioco;
    // Includo una funzione per valutare, in percentuale, il gradimento.
    public function gs_rank() {
        echo "<p>Gioco in scatola con <strong>".($this->BGG_rank*10)."%</strong> dei voti positivi su BGG.</p>";
    }
};
?>
