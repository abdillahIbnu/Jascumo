<?php
    include "../config/koneksi.php";
    if(!empty( $_SESSION['id_user'] )){
?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href=""><i class="fa fa-car" aria-hidden="true"></i> Crown Carwash Administrator</a>
	</div>
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li><a href="./admin.php"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
        <?php if( $_SESSION['level'] == 1 ){ ?> 
        <li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-briefcase" aria-hidden="true"></i> Data Master <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="./admin.php?hlm=katemobil">Kategori Mobil</a></li>
			<li><a href="./admin.php?hlm=biaya">Layanan / Service</a></li>
			<li><a href="./admin.php?hlm=ongjemput">Biaya Jemput</a></li>
		  </ul>
		<?php } ?> 
		</li>
		<li><a href="./admin.php?hlm=transaksi"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Transaksi</a></li>
        <li><a href="?hlm=laporan"><i class="fa fa-file-text-o" aria-hidden="true"></i> Laporan</a></li>

	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		 	<i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['nama']; ?> <b class="caret"></b>
		  </a>
		  <ul class="dropdown-menu">
			<li><a href="./admin.php?hlm=user">	<i class="fa fa-cog" aria-hidden="true"></i> User</a></li>
			<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</div>
<?php
}else {
	header("Location: ./");
	die();
}
?>
