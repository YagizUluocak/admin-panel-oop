<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Belge = new Belge();
$belge_durum_kontrol = false;
$belgeGetir = $Belge->belgeGetir($belge_durum_kontrol);

if(isset($_GET['belge_id']) && isset($_GET['islem']) && $_GET['islem'] == 'Sil')
{
	$Belge = new Belge();
	$BelgeSil = $Belge->belgeSil();
	if($BelgeSil)
	{
		echo "<script>window.location.href='belge-galerisi.php';</script>";
	}
}
if(isset($_GET['belge_id']) && isset($_GET['islem']) && $_GET['islem'] == 'Guncelle')
{
	$Belge = new Belge();
    $BelgeGuncelle = $Belge->belgeGuncelle();
    if($BelgeGuncelle)
    {
        echo "<script>window.location.href='belge-duzenle.php';</script>";
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

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="belge-ekle.php" class="btn btn-success btn-icon"><i class="fa fa-download"></i>Belge Yükle</a>
					</div>
					Belge Galerisi
				</div>
				<div class="card-block">
				<div class="lightboxGallery">
				<?php
				foreach($belgeGetir as $belge)
				{
					?>
						
							<!-- 
							#textModal echo $picprint['resim_id'];
							-->
								<a href="#" data-toggle="modal" data-target="#textModal<?php echo $belge->belge_id?>"><img style="max-width: 200px; max-height: 200px;" src="../images/belge/<?php echo $belge->belge_resim?>" alt=""></a>
								
								<div class="modal fade bs-example-modal-lg" id="textModal<?php echo $belge->belge_id?>" tabindex="-1" role="dialog" aria-labelledby="textModal">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<p>
													<h4><b>Belge Başlık: </b><?php echo $belge->belge_baslik?></h4>
													<h4 style="display: inline-block;"><b>Durum: </b></h4>
													<p style="display: inline-block; font-size:large;">
														<?php
														if($belge->belge_durum == 1){
															echo "Aktif";
														}else
														{						
															echo "Pasif";
														}
														?>
													</p>
												</p>
													<p>
														<img style="max-width: 100%; max-height: 420px; " src="../images/belge/<?php echo $belge->belge_resim?>">
													</p>
												<br>
												<div class="text-center">
													<a href="belge-duzenle.php?belge_id=<?php echo $belge->belge_id?>&islem=Guncelle"  class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i> Belge Güncelle</a>
													<a href="belge-galerisi.php?belge_id=<?php echo $belge->belge_id?>&islem=Sil"  class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i> Belge Sil</a>
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
				</div>
			</div>
		</div> 

		<!--modal text end-->
		<?php include "../_inc/footer.php"; ?>