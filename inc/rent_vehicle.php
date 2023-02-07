<section class="rent_vehicle" id="rentSection">
    <h2 class="rentHead">
        <center>- Taxi Service & Vehicle Rent -</center>
    </h2>
    <h1 class="rentsubHead">
        <center>Vehicles for Rent</center>
    </h1>
    <div class="rent_container">
        <div class="rent">
            <div class="imgBx">
                <img src="img/taxi/rentdio.png" alt="dio / scooter for rent">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Bikes<br>
                        <span>All type of Bikes (Scooters)</span>
                    </h2>
                    <hr>
                    <p>
                        We offer affordable bike rentals with a wide selection of bikes, including road, mountain, and
                        cruisers. Explore your surroundings at a low cost and enjoy the freedom of the open road.
                    </p>
                </div>
            </div>
        </div>
        <div class="rent">
            <div class="imgBx">
                <img src="img/taxi/threedio.png" alt="tuk tuk/ ato for rent">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Tuk Tuk<br>
                        <span>Bajaj Threewheels</span>
                    </h2>
                    <hr>
                    <p>
                    We offer affordable tuk-tuk rentals with a wide selection of vehicles. Explore your surroundings at a low cost and enjoy the convenience of our tuk-tuks.
                    </p>
                </div>
            </div>
        </div>
        <div class="rent">
            <div class="imgBx">
                <img src="img/taxi/rentprius.png" alt="car/ axio/ prius for rent">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Car<br>
                        <span>Toyota Prius, Axio, Alto, Wagon R and All Types of Cars</span>
                    </h2>
                    <hr>
                    <p>
                    We offer a range of affordable car rentals to suit your needs, from economy to luxury models. With flexible rental periods and competitive rates, we make it easy to explore your surroundings at a low cost.
                    </p>
                </div>
            </div>
        </div>
        <div class="rent">
            <div class="imgBx">
                <img src="img/taxi/kdh14.png" alt="kdh14/kdh9/van for rent">
            </div>
            <div class="details">
                <div class="content">
                    <h2>Van<br>
                        <span>KDH 9 & 14 Seaters, Suzuki Every</span>
                    </h2>
                    <hr>
                    <p>
                    Our affordable van rentals are perfect for group travel, with a range of vehicles to choose from. With flexible rental periods and competitive rates, we make it easy to explore your surroundings in comfort and convenience.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>


<style>
    .rent_vehicle .rentsubHead {
        margin: 5px 0 45px 0;
        font-size: 40px;
        font-family: "Raleway", sans-serif;
        font-weight: 700;
        letter-spacing: 2px;
        color: #FEB900;
    }

    .rent_vehicle .rentHead {
        margin: 50px 0 0 0;
        font-size: 18px;
        font-family: "Raleway", sans-serif;
        font-weight: 400;
        letter-spacing: 2px;
        color: #777777;
    }

    .rent_container {
        width: 100%;
        min-height: 600px;
        display: flex;
        flex-wrap: wrap;
    }

    .rent {
        position: relative;
        width: calc(50% - 20px);
        min-height: 300px;
        background: #fff;
        margin: 10px;
        box-sizing: border-box;
    }

    .rent .imgBx {
        position: absolute;
        width: 50%;
        height: 100%;
    }

    .rent .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .rent .details {
        position: absolute;
        right: 0;
        width: 50%;
        height: 100%;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .rent .details .content {
        padding: 20px;
        box-sizing: border-box;
    }

    .rent .details .content h2 {
        margin: 0;
        padding: 0;
        font-size: 24px;
        line-height: 0.85em;
        font-weight: 600;
    }

    .rent .details .content h2 span {
        font-size: 14px;
        color: #777;
        font-style: italic;
    }

    .rent .details .content p {
        margin: 10px 0 0 0;
        padding: 0;
        text-align: justify;
        text-justify: inter-word;
        font-size: 1.3rem;
    }

    @media (max-width: 1200px) {
        .rent_container {
            width: 100%;
        }
    }

    @media (max-width: 991px) {
        .rent {
            width: calc(70% - 20px);
            margin: 10px auto;
        }
    }

    @media (max-width: 768px) {
        .rent {
            width: calc(70% - 20px);
            margin: 10px auto;
        }

        .rent .imgBx {
            position: relative;
            width: 100%;
            height: 200px;
        }

        .rent .details {
            position: relative;
            width: 100%;
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        .rent {
            width: calc(100% - 40px);
            margin: 10px auto;
        }
    }
</style>




<style>
.animated .rent_container {
  opacity: 1;
  transform: translateX(0);
  transition: opacity 1s ease-out, transform 1s ease-out;
}


</style>

<script>
function animateOnScroll() {
  var rentSection = document.getElementById("rentSection");
  var rentSectionPos = rentSection.offsetTop;
  var rentSectionHeight = rentSection.offsetHeight;
  var windowHeight = window.innerHeight;
  var scrollPos = window.scrollY;

  // Check if the user has scrolled to the rent section
  if (scrollPos >= rentSectionPos - windowHeight + rentSectionHeight / 2) {
    // Add a class to the section to trigger the animation
    rentSection.classList.add("animated");
  }
}


</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


