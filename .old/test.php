
<?php
// Die Session Starten 
session_start(); 

// Die Klasse Includieren 
include_once 'functions.php'; 

// Eine Neue Instanz der Klasse chart erstellen 
$chart = new chart(); 

// Prüfen ob der Warenkorb besteht 
$chart->initial_chart(); 

$chart->insertArtikel("Apfeltest", 4, 5, 20);

$chart->getChart();
?>