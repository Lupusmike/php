<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josias Wolff">
    <title>Document</title>
</head>
<body>
 
<?php 

//Query data

function msqlQ($database, $connection, $query) {
    
    $search_result = mysqli_query($connection, $query) or die("Fehler bei der Abfrage: <br>Vermutlich Tippfehler bei der Abfrage"); //Ergebnis wird abgefragt
    $result = mysqli_fetch_all($search_result, MYSQLI_BOTH); //Umbau zu assoziativem und nummerischen Array
    return $result;//[0][$value];
}

//show data

function show($array, $value) {// Array ist der msqlQ-Array, value die Nummer des Ergebnises oder True für alle Werte
    if ($value === True) {
      for ($i = 0; $i < count($array); $i++) {
        echo $array[$i][0], "<br>";
    }
    } else {
        echo $array[$value][0];
    }
}

//Insert data

function msqlI($connection, $insert) {
    $result = mysqli_query($connection, $insert) or die("Fehler bei Insert");
    return $result; 
}

//Delete data

function msqlD($connection, $delete) {
}


//$insert = mysqli_query($con,"INSERT INTO test (test, zahl) VALUES ('test3', 36)") or die("Insert Fehler");



?>

</body>
</html>