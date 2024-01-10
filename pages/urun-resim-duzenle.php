		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Ürün İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="urunler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Ürün Düzenle
				</div>
				<div class="card-block">

					<form action="controller/resim.php" class="dropzone" >
						<input type="hidden" name="resim_urun">

					</form>

					<form method="POST" enctype="multipart/form-data" class="form-horizontal">
						<br/><label style="text-align: center;">Yüklü Resimler <small>(Resimleri yükledikten sonra sayfayı yenileyin.)</small></label><br/>
						<div class="card-block">
							<div class="lightboxGallery">
									<a href="#" data-toggle="modal" data-target="#textModal"><img style="max-width: 200px; max-height: 200px;" src="#" alt=""></a>
									<div class="modal fade bs-example-modal-lg" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModal">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-body">
													<p>
														<img style="max-width: 100%; max-height: 600px;" src="#">
													</p><br>
													<div class="text-center">
														<a href="#"><i class="fa fa-trash-o"></i> Resmi Sil</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>