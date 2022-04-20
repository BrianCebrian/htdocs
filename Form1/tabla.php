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
			.green{color:white;background-color:red;}
			


			
		</style>
	</head>
	<style>
			.asd{
				margin-left:20px;
			}
		</style>
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
		
			if(!$xml = simplexml_load_file('db.xml')){
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