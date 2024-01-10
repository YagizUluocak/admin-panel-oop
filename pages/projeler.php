<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Proje İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="proje-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Proje Ekle</a>
					</div>
					Projeler
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Proje id</strong>
								</th>
								<th class="text-left">
									<strong>Proje Adı</strong>
								</th>
								<th class="text-left">
									<strong>Proje Resim</strong>
								</th>
								<th class="text-left">
									<strong>Proje İçerik</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>#</td>
									
									<td></td>
									<td class="text-center">
										<a href="#" class="btn btn-primary btn-icon"><i class="icon-picture"></i> Resim Ayarları</a>
									</td>
									<td><?php echo $projeicerik; ?></td>
									<td class="text-center">
										<a href="#" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
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