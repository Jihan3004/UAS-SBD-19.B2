<?php include 'topnav.php';
      include '../session.php';
?>

<title> <?= $_SESSION ['app_name']; ?>- Petugas </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <?php include '../conection.php' ?>
                    <h3><?= $_SESSION ['app_name']; ?> Data Petugas</h3>
                </div>
            </nav>
<!--Create Data-->
            <div class="create pb-3" id="create">
               <a href="tambah_petugas.php"><button type="button" id="create" class="btn btn-info">Create</button></a>
            </div>
            <?php include '../conection.php' ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Petugas</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th width="50px">&nbsp;</th>
                <th width="50px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql=$connect -> query("select * from petugas");
        while ($rs = $sql -> fetch_object()) {
?>      <tr>
            <td><?php echo $rs -> id_petugas;?></td>
            <td><?php echo $rs -> nama_petugas;?></td>
            <td><?php echo $rs -> alamat;?></td>
            <td><?php echo $rs -> no_hp;?></td>
            <td><a class="btn btn-sm btn-warning" id="tomboledit" data-toggle="modal" data-target="#editpetugas" 
            data-id_petugas="<?= $rs->id_petugas; ?>"  data-nama_petugas="<?= $rs->nama_petugas; ?>" data-alamat="<?= $rs->alamat; ?>"  data-no_hp="<?= $rs->no_hp; ?>"> <i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-sm btn-danger" id="tombolhapus" data-toggle="modal" 
            data-target="#hapuspetugas" data-id_petugas="<?= $rs->id_petugas; ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr> 
        <?php
        }
        ?>
        </tbody>
    </table>
<!-- Modal Edit-->
<div class="modal fade" id="editpetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="editpetugas">Edit Data Petugas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
            <input type="hidden" name="id_cust" id="id_cust">
  <div class="form-group">
                <label for="nama_cust">Nama</label>
                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Enter Class">
            </div><br>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Class">
            </div><br>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Enter Class">
            </div><br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="hapuspetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="hapuspetugas">Delete Petugas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
      <label for="kelas">Are you sure to DELETE data?</label>
            <input type="hidden" name="hapus_id" id="hapus_id"><br>
    <button type="submit" name="hapuspetugas" class="btn btn-primary">Delete</button>
    </form>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!--JS untuk click button Sidebar-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>else$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<!--JS untuk memunculkan data sebelumnya di form modal-->
    <script>
    $(document).on("click","#tomboledit", function(){
      let id_cust = $(this).data('id_cust');
        let nama_cust = $(this).data('nama_cust');
        let alamat = $(this).data('alamat');
        let no_hp = $(this).data('no_hp');
       
        $("#id_cust").val(id_cust);
        $("#nama_cust").val(nama_cust);
        $("#alamat").val(alamat);
        $("#no_hp").val(no_hp);
    });
    </script>
    <script>
$(document).on("click","#tombolhapus", function(){
        let id_cust = $(this).data('id_cust');

        $("#hapus_id").val(id_cust);
    });
    </script>
</html>
