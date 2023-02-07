<div class="book_form container mt-5">
    <div class="modal" id="airport_booking">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Airport Transfer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <script type="text/javascript">
                        function validateForm() {
                            var name = document.forms["bookingForm"]["name"].value;
                            var email = document.forms["bookingForm"]["email"].value;
                            var phone = document.forms["bookingForm"]["phone"].value;
                            var date = document.forms["bookingForm"]["date"].value;
                            var time = document.forms["bookingForm"]["time"].value;
                            var airportGuests = document.forms["bookingForm"]["airportGuests"].value;
                            var airportChilds = document.forms["bookingForm"]["airportChilds"].value;
                            var pickupOrDrop = document.forms["bookingForm"]["pickupOrDrop"].value;

                            // Validate name
                            if (name == "") {
                                alert("Name must be filled out");
                                return false;
                            }

                            // Validate email
                            if (email == "") {
                                alert("Email must be filled out");
                                return false;
                            }

                            // Validate phone
                            if (phone == "") {
                                alert("Phone must be filled out");
                                return false;
                            }

                            // Validate date
                            if (date == "") {
                                alert("Date must be filled out");
                                return false;
                            }

                            // Validate time
                            if (time == "") {
                                alert("Time must be filled out");
                                return false;
                            }

                            // Validate number of guests
                            if (airportGuests == "" || airportGuests < 1) {
                                alert("Please enter a valid number of guests");
                                return false;
                            }

                            // Validate number of childs
                            if (airportChilds == "" || airportChilds < 0) {
                                alert("Please enter a valid number of childs");
                                return false;
                            }

                            // Validate pickup or drop-off
                            if (pickupOrDrop == "") {
                                alert("Please select if you need airport pickup or drop-off");
                                return false;
                            }

                            // Validate pickup location or drop-off location based on selection
                            if (pickupOrDrop == "pickup") {
                                var dropLocation = document.forms["bookingForm"]["dropLocation"].value;
                                var flightNo = document.forms["bookingForm"]["flightNo"].value;
                                if (dropLocation == "") {
                                    alert("Please enter a drop location");
                                    return false;
                                }
                                if (flightNo == "") {
                                    alert("Please enter your flight number");
                                    return false;
                                }
                            } else if (pickupOrDrop == "drop") {
                                var pickupLocation = document.forms["bookingForm"]["pickupLocation"].value;
                                if (pickupLocation == "") {
                                    alert("Please enter a pickup location");
                                    return false;
                                }
                            }

                            // If all validations pass, return true to submit the form
                            return true;
                        }

                    </script>

                    <form name="bookingForm" method="post" action="airport_book.php" onsubmit="return validateForm()">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" id="airportName" name="airportName" class="form-control" required><br>

                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="airportEmail" name="airportEmail" class="form-control" required><br>

                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" id="airportTele" name="airportTele" class="form-control"
                            placeholder="Whatsapp / Telegram / IMO" required><br>

                        <label for="date" class="form-label">Date:</label>
                        <input type="date" id="airportDate" name="airportDate" class="form-control"
                            min="<?php echo date('Y-m-d'); ?>" required><br>

                        <label for="time" class="form-label">Time:</label>
                        <input type="time" id="airportTime" name="airportTime" class="form-control" required><br>

                        <label for="guestNo" class="form-label">No. of Guests:</label>
                        <input type="number" id="airportGuests" name="airportGuests" class="form-control" min="1"
                            required><br>

                        <label for="childNo" class="form-label">No. of Childs:</label>
                        <input type="number" id="airportChilds" name="airportChilds" class="form-control" min="0"
                            required><br>

                        <label for="pickupOrDrop" class="form-label">Pickup or Drop-Off:</label>
                        <select id="pickupOrDrop" name="pickupOrDrop" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="pickup">Airport Pickup</option>
                            <option value="drop">Airport Drop-Off</option>
                        </select><br>

                        <div id="pickupLocationDiv" style="display: none;">
                            <label for="pickupLocation" class="form-label">Pickup Location:</label>
                            <input type="text" id="pickupLocation" name="pickupLocation" class="form-control"
                                placeholder="Type Hotel Name/Road/Area"><br>
                        </div>

                        <div id="flightNoDiv" style="display: none;">
                            <label for="flightNo" class="form-label">Flight No:</label>
                            <input type="text" id="flightNo" name="flightNo" class="form-control"><br>
                        </div>

                        <div id="dropLocationDiv" style="display: none;">
                            <label for="dropLocation" class="form-label">Drop-Off Location:</label>
                            <input type="text" id="dropLocation" name="dropLocation" class="form-control"
                                placeholder="Type Hotel Name/Road/Area"><br>
                        </div>

                        <label for="airportMessage" class="form-label">Message:</label>
                        <textarea name="airportMessage" id="airportMessage" rows="5" class="form-control"></textarea>

                        <div class="mb-3">
                            <label for="sending option" class="form-label">Send To:</label>
                            <div class="social-platforms">
                                <input type="submit" value="Email" name="airportEmailSend" class="emailbtn">
                                <input type="button" value="Whatsapp" class="whatsappbtn"
                                    onclick="gotoairportwhatsapp()">
                            </div>
                        </div>


                    </form>




                    <script type="text/javascript">
                        var pickupOrDropSelect = document.getElementById("pickupOrDrop");
                        pickupOrDropSelect.addEventListener("change", function () {
                            var pickupLocationDiv = document.getElementById("pickupLocationDiv");
                            var dropLocationDiv = document.getElementById("dropLocationDiv");
                            if (pickupOrDropSelect.value == "pickup") {
                                pickupLocationDiv.style.display = "none";
                                flightNoDiv.style.display = "block";
                                dropLocationDiv.style.display = "block";
                            } else if (pickupOrDropSelect.value == "drop") {
                                pickupLocationDiv.style.display = "block";
                                flightNoDiv.style.display = "none";
                                dropLocationDiv.style.display = "none";
                            } else {
                                pickupLocationDiv.style.display = "none";
                                flightNoDiv.style.display = "none";
                                dropLocationDiv.style.display = "none";
                            }
                        });
                    </script>

                    <script>
                        function gotoairportwhatsapp() {
                            var airportName = document.getElementById('airportName').value;
                            var airportEmail = document.getElementById('airportEmail').value;
                            var airportTele = document.getElementById('airportTele').value;
                            var airportDate = document.getElementById('airportDate').value;
                            var airportTime = document.getElementById('airportTime').value;
                            var airportGuests = document.getElementById('airportGuests').value;
                            var airportChilds = document.getElementById('airportChilds').value;
                            var pickupOrDrop = document.getElementById('pickupOrDrop').value;
                            var pickupLocation = document.getElementById('pickupLocation').value;
                            var flightNo = document.getElementById('flightNo').value;
                            var dropLocation = document.getElementById('dropLocation').value;
                            var airportMessage = document.getElementById('airportMessage').value;

                            var message =
                                'Name: ' + airportName + '%0a' +
                                'Email: ' + airportEmail + '%0a' +
                                'Phone: ' + airportTele + '%0a' +
                                'Date: ' + airportDate + '%0a' +
                                'Time: ' + airportTime + '%0a' +
                                'No. of Guests: ' + airportGuests + '%0a' +
                                'No. of Childs: ' + airportChilds + '%0a' +
                                'Pickup or Drop-Off: ' + pickupOrDrop + '%0a' +
                                (pickupLocation ? 'Pickup Location: ' + pickupLocation + '%0a' : '') +
                                (flightNo ? 'Flight No: ' + flightNo + '%0a' : '') +
                                (dropLocation ? 'Drop-Off Location: ' + dropLocation + '%0a' : '') +
                                'Message: ' + airportMessage;

                            var url = 'https://wa.me/94771417650?text=' + message; // Replace 'whatsappphonenumber' with the phone number you want to send the message to

                            window.open(url);
                        }




                    </script>
                </div>

            </div>
        </div>
    </div>
</div>



