<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    #gallery {
        -webkit-column-count: 4;
        -moz-column-count: 4;
        column-count: 4;
        -webkit-column-gap: 20px;
        -moz-column-gap: 20px;
        column-gap: 20px;
    }

    @media (max-width:1200px) {
        #gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 20px;
            -moz-column-gap: 20px;
            column-gap: 20px;
        }
    }

    @media (max-width:800px) {
        #gallery {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            -webkit-column-gap: 20px;
            -moz-column-gap: 20px;
            column-gap: 20px;
        }
    }

    @media (max-width:600px) {
        #gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
        }
    }

    #gallery img {
        width: 100%;
        height: auto;
        margin: 4% auto;
        box-shadow: -3px 5px 15px #000;
        cursor: pointer;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
    }

    .modal-img_galley {
        width: 100%;
        height: auto;
    }

    .modal-body_gallery {
        padding: 0px;
    }

    .load-more,
    .load-less {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        display: block;
        cursor: pointer;
        margin: 0 15px;
        border-radius: 5px;
    }

    .load-more:hover,
    .load-less:hover {
        background-color: #000;
    }

    .load-less {
        display: none;
    }
</style>

<div id="gallery" class="container-fluid">
    <img src="img/gallery/64.jpg" class="img-responsive content">
    <img src="img/gallery/65.jpg" class="img-responsive content">
    <img src="img/gallery/1.jpg" class="img-responsive content">
    <img src="img/gallery/2.jpg" class="img-responsive content">
    <img src="img/gallery/3.jpg" class="img-responsive content">
    <img src="img/gallery/4.jpg" class="img-responsive content">
    <img src="img/gallery/5.jpg" class="img-responsive content">
    <img src="img/gallery/6.jpg" class="img-responsive content">
    <img src="img/gallery/7.jpg" class="img-responsive content">
    <img src="img/gallery/8.jpg" class="img-responsive content">
    <img src="img/gallery/9.jpg" class="img-responsive content">
    <img src="img/gallery/10.jpg" class="img-responsive content">
    <img src="img/gallery/11.jpg" class="img-responsive content">
    <img src="img/gallery/12.jpg" class="img-responsive content">
    <img src="img/gallery/13.jpg" class="img-responsive content">
    <img src="img/gallery/14.jpg" class="img-responsive content">
    <img src="img/gallery/15.jpg" class="img-responsive content">
    <img src="img/gallery/16.jpg" class="img-responsive content">
    <img src="img/gallery/17.jpg" class="img-responsive content">
    <img src="img/gallery/18.jpg" class="img-responsive content">
    <img src="img/gallery/19.jpg" class="img-responsive content">
    <img src="img/gallery/20.jpg" class="img-responsive content">
    <img src="img/gallery/21.jpg" class="img-responsive content">
    <img src="img/gallery/22.jpg" class="img-responsive content">
    <img src="img/gallery/23.jpg" class="img-responsive content">
    <img src="img/gallery/24.jpg" class="img-responsive content">
    <img src="img/gallery/26.jpg" class="img-responsive content">
    <img src="img/gallery/27.jpg" class="img-responsive content">
    <img src="img/gallery/28.jpg" class="img-responsive content">
    <img src="img/gallery/29.jpg" class="img-responsive content">
    <img src="img/gallery/30.jpg" class="img-responsive content">
    <img src="img/gallery/31.jpg" class="img-responsive content">
    <img src="img/gallery/32.jpg" class="img-responsive content">
    <img src="img/gallery/33.jpg" class="img-responsive content">
    <img src="img/gallery/34.jpg" class="img-responsive content">
    <img src="img/gallery/35.jpg" class="img-responsive content">
    <img src="img/gallery/36.jpg" class="img-responsive content">
    <img src="img/gallery/37.jpg" class="img-responsive content">
    <img src="img/gallery/38.jpg" class="img-responsive content">
    <img src="img/gallery/39.jpg" class="img-responsive content">
    <img src="img/gallery/40.jpg" class="img-responsive content">
    <img src="img/gallery/41.jpg" class="img-responsive content">
    <img src="img/gallery/42.jpg" class="img-responsive content">
    <img src="img/gallery/43.jpg" class="img-responsive content">
    <img src="img/gallery/44.jpg" class="img-responsive content">
    <img src="img/gallery/45.jpg" class="img-responsive content">
    <img src="img/gallery/46.jpg" class="img-responsive content">
    <img src="img/gallery/47.jpg" class="img-responsive content">
    <img src="img/gallery/48.jpg" class="img-responsive content">
    <img src="img/gallery/49.jpg" class="img-responsive content">
    <img src="img/gallery/50.jpg" class="img-responsive content">
    <img src="img/gallery/51.jpg" class="img-responsive content">
    <img src="img/gallery/52.jpg" class="img-responsive content">
    <img src="img/gallery/53.jpg" class="img-responsive content">
    <img src="img/gallery/54.jpg" class="img-responsive content">
    <img src="img/gallery/55.jpg" class="img-responsive content">
    <img src="img/gallery/56.jpg" class="img-responsive content">
    <img src="img/gallery/57.jpg" class="img-responsive content">
    <img src="img/gallery/58.jpg" class="img-responsive content">
    <img src="img/gallery/59.jpg" class="img-responsive content">
    <img src="img/gallery/60.jpg" class="img-responsive content">
    <img src="img/gallery/61.jpg" class="img-responsive content">
    <img src="img/gallery/62.jpg" class="img-responsive content">
    <img src="img/gallery/63.jpg" class="img-responsive content">

    <img src="img/gallery/66.jpg" class="img-responsive content">
    <img src="img/gallery/67.jpg" class="img-responsive content">
    <img src="img/gallery/68.jpg" class="img-responsive content">
    <img src="img/gallery/69.jpg" class="img-responsive content">
    <img src="img/gallery/70.jpg" class="img-responsive content">
    <img src="img/gallery/71.jpg" class="img-responsive content">
    <img src="img/gallery/72.jpg" class="img-responsive content">
    <img src="img/gallery/73.jpg" class="img-responsive content">
    <img src="img/gallery/74.jpg" class="img-responsive content">


</div>

<div class="loadmoreFlex">
    <button class="load-more">Load More</button>
    <button class="load-less">Load Less</button>
</div>

<style>
    .loadmoreFlex {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        placeplace-items: center;
        margin-top: 25px;
    }
</style>

<script>
    var itemsToShow = 8; // the number of items to show initially
    var itemsIncrement = 4; // the number of items to add each time the "Load More" button is clicked

    $(document).ready(function () {
        showItems();

        $('.load-more').click(function () {
            itemsToShow += itemsIncrement;
            showItems();
        });

        $('.load-less').click(function () {
            itemsToShow -= itemsIncrement;
            showItems();
        });
    });

    function showItems() {
        $('#gallery').children('.content').hide(); // hide all items

        $('#gallery').children('.content:lt(' + itemsToShow + ')').show(); // show the specified number of items

        if ($('#gallery').children('.content:hidden').length === 0) {
            $('.load-more').hide(); // hide the "Load More" button when all items are shown
        } else {
            $('.load-more').show();
        }

        if (itemsToShow <= 8) {
            $('.load-less').hide(); // hide the "Load Less" button when the initial number of items is shown
        } else {
            $('.load-less').show();
        }
    }


</script>