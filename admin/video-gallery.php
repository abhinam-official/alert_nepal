<?php
include "include/db.php";
include "include/head.php";
include "include/function.php";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $video_sql = "SELECT * FROM video_gallery WHERE video_gallery.id={$id}";
    $video_result = $conn->query($video_sql);
    $video_array = $video_result->fetch_assoc();
    extract($video_array);
}
?>

<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->
<?php include "include/page_title_header.php"?>
    <h4 class="mb-sm-0 font-size-18">Video Gallery List</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">Video Gallery List</li>
            <?php include "include/page_title_footer.php"?>
            <!-- end page title -->
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <h1 class="card-title-new card-header ">
                            Add Member
                        </h1>
                        <div class="card-body">
                            <form  action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">
                                <div>
                                    <input
                                        type="text"
                                        class="form-control"
                                        style="display:none;"
                                        name="id"
                                        id="teamid"
                                        value="<?php echo(!empty($id))? $id :''; ?>"
                                    />
                                    <label  class="form-label">Video Title<span class="error">&nbsp;*</span></label>
                                    <input type="text" class="form-control" id="nameid" name="video_title" required
                                           value="<?php echo(!empty($video_title))? $video_title :''; ?>"
                                    />
                                </div>
                                <div>
                                    <label  class="form-label">Youtube Video ID<span class="error">&nbsp;*</span></label>
                                    <input type="text" class="form-control"id="positionid" name="video_id" required
                                           value="<?php echo(!empty($video_id))? $video_id :''; ?>"
                                    />
                                </div>
                                <div class="mt-2">
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
                            Member List
                        </h1>
                        <div class="card-body">
                            <div>
                                <?php
                                save_video();
                                delete_video();
                                ?>
                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                                <thead>
                                <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Gallery Name</th>
                                    <th scope="col">Video Id</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM video_gallery";
                                $res = $conn->query($sql);
                                if($res -> num_rows > 0){
                                $sn =1 ;
                                while($row = $res->fetch_assoc()){

                                ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td><?php echo $row['video_title']; ?></td>
                                    <td><?php echo $row['video_id']; ?></td>
                                    <td>
                                        <div class="d-inline-flex align-items-center mt-1">
                                            <a href="video-gallery.php?edit=<?php echo $row['id'] ?>" class="m-1">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="bx bx-edit"></i>
                                                    </span>
                                                </div>
                                            </a>
                                            <a href="video-gallery.php?del=<?php echo $row['id'] ?>" class='m-1'>
                                                <div class="avatar-xs ">
                                                    <span class="avatar-title rounded-circle bg-danger font-size-10">
                                                    <i class="fa fa-trash"></i>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>

                                    <?php $sn++; } } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>