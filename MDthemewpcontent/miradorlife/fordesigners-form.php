
<?php

/*
	Template Name: For Contact Section
*/

?>

 							<div class="card">

                <div class="card-body" style="padding: 10%;">

                  <form action="<?php echo get_template_directory_uri(); ?>/postdesigner.php" class="form-contact" method="post">
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

                       <!--grid row-->
                      <div class="row">
                          <div class="md-form ">
                              <input type="text" id="company" name="company" class="form-control" required>
                              <label for="company">Company: </label>

                          </div>
                      </div>

                       <!--grid row-->

                       <div class="row">
                           <div class="md-form ">
                               <input type="number" id="Mnumber" name="Mnumber" class="form-control" max="9999999999"
                              min="1111111111" oninvalid="this.setCustomValidity('Phone Number must be 10 digits and valid')" oninput="this.setCustomValidity('')" required>
                               <label for="number">Mobile Number: </label>

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
                              <input type="text" id="city" name="city" class="form-control" required>
                              <label for="city">City</label>

                          </div>
                      </div>


                      <div class="row">
                          <div class="md-form ">
                              <input type="text" id="kindofproject" name="kindofproject" class="form-control" required>
                              <label for="kindofproject">Project Details</label>

                          </div>
                      </div>


                      <div class="row">
                          <div class="md-form ">
                              <input type="text" id="requirement" name="requirement" class="form-control" required>
                              <label for="requirement">Requirement</label>

                          </div>
                      </div>


                  <div class="row">
                      <div class="text-md-left">
                        <button class="btn btn-outline-dark waves-effect" id="theme-button-2" onclick="document.getElementById('contact-form').submit(); ga( 'send', 'event', 'Designer Details', 'submit', 'Designer Form');" type="submit">Send</button>
                      </div>
                  </div>

                  </form>
                </div>
              </div>
