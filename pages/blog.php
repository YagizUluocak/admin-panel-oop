<?php 
require_once ('../classes/db.class.php');
include "../classes/functions.class.php";

include "../_inc/header.php";
include "../_inc/topbar.php";
include "../_inc/sidebar.php";

$Blog = new Blog();
$blogGetir = $Blog->blogGetir();


?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Blog İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="blog-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Blog Ekle</a>
					</div>
					Blog Konuları
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Blog id</strong>
								</th>
								<th class="text-left">
									<strong>Blog Resim</strong>
								</th>
								<th class="text-left">
									<strong>Blog Başlık</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<?php
						if($blogGetir)
						{
						?>
						<tbody>
							<?php
							foreach($blogGetir as $blog)
							{
								?>
									<tr>
										<td><?php echo $blog->blog_id?></td>
										<td><img style="max-height: 40px;max-width: 40px;" src="../images/blog/<?php echo $blog->blog_resim?>"></td>
										<td><?php echo $blog->blog_baslik?></td>
										<td class="text-center">
											<a href="./blog-duzenle.php?blog_id=<?php echo $blog->blog_id?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
											<a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
