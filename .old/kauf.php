
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

<!-- Auswahl in Tabelle speichern und Quantity ändern können-->
<div class="col-lg-4">
<table class="table">
  <thead>
  <tr>
    <th>Fruit</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Sum</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><?php echo $fruit;?></td>
    <td><?php echo $quantity;?></td>
    <td><?php echo $price;?>,- €</td>
    <td><?php echo $sum;?>,- €</td>
  </tr>
  </tbody>
</table>
</div>

<!-- zum Index-->
<a href="index.php"><input 
type="button" value="Zum Index"/></a>


<!--sessionlöschen-->
<a href="delsession.php"><input 
type="button" value="lösche Session"/></a>

<!--Session sollen alle Einkäufe im Array auflisten-->



    
</body>
</html>