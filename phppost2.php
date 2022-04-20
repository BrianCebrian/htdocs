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
				background-color:#46F6E6;
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
			table {font-family: arial, sans-serif;border-collapse: collapse; width: 100%;}
			td, th {border: 1px solid #dddddd;padding: 8px;}
			td {text-align:center;}
			th {text-align:left; background-color:grey;}
			.green{color:white;background-color:red;}
			
		</style>
	</head>
	<body>
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
		
		<div class="main">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="center" >
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="email" name="email" class="input_text" value="<?php echo $email;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text" value="<?php echo $password;?>">
				</div>
				<div class="center">
					<input class="green" type="submit">
				</div>
			</form>
		</div>

		
		<style>
			.asd{
				margin-left:20px;
			}
		</style>
		<?php
			$save=false;
			if($save1&$save2&$save3){
				echo "Yes";
				$save=true;
			}else{
				$name='';
				$email='';
				$password='';
			}
		?>
		<div class="main">
			<div class="asd">
				<p>Nombre:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p>Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p>Password:<?php echo $password;?></p>
			</div>
		</div>
		<br />
		<?php print_r($_POST); ?>
		
		<?php
		if($save){
			echo 'OK';
			$usuarios = new SimpleXMLElement('xml.xml', 0, true);
			$nuevoUsuario = $usuarios->addChild('user');
			$nuevoUsuario->addChild('name', $name);
			$nuevoUsuario->addChild('email', $email);
			$nuevoUsuario->addChild('password', $password);
			$nuevoUsuario->addChild('time', time());
			//var_dump($usuarios->user[2]);
			//var_dump($usuarios);
			$usuarios->saveXML('xml.xml');
			//write xml
			unset($_POST['fname']);
			unset($_POST['email']);
			unset($_POST['password']);
			//print_r($_POST);
			
		}
	?>
		<div class="main">
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Time</th>
					</tr>
				</thead>
					<tbody>
			<?php
		
			if(!$xml = simplexml_load_file('xml.xml')){
				echo "No se ha podido cargar el archivo";
			} else {
				foreach ($xml as $user){
					echo'<tr>';
					echo '<td>'.$user->name.'</td>';
					echo '<td>'.$user->email.'</td>';
					echo '<td>'.$user->password.'</td>';
					echo '<td>'.$user->time.'</td>';
					echo '</tr>';
				}
			}
			?>
					</tbody>
			</table>
	</body>
</html>