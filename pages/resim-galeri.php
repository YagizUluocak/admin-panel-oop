<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$deleted = false;
$Galeri = new Galeri();
$GaleriGetir = $Galeri->galeriGetir();

if(isset($_GET['galeri_id']) && isset($_GET['islem']) && $_GET['islem'] == 'sil')
{
	$GaleriSil = $Galeri->galeriSil();
    if($GaleriSil)
    {
        $deleted = true;
        ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
            
                    setTimeout(function() {
                        window.location.href ='resim-galeri.php';
                    }, 700); 
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
		<h2>Galeri İşlemleri</h2>
	</div>
	<?php
	if($deleted)
	{
	?>
		<div class="alert alert-danger text-center bg-danger mt-3" role="alert" id="alertBox">
			<h5>Silme İşlemi Başarıyla Gerçekleştirildi. Yönlendiriliyor!</h5>
		</div>									
	<?php
	}
	?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="resim-galeri-ekle.php" class="btn btn-success btn-icon"><i class="fa fa-download"></i>Resim Yükle</a>
					</div>
					Resim Galerisi
				</div>
				<?php
				if(!empty($GaleriGetir))
				{
					?>
						<div class="card-block">
							<div class="lightboxGallery">
								<?php
									foreach( $GaleriGetir as $glr)
									{
										?>
											<a href="#" data-toggle="modal" data-target="#textModal<?php echo $glr->galeri_id?>"><img style="max-width: 200px; max-height: 200px;" src="../images/galeri/<?php echo $glr->galeri_resim?>" alt=""></a>
											<div class="modal fade bs-example-modal-lg" id="textModal<?php echo $glr->galeri_id?>" tabindex="-1" role="dialog" aria-labelledby="textModal">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<p>
																<img style="max-width: 100%; max-height: 500px;" src="../images/galeri/<?php echo $glr->galeri_resim?>">
															</p>
															<br>
															<div class="text-center">
																<a href="resim-galeri-duzenle.php?galeri_id=<?php echo $glr->galeri_id?>" class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i> Resmi Değiştir</a>
																<a href="resim-galeri.php?galeri_id=<?php echo $glr->galeri_id?>&islem=sil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i> Resmi Sil</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php
									}
								?>
							</div>
						</div>
					<?php
				}
				else
				{
					?>
						<div class="alert alert-danger bg-warning text-center"><h6>Resim Galerisinde Herhangi Bir Kayıt Bulunamadı.</h6></div>
					<?php
				}
				?>

			</div>
		</div>
	</div> 
<!--modal text end-->
<?php include "../_inc/footer.php"; ?>
