
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Bilgi İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="bilgiler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Bilgi Düzenle
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="bilgi_id">
						</div>						
						<div class="form-group">
							<label>Bilgi Başlık</label>
							<input type="text" name="bilgi_baslik" class="form-control">
						</div>

						<div class="form-group">
							<label>Bilgi İçerik</label>
							<textarea style="height: 80px;" name="bilgi_aciklama">

							</textarea>
						</div>
					<button style="cursor: pointer;" type="submit" name="bilgiduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
