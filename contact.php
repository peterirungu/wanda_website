<?php
  include 'header.php';
  include 'navigation.php';
?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb page-header">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active">Contacts</li>
                    </ol>
                </div>
            </div>
    <!-- /.row -->

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CONTACT US
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-12">
                <!-- Embedded Google Map -->
                <div id="map" style="width: 100%; height: 400px;"></div>
                      <script>
                          function initMap() {
                            var wandaagriculture = {lat: -1.322605, lng: 36.842101};
                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 17,
                              center: wandaagriculture
                            });
                            var marker = new google.maps.Marker({
                              position: wandaagriculture,
                              map: map
                            });
                          }
                        </script>

                   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1XZsW9bGOUKE9KIGsdE3KLi7lshZZ24w&callback=initMap">
                   </script>
            </div>
           
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>

                    <div class="col-md-8 control-group form-group success">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-4 control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="6" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="col-md-12 btn btn-success">Send Message</button></br>
                </form>
            </div>
             <!-- Contact Details Column -->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-phone"></i> Contact Details</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Head Office <br>4th Floor Metropolis (Crater), Mombasa Road<br>
                        </p>
                        <p><i class="fa fa-phone"></i> Tel.No : 0800721750, +254 (0) 204343600</p>
                        <p><i class="fa fa-phone"></i> Office.No :+254 (0) 204343600</p>
                        <p><i class="fa fa-globe"></i> Address : P.O Box 51323-00100, Nairobi, Kenya</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:info@wandamobile.org"> Email: info@wandamobile.org</a>
                        </p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
        <!-- /.row -->
       <?php include 'assets/includes/bottom_banner.php'; ?>
       <hr>
    </div>
    <!-- /.container -->
<?php
  include 'footer.php';
?>