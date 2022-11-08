<?php
include '../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
    <section style="display: flex;">
        <div class="lside">
        <?php
            require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
        </div>

        <div class="rside">
            <div class="adduser-sec">
                <h2>Myron - Portfolio - Dashboard</h2>


            </div>

        </div>
    </section>

</body>

</html>