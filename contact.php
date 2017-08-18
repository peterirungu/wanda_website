<?php
  include 'header.php';
  include 'navigation.php';
?>
<!-- Page Content -->
    <div class="container">

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
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
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
                    <button type="submit" class="col-md-12 btn btn-success">Send Message</button>
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
        <hr>
    </div>
    <!-- /.container -->
<?php
  include 'footer.php';
?>