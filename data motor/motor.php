<?php include 'topnav.php';
      include '../session.php';
  ?>

<title> <?= $_SESSION ['app_name']; ?>- Motor </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3><?= $_SESSION ['app_name']; ?> - Data Motor</h3>
                </div>
            </nav>
            <div class="create pb-3" id="create">
               <a href="tambah_motor.php"><button type="button" id="create" class="btn btn-info">Create</button></a>
            </div>
            <?php include '../conection.php' ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Motor</th>
                <th>No Polisi</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Warna</th>
                <th>Harga</th>
                <th width="50px">&nbsp;</th>
                <th width="50px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Menampilkan data dari database ke dalam web
        $sql=$connect -> query("SELECT * FROM motor");
        while ($rs = $sql -> fetch_object()) {
?>      <tr>
            <td><?php echo $rs -> id_motor;?></td>
            <td><?php echo $rs -> no_polisi;?></td>
            <td><?php echo $rs -> jenis;?></td>
            <td><?php echo $rs -> merk;?></td>
            <td><?php echo $rs -> tahun;?></td>
            <td><?php echo $rs -> warna;?></td>
            <td><?php echo $rs -> harga;?></td>
            <td><a class="btn btn-sm btn-warning" id="tomboledit" data-toggle="modal" 
            data-target="#editmotor" data-id_motor="<?= $rs->id_motor; ?>" data-no_polisi="<?= $rs->no_polisi; ?>" data-jenis="<?= $rs->jenis; ?>" 
            data-merk="<?= $rs->merk; ?>" data-tahun="<?= $rs->tahun ?>" data-warna="<?= $rs->warna ?>"  data-harga="<?= $rs->harga ?>"> 
            <i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-sm btn-danger" id="tombolhapus" data-toggle="modal" data-target="#hapusmotor" 
            data-id_motor="<?= $rs->id_motor; ?>" > <i class="fas fa-trash-alt"></i></a></td>
        </tr> 
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- Modal Edit-->
<div class="modal fade" id="editmotor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="editmapel">Edit Course</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
            <input type="hidden" name="id_motor" id="id_motor">
  <div class="form-group">
                <label for="no_polisi">No Polisi</label>
                <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="Masukkan No Polisi"><br>
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis"><br>
                <label for="merk">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk"><br>
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun"><br>
                <label for="warna">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan Warna">
                <label for="warna">Harga/Hari</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga/hari">
            </div><br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="hapusmotor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="hapusmotor">Delete Course</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
      <label for="kelas">Are you sure to DELETE data?</label>
            <input type="hidden" name="hapus_id" id="hapus_id"><br>
    <button type="submit" name="hapusmotor" class="btn btn-primary">Delete</button>
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
    <!--Memunculkan Data yang sudah ada pada Modal-->
<script>
    $(document).on("click","#tomboledit", function(){
        let id_motor = $(this).data('id_motor');
        let no_polisi = $(this).data('no_polisi');
        let jenis = $(this).data('jenis');
        let merk = $(this).data('merk');
        let tahun = $(this).data('tahun');
        let warna = $(this).data('warna');
        let harga = $(this).data('harga');

        $("#id_motor").val(id_motor);
        $("#no_polisi").val(no_polisi);
        $("#jenis").val(jenis);
        $("#merk").val(merk);
        $("#tahun").val(tahun);
        $("#warna").val(warna);
        $("#harga").val(harga);

    });
    </script>
    <!-- JS untuk menghapus data-->
<script>
$(document).on("click","#tombolhapus", function(){
        let id_motor = $(this).data('id_motor');

        $("#hapus_id").val(id_motor);
    });
    </script>

</html>