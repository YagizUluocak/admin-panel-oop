<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$added = false;
$Bilgi = new Bilgi();
if(isset($_POST['submit']))
{
	$added = true;
	$BilgiEkle = $Bilgi->bilgiEkle();
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
					<div class="pull-right mt-10">
						<a href="bilgiler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Bilgi Ekle
				</div>
				<?php
					if($added)
					{
						?>
						<div class="alert alert-success text-center bg-success" role="alert" id="alertBox">
							<h5>Kayıt İşlemi Başarıyla Gerçekleştirildi. Yönlendiriliyor!</h5>
						</div>									
						<?php
					}
				?>
				<div class="card-block">

					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="bilgi_id">
						</div>						
						<div class="form-group">
							<label>Bilgi Başlık</label>
							<input type="text" name="bilgi_baslik" class="form-control">
						</div>

						<div class="form-group">
							<label>Bilgi İçerik</label>
							<textarea style="height: 80px;" name="bilgi_aciklama"></textarea>
						</div>
					<button style="cursor: pointer;" type="submit" name="submit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
				</form>
			</div>
		</div>
	</div>
</div>
