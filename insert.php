<?php
include("output.php");
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="insert.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="head">Employers Data</h1>
    <form id="employe" action="function.php" method="POST">
        Name => <input id="data" type="text" name="name"><br><br><br><br><br>
        Email =><input id="data" type="email" name="email"><br><br><br><br>
        Mobile =><input id="data" type="mobile" name="mobile"><br><br><br><br>
        Date =><input id="data" type="date" name="date"><br><br><br><br><br>
        Work Time =><input id="data" type="number" name="time"><br><br><br><br><br>
        <input id="sub" type="submit" name="submit">
    </form>
    
    
    
</body>
</html>