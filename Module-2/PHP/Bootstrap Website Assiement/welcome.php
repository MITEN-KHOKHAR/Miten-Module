<?php
session_start();
if(!isset($_SESSION["email"]))
{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body> 
    <h1>Congratation, <?php echo rtrim($_SESSION["email"],"@gmail.com"); ?><a href="logout.php" class="btn btn-danger" onclick="return confirm('Are you sure to logout!')">Logout Button Here...</a></h1>


</body>
</html>