<?php 

$konek=mysqli_connect("localhost", "root", "", "websmoke");
$nilai1=$_GET['asap'];
$nilai2=$_GET['ket'];
$data=mysqli_query($konek,"select * from mode");
$data1=mysqli_fetch_array($data);
$mode=$data1['mode'];

date_default_timezone_set('Asia/Makassar');
$tgl   =date('Y-m-d');
$waktu =date('H:i:s');

if ($mode==1)
{
	mysqli_query($konek, "insert into sensor (asap, ket,tgl,waktu) values('$nilai1','nilai2','$tgl','$waktu')");

}

$tampil=mysqli_query($konek,"select * from sensor order by id desc limit 1");
	while($r=mysqli_fetch_array($tampil))
		{
			$id=$r[0];
			mysqli_query($konek, "update sensor set asap='$nilai1',ket='$nilai2', tgl='$tgl', waktu='$waktu' where id='$id'");
		}

 ?>
