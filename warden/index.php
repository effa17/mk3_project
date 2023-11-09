<?php global $conn;
require '../include/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <title>Menu</title>
</head>
<body>
<table>
    <td>SISTEM PERALATAN DAN ELEKTRIK</td>
    <td><a href="index.php?menu=home">HOME</a>
        <a href="index.php?menu=product">SENARAI PELAJAR</a>
        <a href="index.php?menu=about">SENARAI PERALATAN</a></td>
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