<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;
    
  function __construct($id,$nom,$prenom){
    $this -> id = $id;
    $this -> nom = $nom;
    $this -> prenom = $prenom;
  }
  
  function getNom(){
     return $this -> nom;
  }
  
  function setNom($nom){
     $this -> nom = $nom;
  }
  
  function getPrenom(){
     return $this -> prenom;
  }
  
  function setPrenom($prenom){
     $this -> prenom = $prenom;
  }
  
  function __toString(){
     return $this->id."_".$this->nom." ".$this->prenom;
  }
}


class contact extends personne{
  protected $mail;
  function __construct($id,$nom,$prenom,$mail){
    parent::__construct($id,$nom,$prenom);
    $this->mail=$mail;
  }
  function __toString(){
    return parent::__toString()." : ".$this->mail;
  }
}
  $ozcan = new contact(1,"Ozcan","Ali","ali.ozcan@gmail.com");
  echo $ozcan;

?>