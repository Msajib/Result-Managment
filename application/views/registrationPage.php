<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Result Managment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>login/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>login/css/main.css">
        <!--===============================================================================================-->
        <script>

        </script>
    </head>
    <body>

        <div class="limiter">
            <?php
            $error_message = $this->session->userdata('error_message');
            if ($error_message) {
                ?>
                <h4 class="error_box"><?php echo $error_message; ?></h4>
                <?php
                $this->session->unset_userdata('error_message');
            } else {
                
            }
            ?>
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Member</h3>
                        <form action="<?php echo base_url();?>Welcome/addNewUser" method="post" enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name *" required value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastName" placeholder="Last Name *" required value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="confirm_password" required placeholder="Confirm Password *" value="" />
                                        <span id='message'></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="male" required checked>
                                                <span> Male </span> 
                                            </label>
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" required value="female">
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email *" required value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="15" name="phoneNumber" required class="form-control" placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="type" required>
                                            <option class="hidden"  selected disabled>Select type...</option>
                                            <option value="student">Student</option>
                                            <option value="teacher">Teacher</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="memberID" required placeholder="Enter varsity ID *" value="" />
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="photo" required="name" class="form-control" placeholder="Upload Your Recent Picture">
                                </div>
                                
                                <div class="col-md-12">

                                    <div class="container-login100-form-btn ">
                                        <button class="login100-form-btn btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Register
                                        </button>
                                    </div>

                                    <div class="text-center p-t-136">
                                        <a class="txt2" href="<?php echo base_url(); ?>Welcome/index">
                                            Already Have a Account
                                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thanks For Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Communicat with varsity authority to accept registration
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




        <!--===============================================================================================-->	
        <script src="<?php echo base_url(); ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>login/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>login/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>login/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Successful').css('color', 'green');
        } else
            $('#message').html('Password Incorrect.....').css('color', 'red');
    });
        </script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>login/js/main.js"></script>

    </body>
</html>