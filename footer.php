<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://kit.fontawesome.com/0a0d38d930.js" crossorigin="anonymous"></script>
	<title>footer</title>
	<style>
		h3{
			color: white;
			font-size: 1.4em;
			padding: 2% 5%;
		}
		footer p{
			color: white;
		}
		footer .wrapper{
			margin: 0 auto;
	        max-width: 85%;
	        display: grid;
	        grid-template-rows: 1fr 1fr; 
		}
		footer{
			background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)),
            url("img/footer.jpg");
            background-repeat: no-repeat;
            background-size: cover;
		}
		footer .wrapper ul{
			color: white;
			display: inline;
			list-style: none;
		}
		footer .wrapper ul li{
			display: flex;
			padding: 1%;
			align-items: center;
		}
		footer .wrapper ul li i{
			padding: 1%;
			height: 20px;
		}
		footer .rightfooter p{
			font-style: italic;
		}
		footer a{
			font-style: italic;
			font-size: 1.1em;
		}
		.download {
			padding: 5% 0;
			font-size: 1.2em;
		}
	</style>
</head>
<body>
	<footer>
		<h3>Contact</h3>
		<div class="wrapper">
			<div class="leftfooter">
				<ul>
					<li><i class="fas fa-envelope-open-text"></i><p>Fifa.project@contact.us</p></li>
					<li><i class="fas fa-phone-alt"></i><p>+31 0632182273</p></li>
					<li><i class="fas fa-map-marker-alt"></i><p>Terheijdenseweg 350, 4826 AA Breda</p></li>
				</ul>
			</div>
			<div class="rightfooter">
				<ul>
					<li><i class="fab fa-twitter"></i><p>@fifavoetbal</p></li>
					<li><i class="fab fa-instagram"></i><p>@fifavoetbal</p></li>
					<li><i class="fab fa-facebook-f"></i><p>@fifavoetbal</p></li>
				</ul>
			</div>
			<div class="download"><p>Download <a href="">hier</a> de gokapplicatie</p></div>		
		</div>
	</footer>
</body>
</html>