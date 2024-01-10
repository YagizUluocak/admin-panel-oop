<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Randevu Detayları</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<button class="btn btn-success" onclick="window.print();"><i class="fa fa-print"></i> Yazdır</button>
						<a href="randevu.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Gelen Randevu
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<label>Oluşturulma Tarihi</label>
							<input type="text"  readonly="" class="form-control">
						</div>
						<div class="form-group">
							<label>Ad Soyad</label>
							<input type="text" readonly="readonly" class="form-control">
						</div>
						<div class="form-group">
							<label>Telefon</label>
							<input type="text" readonly="readonly" class="form-control">
						</div>
						<div class="form-group">
							<label>Bölüm</label>
							<input type="text" readonly="readonly" class="form-control">
						</div>
						<div class="form-group">
							<label>Randevu Tarih ve Saati</label>
							<textarea style="height: 60px;" class="form-control" readonly="" rows="5">
						
							</textarea>
						</div>
						<div class="form-group">
							<label>Not</label>
							<textarea style="height: 60px;" class="form-control" readonly=""  rows="5">
							
							</textarea>
						</div>
						<div class="form-group">
							<label>Adres Bilgisi</label>
							<textarea style="height: 60px;" class="form-control" readonly="" rows="5">
							
							</textarea>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
