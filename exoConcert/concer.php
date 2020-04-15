<?php

class ConcertPlace {
  public $artist;
  public $date;
  public $placeNumber;
  public $clientName;
  public $location;

  function __construct($artist, $date, $location, $clientName, $placeNumber = null) {

    $this->artist = $artist;
    $this->location = $location;
    $this->date = $date;
    $this->$clientName = $clientName;
    if (!is_null($placeNumber)) {
      $this->$placeNumber = $placeNumber;
    }
  }

  function showTicketDetail()
  {
    $showTicketContent = "
    <p>Artiste : $this->artist </p>
    <p>Lieu du concert : $this->location </p>
    <p>Date du concert : $this->date </p>
    <p>Lieu du concert : $this->clientName </p>
    ";
    if (!is_null($this->placeNumber)) {
      $showTicketContent = $showTicketContent + "<p>Place du ticket : $this->placeNumber </p>";
    }
    return $showTicketContent;
  }
}
$ticket01 = new ConcertTicket("BigFlo & Oli", "27.03", "Marseille", "1", "Julie");
echo ($ticket01->showTicketDetail());
