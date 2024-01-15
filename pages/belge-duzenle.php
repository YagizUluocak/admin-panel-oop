<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$updated = false;	
$Belge = new Belge();
$belgeIDGetir = $Belge->belgeIDGetir();

if(isset($_POST['submit']))
{
	$belgeGuncelle = $Belge->belgeGuncelle();
	if($belgeGuncelle)
	{
		$updated = true;
		?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href = 'belge-galerisi.php';
                    }, 1200); 
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
		<h2>Belge İşlemleri</h2>
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
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="belge-galerisi.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Belge Ekle <small>Belgeleri görmek için galeriye gidin.<a href="belge-galerisi.php" class="btn btn-warning">Galeri</a></small>
				</div>
				<div class="card-block">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="belge_baslik">Belge Başlık</label>
							<input type="text" class="form-control" id="belge_baslik" name="belge_baslik" value="<?php echo $belgeIDGetir->belge_baslik?>"/>
						</div>
						<div class="form-group">
							<label>Belge Durum</label>
							<select name="belge_durum" class="form-control m-b">
								<?php
								if($belgeIDGetir->belge_durum == 1)
								{
									?>
									<option value="1">Aktif</option>
									<?php
								}
								else
								{
									?>
                                    <option value="0">Pasif</option>
                                    <?php
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Belge</label>
							<input type="file" name="belge" class="form-control" value="<?php echo $belgeIDGetir->belge?>">
						</div>
						<div class="form-group">
							<label style="display: block;">Belge Resim</label>
							<img class="img-fluid  mb-2" style="max-width: 130px; max-height:130px;" src="../images/belge/<?php echo $belgeIDGetir->belge_resim?>" alt="">
							<input type="file" name="belge_resim" class="form-control" value="<?php echo $belgeIDGetir->belge_resim?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit" value="Sign up">Belge Ekle</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>

	<?php include "../_inc/footer.php"; ?>