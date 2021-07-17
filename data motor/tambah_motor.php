<?php include 'topnav.php';
include '../session.php'; ?>
<title><?= $_SESSION ['app_name']; ?>- Add Motor </title>
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
                <label for="id_motor">ID Motor</label>
                <input type="text" class="form-control" id="id_motor" name="id_motor"  placeholder="Masukkan ID">
            </div>
            <div class="form-group">
                <label for="no_polisi">No Polisi</label>
                <input type="text" class="form-control" id="no_polisi" name="no_polisi"  placeholder="Masukkan No Polisi">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis"  placeholder="Masukkan Jenis Motor">
            </div>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk"  placeholder="Masukkan Merk">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun"  placeholder="Masukkan Tahun Motor">
            </div>
            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna"  placeholder="Masukkan Warna">
            </div>
            <div class="form-group">
                <label for="harga">Harga/Hari</label>
                <input type="text" class="form-control" id="harga" name="harga"  placeholder="Masukkan Harga/Hari">
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