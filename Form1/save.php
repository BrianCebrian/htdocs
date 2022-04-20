<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Php Hardcore Mode">
		<meta name="author" content="Brian Cebrian Lugones">
		<link rel="stylesheet" type="text/css" href="savecss.css">
		<title></title>
	
	</head>
	
		<?php
		$name='';
		$email='';
		$password='';
		$save1=false;
		$save2=false;
		$save3=false;
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
			}
		?>
		<?php
			$save=false;
			if($save1&$save2&$save3){
			
				$save=true;
			}
		?>
		<div class="main">
			<div class="asd">
				<p style="background-color: <?php if (! $save1) {echo 'red';}else {echo 'green';} ?>">Nombre:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p style="background-color: <?php if (! $save2) {echo 'red';}else {echo 'green';} ?>">Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p style="background-color: <?php if (! $save3) {echo 'red';}else {echo 'green';} ?>">Password:<?php echo $password;?></p>
			</div>
		</div>
		<br />
	
		
		
		<div class="main center">
		<?php
		if($save){
			
			$usuarios = new SimpleXMLElement('db.xml', 0, true);
			$nuevoUsuario = $usuarios->addChild('user');
			$nuevoUsuario->addChild('name', $name);
			$nuevoUsuario->addChild('email', $email);
			$nuevoUsuario->addChild('password', $password);
			$nuevoUsuario->addChild('time', time());
			//var_dump($usuarios->user[2]);
			//var_dump($usuarios);
			$usuarios->saveXML('db.xml');
			//write xml
			unset($_POST['fname']);
			unset($_POST['email']);
			unset($_POST['password']);
			//print_r($_POST);
			echo 'Guardando datos...' ;
			echo '<form method="POST" class="center" action=.\tabla.php>
				<input type="submit" value="Enviar" class="boton1">
				</form>';
			
		}else{
			echo ' volver al inicio...' ;
			echo '<form method="POST" class="center" action=".\index.php">
				<input type="submit" value="Volver" class="boton2">
				<input type="hidden" name="fname" value="'.$name.'">
				<input type="hidden" name="email" value="'.$email.'">
				<input type="hidden" name="password" value="'.$password.'">
				</form>';
				
			
		}
	?>
		</div>
		
	
</html>