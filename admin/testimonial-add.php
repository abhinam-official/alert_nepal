<?php
include "include/db.php";
include "include/function.php";
?>
    ?>



<?php include "include/head.php"?>


<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End --><!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<?php include "include/page_title_header.php"?>

    <h4 class="mb-sm-0 font-size-18">add testimonial</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Testimonial</li>
        </ol>
    </div>
<?php include "include/page_title_footer.php"?>

    <div class="card">
        <h5 class="card-title-new card-header"> Testimonial</h5>
        <div class="card-body">
            <?php
            save_testimonial();
            delete_testimonial();
            if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $testimonial_sql = "SELECT * FROM testimonial WHERE testimonial.id={$id}";
                $testimonial_result = $conn->query($testimonial_sql);
                $testimonial_array = $testimonial_result->fetch_assoc();
                extract($testimonial_array);
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input
                        type="text"
                        class="form-control"
                        style="display: none;"
                        name="id"
                        id="content_id"
                        value="<?php echo(!empty($id))? $id :''; ?>"
                    />
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Parent Name</label>
                    <input type="text" class="form-control" name="client_name" id="title"
                           value="<?php echo(!empty($client_name))? $client_name :''; ?>"
                           required
                    />
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Parent Photo (Ratio:14x6.5)
                        <?php
                        if(!empty($client_photo)){
                            echo '<img width = "70" height = "70" src="assets/images/testimonial/'.$client_photo.'">';
                        }
                        ?>
                    </label>
                    <input class="form-control" type="file" name="client_photo" id="formFile">
                </div>
                <div class="mb-4">
                    <label for="button_text" class="form-label">Parent Position</label>
                    <input type="text" class="form-control" name="client_position" id="button_tex"
                           value="<?php echo(!empty($client_position))? $client_position :''; ?>"
                    >
                </div>
                <div class="mb-4">
                    <label for="testimonial_desc" class="form-label">Parent Testimonial</label>
                    <textarea class="form-control" id="testimonial_desc" name="testimonial" rows="3"><?php echo(!empty($testimonial))? $testimonial :''; ?>
                                </textarea>
                </div>
                <div class="mb-4">
                    <label for="button_url" class="form-label">Client Website</label>
                    <input type="url" class="form-control" name="client_website" id="button_url"
                           value="<?php echo(!empty($client_website))? $client_website :''; ?>"
                    >
                </div>
                <div class="mb-4">

                    <input type="submit" name="submit" class="btn btn-primary me-md-4" id="add_testimonial" value=" + Add Testimonial">
                </div>
            </form>

        </div>
    </div>

    </div>

    </div>

    </div>
    <!-- container-fluid -->
    </div>
    <!-- Footer -->
<?php include "include/footer.php "?>