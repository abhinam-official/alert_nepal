<?php
include "include/db.php";
include "include/function.php";
$sql = "SELECT * FROM popup WHERE id = 3";
$res = $conn->query($sql);
$row = $res -> fetch_assoc();
extract($row);
?>

<?php include "include/head.php"?>


<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End --><!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<?php include "include/page_title_header.php"?>

    <h4 class="mb-sm-0 font-size-18">Add Popup</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Popup</li>
<?php include "include/page_title_footer.php"?>

    <div class="card">
        <h5 class="card-title-new card-header mb-4"> Add Popup</h5>
        <div class="card-body">
             <?php save_popup(); ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                <input
                        type="text"
                        class="form-control"
                        style="display: none;"
                        name="id"
                        id="content_id"
                        value="<?php echo(!empty($id))? $id :''; ?>"
                />
                <div class="mb-3">
                    <label class="form-label">Popup Title <code>*</code> </label>
                    <input type="text" class="form-control" name="popup_title"
                           value="<?php echo(!empty($popup_title))? $popup_title :''; ?>"
                           required="" placeholder="Enter Content Title ">
                </div>
                <div class="mb-3">
                    <label class="form-label">Popup Content <code>*</code></label>
                    <textarea id="elm1" name="popup_content" ><?php echo(!empty($popup_content))? $popup_content :''; ?></textarea>
                </div>
                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                    <input class="form-check-input" type="checkbox" <?php echo(!empty($popup_status == 'on'))? 'checked' :''; ?>  id="SwitchCheckSizemd" name="popup_status">
                    <label class="form-check-label" for="SwitchCheckSizemd"><?php echo(!empty($popup_status == 'on'))? 'Active' :'Inactive'; ?></label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary w-md">Add Popup</button>
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