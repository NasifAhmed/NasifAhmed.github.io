<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="passwordprompt.css" rel="stylesheet" type="text/css" media="all" />
		<link href="tables.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>

		<div id="header" class="container">
			<span id="navigation">
				<ul class="actions">
					<li><a href="index.html" class="button-nav">HOME</a></li>
					<li><a href="index.html#wrapper" class="button-nav">OPTIONS</a></li>
				</ul>
			</span>
		</div>


		<div class="passwordBox">
			<h3>You need admin access for entering data in the Data Base. <br> Enter admin password below :</h3> <br> <br>
			<h4>Admin Password :</h4> <br>
			<input class="pass" type="password" id="pass" placeholder="Enter Password"><br>

			<input type="submit" name="Register" placeholder="Done" onclick="javascript:validatePass()">

			<a href="http://www.widhiallan.com/" ></a>
			<script>
			function validatePass(){
			    if(document.getElementById('pass').value == 'root'){
			        window.open("attackRegister.php", "_self");;
			    }else{
			        alert('Wrong password ! Try again !');
			    }
			}
			</script>
		</div>
	</body>
</html>