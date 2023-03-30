<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josias Wolff">
    <title>MySQL Verarbeitung</title>
</head>
<body>

<form action="" method="post">
    Database <input type="text" name="database" value="StandartDatenbank"> <br>
    Table <input type="text" name="table" value="StandartTabelle"> <br>
    Select <input type="text" name="select" value="StandartSelect"> <br>
    <input type="submit" name="submit" value="GO"> <br>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["database"]) and isset($_POST["select"]) and isset($_POST["table"])) {
        include 'functions.php';
        //importiert input from index.php
        $database = $_POST["database"];
        $select = $_POST["select"];
        $table = $_POST["table"];

        //Connection
        $con = mysqli_connect("localhost", "root","", $database) or die ("Keine Verbindung");
        mysqli_select_db($con,$database) or die ("Datenbank existiert nicht!");
        
        
        $sql = "SELECT $select FROM $table;";
        $sql2 = "INSERT (v2, 01) into test;"; #Für Insert
        
        //msqlI($con, "Insert into test (test, zahl) values ('test4', 123);");
        
        $ergebnis = msqlQ($database, $con , $sql);
        
        show($ergebnis, True);

        show($ergebnis, 1);
    }
}
?>  

<form action="<?php msqlI($con, $sql2) ?>"><input type="submit" name="submit"></form>
</body>
</html>