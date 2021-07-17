<?php include '../conection.php'; 
//Tambah kelas
if(isset($_POST['tambah'])) {
    $connect->query("INSERT INTO customer (id_cust,nama_cust,alamat,no_hp) VALUES
    ('".$_POST['id_cust']."',
    '".$_POST['nama_cust']."',
    '".$_POST['alamat']."',
    '".$_POST['no_hp']."')");
    header('location: customer.php');
}
//Edit kelas
if(isset($_POST['update'])) {
    $connect->query("UPDATE customer SET 
    nama_cust='".$_POST['nama_cust']."',
    alamat='".$_POST['alamat']."',
    no_hp='".$_POST['no_hp']."' WHERE id_cust='".$_POST['id_cust']."'");
    header('location: customer.php');
}
//Hapus kelas
if (isset($_POST['hapuscust'])) {
    $id = $_POST['hapus_id'];

    $hapus=mysqli_query($connect, "DELETE FROM customer WHERE id_cust='$id'");
    header('location: customer.php');
}
?>