<?php
require '../include/conn.php';

// Fetch and display the list of students
$query = "SELECT * FROM pelajar"; // Modify this query according to your database schema
$result = mysqli_query($conn, $query);

echo "<h1>SENARAI PELAJAR</h1>";
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li><a href='senaraiPeralatan.php?idpelajar=" . $row['idpelajar'] . "'>" . $row['nampelajar'] . "</a></li>";
}
echo "</ul>";

mysqli_close($conn);
?>
