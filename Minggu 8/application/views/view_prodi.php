<html>
<head>
<title> </title>
</head>
<body>
<?php
echo "<b>Daftar Prodi Jurusan Teknologi Informasi<b>";
echo "<table border='1'";
echo "<tr>";
echo "<th>Prodi</th>";
echo "<th>Keterangan</th>";
echo "</tr>";
foreach($Prodi as $row)
{
    echo "<tr>";
    echo "<td>". $row['prodi']."</td>";
    echo "<td>". $row['keterangan']."</td>";
    echo "</tr>";
}
echo "</table>";
echo "</br>";
?>
</body>
</html>