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
		<h2>SMTP Ayarları</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">

					<div role="tabpanel" class="tab-pane" id="mail">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SMTP AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Mail Adresi</label>
										<input type="text" name="mail_user" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Şifre</label>
										<input type="text" name="mail_pass" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Sunucu</label>
										<input type="text" name="mail_host" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Port</label>
										<input type="text" name="mail_port" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="mailayarlari" value="Sign up">Güncelle</button>
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