<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Sayfa İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="sayfalar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Sayfa Düzenle
				</div>
				<div class="card-block">
					<div class="form-group">
						<label><b style="color: red;">Sayfa Linki</b></label> <b>Linki kopyalayarak özel üst menüye veya footer menüye ekleyebilirsiniz.</b>
						<input type="text" readonly class="form-control">
					</div>
					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="sayfa_id" >
						</div>
						
						<div class="form-group">
							<label>Sayfa Başlık</label>
							<input type="text" name="sayfa_baslik" class="form-control">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="sayfa_icerik">
								
							</textarea>
						</div>
						<div class="form-group">
							<label>Menude Göster</label>
							<select name="sayfa_menu" class="form-control m-b">
								<option value="1">Göster</option>
								<option value="0">Gizle</option>
						</select>
						<small class="text-muted">Seçilen özellik ile oluşturulan sayfa üst menude alt sekme olarak gösterilecektir</small>
					</div>

					<hr>
					<div class="">
						<b style="color: red;">*SEO Meta Ayarları</b>
						<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="sayfa_title" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Description</label>
						<input name="sayfa_descr" type="text" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Keywords</label>
						<input type="text" name="sayfa_keyword" class="form-control form-control-rounded">
						<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
					</div>
					<button style="cursor: pointer;" type="submit" name="sayfaduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
