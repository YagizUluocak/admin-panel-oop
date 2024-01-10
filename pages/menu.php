<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Header Menü İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Üst Özel Menü Düzenle
				</div>

				<div class="card-block">
					<h5 style="color: green;">Yeni Özel Menü Ekle</h5>
					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label>Menü Adı</label>
									<input type="text" name="omenu_ad" placeholder="Menü adı giriniz." class="form-control">
								</div>
								<div class="col-md-3">
									<label>Menü Link</label>
									<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label>Menü Sıra</label>
									<input type="text" name="omenu_sira" placeholder="Menü sıra giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label>Üst Menü</label>
									<select name="omenu_ust" class="form-control m-b">
										<option value="0">-ÜST MENÜ YOK-</option>
										<option value="#"></option>

									</select>
								</div>
								<div class="col-md-2">
									<label>*İşlem</label><div>
										<button style="cursor: pointer;" type="submit" name="omenuekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
					<h5 style="color: green;">Var Olan Menüler</h5>
						<form method="POST" action="controller/function.php" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="omenu_id" class="form-control">
									<div class="col-md-3">
										<label>Menü Adı</label>
										<input type="text" name="omenu_ad" class="form-control">
									</div>
									<div class="col-md-3">
										<label>Menü Link</label>
										<input type="text" name="omenu_link" class="form-control">
									</div><div class="col-md-2">
										<label>Menü Sıra</label>
										<input type="text" name="omenu_sira" class="form-control">
									</div>
									<input type="hidden" name="eski_ust" class="form-control">
									<div class="col-md-2">
										<label>Üst Menü</label>
										<input type="hidden" name="eski_ust" class="form-control">
										<select name="omenu_ust" class="form-control m-b">
											<option value="#"></option>
											<option value="0">ÜST MENÜ YOK</option>
											<option value="#"></option>
										</select>
									</div>
									<div class="col-md-2">
										<label>*İşlem</label><div>
											<button style="cursor: pointer;" type="submit" name="omenuduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
											<a href="#" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>