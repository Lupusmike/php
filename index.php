<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Josias Wolff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>
<body>
<form action="query.php" method="post">
    Datenbank: &nbsp;
    <input type="text" name="database">
    <br>
    Tabelle: &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" name="table">
    <br>
    Select: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="text" name="select">
    <br>
    <input type="submit" name="submit">
</form>
<!--
<form action="" method="post">
    <input type="text" name=<?php include 'functions.php'; 
    if (isset($_POST[$con])) {msqlI($_POST[$con], $_POST[$insert]);} ?>>
</form>
-->
<?php 



?>

</body>
</html>