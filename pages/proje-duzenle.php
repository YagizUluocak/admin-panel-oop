<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Proje İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="projeler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Proje Düzenle
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="proje_id" >
						</div>
						<div class="form-group">
							<input type="hidden" name="eski_yol" >
						</div>
						<div class="form-group">
							<label>Proje Adı</label>
							<input type="text" name="proje_baslik" class="form-control">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="proje_icerik">
								
							</textarea>
						</div>
						
						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="proje_vitrin" class="form-control m-b">
								<option value="1">Göster</option>
								<option value="0">Gizle</option>
						</select>
						<small class="text-muted">Projeler ana sayfada gösterilecektir</small>
					</div>

					<hr>
					<div class="">
						<b style="color: red;">*SEO Meta Ayarları</b>
						<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="proje_title" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Description</label>
						<input name="proje_descr" type="text" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Keywords</label>
						<input type="text" name="proje_keyword" class="form-control form-control-rounded">
						<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
					</div>
					<button style="cursor: pointer;" type="submit" name="projeduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>