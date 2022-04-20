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
				background-color:#848484;
			}
			
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
				<div class="center" style="background-color:red;">
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" class="input_text" value="<?php echo $email;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text" value="<?php echo $password;?>">
				</div>
				<div class="center">
					<input type="submit">
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
			<br />
			<?php print_r($_POST); ?>
			
		</div>
	<?php
		if($save){
			echo 'OK';
			//write xml
			unset¨$_POST['fname']);
			unset¨$_POST['email']);
			unset¨$_POST['password']);
			//print_r($_POST);
		}
	?>
		<div class="main">
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th>Password</th>
						<th>Time</th>
					</tr>
				</thead>
			</table>
		