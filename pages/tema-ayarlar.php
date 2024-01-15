<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;
$Ayar = new Ayar;
$ayarGetir = $Ayar->AyarGetir();

if(isset($_POST['submit']))
{
	$ayarGuncelle = $Ayar->temaAyarGuncelle();

	if($ayarGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'tema-ayarlar.php';
                    }, 1300); 
                });
            </script>
        <?php
	}
}


?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>TEMA AYARLARI</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">

			<div role="tabpanel" class="tab-pane" id="tema">
				<div class="widget white-bg">
							<!-- FORM BAŞLA -->
						<div class="card-heading card-default">
							TEMA AYARLARI
						</div>
						<?php
								if($updated)
								{
									?>
										<div class="alert alert-success text-center bg-success" role="alert" id="alertBox">
											<h5>Güncelleme İşlemi Başarıyla Gerçekleştirildi. Yönlendiriliyor!</h5>
										</div>
										
									<?php
								}
							?>   
						<div class="card-block">
								<form method="POST" class="form-horizontal" enctype="multipart/form-data">
									<div class="form-group">
										<label>Tema Rengi</label> <small>- Şimdiki Renk </small>
										<select name="ayar_renk" class="form-control m-b">
											<option style="color: #000;">Yeni Renk Seç</option>
											<option style="color: #fff;background: #15807d;" value="petrol.css" <?php echo ($ayarGetir->ayar_renk == "petrol.css") ? 'selected' : ''; ?>>#15807d-petrol.css</option>
											<option style="color: #fff;background: #2791d8;" value="bluemax.css" <?php echo ($ayarGetir->ayar_renk == "bluemax.css") ? 'selected' : ''; ?>>#2791d8-bluemax.css</option>
											<option style="color: #fff;background: #15bba4;" value="default.css"  <?php echo ($ayarGetir->ayar_renk == "default.css") ? 'selected' : ''; ?>>#15bba4-default.css</option>
											<option style="color: #fff;background: #f0b016;" value="buttercup.css" <?php echo ($ayarGetir->ayar_renk == "buttercup.css") ? 'selected' : ''; ?>>#f0b016-buttercup.css</option>
											<option style="color: #fff;background: #f37348;" value="jaffa.css" <?php echo ($ayarGetir->ayar_renk == "jaffa.css") ? 'selected' : ''; ?>>#f37348-jaffa.css</option>
											<option style="color: #fff;background: #e94f6c;" value="mandy.css" <?php echo ($ayarGetir->ayar_renk == "mandy.css") ? 'selected' : ''; ?>>#e94f6c-mandy.css</option>
											<option style="color: #fff;background: #485d67;" value="fiord.css" <?php echo ($ayarGetir->ayar_renk == "fiord.css") ? 'selected' : ''; ?>>#485d67-fiord.css</option>
											<option style="color: #fff;background: #45c1ea;" value="picton.css" <?php echo ($ayarGetir->ayar_renk == "picton.css") ? 'selected' : ''; ?>>#45c1ea-picton.css</option>
											<option style="color: #fff;background: #7ebd4f;" value="mantis.css"<?php echo ($ayarGetir->ayar_renk == "mantis.css") ? 'selected' : ''; ?>>#7ebd4f-mantis.css</option>
											<option style="color: #fff;background: #28cac8;" value="turquoise.css"<?php echo ($ayarGetir->ayar_renk == "turquoise.css") ? 'selected' : ''; ?>>#28cac8-turquoise.css</option>
											<option style="color: #fff;background: #f38106;" value="gold.css"<?php echo ($ayarGetir->ayar_renk == "gold.css") ? 'selected' : ''; ?>>#f38106-gold.css</option>
											<option style="color: #fff;background: #666699;" value="kimberly.css"<?php echo ($ayarGetir->ayar_renk == "kimberly.css") ? 'selected' : ''; ?>>#666699-kimberly.css</option>
											<option style="color: #fff;background: #e35611;" value="christine.css" <?php echo ($ayarGetir->ayar_renk == "christine.css") ? 'selected' : ''; ?>>#e35611-christine.css</option>
											<option style="color: #fff;background: #78a9bb;" value="neptune.css" <?php echo ($ayarGetir->ayar_renk == "neptune.css") ? 'selected' : ''; ?>>#78a9bb-neptune.css</option>
											<option style="color: #fff;background: #f22a4f;" value="amaranth.css" <?php echo ($ayarGetir->ayar_renk == "amaranth.css") ? 'selected' : ''; ?>>#f22a4f-amaranth.css</option>
											<option style="color: #fff;background: #ddd222;" value="sunflower.css" <?php echo ($ayarGetir->ayar_renk == "sunflower.css") ? 'selected' : ''; ?>>#ddd222-sunflower.css</option>
											<option style="color: #fff;background: #6c8b7d;" value="viridian.css" <?php echo ($ayarGetir->ayar_renk == "viridian.css") ? 'selected' : ''; ?>>#6c8b7d-viridian.css</option>
											<option style="color: #fff;background: #e44f2a;" value="cinnabar.css" <?php echo ($ayarGetir->ayar_renk == "cinnabar.css") ? 'selected' : ''; ?>>#e44f2a-cinnabar.css</option>
											<option style="color: #fff;background: #1e969d;" value="cadillac.css" <?php echo ($ayarGetir->ayar_renk == "cadillac.css") ? 'selected' : ''; ?>>#1e969d-cadillac.css</option>
											<option style="color: #fff;background: #eed31f;" value="golden.css" <?php echo ($ayarGetir->ayar_renk == "golden.css") ? 'selected' : ''; ?>>#eed31f-golden.css</option>
											<option style="color: #fff;background: #bb1515;" value="thunderbird.css" <?php echo ($ayarGetir->ayar_renk == "thunderbird.css") ? 'selected' : ''; ?>>#bb1515-thunderbird.css</option>
											<option style="color: #fff;background: #4bb440;" value="apple.css" <?php echo ($ayarGetir->ayar_renk == "apple.css") ? 'selected' : ''; ?>>#4bb440-apple.css</option>
											<option style="color: #fff;background: #8a4e34;" value="potters.css" <?php echo ($ayarGetir->ayar_renk == "potters.css") ? 'selected' : ''; ?>>#8a4e34-potters.css</option>
											<option style="color: #fff;background: #c085b7;" value="viola.css" <?php echo ($ayarGetir->ayar_renk == "viola.css") ? 'selected' : ''; ?>>#c085b7-viola.css</option>
											<option style="color: #fff;background: #364fad;" value="azure.css" <?php echo ($ayarGetir->ayar_renk == "azure.css") ? 'selected' : ''; ?>>#364fad-azure.css</option>
											<option style="color: #fff;background: #9a2b4b;" value="stiletto.css" <?php echo ($ayarGetir->ayar_renk == "stiletto.css") ? 'selected' : ''; ?>>#9a2b4b-stiletto.css</option>
											<option style="color: #fff;background: #1cc075;" value="meadow.css" <?php echo ($ayarGetir->ayar_renk == "meadow.css") ? 'selected' : ''; ?>>#1cc075-meadow.css</option>
											<option style="color: #fff;background: #b4a041;" value="tussock.css" <?php echo ($ayarGetir->ayar_renk == "tussock.css") ? 'selected' : ''; ?>>#b4a041-tussock.css</option>
											<option style="color: #fff;background: #d39c54;" value="serria.css" <?php echo ($ayarGetir->ayar_renk == "serria.css") ? 'selected' : ''; ?>>#d39c54-serria.css</option>
											<option style="color: #fff;background: #517cbd;" value="steel.css" <?php echo ($ayarGetir->ayar_renk == "steel.css") ? 'selected' : ''; ?>>#517cbd-steel.css</option>
											<option style="color: #fff;background: #b08179;" value="brandy.css" <?php echo ($ayarGetir->ayar_renk == "brandy.css") ? 'selected' : ''; ?>>#b08179-brandy.css</option>
											<option style="color: #fff;background: #2b3d43;" value="spruce.css" <?php echo ($ayarGetir->ayar_renk == "spruce.css") ? 'selected' : ''; ?>>#2b3d43-spruce.css</option>
											<option style="color: #fff;background: #532d28;" value="saddle.css" <?php echo ($ayarGetir->ayar_renk == "saddle.css") ? 'selected' : ''; ?>>#532d28-saddle.css</option>
											<option style="color: #fff;background: #bbe63a;" value="mahogany.css" <?php echo ($ayarGetir->ayar_renk == "mahogany.css") ? 'selected' : ''; ?>>#bbe63a-mahogany.css</option>
											<option style="color: #fff;background: #ef7f87;" value="froly.css" <?php echo ($ayarGetir->ayar_renk == "froly.css") ? 'selected' : ''; ?>>#ef7f87-froly.css</option>
											<option style="color: #fff;background: #f3d614;" value="lemon.css" <?php echo ($ayarGetir->ayar_renk == "lemon.css") ? 'selected' : ''; ?>>#f3d614-lemon.css</option>
											<option style="color: #fff;background: #4c1b3c;" value="berry.css" <?php echo ($ayarGetir->ayar_renk == "berry.css") ? 'selected' : ''; ?>>#4c1b3c-berry.css</option>
											<option style="color: #fff;background: #E40000;" value="red.css" <?php echo ($ayarGetir->ayar_renk == "red.css") ? 'selected' : ''; ?>>#E40000-red.css</option>
											<option style="color: #fff;background: #e0272f;" value="crimson.css" <?php echo ($ayarGetir->ayar_renk == "crimson.css") ? 'selected' : ''; ?>>#e0272f-crimson.css</option>
										</select>
										<div class="form-group">
											<label>Site Yüklenme İconu</label>
											<select name="ayar_loader" class="form-control m-b">
											<option value="1" <?php echo ($ayarGetir->ayar_loader == 1) ? 'selected' : ''; ?>>Aktif</option>
        									<option value="0" <?php echo ($ayarGetir->ayar_loader == 0) ? 'selected' : ''; ?>>Pasif</option>
											</select>
										</div>
										<div class="form-group">
											<img class="display:block;" style="max-height: 100px; max-width: 100px;" src="../images/ayar/<?php echo $ayarGetir->ayar_resim_paralax?>">
											<label>Arkaplan paralax Resim</label> 
											<input type="file" name="ayar_resim_paralax" class="form-control">
											<small> Ölçü max 1920x961 olmalıdır.</small>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="submit">Güncelle</button>
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