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
                    <form  action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">

                            <input
                                type="text"
                                class="form-control"
                                style="display:none;"
                                name="id"
                                id="image-galleryid"
                            />
                        <div class="mb-3">
                            <label >Gallery Title<span class="error">&nbsp;*</span></label>
                            <input type="text" class="form-control" id="nameid" name="gallery_title" required
                                   placeholder="Gallery Title"
                            />
                        </div>
                        <div class="mb-3">
                            <label>Gallery Image Thumbnail
                                <span class="error">&nbsp;*</span>
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
                        <h1 class="card-title-new card-header mb-4">
                            Gallery List
                        </h1>
                        <div class="card-body">
                           <div>
                    <?php
                    save_image_gallery();
                    delete_image_gallery();
                    ?>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                    <thead>
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">date</th>
                        <th scope="col">Gallery Name</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM gallery";
                    $res = $conn->query($sql);
                    if($res -> num_rows > 0){
                    $sn =1 ;
                    while($row = $res->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><img src="assets/images/gallery/thumbnail/<?php echo $row['thumb']; ?>" width = "40" height = "40"></td>
                        <td>
                            <div class="d-inline-flex align-items-center mt-1">
                                <a href="gallery-edit.php?edit=<?php echo $row['id'] ?>" class="m-1">
                                    <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="bx bx-edit"></i>
                                                    </span>
                                    </div>
                                </a>
                                <a href="image_gallery.php?del=<?php echo $row['id'] ?>" class='m-1'>
                                    <div class="avatar-xs ">
                                                    <span class="avatar-title rounded-circle bg-danger font-size-10">
                                                    <i class="fa fa-trash"></i>
                                                    </span>
                                    </div>
                                </a>
                            </div>
                        </td>
                        <?php $sn++; }} ?>
                    </tbody>
                </table>
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