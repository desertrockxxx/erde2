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
$kondition = $_POST['kondition'];

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

// Neue Einträge drin
if($quantity && $fruit && $kondition){
    
    // Position ermitteln
    $position = $chart->get_chart_count() + 1;
    
    // wenn fruit und kondition in Liste erhalten
    echo "<pre>frucht " . $fruit . "!";
    echo "quantity " . $quantity . "!</pre>";
    // dann addiere 2.te Quantity mit 1.te
    
    // dann addiere 2.te Summe mit 1.te
    
    // lösche 2.te Eintrag
    
    foreach($_SESSION['chart'] as $element){
        if($element[1] == $fruit && 
            $element[4] == $kondition)
        {
            echo "<h1>Banane!</h1>";    
        }
    }
    
    
    
    $chart->insertArtikel($position, $fruit, $quantity, $price, $kondition, $sum);
    
}





// var_dump($chart->get_chartValue_at_Point(0));
// var_dump($chart->get_chartValue_at_Point(1));



// if($chart->get_chartValue_at_Point(1) != null){
//     echo "nicht leer!";
// } else {
//     echo "ist leer!";
// }

// Nehmen löschen updaten
// echo "<b>test ";
// foreach($_SESSION['chart'] as $value){
//     echo $value[0];
//     echo $value[1];
//     echo $value[2];
//     echo $value[3];
//     echo $value[4];
// }
// echo "</b>";

//delete_chartValue_at_Point($point) 

//echo "<pre>";
//var_dump($_SESSION);
// echo "</pre>";

// getchart
$chart->getChart();

// löschen
// $chart->undo_chart();





?>