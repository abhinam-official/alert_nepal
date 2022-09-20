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
    <section class="event-section bg-smoke space-page mt-5">
        <div class="container">
            <div class="row gy-70">

                <?php
                $img_sql = "SELECT * FROM gallery";
                $img_res = $conn ->query($img_sql);
                while($img = $img_res -> fetch_assoc()){
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="class-card">
                        <div class="class-img">
                            <a href="image-details.php?gallery=<?php echo $img['id'] ?>">
                                <img src="../admin/assets/images/gallery/thumbnail/<?php echo $img['thumb'] ?>" alt="class"></a>
                        </div>
                        <div class="class-content text-center">
                            <h2 class="class-title h4">
                                <a href="image-details.php?gallery=<?php echo $img['id'] ?>"><?php echo $img['title'] ?></a>
                            </h2>
                        </div>
                    </div>
                </div>


                <?php }?>


                <div class="col-lg-12 col-md-12 text-center">
                    <nav>
                        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>





                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="https://ddjkinderworld.com/photo-gallery?page=2">2</a></li>


                            <li class="page-item">
                                <a class="page-link" href="https://ddjkinderworld.com/photo-gallery?page=2" rel="next" aria-label="Next »">›</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    <?php

    //  include "include/instagram.php";
    include "include/footer.php" ?>

</div>
<!-- Page Wrapper End -->


<?php include "include/js.php"?>

</body>
</html>