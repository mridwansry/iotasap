<?php 
//Koneksi ke mysql
$host="localhost";
$database="websmoke";
$username="root";
$password="";
$konek=mysqli_connect($host,$username,$password,$database);
if (!$konek)
{
	die("koneksi terputus");
}
 ?>