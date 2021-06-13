<html>
<head>
<title> </title>
</head>
<body>
<?php
echo "<b>Daftar Angkatan<b>";
echo "<table border='1'";
echo "<tr>";
echo "<th>Tahun</th>";
echo "</tr>";
foreach($Angkatan as $row)
{
    echo "<tr>";
    echo "<td>". $row['tahun']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>