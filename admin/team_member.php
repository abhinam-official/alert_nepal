<?php
include "include/db.php";
include "include/head.php";
include "include/function.php";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $member_sql = "SELECT * FROM team_member WHERE team_member.id={$id}";
    $member_result = $conn->query($member_sql);
    $member_array = $member_result->fetch_assoc();
    extract($member_array);
}
?>

<?php include "include/header.php"?>

    <!-- ========== Left Sidebar Start ========== -->
<?php include "include/left_sidebar.php"?>
    <!-- Left Sidebar End -->
<?php include "include/page_title_header.php"?>
    <h4 class="mb-sm-0 font-size-18">Member List</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">Member List</li>
            <?php include "include/page_title_footer.php"?>
            <!-- end page title -->
            <div class="row">
               <div class="col-4">
                  <div class="card">
            <h1 class="card-title-new card-header ">
                Add Member
            </h1>
            <div class="card-body">
                <form  action="<?PHP htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">
                <div>
                    <input
                            type="text"
                            class="form-control"
                            style="display:none;"
                            name="id"
                            id="teamid"
                            value="<?php echo(!empty($id))? $id :''; ?>"
                    />
                    <label  class="form-label">Name<span class="error">&nbsp;*</span></label>
                    <input type="text" class="form-control" id="nameid" name="member_name" required
                           value="<?php echo(!empty($member_name))? $member_name :''; ?>"
                    />
                </div>
                <div>
                    <label  class="form-label">Position<span class="error">&nbsp;*</span></label>
                    <input type="text" class="form-control"id="positionid" name="member_position" required
                           value="<?php echo(!empty($member_position))? $member_position :''; ?>"
                    />
                </div>
                <div>
                    <label  class="form-label">Expertise<span class="error">&nbsp;*</span></label>
                    <input type="text" class="form-control" id="expertiseid" name="member_expertise" required
                           value="<?php echo(!empty($member_expertise))? $member_expertise :''; ?>"
                    />
                </div>
                <div>
                    <label  class="form-label">Experience<span class="error">&nbsp;*</span></label>
                    <input type="text" class="form-control" id="experienceid" name="member_experience" required
                           value="<?php echo(!empty($member_experience))? $member_experience :''; ?>"
                    />
                </div>
                <div>
                    <label  class="form-label">Oder Id<span class="error">&nbsp;*</span></label>
                    <input type="text" class="form-control" id="orderid" name="member_orderid" required
                           value="<?php echo(!empty($member_orderid))? $member_orderid :''; ?>"
                    />
                </div>
                <div id="edit-pic">
                    <label  class="form-label">Photo<span class="error">&nbsp;*</span>
                        <?php
                        if(!empty($member_profile)){
                            echo '<img width="200px" src="assets/images/member/'.$member_profile.'">';
                        }
                        ?>
                    </label>
                    <input type="file" class="form-control" name="member_profile" id="profileid" >
                </div>
                <div class="mt-2">
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
                Member List
            </h1>
            <div class="card-body">
                <div>
                <?php
                     save_team_member();
                     delete_team_member();
                ?>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive text-center  nowrap w-100">
                    <thead>
                           <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                          <?php
                          $sql = "SELECT * FROM team_member";
                          $res = $conn->query($sql);
                            if($res -> num_rows > 0){
                                $sn =1 ;
                                while($row = $res->fetch_assoc()){

                          ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $row['member_name']; ?></td>
                                        <td><?php echo $row['member_position']; ?></td>
                                        <td><img class="rounded-circle avatar-sm" src="assets/images/member/<?php echo $row['member_profile']; ?>"></td>
                                        <td>
                                            <div class="d-inline-flex align-items-center mt-1">
                                                <a href="team_member.php?edit=<?php echo $row['id'] ?>" class="m-1">
                                                    <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-15">
                                                    <i class="bx bx-edit"></i>
                                                    </span>
                                                    </div>
                                                </a>
                                                <a href="team_member.php?del=<?php echo $row['id'] ?>" class='m-1'>
                                                    <div class="avatar-xs ">
                                                    <span class="avatar-title rounded-circle bg-danger font-size-10">
                                                    <i class="fa fa-trash"></i>
                                                    </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>

                          <?php $sn++; } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            </div>
    </div>
    <!-- container-fluid -->
    </div>

    <!-- Right Sidebar -->

    <!-- Footer -->
<?php include "include/footer.php "?>