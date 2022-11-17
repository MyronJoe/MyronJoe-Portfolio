<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
?>
<section style="display: flex;">
    <div class="lside">
        <?php
        require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
    </div>

    <div class="rside">
        <div class="float-right">
            <a class="btn btn-primary" href="<?php echo BASE_URL . '/register.php' ?>">Create User</a>
        </div>
        <div class="adduser-sec">
            <h2>Manage Users</h2>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allUsers as $key => $user) : ?>
                    <?php
                    $id = $user['id']
                    ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['status'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-primary mr-1">Edit</a>

                            <a href="index.php?del_id=<?php echo $id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure...?')">Delete</a>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</section>

</body>

</html>