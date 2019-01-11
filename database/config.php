<?php
$localname='localhost:3307';
$username='root';
$password='';
$dbname='log';
$koneksi=mysqli_connect($localname,$username,$password,$dbname);
if(!$koneksi){echo"tidak Connect database";}
 ?>
