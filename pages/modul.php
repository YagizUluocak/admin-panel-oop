<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Anasayfa Modül İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Modül Düzenle
				</div>

				<div class="card-block">
					<!-- AYAR  -->
					<form method="POST" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bdil" value="Dil" readonly class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_dil" class="form-control m-b">
											<option value="1">Aktif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_burun" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_urun" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bhizmet" value="<?php echo htmlspecialchars($widgetprint['widget_bhizmet']); ?>" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_hizmet" class="form-control m-b">
										<?php if ($widgetprint['widget_hizmet']==1) { ?>
											<option value="1">Göster</option>
											<option value="0">Gizle</option>
											<?php
										} else {?>
											<option value="0">Gizle</option>
											<option value="1">Göster</option>
										<?php }?>
									</select>
								</div>							
							</div>
						</div>	
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bdiger" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_diger" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>	
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bproje" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_proje" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Counter" readonly class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_counter" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_byorum" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_yorum" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bblog" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_blog" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>									
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bwelcome"class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_welcome" class="form-control m-b">
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="widget_bara" class="form-control">
								</div>
								<div class="col-md-6">
									<select name="widget_ara" class="form-control m-b">
										<option value="1">Aktif</option>
										<option value="0">Pasif</option>
									</select>
								</div>							
							</div>
						</div>
						<button style="cursor: pointer;" type="submit" name="widgetduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
					<!--#AYAR  -->
				</div>
			</div>
		</div>
	</div>