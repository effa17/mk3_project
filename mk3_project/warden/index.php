<?php global $conn;
require '../include/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<table>
    <tr>SISTEM PERALATAN DAN ELEKTRIK</tr>
    <tr><th><a href="index.php?menu=home">HOME</a>
        <a href="index.php?menu=pelajar">SENARAI PELAJAR</a>
        <a href="index.php?menu=senaraiPeralatan">SENARAI PERALATAN</a></th></tr>
</table>
<?php
$menu = 'home'; #default value
if (isset($_GET['menu'])) {
    $menu=$_GET['menu'];
}
include "$menu.php";
?>

</body>
</html>