<?php
$konek = mysqli_connect("localhost", "root", "", "websmoke");
$sql = mysqli_query($konek, "select * from sensor order by id desc limit 1");
$data = mysqli_fetch_array($sql);
$nilai1 = $data["asap"];
$nilai2 = $data["ket"];
echo $nilai1 . " % </br></br>";
echo $nilai2 . " ";
