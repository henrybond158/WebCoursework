<!doctype HTML>
<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title> Welcome to Henry Bond's Edinburgh Castle Contact Us Page</title>
	</head>


	<body>
		<div class="wrapper">


<?php include_once "nav.html"; ?>
<div class="results">
	<?php
$Fname = $_POST["FirstName"];
$Email = $_POST["email"];
$quote = $_POST["comments"];


echo "your name is \"$Fname\", <br> your email is \"$Email\" and your message is <br> \"$quote\" <br>";

?>	
</div>
<?php include_once "footer.php"; ?>
</div>
	</body>



</html>