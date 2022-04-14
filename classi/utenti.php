<?php
class user
{
  public $name;
  public $lastname;
  protected $mail;

  function __construct($_name = "", $_lastname = "", $_mail = "" )
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->mail = $_mail;
  }

  public function setMail($mail) {
    $this->mail = $mail;
  }

  // public function getMail() {
  // return $this->mail;
  // }
}
