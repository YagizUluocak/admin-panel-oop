<?php 
require_once ('../classes/db.class.php');

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";







?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								GENEL AYARLAR
							</div>
							<div class="card-block">
								<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="eskiyol_logo">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_logo">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_fav">
									</div>
									<div class="form-group">
										<img style="max-height: 100px;max-width: 100px;" src="#">
										<label for="">Logo</label>
										<input type="file" name="" id="" class="form-control">
										<small> Logo max yüksekliği 50 olmalıdır.</small>
									</div>
									<div class="form-group">
										
										<img style="max-height: 100px;max-width: 100px;" src="#">
										<label for="">Logo Negatif</label>
										<input type="file" name="" id="" class="form-control">
										<small> Logo max yüksekliği 50 olmalıdır.</small>
									</div>
									<div class="form-group">
										<img style="max-height: 36px;max-width: 36px;" src="#">
										<label for="">Favicon</label>
										<input type="file" name="" id="" class="form-control">
										<small> Logo max 36x36 olmalıdır.</small>
									</div>

									<div class="form-group">
										<label for="ayar_siteurl">Site Link <small>Belirtilen linke <b style="color: red;">http://</b> veya <b style="color: red;">https://</b> dahil ediniz.</small></label>
										<input type="text" class="form-control" id="ayar_siteurl" name="ayar_siteurl"/>
									</div>
									<div class="form-group">
										<label for="ayar_firmaadi">Firma Adı</label>
										<input type="text" class="form-control" id="ayar_firmaadi" name="ayar_firmaadi"/>
									</div>
									<div class="form-group">
										<label for="ayar_harita">Harita Kodu</label>
										<textarea style="height: 100px;" class="form-control" name="ayar_harita" rows="5" id="ayar_harita">
									
										</textarea>
									</div>
									<div class="form-group">
										<label for="ayar_kod">Canlı Destek Kodu</label>
										<textarea style="height: 100px;" class="form-control" name="ayar_kod" rows="5" id="ayar_harita">
									
										</textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="genelayar" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- 						Content End 							-->
	<!-- ============================================================== -->
<?php include "../_inc/footer.php"; ?>