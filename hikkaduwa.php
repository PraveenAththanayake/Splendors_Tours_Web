<?php require('inc/links.php') ?>

<section class="land">
  <?php require('inc/header.php') ?>
</section>


<header class="hikkauwa">
  <main>
    <section class="videoSection">
      <h3>Welcome To Hikaduwa Sri Lanka</h3>
      <h1>DO COME & VISIT <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
      <p>"Sri Lanka once is not enough"</p>
      <a href="#" class="btnone">learn more</a>
    </section>
  </main>


</header>

<style>
  .hikkauwa {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("img/hikkaduwa/random1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

  main {
    width: 100%;
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  .videoSection h3 {
    font-size: 35px;
    font-weight: 500;
    letter-spacing: 3px;
    text-shadow: 2px 1px 5px black;
  }

  .videoSection h1 {
    margin: 30px 0 20px 0;
    font-size: 55px;
    font-weight: 700;
    text-shadow: 2px 1px 5px black;
    text-transform: uppercase;
  }

  .videoSection p {
    font-size: 25px;
    word-spacing: 2px;
    margin-bottom: 25px;
    text-shadow: 1px 1px 1px black;
  }

  .videoSection a {
    padding: 12px 30px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.5s ease;
  }

  .videoSection .btnone {
    /*background: #00b894;*/
    background: #fff;
    color: #000;
  }

  .btnone:hover {
    background: #00b894;
    color: white;
  }

  .videoSection .btntwo {
    background: #00b894;
    color: white;
  }

  .btntwo:hover {
    background: #fff;
    color: #000;
  }

  .change_content:after {
    content: "";
    animation: changetext 10s infinite linear;
    color: #00b894;
  }

  @keyframes changetext {
    0% {
      content: "Pitiwella";
    }

    20% {
      content: "Turtle Beach";
    }

    35% {
      content: "Madu River";
    }

    60% {
      content: "Meuseum";
    }

    80% {
      content: "Narigama";
    }

    100% {
      content: "Akurala";
    }
  }
</style>

<section class="discription">

  <div class="leftImg row">
    <div class="left">
      <div class="img">
        <i>
          <input checked type="radio" name="s" style="background-image: url('img/hikkaduwa/random1.jpg');"
            title="Random Picture 1">
          <input type="radio" name="s" style="background-image: url('img/hikkaduwa/random2.jpg');"
            title="Random Picture 2">
          <input type="radio" name="s" style="background-image: url('img/hikkaduwa/random3.jpg');"
            title="Random Picture 3">
          <input type="radio" name="s" style="background-image: url('img/hikkaduwa/random4.jpg');"
            title="Random Picture 4">
          <input type="radio" name="s" style="background-image: url('img/hikkaduwa/random5.jpg');"
            title="Random Picture 5">
        </i>
      </div>
    </div>
    <div class="right">
      <div class="rightContent">
        <p>
        <h1>Hikkaduwa</h1><br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>&nbsp;
          <span class="text">Location: &nbsp;Southern Province, Galle, Sri Lanka</span>
        </div> <br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>
          <span class="text">Coordinates: &nbsp;6°8′50″N 80°6′37″E</span>
        </div> <br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>&nbsp;
          <span class="text">Area Code: &nbsp;041</span>
        </div> <br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>&nbsp;
          <span class="text">Population: &nbsp;101,342</span>
        </div> <br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>&nbsp;
          <span class="text">Time Zone: &nbsp;UTC+5:30 (Sri Lanka Standard Time Zone)</span>
        </div> <br> <br>
        <div class="container">
          <span class="fa-solid fa-check"></span>&nbsp;
          <span class="text">Post Code: &nbsp;81740</span>
        </div> <br> <br>
        </p>
      </div>
    </div>
  </div>

</section>










<?php require('inc/footer.php') ?>
<?php require('inc/scripts.php') ?>
</body>

</html>