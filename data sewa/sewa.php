<?php include 'topnav.php'; 
      include '../session.php';
?>
<title><?php echo $_SESSION ['app_name']; ?>- Penyewaan </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3><?= $_SESSION ['app_name']; ?> - Data Penyewaan</h3>
                </div>
            </nav>
            <!--Create Data-->
            <div class="create pb-3" id="create">
               <a href="tambah_penyewa.php"><button type="button" id="create" class="btn btn-info">Create</button></a>
            </div>
            <?php include '../conection.php' ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Sewa</th>
                <th>Nama Petugas</th>
                <th>Nama Customer</th>
                <th>Merk</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th width="50px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Menampilkan data dari database ke website
        $sql=$connect -> query("SELECT * FROM sewa
        INNER JOIN petugas ON sewa.id_petugas = petugas.id_petugas
        INNER JOIN customer ON sewa.id_cust = customer.id_cust
        INNER JOIN motor ON sewa.id_motor = motor.id_motor");
        while ($rs = $sql -> fetch_object()) {
?>      <tr>
            <td><?php echo $rs -> id_sewa;?></td>
            <td><?php echo $rs -> nama_petugas;?></td>
            <td><?php echo $rs -> nama_cust;?></td>
            <td><?php echo $rs -> merk;?></td>
            <td><?php echo $rs -> tgl_sewa;?></td>
            <td><?php echo $rs -> tgl_kembali;?></td>
            <td><a class="btn btn-sm btn-danger" id="tombolhapus" data-toggle="modal" 
            data-target="#hapusdtsewa" data-id_sewa="<?= $rs->id_sewa; ?>"><i class="fas fa-trash-alt"></i></a></td>
            
        </tr> 
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- Modal Delete -->
<div class="modal fade" id="hapusdtsewa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="hapusdtsewa">Hapus Data Sewa</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
      <label for="hapusdtsewa">Are you sure to DELETE data?</label>
            <input type="hidden" name="hapus_id" id="hapus_id"><br>
    <button type="submit" name="hapusdtsewa" class="btn btn-primary">Delete</button>
    </form>
      </div>
    </div>
  </div>
</div>

  
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
        </script>
    <script>else$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <script>
$(document).on("click","#tombolhapus", function(){
        let id_sewa = $(this).data('id_sewa');

        $("#hapus_id").val(id_sewa);
    });
    </script>
</html>