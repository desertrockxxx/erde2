


<!--Verarbeiten und Anzeigen
Kaufoptionsmöglichkeiten anzeigen-->


<!-- Verarbeitung:

if 'Banane' gewählt,
dann zeige Option 1

if 'Erdbeere' gewählt,
dann zeige Option 2 -->

<?php 
$option = "";

if ($_GET['fruits'] == 'Banane') $option = 1;
if ($_GET['fruits'] == 'Erdbeere') $option = 2;
if ($_GET['fruits'] == 'Apfel') $option = 3;
if ($_GET['fruits'] == 'Himbeere') $option = 4;
if ($_GET['fruits'] == 'Mango') $option = 5;
if ($_GET['fruits'] == 'Kiwi') $option = 6;
if ($_GET['fruits'] == 'Orange') $option = 7;

?>


<!-- Anzeige: 

<!-- Boxen
box1 = sack
box2 = lose
box3 = topf
-->
<?php 
// Auswahlformen
$dimension = "<form method='get' action='kauf.php'>
              <input type='number' name='x'/>
              <input type='number' name='y'/>
              <input type='number' name='z'/>
              <input type='submit' value='Submit'/>
            </form>";


$menge = "<form method='get' action='kauf.php'>
          <input type='number' name='quantity'/>
          <input type='submit' value='Submit'/>
        </form>";

?>

<?php

$sack = "<div class='sack box'>sack" . $menge . "</div>";
$topf = "<div class='topf box'>topf" . $menge . "</div>";
$lose = "<div class='lose box'>lose" . $dimension . "</div>";

$row = "<div class='row'>";
$leerdiv = "<div class='col-lg-3'>leer</div>";

$collg3 = "<div class='col-lg-3'>";
$collg2 = "<div class='col-lg-2'>";
$divend = "</div>";



?>


<!--
Option 1:
<div 6><div 6>

Option 2:
<div 12>

if option = 1 then div = 6;
if div = 12 then put hidden in div2
-->

<!-- Switch Case-->

<?php
switch ($option) {
  case 1:
    $string = $row .
    $leerdiv .
    $collg3 . $sack . $divend .
    $collg3 . $topf . $divend .
    $divend;
    
    echo $string;
    break;
  
  case 2:
    $string = $row .
    $leerdiv .
    $collg3 . $sack . $divend .
    $collg3 . $lose . $divend .
    $divend;
    
    echo $string;
    break;
  
  case 3:
    $string = $row .
    $leerdiv .
    $collg3 . $topf . $divend .
    $collg3 . $lose . $divend .
    $divend;
    
    echo $string;
    break;
  
  case 4:
    $string = $row .
    $leerdiv .
    $collg3 . $sack . $divend .
    $divend;
    
    echo $string;
    break;
  
  case 5:
    $string = $row .
    $leerdiv .
    $collg3 . $topf . $divend .
    $divend;
    
    echo $string;
    break;
    
  case 6:
    $string = $row .
    $leerdiv .
    $collg3 . $lose . $divend .
    $divend;
    
    echo $string;
    break;
    
  case 7:
    $string = $row .
    $leerdiv .
    $collg2 . $sack . $divend .
    $collg2 . $topf . $divend .
    $collg2 . $lose . $divend .
    $divend;
    
    echo $string;
    break;
  
  default:
    $string = $row .
    $leerdiv .
    $divend;
    
    echo $string;
    break;
}
?>