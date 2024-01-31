<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Proje = new Proje();
$ProjeGetir = $Proje->projeGetir();

if(isset($_GET['proje_id']) && isset($_GET['islem']) && $_GET['islem'] == 'Sil')
{
	$Proje = new Proje();
	$ProjeSil = $Proje->projeSil();
	if($ProjeSil)
	{
		echo "<script>window.location.href='projeler.php';</script>";
	}
}
?>

<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Proje İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="proje-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Proje Ekle</a>
					</div>
					Projeler
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							
							<tr>
								<th class="text-center" style="width: 60px;">
									<strong>#</strong>
								</th>
								<th class="text-center" style="width: 200px;">
									<strong>Proje Resim</strong>
								</th>
								<th class="text-center">
									<strong>Proje Adı</strong>
								</th>
								<th class="text-center">
									<strong>Proje İçerik</strong>
								</th>
								<th class="text-center" style="width: 100px;">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<?php
						if(!empty($ProjeGetir))
						{
						?>

						<tbody>
							<?php
							foreach($ProjeGetir as $proj)
							{
							?>
								<tr>
									<td class="text-center"><?php echo $proj->proje_id?></td>
									<td class="text-center"><img class="img-fluid" src="../images/proje/<?php echo $proj->proje_resim?>" alt="" style="max-width:200px; max-height:100px;"></td>
									<td class="text-center"><?php echo $proj->proje_adi?></td>
									<td class="text-center"><?php echo substr($proj->proje_icerik ,0 ,50) ?></td>
									<td class="text-center">
										<a href="proje-duzenle.php?proje_id=<?php echo $proj->proje_id?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="projeler.php?proje_id=<?php echo $proj->proje_id?>&islem=Sil" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>

							<?php
							}
							?>
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