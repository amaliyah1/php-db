<?php
include('koneksi.php');


$sql = "DELETE FROM mahasiswa WHERE NIM ='$_GET[id]'";

$hasil = new mysqli_query($conn, $sql);
if ($hasil) {
	header('location:home.php');
}else{
	echo "error ".$sql;

}


?>