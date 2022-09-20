<?php
include "include/db.php";
include "include/head.php";
require_once "include/function.php";
?>

<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<?php include "include/page_title_header.php"?>
    <h4 class="mb-sm-0 font-size-18">Index</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Index</a></li>
            <li class="breadcrumb-item active">Index</li>
            <?php include "include/page_title_footer.php"?>
            <!-- end page title -->

            <div class="account-pages pt-sm-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-7">
                            <div class="card overflow-hidden">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-4">
                                                <h5 class="text-primary">Update Profile</h5>
                                                <p>Your Details</p>
                                            </div>
                                        </div>
                                        <?php
                                        $profie_query = "SELECT * FROM login WHERE login.user_id = '3'";
                                        $profile_result = $conn -> query($profie_query);
                                        $profile_update = $profile_result -> fetch_assoc();
                                        ?>

                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="p-2">
                                        <?php
                                        $_SESSION['profile_msg'] = '';
                                        update_password();
                                        echo(!empty($_SESSION['profile_msg']))? $_SESSION['profile_msg'] :'';
                                        ?>
                                        <form action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                                            <input
                                                    type="hidden"
                                                    name="id"
                                                    value="<?php echo(!empty($profile_update['user_id']))? $profile_update['user_id'] :''; ?>"
                                            />
                                            <div class="form-group">
                                                <label for="post_status">Old Password</label>
                                                <input type="password" class="form-control" name="old_password" id="user_password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_fullname">New Password</label>
                                                <input type="text" class="form-control" name="user_password" id="user_fullname" required
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Confirm Password</label>
                                                <input type="text" class="form-control" name="confirm_password" id="username" required
                                                />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary mt-2" name="update_password" id="" value="Update">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="card-body pt-0">
                                    <div class="p-2">
                                        <?php
                                            update_profile();
                                        ?>
                                        <form action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                            <input
                                                type="hidden"
                                                name="id"
                                                value="<?php echo(!empty($profile_update['user_id']))? $profile_update['user_id'] :''; ?>"
                                            />
                                            <div class="form-group">
                                                <label for="user_fullname">Fullname</label>
                                                <input type="text" class="form-control" name="user_fullname" id="user_fullname" required
                                                       value="<?php echo(!empty($profile_update['user_fullname']))? $profile_update['user_fullname'] :''; ?>"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="post_category_id">Email</label>
                                                <input type="email" class="form-control" name="user_email" id="user_email" required
                                                       value="<?php echo(!empty($profile_update['user_email']))? $profile_update['user_email']  :''; ?>"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" required
                                                       value="<?php echo(!empty($profile_update['username']))? $profile_update['username']  :''; ?>"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="image">User Image
                                                    <?php
                                                    if(!empty($profile_update['user_image'])){
                                                        echo '<img width = "100" height = "100" src="assets/images/users/'.$profile_update['user_image'].'">';
                                                    }
                                                    ?>
                                                </label>
                                                <input type="file" class="form-control" name="user_image" id="user_image">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary mt-2" name="update_profile" id="" value="Update">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>