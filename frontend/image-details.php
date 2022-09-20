<?php include "../admin/include/db.php"?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <?php include "include/css.php" ?>
</head>

<body>

<!-- Theme Switcher Start -->
<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
<!-- Theme Switcher End -->

<!-- Page Wrapper Start -->
<?php include "include/breadcrumb.php"; ?>
<div class="page-wrapper">
    <?php include "include/header.php"; ?>
    <div class="container">
        <div class="section-title style1 text-center mb-30">
        <div class="row justify-content-center">
            <?php
            $_SESSION['gallery_id'] = $_GET['gallery'];
            $gid = $_SESSION['gallery_id'];
            $thumb_query = "SELECT * FROM images  WHERE gallery_id = '$gid'";
            $thumb_res = $conn->query($thumb_query);
            while($thumb = $thumb_res ->fetch_assoc()){
                ?>
            <div class="col-md-3">

            <a class="insta-item" data-fancybox="gallery" href="../admin/assets/images/gallery/images/<?php echo $thumb['images'] ?>">
                    <img src="../admin/assets/images/gallery/images/<?php echo $thumb['images'] ?>" alt="Image">
                    <span><i class="ri-instagram-line"></i></span>
                </a></div>
            <?php }?>

        </div>
    </div>
</div>

    <?php

    //  include "include/instagram.php";
    include "include/footer.php" ?>

</div>
<!-- Page Wrapper End -->


<?php include "include/js.php"?>

</body>
</html>
