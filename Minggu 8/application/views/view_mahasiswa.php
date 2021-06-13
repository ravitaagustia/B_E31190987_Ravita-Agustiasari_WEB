<html>
<head>
<title> </title>
</head>
<body>
<?php 
echo "<b>Nama Mahasiswa dan Prodi<b>";
echo "<table border='1'";
echo "<tr>";
echo "<th>Nama</th>";
echo "<th>Prodi</th>";
echo "</tr>";
foreach($Mahasiswa as $row)
{
    echo "<tr>";
    echo "<td>". $row['nama']."</td>";
    echo "<td>". $row['prodi']."</td>";
    echo "</tr>";
    
}
echo "</table>";
echo "</br>";
?>
</body>
</html>