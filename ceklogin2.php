<?php
  $user=$_POST['userlogin'];
  $password=$_POST['userpassword'];
  
  $koneksi=mysqli_connect("localhost","root","","retnowdy");

  $query=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$password' ");
  $cek=mysqli_num_rows($query);
  
  if ($cek>0)
  {
	  header ("location:home.php");
	  
  } else
  {
	  header ("location:login.php");
  }
?>