<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title></title>
		<style>
			body{
					background: radial-gradient(circle, #fdbb2d, #22c1c3); 
			}
			.main{
				background-color: #f2f2f2;
				margin: 5%;
				padding:5px;
				border-radius: 5px;
			}
			.center{
				margin: auto;
				width:30%;
				padding:10px;
				text-align:center;
			}
			label{
				text-align:left;
				display:block;
			}
			.input_text{
				width:99%;
			}
			.green{color:white;background-color:black;}
			.radio{
				margin-left:480px;
				
				
			}
			.radio input{
				float:left;	
			}
				
			
		</style>
	</head>
	<body>
	<?php
		$name='';
		$email='';
		$password='';
		$anno='';
		$fav_language='';
		$perros='0';
		$gatos='0';
		$birthday='';
		$save1=false;
		$save2=false;
		$save3=false;
		$save4=false;
		$save5=false;
		$save6=false;
		$save7=false;
		$save8=false;
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(! empty($_POST['fname'])){
					$name = $_POST['fname'];
					$save1=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['email'])){
					$email = $_POST['email'];
					$save2=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['password'])){
					$password = $_POST['password'];
					$save3=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['año'])){
					$año = $_POST['año'];
					$save4=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['fav_language'])){
					$fav_language = $_POST['fav_language'];
					$save5=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['perros'])){
					$perros = $_POST['perros'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['gatos'])){
					$gatos = $_POST['gatos'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['birthday'])){
					$birthday = $_POST['birthday'];
					$save8=true;
					//echo $name.'<br />';
				}
			}
		
		?>
		
	
		
		
		<div class="main">
			<form method="post" action="save.php">
				<div class="center" >
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder="Writte mail..." class="input_text" value="<?php echo $email;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text" value="<?php echo $password;?>">
				</div>
				<div style="text-align:center; margin:auto; width:3%;padding:10px;">
					<label for="anno">Año de nacimiento</label>
					<select id="anno" name="anno">
						<option  value="0">1970-1990</option>
						<option  value="1">1990-2000</option>
						<option  value="2">2000-2020</option>
						<option  disabled selected value=""></option>
					</select>
				</div>
				<div class="radio">
					<p> Elige tu lenjuage de programacion favorito </p>
					<input type="radio" id="html" name="fav_language" value="HTML">
					<label for="html">HTML</label> 
					<input type="radio" id="css" name="fav_language" value="CSS">
					<label for="css">CSS</label>
					<input type="radio" id="javascript" name="fav_language" value="JavaScript">
					<label for="javascript">JavaScript</label>
				</div>
				<div class="radio">
					<p> Alergia a:</p>
					 <input type="checkbox" id="perros" name="perros" value="1" <?php if($perros==1){echo 'checked';}?>>
					  <label for="perros">Perros</label><br>
					  <input type="checkbox" id="gatos" name="gatos" value="1"<?php if($gatos==1){echo 'checked';}?>>
					  <label for="gatos">Gatos</label><br>
					  <?php print_r($_POST); ?>
				</div>
				<div class="center">
				</div>
				<div class="radio">
				  <label for="birthday">Fecha de Hoy:</label> 
				  <input type="date" id="birthday" name="birthday" min="2022-01-01" max="2022-12-31">
				</div> <br /><br />
				<div class="center">
					<input type="reset"><br /><br />
					<input class="green" type="submit">
				</div>
			</form>
		</div>