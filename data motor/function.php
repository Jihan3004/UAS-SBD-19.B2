<?php include '../conection.php';
//tambah mapel
if(isset($_POST['tambah'])) {

$connect->query("INSERT INTO motor (id_motor,no_polisi, jenis, merk, tahun, warna,harga) VALUES (
'".$_POST['id_motor']."',
'".$_POST['no_polisi']."',
'".$_POST['jenis']."',
'".$_POST['merk']."',
'".$_POST['tahun']."',
'".$_POST['warna']."'),
'".$_POST['harga']."')");
header('location: motor.php');
}
//edit mapel
if(isset($_POST['update'])) {

    $connect->query("UPDATE motor SET 
    no_polisi='".$_POST['no_polisi']."', 
    jenis='".$_POST['jenis']."',
    merk='".$_POST['merk']."',
    tahun='".$_POST['tahun']."',
    warna='".$_POST['warna']."',
    warna='".$_POST['harga']."' WHERE id_motor='".$_POST['id_motor']."'");
    header('location: motor.php');
}
//Hapus mapel
if (isset($_POST['hapusmotor'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM motor WHERE id_motor='$id'");
    header('location: motor.php');
}
?> 