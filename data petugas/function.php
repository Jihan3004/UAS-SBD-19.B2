<?php include '../conection.php'; 
//Tambah kelas
if(isset($_POST['tambah'])) {
    $connect->query("INSERT INTO petugas (id_petugas,nama_petugas,alamat,no_hp) VALUES
    ('".$_POST['id_petugas']."',
    '".$_POST['nama_petugas']."',
    '".$_POST['alamat']."',
    '".$_POST['no_hp']."')");
    header('location: petugas.php');
}
//Edit kelas
if(isset($_POST['update'])) {
    $connect->query("UPDATE petugas SET 
    nama_petugas='".$_POST['nama_petugas']."',
    alamat='".$_POST['alamat']."',
    no_hp='".$_POST['no_hp']."' WHERE id_petugas='".$_POST['id_petugas']."'");
    header('location: petugas.php');
}
//Hapus kelas
if (isset($_POST['hapuspetugas'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM petugas WHERE id_petugas='$id'");
    header('location: petugas.php');
}
?>