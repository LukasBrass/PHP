<?php
class contact {
	protected $id = 12;
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
     return $this->nom." ".$this->prenom;
  }
}
?>