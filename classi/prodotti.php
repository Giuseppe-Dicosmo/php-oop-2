<?php
class prodotti
{
  public $img;
  public $titolo;
  public $animale;
  public $descrizione;
  public $prezzo;

  function __construct(
    string $_img,
    string $_titolo,
    string $_animali,
    string $_descrizione,
    int $_prezzo
  ) {
    $this->img = $_img;
    $this->titolo = $_titolo;
    $this->animali = $_animali;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;
  }
}

class cibo extends prodotti
{
  public $peso;
  public $tipologia_cibo;
  public $taglia_animale;

  function __construct(
    string $_img,
    string $_titolo,
    string $_animali,
    string $_descrizione,
    int $_prezzo,
    int $_peso,
    string $_tipologia_cibo,
    string $_taglia_animale
  ) {
    $this->img = $_img;
    $this->titolo = $_titolo;
    $this->animali = $_animali;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;
    $this->peso = $_peso;
    $this->tipologia_cibo = $_tipologia_cibo;
    $this->taglia_animale = $_taglia_animale;
  }
}


class giochi extends prodotti
{
  public $categoria_gioco;
  public $resistenza;

  function __construct(string $_categoria_gioco, string $_resistenza)
  {
    $this->categoria_gioco = $_categoria_gioco;
    $this->resistenza = $_resistenza;
  }
}
