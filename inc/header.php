<section class="topNav">

	<header>

		<div class="header-1">

			<a href="#" class="logo"> SPLENDORS <span>Taxi & Tours</span> </a>

			<form action="">
				<input type="search" placeholder="search here" id="search">
				<label for="search" class="fas fa-search"></label>
			</form>

		</div>

		<div class="header-2">

			<div id="menu" class="fas fa-bars" onclick="navToggle();"></div>

			<nav class="navbar">
				<ul>
					<li><a onclick="navToggle();" href="index.php">Home</a></li>
					<li><a onclick="navToggle();" href="index.php#service">Book Now</a></li>
					<li><a onclick="navToggle();" href="index.php#tranding">Destinations</a></li>
					<li><a onclick="navToggle();" href="index.php#ourVehicles">our Fleet</a></li>
					<li><a onclick="navToggle();" href="index.php#rentSection">For Rent</a></li>
					<li><a onclick="navToggle();" href="index.php#cutomerReview">Gallery</a></li>
					<li><a onclick="navToggle();" href="index.php#aboutUs">About</a></li>
					<li><a onclick="navToggle();" href="index.php#commentSection">Reviews</a></li>
					<li><a onclick="navToggle();" href="index.php#contactUs">Contact</a></li>
				</ul>
			</nav>

			<div class="icons">
				<a href="https://www.facebook.com/profile.php?id=100090649651285&mibextid=LQQJ4d" class="fab fa-facebook-f"></a>
				<a href="https://wa.me/+94771417650?text" class="fab fa-whatsapp"></a>
				<a href="#" class="fab fa-instagram"></a>
			</div>
		</div>

	</header>


</section>



<script>

	let menu = document.querySelector('#menu')
	let navbar = document.querySelector('.navbar');
	let header2 = document.querySelector('.header-2');

	function navToggle() {
		menu.classList.toggle('fa-times');
		navbar.classList.toggle('nav-toggle');
	}

	window.addEventListener('scroll', function () {

		menu.classList.remove('fa-times');
		navbar.classList.remove('nav-toggle');

		if (window.scrollY > 60) {
			header2.classList.add('sticky');
		} else {
			header2.classList.remove('sticky');
		}

	});


</script>



<style>
	.topNav {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		text-transform: capitalize;
		transition: all .2s linear;
		text-decoration: none;
	}

	header {
		padding-top: 0;
	}

	header .header-1 {
		display: flex;
		align-items: center;
		justify-content: space-between;
		background: black;
		width: 100%;
		padding: 10px 20px;
	}

	header .header-1 .logo {
		color: #FEB900;
		font-size: 28px;
		text-decoration: none;
		letter-spacing: 3px;
		font-weight: 700;
	}

	header .header-1 span {
		color: #fff;
		font-size: 23px;
		font-weight: 400;
	}

	header .header-1 form {
		display: flex;
	}

	header .header-1 form #search {
		height: 40px;
		width: 600px;
		background: none;
		outline: none;
		border: 2px solid #FEB900;
		color: #fff;
		padding: 0 10px;
		font-size: 17px;
	}

	header .header-1 form label {
		height: 40px;
		width: 60px;
		background: #FEB900;
		color: #000;
		cursor: pointer;
		line-height: 40px;
		text-align: center;
		font-size: 20px;
	}

	header .header-2 {
		display: flex;
		align-items: center;
		justify-content: center;
		background: #FEB900;
		width: 100%;
		padding: 5px 20px;
		z-index: 999999999;
		outline: none;
	}

	header .navbar {
		margin-bottom: 0;
	}

	header .header-2 .navbar ul {
		display: flex;
		align-items: center;
		justify-content: space-between;
		list-style: none;
	}

	header .header-2 .navbar ul li {
		margin: 8px;
		text-decoration: none;
		padding: 0 7px;
		letter-spacing: 1px;
	}

	header .header-2 .navbar ul li a {
		color: #000;
		font-size: 20px;
		text-decoration: none;
		font-weight: 300;
	}

	header .header-2 .navbar ul li a:hover {
		text-decoration: underline;
	}

	header .header-2 .icons a {
		display: none;
	}

	header .header-2 .icons a:hover {
		color: #fff8;
	}

	#menu {
		font-size: 30px;
		color: #fff;
		cursor: pointer;
		display: none;
	}

	header .header-2.sticky {
		
		top: 0;
		left: 0;
		box-shadow: 0 3px 5px #333;
	}

	/* media queries  */

	@media (max-width:991px) {

		header .header-1 form #search {
			width: 100%;
		}

	}

	@media (max-width:768px) {

		header .header-2 #menu {
			display: block;
			color: #000;
		}

		header .header-2 .navbar {
			position: fixed;
			top: -1000px;
			left: 50%;
			transform: translate(-50%, -50%);
			opacity: 0;
			z-index: 99999999999;
		}

		header .header-2 .navbar ul {
			flex-flow: column;
			width: 250px;
			border-radius: 5px;
			padding: 30px 10px;
			background: #FEB900;
			box-shadow: 0 0 0 100vh rgba(0, 0, 0, .5),
				0 3px 5px #000;
		}

		header .header-2 .navbar ul li {
			width: 100%;
			text-align: center;
		}

		header .header-2 .navbar ul li a {
			font-size: 25px;
			display: block;
		}

		header .header-2 .navbar.nav-toggle {
			top: 55%;
			opacity: 1;
		}

	}

	@media (max-width:500px) {

		header .header-1 {
			flex-flow: column;
		}

		header .header-1 form {
			padding-top: 10px;
		}

	}

	@media (max-width:448px) {
		header .header-1 .logo {
			font-size: 20px;
			letter-spacing: 3px;
		}

		header .header-1 span {
			font-size: 17px;

		}
	}

	@media (max-width:768px) {
		header .header-1 .logo {
			font-size: 18px;
			letter-spacing: 3px;
		}

		header .header-1 span {
			font-size: 10px;
		}

		header .header-2 .navbar ul li {
			letter-spacing: 1x;
		}

		header .header-2 .navbar ul li a {
			font-size: 14px;
		}

		header .header-2 .icons a {
			display: inline;
			font-size: 20px;
			color: #000;
			margin: 10px;
			text-decoration: none;
		}

		header .header-2 .icons a:hover {
			color: #fff8;
		}

		header .header-2 {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		header .header-1 form {
		display: none;
	}


	}

	@media (max-width:1024px) {
		header .header-2 .navbar ul li {
			letter-spacing: 1x;
		}

		header .header-2 .navbar ul li a {
			font-size: 10px;
		}
	}
</style>