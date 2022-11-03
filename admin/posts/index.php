<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
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
                        <th scope="col">Action</th>
                        <th scope="col">Publishe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>PHP Blog Project</td>
                        <td>Project</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary mr-1">Edit</a>

                            <a href="" class="btn btn-sm btn-danger">Delete</a>   
                        </td>
                        <td>Unpublish</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>