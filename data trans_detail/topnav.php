<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include '../session.php'?>
        <nav id="sidebar">
            <div class="sidebar-header">
            <center>
                <h3><?= $_SESSION ['app_name'] ?></h3>
                </center>
            </div>

            <ul class="list-unstyled components">
                <a href="../index.php"><p>RENTAL MOTOR JH</p></a>
                <li>
                    <a href="../index.php"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li>
                    <a href="../data motor/motor.php"><i class="fas fa-motorcycle mr-2"></i>Data Motor</a>
                </li>
                <li>
                    <a href="../data petugas/petugas.php"><i class="fas fa-id-card mr-2"></i>Data Petugas</a>
                </li>
                <li>
                    <a href="../data customer/customer.php"><i class="fas fa-users mr-2"></i>Data Customer</a>
                </li>
                <li>
                    <a href="../data sewa/sewa.php" ><i class="fas fa-book mr-2"></i>Data Penyewaan</a>
                </li>
                <li>
                    <a href="../data transaksi/transaksi.php" ><i class="fas fa-dollar-sign mr-2"></i>Data Transaksi</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-info-circle mr-2"></i>Data Transaksi Detail</a>
                </li>
                <ul class="list-unstyled CTAs">
                <li>
                    <a href="../akses/login.php" class="logout"><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a>
                </li>
            </ul>
            </ul>
            
        </nav>
</body>
</html>