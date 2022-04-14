<?php
class user
{
  public $name;
  public $lastname;
  protected $mail;

  function __construct($_name = "", $_lastname = "", $_mail = "")
  {
    // l'utente non puo inserire una stringa vuota e verifica una email se e valida
    if (
      filter_var($_mail, FILTER_VALIDATE_EMAIL) &&
      $_mail != null &&
      $_name != null &&
      $_lastname != null
    ) {
      $this->name = $_name;
      $this->lastname = $_lastname;
      $this->mail = $_mail;
    } else {
      throw new Exception("non hai inserito nel modo coretto");
    }
  }



  // mofifica del parametro
  public function setMail($mail)
  {
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $this->mail = $mail;
    } else {
      throw new Exception("questo non è un email");
    }
  }

  public function setNameLastname($name, $lastname)
  {
    if ($name != null && $lastname != null) {
      $this->name = $name;
      $this->lastname = $lastname;
    } else {
      throw new Exception("questo non è un");
    }
  }
}
