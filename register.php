<?php include_once ("includes/header.php"); ?>

              <div class="container">
                  <div class="col-sm-6 col-sm-offset-3">
                      <div class="well">

                        <h4> Register Account Here !</h4>

                          <form id="loginForm" method="POST" action="" novalidate="novalidate">

                            <div class="form-group">

                                <input type="text" class="form-control" id="firstname" name="firstName" value="" required placeholder="First Name">
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="lastname" name="lastName" value="" required placeholder="Last Name">
                                <span class="help-block"></span>
                            </div>



                              <div class="form-group">

                                  <input type="email" class="form-control" id="username" name="username" value="" required placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <input type="password" class="form-control" id="password2" name="password2" value="" required="" placeholder="PASSWORD">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <input type="password" class="form-control" id="password2" name="password2" value="" required="" placeholder="Re-enter Password">
                                  <span class="help-block"></span>
                              </div>

                              <button type="submit" class="btn btn-success btn-block"> Register </button>
                          </form>
                      </div>
                  </div>
                </div>


<?php include_once 'includes/footer.php'; ?>
