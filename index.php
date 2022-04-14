<?php

require __DIR__ . "./classi/prodotti.php";
require __DIR__ . "./classi/utenti.php";

// public $img;
// public $titolo;
// public $animale;
// public $descrizione;
// public $prezzo;

$prodotti1 = new cibo(
  "https://picsum.photos/seed/picsum/300/300",
  "Cuccia gucci",
  "Cane",
  "lorem porfgaergfvaserd",
  59.50,
  10,
  "croccantini",
  "media"
);

var_dump($prodotti1);

//! UTENTI
$utente = new user (
  "fabio",
  "tizio",
  "gdfsgsdfndftftggbre"
);

var_dump($utente);
$utente->setMail("pippo");
var_dump($utente); // modifica e-mail
