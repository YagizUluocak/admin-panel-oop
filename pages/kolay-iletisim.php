<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Kolay İletişim İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Kolay İletişim Düzenle
				</div>

				<div class="card-block">
					<!-- AYAR  -->
					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								
								<input type="hidden" name="whats_id" value="0"  class="form-control">
								<!-- Grup -->
								<div class="col-md-6">
									<label>Whatsapp Tel:</label> <small>(Başında 0 'Sıfır' olmadan giriniz.)</small>
									<input type="text" name="whats_tel" class="form-control">
								</div>	
								<div class="col-md-6">
									<label>Modül Durum</label>
									<select name="whats_durum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>	
								<!-- Grup -->
								<!-- Grup -->
								<div style="margin-top: 20px;" class="col-md-6">
									<label>CANLI DESTEK:</label> <small>(Direk linki ekleyiniz! Kod değil)</small>
									<input type="text" name="whats_cdestek" class="form-control">
								</div>	
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Modül Durum</label>
									<select name="whats_cdestekdurum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>	
								<!-- Grup -->		
								<!-- Grup -->
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Tıkla Ara:</label> <small>(Başında 0 'Sıfır' olmadan giriniz.)</small>
									<input type="text" name="whats_tiklaara"  class="form-control">
								</div>	
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Modül Durum</label>
									<select name="whats_tiklaaradurum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>	
								<!-- Grup -->
								<!-- Grup -->
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Skype:</label> <small>(Kullanıcı adını girmeniz yeterli.)</small>
									<input type="text" name="whats_skype" class="form-control">
								</div>	
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Modül Durum</label>
									<select name="whats_skypedurum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>	
								<!-- Grup -->	
								<!-- Grup -->
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Mail:</label> <small>(Mail adresini girmeniz yeterli.)</small>
									<input type="text" name="whats_mail" class="form-control">
								</div>	
								<div style="margin-top: 20px;" class="col-md-6">
									<label>Modül Durum</label>
									<select name="whats_maildurum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>	
								<!-- Grup -->		
								<div style="margin-top: 20px;" class="col-md-12">
									<label>İletişim Formu:</label>
									<select name="whats_iletisimdurum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>
								<!-- Grup -->	

							</div>
						</div>
						<button style="cursor: pointer;" type="submit" name="whatsappduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
					<!--#AYAR  -->
				</div>
			</div>
		</div>
	</div>