<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/message.php');
?>
    <section style="display: flex;">
        <div class="lside">
        <?php
            require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
        </div>

        <div class="rside">
            <div class="adduser-sec">
                <h2>All Messages</h2>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $key => $message): ?>
                        <tr>
                            <th scope="row"><?php echo $key + 1?></th>
                            <td style="font-weight: bold;"><a href="msg.php?id=<?php echo $message['id']?>"><?php echo $message['name']?></a></td>
                            <td><?php echo $message['email']?></td>
                            <td><?php echo $message['number']?></td>
                            <td><a href="index.php?del_id=<?php echo $message['id']?>" class="btn btn-sm btn-danger">Delete</a> </td>  
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>