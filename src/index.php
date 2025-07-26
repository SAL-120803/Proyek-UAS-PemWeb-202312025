<?php
session_start();
if (empty($_SESSION["ses_username"])) {
	header("location: login.php");
	exit;
}

$data_id = $_SESSION["ses_id"];
$data_nama = $_SESSION["ses_nama"];
$data_user = $_SESSION["ses_username"];
$data_level = $_SESSION["ses_level"];

include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SI PERPUSTAKAAN</title>
	<link rel="icon" href="dist/img/logo.png">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo">
				<span class="logo-lg">
					<img src="dist/img/logo.png" width="37px">
					<b>E-Library</b>
				</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li><a><b>Sistem Informasi Perpustakaan</b></a></li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/avatar.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $data_nama; ?></p>
						<span class="label label-warning"><?php echo $data_level; ?></span>
					</div>
				</div>

				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>

					<li class="treeview">
						<a href="?page=petugas"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-folder"></i><span>Kelola Data</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="?page=MyApp/data_buku"><i class="fa fa-book"></i>Data Buku</a></li>
							<li><a href="?page=MyApp/data_agt"><i class="fa fa-users"></i>Data Anggota</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="?page=data_sirkul"><i class="fa fa-refresh"></i><span>Sirkulasi</span></a>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-book"></i><span>Log Data</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="?page=log_pinjam"><i class="fa fa-arrow-circle-o-down"></i>Peminjaman</a></li>
							<li><a href="?page=log_kembali"><i class="fa fa-arrow-circle-o-up"></i>Pengembalian</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#"><i class="fa fa-print"></i><span>Laporan</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
						<ul class="treeview-menu">
							<li><a href="?page=laporan_sirkulasi"><i class="fa fa-file"></i>Laporan Sirkulasi</a></li>
						</ul>
					</li>

					<li><a href="logout.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content">
				<?php
				if (isset($_GET['page'])) {
					switch ($_GET['page']) {
						case 'petugas': include "home/petugas.php"; break;

						case 'MyApp/data_agt': include "admin/agt/data_agt.php"; break;
						case 'MyApp/add_agt': include "admin/agt/add_agt.php"; break;
						case 'MyApp/edit_agt': include "admin/agt/edit_agt.php"; break;
						case 'MyApp/del_agt': include "admin/agt/del_agt.php"; break;

						case 'MyApp/data_buku': include "admin/buku/data_buku.php"; break;
						case 'MyApp/add_buku': include "admin/buku/add_buku.php"; break;
						case 'MyApp/edit_buku': include "admin/buku/edit_buku.php"; break;
						case 'MyApp/del_buku': include "admin/buku/del_buku.php"; break;

						case 'data_sirkul': include "admin/sirkul/data_sirkul.php"; break;
						case 'add_sirkul': include "admin/sirkul/add_sirkul.php"; break;
						case 'panjang': include "admin/sirkul/panjang.php"; break;
						case 'kembali': include "admin/sirkul/kembali.php"; break;

						case 'log_pinjam': include "admin/log/log_pinjam.php"; break;
						case 'log_kembali': include "admin/log/log_kembali.php"; break;

						case 'laporan_sirkulasi': include "admin/laporan/laporan_sirkulasi.php"; break;

						default:
							echo "<center><h1>Halaman tidak ditemukan!</h1></center>";
					}
				} else {
					include "home/petugas.php";
				}
				?>
			</section>
		</div>

		<!-- JavaScript -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/select2/select2.full.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="dist/js/app.min.js"></script>
		<script>
			$(function () {
				$("#example1").DataTable({ columnDefs: [{ "defaultContent": "-", "targets": "_all" }] });
				$(".select2").select2();
			});
		</script>
	</div>
</body>

</html>
