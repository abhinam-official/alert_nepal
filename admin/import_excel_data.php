<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
                            <h4 class="mb-sm-0 font-size-18">Excel</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Excel</li>
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
                                    Import Excel File
                                </h1>
                                <?php

                                import_excel_data();


                                ?>
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
                                            <label>Import Excel File
                                                <span class="error">&nbsp;*</span>
                                            </label>
                                            <input type="file" class="form-control" name="excel_file" id="import_excel_file" >
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
                                    Excel Data
                                </h1>
                                <div class="card-body">
                                    <div>
                                        <?php
                                        export_excel_data();
                                        if(isset($_GET['print'])){
                                            //
                                            require "pdf/fpdf.php";
                                            $pdf = new FPDF();
                                            $pdf->AddPage();
                                            $pdf->output("");
                                        }
                                      //  delete_data();
                                        ?>
                                    </div>
                                    <div class="text-sm-end mb-2">
                                        <a href="import_excel_data.php?print=datatable"><button class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-printer"></i> Print</button></a>
                                        <a href="import_excel_data.php?export=data"><button class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-export"></i> Export To Excel</button></a>

                                    </div>
                                    <div class="text-sm mb-2">
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                                        <thead>
                                        <tr>
                                            <th scope="col">S.N.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile No</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM import_from_excel";
                                        $res = $conn->query($sql);
                                        if($res -> num_rows > 0){
                                        $sn =1 ;
                                        while($row = $res->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile_no']; ?></td>
                                            <td>
                                                <div class="d-inline-flex align-items-center mt-1">
                                                    <a href="import_excel_data.php.php?edit=<?php echo $row['id'] ?>" class="m-1">
                                                        <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="bx bx-edit"></i>
                                                    </span>
                                                        </div>
                                                    </a>
                                                    <a href="import_excel_data.php?del=<?php echo $row['id'] ?>" class='m-1'>
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
                                <div class="text-sm mb-2">
                                    <button name="print_table" class="btn btn-success">Print</button>
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