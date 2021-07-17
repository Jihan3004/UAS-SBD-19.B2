<?php include '../conection.php';
//tambah mapel
if(isset($_POST['tambah'])) {

$connect->query("INSERT INTO sewa (id_sewa,id_petugas,id_cust,id_motor,tgl_sewa,tgl_kembali,total_bayar) VALUES (
'".$_POST['id_sewa']."',
'".$_POST['id_petugas']."',
'".$_POST['id_cust']."',
'".$_POST['id_motor']."',
'".$_POST['tgl_sewa']."',
'".$_POST['tgl_kembali']."',
'".$_POST['total_bayar']."')");
header('location: sewa.php');
}
 
//Hapus kelas
if (isset($_POST['hapusdtsewa'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM sewa WHERE id_sewa='$id'");
    header('location: sewa.php');
}
?>