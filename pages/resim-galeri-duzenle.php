<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;
$Galeri = new Galeri();
$GaleriIDGetir = $Galeri->galeriIDGetir();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
	$GaleriGuncelle = $Galeri->galeriGuncelle();
	if($GaleriGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'resim-galeri.php';
                    }, 1000); 
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
		<h2>Resim İşlemleri</h2>
	</div>
	<?php
	if($updated)
	{
	?>
		<div class="alert alert-success text-center bg-success mt-3" role="alert" id="alertBox">
			<h5>Güncelleme İşlemi Başarıyla Gerçekleştirildi. Yönlendiriliyor!</h5>
		</div>									
	<?php
	}
	?>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="resim-galerisi.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Resim Ekle <small>Resimleri görmek için galeriye gidin.</small>
				</div>
				<div class="card-block">
					<form method="POST" enctype="multipart/form-data">
						<img class="img-fluid" src="../images/galeri/<?php echo $GaleriIDGetir->galeri_resim?>" style="width: 120px; height:120px; max-width:120px; max-height:120px;" >
						<input class="form-control m-b" type="file" name="galeri_resim">

						<div class="form-group">
							<button type="submit" class="btn btn-primary mt-4" name="submit">Resim Güncelle</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include "../_inc/footer.php"; ?>