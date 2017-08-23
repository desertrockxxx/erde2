<?php 
require_once("dbconfig.php");

$fruit = "";
$kondition = "";
$sackGroesse = "";
$topfGroesse = "";
$laenge = "";
$breite = "";
$hoehe = "";
$quantity = "";
$price = "";

$fruit = $_POST["fruit"];
$kondition = $_POST["kondition"];
$sackGroesse = $_POST["sackGroesse"];
$topfGroesse = $_POST["topfGroesse"];
$laenge = $_POST["laenge"];
$breite = $_POST["breite"];
$hoehe = $_POST["hoehe"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

if(isset($quantity)){

    if(!isset($fruit)) $fruit = "";
    if(!isset($kondition)) $kondition = "";
    if(!isset($sackGroesse)) $sackGroesse = "";
    if(!isset($topfGroesse)) $topfGroesse = "";
    if(!isset($laenge)) $laenge = "";
    if(!isset($breite)) $breite = "";
    if(!isset($hoehe)) $hoehe = "";
    if(!isset($quantity)) $quantity = "";
    if(!isset($price)) $price = "";

    try{
    $sql = "INSERT INTO liste(fruit, kondition, sackGroesse, topfGroesse, laenge, breite, hoehe, quantity, price) 
            VALUES (:fruit, :kondition, :sackGroesse, :topfGroesse, :laenge, :breite, :hoehe, :quantity, :price)";
            // prepare statement                                      
            $stmt = $conn->prepare($sql);
            
            // bind parameters
            $stmt->bindParam(':fruit', $fruit, PDO::PARAM_STR);       
            $stmt->bindParam(':kondition', $kondition, PDO::PARAM_STR);
            $stmt->bindParam(':sackGroesse', $sackGroesse, PDO::PARAM_STR);
            $stmt->bindParam(':topfGroesse', $topfGroesse, PDO::PARAM_STR);
            $stmt->bindParam(':laenge', $laenge, PDO::PARAM_STR);
            $stmt->bindParam(':breite', $breite, PDO::PARAM_STR);
            $stmt->bindParam(':hoehe', $hoehe, PDO::PARAM_STR);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_STR);
            $stmt->bindParam(':price', $price, PDO::PARAM_STR);
            
            // execute                                
            $stmt->execute();
        
        echo "yay";
        
        require_once("test.php");
    } 
    catch (Exception $e) 
    {
        echo "Fehlercode: ". $e;
    }
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom-->
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    
    <!--Selectpicker-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

</head>
<body>
    
    
    
<select class="selectpicker" data-width="auto" id="custom-select">
    <option selected>select fruit</option>
    <option value="Banane">Banane</option>
    <option value="Erdbeere">Erdbeere</option>
    <option value="Apfel">Apfel</option>
    <option value="Himbeere">Himbeere</option>
    <option value="Mango">Mango</option>
    <option value="Kiwi">Kiwi</option>
    <option value="Orange">Orange</option>
</select>


<div class='col-lg-12'>
    <div class='row'>
        <div class='col-lg-4'>
            <div class='sack box form-group' id="sack" style="display:none;"><h1>Sack</h1> 
                <form method='post' action='index.php'>
                    <input class='hidden' type='text' value='sack' name='kondition'/>
                    <input type='text' class='fruit hidden' id='fruit1' name='fruit'/>
                    <div>
                        <label for="topfGroesse">Größe:</label>
                        <select class="selectpicker" data-width="auto" name="topfGroesse">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div>
                        <label for="quantity">Menge:</label>
                        <input type='number' class="form-control" width="" min='1' max='100' value='1' name='quantity'/>
                    </div>
                    <div>
                        <input type='submit' value='Submit'/>
                    </div>
                </form>   
            </div>
        </div>
    
        
        <div class='col-lg-4'>
            <div class='topf box form-group' id="topf" style="display:none;"><h1>Topf</h1> 
                <form method='post' action='index.php'>
                    <input class='hidden' type='text' value='topf' name='kondition'/>
                    <input type='text' class='fruit hidden' id='fruit2' name='fruit'/>
                    <div>
                        <label for="topfGroesse">Größe:</label>
                        <select class="selectpicker" data-width="auto" name="topfGroesse">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div>
                        <label for="quantity">Menge:</label>
                        <input type='number' class="form-control" min='1' max='100' value='1' name='quantity'/>
                    </div>
                    <div>
                        <input type='submit' value='Submit'/>
                    </div>
                </form>   
            </div>
        </div>
        
        <div class='col-lg-4'>
            <div class='lose box form-group' id="lose" style="display:none;"><h1>Lose</h1> 
                <form method='post' action='index.php'>
                    <input class='hidden' type='text' value='lose' name='kondition'/>
                    <input type='text' class='fruit hidden' id='fruit3' name='fruit'/>
                    <div>
                        <label for="x">Länge:</label>
                        <input type='number' class="form-control" onchange='rechnung();' id='x' min='1' max='100' value='1'/>
                    </div>
                    <div>
                        <label for="y">Breite:</label>
                        <input type='number' class="form-control" onchange='rechnung();' id='y' min='1' max='100' value='1'/>
                    </div>
                    <div>
                        <label for="z">Höhe:</label>
                        <input type='number' class="form-control" onchange='rechnung();' id='z' min='1' max='100' value='1'/>
                    </div>
                    <div>
                        <label for="quantity">Menge:</label>
                        <input type='number' class="form-control" id='quantity' name='quantity'/>
                    </div>
                    <div>
                        <input type='submit' value='Submit'/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="application/javascript">
/*global $*/
$(function () {
  $("#custom-select").change(function() {
    var val = $(this).val();
    var kondition;
    
    var fruit = $("#fruit1").val(val) +
            $("#fruit2").val(val) +
            $("#fruit3").val(val); 
    
    switch(val){
        case "Banane":
            kondition = 1;
            fruit;
            break;
        case "Erdbeere":
            kondition = 2;
            fruit;
            break;
        case "Apfel":
            kondition = 3;
            fruit;
            break;
        case "Himbeere":
            kondition = 4;
            fruit;
            break;
        case "Mango":
            kondition = 5;
            fruit; 
            break;
        case "Kiwi":
            kondition = 6;
            fruit;
            break;
        case "Orange":
            kondition = 7;
            fruit;
            break;    
        default:
            kondition = 0;
            fruit; 
            break;
    }

    switch(kondition){
        case 1:
            $("#sack").show();
            $("#topf").hide();
            $("#lose").hide();
            break;
        case 2:
            $("#sack").hide();
            $("#topf").show();
            $("#lose").hide();
            break;
        case 3:
            $("#sack").hide();
            $("#topf").hide();
            $("#lose").show();
            break;
        case 4:
            $("#sack").hide();
            $("#topf").show();
            $("#lose").show();
            break;
        case 5:
            $("#sack").show();
            $("#topf").hide();
            $("#lose").show();
            break;
        case 6:
            $("#sack").show();
            $("#topf").show();
            $("#lose").hide();
            break;
        case 7:
            $("#sack").show();
            $("#topf").show();
            $("#lose").show();
            break;    
        default:
            $("#sack").hide();
            $("#topf").hide();
            $("#lose").hide();
            break;
    }

  });
});

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
    
    
    
    
    
</body>
</html>