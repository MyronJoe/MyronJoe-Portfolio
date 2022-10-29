<?php 
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
                Send Message Us
              </h5>
            </div>
            <div>
              <form action="" method="post" class="contactForm">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="number" id="subject" placeholder="Mobile Number"
                        data-rule="minlen:4" data-msg="Please enter mobile number" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btnn py-2">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--/ Section Blog End /-->