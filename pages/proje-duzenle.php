<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;
$Proje = new Proje();
$ProjeIDGetir = $Proje->projeIDGetir();
if(isset($_POST['submit']))
{

	$projeGuncelle = $Proje->projeGuncelle();

	if($projeGuncelle)
	{
		$ProjeIDGetir = $Proje->projeIDGetir();
        $updated = true;
		?>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var alertBox = document.getElementById('alertBox');
				alertBox.style.display = 'block';
		
				setTimeout(function() {
					window.location.href = 'projeler.php';
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
		<h2>Proje İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="projeler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Proje Ekle
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
							<label>Proje Adı</label>
							<input type="text" name="proje_adi" placeholder="Proje adı giriniz." class="form-control" value="<?php echo $ProjeIDGetir->proje_adi?>">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="proje_icerik"><?php echo $ProjeIDGetir->proje_icerik?></textarea>
						</div>
						<div class="form-group">
							<label>Proje Resim</label>
							<img class="img-fluid mb-2" src="../images/proje/<?php echo $ProjeIDGetir->proje_resim ?>" alt="" style ="width:100px; height:100px;">
							<input type="file" name="proje_resim" class="form-control" value="<?php echo $ProjeIDGetir->proje_resim?>">
						</div>
						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="proje_durum" class="form-control m-b">
								<?php
									if($ProjeIDGetir->proje_durum == 1)
									{
										?>
										<option value="<?php echo $ProjeIDGetir->proje_durum?>" style="color:green;">Göster</option>
										<?php
									}
									else
									{
										?>
											<option value="<?php echo $ProjeIDGetir->proje_durum?>" style="color:red	;">Gizle</option>
										<?php
									}
								?>	
						</select>
						<small class="text-muted">Projeyi Sitede Göster/Gizle Seçeneği</small>
					</div>


						<hr>
						<div class="">
							<b style="color: red;">*SEO Meta Ayarları</b>
							<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="proje_title" placeholder="Title belirtiniz" class="form-control form-control-rounded" value="<?php echo $ProjeIDGetir->proje_title?>">
						</div>

						<div class="form-group">
							<label>Description</label>
							<input name="proje_description" type="text" placeholder="Description belirtiniz" class="form-control form-control-rounded" value="<?php echo $ProjeIDGetir->proje_description?>">
						</div>

						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="proje_keywords" placeholder="Keywords belirtiniz" class="form-control form-control-rounded" value="<?php echo $ProjeIDGetir->proje_keywords?>">
							<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
						</div>
						<button style="cursor: pointer;" type="submit" name="submit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>

					</form>
				</div>
			</div>
		</div>
	</div>
<?php include "../_inc/footer.php"; ?>
