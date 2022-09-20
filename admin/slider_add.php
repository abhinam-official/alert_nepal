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

    <h4 class="mb-sm-0 font-size-18">Add Slider</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Slider</li>
        </ol>
    </div>
<?php include "include/page_title_footer.php"?>

    <div class="card">
        <h5 class="card-title-new card-header"> Add Slider</h5>
        <div class="card-body">
              <?php
              save_slider();
              delete_slider();
              if(isset($_GET['edit'])){
                  $id = $_GET['edit'];
                  $slider_sql = "SELECT * FROM slider WHERE slider.id={$id}";
                  $slider_result = $conn->query($slider_sql);
                  $slider_array = $slider_result->fetch_assoc();
                  extract($slider_array);
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
                    <label for="exampleInputEmail1" class="form-label">Slider Title</label>
                    <input type="text" class="form-control" name="title" id="title"
                           value="<?php echo(!empty($title))? $title :''; ?>"
                           required
                    />
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Slider Image (Ratio:14x6.5)
                        <?php
                             if(!empty($image)){
                                    echo '<img width = "70" height = "70" src="assets/images/slider/'.$image.'">';
                           }
                        ?>
                    </label>
                    <input class="form-control" type="file" name="slider_image" id="formFile">
                </div>
                <div class="mb-4">
                    <label for="slider_desc" class="form-label">Slider Description</label>
                    <textarea class="form-control" id="slider_desc" name="slider_desc" rows="3"><?php echo(!empty($description))? $description :''; ?>
                                </textarea>
                </div>
                <div class="mb-4">
                    <label for="button_text" class="form-label">Button Text</label>
                    <input type="text" class="form-control" name="button_text" id="button_tex"
                           value="<?php echo(!empty($button_text))? $button_text :''; ?>"
                    >
                </div>
                <div class="mb-4">
                    <label for="button_url" class="form-label">Button URL</label>
                    <input type="url" class="form-control" name="button_url" id="button_url"
                           value="<?php echo(!empty($button_url))? $button_url :''; ?>"
                    >
                </div>
                <div class="mb-4">

                    <input type="submit" name="submit" class="btn btn-primary me-md-4" id="add_slider" value=" + Add Slider">
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