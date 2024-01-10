		<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Çeviri İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Dil Düzenle
				</div>

				<div class="card-block">
						<!-- AYAR  -->
						<form style="margin-bottom: 15px;" method="POST" action="controller/function.php" class="form-horizontal">


							<div class="form-group">
								<input type="hidden" name="dil_id" readonly class="form-control">
								<div class="row">
									<div class="col-md-5">
										<input type="text" name="dil_ad" readonly class="form-control">
									</div>
									<div class="col-md-6">
										<select name="dil_durum" class="form-control m-b">
												<option value="1">Aktif</option>
												<option value="0">Pasif</option>
										</select>
									</div>	
									<button style="cursor: pointer;" type="submit" name="dilduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>						
								</div>
							</div>

							
						</form>
						<!--#AYAR  -->
				</div>
			</div>
		</div>
	</div>
