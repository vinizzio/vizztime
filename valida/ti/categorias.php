<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="css/estilos2.css"/>
		<title>VizzTime - 3ra Valida CAC.</title>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="http://vizztime.com/images/favicon32.png" />
		<script src="ajaxc.js"></script>
</head>
	<body>
		<header>
			<img src="cac2016.png">
		</header>


		<div class="tituloresul">
		3ra. Valida Provincial CAC
		</div>
		<nav>
			<ul>
				<li><a href="http://www.vizztime.com">Inicio</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/tc1.php">TC1</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/tc2.php">TC2</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/tc3.php">TC3</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/tc4.php">TC4</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/tc5.php">TC5</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/categorias.php">Categorias</a></li>
				<li><a href="http://www.vizztime.com/valida3/ti/general.php">General</a></li>
			</ul>
		</nav>
		<div class="tituloresul">
		Clasificación por Categorías
		</div>

		<div id="recargado">

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
		<div class="tituloresul">
			<a href="http://vizztime.com/valida3/ti/abandonos.php">Abandonos</a>
		</div>



		</br>
			<div class="vizzt"> <img src="vizztimeok.jpg"> </div>
			</br>


	 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73121669-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
