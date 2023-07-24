<?php
  include "../connection.php";
  $id = $_GET['id'];
  $query = "DELETE FROM `admin` WHERE id='$id'";
  $data = mysqli_query($conn,$query);
  if ($data) {
    echo "<script> alert('Admin Is Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_admin.php'; </script>";
    exit;
  }
  else {
    echo "<script> alert('Admin Can't Deleted') </script>";
    echo "<script type='text/javascript'> document.location = 'list_admin.php'; </script>";
    exit;
  }
?>
