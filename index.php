<?php include 'topnav.php';
     include 'conection.php'; 
      include 'session.php';
?>

<title> <?php echo $_SESSION ['app_name']; ?>- Dashboard </title>
<link rel="stylesheet" href="style.css">
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <h3>Selamat Datang Di JH Rental Motor</h3>
                </div>
            </nav>
        <div class="row text-white">
        <?php $ds = mysqli_query($connect,"SELECT * FROM motor"); 
              $ts = mysqli_num_rows($ds);
        ?>
            <div class="card bg-info ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                <div style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; 
                font-size: 90px;"><i class="fas fa-motorcycle mr-2"></i></div>
                <h5 class="card-title">DATA MOTOR</h5>
                <div style="font-weight: bold; font-size:65px"><?php echo $ts ?></div>
                <a href="data motor/motor.php">
                <p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>
            <?php $dp = mysqli_query($connect,"SELECT * FROM petugas"); 
              $tp = mysqli_num_rows($dp);
        ?>
            <div class="card bg-warning ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon" style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; font-size: 90px;"><i class="fas fa-id-card mr-2"></i></div>
                    <h5 class="card-title">DATA PETUGAS</h5>
                    <div style="font-weight: bold; font-size:65px"><?php echo $tp ?></div>
                    <a href="data petugas/petugas.php"><p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div> 
            <?php $dg = mysqli_query($connect,"SELECT * FROM customer"); 
              $tg = mysqli_num_rows($dg);
        ?>
            <div class="card bg-success ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon" style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; font-size: 90px;"><i class="fas fa-users mr-2"></i></div>
                    <h5 class="card-title">DATA CUSTOMER</h5>
                    <div style="font-weight: bold; font-size:65px"><?php echo $tg ?></div>
                    <a href="data customer/customer.php"><p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div> 
            <?php $dm = mysqli_query($connect,"SELECT * FROM sewa"); 
              $tm = mysqli_num_rows($dm);
        ?>
            <div class="card bg-danger ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <div style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; font-size: 90px;"><i class="fas fa-book mr-2"></i></div>
                    <h5 class="card-title">DATA PENYEWAAN</h5>
                    <div style="font-weight: bold; font-size:65px"><?php echo $tm ?></div>
                    <a href="penyewaan/penyewaan.php"><p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div> 
            <?php $dt = mysqli_query($connect,"SELECT * FROM transaksi"); 
              $tdt = mysqli_num_rows($dt);
        ?>
            <div class="card bg-info ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <div style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; font-size: 90px;"><i class="fas fa-dollar-sign mr-2"></i></div>
                    <h5 class="card-title">DATA TRANSAKSI</h5>
                    <div style="font-weight: bold; font-size:65px"><?php echo $tm ?></div>
                    <a href="penyewaan/penyewaan.php"><p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div> 
            <?php $dtd = mysqli_query($connect,"SELECT * FROM transaksi_detail"); 
              $tdtd= mysqli_num_rows($dtd);
        ?>
            <div class="card bg-warning ml-5 mt-5" style="width: 18rem;">
                <div class="card-body">
                    <div style="position: absolute; z-index: 0; top: 25px; right: 4px; opacity: 0.4; font-size: 90px;"><i class="fas fa-info-circle mr-2"></i></div>
                    <h5 class="card-title">DATA TRANSAKSI DETAIL</h5>
                    <div style="font-weight: bold; font-size:65px"><?php echo $tm ?></div>
                    <a href="penyewaan/penyewaan.php"><p class="card-text text-white">Look For Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
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

</html>