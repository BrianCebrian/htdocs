<!DOCTYPE html>	
<html lang="ES">
<head>
	<meta charset="utf-8">
	<title>Titulo</title>
	<meta name="author" content="Brian Cebrian Lugones">
	<meta name="description" content="web">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="C:\Users\Desarrollo\Desktop\html\favicon.ico">
	<style> 
		table, th, td{
			border:1px solid black;
			text-align:left;
		}
		table{
			border-collapse:collapse;
			width:100%;
		}
		th, td{
			padding:15px;
			margin:0px;
		}
		
		.colorinchis_blue{
			background-color:blue;
		}
		.colorinchis_green{
			background-color:green;
		}
	</style>
</head>

<body>
	
	<table>
		<caption>Tabla</caption>
		
		<?php
			$tr='<tr>';
			$blue='class="colorinchis_blue"';
			$green='class="colorinchis_green"';
			$td='<td ';
			$ftr='</tr>';
			$ftd='</td>';
			
				for($colum=10;$colum>=0;$colum--){
					echo $tr;
					for($fila=10;$fila>=0;$fila--){
															//echo "<td>$colum - $fila</td>";
						echo $td ;
						if($colum%2==0&$fila%2==0){
							echo $blue;
						}else if($colum%3==0&$fila%3==0){
							echo $green;
						}	
							echo '>'.$colum.'-'.$fila. $ftd ;
					}
					echo $ftr;
				}
			?>		
	</table>



</body>





</html>