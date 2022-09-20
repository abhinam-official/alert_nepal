<?php
include "include/db.php";
include "include/head.php"

?>
<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<?php include "include/page_title_header.php"?>
    <h4 class="mb-sm-0 font-size-18">View Contact</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Index</a></li>
            <li class="breadcrumb-item active">View Contact</li>
            <?php include "include/page_title_footer.php"?>
            <!-- end page title -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Contact Message</h4>
                    <?php
                    $id = $_GET['sn'];
                    $sql = "SELECT * FROM user_message WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $row = $res->fetch_assoc();
                    extract($row);
                    ?>
                    <p class="text-muted mb-4"><?php echo $message ?></p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td><?php echo $name ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Contact Number :</th>
                                <td><?php echo $phone ?></td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td><?php echo $email ?></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>