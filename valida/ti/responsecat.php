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
					<B><span style="color : green; font-size : 1.1em;">+ 2000 - Turbos - N</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat1.php");
					$con = new conexioncat11();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">Turbos - Integral - INT</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat2.php");
					$con = new conexioncat12();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">1651 a 2050cc - T4</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat3.php");
					$con = new conexioncat13();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">1451 a 1650cc - T3</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat4.php");
					$con = new conexioncat14();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">1251 a 1450cc - T2</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat5.php");
					$con = new conexioncat15();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">0 a 1250cc - T1</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat6.php");
					$con = new conexioncat16();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>


			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">Jeeps- SUV - TT</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat7.php");
					$con = new conexioncat17();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">Camionetas - CAM</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat8.php");
					$con = new conexioncat18();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">Tubulares - TUB</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat9.php");
					$con = new conexioncat19();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">UTV'S 0 a 900 - UTV1</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat10.php");
					$con = new conexioncat20();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

			<center>
				<table>
					<B><span style="color : green; font-size : 1.1em;">UTV'S + 900 - UTV2</span></B>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>PRIME 1</B></td>
						<td><B>PRIME 2</B></td>
						<td><B>PRIME 3</B></td>
						<td><B>PRIME 4</B></td>
						<td><B>PENAL.</B></td>
						<td><B>TOTAL</B></td>
						<td><small><font color='red'>DIF.</small></font></td>
					</tr>
				<?php
					include("conexioncat11.php");
					$con = new conexioncat21();
					$con -> recuperardatos();
				?>
				</table>
			</center>
			</br>

		</div>
	</body>
</html>
