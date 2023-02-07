<div class="book_form container mt-5">
  <div class="modal" id="guide_hire">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Book a Guide</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">


          <form name="bookingForms" method="post" action="guide.php">

            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" id="guideName" name="guideName" class="form-control" value="" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="guideEmail" name="guideEmail" class="form-control" value="" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" id="guidePhone" name="guidePhone" placeholder="Whatsapp / Telegram / IMO"
                class="form-control" value="" required>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">Date of Booking</label>
              <input type="date" id="guideDate" name="guideDate" min="<?php echo date('Y-m-d'); ?>" value=""
                class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="duration" class="form-label">Duration of Booking(Days)</label>
              <input type="number" id="guideDuration" name="guideDuration" class="form-control" min="1" value=""
                required>
            </div>

            <div class="mb-3">
              <label for="language" class="form-label">Language Preference</label>
              <input type="text" id="guideLanguage" name="guideLanguage" class="form-control" value="" required>
            </div>

            <div class="mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" id="guideLocation" name="guideLocation" class="form-control" value="" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Additional Message</label>
              <textarea id="guideMessage" name="guideMessage" class="form-control" value=""></textarea>
            </div>

            <div class="mb-3">
              <label for="sending option" class="form-label">Send To:</label>
              <div class="social-platforms">
                <input type="submit" value="Email" name="guidedEmailSend" class="emailbtn">
                <input type="button" value="Whatsapp" class="whatsappbtn" onclick="guidedetailswhatsapp()">
              </div>
            </div>

          </form>


          <script>

            function guidedetailswhatsapp() {
              // Get form values
              var guideName = document.getElementById("guideName").value;
              var guideEmail = document.getElementById("guideEmail").value;
              var guidePhone = document.getElementById("guidePhone").value;
              var guideDate = document.getElementById("guideDate").value;
              var guideDuration = document.getElementById("guideDuration").value;
              var guideLanguage = document.getElementById("guideLanguage").value;
              var guideLocation = document.getElementById("guideLocation").value;
              var guideMessage = document.getElementById("guideMessage").value;

              // Create message string
              var url = "https://wa.me/94771417650?text="
                + "Name: " + guideName + "%0a"
                + "Email: " + guideEmail + "%0a"
                + "Phone: " + guidePhone + "%0a"
                + "Date: " + guideDate + "%0a"
                + "Duration: " + guideDuration + "%0a"
                + "Language: " + guideLanguage + "%0a"
                + "Location: " + guideLocation + "%0a"
                + "Message: " + guideMessage;

              window.open(url, '_blank').focus();
            }
            
          </script>
        </div>

      </div>
    </div>
  </div>
</div>