		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Yorum İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="yorumlar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Yorum Düzenle
				</div>
				<div class="card-block">

					<form method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="yorum_id" >
						</div>
						<div class="form-group">
							<input type="hidden" name="eski_yol">
						</div>						
						<div class="form-group">
							<label>Yorum İçerik</label>
							<textarea style="height: 100px;" class="editor" name="yorum_icerik">
							
							</textarea>
						</div>
						<div class="form-group">
							<label>Yorum İsim</label>
							<input type="text" name="yorum_isim" class="form-control">
						</div>
						<div class="form-group">
							<label>Yorum Link</label>
							<input type="text" name="yorum_link" class="form-control">
						</div>
						<div class="form-group">
							<label>Yorum Resim</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="#"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="yorum_resim">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<button style="cursor: pointer;" type="submit" name="yorumduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
				</div>
			</div>
		</div>
	</div>