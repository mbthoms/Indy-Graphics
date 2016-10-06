<?php
	$title ="Contact Us | Indy Graphics";
	// Bringing in the head.
	require_once('head.php');
	// Naming the page.
	$title = "Contact Us - Indy Graphics";
	// Bringing in the header.
	require_once('header.php');
?>
<div class="container">
<!-- Making the page content go to the middle of the browser viewport. -->
<div id="page_content">
	<div class="page-header">
    	<h1>Contact Us</h1>
    </div>
	<div class="row">
    <section class="col-sm-12 col-md-6 col-lg-8">
    	<h2>Contact Information</h2>
        
        <div class="row text-center">
        	<section class="col-sm-12 col-md-6 col-lg-6">
            	<h4><span class="fa fa-phone fa-3x"></span></h4>
                <h3>Phone</h3>
                <a href="tel:9058322780">(905) 832-2780</a>
            </section>
            <section class="col-sm-12 col-md-6 col-lg-6">
            	<h4><span class="fa fa-envelope fa-3x"></span></h4>
                <h3>Email</h3>
                <a href="mailto:sales@indygraphics.ca">sales@indygraphics.ca</a>
            </section>
        </div>
        <div id="contact-info-line-2" class="row text-center">
        	<section class="col-sm-12 col-md-6 col-lg-6">
            	<h4><span class="fa fa-location-arrow fa-3x"></span></h4>
            	<h3>Mailing Address</h3>
                <a href="https://www.google.ca/maps/place/Indy+Graphics/@43.6356655,-80.0462517,17z/data=!3m1!4b1!4m2!3m1!1s0x882b28c66c8bac51:0x70caf396ba36b218">33 Dairy Drive, Acton,<br /> Ontario, Canada L7J 2X8</a>
            </section>
            <section class="col-sm-12 col-md-6 col-lg-6">
            	<h4><span class="fa fa-hourglass-half fa-3x"></span></h4>
            	<h3>Business Hours</h3>
            	<p>Monday: 9:00 AM – 5:00 PM</p>
            	<p>Tuesday: 9:00 AM – 5:00 PM</p>
                <p>Wednesday: 9:00 AM – 5:00 PM</p>
                <p>Thrusday: 9:00 AM – 5:00 PM</p>
                <p>Friday: 9:00 AM – 5:00 PM</p>
                <p>Saturday: Closed</p>
                <p>Sunday: Closed</p>
                <p>Holidays: Closed</p>
			</section>
        </div>
    </section>
        <section class="col-sm-12 col-md-6 col-lg-4">
        <h2>Contact Form</h2>
        <form id="contact_form" method="post" action="send_contact_email.php">
       	<fieldset>
            <label for="first_name">First Name: <span id="requried_field_star" >*</span></label>
            <input method="post" type="text" name="first_name" requried maxlength="50" size="30" class="form-control">
        </fieldset>
        <fieldset>
        	<label for="last_name">Last Name: <span id="requried_field_star" >*</span></label>
            <input method="post" type="text" name="last_name" requried maxlength="50" size="30" class="form-control">
        </fieldset>
        <fieldset>
            <label for="company_name">Company Name:</label>
            <input method="post" type="text" name="company_name" maxlength="50" size="30" class="form-control">
        </fieldset>
        <fieldset>
            <label for="email">Email Address: <span id="requried_field_star" >*</span></label>
            <input method="post" type="text" name="email" maxlength="80" size="30" class="form-control">
        </fieldset>
        <fieldset>
            <label for="phone_number">Phone Number: <span id="requried_field_star" >*</span></label>
            <input method="post" type="text" name="phone_number" maxlength="30" size="30" class="form-control">
        </fieldset>
        
        <fieldset>
            <label for="address">Address: <span id="requried_field_star" >*</span></label>
            <textarea method="post" name="address" maxlength="1000" cols="25" rows="3" class="form-control"></textarea>
        </fieldset>
        <fieldset>
            <label for="message">Message: <span id="requried_field_star" >*</span></label>
            <textarea method="post" name="message" maxlength="1000" cols="30" rows="10" class="form-control"></textarea>
        </fieldset>
        <fieldset>
            <input class="btn-primary form-control" type="submit" value="Send Message">
        </fieldset>
        <div id="fineprint">
		<small><p id="instructions_on_quote_fields"><span id="requried_field_star" >*</span> is a requried field to send a message.</p></small>
	</div>
	</div>
	
</form> <!-- End of quote form. -->
</section>
</div> <!-- End of the page_content div. -->
</div> <!-- /.container -->
<?php
// Bringing in the footer.
require_once('footer.php');
?>