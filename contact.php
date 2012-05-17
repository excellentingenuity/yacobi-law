<?php

	//send contact form by email
	if (isset($_GET['action']) == "send") { //message formatting
		$message = "
		<html>
		<head>
			<title>Contact Form Email</title>
		</head>
			<body>
				<ul>
					<li>Name: ".$_POST['name']."</li>
					<li>Email: ".$_POST['email']."</li>
					<li>Phone: ".$_POST['phone']."</li>
					<li>Message: ".$_POST['message']."</li>
				</ul>
			</body>
		</html>";
		
	//end message formatting
	//set headers
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if (mail("lisa@yacobilawfirm.com", "Contact Form Email", $message, $headers)==1){
			$show = true;
			$modal = "<script>$('#confirmation').modal('show')</script>";
			//"Mail has been sent";
		} else {
			echo "Mail did not send";	
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>Contact Us - Yacobi Adoption Law</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="css/phone.css">
<link rel="stylesheet" media="screen and (min-width: 330px) and (max-width: 590px)" href="css/phone-hz.css"> 
<link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 800px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">

<link rel="icon" href="img/favicon.ico">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--javascript includes -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap-transition.js"></script>
  <script src="assets/js/bootstrap-alert.js"></script>
  <script src="assets/js/bootstrap-modal.js"></script>
  <script src="assets/js/bootstrap-dropdown.js"></script>
  <script src="assets/js/bootstrap-tab.js"></script>
  <script src="assets/js/bootstrap-tooltip.js"></script>
  <script src="assets/js/bootstrap-popover.js"></script>
  <script src="assets/js/bootstrap-button.js"></script>
  <script src="assets/js/bootstrap-collapse.js"></script>



<!-- insert google analytics code here-->


</head>
<body>

<div class="container-fluid" id="page">
	<div class="row-fluid">
    	<div class="span4">
        	<div class="header_logo">
            	<a href="http://www.scadoptlaw.com"><img class="banner_logo" src="img/logo6a.png" alt="Yacobi Law Firm Grow-fluiding Families One Adoption at a time."></a>
            </div>
        </div>
        <div class="span5 offset2">
        	<div class="tag_line">
            	<strong>Growing Families One Adoption at a Time.</strong>
            </div>
        </div>
    </div>
    <div class="row-fluid">
    	<div class="span12">
        	<div class="nav visible-desktop" id="nav_menu">
                <ul class="nav nav-pills" id="top_nav">
                	<li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>Home</a></li>
                    <li><a id="button_navs" href="birth.html">Birth Parents</a></li>
                    <li><a id="button_navs" href="adoptive.html">Adoptive Parents</a></li>
                    <li><a id="button_navs" href="portfolios.html">Family Portfolios</a></li>
                    <li><a id="button_navs" href="Laws.html">Adoption Laws</a></li>
                    <li><a id="button_navs" href="FAQ.html">FAQ</a></li>
                    <li><a id="button_navs" href="about.html">About Us</a></li>
                    <li class="active"><a id="button_navs_active" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="nav visible-tablet" id="nav_menu">
                <ul class="nav nav-pills nav-stacked" id="top_nav">
                	<li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>Home</a></li>
                    <li><a id="button_navs" href="birth.html">Birth Parents</a></li>
                    <li><a id="button_navs" href="adoptive.html">Adoptive Parents</a></li>
                    <li><a id="button_navs" href="portfolios.html">Family Portfolios</a></li>
                    <li><a id="button_navs" href="Laws.html">Adoption Laws</a></li>
                    <li><a id="button_navs" href="FAQ.html">FAQ</a></li>
                    <li><a id="button_navs" href="about.html">About Us</a></li>
                    <li class="active"><a id="button_navs_active" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="nav visible-phone" id="nav_menu">
                <ul class="nav nav-pills nav-stacked" id="top_nav">
                	<li><a id="button_navs" href="index.html"><i class="icon-home icon-white"></i>Home</a></li>
                    <li><a id="button_navs" href="birth.html">Birth Parents</a></li>
                    <li><a id="button_navs" href="adoptive.html">Adoptive Parents</a></li>
                    <li><a id="button_navs" href="portfolios.html">Family Portfolios</a></li>
                    <li><a id="button_navs" href="Laws.html">Adoption Laws</a></li>
                    <li><a id="button_navs" href="FAQ.html">FAQ</a></li>
                    <li><a id="button_navs" href="about.html">About Us</a></li>
                    <li class="active"><a id="button_navs_active" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
	<div class="modal hide fade" id="confirmation">
    	<div class="modal-header">
        	<button class="close" data-dismiss="modal">x</button>
            <h3>Thank you</h3>
        </div>
        <div class="modal-body">
        	<p class="confirmation">
            	Thank you for contacting us we will reply shortly.
            </p>
        </div>
       	<div class="modal-footer">
        	<a href="#" class="btn btn-primary" data-dismiss="modal" id="confirmation_close">Close</a>
        </div>
    </div>
    <div class="row-fluid hidden-phone" id="contact_row">
    <div class="span3">
              <div class="contact_block">
              	 <h3 class="contact_heading">Contact Us</h3>
                  <p class="info">
                  	<strong>Stephen Yacobi</strong><br />
                    Attorney
                  </p>
                  <!-- contact infortmation block -->
                  <address>
                      408 N. Church Street<br />
                      Greenville, SC 29601<br />
                      Toll-Free: 1.800.293.8735<br />
                      Phone: 864.242.3271<br />
                      Fax: 864.233.3750<br />
                      <a class="btn btn-primary btn-info btn-large" id="email_btn" href="mailto:lisa@yacobilawfirm.com" alt="Email Us"><i class="icon-envelope icon-white"></i>&nbsp;Email</a>
                  </address>
              </div>
         </div>
    	<div class="span4">
        	<p class="form_info">
            
            </p>
            <p class="form_info">
            
            </p>
            <div class="my_contact">
            <form id="contact_form" class="form-verical" method="post" action="/scadoptlaw/contact.php?action=send">
            	<fieldset>
                	<legend id="contact_form_para">Contact Us <br />
                    <small id="contact_small">All fields are Required</small>
                    </legend>
                    <div class="control-group">
                    	<label class="control-label" for="name">Name:</label>
                        <div class="controls">
                        	<input type="text" class="input-xlarge" name="name" id="name" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="email">Email:</label>
                        <div class="controls">
                        	<input type="text" class="input-xlarge" name="email" id="email" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="phone">Phone:</label>
                        <div class="controls">
                        	<input type="text" class="input-xlarge" name="phone" id="phone" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="message">Message:</label>
                        <div class="controls">
                            <textarea class="input-xlarge" name="message" id="message" rows="7"></textarea>
                      	</div>
                    </div>
                    <div class="form-actions" id="form_button_group">
      					<button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
      					<button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
    				</div>
                </fieldset>
            </form>
            </div>
        </div>
        <div class="span4" id="map">
        	<div class="thumbnail" id="map_thumb">
        	<iframe id="gmap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=408+N.+Church+Street+++Greenville,+SC+29601&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.490703,93.076172&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=408+N+Church+St,+Greenville,+South+Carolina+29601&amp;ll=34.853679,-82.392826&amp;spn=0.035217,0.042915&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
        	</div>
        </div>
    </div>
    <div class="row-fluid visible-phone" id="contact_row">
    	<div class="span4">
              <div class="contact_block">
              	 <h3 class="contact_heading">Contact Us</h3>
                  <p class="info">
                  	<strong>Stephen Yacobi</strong><br />
                    Attorney
                  </p>
                  <!-- contact infortmation block -->
                  <address>
                      408 N. Church Street<br />
                      Greenville, SC 29601<br />
                      Toll-Free: 1.800.293.8735<br />
                      Phone: 864.242.3271<br />
                      Fax: 864.233.3750<br />
                      <a class="btn btn-primary btn-info btn-large" id="email_btn" href="mailto:lisa@yacobilawfirm.com" alt="Email Us"><i class="icon-envelope icon-white"></i>&nbsp;Email</a>
                      <a class="btn btn-primary btn-info btn-large" id="email_btn" href="http://g.co/maps/6zh5x" alt="Map">Map</a>
                  </address>
              </div>
         </div>
    </div>
    <div class="row-fluid visible-phone">
    	<div class="span3">
        	<p class="form_info">
            
            </p>
            <p class="form_info">
            
            </p>
            <div class="my_contact">
            <form id="contact_form" class="form-verical" method="post" action="/scadoptlaw/contact.php?action=send">
            	<fieldset>
                	<legend id="contact_form_para">Contact Us <br />
                    <small id="contact_small">All fields are Required</small>
                    </legend>
                    <div class="control-group">
                    	<label class="control-label" for="name">Name:</label>
                        <div class="controls">
                        	<input type="text" class="input-large" name="name" id="name" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="email">Email:</label>
                        <div class="controls">
                        	<input type="text" class="input-large" name="email" id="email" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="phone">Phone:</label>
                        <div class="controls">
                        	<input type="text" class="input-large" name="phone" id="phone" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="message">Message:</label>
                        <div class="controls">
                            <textarea class="input-large" name="message" id="message" rows="3" cols="4"></textarea>
                      	</div>
                    </div>
                    <div class="form-actions" id="form_button_group">
      					<button type="submit" id="form_submit" class="btn btn-primary btn-large">Submit</button>
      					<button type="reset" id="form_cancel" class="btn btn-large">Cancel</button>
    				</div>
                </fieldset>
            </form>
            </div>
        </div>
     </div>
     

</div>

<footer class="footer_bottom">
	<div class="container" id="footer">
    	<div class="row">
    	<div class="span12" id="footer"> 
        	<!-- Footer area -->
            <div class="footer">
            	<h4 id="footer">Yacobi Law Firm</h4>
            	<strong id="footer">Copyright 2012</strong>
                
            </div>
        </div>
    </div>
    </div>
</footer>
<?php
	if (show == true){
		echo $modal;
	}
?>
</body>
</html>
