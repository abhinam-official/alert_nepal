<?php
$company_sql = "SELECT * FROM company_setup WHERE company_setup.id = '2'";
$company_res = $conn ->query($company_sql);
$company = $company_res -> fetch_assoc();
?>

<!-- Header Section Start -->
<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <span><i class="flaticon-clock"></i></span>
                                <p>Monday - Friday, 8:00am- 5:00 pm</p>
                            </li>
                            <li>
                                <span><i class="flaticon-phone-call"></i></span>
                                <a href="tel:2455921125"><?php echo $company['contact'];?></a>
                            </li>
                            <li>
                                <span><i class="flaticon-placeholder-1"></i></span>
                                <p><?php echo $company['company_address'];?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-right">
                        <div class="select-lang">
                            <i class="ri-earth-fill"></i>
                            <div class="navbar-option-item navbar-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/uk.png" alt="flag">
                                        Eng
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/china.png" alt="flag">
                                        简体中文
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/uae.png" alt="flag">
                                        العربيّة
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="social-profile list-style style1">
                            <li>
                                <a href="<?php echo $company['fb_id'];?>">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $company['twitter_id'];?>">
                                    <i class="flaticon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $company['linkedin_id'];?>">
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $company['insta_id'];?>">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img class="logo-light" width="100" height="300" src="../admin/assets/images/company/logo/<?php echo  $company['logo'];?>" alt="logo">
                    <img class="logo-dark" width="100" height="300" src="../admin/assets/images/company/logo/<?php echo  $company['logo'];?>" alt="logo">
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item has-child">
                            <a href="index.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                About Us
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                $service_sql = "SELECT * FROM add_content WHERE add_content.content_types = '2'";
                                $service_res = $conn -> query($service_sql);
                                if($service_res -> num_rows > 0){
                                    while ($row = $service_res ->fetch_assoc()){
                                        extract($row);
                                        ?>
                                        <li class="nav-item">
                                            <a href="blog-details.php?blog=<?php echo $id;?>" class="nav-link"><?php echo $content_title ;?></a>
                                        </li>
                                    <?php }} ?>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a href="#" class="nav-link">
                                Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                      $service_sql = "SELECT * FROM add_content WHERE add_content.content_types = '9'";
                                      $service_res = $conn -> query($service_sql);
                                      if($service_res -> num_rows > 0){
                                          while ($row = $service_res ->fetch_assoc()){
                                              extract($row);
                                ?>
                                              <li class="nav-item">
                                                  <a href="blog-details.php?blog=<?php echo $id;?>" class="nav-link"><?php echo $content_title ;?></a>
                                              </li>
                                <?php }} ?>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a href="#" class="nav-link">
                                Media
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                <a href="image-gallery.php" class="nav-link">Image Gallery</a>
                                </li>
                                <li class="nav-item">
                                <a href="Video-gallery.php" class="nav-link">Video Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="other-options md-none">
                        <div class="option-item">
                            <button class="searchbtn"><i class="ri-search-line"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="search-area">
                <input type="search" placeholder="Search Here..">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
            <div class="mobile-bar-wrap">
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->