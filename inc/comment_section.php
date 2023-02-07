<section class="review_section" id="commentSection">
    <div class="review_heading">
        <h3 class="text-center section-subheading">- Cutomer Reviews -</h3>
        <h1 class="text-center section-heading">Don't Just Take Our Word</h1>
    </div>
    <div class="grid-container">
        <div class="grid-child left">
            <div class="reviews">
                <h2>Add a Review</h2>
                <form action="submit_review.php" method="post" id="review-form">
                    <input type="text" placeholder="Your Name" id="name" name="name" required />
                    <br />
                    <textarea id="comment" placeholder="Your Comment Here" rows="4" cols="50" name="comment" required></textarea>
                    <br />
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="grid-child right scrollable-section">
            <div class="reviews-list">
                <h2>Reviews</h2>
                <ul id="review-list">
                    <?php include "display_reviews.php"; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<style>
    /* Review section styles */

    .review_section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
    }

    .review_heading h3 {
        letter-spacing: 2px;
        font-size: 18px;
        color: #7AB730;
        margin: 45px 0 5px 0;
    }

    .review_heading h1 {
        font-weight: 700;
        font-size: 40px;
        margin-top: 0px;
        letter-spacing: 2px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        margin-bottom: 30px;
    }

    @media only screen and (min-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr 1fr;
        }
    }

    .grid-child {
        padding: 20px;
    }

    .left {
        background-color: #f1f1f1;
        margin: 0 auto;
        box-shadow: 0 0 10px lightgray;
        padding: 20px;
        width: 100%;
        max-width: 600px;
    }

    .right {
        background-color: #fff;
        max-width: 600px;
    }

    .reviews h2 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }

    #review-form {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #review-form input[type="text"],
    #review-form textarea {
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 80%;
        box-sizing: border-box;
    }

    #review-form textarea {
        height: 150px;
    }

    #review-form button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 30%;
        box-sizing: border-box;
    }

    #review-form button:hover {
        background-color: #000;
    }

    .review {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .review p {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .review .reviewname {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .review .stars {
        margin-bottom: 10px;
    }

    .scrollable-section {
        height: 400px;
        overflow: scroll;
    }

    .scrollable-section h2 {
        margin-bottom: 20px;
    }

    /* Responsive styles */

    @media only screen and (max-width: 767px) {
        .left {
            width: 80%;
            max-width: none;
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 480px) {

        #review-form input[type="text"],
        #review-form textarea {
            font-size: 14px;
            padding: 8px;
        }

        #review-form textarea {
            height: 80px;
        }

        #review-form button {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style>

<script>
    // Add event listeners to star review rating
    let stars = document.querySelectorAll(".star");
    let reviewrating = 0;

    function highlightStars(rating) {
        stars.forEach(star => {
            if (star.dataset.value <= rating) {
                star.classList.add("filled");
            } else {
                star.classList.remove("filled");
            }
        });
    }

    function setStars() {
        stars.forEach(star => {
            if (star.dataset.value <= reviewrating) {
                star.classList.add("filled");
            } else {
                star.classList.remove("filled");
            }
        });
    }

    stars.forEach(star => {
        star.addEventListener("click", () => {
            reviewrating = star.dataset.value;
            setStars();
        });
        star.addEventListener("mouseover", () => {
            highlightStars(star.dataset.value);
        });
        star.addEventListener("mouseout", () => {
            setStars();
        });
    });

    // Other code related to review submission goes here
</script>