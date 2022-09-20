<!-- Instagram Start -->
<div class="instagram-wrap pt-100 pb-75">
    <div class="insta-slider owl-carousel">
        <?php
        $_SESSION['gallery_id'] = $_GET['edit'];
        $gid = $_SESSION['gallery_id'];
        $thumb_query = "SELECT * FROM images  WHERE gallery_id = '$gid'";
        $thumb_res = $conn->query($thumb_query);
        while($thumb = $thumb_res ->fetch_assoc()){
        ?>
        <a class="insta-item" data-fancybox="gallery" href="../admin/assets/images/gallery/images/<?php echo $thumb['images'] ?>">
            <img src="../admin/assets/images/gallery/images/<?php echo $thumb['images'] ?>" alt="Image">
            <span><i class="ri-instagram-line"></i></span>
        </a>
        <?php }?>
    </div>
</div>
<!-- Instagram End -->