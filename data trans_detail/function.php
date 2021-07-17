<?php include '../conection.php';
//tambah transaksi detail
if(isset($_POST['tambah'])) {

$connect->query("INSERT INTO transaksi_detail (id_transdet,id_trans,id_motor,total_day,total_pay,payment) VALUES (
'".$_POST['id_transdet']."',
'".$_POST['id_trans']."',
'".$_POST['id_motor']."',
'".$_POST['total_day']."',
'".$_POST['total_pay']."',
'".$_POST['payment']."')");
header('location: transdet.php');
}
//edit transaksi detail
if(isset($_POST['update'])) {

    $connect->query("UPDATE transaksi_detail SET 
    total_day='".$_POST['total_day']."', 
    total_pay='".$_POST['total_pay']."',
    payment='".$_POST['payment']."'
    WHERE id_transdet='".$_POST['id_transdet']."'");
    header('location: transdet.php');
}
//Hapus transaksi detail
if (isset($_POST['hapustransdet'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM transaksi_detail WHERE id_transdet='$id'");
    header('location: transdet.php');
}
?> 