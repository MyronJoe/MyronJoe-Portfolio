<?php 
    include 'path.php';
    include(ROOT_PATH . '/app/includes/header.php');
    include ROOT_PATH . "/app/database/db.php";

    $blogs = selectAll('posts', ['blog' => 1, 'published' => 1]);

    // dump($blogs)
?>

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(assets/images/blog-4.jpg)">
      <div class="overlay-itro"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <!--<p class="display-6 color-d">Hello, world!</p>-->
            <h1 class="intro-title mb-4 nobg">I am Myron Joe</h1>
            <p class="intro-subtitle"><span class="text-slider-items">CEO KamTech,Web Developer,Web Designer,Frontend
                Developer,Graphic Designer</span><strong class="text-slider"></strong></p>
            <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <!--/ Intro Skew End /-->
  
    <section id="about" class="about">
      <div class="container about_section">
        <div class="profile">
          <div class="about-profile">
            <div class="about-img" data-aos="zoom-in">
              <img src="assets/images/testimonial-2.jpg" class=" rounded" alt="">
            </div>
            <div class="about-info">
              <p class="about-p"><span class="title-s">Name: </span> <span>Myron Joe</span></p>
              <p class="about-p"><span class="title-s">Profile: </span> <span>Full Stack Developer</span></p>
              <p class="about-p"><span class="title-s">Email: </span> <span><a href="">myronjoe@gmail.com</a></span></p>
              <p class="about-p"><span class="title-s">Phone: </span> <span><a href="">0819 0998 9839</a></span></p>
              <p class="about-p"><a href="#"><span class="fa fa-twitter socials-icon"></span></a> <a href="#"><span
                    class="fa fa-instagram socials-icon"></span></a> <a href="#"><span
                    class="fa fa-facebook socials-icon"></span></a> <a href="#"><span
                    class="fa fa-linkedin socials-icon"></span></a> <a href="#"><span
                    class="fa fa-github socials-icon"></span></a></p>
            </div>
          </div>
          <div class="skill-mf">
            <p class="title-ss">Skill</p>
            <ul class="skils">
              <li>HTML</li>
              <li>CSS3</li>
              <li>JAVASCRIPT</li>
              <li>React</li>
              <li>Python</li>
              <li>Django</li>
              <li>Flask</li>
              <li>Php</li>
              <li>Firebase</li>
            </ul>
          </div>
          <p class="pt-2"><a class="btn btn-primary px-4" href="#about" >Download
              CV</a></p>
        </div>
        <div class="about-me">
          <div class="title-box-2">
            <h5 class="title-left">
              About me
            </h5>
          </div>
          <p class="lead">
            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
            imperdiet et, porttitor
            at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
            porttitor accumsan tincidunt.
          </p>
          <p class="lead">
            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
            porttitor volutpat. Vestibulum
            ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
          </p>
        </div>
      </div>
    </section>
  
    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a ">
                Services
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title nobg">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title nobg">Web Development</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title nobg">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Section Services End /-->
  
    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Projects
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-1.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-1.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Lorem impsum dolor</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-2.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-2.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Loreda Cuno Nere</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-3.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-3.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Mavrito Lana Dere</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-4.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-4.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Bindo Laro Cado</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-5.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-5.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Studio Lena Mado</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="assets/images/work-6.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="assets/images/work-6.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title nobg">Studio Big Bang</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
  
        </div>
      </div>
    </section>
    <!--/ Section Portfolio End /-->
  
    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach($blogs as $key => $blog):?>

            <?php
              $author = selectOne('users', ['id' => $blog['user_id']]);
              // dump($author['profile_image']);
            ?>

            <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"><img src="<?php echo BASE_URL . '/assets/images/' . $blog['image'] ?>" alt="" class="img-fluid"></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category"><?php echo $blog['category']?></h6>
                    </div>
                  </div>
                  <h3 class="card-title nobg"><a href="blog-single.html"><?php echo $blog['title']?></a></h3>
                  <p class="card-description"><?php echo substr($blog['content'], 0, 120).'...'?></p>
                </div>
                <div class="card-footer">
                  <div class="post-author">
                    <a href="#">
                      <img src="<?php echo BASE_URL . '/assets/images/' . $author['profile_image'] ?>" alt="" class="avatar rounded-circle">
                      <span class="author"><?php echo $author['username']?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!--/ Section Blog End /-->
  
<?php 
    include ROOT_PATH . '/app/includes/footer.php'
?>


