<?php
	class conexion1 {
		function recuperardatos(){
	$con = pg_connect("host=server dbname=basedatos user=usuario password=password")
    or die('No se ha podido conectar: ' . pg_last_error());

		$query = "SELECT ROW_NUMBER() OVER(ORDER BY prime1), num, cat, piloto, prime1, prime1-(select min(prime1) from prov3cac where prime1 <> '00:00:00') as dif, ROUND((4/(to_char(((prime1)::time),'MI.SS')::numeric *60))*3600) as velocidad  FROM prov3cac where prime1 <> '00:00:00' ORDER BY prime1 ASC";
		$resultado = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

	while ($fila = pg_fetch_array($resultado)) {

        echo "<tr>";
        echo "<td><center><font size=6 color='green'>$fila[row_number]</font><center></td>";
        echo "<td>$fila[num]</td>";
        echo "<td>$fila[cat]</td>";
        echo "<td>$fila[piloto]</td>";
        echo "<td><font color='green'>$fila[prime1]</td>";
        echo "<td><font color='red'><small>$fila[dif]</small></font></td>";
        echo "<td align='right'><font color='#2E64FE'><small>$fila[velocidad]</br>km/h</small></font></td>";
        echo "</tr>";
}

}
}

?>
