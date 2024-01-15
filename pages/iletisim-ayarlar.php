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
	$ayarGuncelle = $Ayar->ıletisimAyarGuncelle();

	if($ayarGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'iletisim-ayarlar.php';
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
								<form method="POST" class="form-horizontal">
									<div class="form-group">
										<label for="ayar_adres">Adres</label>
										<input type="text" class="form-control" id="ayar_adres" name="ayar_adres" value="<?php echo $ayarGetir->ayar_adres?>"/>
									</div>
	
									<div class="form-group">
										<label for="ayar_mail">Email</label>
										<input type="text" class="form-control" id="ayar_mail" name="ayar_mail" value="<?php echo $ayarGetir->ayar_mail?>"/>
									</div>

									<div class="form-group">
										<label for="ayar_fax">Fax</label>
										<input type="text" class="form-control" id="ayar_fax" name="ayar_fax" value="<?php echo $ayarGetir->ayar_fax?>"/>
									</div>

									<div class="form-group">
										<label for="ayar_tel">Telefon</label>
										<input type="text" class="form-control" id="ayar_tel" name="ayar_tel" value="<?php echo $ayarGetir->ayar_tel?>"/>
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