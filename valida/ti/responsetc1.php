<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=normalize">
		<!-- <meta http-equiv="refresh" content="10;URL=http://cotopaxiautomovilclub.com/tre/1/ti/tc1.php" > -->
		<link rel="stylesheet" type="text/css" href="css/estilos2.css"/>
		<title>VizzTime</title>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="http://vizztime.com/images/favicon32.png" />

		</head>

	<body>
		<div class="tablare">
		<center>
				<table>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>TIEMPO</B></td>
						<td><small><font color='red'>Diferencia</br>Primero</small></font></td>
						<td><small><font color='#2E64FE'>Velocidad</br>Promedio</small></font></td>
					</tr>
					<?php
						include("conexiontc1.php");
						$con = new conexion11();
						$con -> recuperardatos();
					?>
				</table>
		</center>
		</div>
	</body>
</html>
