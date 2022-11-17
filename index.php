<?php
include 'path.php';
include(ROOT_PATH . '/app/includes/header.php');
include ROOT_PATH . "/app/database/db.php";

$blogs = selectAll('posts', ['blog' => 1, 'published' => 1]);

$projects = selectAll('posts', ['blog' => 0, 'published' => 1]);

$skills = selectAll('skills');

$user = selectAll('users', ['ultimateAdmin' => 1, 'admin' => 1]);

// dump($blogs);

?>

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(assets/images/blog-4.jpg)">
  <div class="overlay-itro"></div>
  <div class="intro-content display-table">
    <div class="table-cell">
      <div class="container">
        <h1 class="intro-title mb-4 nobg">I am Myron Joe</h1>
        <p class="intro-subtitle"><span class="text-slider-items">CEO KamTech,Web Developer,Web Designer,Frontend
            Developer,Graphic Designer</span><strong class="text-slider"></strong></p>
      </div>
    </div>
  </div>
</div>
<!--/ Intro Skew End /-->

<section id="about" class="about">
  <div class="container about_section">
    <div class="profile">
      <?php foreach ($user as $key => $admin) : ?>
        <div class="about-profile">
          <div class="about-img" data-aos="zoom-in">
            <img src="<?php echo BASE_URL . '/assets/images/' . $admin['profile_image'] ?>" class=" rounded" alt="<?php echo $admin['username'] ?><">
          </div>
          <div class="about-info">
            <p class="about-p"><span class="title-s">Name: </span> <span><?php echo $admin['username'] ?></span></p>
            <p class="about-p"><span class="title-s">Profile: </span> <span><?php echo $admin['status'] ?></span></p>
            <p class="about-p"><span class="title-s">Email: </span> <span><a href=""><?php echo $admin['email'] ?></a></span></p>
            <p class="about-p"><span class="title-s">Phone: </span> <span><a href=""><?php echo $admin['mobile_num'] ?></a></span></p>
            <p class="about-p"><a href="#"><span class="fa fa-twitter socials-icon"></span></a> <a href="#"><span class="fa fa-instagram socials-icon"></span></a> <a href="#"><span class="fa fa-facebook socials-icon"></span></a> <a href="#"><span class="fa fa-linkedin socials-icon"></span></a> <a href="#"><span class="fa fa-github socials-icon"></span></a></p>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="skill-mf">
        <p class="title-ss">Skill</p>
        <ul class="skils">
          <?php foreach ($skills as $key => $skill) : ?>
            <li><?php echo $skill['skill'] ?></li>
          <?php endforeach; ?>
          <!-- <li>CSS3</li>
              <li>JAVASCRIPT</li>
              <li>React</li>
              <li>Python</li>
              <li>Django</li>
              <li>Flask</li>
              <li>Php</li>
              <li>Firebase</li> -->
        </ul>
      </div>
      <?php foreach ($user as $key => $admin) : ?>
        <p class="pt-2"><a class="btn btn-primary px-4" href="<?php echo BASE_URL . '/assets/images/' . $admin['cv_image'] ?>">Download
            CV</a></p>
    </div>
    <div class="about-me">
      <div class="title-box-2">
        <h5 class="title-left">
          About me
        </h5>
      </div>
      <p class="lead">
        <?php echo $admin['about_me'] ?>
      </p>
    </div>
  <?php endforeach; ?>
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

      <?php foreach ($projects as $key => $project) : ?>

        <?php if ($key < 7) : ?>

          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="work-box">
              <a href="<?php echo BASE_URL . '/assets/images/' . $project['image'] ?>" data-lightbox="gallery-mf">

                <div class="work-img">
                  <img style="object-fit: cover;" height="250px" width="100%" src="<?php echo BASE_URL . '/assets/images/' . $project['image'] ?>" alt="">
                </div>
                <div class="work-content mx-3 pt-2">
                  <div class="d-flex" style="justify-content: space-between; align-items:center;">
                    <div class="">
                      <h2 class="w-title nobg"><?php echo $project['title'] ?></h2>
                      <div class="w-more">
                        <span class="w-date"><?php echo $project['category'] ?></span>
                      </div>
                    </div>
                    <div class="">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <p class="ml-3 pb-2"><a href="<?php echo $project['link'] ?>">Preview</a></p>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>

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
      <?php foreach ($blogs as $key => $blog) : ?>

        <?php
        $author = selectOne('users', ['id' => $blog['user_id']]);
        ?>

        <?php if ($key < 3) : ?>

          <div class="col-sm-12 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img style="object-fit: cover;" height="250px" width="100%" src="<?php echo BASE_URL . '/assets/images/' . $blog['image'] ?>" alt=""></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo $blog['category'] ?></h6>
                  </div>
                </div>
                <h3 class="card-title nobg"><a href="blog-single.html"><?php echo $blog['title'] ?></a></h3>
                <p class="card-description"><?php echo substr(html_entity_decode($blog['content']), 0, 120) . '...' ?></p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $author['profile_image'] ?>" alt="" class="avatar rounded-circle">
                    <span class="author"><?php echo $author['username'] ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<?php
include ROOT_PATH . '/app/includes/footer.php'
?>