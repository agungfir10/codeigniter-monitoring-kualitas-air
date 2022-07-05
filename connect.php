<html>

<body>

	<?php

	$dbname = 'monitoring_kualitas_air';
	$dbuser = 'root';
	$dbpass = '';
	$dbhost = 'localhost';

	$connect = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$connect) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}

	echo "Connection Success!<br><br>";

	$sensorph = $_GET["phval"];


	$query = "INSERT INTO iot_sensorph (sensorph) VALUES ('$sensorph')";
	$result = mysqli_query($connect, $query);

	echo "Insertion Success!<br>";

	?>
</body>

</html>