<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Hizmet = new Hizmet();
$HizmetGetir = $Hizmet->hizmetGetir();

if(isset($_GET['hizmet_id']) && isset($_GET['islem']) && $_GET['islem'] == 'sil')
{
	$Hizmet = new Hizmet();
	$HizmetSil = $Hizmet->hizmetSil();
	if($HizmetSil)
	{
		echo "<script>window.location.href='hizmetler.php';</script>";
	}
}

?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Hizmet İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="hizmet-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Hizmet Ekle</a>
					</div>
					Hizmetler
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-center" style="width: 60px;">
									<strong>#</strong>
								</th>
								<th class="text-center" style="max-height: 100px; max-width: 140px; width:140px;">
									<strong>Hizmet Resim</strong>
								</th>
								<th class="text-center" style="width: 200px;">
									<strong>Hizmet Adı</strong>
								</th>
								<th class="text-center">
									<strong>Hizmet İçerik</strong>
								</th>
								<th class="text-center" style="width: 90px;">
									<strong>Durum</strong>
								</th>
								<th class="text-center" style="width: 120px;">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<?php
						if(!empty($HizmetGetir))
						{
							?>
								<tbody>
									<?php
									foreach($HizmetGetir as $hizm)
									{
									?>

										<tr class="text-center">
											<td><?php echo $hizm->hizmet_id?></td>
											<td class="text-center"><img  src="../images/hizmet/<?php echo $hizm->hizmet_resim?>" class="img-fluid" style="max-height: 130px;max-width: 130px;"></td>
											<td><?php echo $hizm->hizmet_baslik?></td>
											<td><?php echo substr($hizm->hizmet_icerik, 0, 90)?></td>
											<td><?php 
												if($hizm->hizmet_durum == 1)
												{
													echo "<p style='color:Green;'><b>Aktif</b></p>";
												}
												else
												{
													echo "<p style='color:Red;'><b>Pasif</b></p>";
												}
											?></td>
											<td class="text-center">
												<a href="hizmet-duzenle.php?hizmet_id=<?php echo $hizm->hizmet_id?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
												<a href="hizmetler.php?hizmet_id=<?php echo $hizm->hizmet_id?>&islem=sil" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
											</td>
										</tr>

									<?php
									}
									?>
								</tbody>
							<?php
						}
						else
						{
							?>
                                <tbody>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-warning bg-warning text-center mt-3">
                                                <strong>Kayıtlı Hizmet Bulunamadı!</strong>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
			<!-- İLETİŞİM MESAJLARI -->
	</div>
<?php include "../_inc/footer.php"; ?>