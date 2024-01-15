<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Belge = new Belge();
if(isset($_POST['submit']))
{
	$BelgeEkle = $Belge->belgeEkle();
}

?>





<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Belge İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="belge-galerisi.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Resim Ekle <small>Resimleri görmek için galeriye gidin.<a href="belge-galerisi.php" class="btn btn-warning">Galeri</a></small>
				</div>
				<div class="card-block">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="belge_baslik">Belge Başlık</label>
							<input type="text" class="form-control" id="belge_baslik" name="belge_baslik"/>
						</div>
						<div class="form-group">
							<label>Belge Durum</label>
							<select name="belge_durum" class="form-control m-b">
								<option value="1">Aktif</option>
        						<option value="0">Pasif</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Belge Resim</label>
							<input type="file" name="belge_resim" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Belge</label>
							<input type="file" name="belge" class="form-control">
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