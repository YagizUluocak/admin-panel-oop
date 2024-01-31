<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;

$Mail = new MailAyar;
$mailIDGetir = $Mail->mailAyarIDGetir();

if(isset($_POST['submit']))
{
	$mailGuncelle = $Mail->mailAyarGuncelle();

	if($mailGuncelle)
	{
		$updated = true;

		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'mail-ayarlar.php';
                    }, 1100); 
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
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Mail Adresi</label>
										<input type="text" name="mail_host" class="form-control form-control-rounded" value="<?php echo $mailIDGetir->mail_host?>">
									</div>
									<div class="form-group">
										<label>Mail Şifre</label>
										<input type="text" name="mail_port" class="form-control form-control-rounded" value="<?php echo $mailIDGetir->mail_port?>">
									</div>
									<div class="form-group">
										<label>Mail Sunucu</label>
										<input type="text" name="mail_password" class="form-control form-control-rounded" value="<?php echo $mailIDGetir->mail_password?>">
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