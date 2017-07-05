<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title>猜拳小遊戲</title>
	</head>
	<body>
		<p align="center">剪刀 石頭 ～</p>
		<p align="center">
		<?php
		$my=$_GET['n'];
		if(!isset($my))
		echo "<img src=img/000.jpg width=255 height=295 />";
		else
		{
		$card=rand(1,3);
		echo "<img src=img/$card.jpg width=255 height=295 />";
		}
		?>
		</p>
		<p align="center">
		<?php
			if(isset($my))
			{
			echo "<img src=img/$my.jpg width=255 height=295 />";
			}
		?>
		</p>
		<p align="center">出拳</p>
		<p align="center">
		<a href="minigame.php?n=1"><img src="img/1.jpg" width="90" height="90" /></a>&nbsp;
		<a href="minigame.php?n=2"><img src="img/2.jpg" width="90" height="90" /></a>&nbsp;
		<a href="minigame.php?n=3"><img src="img/3.jpg" width="90" height="90" /></a>&nbsp;
		</p>
		<p align="center">結果</p>
		<p align="center">
		<?php
		if(isset($my))
		{
			if($card==$my){
				echo "平手!";
			}
			else if($card==1&&$my==2){
				echo"win!";
			}
			else if($card==2&&$my==3){
				echo "win!";
			}
			else if($card==3&&$my==1){
				echo "win!";
			}
			else{echo "lose!";}
		}
		?>
		</p>
	</body>
</html>
