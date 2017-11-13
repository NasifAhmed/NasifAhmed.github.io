<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link href="forms.css" rel="stylesheet" type="text/css" media="all" />
		<link href="tables.css" rel="stylesheet" type="text/css" media="all" />
	</head>
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

		<div class="container">
			<h1>Terrorist Attacks</h1>
		</div>

		<div class="form-container">
			<form>

			<label for="AttackDate">When the attack happened ?</label>	
			<input type="date" name="AttackDate" placeholder="Attack Date"><br>

			<label for="AttackTime">Time of the attack :</label>
			<input type="time" name="AttackTime" placeholder="Time of Attack"><br>

			<label for="EndDate">Attack lasted till :</label>
			<input type="date" name="EndDate" placeholder="Attack Lasted"><br>

			<label for="Type">What type of attack was it ?</label>
			<input type="text" name="Type" placeholder="Type of Attack"><br>

			<label for="District">In which district the attack happened ?</label>
			<input type="text" name="District" placeholder="District"><br>

			<label for="Area">In which area of the district the attack happened ?</label>
			<input type="text" name="Area" placeholder="Area"><br>

			<label for="Street">In which street ?</label>
			<input type="text" name="Street" placeholder="Street"><br>

			<label for="Building">Write the building number where the attack took place: </label>
			<input type="text" name="Building" placeholder="Building"><br>

			<label for="Funding">The attack was done by :</label>
			<input type="text" name="Funding" placeholder="Funding"><br>

			<input type="submit" name="Register" placeholder="Done" onclick="msg()">
			<input type="reset" name="reset">

		</form>

		<script>
			function msg() {
			    alert("Data Registred");
			}
		</script>
		</div>
	</body>
</html>