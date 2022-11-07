<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
require_once(ROOT_PATH . '/app/controllers/skill.php');
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
                <a class="btn btn-primary" href="index.php">Manage Skills</a>
                <a class="btn btn-primary" href="create.php">Add Skills</a>
            </div>
            <div class="adduser-sec">
                <h2>Update Skill</h2>
            </div>

            <form action="edit.php" method="POST" class="pb-3">
            <div class="table">
                <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>
            </div>
              
            <input type="hidden"  name="id" value="<?php echo $id?>" class="form-control" id="id" />

                <div class="row table">
                

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="skill" value="<?php echo $skill?>" class="form-control" id="name" placeholder="Skill"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $rating?>" name="rating" id="email"  placeholder="Rating"/>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="update-skill" class="btn btn-primary py-2">Update Skill</button>
                  </div>

                </div>
              </form>

        </div>
    </section>

</body>

</html>