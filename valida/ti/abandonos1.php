<?php
	class abandonos1 {
		function recuperardatos(){
			$con = pg_connect("host=server dbname=basedatos user=usuario password=password")
		    or die('No se ha podido conectar: ' . pg_last_error());

	$query = "SELECT ROW_NUMBER() OVER(ORDER BY cat), num, cat, piloto FROM prov3cac where estado = 'ST' ORDER BY cat ASC";
	$resultado = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

	while ($fila = pg_fetch_array($resultado)) {

        echo "<tr>";
        echo "<td><center><font size=6 color='green'>$fila[row_number]</font><center></td>";
        echo "<td>$fila[num]</td>";
        echo "<td>$fila[cat]</td>";
        echo "<td>$fila[piloto]</td>";
        echo "</tr>";
}
}
}
?>
