<?php include 'topnav.php';
include '../session.php'; ?>
<title><?= $_SESSION ['app_name']; ?>- Add Transaction </title>
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
                <label for="id_trans">ID Transaksi</label>
                <input type="text" class="form-control" id="id_trans" name="id_trans"  placeholder="Masukkan ID">
            </div>
            <div class="form-group">
                <label for="code">Kode Transaksi</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Transaksi">
            </div>
            <div class="form-group">
                <label for="trans_date">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="trans_date" name="trans_date" placeholder="Masukkan Tanggal Transaksi">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keteranan">
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Submit</button> <a href="transaksi.php" class="btn btn-danger">Cancel</button>
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