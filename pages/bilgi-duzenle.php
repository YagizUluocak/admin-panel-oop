<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;
$Bilgi = new Bilgi();
$BilgiIDGetir = $Bilgi->bilgiIDGetir();
if(isset($_POST['submit']))
{
	$updated = true;
	$BilgiGuncelle = $Bilgi->bilgiGuncelle();
	?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'bilgiler.php';
                    }, 1100); 
                });
            </script>
    <?php
}


?>	
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Bilgi İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">

					Bilgi Düzenle
					<div>
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

					</div>
				</div>
				<div class="card-block">

					<form method="POST" class="form-horizontal">						
						<div class="form-group">
							<label>Bilgi Başlık</label>
							<input type="text" name="bilgi_baslik" class="form-control" value="<?php echo $BilgiIDGetir->bilgi_baslik?>">
						</div>

						<div class="form-group">
							<label>Bilgi İçerik</label>
							<textarea style="height: 80px;" name="bilgi_aciklama"><?php echo $BilgiIDGetir->bilgi_aciklama?></textarea>
						</div>
					<button style="cursor: pointer;" type="submit" name="submit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "../_inc/footer.php"; ?>