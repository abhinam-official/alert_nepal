<?php include "include/db.php" ?>
<?php include "include/head.php"?>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
<div id="layout-wrapper">


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
                        <h4 class="mb-sm-0 font-size-18">Content List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Content List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- Category Category Table-->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-sm-end mb-2">
                            <a href="faq-add.php"><button class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-plus"></i> Add FAQ</button></a>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive text-center nowrap w-100">
                            <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type Name</th>
                                <th scope="col">Question</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM faq f
                                     JOIN categories c ON c.cat_id = f.type_id
                                     JOIN master m on m.master_id = c.master_type_id";
                            $res = $conn->query($sql);
                            $sn = 1;
                            if($res -> num_rows > 0){
                                $sn =1 ;
                                while($row = $res->fetch_assoc()){
                                    ?>
                                    <tr class="">
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $row['created_at']; ?></td>
                                        <td><?php echo $row['cat_title']; ?></td>
                                        <td><?php echo $row['question']; ?></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center mt-1">
                                                <a href='faq-add.php?edit=<?php echo $row['id'] ?>' class="m-1">
                                                    <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                                <i class="bx bx-edit"></i>
                                                             </span>
                                                    </div>
                                                </a>
                                                <a href='faq-add.php?del=<?php echo $row['id'] ?>' class="m-1">
                                                    <div class="avatar-xs ">
                                                             <span class="avatar-title rounded-circle bg-danger font-size-10">
                                                                 <i class="fa fa-trash"></i>
                                                              </span>
                                                    </div>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $sn++;
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div> </div>

        </div>
        <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>