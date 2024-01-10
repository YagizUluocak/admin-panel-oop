	<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Footer Menü İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Alt Menü Düzenle
				</div>

				<div class="card-block">
					<h5 style="color: green;">Yeni Alt Menü Ekle</h5>
					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Menü Adı</label>
									<input type="text" name="fmenu_ad" placeholder="Menü adı giriniz." class="form-control">
								</div>
								<div class="col-md-4">
									<label>Menü Link</label>
									<input type="text" name="fmenu_link" placeholder="Menü linki giriniz." class="form-control">
								</div><div class="col-md-2">
									<label>Menü Sıra</label>
									<input type="text" name="fmenu_sira" placeholder="Menü sıra giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label>*İşlem</label><div>
										<button style="cursor: pointer;" type="submit" name="fmenuekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
					<h5 style="color: green;">Var Olan Alt Menüler</h5>
						<form method="POST" action="controller/function.php" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="fmenu_id" class="form-control">
									<div class="col-md-4">
										<label>Menü Adı</label>
										<input type="text" name="fmenu_ad" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Menü Link</label>
										<input type="text" name="fmenu_link" class="form-control">
									</div><div class="col-md-2">
										<label>Menü Sıra</label>
										<input type="text" name="fmenu_sira" class="form-control">
									</div>
									<div class="col-md-2">
										<label>*İşlem</label><div>
											<button style="cursor: pointer;" type="submit" name="fmenuduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
											<a href="#" style="cursor: pointer;" type="submit" name="fmenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
