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
		<h2>Seo Ayarları</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
					<div role="tabpanel" class="tab-pane" id="seo">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SEO AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="ayar_title" class="form-control form-control-rounded">
									</div>

									<div class="form-group">
										<label>Description</label>
										<input name="ayar_description" type="text" class="form-control form-control-rounded">
									</div>

									<div class="form-group">
										<label>Keywords</label>
										<input type="text" name="ayar_keywords" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="seoayar" value="Sign up">Güncelle</button>
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