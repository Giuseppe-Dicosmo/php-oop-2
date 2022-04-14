<?php
class user
{
  public $name;
  public $lastname;
  protected $mail;
  protected $sconto = 0;

  function __construct($_name, $_lastname, $_mail)
  {
    // l'utente non puo inserire una stringa vuota e verifica una email se e valida
    $this->setName($_name);
    $this->setLastname($_lastname);
    $this->setMail($_mail);
  }

  public function getFullName()
  {
    return "{$this->setName} {$this->lastname}";
  }

  public function setName($_name)
  {
    if ($_name != null) {
      $this->name = $_name;
    }
  }

  public function setLastname($_lastname)
  {
    if ($_lastname != null) {
      $this->lastname = $_lastname;
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
}

// utente registrato
class registeredUser extends user
{

  private $password;

  function __construct($_name, $_lastname, $_mail, $_password)
  {
    // l'utente non puo inserire una stringa vuota e verifica una email se e valida
    // parent::__construct($_name, $_lastname, $_mail);
    $this->setName($_name);
    $this->setLastname($_lastname);
    $this->setMail($_mail);
    $this->setPassword($_password);
    $this->sconto = 20;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }
}
