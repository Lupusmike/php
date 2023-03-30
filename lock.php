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

<form action="" method="post">
    Passwort: <input type="text" name="pw">
    <input type="submit" name="submit">
</form>

<?php 

$rpw = "123"; //Right passord

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pw = $_POST["pw"];
    echo $pw;
    if ($pw == $rpw) {
        header("refresh=1.5;url=index.php");
    }
}

?>

</body>
</html>