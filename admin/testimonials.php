<?php include "include/db.php" ?>
<?php include "include/head.php"?>
<?php include "include/header.php"?>

<!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
<!-- Left Sidebar End -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php include "include/page_title_header.php"?>
<h4 class="mb-sm-0 font-size-18">Testimonials</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
        <li class="breadcrumb-item active">Testimonials</li>
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
                <a href="testimonial-add.php"><button class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="bx bx-plus"></i> Add Content</button></a>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Date</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Client Photo</th>
                    <th scope="col">Client Website</th>
                    <th scope="col">Client Position</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM testimonial";
                $res = $conn->query($sql);
                if($res -> num_rows > 0){
                    $sn =1 ;
                    while($row = $res->fetch_assoc()){
                        //extract($row);
                        // $id = $row['id'];

                        ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td><?php echo $row['client_name']; ?></td>
                            <td><img class="rounded-circle avatar-sm" src="assets/images/testimonial/<?php echo $row['client_photo']; ?>"></td>
                            <td><?php echo $row['client_website']; ?></td>
                            <td><?php echo $row['client_position']; ?></td>
                            <td>
                                <div class="d-inline-flex align-items-center mt-1">
                                    <a href='testimonial-add.php?edit=<?php echo $row['id'] ?>' class="m-1">
                                        <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="bx bx-edit"></i>
                                                    </span>
                                        </div>
                                    </a>
                                    <a href='testimonial-add.php?del=<?php echo $row['id'] ?>' class="m-1">
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
