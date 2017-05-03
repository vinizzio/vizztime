
<?php
$con = pg_connect("host=server dbname=basedatos user=usuario password=password")
	or die('No se ha podido conectar: ' . pg_last_error());

		$query = "INSERT INTO prov3cac (num, cat, piloto, marca, provincia, prime1, prime2, prime3, prime4,  estado, penal1, menos)
		VALUES ('$_POST[num]','$_POST[cat]','$_POST[piloto]','$_POST[marca]','$_POST[provincia]','$_POST[prime1]','$_POST[prime2]','$_POST[prime3]','$_POST[prime4]','$_POST[prime5]','$_POST[estado]','$_POST[penal1]','$_POST[menos]')";
		$result = pg_query($query);
		echo "<script language='javascript'>
		window.location.href = 'http://www.vizztime.com/valida3/ti/agregar.php';

		</script>";
?>
