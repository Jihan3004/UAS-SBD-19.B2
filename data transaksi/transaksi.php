<?php include 'topnav.php';
      include '../session.php';
  ?>

<title> <?= $_SESSION ['app_name']; ?>- Transaksi </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3><?= $_SESSION ['app_name']; ?> - Data Transaksi</h3>
                </div>
            </nav>
            <div class="create pb-3" id="create">
               <a href="tambah_trans.php"><button type="button" id="create" class="btn btn-info">Create</button></a>
            </div>
            <?php include '../conection.php' ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Kode Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Keterangan</th>
                <th width="50px">&nbsp;</th>
                <th width="50px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Menampilkan data dari database ke dalam web
        $sql=$connect -> query("SELECT * FROM transaksi");
        while ($rs = $sql -> fetch_object()) {
?>      <tr>
            <td><?php echo $rs -> id_trans;?></td>
            <td><?php echo $rs -> code;?></td>
            <td><?php echo $rs -> trans_date;?></td>
            <td><?php echo $rs -> keterangan;?></td>
            <td><a class="btn btn-sm btn-warning" id="tomboledit" data-toggle="modal" 
            data-target="#edittrans" data-trans="<?= $rs->id_trans; ?>" data-code="<?= $rs->code; ?>" data-trans_date="<?= $rs->trans_date; ?>" 
            data-keterangan="<?= $rs->keterangan; ?>"> 
            <i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-sm btn-danger" id="tombolhapus" data-toggle="modal" data-target="#hapustrans" 
            data-id_motor="<?= $rs->id_motor; ?>" > <i class="fas fa-trash-alt"></i></a></td>
        </tr> 
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- Modal Edit-->
<div class="modal fade" id="edittrans" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="edittrans">Edit Transaction</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
            <input type="hidden" name="id_trans" id="id_trans">
  <div class="form-group">
                <label for="code">Kode Transaksi</label>
                <input type="text" class="form-control" id="code" name="code" placeholder="Masukkan Kode Transaksi"><br>
                <label for="trans_date">Tanggal Transaksi</label>
                <input type="text" class="form-control" id="trans_date" name="trans_date" placeholder="Masukkan Tanggal Transaksi"><br>
                <label for="keterangan">Keteragan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
            </div><br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="hapustrans" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="hapustrans">Delete Transaction</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
      <label for="transaksi">Are you sure to DELETE data?</label>
            <input type="hidden" name="hapus_id" id="hapus_id"><br>
    <button type="submit" name="hapustrans" class="btn btn-primary">Delete</button>
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

        $("#id_motor").val(id_motor);
        $("#no_polisi").val(no_polisi);
        $("#jenis").val(jenis);
        $("#merk").val(merk);
        $("#tahun").val(tahun);
        $("#warna").val(warna);

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