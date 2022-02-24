<?php
require_once("Personne.class.php");


$personne = new Personne("Potter","Harry","Ecole Poudlard à Neuilly sur seine",1977);
echo "Son nom est : ".$personne->nom."<br/>";
echo "Son prénom est : ".$personne->prenom."<br/>";
echo "Son adresse est : ".$personne->adresse."<br/>";
echo "Il est né en  : ".$personne->date_de_naissance."<br/>";

echo "L'age de cette personne est de ".$personne->calculAge(1977)." ans !!!";

