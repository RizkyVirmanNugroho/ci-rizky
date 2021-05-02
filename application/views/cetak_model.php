<?php

echo "<table border='1'>
<tr>
	<td>Merk</td>
	<td>Stock</td>
	<td>Sold</td>
	<td>Ready</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo 
	"<tr>";
	foreach ($row as $col => $cell){
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";