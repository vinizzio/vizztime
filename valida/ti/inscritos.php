<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=normalize">
		<link rel="stylesheet" type="text/css" href="css/estilos2.css"/>
		<title>3ra. Válida Provincial 2016</title>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="/images/favicon32.png" />
		
</head>
	<body>
				<header>
				<img src="cac2016.png">
				</header>

		<div class="tituloresul">
			<a href="http://vizztime.com"><span>Inicio</span></a>
			Inscritos 3ra. Válida Provincial CAC
			
		</div>
		</br>
		            <center>
				<table>

					<tr style="border:none; background: white;">
						<td><B> </B></td>
						<td><B>Nº</B></td>
						<td><B>CAT</B></td>
						<td><B>PILOTO / COPILOTO</B></td>
						<td><B>MARCA</B></td>
						<td><B>PROVINCIA</B></td>
				<?php
					include("conexion12.php");
					$con = new conexion19();
					$con -> recuperardatos();
				?>
				</table>	
			</center>
	       
</br>
 <div class="resultados">
		
	</div>
<div class="vizzt"></br>
				<a href="http://www.vizztime.com"><img src="vizztimeok.jpg"></a></br></br>
			</div>
	
	
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