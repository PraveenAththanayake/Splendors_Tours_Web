<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Splendors Taxi & Tours | Private, Reliable & Affordable</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description"
		content="Experience the beauty of Sri Lanka with our reliable taxi and tour services. Discover the island's breathtaking landscapes, rich history, and vibrant culture with our experienced tour guides. From airport transfers to personalized sightseeing tours, we offer a range of options to suit your travel needs and budget. Book now for an unforgettable journey through Sri Lanka.We offer affordable and reliable taxi, tour, travel, and vehicle rental services in Sri Lanka.">

	<meta name="author"
		content="Sri Lanka taxi services,
	taxi and tour services,
	Sri Lanka,
	sightseeing tours,
	experienced tour guides,
	Sri Lanka tour packages,
	Sri Lanka airport transfer,
	Colombo taxi services,
	Kandy tour packages,
	Galle taxi services,
	Sigiriya tour packages,
	Cultural triangle tours Sri Lanka,
	Wildlife tours Sri Lanka,
	Beach tours Sri Lanka,
	Hill country tours Sri Lanka,
	Private taxi Sri Lanka,
	Budget taxi Sri Lanka,
	Luxury taxi Sri Lanka,
	Reliable taxi service Sri Lanka,
	Experienced tour guides Sri Lanka,
	Sri Lanka travel packages,
	Sri Lanka day tours,
	Sri Lanka round tours,
	Sri Lanka, taxi, tour, travel, vehicle rental, airport transfers, low cost, speed, on-time, reliable, affordable, transportation, travel agency, tour operator	">

	<meta name="robots" content="index, follow">
	<meta name="author" content="Aradhana Taxi and Tours">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="Sri Lankan Best Taxi, Tours, and Travel Services - Low Cost, Island-wide, and On-Time">
	<meta property="og:description"
		content="We provide affordable and reliable taxi, tour, and travel services in Sri Lanka. Our vehicles are available for rent and we specialize in airport transfers. Our services are low cost, speedy, and on-time.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.yourwebsitename.com/image.jpg">

	<?php require('inc/links.php') ?>
</head>

