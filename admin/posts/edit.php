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
            <h2>Edit Blog Post</h2>
        </div>

        <form action="edit.php" method="POST" class="pb-3" enctype="multipart/form-data">
            <div class="table">
                <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <div class="row table">

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title ?>" class="form-control" placeholder="Title" />
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control" placeholder="Content"  id="description" value="" value="" name="content"><?php echo $content ?></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <div class="col-md-12 mb-3">
                    <select name="category" id="category" class="form-control">
                        <option value="<?php echo $category ?>"><?php echo $category ?></option>
                        <option value="Web Design">Web Design</option>
                        <option value="Graphics Design">Graphics Design</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="link" value="<?php echo $link ?>"  class="form-control" placeholder="Link" />
                    </div>
                </div>
                
                <?php if(empty($published) && $published == 0): ?>
                    <div class="form-group form-check col-md-12 mb-3 ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published">
                        <label class="form-check-label" for="exampleCheck1">Publish</label>
                    </div>
                <?php else: ?>
                    <div class="form-group form-check col-md-12 mb-3 ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published" checked>
                        <label class="form-check-label" for="exampleCheck1">Publish</label>
                    </div>
                <?php endif; ?>

                <?php if(empty($blog) && $blog == 0): ?>
                    <div class="form-group form-check col-md-12 mb-3 ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="blog">
                        <label class="form-check-label" for="exampleCheck2">Blog</label>
                    </div>
                <?php else: ?>
                    <div class="form-group form-check col-md-12 mb-3 ml-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="blog" checked>
                        <label class="form-check-label" for="exampleCheck2">Blog</label>
                    </div>
                <?php endif; ?>

                <div class="col-md-12">
                    <button type="submit" name="update-post" class="btn btn-primary py-2">Update Post</button>
                </div>

            </div>
        </form>

    </div>
</section>

</body>

</html>