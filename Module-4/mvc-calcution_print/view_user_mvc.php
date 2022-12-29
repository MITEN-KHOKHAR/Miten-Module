<?php
require_once("controller/controler.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
        <form method="post" action="">
           Enter Your Value 1st : <input type="text" name="st" placeholder="Enter Your Value 1st *" required>
           <br><br>
           Enter Your Value 2nd : <input type="text" name="nd" placeholder="Enter Your Value 2nd *" required>
           <br><br>
           Enter Your Value 3rd : <input type="text" name="rd" placeholder="Enter Your Value 3rd *" required>
           <br><br>
           Enter Your Value 4th : <input type="text" name="th" placeholder="Enter Your Value 4th *" required>
           <br><br>
           <input type="submit" name="alcal" value="All Calcution">
        </form>
       </center>   
</body>
</html>