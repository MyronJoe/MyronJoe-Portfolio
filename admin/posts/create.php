<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/post.php');
?>
<section style="display: flex;">
    <div class="lside">
        <?php
        require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
    </div>

    <div class="rside">
        <div class="float-right">
            <a class="btn btn-primary" href="index.php">Manage Post</a>
        </div>
        <div class="adduser-sec">
            <h2>Add Blog Post</h2>
        </div>

        <form action="create.php" method="POST" class="pb-3">
            <div class="table">
            </div>
            <div class="row table">

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" />
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control" placeholder="Content" id="description" value="" value="" name="content"></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <div class="col-md-12 mb-3">
                    <select name="category" id="category" class="form-control">
                        <option value=""></option>
                        <option value="Web Design">Web Design</option>
                        <option value="Graphics Design">Graphics Design</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="link" class="form-control" placeholder="Link" />
                    </div>
                </div>

                <div class="form-group form-check col-md-12 mb-3 ml-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published">
                    <label class="form-check-label" for="exampleCheck1">Publish</label>
                </div>

                <div class="form-group form-check col-md-12 mb-3 ml-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2" name="blog">
                    <label class="form-check-label" for="exampleCheck2">Blog</label>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="create-post" class="btn btn-primary py-2">Add Post</button>
                </div>

            </div>
        </form>

    </div>
</section>

</body>

</html>