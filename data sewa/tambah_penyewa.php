<?php include 'topnav.php';
include '../session.php'; ?>
<title><?= $_SESSION ['app_name']; ?>- Add Sewa </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3><?= $_SESSION ['app_name'] ?> - FORM</h3>
                </div>
            </nav>
            <form action="function.php" method="POST">
            <div class="form-group">
                <label for="id_sewa">ID Sewa</label>
                <input type="text" class="form-control" id="id_sewa" name="id_sewa" aria-describedby="emailHelp" placeholder="Masukkan ID Sewa">
            </div>
            <div class="form-group">
                <label for="id_petugas">ID Petugas</label>
                <input type="text" class="form-control" id="id_petugas" name="id_petugas" aria-describedby="emailHelp" placeholder="Masukkan ID Petugas">
            </div>
            <div class="form-group">
                <label for="id_cust">ID Customer</label>
                <input type="text" class="form-control" id="id_cust" name="id_cust" aria-describedby="emailHelp" placeholder="Masukkan ID Customer">
            </div>
            <div class="form-group">
                <label for="id_motor">ID Motor</label>
                <input type="text" class="form-control" id="id_motor" name="id_motor" aria-describedby="emailHelp" placeholder="Masukkan ID Motor">
            </div>
            <div class="form-group">
                <label for="tgl_sewa">Tanggal Sewa</label>
                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Sewa">
            </div>
            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Pengembalian">
            </div>
            <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input type="text" class="form-control" id="total_bayar" name="total_bayar" aria-describedby="emailHelp" placeholder="Masukkan Total Pembayaran">
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Submit</button> <a href="motor.php" class="btn btn-danger">Cancel</button>
            </form>
            

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</html>