<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Bilgi = new Bilgi();

$bilgiGetir = $Bilgi->bilgiGetir();

if(isset($_GET['bilgi_id']) && isset($_GET['islem']) && $_GET['islem'] == 'Sil')
{
	$Bilgi = new Bilgi();
	$bilgiSil = $Bilgi->bilgiSil();
	if($bilgiSil)
	{
		echo "<script>window.location.href='bilgiler.php';</script>";
	}
}
if(isset($_GET['bilgi_id']) && isset($_GET['islem']) && $_GET['islem'] == 'Guncelle')
{
	$Bilgi = new Bilgi();
    $BilgiGuncelle = $Bilgi->bilgiGuncelle();
    if($BelgeGuncelle)
    {
        echo "<script>window.location.href='bilgiler.php';</script>";
    }
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
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
					</div>
					Bilgiler		
				</div>
				<div class="row">
					<a href="bilgi-ekle.php" class="btn btn-success ml-4"><i class="fa fa-plus"></i> Yeni Ekle</a>
				</div>
				<div class="card-block text-center">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover text-center">
						<?php
						if ($bilgiGetir)
						{
						?>
						<thead>
							<tr>
								<th class="text-center" style="width: 100px;">
									<strong>#</strong>
								</th>
								<th class="text-center">
									<strong>Bilgi Başlık</strong>
								</th>
								<th class="text-center">
									<strong>Bilgi Açıklama</strong>
								</th>
								<th class="text-center" style="width: 150px;">
									<strong>Düzenle</strong>
								</th>
								<th class="text-center" style="width: 150px;">
									<strong>Sil</strong>
								</th>
							</tr>
						</thead>

						<tbody>
									<?php
									foreach($bilgiGetir as $bilgi)
									{
									?>
										<tr>
											<td><?php echo $bilgi->bilgi_id?></td>
											<td><?php echo $bilgi->bilgi_baslik?></td>
											<td><?php echo $bilgi->bilgi_aciklama?></td>
											<td class="text-center">
												<a href="bilgi-duzenle.php?bilgi_id=<?php echo $bilgi->bilgi_id?>&islem=Guncelle" title="Sil" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Düzenle</a>
											</td>
											<td class="text-center">
												<a href="bilgiler.php?bilgi_id=<?php echo $bilgi->bilgi_id?>&islem=Sil" title="sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Sil</a>
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
								<div class="alert alert-warning bg-warning text-center"> <strong style="color:black;">Herhangi Bir Kayıt Bulunamadı. Yeni Kayıt Ekleyiniz!</strong></div>
							<?php
						}
						?>
						</table>
					</div>
				</div>
			</div>
			<!-- İLETİŞİM MESAJLARI -->
		</div>
