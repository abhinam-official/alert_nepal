<?php
include "include/db.php";
include "include/head.php";
include "include/function.php";



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
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $to = 'karnabhi3@gmail.com';
            $subject = "Veryfication Code";
            $message = "Your verification code is ";
          //  $header = 'From : karn.abhinam@gmail.com';
          /*  if(mail($to,'Test','Verification Code is ')){
            echo "Mail Sent";
            }else{
            echo "Failed To send Mail";
            }
*/

            include ("mail/mail_detail.php");
            /*  $image_file = $_FILES['image'];
            // $image = get_image($image_file,"");
            $image = resize_image($image_file,"assets/","800",'400');
            echo "<img src='assets/$image' />"; */
            } ?>
<form enctype="multipart/form-data" id="myform" action="" method="POST">

    <div class="form-group ">
        <div class="mb-3">
            <label for="name" >Company Name<span class="error">&nbsp;*
                </span></label>
            <input type="file" name="image" class="form-control" id="image" >
        </div>
    </div>
    <input type="submit" id="submit" class="btn btn-primary" value="Post">
</form>
    <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>