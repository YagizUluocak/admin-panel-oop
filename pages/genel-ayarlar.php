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
	$ayarGuncelle = $Ayar->genelAyarGuncelle();

	if($ayarGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'genel-ayarlar.php';
                    }, 1400); 
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
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								GENEL AYARLAR
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
								<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<img style="max-height: 100px; max-width: 100px; margin-bottom:8px;" src="../images/ayar/<?php echo $ayarGetir->ayar_logo?>">
										<label for="">Logo</label>
										<input type="file" name="ayar_logo" class="form-control">
										<small> Logo max yüksekliği 50 olmalıdır.</small>
									</div>
									<div class="form-group">
										
										<img style="max-height: 100px;max-width: 100px; margin-bottom:8px;" src="../images/ayar/<?php echo $ayarGetir->ayar_logo_negative?>">
										<label for="">Logo Negatif</label>
										<input type="file" name="ayar_logo_negative"class="form-control">
										<small> Logo max yüksekliği 50 olmalıdır.</small>
									</div>
									<div class="form-group">
										<img style="max-height: 36px;max-width: 36px; margin-bottom:8px;" src="../images/ayar/<?php echo $ayarGetir->ayar_favicon?>">
										<label for="">Favicon</label>
										<input type="file" name="ayar_favicon" class="form-control">
										<small> Logo max 36x36 olmalıdır.</small>
									</div>

									<div class="form-group">
										<label for="ayar_siteurl">Site Link <small>Belirtilen linke <b style="color: red;">http://</b> veya <b style="color: red;">https://</b> dahil ediniz.</small></label>
										<input type="text" class="form-control" id="ayar_siteurl" name="ayar_siteurl" value="<?php echo $ayarGetir->ayar_siteurl?>"/>
									</div>
									<div class="form-group">
										<label for="ayar_firma_adi">Firma Adı</label>
										<input type="text" class="form-control" id="ayar_firma_adi" name="ayar_firma_adi" value="<?php echo $ayarGetir->ayar_firma_adi?>"/>
									</div>
									<div class="form-group">
										<label for="ayar_harita">Harita Kodu</label>
										<textarea style="height: 100px;" class="form-control" name="ayar_harita" rows="5" id="ayar_harita">
											<?php echo $ayarGetir->ayar_harita ?>
										</textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="submit" value="Sign up">Güncelle</button>
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