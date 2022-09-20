<?php

header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include "include/db.php";
// $data = json_decode(file_get_contents("php://input"),true);
// $user_id = $data['id'];
$table_name = "user_message";

$api_sql = "SELECT * FROM $table_name ";
$api_res = mysqli_query($conn , $api_sql) or die("SQL Query Failed");

if(mysqli_num_rows($api_res) > 0){
    $api = mysqli_fetch_all($api_res ,MYSQLI_ASSOC);
    echo json_encode($api);
}else{
    echo json_decode(array('message' => 'No record Found.', 'status' => false));
}


?>
