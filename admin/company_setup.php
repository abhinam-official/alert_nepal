<?php
include "include/db.php";
include "include/function.php";
$sql_value = "SELECT * FROM company_setup WHERE id ='2'";
$sql_res = $conn->query($sql_value);
$sql_row = $sql_res -> fetch_assoc();
?>



<?php include "include/head.php"?>


    <?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Company Setup</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                                    <li class="breadcrumb-item active">Company Setup</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <?php
                     save_company_setup();
                ?>
                <form enctype="multipart/form-data" id="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input
                            type="hidden"
                            name="id"
                            value="<?php echo(!empty($sql_row['id']))? $sql_row['id'] :''; ?>"
                    />
                    <div class="form-group ">
                        <div class="mb-3">
                            <label for="name" >Company Name<span class="error">&nbsp;*<?php echo(!empty($input_err['name']))?  $input_err['name'] : '';?></span></label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Company Name"
                                   value="<?php echo $sql_row['name']; ?>"
                            >
                            <span class="help-block"></span>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="company_address" class="form-label">Address<span class="error">&nbsp;*<?php echo(!empty($input_err['company_address']))?  $input_err['company_address'] : '';?></label>
                        <input type="text" name="company_address" class="form-control" id="company_address" placeholder="Enter Company Address"
                               value="<?php echo $sql_row['company_address']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Numbers<span class="error">*<?php echo(!empty($input_err['contact']))?  $input_err['contact'] : '';?></span></label>
                        <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Contact Details"
                               value="<?php echo $sql_row['contact']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="feature_image">Logo Image<span class="error">&nbsp;*<?php echo(!empty($input_err['logo']))?  $input_err['logo'] : '';?></span></label>
                        <input class="form-control" type="file" name="logo" id="logo">
                    </div>
                    <div class="mb-3">
                        <label for="feature_image">Favicon Image<span class="error">&nbsp;*<?php echo(!empty($input_err['favicon']))?  $input_err['favicon'] : '';?></span></label>
                        <input class="form-control" type="file" name="favicon" id="favicon">
                    </div>
                    <div class="mb-3">
                        <label for="email" >Email Address:<span class="error">&nbsp;*<?php echo(!empty($input_err['email']))?  $input_err['email'] : '';?></span></label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Company Email Address"
                               value="<?php echo $sql_row['email']; ?>"
                        >
                    </div>
                    <div>
                        <label for="page_content" > Intro.<span class="error">&nbsp;*<?php echo(!empty($input_err['page_content']))?  $input_err['page_content'] : '';?></span></label>
                    </div>
                    <div class="form-floating">
                        <textarea name="intro" id="intro" cols="70" rows="5"><?php echo $sql_row['intro']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords (Separated By Comma)</label>
                        <input type="text" name="meta_key" class="form-control" id="meta_keywords" placeholder="Enter Meta Keywords"
                               value="<?php echo $sql_row['meta_key']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="meta_desc" class="form-label">Meta Description</label>
                        <input type="text" name="meta_desc" class="form-control" id="meta_desc" placeholder="Enter Meta Description "
                               value="<?php echo $sql_row['meta_desc']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="insta_id" class="form-label">Instagram Link</label>
                        <input type="text" name="insta_id" class="form-control" id="insta_id" placeholder="Enter Instagram link "
                               value="<?php echo $sql_row['insta_id']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="fb_id" class="form-label">Facebook Link</label>
                        <input type="text" name="fb_id" class="form-control" id="fb_id" placeholder="Enter Facebook link "
                               value="<?php echo $sql_row['fb_id']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="twitter_id" class="form-label">Twitter Link</label>
                        <input type="text" name="twitter_id" class="form-control" id="twitter_id" placeholder="Enter Twitter Link"
                               value="<?php echo $sql_row['twitter_id']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="whatsup_id" class="form-label">Whatsapp Number</label>
                        <input type="text" name="whatsup_id" class="form-control" id="whatsup_id" placeholder="Enter Whatsapp Number"
                               value="<?php echo $sql_row['whatsup_id']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="youtube_link" class="form-label">Youtube Link</label>
                        <input type="text" name="youtube_link" class="form-control" id="youtube_link" placeholder="Enter Youtube Link"
                               value="<?php echo $sql_row['youtube_link']; ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="linkedin_id" class="form-label">Linkedin Link</label>
                        <input type="text" name="linkedin_id" class="form-control" id="linkedin_id" placeholder="Enter Linkedin Link"
                               value="<?php echo $sql_row['linkedin_id']; ?>"
                        >
                    </div>

                    <br> <br>
                    <input type="submit" id="submit" class="btn btn-primary" value="Update">
                </form>


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

<!-- END layout-wrapper -->

<!-- Right Sidebar -->

<!-- Footer -->
<?php include "include/footer.php "?>
