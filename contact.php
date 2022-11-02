<?php
include 'path.php';
require_once(ROOT_PATH . '/app/controllers/message.php');
include(ROOT_PATH . '/app/includes/header.php');

?>
<section class="paralax-mf footer-paralax bg-image sect-mt4 route pb-5" style="background-image: url(assets/images/blog-4.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="contact-mf" data-aos="zoom-in">
            <div id="contact" class="box-shadow-full">
                <div class="title-box-2">
                    <h5 class="title-left1 ">
                        Send Us Message
                    </h5>
                </div>
                <div>
                    <form action="contact.php" method="POST" id="form">

                        <div class="table">
                            <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>
                        </div>

                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="name" placeholder="Your Name" />
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="<?php echo $email ?>" name="email" id="email" placeholder="Your Email" />
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $number ?>" name="number" id="subject" placeholder="Mobile Number" />
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <textarea class="form-control" name="content" rows="5" data-rule="required" placeholder="Message"><?php echo $content ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="message-btn" class="btnn py-2">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include ROOT_PATH . '/app/includes/footer.php'
?>