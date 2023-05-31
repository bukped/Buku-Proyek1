<?php
//include('dbconnected.php');
include('koneksi.php');

$tgl_pemasukan = $_GET['tgl_pemasukan'];
$jumlah = $_GET['jumlah'];
$sumber = $_GET['sumber'];

//query create
$query = mysqli_query($koneksi,"INSERT INTO `pemasukan` (`tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES ('$tgl_pemasukan', '$jumlah', '$sumber')");

if ($query) {
 # credirect ke page index
 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendapatan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top"> 
 
 <!-- Modal -->
 <div id="myModalTambah" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                          <!-- heading modal -->
                          <div class="modal-header">
                            <h4 class="modal-title">Tambah Pendapatan</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <!-- body modal -->
                          <form action="tambah-pendapatan.php" method="get">
                            <div class="modal-body">
                              Tanggal :
                              <input type="date" class="form-control" name="tgl_pemasukan">
                              Jumlah :
                              <input type="number" class="form-control" name="jumlah">
                              Sumber :
                              <select class="form-control" name="sumber">
                                <option value="1">1. Usaha Kuliner</option>
                                <option value="2">2. Usaha Fashion</option>
                                <option value="3">3. Usaha Agribisnis</option>
                              </select>
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Tambah</button>
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                      </div>
                    </div>
            
                    </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  <?php require 'footer.php' ?>
  </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <?php require 'logout-modal.php'; ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

    