<?php ob_start();
include "include/db.php";
include "include/function.php";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM categories WHERE categories.cat_id ={$id}";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    extract($row);
}
//calling delete function
delete_categories();
?>
<?php include "include/head.php"?>
    <?php include "include/header.php"?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php include "include/left_sidebar.php"?>
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Categories Type</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                                    <li class="breadcrumb-item active">Categories Type</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end page title -->
                <div class="col-lg-12 row">
                    <div class="col-4">
                        <div class="card">
                            <h1 class="card-title-new card-header mb-4">
                                Add Content Type
                            </h1>
                    <!-- Add Category -->
                    <!-- Add content_type -->
                    <?php save_categories(); ?>
                    <div class="card-body">
                        <form action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <input
                                    type="text"
                                    class="form-control"
                                    style="display:none;"
                                    id="cat_id"
                                    name="cat_id"
                                    value="<?php echo(!empty($cat_id))?$cat_id: '';?>"
                            />
                            <div class="mb-3">
                                <label for="content_title">Add Content type</label>
                                <input type="text" class="form-control" value="<?php echo(!empty($cat_title))?$cat_title: '';?>" name="cat_title" id="content_title" required>
                            </div>
                              <div class="mb-3">
                                <label for="content_title" class="form-label">Master Type</label>
                               <select class="form-control" value="<?php echo(!empty($master_title))?$master_title: '';?>" name="master_id" id="master_id" required>
                                    <?php
                                    $master = "SELECT * FROM master";
                                    $result = $conn->query($master);
                                    while ($master_type = $result->fetch_assoc()){
                                        extract($master_type);
                                        ?>
                                        <option value="<?php echo $master_id;?>"><?php echo $master_title;?></option>
                                        <?php
                                    }
                                    ?>
                            </div>
                            <div>
                                <input  type="submit" class="btn btn-primary mt-2" name="submit" id="submit" value="Save" w-md>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
                    <!-- Add content_type -->
                    <!-- content_type Table-->
                            <div class="col-8">
                                <div class="card">
                                    <h1 class="card-title-new card-header mb-4">
                                        Content Type List
                                    </h1>
                                    <div class="card-body">
                       <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Content  Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM categories";
                            $res = $conn->query($sql);
                            $sn = 1;
                            if($res -> num_rows > 0){
                            while ($row = $res -> fetch_assoc()){
                            extract($row);
                            echo "<tr>
                                <td>{$sn}</td>
                                <td>{$cat_title}</td>
                                <td>{$created_at}</td>
                                <td>
                                 <div class='d-inline-flex align-items-center mt-1'>
                                    <a href='content_type.php?edit={$cat_id}' class='m-1'>
                                       <div class='avatar-xs'>
                                            <span class='avatar-title rounded-circle bg-primary font-size-15'>
                                                 <i class='bx bx-edit'></i>
                                            </span>
                                       </div>
                                    </a>
                                    <a href='content_type.php?del={$cat_id}' class='m-1'>
                                        <div class='avatar-xs'>
                                            <span class='avatar-title rounded-circle bg-danger font-size-15'>
                                                 <i class='bx bx-trash'></i>
                                            </span>
                                       </div>
                                    </a>
                                 </div>
                                </td>
                            </tr>";
                            $sn++;
                            }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    </div>

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


<!-- Footer -->
<?php include "include/footer.php "?>