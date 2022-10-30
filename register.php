<?php 
    include 'path.php';
    require_once(ROOT_PATH . '/app/includes/session.php');
    require_once(ROOT_PATH . '/app/controllers/users.php');
    require_once(ROOT_PATH . '/app/includes/header.php');
?>

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route pb-5"
      style="background-image: url(assets/images/blog-4.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="contact-mf" data-aos="zoom-in">
          <div id="contact" class="box-shadow-full">
            <div class="title-box-2">
              <h5 class="title-left1 ">
                Register
              </h5>
            </div>
            <div>
              <form action="register.php" method="POST" class="contactForm">

              <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

                <div class="row">

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="username" value="<?php echo $username?>" class="form-control" id="name" placeholder="Username"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control" value="<?php echo $email?>" name="email" id="email" placeholder="Your Email"/>
                    </div>
                  </div>
              
                  <!-- <div class="col-md-12 mb-3">
                    <label for="image">Profile-Image</label>
                    <input type="file" class="form-control-file"  id="profile_image" name="profile_image">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="image">Cv-Image</label>
                    <input type="file" class="form-control-file"  id="cv_image" name="cv_image">
                  </div> -->

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $password?>" name="password" id="subject" placeholder="Enter Password"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $confirm_password?>" name="confirm_password" id="subject" placeholder="Confirm Your Password"/>
                    </div>
                  </div>
                 

                  <div class="col-md-12">
                    <button type="submit" name="register-btn"  class="btnn py-2">Register</button>
                  </div>

                  <div class="ml-3 my-2">
                    <small style="font-size: 11px;">Already have an account? <a href="<?php echo BASE_URL . '/login.php'?>">Sing In</a></small>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--/ Section Blog End /-->
<?php 
    include ROOT_PATH . '/app/includes/footer.php'
?>