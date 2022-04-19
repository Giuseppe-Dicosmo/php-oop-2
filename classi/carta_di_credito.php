<?php
class card
{
  private $nameLastname;
  private $cardNumber;
  private $deadline;
  private $cvv;

  function __construct($_nameLastname, int $_cardNumber, $_deadline, int $_cvv)
  {
    $this->setNameLastname($_nameLastname);
    $this->setCardNumber($_cardNumber);
    $this->setDeadline($_deadline);
    $this->setCvv($_cvv);
  }

  public function setNameLastname($_nameLastname)
  {
    $this->nameLastname = $_nameLastname;
  }

  public function getNameLastname()
  {
    return $this->nameLastname;
  }


  public function setCardNumber($_cardNumber)
  {
    if (strlen($_cardNumber) == 16) {
      $this->cardNumber = $_cardNumber;
    } else {
      throw new Exception("numero carta sbagliato");
    }
  }

  public function getCardNumber()
  {
    return $this->cardNumber;
  }


  public function setDeadline($_deadline)
  {
    if (date("m-y") > $_deadline ) {
      $this->deadline = $_deadline;
    } else {
      throw new Exception("carta scaduta");
    }
  }

  public function getDeadline()
  {
    return $this->deadline;
  }


  public function setCvv($_cvv)
  {
    if (strlen($_cvv) == 3) {
      $this->cvv = $_cvv;
    } else {
      throw new Exception("cvv sbagliato");
    }
  }

  public function getCvv()
  {
    return $this->cvv;
  }
}
