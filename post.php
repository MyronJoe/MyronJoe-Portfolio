<?php
require_once 'path.php';
require_once(ROOT_PATH . "/app/includes/header.php");
require_once(ROOT_PATH . "/app/controllers/post.php");

if (isset($_GET['p_id'])) {
    $post = selectOne('posts', ["id" => $_GET['p_id']]);
}

// dump($post);

?>

<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(assets/images/blog-4.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Blog Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-box">
                    <div class="post-thumb">
                        <img src="img/post-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="post-meta">
                        <h1 class="article-title">Lorem ipsum dolor sit amet consec tetur adipisicing</h1>
                        <ul>
                            <li>
                                <span class="ion-ios-person"></span>
                                <a href="#">Jason London</a>
                            </li>
                            <li>
                                <span class="ion-pricetag"></span>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <span class="ion-chatbox"></span>
                                <a href="#">14</a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-content">
                        <p>
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                            porta. Quisque velit
                            nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque
                            nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                            Nulla quis lorem ut libero malesuada feugiat.
                        </p>
                        <p>
                            Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                            aliquet elit, eget tincidunt
                            nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                        </p>
                        <p>
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Praesent
                            sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                            sem. Donec rutrum congue leo eget malesuada.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat.
                            Curabitur arcu erat,
                            accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor
                            volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium
                            ut lacinia in, elementum id enim.
                        </p>
                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <p>
                            Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                            aliquet elit, eget tincidunt
                            nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                        </p>
                    </div>
                </div>
                
               
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar sidebar-search">
                    <h5 class="sidebar-title">Search</h5>
                    <div class="sidebar-content">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary btn-search" type="button">
                                        <span class="ion-android-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="widget-sidebar">
                    <h5 class="sidebar-title">Recent Post</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                            <li>
                                <a href="#">Atque placeat maiores.</a>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                            <li>
                                <a href="#">Atque placeat maiores nam quo autem</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
<!--/ Section Blog-Single End /-->

<!--/ Section Contact-Footer Star /-->
<?php
include ROOT_PATH . '/app/includes/footer.php'
?>