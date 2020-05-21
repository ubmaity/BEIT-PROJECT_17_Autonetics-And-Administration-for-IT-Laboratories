<?php

  //$id = $_GET['id'];
  $id=1;
  // do some validation here to ensure id is safe
  $user='id10740292_root';
  $pass='123456';
  $db='id10740292_sample';
  $con=mysqli_connect('localhost',$user,$pass,$db);
  $sql = "SELECT image FROM lab_layout WHERE id=$id";
  $sth = mysqli_query($con,$sql);
  $result = mysqli_fetch_array($sth);
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
?>