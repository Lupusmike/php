<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josias Wolff">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
---------------------------My stuff
<form action="" method="post">
    Aktion: <select type="select" name="selected_option">
              <option value="select">Select</option>
              <option value="insert">Insert</option>
              <option value="delete">Delete</option>
            </select> <br>
    <input  type="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { //Fordert Post um Code auszuführen
    if ($_POST["selected_option"] == "select") {
        header("refresh:1;url=query.php");
    }
    if ($_POST["selected_option"] == "insert") {}
    if ($_POST["selected_option"] == "delete") {}
}

?>