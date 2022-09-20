<?php
include "include/db.php";
include "include/function.php";
?>
<?php include "include/head.php"; ?>
<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Gallery List</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end page title -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <h1 class="card-title-new card-header ">
                                    Add Gallery
                                </h1>
                                <div class="card-body">
                                    <?php
                                    $_SESSION['gallery_id'] = $_GET['edit'];
                                    $gid = $_SESSION['gallery_id'];
                                    $thumb_query = "SELECT * FROM images i join gallery g on g.id = i.gallery_id WHERE id = '$gid'";
                                    $thumb_res = $conn->query($thumb_query);
                                    $thumb = $thumb_res ->fetch_assoc();
                               //  print_r($thumb);
                                    ?>
                                    <form  action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">

                                        <input
                                            type="text"
                                            class="form-control"
                                            style="display:none;"
                                            name="id"
                                            id="image-galleryid"
                                            value="<?php echo(!empty($thumb['id']))?$thumb['id'] :''; ?>"
                                        />
                                        <div class="mb-3">
                                            <label >Gallery Title<span class="error">&nbsp;*</span></label>
                                            <input type="text" class="form-control" id="nameid" name="gallery_title" required
                                                   placeholder="Gallery Title"
                                                   value="<?php echo(!empty($thumb['title']))? $thumb['title']:''; ?>"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <label>Gallery Image Thumbnail
                                                <span class="error">&nbsp;*</span>
                                                <?php
                                                if(!empty($thumb['thumb'])){
                                                    echo '<img width = "70" height = "70" src="assets/images/gallery/thumbnail/'.$thumb['thumb'].'">';
                                                }
                                                ?>
                                            </label>
                                            <input type="file" class="form-control" name="image_thumb" id="thumb" >
                                        </div>
                                        <div class="mb-3">
                                            <label>Gallery Images<span class="error">&nbsp;*</span></label>
                                            <input type="file" class="form-control" name="image_gallery[]" id="gallery" multiple >
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary" id="btnadd">
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <h1 class="card-title-new card-header">
                                    Gallery List
                                </h1>
                                <div class="card-body">
                                    <div>
                                        <?php
                                        delete_single_image();
                                        save_image_gallery();
                                        ?>
                                    </div>
                                    <div class="row">
                                        <div class="grid">
                                            <?php
                                            while ($row = $thumb_res->fetch_assoc()){
                                               // print_r($row);
                                                ?>
                                        <div class="grid__item">
                                                <div class="product-img position-relative">
                                                    <div class="img-action product-ribbon">
                                                        <a href="include/delete_images.php?edit=<?php echo $gid?>&del=<?php echo $row['image_id']?>" class="text-white" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to delete?')">
                                        <span class="rounded-circle font-size-20">
                                        <i class="bx bx-trash"></i>
                                        </span>
                                                        </a>
                                                </div>
                                                    <img src="assets/images/gallery/images/<?php echo $row['images']?>" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                </div>
                                      <?php      }
                                            ?>

                                        </div>
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


<?php include "include/footer.php "?>