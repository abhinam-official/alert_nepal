<?php include "include/db.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Table</title>
    <style>
        @page { size: auto;  margin: 0mm; }
    </style>
</head>
<body onload="myPrintFun()">
<table>
  <thead>
  <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Message</th>
      <th>Date</th>
  </tr>
  </thead>
 <tbody>
 <?php
 $sql = "SELECT * FROM user_message";
 $res = $conn->query($sql);

 if($res -> num_rows > 0){
 $sn =1 ;
 while($row = $res->fetch_assoc()){

 ?>
 <tr>
     <td><?php echo $sn; ?></td>
     <td><?php echo $row['name']; ?></td>
     <td><?php echo $row['phone']; ?></td>
     <td><?php echo $row['email']; ?></td>
     <td><?php echo $row['message']; ?></td>
     <td><?php echo $row['date']; ?></td>
 <?php } } ?>
 </tbody>
</table>

<script type="text/javascript">
    function myPrintFun(){
        window.print();
    }
</script>

</body>
</html>