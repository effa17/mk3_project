<?php
$bil = 1;
$sql = "SELECT * FROM warden ORDER By namawarden";
$result =$conn->query($sql);
while ($row= $result->fetch_object()) {
    ?>
<tr>
    <td><?php echo $bil++; ?></td>
    <td><?php echo $row->namawarden; ?></td>
    <td><?php echo $row->nokpwarden; ?></td>
    <td><?php echo $row->katalaluan; ?></td>
    <td>
        <a href="index.php?menu=pelajar&edit=<?php echo $row->idwarden; ?>" class="btn-edit">Edit</a>

        <a href="padam.php?idwarden<?php echo $row->idwarden; ?>" onclick="return confirm('Adakah anda pasti?')" class="btn-edit">Padam</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>
