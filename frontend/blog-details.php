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
<div class="page-wrapper">

    <?php include "include/header.php"; ?>
    <?php include "include/breadcrumb.php"; ?>
    <!-- Blog Details Section Start -->
    <?php
    $blog = "SELECT * FROM add_content WHERE add_content.id = {$_GET['blog']}";
    $res_blog =$conn -> query($blog);
    $row_blog = $res_blog -> fetch_assoc();
    extract($row_blog);
    ?>
    <div class="blog-details-wrap ptb-40">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-8">
                    <article>
                        <div class="post-img">
                            <img src="../admin/assets/images/content/<?php echo $feature_image;?>" alt="Image">
                            <a href="posts-by-date.html" class="post-date"><?php echo $created_at; ?></a>
                        </div>
                        <h1><?php echo $content_title;?></h1>
                        <div class="post-para">
                            <?php echo $page_content; ?>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 mt-0">
                    <div class="sidebar">
                        <div class="sidebar-widget popular-post">
                            <h4>Popular Posts</h4>
                            <?php include "include/blog_list.php"?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->


   <?php include "include/footer.php"?>

</div>
<!-- Page Wrapper End -->


<?php include "include/js.php"?>

</body>
</html>
