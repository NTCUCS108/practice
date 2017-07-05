<?php
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$hobby = $_POST['hobby'];
$number = $_POST['number'];

$file=fopen("formrecord.txt","a");
fwrite($file, "$name; $birthday; $hobby; $number\n");
fclose($file);
?>


<!doctype>
<html>
	<head>
		<meta charset=utf-8>
		<title>form_information_output</title>
	</head>
	<body>
		<p>The following is your information:</p>
		<p>Name: <?php echo $name;?> </p>
		<p>Birthday: <?php echo $birthday;?> </p>
		<p>Hobby: <?php echo $hobby;?> </p>
		<p>Lucky number: <?php echo $number;?> </p>
	</body>
</html>
