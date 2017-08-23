<?php
// Die Klasse Includieren 
include_once 'functions.php'; 

// Eine Neue Instanz der Klasse chart erstellen 
$chart = new chart(); 

// Prüfen ob der Warenkorb besteht 
$chart->initial_chart(); 

// post variablen
$quantity = $_POST['quantity'];
$fruit = $_POST['fruit'];

// preisbestimmung
if ($fruit == 'Banane') $price = 1;
if ($fruit == 'Erdbeere') $price = 2;
if ($fruit == 'Apfel') $price = 3;
if ($fruit == 'Himbeere') $price = 4;
if ($fruit == 'Mango') $price = 5;
if ($fruit == 'Kiwi') $price = 6;
if ($fruit == 'Orange') $price = 7;

// Preisberechnung: Summe = Anzahl * EinzelPreis
$sum = $quantity * $price;

if($quantity && $fruit){
    $chart->insertArtikel($fruit, $quantity, $price, $sum);
}

// getchart
$chart->getChart();

?>