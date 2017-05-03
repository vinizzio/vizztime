<?php
	class conexioncat12 {
		function recuperardatos(){
			$con = pg_connect("host=server dbname=basedatos user=usuario password=password")
		    or die('No se ha podido conectar: ' . pg_last_error());

	$query = "SELECT ROW_NUMBER() OVER(ORDER BY (prime1+prime2::interval+prime3::interval+prime4::interval+penal1::interval)), num, cat, piloto, prime1, prime2, prime3, prime4, penal1, (prime1+prime2::interval+prime3::interval+prime4::interval+penal1::interval-menos) as total, (prime1+prime2::interval+prime3::interval+prime4::interval+penal1::interval)-(select min((prime1+prime2::interval+prime3::interval+prime4::interval+penal1::interval)) from prov3cac where cat = 'INT' and  prime1 <> '00:00:00' and prime2 <> '00:00:00' and prime3 <> '00:00:00' and prime4 <> '00:00:00') AS dif FROM prov3cac where cat ='INT' and estado = 'v' and  prime1 <> '00:00:00' and prime2 <> '00:00:00' and prime3 <> '00:00:00' and prime4 <> '00:00:00' ORDER BY estado DESC, total ASC";
	$resultado = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

	while ($fila = pg_fetch_array($resultado)) {

        echo "<tr>";
        echo "<td><center><font size=6 color='green'>$fila[row_number]</font><center></td>";
        echo "<td>$fila[num]</td>";
        echo "<td>$fila[cat]</td>";
        echo "<td>$fila[piloto]</td>";
        echo "<td>$fila[prime1]</td>";
        echo "<td>$fila[prime2]</td>";
        echo "<td>$fila[prime3]</td>";
        echo "<td>$fila[prime4]</td>";
        echo "<td>$fila[penal1]</td>";
        echo "<td>$fila[total]</td>";
        echo "<td><font color='red'>$fila[dif]</font></td>";
        echo "</tr>";
}
}
}
?>
