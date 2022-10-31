<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/skill.php');
?>
    <section style="display: flex;">
        <div class="lside">
        <?php
            require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
        </div>

        <div class="rside">
            <div class="float-right">
                <a class="btn btn-primary" href="index.php">Add Skills</a>
            </div>
            <div class="adduser-sec">
                <h2>Add Skill</h2>
            </div>

            <form action="create.php" method="POST" class="pb-3">
            <div class="table">
                <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>
            </div>

                <div class="row table">
                

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="skill" class="form-control" id="name" placeholder="Skill"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="rating" id="email"  placeholder="Rating"/>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="create-skill" class="btn btn-primary py-2">Add Skill</button>
                  </div>

                </div>
              </form>

        </div>
    </section>

</body>

</html>