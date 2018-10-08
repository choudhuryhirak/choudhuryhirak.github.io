<?php

/*
	Template Name: Mirador Contact Form
*/

?>

<section id="contactUs" style="">
    <div class="container" style="padding-bottom: 2%;">

      <p id="tagline2" style="text-align: left;">
        Contact Us
      </p>
      <!-- <p id="subtitle" style="text-align: center;">@Mirador</p> -->

    </div>

    <div class="container" id="contactbox">
         <div class="row">
            <div class="col-12 col-md-6">

            <div class="card">

            <div class="card-body" style="padding: 10%;">

            <form action="<?php echo get_template_directory_uri(); ?>/postcontact.php" class="form-contact" method="post">
             <!--grid row-->
                <div class="row">
                    <div class="md-form ">
                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                        <label for="firstname">First Name: </label>

                    </div>
                </div>
                 <!--grid row-->
                <div class="row">
                    <div class="md-form ">
                        <input type="text" id="lastname" name="lastname" class="form-control" required>
                        <label for="lastname">Last Name: </label>

                    </div>
                </div>

                 <!--grid row-->

                <div class="row">
                    <div class="md-form ">
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="email">Email: </label>

                    </div>
                </div>

                 <!--grid row-->

                <div class="row">
                    <div class="md-form ">
                        <input type="text" id="subject" name="subject" class="form-control" required>
                        <label for="subject">Subject </label>

                    </div>
                </div>


                <!--grid row-->

                <div class="row">
                    <div class="md-form ">
                        <input type="number" id="number" name="number" class="form-control" max="9999999999"
                       min="1111111111" oninvalid="this.setCustomValidity('Phone Number must be 10 digits and valid')" oninput="this.setCustomValidity('')" required>
                        <label for="number">Mobile Number: </label>

                    </div>
                </div>
                <!--grid row-->

                <div class="row">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message: </label>
                        </div>
                </div>
            <div class="row">
                <div class="text-md-left">
                    <button class="btn btn-outline-dark waves-effect" id="theme-button-2" onclick="document.getElementById('contact-form').submit(); ga( 'send', 'event', 'Contact Details', 'submit' ,'Contact Form');" type="submit">Send</button>
                </div>
            </div>

            </form>

                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container" id="mapmdor">
                  <div class="mapouter"><div class="gmap_canvas" style="margin: auto;"><iframe width="100%" height="770" id="gmap_canvas" src="https://maps.google.com/maps?q=mirador%20homes&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:770px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:770px;width:100%;}</style></div>
                </div>
            </div>
         </div>
    </div>
	</section>
