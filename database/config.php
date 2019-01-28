<?php
$localname='100.100.200.229';
$username='root';
$password='root';
$dbname='log';
$koneksi=mysqli_connect($localname,$username,$password,$dbname);
if(!$koneksi){echo"tidak Connect database";}
 ?>
