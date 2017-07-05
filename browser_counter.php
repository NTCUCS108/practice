<?php
$file=fopen("browser_counter.txt","r");
$num=fgets($file);
$num++;
$file=fopen("browser_counter.txt","w");
fwrite($file,$num);
fclose($file);
?>

<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title>網站瀏覽人數</title>
	</head>
	<body>
		網站瀏覽人數：
		<?php
			echo "$num";
		?>
	</body>
</html>
