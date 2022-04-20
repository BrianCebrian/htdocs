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
			table {font-family: arial, sans-serif;border-collapse: collapse; width: 100%;}
			td, th {border: 1px solid #dddddd;padding: 8px;}
			td {text-align:center;}
			th {text-align:left; background-color:grey;}
			.green{color:white;background-color:black;}
			
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
				<div class="center">
					<input class="green" type="submit">
				</div>
			</form>
		</div>