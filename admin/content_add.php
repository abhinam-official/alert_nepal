<?php
include "include/db.php";
include "include/function.php";
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $content = "SELECT * FROM add_content WHERE add_content.id={$id}";
    $result = $conn->query($content);
    $content_array = $result->fetch_assoc();
    extract($content_array);
}

?>
<?php include "include/head.php"?>
<?php include "include/tinyMce_image_upload.php" ?>

<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
    <?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End --><!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
               <?php include "include/page_title_header.php"?>

                            <h4 class="mb-sm-0 font-size-18">Add Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Content</li>
                                </ol>
                            </div>
               <?php include "include/page_title_footer.php"?>

               <!-- Main Content -->
                        <div class="card">
                                    <h5 class="card-title-new card-header mb-4"> Add Content</h5>
                            <div class="card-body">
                                <?php
                                save_content();
                                delete_content();
                                ?>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                                    <input
                                            type="hidden"
                                            name="id"
                                            value="<?php echo(!empty($id))? $id :''; ?>"
                                    />
                                    <div class="mb-3">
                                        <label class="form-label">Content Title <code>*</code> </label>
                                        <input type="text" class="form-control" name="content_title"
                                               value="<?php echo(!empty($content_title))? $content_title :''; ?>"
                                               required="" placeholder="Enter Content Title ">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content Url </label>
                                        <input type="url" class="form-control" name="content_url" placeholder="Enter Page URL"
                                               value="<?php echo(!empty($content_url))? $content_url :''; ?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Feature Image  <code>*  <?php
                                            echo(!empty($input_err['content_image']))?  $input_err['content_image'] : '';
                                            ?>
                                            </code>
                                           <?php
                                            if(!empty($feature_image)){
                                                echo '<img width = "200" height = "200" src="assets/images/content/'.$feature_image.'">';
                                            }
                                            ?>
                                        </label>
                                        <input type="file" class="form-control" name="feature_image">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Short Desc <code>*</code></label>
                                        <input type="text" class="form-control" name="short_desc"  placeholder="Short Desc."
                                               value="<?php echo(!empty($short_desc))? $short_desc :''; ?>"
                                        >
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Page Content <code>*</code></label>
                                        <textarea id="elm1" name="page_content" ><?php echo(!empty($page_content))? $page_content :''; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Meta  Keywords (Separated By Comma) </label>
                                        <input type="text" class="form-control" name="meta_keywords"
                                               placeholder="Enter Meta Keywords "
                                               value="<?php echo(!empty($meta_keywords))? $meta_keywords :''; ?>" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta  Description </label>
                                        <input type="text" class="form-control" placeholder="Enter Meta Description " name="meta_desc"
                                               value="<?php echo(!empty($meta_description))? $meta_description :''; ?>"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content Type <code>*</code></label>
                                        <select class="form-select" required="" name="content_types">
                                            <option value="<?php echo(!empty($content_types))?$content_types:'';?>">Select Content Type</option>
                                            <?php
                                            $sql = "SELECT * FROM categories c JOIN master m ON m.master_id = c.master_type_id WHERE m.master_id = '9' ";
                                            $res = $conn->query($sql);
                                            while($row = $res->fetch_assoc()){
                                                extract($row);
                                                ?> <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title']; ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Add Content</button>
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