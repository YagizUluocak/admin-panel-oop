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
	$ayarGuncelle = $Ayar->seoAyarGuncelle();

	if($ayarGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'seo-ayarlar.php';
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
										<label>Title</label>
										<input type="text" name="ayar_title" class="form-control form-control-rounded" value="<?php echo $ayarGetir->ayar_title?>">
									</div>

									<div class="form-group">
										<label>Description</label>
										<input name="ayar_description" type="text" class="form-control form-control-rounded" value="<?php echo $ayarGetir->ayar_description?>">
									</div>

									<div class="form-group">
										<label>Keywords</label>
										<input type="text" name="ayar_keywords" class="form-control form-control-rounded" value="<?php echo $ayarGetir->ayar_keywords?>">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
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