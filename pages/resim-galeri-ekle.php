<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$added = false;
$Galeri = new Galeri();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
	$GaleriEkle = $Galeri->galeriEkle();
	if($GaleriEkle)
	{
		$added = true;
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
	if($added)
	{
	?>
		<div class="alert alert-success text-center bg-success mt-3" role="alert" id="alertBox">
			<h5>Kayıt İşlemi Başarıyla Gerçekleştirildi. Yönlendiriliyor!</h5>
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
						<input class="form-control m-b" type="file" name="galeri_resim">

						<div class="form-group">
							<button type="submit" class="btn btn-primary mt-4" name="submit">Resim Ekle</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include "../_inc/footer.php"; ?>