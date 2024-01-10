		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Ürün İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="urunler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Ürün Ekle
				</div>
				<div class="card-block">

					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<label>Ürün Başlık</label>
							<input type="text" name="urun_baslik" placeholder="Ürün başlığı giriniz." class="form-control">
						</div>
						<div class="form-group">
							<label>Ürün Fiyat</label>
							<div class="input-group col-md-4">
								<span class="input-group-addon"><i class="fa fa-try"></i></span>
								<input type="text" name="urun_fiyat" placeholder="Yeni fiyatı giriniz." class="form-control">
							</div>     	
						</div>
						<div class="form-group">
							<label>Açıklama</label>
							<input type="text" name="urun_aciklama" value="Açıklama giriniz.">
						</div>
						<button style="cursor: pointer;" type="submit" name="urunekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
					</form>
				</div>
			</div>
		</div>
	</div>
