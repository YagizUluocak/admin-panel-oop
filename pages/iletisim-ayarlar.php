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
		<h2>İletişim Ayarları</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
					<div role="tabpanel" class="tab-pane" id="contact">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								İLETİŞİM AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="POST" class="form-horizontal">
									<div class="form-group">
										<label for="ayar_adres">Adres</label>
										<input type="text" class="form-control" id="ayar_adres" name="ayar_adres"/>
									</div>

									<div class="form-group">
										<label for="ayar_mail">Email</label>
										<input type="text" class="form-control" id="ayar_mail" name="ayar_mail"/>
									</div>

									<div class="form-group">
										<label for="ayar_fax">Fax</label>
										<input type="text" class="form-control" id="ayar_fax" name="ayar_fax"/>
									</div>

									<div class="form-group">
										<label for="ayar_tel">Telefon</label>
										<input type="text" class="form-control" id="ayar_tel" name="ayar_tel"/>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="iletisimayar" value="Sign up">Güncelle</button>
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