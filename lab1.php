<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<style type="text/css">
		body{
			background: #E9EFEC;
		}

		.container{
			width: 30%;
			padding: 3%;
			border-radius: 15px;
			background: #C4DAD2;
			margin-top: 2%;
			margin-left: 30%;
		}

		h1, h3{
			color: #16423C;
			font-family: sans-serif;
		}

		label{
			text-align: left;
			font-family: sans-serif;
			font-weight: bold;
			color: #16423C;
		}

		input[type=text], input[type=tel]{
			width: 100%;
			padding: 10px;
			border-radius: 10px;
			border: 2px solid #16423C;
		}

		input[type=date]{
			width: 100%;
			padding: 10px;
			border-radius: 10px;
			border: 2px solid #16423C;
		}

		input[type=submit]{
			width: 70%;
			padding: 10px;
			border-radius: 10px;
			border: 2px solid #16423C;
			background: #16423C;
			color: white;
			margin-left: 17%;
		}

	</style>
</head>
<body>

	<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $birthday = test_input($_POST["birthday"]);
  $sex = test_input($_POST["sex"]);
  $address = test_input($_POST["address"]);
  $pnumber = test_input($_POST["pnumber"]);
  $spnumber = test_input($_POST["spnumber"]);
  $opnumber = test_input($_POST["opnumber"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container">
<center><h1>Registration</h1></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>Name: </label><input type="text" name="name" required>
  <br><br>
  <label>Birthday: </label><input type="date" name="birthday" required>
  <br><br>
  <label>Sex: </label>
  <input type="radio" name="sex" value="female" required>Female
  <input type="radio" name="sex" value="male" required>Male
  <input type="radio" name="sex" value="other" required>Other
  <br><br>
  <label>Address (House no., Barangay, Municipality, Province, Country):</label> <input type="text" name="address" required>
  <br><br>

  <h3 style="color: #6A9C89;">Contact Info</h3>
  <label>Phone Number: </label><input type="tel" id="pnumber" name="pnumber" placeholder="ex. 0930-271-9174" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
  <br><br>
  <label>Secondary Phone Number: </label><input type="text" name="spnumber">
  <br><br>
  <label>Other Phone Number: </label><input type="text" name="opnumber">
  <br><br>

  <label>E-mail: </label><input type="text" name="email" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>


<?php
echo "<h2>Your Input:</h2>";
echo "<p>Name: $name</p>";
echo "<p>Birthday: $birthday</p>";
echo "<p>Sex: $sex</p>";
echo "<p>Address: $address</p>";
echo "<p>Phone number: $pnumber</p>";
echo "<p>Secondary Phone number: $spnumber</p>";
echo "<p>Other Phone number: $opnumber</p>";
echo "<p>Email: $email</p>";
?>

</body>
</html>