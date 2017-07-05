<?php
$file=fopen("browser_counter.txt","r");
fgets($file);
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
			echo "$file";
		?>
	</body>
</html>
