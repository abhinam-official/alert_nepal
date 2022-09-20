<?php
include "db.php";
/*
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true); */
if(isset($_GET['edit']) && isset($_GET['del'])){
    $gid = $_GET['edit'];
    $id = $_GET['del'];
    if(!empty($id)){
        $sql = "DELETE FROM images WHERE image_id = {$id}";
        if($conn->query($sql)===TRUE){
            echo "Successfully Deleted";
            header("location:../gallery-edit.php?edit=$gid");
        }else{
            echo "Unable to delete";
        }
    }else{
        echo "data is missing";
    }
}


?>
