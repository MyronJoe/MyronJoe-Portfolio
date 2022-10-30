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
            <div class="adduser-sec">
                <h2>Edit Users</h2>
            </div>

            <form action="register.php" method="POST" class="pb-3">
              
            <input type="hidden" value="<?php echo $id?>" name="id" class="form-control" id="id" />

                <div class="row table">
                

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" value="<?php echo $username?>" id="name" placeholder="Username"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $email?>" placeholder="Your Email"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="status" id="subject" value="<?php echo $status?>" placeholder="What is your status"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="mobile_num" value="<?php echo $mobile_num?>" id="subject" placeholder="Enter Mobile Number"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <textarea class="form-control" placeholder="About Me" id="description" value="" value="" name="about_me"><?php echo $about_me?></textarea>
                  </div>
              
                  <div class="col-md-12 mb-3">
                    <label for="image">Profile-Image</label>
                    <input type="file" class="form-control-file"  id="profile_image" name="profile_image">
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="image">Cv-Image</label>
                    <input type="file" class="form-control-file"  id="cv_image" name="cv_image">
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="password" id="subject" placeholder="Enter Password"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control" name="confirm_password" id="subject" placeholder="Confirm Your Password"/>
                    </div>
                  </div>
                 
                  <div class="col-md-12 mb-3">
                    <?php if (isset($admin) && $admin == 1):?>
                        <label>
                        <input type="checkbox" name="admin" checked>
                        Admin
                        </label>
                    <?php else:?>
                        <label>
                        <input type="checkbox" name="admin">
                        Admin
                        </label>
                    <?php endif;?>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="update-user" class="btn btn-primary py-2">Update user</button>
                  </div>

                </div>
              </form>

        </div>
    </section>

</body>

</html>