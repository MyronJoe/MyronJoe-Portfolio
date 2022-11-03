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
                <a class="btn btn-primary" href="create.php">Add Post</a>
            </div>
            <div class="adduser-sec">
                <h2>Manage Post</h2>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Section</th>
                        <th scope="col">State</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $key => $post):?>
                        <tr>
                            <th scope="row"><?php echo $key + 1 ?></th>
                            <td><?php echo $post['title'] ?></td>
                            <td><?php echo $post['category'] ?></td>

                            <td>
                                <?php if($post['blog']): ?>
                                    <p>Blog</p>
                                <?php else: ?>
                                    <p>Project</p>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php if($post['published']): ?>
                                    <a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="">Unpublish</a>
                                <?php else: ?>
                                    <a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="">Publish</a>
                                <?php endif; ?>
                            </td>

                            
                            <td>
                                <a href="" class="btn btn-sm btn-primary mr-1">Edit</a>

                                <a href="" class="btn btn-sm btn-danger">Delete</a>   
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>