<?php
include "include/db.php";
include "include/function.php";

?>
<?php include "include/head.php"?>

<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->
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
                        <?php
                        delete_contact_message();
                        $sql = "SELECT * FROM user_message";
                        $res = $conn->query($sql);
                        ?>
                        <div class="text-sm-end mb-2">
                         <a href="print_table.php"><button onclick="myPrintFun()" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-printer" ></i> Print</button></a>
                        </div>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($res -> num_rows > 0){
                                $sn =1 ;
                                while($row = $res->fetch_assoc()){

                                    ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center mt-1">
                                                <a href="view_contact.php?sn=<?php echo $row['id'] ?>" class="m-1">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="fa fa-eye"></i>
                                                    </span>
                                                    </div>
                                                </a>
                                                <a href="message.php?del=<?php echo $row['id'] ?>" class='m-1'>
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