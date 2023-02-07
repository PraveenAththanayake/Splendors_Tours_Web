<!--Taxi Booking-->
<div class="book_form container mt-5">
    <div class="modal" id="taxi_booking">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Your Trip...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">


                    <form class="bookingForms" action="taxi.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="taxiname" id="taxiname" class="form-control" value="" required
                                placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="taxigmail" id="taxigmail" class="form-control" value="" required
                                placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone No</label>
                            <input type="tel" name="taxitele" id="taxitele" class="form-control"
                                placeholder="Whatsapp / Telegram / Imo" value="" required>
                        </div>
                        <!--   <div class="mb-3">
                        <label class="form-label">Select Vehicle Type</label>
                            <div class="taxi-radio-tile-group">

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                    <img src="img/taxi/budgetcar.png" alt="">
                                        <label for="pickup">Budget</label>
                                    </div>
                                </div>

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                    <img src="img/taxi/citycar.png" alt="">
                                        <label for="pickup">City</label>
                                    </div>
                                </div>

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <label for="drop">Small Van</label>
                                    </div>
                                </div>

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <label for="drop">Car Luxury</label>
                                    </div>
                                </div>

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <label for="drop">9 seater</label>
                                    </div>
                                </div>

                                <div class="taxi-input-container">
                                    <input id="pickordrop" type="radio" name="pickordrop" value="">
                                    <div class="radio-tile">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <label for="drop">14 seater</label>
                                    </div>
                                </div>

                            </div>
                        </div>-->
                        <div class="mb-3">
                            <label class="form-label">Pickup Location</label>
                            <input type="text" placeholder="Type Hotel Name/Road/Area" name="taxipickuplocation"
                                id="taxipickuplocation" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Drop Location</label>
                            <input type="text" placeholder="Type Hotel Name/Road/Area" name="taxidroplocation"
                                id="taxidroplocation" class="form-control" value="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">How Many Persons</label>
                            <input type="number" placeholder="Number of Persons" name="howmanypersons"
                                id="howmanypersons" class="form-control" value="" required min="1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">How Many childs</label>
                            <input type="number" placeholder="Number of Childs " name="howmanychilds" id="howmanychilds"
                                class="form-control" value="" required min="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="taxibookdate" id="taxibookdate"
                            min="<?php echo date('Y-m-d'); ?>"  value="">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Time</label>
                            <input type="time" class="form-control" name="taxibooktime" id="taxibooktime" value="">
                        </div>
                        <label class="form-label">Message</label>
                        <textarea rows="5" placeholder="Message" class="form-control" name="guesttaximsg"
                            id="guesttaximsg" value="" required></textarea>
                        <div class="mb-3">
                            <label for="html" class="form-label required sendto">Send To: </label>
                            <div class="social-platforms">

                                <input class="emailbtn" type="submit" value="Email" name="taxi_submit"
                                    data-submit="...Sending">
                                <input class="whatsappbtn" type="button" name="submit" class="btnSubmit btn-block"
                                    onclick="gototaxiwhatsapp()" value="Whatsapp" />

                            </div>
                        </div>
                    </form>

                    <script>
                        function gototaxiwhatsapp() {

                            var taxiname = document.getElementById("taxiname").value;
                            var taxigmail = document.getElementById("taxigmail").value;
                            var taxitele = document.getElementById("taxitele").value;
                            var taxipickuplocation = document.getElementById("taxipickuplocation").value;
                            var taxidroplocation = document.getElementById("taxidroplocation").value;
                            var howmanypersons = document.getElementById("howmanypersons").value;
                            var howmanychilds = document.getElementById("howmanychilds").value;
                            var taxibookdate = document.getElementById("taxibookdate").value;
                            var taxibooktime = document.getElementById("taxibooktime").value;
                            var guesttaximsg = document.getElementById("guesttaximsg").value;

                            var url = "https://wa.me/94771417650?text="
                                + "Name: " + taxiname + "%0a"
                                + "Email: " + taxigmail + "%0a"
                                + "Phone: " + taxitele + "%0a"
                                + "Location-Pickup: " + taxipickuplocation + "%0a"
                                + "Location-Drop: " + taxidroplocation + "%0a"
                                + "Persons: " + howmanypersons + "%0a"
                                + "childs: " + howmanychilds + "%0a"
                                + "Date: " + taxibookdate + "%0a"
                                + "Time: " + taxibooktime + "%0a"
                                + "Message: " + guesttaximsg;

                            window.open(url, '_blank').focus();
                        }


                    </script>


                </div>

            </div>
        </div>
    </div>
</div>



