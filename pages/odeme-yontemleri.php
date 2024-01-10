<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Ödeme İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Ödeme Düzenle
				</div>
				<div class="card-block">
					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<input type="hidden" name="odeme_id"class="form-control">
								<div class="col-md-3">
									<label>Ödeme Adı</label>
									<input type="text" name="odeme_adi"readonly class="form-control">
								</div>
								<div class="col-md-5">
									<label>Ödeme Notu</label>
									<input type="text" name="odeme_not"class="form-control">
								</div>
								<div class="col-md-2">
									<label>Ödeme Durum</label>
									<select name="odeme_durum" class="form-control m-b">
										<option value="1">Aktif</option>
										<option value="0">Pasif</option>
								</select>
							</div>
							<div class="col-md-2">
								<label>*Kaydet</label><div>
									<button style="cursor: pointer;" type="submit" name="odemeduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button></div>
								</div>
							</div>
						</div>
					</form>
					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<input type="hidden" name="odeme_id" class="form-control">
								<div class="col-md-3">
									<input type="text" name="odeme_adi" readonly class="form-control">
								</div>
								<div class="col-md-5">
									<input type="text" name="odeme_not" class="form-control">
								</div>
								<div class="col-md-2">
									<select name="odeme_durum" class="form-control m-b">
										<option value="1">Aktif</option>
										<option value="0">Pasif</option>
								</select>
							</div>
							<div class="col-md-2">
								<button style="cursor: pointer;" type="submit" name="odemeduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>