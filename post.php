<?php
require_once 'path.php';
require_once(ROOT_PATH . "/app/includes/header.php");
require_once(ROOT_PATH . "/app/controllers/post.php");

if (isset($_GET['p_id'])) {
    $post = selectOne('posts', ["id" => $_GET['p_id']]);
}

$user = selectOne('users', ['id' => $post['user_id']]);

$blogs = selectAll('posts', ['blog' => 1, 'published' => 1]);

// dump($user);

?>

<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(assets/images/blog-4.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4" style="background: none; font-size:40px"><?php echo $post['title'] ?></h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#"><?php echo $user['username'] ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#"><?php echo $post['category'] ?></a>
                    </li>

                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper " id="blog">
    <div class="container">
        <div class="row" style="margin: 20px 0;">
            <div class="col-md-8" style="background:#fff; padding: 0em">
                <div class="post-box">
                    <div class="post-thumb">
                        <img src="assets/images/<?php echo $post['image'] ?>" style="height: 400px; width:100%; object-fit: cover;" alt="">
                    </div>
                    <div class="post-meta" style="padding: 1em">
                        <h1 class="article-title"><?php echo $post['title'] ?></h1>
                        <ul>
                            <li>
                                <span class="ion-ios-person"></span>
                                <a href="#"><?php echo $user['username'] ?></a>
                            </li>
                            <li>
                                <span class="ion-pricetag"></span>
                                <a href="#"><?php echo $post['category'] ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-content" style="padding: 0 1em 1em 1em">
                        <p>
                            <?php echo html_entity_decode($post['content']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar" style="background:#fff; padding: 1em">
                    <h5 class="sidebar-title">Recent Post</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                            <?php foreach ($blogs as $key => $blog) : ?>
                                <li>
                                    <a href="post.php?p_id=<?php echo $blog['id'] ?>"><?php echo $blog['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
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