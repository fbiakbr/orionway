<section id="main-content">
	<section class="wrapper">

		<div class="row">
			<div class="col-lg-9">
				<div class="row" style="margin-left:1pc;margin-right:1pc;">
					<h1 style="color: #000; font-weight: bold;">DASHBOARD</h1>
					<hr>

					<?php
					$sql = "select * from barang where stok <= 3";
					$row = $config->prepare($sql);
					$row->execute();
					$r = $row->rowCount();
					if ($r > 0) {
					?>
					<?php
						echo "
							<div class='alert alert-warning'>
								<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
								<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
							</div>
							";
					}
					?>
					<?php $hasil_barang = $lihat->barang_row(); ?>
					<?php $hasil_kategori = $lihat->kategori_row(); ?>
					<?php $stok = $lihat->barang_stok_row(); ?>
					<?php $jual = $lihat->jual_row(); ?>
					<div class="row">
						<div class="col-md-3">
							<div class="panel panel-primary" style="border-color: #ddd;">
								<div class="panel-heading text-center">
									<h4>Total Barang</h4>
								</div>
								<div class="panel-body">
									<center>
										<h1 style="color: #000;"><?php echo number_format($hasil_barang); ?></h1>
									</center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang' style="color: #000;">Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="panel panel-success" style="border-color: #ddd;">
								<div class="panel-heading text-center" style="background-color: #78CD51; border-color: #ddd; color: #fff;">
									<h4>Stok Barang</h4>
								</div>
								<div class="panel-body">
									<center>
										<h1 style="color: #000;"><?php echo number_format($stok['jml']); ?></h1>
									</center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang' style="color: #000;">Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="panel panel-primary" style="border-color: #ddd;">
								<div class="panel-heading text-center" style="background-color: #F1C500; border-color: #ddd; color: #fff;">
									<h4></i> Terjual</h4>
								</div>
								<div class="panel-body">
									<center>
										<h1 style="color: #000;"><?php echo number_format($jual['stok']); ?></h1>
									</center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;font-weight:700;"><a href='index.php?page=laporan' style="color: #000;">Tabel laporan <i class='fa fa-angle-double-right'></i></a></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="panel panel-danger" style="border-color: #ddd;">
								<div class="panel-heading text-center" style="background-color: #ff6c60; border-color: #ddd; color: #fff;">
									<h4>Kategori Barang</h4>
								</div>
								<div class="panel-body">
									<center>
										<h1 style="color: #000;"><?php echo number_format($hasil_kategori); ?></h1>
									</center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=kategori' style="color: #000;">Tabel Kategori <i class='fa fa-angle-double-right'></i></a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 ds">
				<div id="calendar" class="mb">
					<div class="panel white-panel no-margin">
						<div class="panel-body">
							<div id="my-calendar" style="color: #000;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix" style="padding-top:18%;"></div>
	</section>
</section>