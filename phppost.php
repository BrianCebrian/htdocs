<html>
	<head>
		<style>
			.form{
				border-style: double;
				border-radius: 50px;
				background-color:grey;
				margin:7em;
				padding:2em;
				width:40%;
				text-align:left;
				float:left;
				border-color:red;
				text
			}
			body{
				margin-left:350px;
				
				
				
			}
			label{
				color:white;
				display:block;
				text-align:left;
				
			}
			.center{
				margin:auto;
				width:50%;
				padding: 5px;
				
			}
			
			.abc{text-align:center}
		</style>
	</head>
	<body>

	<form  class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="center">	
		  <label>Name:</label> 
		  <input type="text" placeholder="writte your name" name="fname"> 
		</div>
		<div class="center">
		  <label>Mail:</label> 
		  <input type="text" placeholder="writte your mail" name="fmail"> 
		</div> 
		<div class="center">
		  <label>Password:</label> 
		  <input type="password" placeholder="writte your password" name="fpass">
		</div> 
		<div class="abc">
		  <input type="submit" >
		</div>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $name = $_POST['fname'];
	  if (empty($name)) {
		echo "Name is empty";
	  } else {
		echo $name;
	  }
	}
	?>

	</body>
</html>