<?php
//Création d'un instance de mon objet;
$date = new DateTime();

//voir dans mon objet
var_dump($date);

//Voir le timezone de mon objet
var_dump($date->getTimezone());


//Modifier ma date et ajouter un jour
$date->modify('+1 day');

//Revoir dans mon objet
var_dump($date);

//Modifier la date et le format
$formatDate = $date->modify('+1 day')->format('d-m-Y');

echo '<pre>';
var_dump($formatDate);
echo '</pre>';