<!doctype>
<html>
	<head>
		<meta charset=utf-8>
		<title>tryform</title>
	</head>
	<body>
		<p>Personal information
		</p>
		<form id="form" name="form" method="post" action="formrecord.php">
		<p>Name:
			<input type="text" name="name" id="name" />
		</p>
		<p>Birthday:
			<input type="text" name="birthday" id="birthday" />
		</p>
		<p>Hobby:
			<input type="text" name="hobby" id="hobby" size=60 />
		</p>
		<p>Lucky number:
			<select name="number" id="select">
			<?php
			for($i=1;$i<=30;$i++)
			{
				echo "<option value=$i>$i</option>";
			}
			?>
			</select>
		</p>
		<p>
			<input type="submit" name="button" id="button" value="submit!" />
		</p>
	</body>
</html>
