<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/users.php');
?>
    <section style="display: flex;">
        <div class="lside">
        <?php
            require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
        </div>

        <div class="rside">
            <div class="float-right">
                <a class="btn btn-primary" href="create.php">Add Skill</a>
            </div>
            <div class="adduser-sec">
                <h2>Manage Users</h2>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Html</td>
                        <td>80%</td>
                        <td>
                            <a href="edit.php" class="btn btn-sm btn-primary mr-1">Edit</a>

                            <a href="" class="btn btn-sm btn-danger">Delete</a>   
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>