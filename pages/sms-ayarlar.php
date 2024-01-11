<?php 
include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>Sms Ayarları</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SMS AYARLARI
								<p>SMS firması İleti merkezi'dir Link: <a target="_blank" href="https://www.iletimerkezi.com">www.iletimerkezi.com</a></p><br><img style="height: 34px;background: #d83d3d;border-radius: 4px;padding: 5px;margin-top: -40px;" src="assets/img/genel/ileti-merkezi-logo.png">
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Kullanıcı Adı</label>
										<input type="text" name="sms_kullanici" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Şifre</label>
										<input name="sms_sifre" type="text" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Başlık</label>
										<input type="text" name="sms_baslik" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Durum</label>
										<select name="sms_durum" class="form-control m-b">
												<option value="1">Aktif</option>
												<option value="0">Pasif</option>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="sms" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- 						Content End 							-->
	<!-- ============================================================== -->
<?php include "../_inc/footer.php"; ?>