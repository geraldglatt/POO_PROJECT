<?php

class Personne
{
    public string $nom;
    public string $prenom;
    public string $adresse;
    public int $date_de_naissance;

    public const ANNEE_EN_COURS = 2022;

    public function __construct($nom,$prenom,$adresse,$date_de_naissance) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->date_de_naissance = $date_de_naissance;
    }
    public function __toString()
    {
        $txt = "";
        $txt += "Son nom est ".$this->nom."<br/>";
        $txt += "Son prénom est ".$this->prennom."<br/>";
        $txt += "Son adresse est ".$this->adresse."<br/>";
        $txt += "Il est né en : ".$this->date_de_naissance."<br/>";
        return $txt;
    }

    public function calculAge($annee){
        return self::ANNEE_EN_COURS - $annee;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
}