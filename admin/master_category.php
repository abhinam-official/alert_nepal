<?php ob_start();
include "include/db.php";
include "include/function.php";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM master WHERE master.master_id ={$id}";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    extract($row);
}
//calling delete function
delete_master_id();
?>
<?php include "include/head.php"?>


    <?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Master Type</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                                    <li class="breadcrumb-item active">Master Type</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <br>
                <div class="col-lg-12">
                    <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <h1 class="card-title-new mb-4">
                            Master Type Table
                        </h1>
                    <!-- Add Master -->
                    <?php save_master_category(); ?>
                    <div class="card-body">
                        <form action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <input
                                type="text"
                                class="form-control"
                                style="display:none;"
                                id="master_id"
                                name="master_id"
                                value="<?php echo(!empty($master_id))?$master_id: '';?>"
                            />
                            <div class="mb-3">
                                <label for="master_title">Master id</label>
                                <input type="text" class="form-control" value="<?php echo(!empty($master_title))?$master_title: '';?>" name="master_title" id="master_title" required>
                            </div>
                            <div class="mt-4">
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Save Category">
                            </div>
                        </form> <br>
                    </div>
                        </div>
                    </div>
                    <!-- Add Category -->
                    <!-- Category Category Table-->
                    <div class="col-8">
                        <div class="card">
                            <h1 class="card-title-new card-header mb-4">
                                Master Type List
                            </h1>
                            <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM master";
                                $res = $conn->query($sql);
                                $sn = 1;
                                ?>
                                <table id="datatable" class="table table-bordered dt-responsive text-center nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th>Category Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($res -> num_rows > 0){
                                        while ($row = $res -> fetch_assoc()){
                                            extract($row);
                                            echo "<tr>
                                        <td>{$sn}</td>
                                        <td>{$master_title}</td>
                                        <td>{$created_at}</td>
                                        <td>
                                                <div class='d-inline-flex align-items-center mt-1'>
                                                <a href='master_category.php?edit={$master_id}' class='m-1'>
                                                    <div class='avatar-xs'>
                                                    <span class='avatar-title rounded-circle bg-primary font-size-15'>
                                                    <i class='bx bx-edit'></i>
                                                    </span>
                                                    </div>
                                                </a>
                                                <a href='master_category.php?del={$master_id}' class='m-1'>
                                                    <div class='avatar-xs '>
                                                    <span class='avatar-title rounded-circle bg-danger font-size-10'>
                                                    <i class='fa fa-trash'></i>
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
                        </div> </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Itbha
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->

<!-- Footer -->
<?php include "include/footer.php "?>