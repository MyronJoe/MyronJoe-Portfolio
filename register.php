<?php 
    include 'path.php';
    include(ROOT_PATH . '/app/includes/header.php')
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
              <form action="" method="post" class="contactForm">


                <div class="row">

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" id="name" placeholder="Username"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="password" id="subject" placeholder="Enter Password"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="confirm_password" id="subject" placeholder="Confirm Your Password"/>
                    </div>
                  </div>
                 

                  <div class="col-md-12">
                    <button type="submit" name="register-btn" class="btnn py-2">Register</button>
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