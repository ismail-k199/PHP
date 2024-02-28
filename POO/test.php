<?php
class Personne {
 private $cin;
 private $nom;
 private $tel;
 private $mail;
 public function __construct($cin,$nom,$tel,$mail) {
 $this->cin = $cin;
 $this->nom = $nom;
 $this->tel = $tel;
 $this->mail= $mail; }
 public function __toString() {
 $s = "les coordonnées de $this->nom 
 ayant le numéro de cin $this->cin sont: <br> 
 Téléphone: $this->tel <br> 
 Email: $this->mail"; 
 return $s;
 }
 }
 $p = new Personne(11171522,"ismail",27448935,"kaaniche24@gmail.com");
 echo $p;
 ?>