<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;
$Hizmet = new Hizmet();
$hizmetIDGetir = $Hizmet->hizmetIDGetir();
if(isset($_POST['submit']))
{
	
	$HizmetGuncelle = $Hizmet->hizmetGuncelle();

	if($HizmetGuncelle)
	{
		$hizmetIDGetir = $Hizmet->hizmetIDGetir();
        $updated = true;
		?>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var alertBox = document.getElementById('alertBox');
				alertBox.style.display = 'block';
		
				setTimeout(function() {
					window.location.href = 'hizmetler.php';
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
		<h2>Hizmet İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="hizmetler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Hizmet Ekle
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

					<form method="POST" enctype="multipart/form-data" class="form-horizontal">						
						<div class="form-group">
							<label>Hizmet Adı</label>
							<input type="text" name="hizmet_baslik" placeholder="Hizmet adı giriniz." class="form-control" value="<?php echo $hizmetIDGetir->hizmet_baslik?>">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote form-control" name="hizmet_icerik"><?php echo $hizmetIDGetir->hizmet_icerik?></textarea>
						</div>
						<div class="form-group">
							<label style="display: block;">Hizmet Resim</label>
							<img class="img-fluid mb-2" src="../images/hizmet/<?php echo $hizmetIDGetir->hizmet_resim?>" alt="" style ="width:100px; height:100px;">
							<input type="file" name="hizmet_resim" class="form-control">
						</div>

						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="hizmet_durum" class="form-control m-b">
								<?php
									if($hizmetIDGetir->hizmet_durum == 1)
									{
										?>
										<option value="1">Göster</option>
										<?php
									}
									else
									{
										?>
											<option value="0">Gizle</option>
										<?php
									}
								?>	
						</select>
						<small class="text-muted">Hizmeti Sitede Göster/Gizle Seçeneği</small>
					</div>
					<hr>
					<div class="">
						<b style="color: red;">*SEO Meta Ayarları</b>
						<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="hizmet_title" placeholder="Title belirtiniz" class="form-control form-control-rounded" value="<?php echo $hizmetIDGetir->hizmet_title?>">
					</div>

					<div class="form-group">
						<label>Description</label>
						<input name="hizmet_description" type="text" placeholder="Description belirtiniz" class="form-control form-control-rounded" value="<?php echo $hizmetIDGetir->hizmet_description?>">
					</div>

					<div class="form-group">
						<label>Keywords</label>
						<input type="text" name="hizmet_keywords" placeholder="Keywords belirtiniz" class="form-control form-control-rounded" value="<?php echo $hizmetIDGetir->hizmet_keywords?>">
						<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
					</div>
					<button style="cursor: pointer;" type="submit" name="submit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
					<a href="hizmetler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "../_inc/footer.php"; ?>
