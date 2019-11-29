<?php

class utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $motdepasse;
    private $pseudo;
    private $adresse;
    private $ville;
    private $zip;
    private $tel;
    public $conn;

function __construct($nom,$prenom,$pseudo,$email,$motdepasse,$adresse,$ville,$zip,$tel,$conn)
{
          $this->pseudo=$pseudo;
          $this->email=$email;
          $this->motdepasse=$motdepasse;
          $this->nom=$nom;
          $this->prenom=$prenom;
          $this->adresse=$adresse;
          $this->ville=$ville;
          $this->zip=$zip;
          $this->tel=$tel;
          $c=new config;
          $this->conn=$c->getConnexion();

  }


//Getters
function getNom()
{
return $this->nom;
}
function getPrenom()
{
  return $this->prenom;
}
function getEmail()
{
  return $this->email;
}

function getMotdepasse()
{
  return $this->motdepasse;
}

function getPseudo()
{
   return $this->pseudo;
}
function getAdresse()
{
  return $this->adresse;
}
function getVille()
{
  return $this->ville;
}
function getZip()
{
  return $this->zip;
}
function getTel()
{
  return $this->tel;
}
public function Logedin($conn,$email,$motdepasse)
{
  $req="select * from user where mail='$email' && mdp='$motdepasse'";
  $rep=$conn->query($req);
  return $rep->fetchAll();
}
//Getters

//Setters
function setNom($nom)
{
  $this->nom=$nom;
}
function setPrenom($prenom)
{
  $this->prenom=$prenom;
}

function setEmail($email)
{
  $this->email=$email;
}
function setMotdepasse($motdepasse)
{
 $this->motdepasse=$motdepasse;
}
function setPseudo($pseudo)
{
  $this->pseudo=$pseudo;
}

function setAdresse($adresse)
{
  $this->adresse=$adresse;
}
function setVille($ville)
{
  $this->ville=$ville;
}
function setZip($zip)
{
  $this->zip=$zip;
}
function setTel($tel)
{
  $this->tel=$tel;
}
//Setters
}

?>
