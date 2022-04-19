<?php

require __DIR__ . "./classi/prodotti.php";
require __DIR__ . "./classi/utenti.php";
require __DIR__ . "./classi/carta_di_credito.php";

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

// var_dump($prodotti1);

//! UTENTI
//? utente non Iscritto
$utente = new user (
  "fabio",
  "tizio",
  "fabio@gmail.com",
);

var_dump($utente);

// modifica del utente
// $utente->setMail("pippo@gmail.com");
// $utente->setName("pippo");
// $utente->setLastname("sasso");
// var_dump($utente);

//? utente Iscrito
$utente_registrato = new registeredUser (
  "carlo",
  "vedoni",
  "carlo@gmail.com",
  "dddddddddddddddddd"
);
var_dump($utente_registrato);

//! carta di credito
$carta_utente = new card (
  "carlo vedoni",
  1234567891234567,
  "03-23",
  223
);
var_dump($carta_utente);

$pim = date("m-y");

var_dump($pim);
