<?php
// Visione a schermo degli errori (StackOverflow):
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creo un magazzino contenente giochi da tavolo e videogiochi.
include_once "Prodotto.php";
include_once "VideoGioco.php";
include_once "GiocoScatola.php";
//
// Creo un'istanza di un gioco in scatola:
$prodotto_1=new GiocoScatola();
$prodotto_1->nome = "Ticket to Ride";
$prodotto_1->prezzo = 45.50;
$prodotto_1->anno = "2004";
$prodotto_1->BGG_rank = 7.44;
echo "<pre><h3>Prodotto:</h3>";
var_dump($prodotto_1);
echo "</pre>";
// Creo un'istanza di un videogioco:
$prodotto_2=new VideoGioco();
$prodotto_2->nome = "Stardew Valley";
$prodotto_2->prezzo = 13.99;
$prodotto_2->anno = "2016";
$prodotto_2->STEAM_rank = 0.97;
$prodotto_2->genere = ["Farming Sim","RPG","Pixel Art"];
echo "<pre><h3>Prodotto:</h3>";
var_dump($prodotto_2);
echo "</pre>";
$prodotto_2->vg_rank();




// $fattorino = new Fattorino();
// // assegno i valori alle variabili d'istanza
// $fattorino->nome = 'Mario';
// $fattorino->cognome = 'Rossi';
// $fattorino->km_ora = 60;
//
// $fattorino->stampaNome();
// $tempo = $fattorino->tempiConsegna(5);
// echo '<br>';
// echo 'I tempi di consegna sono ' . number_format($tempo, 0, ",", ".") . ' minuti';
//
// var_dump($fattorino);
//
// // creo un'istanza di un cliente
// $cliente = new Cliente();
// // assegno i valori alle variabili d'istanza
// $cliente->nome = 'Luigi';
// $cliente->cognome = 'Verdi';
// $cliente->indirizzo = 'via roma 1 Padova';
//
// var_dump($cliente);

?>
