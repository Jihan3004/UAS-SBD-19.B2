<?php include '../conection.php';
//tambah mapel
if(isset($_POST['tambah'])) {

$connect->query("INSERT INTO transaksi (id_trans,code, trans_date, keterangan) VALUES (
'".$_POST['id_trans']."',
'".$_POST['code']."',
'".$_POST['trans_date']."',
'".$_POST['keterangan']."')");
header('location: transaksi.php');
}
//edit mapel
if(isset($_POST['update'])) {

    $connect->query("UPDATE transaksi SET 
    code='".$_POST['code']."', 
    trans_date='".$_POST['trans_date']."',
    keterangan='".$_POST['keterangan']."'
    WHERE id_trans='".$_POST['id_trans']."'");
    header('location: transaksi.php');
}
//Hapus mapel
if (isset($_POST['hapustrans'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM transaksi WHERE id_trans='$id'");
    header('location: transaksi.php');
}
?> 