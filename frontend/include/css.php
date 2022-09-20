<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link of CSS files -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/remixicon.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/odometer.min.css">
<link rel="stylesheet" href="assets/css/fancybox.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/dark-theme.css">
<title>Wazo - Wedding Event Services HTML Template</title>
<?php
$company_sql = "SELECT * FROM company_setup WHERE company_setup.id = '2'";
$company_res = $conn ->query($company_sql);
$company = $company_res -> fetch_assoc();

?>
<link rel="icon" type="image/png" href="../admin/assets/images/company/favicon/<?php echo $company['favicon'];?>">
