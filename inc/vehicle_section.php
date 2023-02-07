<div class="book_form  container mt-5">
  <div class="modal" id="rent_vehicle">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Rent a Vehicle</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="bookingForms" action="rent.php" method="post" id="vehiclerentform">

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="gname" id="gname" class="form-control" value="" required placeholder="Your Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="gmail" id="gmail" class="form-control" value="" required
                placeholder="Email Address">
            </div>
            <div class="mb-3">
              <label class="form-label">Phone No</label>
              <input type="tel" name="tele" id="tele" class="form-control" placeholder="Whatsapp / Telegram / Imo"
                value="" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Vehicle Category: (select)</label>
              <select id="vehicle" name="vehicle" class="form-control" required>
                <option value="Bike">Bike</option>
                <option value="Tuk Tuk">Tuk Tuk</option>
                <option value="Car">Car</option>
                <option value="Van">Van</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">How Many Days:(Generally)</label>
              <input type="number" placeholder="How many days you rent" name="howmanydaysyourent"
                id="howmanydaysyourent" class="form-control" value="" required min="1">
            </div>
            <div class="mb-3">
              <label class="form-label">Location</label>
              <input type="text" placeholder="Type Hotel Name/Road/Area" name="glocation" id="glocation"
                class="form-control" value="" required>
            </div>
            <label class="form-label">Message</label>
            <textarea rows="5" placeholder="Message" class="form-control" name="guestrentmsg" id="guestrentmsg" value=""
              required></textarea>
            <div class="mb-3">
              <label for="html" class="form-label sendto">Send To: </label>
              <div class="social-platforms">

                <input class="emailbtn" type="submit" value="Email" name="rent_submit" data-submit="...Sending">
                <input class="whatsappbtn" type="button" name="submit" class="btnSubmit btn-block" onclick="goto()"
                  value="Whatsapp" />

              </div>
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>
</div>



<script>
  function goto() {

    var gname = document.getElementById("gname").value;
    var gmail = document.getElementById("gmail").value;
    var tele = document.getElementById("tele").value;
    var vehicle = document.getElementById("vehicle").value;
    var howmanydaysyourent = document.getElementById("howmanydaysyourent").value;
    var glocation = document.getElementById("glocation").value;
    var guestrentmsg = document.getElementById("guestrentmsg").value;

    var url = "https://wa.me/94771417650?text="
      + "Name: " + gname + "%0a"
      + "Email: " + gmail + "%0a"
      + "Phone: " + tele + "%0a"
      + "Vehicle: " + vehicle + "%0a"
      + "Days: " + howmanydaysyourent + "%0a"
      + "Location: " + glocation + "%0a"
      + "Message: " + guestrentmsg;

    window.open(url, '_blank').focus();
  }
</script>








<style>

  .book_form .modal-header {
    background-color: #007bff;
    color: #fff;
  }

  .book_form .modal-header .btn-close {
    font-size: 1.7rem;
    background-color: white;
  }

  .book_form .modal-title {
    margin: 0;
    font-size: 1.7rem;
  }

  .book_form .form-label {
    font-weight: 600;
    margin-bottom: 5px;
    font-size: 1.3rem;
  }

  .book_form .form-control {
    border-radius: 5px;
    box-shadow: none;
    border-color: #ced4da;
    font-size: 1.3rem;
  }

  .book_form textarea.form-control {
    height: 100px;
  }

  .book_form label.sendto {
    font-weight: 600;
    margin-top: 10px;
  }

  .book_form .emailbtn {
    background-color: #dc3545;
    color: #fff;
    border-radius: 5px;
    border: none;
    padding: 8px 16px;
    margin-right: 10px;
    font-size: 1.3rem;
  }

  .book_form .whatsappbtn {
    background-color: #28a745;
    color: #fff;
    border-radius: 5px;
    border: none;
    padding: 8px 16px;
    font-size: 1.3rem;
  }

  @media only screen and (max-width: 768px) {
    .book_form {
      margin: 0;
    }

    .book_form .modal-content {
      border-radius: 0;
    }

    .book_form .modal-header {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  }
</style>