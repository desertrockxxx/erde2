<!--Eingabe
Sortenauswahl wählen
-->
<form method="get" action="index.php">
  <select name="fruits" multiple="multiple">
    <option>Erdbeere</option>
    <option>Banane</option>
    <option>Apfel</option>
    <option>Himbeere</option>
    <option>Mango</option>
    <option>Kiwi</option>
    <option>Orange</option>
  </select>
  <input type="submit" value="Submit"/>
</form>


<!-- Ajax Tests: Bei TextEingabe sofortige TextAusgabe -->
<form action=""> 
Eingabe: <input type="text" id="txt1" onkeyup="txtEingabe(this.value)">
</form>

<p>Sofortige Ausgabe: <span id="txtAusgabe"></span></p> 

<script>
function txtEingabe(str) {
  var xhttp;
  if (str.length == 0) {// wenn kein Eintrag dann kein Text 
    document.getElementById("txtAusgabe").innerHTML = ""; //
    return; //
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() { //
    if (this.readyState == 4 && this.status == 200) { // Überprüfen ob alles Ok
      document.getElementById("txtAusgabe").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "test.php?q="+str, true);
  xhttp.send();   
}
</script>
