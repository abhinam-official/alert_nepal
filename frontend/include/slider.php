<!--  Section Start -->
<section class="hero-wrap style1">
    <img src="assets/img/hero/hero-shape-3.png" alt="Image" class="hero-shape-three bounce">
    <?php
    $slider_sql = "SELECT * FROM slider";
    $slider_res = $conn ->query($slider_sql);
    while($slider = $slider_res -> fetch_assoc()){
        ?>
    <div class="hero-slider-one owl-carousel">
        <div class="hero-slide-item" style="background-image: url('../admin/assets/images/slider/<?php echo $slider['image'] ?>');background-size: cover;">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                    <div class="hero-content">
                        <span>Welcome To ...</span>
                        <h1><?php echo $slider['title'] ?></h1>
                        <p><?php echo $slider['description'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                    <div class="hero-img-wrap">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
    ?>
    </div>
</section>
<!-- Hero Section End -->