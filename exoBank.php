<?php
class BankClient{
  private $name;
  private $account;


public function __construct($name, $account){
 $this->name = $name;
 $this->account = $account;
}

public function getAccountNumber(){
    echo ($this->account);
  }
}
$client = new BankClient ("A", 1111);

$client->getAccountNumber();
 ?>
 <!-- // Exercice :
 // Créez une classe représentant un client d’une banque avec :
 // - un constructeur
 // - un attribut privé pour le nom
 // - un attribut privé pour le numero de compte en banque
 // - une méthode pour connaître le numero de compte en banque
 //
 // Dans un algorithme, créez une instance de cette classe et afficher le numéro de compte en banque d’un client. -->
