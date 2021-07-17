<?php include 'topnav.php';
      include '../session.php';
  ?>

<title> <?= $_SESSION ['app_name']; ?> - Transaksi Detail </title>
<link rel="stylesheet" href="../style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3><?= $_SESSION ['app_name']; ?> - Data Transaksi Details</h3>
                </div>
            </nav>
            <div class="create pb-3" id="create">
               <a href="tambah_transdet.php"><button type="button" id="create" class="btn btn-info">Create</button></a>
            </div>
            <div class="print pb-3">
            <a  data-target="#print"><button type="button" id="print" class="btn btn-success">Print</button></a>
            </div>
            <?php include '../conection.php' ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Transaksi Detail</th>
                <th>ID Transaksi</th>
                <th>Motor</th>
                <th>Waktu Penyewaan</th>
                <th>Total Pembayaran</th>
                <th>Jenis Pembayaran</th>
                <th width="50px">&nbsp;</th>
                <th width="50px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Menampilkan data dari database ke dalam web
        $sql=$connect -> query("SELECT * FROM transaksi_detail
        INNER JOIN transaksi ON transaksi_detail.id_trans = transaksi.id_trans
        INNER JOIN motor ON transaksi_detail.id_motor = motor.id_motor");
        while ($rs = $sql -> fetch_object()) {
?>      <tr>
            <td><?php echo $rs -> id_transdet;?></td>
            <td><?php echo $rs -> id_trans;?></td>
            <td><?php echo $rs -> merk;?></td>
            <td><?php echo $rs -> total_day;?></td>
            <td><?php echo $rs -> total_pay;?></td>
            <td><?php echo $rs -> payment;?></td>
            <td><a class="btn btn-sm btn-warning" id="tomboledit" data-toggle="modal" 
            data-target="#edittransdet" data-id_transdet="<?= $rs->id_transdet; ?>" data-id_trans="<?= $rs->id_trans; ?>" 
            data-merk="<?= $rs->merk; ?>" data-total_day="<?= $rs->total_day; ?>"  data-total_pay="<?= $rs->total_pay; ?>"
            data-payment="<?= $rs->payment; ?>"> 
            <i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-sm btn-danger" id="tombolhapus" data-toggle="modal" data-target="#hapustransdet" 
            data-id_transdet="<?= $rs->id_transdet; ?>" > <i class="fas fa-trash-alt"></i></a></td>
        </tr> 
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- Modal Edit-->
<div class="modal fade" id="edittransdet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="edittransdet">Edit Transaction Detail</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="function.php" method="POST">
            <input type="hidden" name="id_transdet" id="id_transdet">
  <div class="form-group">
                <label for="total_day">Waktu Penyewaan</label>
                <input type="text" class="form-control" id="total_day" name="total_day" placeholder="Masukkan Waktu Penyewaan"><br>
                <label for="total_pay">Total Pembayaran</label>
                <input type="text" class="form-control" id="total_pay" name="total_pay" placeholder="Masukkan Total Pembayaran"><br>
                <label for="payment">Jenis Pembayaran</label>
                <input type="text" class="form-control" id="payment" name="payment" placeholder="Masukkan Jenis Pembayaran">
            </div><br>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="hapustransdet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header style">
        <h3 class="modal-title" id="hapustransdet">Delete Transaction Detail</h3>
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
        let id_transdet = $(this).data('id_transdet');
        let total_day = $(this).data('total_day');
        let total_pay = $(this).data('total_pay');
        let payment = $(this).data('payment');

        $("#id_transdet").val(id_transdet);
        $("#total_day").val(total_day);
        $("#total_pay").val(total_pay);
        $("#payment").val(payment);

    });
    </script>
    <!-- JS untuk menghapus data-->
<script>
$(document).on("click","#tombolhapus", function(){
        let id_transdet = $(this).data('id_transdet');

        $("#hapus_id").val(id_transdet);
    });
    </script>
  <script>
       $(document).on("click","#print", function(){
        window.print();
       }); 
   </script>

</html>