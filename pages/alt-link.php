
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Footer Link İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Alt Link Düzenle
				</div>

				<div class="card-block">
					<h5 style="color: green;">Yeni Alt Link Ekle</h5>
					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Link Adı</label>
									<input type="text" name="flink_ad" placeholder="Link adı giriniz." class="form-control">
								</div>
								<div class="col-md-4">
									<label>Link</label>
									<input type="text" name="flink_link" placeholder="Link linki giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label>*İşlem</label><div>
										<button style="cursor: pointer;" type="submit" name="flinkekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
					<h5 style="color: green;">Var Olan Alt Linkler</h5>

						<form method="POST" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="flink_id" class="form-control">
									<div class="col-md-4">
										<label>Link Adı</label>
										<input type="text" name="flink_ad" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Link</label>
										<input type="text" name="flink_link" class="form-control">
									</div>
									<div class="col-md-2">
										<label>*İşlem</label><div>
											<button style="cursor: pointer;" type="submit" name="flinkduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
											<a href="#" style="cursor: pointer;" type="submit" name="flinksil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