<body>
	<?php require('inc/header.php') ?>
	<section class="home">

		<div class="slider">
		<div class="slide active" style="background-image: url('img/brunette-man-black-jacket-blonde-woman-white-blouse-smile-talk-outside-handsome-guy-sunglasses-puts-yellow-suitcase-into-car-trunk.jpg')">
            <div class="container">
                <div class="caption">
						<h1>Budget-Friendly Sri Lanka Taxi Tours</h1>
						<p>The Sri Lanka's No.1 Taxi and Tours, Vehicle Service With Top Class Safety and Fit To Your
							Pocket, You Can Enjoy the Splendors of Sri Lanka With Lowest Price</p>
						<a href="#service">Book Now</a>
					</div>
				</div>
			</div>
			<div class="slide" style="background-image: url('img/female-tourists-hand-have-happy-travel-map.jpg')">
            <div class="container">
                <div class="caption">
						<h1>Explore Sri Lanka with Expert Guide</h1>
						<p>Enjoy Splendors of Sri Lanka with Top Class Guide With You and Discover More About Your
							Visiting Places</p>
						<a href="#service">Book Now</a>
					</div>
				</div>
			</div>
			<div class="slide" style="background-image: url('img/ladies-car-salon-woman-buying-car-elegant-woman-blue-dress-manager-give-keys-client.jpg')">
            <div class="container">
                <div class="caption">
						<h1>Discover Sri Lanka on Your Own with Our Vehicles</h1>
						<p>Enjoy The Splendors of Sri Lanka by Own, We are Like to Offering You Vehicles</p>
						<a href="#service">Book Now</a>
					</div>
				</div>
			</div>
		</div>


		<!-- controls  -->
		<div class="controls">
			<div class="prev"><i class="fa-solid fa-circle-arrow-left"></i></div>
			<div class="next"><i class="fa-solid fa-circle-arrow-right"></i></div>
			</div>

			<!-- indicators -->
			<div class="indicator">
			</div>  

	</section>
	<script>


		const slides = document.querySelector(".slider").children;
		const prev = document.querySelector(".prev");
		const next = document.querySelector(".next");
		const indicator = document.querySelector(".indicator");
		let index = 0;


		prev.addEventListener("click", function () {
			prevSlide();
			updateCircleIndicator();
			resetTimer();
		})

		next.addEventListener("click", function () {
			nextSlide();
			updateCircleIndicator();
			resetTimer();

		})

		// create circle indicators
		function circleIndicator() {
			for (let i = 0; i < slides.length; i++) {
				const div = document.createElement("div");
				div.innerHTML = i + 1;
				div.setAttribute("onclick", "indicateSlide(this)")
				div.id = i;
				if (i == 0) {
					div.className = "active";
				}
				indicator.appendChild(div);
			}
		}
		circleIndicator();

		function indicateSlide(element) {
			index = element.id;
			changeSlide();
			updateCircleIndicator();
			resetTimer();
		}

		function updateCircleIndicator() {
			for (let i = 0; i < indicator.children.length; i++) {
				indicator.children[i].classList.remove("active");
			}
			indicator.children[index].classList.add("active");
		}

		function prevSlide() {
			if (index == 0) {
				index = slides.length - 1;
			}
			else {
				index--;
			}
			changeSlide();
		}

		function nextSlide() {
			if (index == slides.length - 1) {
				index = 0;
			}
			else {
				index++;
			}
			changeSlide();
		}

		function changeSlide() {
			for (let i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
			}

			slides[index].classList.add("active");
		}

		function resetTimer() {
			// when click to indicator or controls button 
			// stop timer 
			clearInterval(timer);
			// then started again timer
			timer = setInterval(autoPlay, 4000);
		}


		function autoPlay() {
			nextSlide();
			updateCircleIndicator();
		}

		let timer = setInterval(autoPlay, 4000);



	</script>

	<!--
	<section class="mainServices">
		<div class="review_heading">
			<h3 class="text-center section-subheading">- Our Services -</h3>
			<h1 class="text-center section-heading">Experience The Best Services</h1>
		</div>
		<div class="ourServices">
			<?php require('inc/services.php') ?>
		</div>
	</section> -->



	<section class="service" id="service">
		<div class="service_cards">
			<h3 class="text-center section-subheading">- Booking Services -</h3>
			<h1 class="text-center section-heading">
				<center>Taxi, Tours & Travel Services</center>
			</h1>
		</div>
		<div class="booking_card_grid">
			<div class="booking_card">
				<div class="booking_card-item">
					<div class="card">
						<img class="card-img"
							src="img/Hiring airport transfers in Sydney is the best option for travelling_.jpg"
							alt="Airport Transfer" />
						<div class="card-content">
							<h1 class="card-header">Airport Transfer</h1>
							<p class="card-text">
								Safe and affordable airport transfer and drop-off services for stress-free travel.
							</p>
							<button class="card-btn" data-bs-toggle="modal" data-bs-target="#airport_booking">Book now
								<span>&rarr;</span></button>
						</div>
					</div>
				</div>
				<div class="booking_card-item">
					<div class="card">
						<img class="card-img"
							src="img/Raleigh taxi operators struggle with no-cap guidelines - Triangle Business Journal.jpg"
							alt="Taxi Service" />
						<div class="card-content">
							<h1 class="card-header">Taxi & Tours Service</h1>
							<p class="card-text">
								Discover Sri Lankan destinations in style with our reliable and comfortable taxi
								service.
							</p>
							<button class="card-btn" data-bs-toggle="modal" data-bs-target="#taxi_booking">Book now
								<span>&rarr;</span></button>
						</div>
					</div>
				</div>
				<div class="booking_card-item">
					<div class="card">
						<img class="card-img"
							src="img/15 high-paying side jobs that will put your hobbies to good use.jpg"
							alt="Guide Hire" />
						<div class="card-content">
							<h1 class="card-header">Guide Service</h1>
							<p class="card-text">
								Get insider knowledge and local expertise with our professional guide hire service.
							</p>
							<button class="card-btn" data-bs-toggle="modal" data-bs-target="#guide_hire">Book
								now<span>&rarr;</span></button>
						</div>
					</div>
				</div>
				<div class="booking_card-item">
					<div class="card">
						<img class="card-img"
							src="img/2010-2015 Toyota Prius Duraflex Tk-r Rear Bumper Cover - 1 Piece.jpg"
							alt="Vehicle Rent" />
						<div class="card-content">
							<h1 class="card-header">Rent Vehicles Service</h1>
							<p class="card-text">
								Get around in comfort and style with our affordable and reliable rent vehicle service.
							</p>
							<button class="card-btn" data-bs-toggle="modal" data-bs-target="#rent_vehicle">Book
								now<span>&rarr;</span></button>
						</div>
					</div>
				</div>
				<div class="booking_card-item">
					<div class="card">
						<img class="card-img"
							src="img/billie-dollar-money-background.jpg"
							alt="Vehicle Rent" />
						<div class="card-content">
							<h1 class="card-header">Dollar Exchanging</h1>
							<p class="card-text">
							Exchange dollars for the best rate: get more for your money today!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!--Airport Transfer Booking-->
	<?php require('inc/airport_section.php') ?>

	<!--Vehicle Rent Booking-->
	<?php require('inc/vehicle_section.php') ?>

	

	<!--Swiper JS-->
	<section id="tranding">
		<div class="slider">
			<h3 class="text-center section-subheading">- Sri Lanka Tourism -</h3>
			<h1 class="text-center section-heading">Popular Destinations</h1>
		</div>
		<div class="slider">
			<div class="swiper tranding-slider">
				<div class="swiper-wrapper">
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/Sigiriya, Sri Lanka with Heather & Martin, srilanka, visitsrilanka and exploresrilanka.jpg"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Sigiriya
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='sigiriya.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/random1.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Ella
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='ella.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/Nuwara eliya/random3.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Nuwara Eliya
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='nuwaraeliya.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/kandy/random1.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Kandy
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='kandy.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/dambulla/Visit the Dambulla Cave Temple in Sri Lanka - The Backpacksters.png"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Dambulla
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/sinharaja/Singharaja Forest.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Sinharaja Forest
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/anuradhapura/Anuradhapura - The City Of Proud (1).jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Anuradhapura
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/polonnaruwa/𝐏𝐨𝐥𝐨𝐧𝐧𝐚𝐫𝐮𝐰𝐚, 𝐂𝐞𝐧𝐭𝐫𝐚𝐥 𝐏𝐫𝐨𝐯𝐢𝐧𝐜𝐞 (1).jpg"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Polonnaruwa
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/adam/Tumblr.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Adam's Peak
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/katharagama/katharagama.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Katharagama
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/negombo/Last Day In Paradise - Negombo Beach.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Negombo
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/colombo/download (2).jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Colombo
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/jaffna/Nallur Kandaswamy Temple (Nallur Kovil) - Jaffna, SriLanka.jpg"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Jaffna
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/baticaloa/Pasikuda beach in Sri Lanka.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Batticaloa
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/kalpitiya/KiteWorldWide Kiteholidays in Sri Lanka Kalpitiya.jpg"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Kalpitiya
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/nilwella/Nilaveli Beach_ Top Attraction In Trincomalee Of Sri Lanka.jpg"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Nilaweli
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/trincomalee/Nilaveli Beach in Sri Lanka.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Trincomalee
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/arugambay/SRI LANKA - Arugam Bay  The best Things to do.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Arugam Bay
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/ahangama.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Ahangama
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/matara.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Matara
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/weligama/𝐖𝐞𝐥𝐢𝐠𝐚𝐦𝐚 🇱🇰.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Weligama
								</h2>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/tangalle/The perfect 14 days Sri Lanka itinerary [2019 travel guide].png"
								alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Tangalle
								</h2>

							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/unawatuna.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Unawatuna
								</h2>

							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/hikkaduwa/random5.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Hikkaduwa
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='hikkaduwa.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/whale/main.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Whale Watching
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='whale.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/hirikatiya/random1.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Hirikatiya<br>
									Nilwella
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='hirikatiya.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/galle/random2.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Galle
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='galle.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
					<!-- Slide-start -->
					<div class="swiper-slide tranding-slide">
						<div class="tranding-slide-img">
							<img src="img/Mirissa/main.jpg" alt="Tranding">
						</div>
						<div class="tranding-slide-content">
							<div class="tranding-slide-content-bottom">
								<h2 class="destinations">
									Mirissa
								</h2>
								<button type="button" class="more_btn"
									onclick="window.location.href='mirissa.php';">More...</button>
							</div>
						</div>
					</div>
					<!-- Slide-end -->
				</div>

				<div class="tranding-slider-control">
					<div class="swiper-button-prev slider-arrow">
						<ion-icon name="arrow-back-outline"></ion-icon>
					</div>
					<div class="swiper-button-next slider-arrow">
						<ion-icon name="arrow-forward-outline"></ion-icon>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</div>
	</section>

	<!--Taxi Booking-->
	<?php require('inc/taxi_section.php') ?>

	<!--Guide Hire Booking-->
	<?php require('inc/guide_hire.php') ?>




	<!--taxi-->
	<?php require('inc/taxi_book.php') ?>


	<!--rent-->
	<?php require('inc/rent_vehicle.php') ?>



	<!--Customer Review-->
	<section class="galleryReview" id="cutomerReview">
		<h3 class="text-center section-subheading">- Splendors Tours -</h3>
		<h1 class="text-center section-heading">Our Gallery </h1>
		<?php require('inc/review.php') ?>
	</section>

	<!--About Section-->
	<section class="about" id="aboutUs">
		<div class="main">
			<img src="img/about section.jpg" alt="#">
			<div class="all-text">
				<h4>WHO WE ARE &#129300;</h4>
				<h1>Years of Experience in Providing Top-Notch Travel Services</h1>
				<hr>
				<p>
					We are a reliable provider of taxi, tour, and travel services, offering safe, comfortable, and
					low-cost transportation solutions for 24*7 in all island-wide. Our team of experienced drivers and well-maintained vehicles
					ensure that you arrive at your destination on time and in style. We provide a range of services,
					from airport transfers to full-day tours, and our flexible booking options and competitive rates
					make us accessible to all. Whether you're a local or a tourist, we are here to make your experience
					enjoyable and stress-free.
				</p>
				<div class="btn">
					<button type="button" data-bs-toggle="modal" data-bs-target="#taxi_booking">Book Now</button>
				</div>
			</div>
		</div>

		<script>
			$(window).scroll(function () {
				// Get the position of the about section
				var position = $('#aboutUs').offset().top;

				// Get the height of the window
				var windowHeight = $(window).height();

				// Check if the top of the about section is within the window's viewport
				if ($(window).scrollTop() + windowHeight > position) {
					// Add the 'animated' class to the elements that should be animated
					$('.all-text h4, .all-text h1, .all-text hr, .all-text p, .all-text .btn').addClass('animated');
				}
			});

		</script>


		<style>
			.animated {
				animation-name: fadeInUp;
				animation-duration: 3s;
			}

			@keyframes fadeInUp {
				from {
					opacity: 0;
					transform: translateY(30px);
				}

				to {
					opacity: 1;
					transform: translateY(0);
				}
			}
		</style>
	</section>



	<?php require('inc/contact_section.php') ?>

	<?php require('inc/footer.php') ?>
	<?php require('inc/scripts.php') ?>




</body>

</html>