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
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">

			<div role="tabpanel" class="tab-pane" id="tema">
				<div class="widget white-bg">
							<!-- FORM BAŞLA -->
						<div class="card-heading card-default">
								TEMA AYARLARI
						</div>
						<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Tema Rengi</label> <small>- Şimdiki Renk </small>
										<select name="ayar_renk" class="form-control m-b">
											<option style="color: #000;">Yeni Renk Seç</option>
											<option style="color: #fff;background: #15807d;" value="petrol.css">#15807d-petrol.css</option>
											<option style="color: #fff;background: #2791d8;" value="bluemax.css">#2791d8-bluemax.css</option>
											<option style="color: #fff;background: #15bba4;" value="default.css">#15bba4-default.css</option>
											<option style="color: #fff;background: #f0b016;" value="buttercup.css">#f0b016-buttercup.css</option>
											<option style="color: #fff;background: #f37348;" value="jaffa.css">#f37348-jaffa.css</option>
											<option style="color: #fff;background: #e94f6c;" value="mandy.css">#e94f6c-mandy.css</option>
											<option style="color: #fff;background: #485d67;" value="fiord.css">#485d67-fiord.css</option>
											<option style="color: #fff;background: #45c1ea;" value="picton.css">#45c1ea-picton.css</option>
											<option style="color: #fff;background: #7ebd4f;" value="mantis.css">#7ebd4f-mantis.css</option>
											<option style="color: #fff;background: #28cac8;" value="turquoise.css">#28cac8-turquoise.css</option>
											<option style="color: #fff;background: #f38106;" value="gold.css">#f38106-gold.css</option>
											<option style="color: #fff;background: #666699;" value="kimberly.css">#666699-kimberly.css</option>
											<option style="color: #fff;background: #e35611;" value="christine.css">#e35611-christine.css</option>
											<option style="color: #fff;background: #78a9bb;" value="neptune.css">#78a9bb-neptune.css</option>
											<option style="color: #fff;background: #f22a4f;" value="amaranth.css">#f22a4f-amaranth.css</option>
											<option style="color: #fff;background: #ddd222;" value="sunflower.css">#ddd222-sunflower.css</option>
											<option style="color: #fff;background: #6c8b7d;" value="viridian.css">#6c8b7d-viridian.css</option>
											<option style="color: #fff;background: #e44f2a;" value="cinnabar.css">#e44f2a-cinnabar.css</option>
											<option style="color: #fff;background: #1e969d;" value="cadillac.css">#1e969d-cadillac.css</option>
											<option style="color: #fff;background: #eed31f;" value="golden.css">#eed31f-golden.css</option>
											<option style="color: #fff;background: #bb1515;" value="thunderbird.css">#bb1515-thunderbird.css</option>
											<option style="color: #fff;background: #4bb440;" value="apple.css">#4bb440-apple.css</option>
											<option style="color: #fff;background: #8a4e34;" value="potters.css">#8a4e34-potters.css</option>
											<option style="color: #fff;background: #c085b7;" value="viola.css">#c085b7-viola.css</option>
											<option style="color: #fff;background: #364fad;" value="azure.css">#364fad-azure.css</option>
											<option style="color: #fff;background: #9a2b4b;" value="stiletto.css">#9a2b4b-stiletto.css</option>
											<option style="color: #fff;background: #1cc075;" value="meadow.css">#1cc075-meadow.css</option>
											<option style="color: #fff;background: #b4a041;" value="tussock.css">#b4a041-tussock.css</option>
											<option style="color: #fff;background: #d39c54;" value="serria.css">#d39c54-serria.css</option>
											<option style="color: #fff;background: #517cbd;" value="steel.css">#517cbd-steel.css</option>
											<option style="color: #fff;background: #b08179;" value="brandy.css">#b08179-brandy.css</option>
											<option style="color: #fff;background: #2b3d43;" value="spruce.css">#2b3d43-spruce.css</option>
											<option style="color: #fff;background: #532d28;" value="saddle.css">#532d28-saddle.css</option>
											<option style="color: #fff;background: #bbe63a;" value="mahogany.css">#bbe63a-mahogany.css</option>
											<option style="color: #fff;background: #ef7f87;" value="froly.css">#ef7f87-froly.css</option>
											<option style="color: #fff;background: #f3d614;" value="lemon.css">#f3d614-lemon.css</option>
											<option style="color: #fff;background: #4c1b3c;" value="berry.css">#4c1b3c-berry.css</option>
											<option style="color: #fff;background: #E40000;" value="red.css">#E40000-red.css</option>
											<option style="color: #fff;background: #e0272f;" value="crimson.css">#e0272f-crimson.css</option>
										</select>
										<div class="form-group">
											<label>Mobil Üst Renk</label>
											<input type="text" name="ayar_mobil" class="form-control form-control-rounded">
										</div>
										<div class="form-group">
											<label>Site Yüklenme İconu</label>
											<select name="ayar_loader" class="form-control m-b">
													<option value="1">Aktif</option>
													<option value="0">Pasif</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="renkayar" value="Sign up">Güncelle</button>
									</div>
								</form>
								<!-- TEMA ARKAPLAN -->
								<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal">

									<div class="form-group">
										<img class="display:block;" style="max-height: 100px;max-width: 100px;" src="#">
										<label>Biz Kimiz? Görseli</label> 
										<input type="file" name="" id="" class="form-control">
										<small> Ölçü max 1920*1080 olmalıdır.</small>
									</div>

									<div class="form-group">
										<img class="display:block;" style="max-height: 100px;max-width: 100px;" src="#">
										<label>Footer Arkaplan</label> 
										<input type="file" name="" id="" class="form-control">
										<small> Ölçü max 1920x961 olmalıdır.</small>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="arkaplan" value="Sign up">Güncelle</button>
									</div>
								</form>
								<!-- TEMA ARKAPLAN -->
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