<?php 
include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";
?>



<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<section class="main-content container">
	<div class="row">

	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-success pull-right">CANLI</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  Online</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-success"><b>  </b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="text-muted margin-b-0"><small class="text-muted">TEKİL ZİYARETÇİ</small></h3>                            
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-primary pull-right">BUGÜN</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  Günlük</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10  text-primary"><b>  </b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10  text-primary"><b>  </b> <small class="text-muted">GÖSTERİM</small></h3>                           
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-warning pull-right">AY</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  AYLIK</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-warning"><b>  </b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10 text-warning"><b>  </b> <small class="text-muted">GÖSTERİM</small></h3>                            
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-danger pull-right">HEPSİ</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i> TÜMÜ</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-danger"><b>   </b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10 text-danger"><b>   </b> <small class="text-muted">GÖSTERİM</small></h3>                            
			</div>
		</div>
	</div>
	<!-- İLETİŞİM MESAJLARI -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-heading card-default">
				Gelen Mesajlar
				<p class="text-muted">İletişim formu ile gönderilen mesajlar</p>
			</div>
			<div class="card-block">
				<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
					<thead>
						<tr>
							<th class="text-left">
								<strong>Tarih</strong>
							</th>
							<th class="text-left">
								<strong>Ad Soyad</strong>
							</th>
							<th class="text-left">
								<strong>Mail Adresi</strong>
							</th>
							<th class="text-left">
								<strong>Mesaj</strong>
							</th>
							<th class="text-center">
								<strong>İşlemler</strong>
							</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-center">
									<a href="#" title="Göster" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
									<a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- İLETİŞİM MESAJLARI -->
	</div>
	<?php include "../_inc/footer.php"; ?>