<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$added = false;
$Blog = new Blog();
if(isset($_POST['submit']))
{
	
	$BlogEkle = $Blog->blogEkle();
	$added = true;

	?>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var alertBox = document.getElementById('alertBox');
			alertBox.style.display = 'block';
	
			setTimeout(function() {
				window.location.href = 'blog.php';
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
		<h2>Blog İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="blog.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Blog Ekle
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
				</div>
				<div class="card-block">

					<form method="POST" enctype="multipart/form-data" class="form-horizontal">						
						<div class="form-group">
							<label>Blog Adı</label>
							<input type="text" name="blog_baslik" placeholder="Blog adı giriniz." class="form-control">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="blog_detay">İçerik giriniz</textarea>
						</div>
						<div class="form-group">
							<label>Blog Resim</label>
							<input type="file" name="blog_resim" class="form-control">		
						</div>
						<hr>
						<div class="">
							<b style="color: red;">*SEO Meta Ayarları</b>
							<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="blog_title" placeholder="Title belirtiniz" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Description</label>
							<input name="blog_description" type="text" placeholder="Description belirtiniz" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="blog_keywords" placeholder="Keywords belirtiniz" class="form-control form-control-rounded">
							<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
						</div>
						<button style="cursor: pointer;" type="submit" name="submit" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include "../_inc/footer.php"; ?>