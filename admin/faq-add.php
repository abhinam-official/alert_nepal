<?php include "include/db.php";
include "include/function.php";
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM faq WHERE faq.id ={$id}";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    extract($row);
}
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            save_faq();
                            delete_faq();
                            ?>
                            <form class="repeater" method="post" action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                                <input
                                        type="hidden"
                                        name="id"
                                        value="<?php echo(!empty($id))? $id :''; ?>"
                                />
                                <div data-repeater-list="group_a">
                                    <div data-repeater-item class="row">
                                        <div  class="mb-3 col-lg-12">
                                            <label for="name">Question</label>
                                            <input type="text" id="name" name="faq_question" class="form-control" required placeholder="Enter Question"
                                                   value="<?php echo(!empty($question))?$question: '';?>"
                                            />
                                        </div>
                                        <div class="mb-3 col-lg-11">
                                            <label for="message">Answer</label>
                                            <textarea id="message" name="faq_answer" class="form-control" required placeholder="Enter Answer"><?php echo(!empty($answer))?$answer: '';?></textarea>
                                        </div>

                                        <div class="col-lg-1 align-self-center pt-3">
                                            <div class="d-grid text-center">
                                                <button data-repeater-delete type="button" class="btn btn-danger  waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button data-repeater-create type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bxs-comment-add font-size-16 align-middle"></i>  Add New FAQ
                                </button>

                                <div class="mb-4 mt-4 col-lg-12">
                                    <select class="form-select" name="type_id">
                                        <option selected value="<?php echo(!empty($type_id))?$type_id: '';?>">Select FAQ Type </option>
                                        <?php
                                        $type_sql = "SELECT * FROM categories c JOIN master m ON m.master_id = c.master_type_id WHERE m.master_id ='8'";
                                        $type_res = $conn -> query($type_sql);
                                        while ($row = $type_res -> fetch_assoc()){
                                            echo '<option value="'.$row['cat_id'] .'">'.$row['cat_title'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- Footer -->
    <?php include "include/footer.php "?>
