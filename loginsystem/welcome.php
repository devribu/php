<?php
session_start();
if(isset($_SESSION["user"])){
include("bt.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php
echo "<h1>" . "welcome  " . $_SESSION["user"] . "</h1>";
?>

<br><form>
<button name="logout" type="submit" class="btn btn-primary">Logout</button>
</form>
  
</div>
</body>
</html>

<?php
if(isset($_GET["logout"])){
    session_destroy();
    header("Location: index.php");
}
}else{
    header("Location:index.php");
}
?>