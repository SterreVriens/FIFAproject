<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>header</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">

	<style>
		nav{
			margin: 0 auto;
	        max-width: 85%;
	        display: flex;
	        justify-content: space-between;
	        align-items: center;
		}
		nav img{
			height: 90px;
		}
		.navlinks{
			margin-right: 10%;
			display: flex;
			justify-content: space-around;
			width: 40%;
		}
		.navlinks a{
			font-family: 'Noto Sans JP', sans-serif;
			text-decoration: none;
			font-size: 1.2em;
			color: #24388a;
			font-weight: bold;
		}
		.navlinks a:hover{
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<nav>
		<div class="logo">
			<a href="index.php"><img src="img/logo.png" alt="soccer ball" ></a>
		</div>
		<div class="navlinks">
		<a href="login.php">Inloggen</a>
		<a href="">Mijn team</a>
		<a href="">Gokken</a>
		<a href="">Wedstrijden</a>
		</div>
	</nav>
</body>
</html>