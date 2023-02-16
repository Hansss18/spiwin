<?php
include('database.php');
$db = new database();
$kd_pembay = $_GET['id'];
if (! is_null($kd_pembay)) {
  // code...
  $data_pem = $db->get_by_struk($kd_pembay);
} else {
  header('location:stampil.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<h  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

  <title>Struk | Spiwin</title>

  <link href="css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
            	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
				<div class="head">
					<h2>Struk</h2>
					<h2>SPIWIN Store</h2>
					<p style="font-weight: normal;text-transform: capitalize;">No Telepon : (025) 7822-55-655 Email : <span style="text-transform: none;">awd.com</span> Tanggal Pembayaran : <?php echo $data_pem['tgl']; ?>  </p>
				</div>
			
                      <h2>Kode Pembayaran    : <?php echo $data_pem['kd_pmb'] ?></h2>
                      <h2>Kode Transaksi     : <?php echo $data_pem['kd_tr']; ?></h2>
                      <h2>Nama Barang        : <?php echo $data_pem['nm_brg']; ?></h2>
                      <h2>Nama Pembeli       : <?php echo $data_pem['nm_pbl']; ?> </h2>
                      <h2>Harga Barang       : Rp.<?php echo number_format($data_pem['hrg']); ?></h2>
                      <h2>Jumlah Pembayaran  : Rp.<?php echo number_format($data_pem['total']); ?></h2>
                   
                   
			
            </div>
        </div>
    </div>
</div>
<script src="../../assets/plugins/bootstrap/js/bootstrap.js"></script>
<!-- Bootstrap Core Css -->
<link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
	.head{
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		margin:20px 0;
	}
	h2,h3,p{
		margin: 0;
		padding: 0;
	}
	.ttd{
		float: right;
		margin: 20px;
	}
</style>			
   
        <script>
		window.print();
	    </script>
</body>
</html>