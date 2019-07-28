<?php
session_start();
if(isset($_SESSION['username'])){
  include("control_ribbon.php");  
}
else{
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<br><br><br>
<div class="container" style="border-radius: 10px;">
<!-- start of content -->
<div class="post-container">
<div class="filler"></div>


<!-- main container <div> -->
<div class="filler"></div>
</div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>