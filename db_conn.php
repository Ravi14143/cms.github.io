<?php
  $conn=mysqli_connect("remotemysql.com","iPxJWxHgpd","eY9bRPcgPy");
  $db=mysqli_select_db($conn,"cms");
  if(!$conn){
      echo "<script>alert('connection failed');</script>";
  }

?>
