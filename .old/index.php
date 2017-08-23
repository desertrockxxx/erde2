
<?php
// Die Session Starten 
session_start(); 
require_once("warenkorb.php");
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>change demo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/css/style.css" type="text/css" />
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    
    
<!--<input type="submit" class="button" name="insert" value="insert" />-->
<!--<input type="submit" class="button" name="select" value="select" />-->

<!--<script>-->
<!--$(document).ready(function(){-->
<!--    $('.button').click(function(){-->
<!--        var clickBtnValue = $(this).val();-->
<!--        var ajaxurl = 'ajax.php',-->
<!--        data =  {'action': clickBtnValue};-->
<!--        $.post(ajaxurl, data, function (response) {-->

<!--            alert("action performed successfully");-->
<!--        });-->
<!--    });-->

<!--});-->
<!--</script>-->
    
    

 
<!-- test javascript auswahl -->
<h2>Select a fruit from the list.</h2>

<select id="mySelect" onchange="myFunction()">
  <option value="Erdbeere">Erdbeere
  <option value="Banane">Banane
  <option value="Apfel">Apfel
  <option value="Himbeere">Himbeere
  <option value="Mango">Mango
  <option value="Kiwi">Kiwi
  <option value="Orange">Orange
</select>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    
    var y;
    switch(x) {
    case 'Erdbeere': 
        y = 1; // sack topf
        break;
    case 'Banane':
        y = 2; // sack lose
        break;
    case 'Apfel': 
        y = 3; // topf lose
        break;
    case 'Himbeere':
        y = 4; // sack
        break;
    case 'Mango':
        y = 5; // topf
        break;
    case 'Kiwi':
        y = 6; // lose
        break;
    case 'Orange':
        y = 7; // sack topf lose
        break;
    default:
        break;
    }
    
    // was wurde ausgewählt?
    // if submit click get class sack, topf or lose
    // paste in id kondition
    

    var dimension = "<form method='post' action='index.php'>" +
              "<input type='number' onchange='rechnung();' id='x' name='x' min='1' max='100' value='1'/>" +
              "<input type='number' onchange='rechnung();' id='y' name='y' min='1' max='100' value='1'/>" +
              "<input type='number' onchange='rechnung();' id='z' name='z' min='1' max='100' value='1'/>" +
              
              "<input class='hidden' type='text' value='"+ x +"' name='fruit'/>" +
              
              // sack topf oder lose?
              // "<input class='hidden' type='text' value='' id='konditon' name='kondition'/>" +
              //
              
              "<input type='number' id='quantity' name='quantity'/>" +
              "<input type='submit' value='Submit'/>" +
              "</form>";


     var menge = "<form method='post' action='index.php'>" +
     
              "<input class='hidden' type='text' value='"+ x +"' name='fruit'/>" +
              
              // sack topf oder lose?
              // "<input class='hidden' type='text' value='' id='konditon' name='kondition'/>" +
              //
              
              "<input type='number' min='1' max='100' value='1' name='quantity'/>" +
              "<input type='submit' value='Submit'/>" +
              "</form>";
    
    var sack = "<div class='sack box' id='sack'>sack" + menge + "</div>";
    var topf = "<div class='topf box' id='topf'>topf" + menge + "</div>";
    var lose = "<div class='lose box' id='lose'>lose" + dimension + "</div>";
    
    var row = "<div class='row'>";
    var leerdiv = "<div class='col-lg-3'>leer</div>";
    
    var collg3 = "<div class='col-lg-3'>";
    var collg2 = "<div class='col-lg-2'>";
    var divend = "</div>";

    // was wurde ausgewählt?
    
    
    switch(y) {
    case 1:
        // document.getElementById("demo").innerHTML = "<div class='box'> " + x + "</div>";

        var string = row +
        leerdiv +
        collg3 + sack + divend +
        collg3 + topf + divend +
        divend;
        
        document.getElementById("demo").innerHTML = string;
        break;
    case 2:
        var string = row +
        leerdiv +
        collg3 + sack + divend +
        collg3 + lose + divend +
        divend;

        document.getElementById("demo").innerHTML = string;
        break;
    case 3:
        var string = row +
        leerdiv +
        collg3 + topf + divend +
        collg3 + lose + divend +
        divend;
        
        document.getElementById("demo").innerHTML = string;
        break;
        
    case 4:
        var string = row +
        leerdiv +
        collg3 + sack + divend +
        divend;
 
        document.getElementById("demo").innerHTML = string;
        break;
        
    case 5:
        var string = row +
        leerdiv +
        collg3 + topf + divend +
        divend;
 
        document.getElementById("demo").innerHTML = string;
        break;  
        
    case 6:
        var string = row +
        leerdiv +
        collg3 + lose + divend +
        divend;
 
        document.getElementById("demo").innerHTML = string;
        break; 
        
    case 7:
        var string = row +
        leerdiv +
        collg2 + sack + divend +
        collg2 + topf + divend +
        collg2 + lose + divend +
        divend;
 
        document.getElementById("demo").innerHTML = string;
        break;  
    
    default:
        break;
    }
}

// Berechnung der Dimension
function rechnung() {
var x = document.getElementById("x").value;
var y = document.getElementById("y").value;
var z = document.getElementById("z").value;

parseInt(x);
parseInt(y);
parseInt(z);

var sum = x * y * z;

document.getElementById("quantity").value = sum; 
}
</script>






<!-- Zum Warenkorb-->
<!--<a href="kauf.php"><input -->
<!--type="button" value="Zum Warenkorb"/></a>-->

<!--sessionlöschen-->
<!--<a href="delsession.php"><input -->
<!--type="button" value="lösche Session"/></a>-->

<!--Kauf
Bezahlmethoden anzeigen

-->




 
</body>
</html>