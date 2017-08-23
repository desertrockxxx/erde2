

<?php 

class chart{ 
     
    /** 
     *  
     * Initialisiert die Klasse, muss in jeder Seite ausgeführt werden. 
     */ 
    public function initial_chart() 
    { 
         
        $chart = array(); 
        if(!isset($_SESSION['chart'])) 
        { 
            $_SESSION['chart']=$chart; 
        }  

    } 
     
    /** 
     *  
     * Fügt einen Artikel in das Array ein 
     * @param unknown_type $fruit 
     * @param unknown_type $quantity 
     * @param unknown_type $price 
     * @param unknown_type $sum 
     */ 
    public function insertArtikel($fruit, $quantity, $price, $sum)
    { 
         
        $Artikel = array($fruit, $quantity, $price, $sum); 
        $chart = $_SESSION['chart']; 
        array_push($chart, $Artikel); 
        $_SESSION['chart'] = $chart; 
         
    } 
     
    /** 
     *  
     * Gibt Alle Artikel des Array in einer Tabelle aus. 
     */ 
    public function getChart() 
    { 
        $Array = $_SESSION['chart']; 
        echo "<div class='row'>";
        echo "<div class='col-lg-4'>";
        echo "<table class='table'>"; 
        echo "<thead><th>Fruit</th><th>Quantity</th><th>Preis</th><th>Summe</th></thead>"; 
        for($i = 0 ; $i < count($Array); $i++) 
        { 
            $innerArray = $Array[$i]; 
             
            echo "<tbody> 
            <td>$innerArray[0]</td> 
            <td>$innerArray[1]</td> 
            <td>$innerArray[2]</td> 
            <td>$innerArray[3]</td> 
            </tbody>"; 
        } 
         
        echo "</table></div></div>"; 
    } 
     
     
    /** 
     *  
     * Löscht den Waren Korb 
     */ 
    public function undo_chart() 
    { 
        $_SESSION['chart'] = array(); 
    } 
     
     
    /** 
     *  
     * Gibt einen Datensatz Zurück 
     * @param int $point 
     */ 
    public function get_chartValue_at_Point($n) 
    { 
         
        $Array = $_SESSION['chart'];             
        return $Array[$n]; 
         
    } 
     
    /** 
     *  
     * Entfernt ein Artikel am Point n 
     * @param int $point 
     */ 
    public function delete_chartValue_at_Point($point) 
    { 
        $Array = $_SESSION['chart']; 
        unset($Array[$point]); 
    } 
     
    /** 
     *  
     * Gibt die Anzahl der Artikel zurück 
     */ 
    public function get_chart_count() 
    { 
        return count($_SESSION['chart']); 
    } 
} 

?>