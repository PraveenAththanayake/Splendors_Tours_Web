
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

<div class="wrapper">
    <div class="box-area">
        <div class="icon-area">
        <i class="fa-solid fa-plane-arrival"></i>
        </div>
        <h6>Airport Pickup</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
    </div>
    <div class="box-area custom">
        <div class="icon-area">
        <i class="fa-solid fa-plane-departure"></i>
        </div>
        <h6>Airport Drop</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
    </div>
    <div class="box-area">
        <div class="icon-area">
        <i class="fa-solid fa-taxi"></i>
        </div>
        <h6>Taxi Service</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
    </div>
    <div class="box-area">
        <div class="icon-area">
        <i class="fa-solid fa-train-tram"></i>
        </div>
        <h6>Tour Service</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
    </div>
    <div class="box-area">
        <div class="icon-area">
        <i class="fa-solid fa-motorcycle"></i>
        </div>
        <h6>Vehicle Rent</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nobis?</p>
    </div>
</div>



<style>
    .ourServices {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: poppins;
        text-align: center;
    }

    .wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .box-area {
        width: 350px;
        margin: 25px;
        padding: 40px;
        background-color: #f5f5f5;
        transition: all 0.6s ease-in-out;
        box-shadow: 0 0 10px lightgray;
    }

    .box-area .icon-area {
        width: 100%;
        margin-bottom: 40px;
    }

    .icon-area i {
        font-size: 70px;
        color: #262626;
    }

    .box-area h6 {
        margin-bottom: 10px;
        color: #262626;
        font-size: 50px;
        font-family: bebas neue;
    }

</style>