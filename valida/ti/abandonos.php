<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=normalize">
		<link rel="stylesheet" type="text/css" href="css/estilos2.css"/>
		<title>VizzTime - 3ra. Valida CAC.</title>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="http://vizztime.com/images/favicon32.png" />
</head>
	<body>
		<header>
			<img src="cac2016.png">
		</header>


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
		Abandonos 3ra. Valida CAC
		</div>



			<center>
				<table>
					<tr style="border:none; background: white;">
						<td><B>POS</B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
					</tr>
					<?php
						include("abandonos1.php");
						$con = new abandonos1();
						$con -> recuperardatos();
					?>
				</table>
		</center>




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
