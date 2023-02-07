<section class="taxi" id="ourVehicles">

    <div class="main-container">
        <h2>
            <center>- Taxi Service -</center>
        </h2>
        <h1>
            <center>Our vehicle Types</center>
        </h1>
        <div class="radio-buttons">

            <label class="custom-radio">
                <input type="radio" name="radio" checked />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/alto.png" alt="">
                        <h3>Budget</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/wagonr.png" alt="">
                        <h3>City</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/suzukievery.png" alt="" style="transform: scaleX(-1);">
                        <h3>Small Van</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/prius.png" alt="">
                        <h3>Car Luxury</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/kdh9.png" alt="" style="transform: scaleX(-1); width:140px;">
                        <h3>9 Seater</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/kdh14.png" alt="">
                        <h3>14 Seater</h3>
                    </div>
                </span>
            </label>

            <label class="custom-radio">
                <input type="radio" name="radio" />
                <span class="radio-btn"><i class="las la-check"></i>
                    <div class="hobbies-icon">
                        <img src="img/taxi/rosa.png" alt="">
                        <h3>Bus</h3>
                    </div>
                </span>
            </label>

        </div>
    </div>
</section>

<style>
    /*booking forms*/
    #ourVehicles {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        place-items: center;
    }

    .main-container {
        width: 80%;
        margin: 5em 0 3em 0;

    }

    .main-container h2 {
        margin: 0;
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        letter-spacing: 2px;
        color: #777777;
    }

    .main-container h1 {
        margin: 10px 0 45px 0;
        font-size: 35px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        letter-spacing: 3px;
        color: #FEB900;
    }


    .radio-buttons {
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .custom-radio input {
        display: none;
    }

    .radio-btn {
        margin: 10px;
        width: 180px;
        height: 200px;
        border: 3px solid transparent;
        display: inline-block;
        border-radius: 10px;
        position: relative;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: auto;
    }

    .radio-btn>i {
        color: #ffffff;
        background-color: #8373e6;
        font-size: 20px;
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%) scale(4);
        border-radius: 50px;
        padding: 3px;
        transition: 0.2s;
        pointer-events: none;
        opacity: 0;
    }

    .radio-btn .hobbies-icon {
        width: 80px;
        height: 80px;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-80%, -40%);
    }

    .radio-btn .hobbies-icon img {
        width: 130px;
        height: 80px;

    }

    .radio-btn .hobbies-icon h3 {
        color: #777777;
        font-family: "Raleway", sans-serif;
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
        margin-left: 30px;
    }

    @media(max-width: 967px) {
        .main-container {
            width: 100%;
        }
    }

    @media(max-width: 830px) {
        .main-container {
            width: 100%;
        }
    }

    
    @media(max-width: 430px) {
        .main-container {
            width: 120%;
        }
    }



    .radio-btn {
        /* existing styles */
        animation: scaleUp 0.5s ease-out forwards;
    }

    @keyframes scaleUp {
        from {
            transform: scale(0);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }


    /*
    .custom-radio input:checked+.radio-btn {
        border: 3px solid #8373e6;
    }

    .custom-radio input:checked+.radio-btn>i {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
*/
</style>

