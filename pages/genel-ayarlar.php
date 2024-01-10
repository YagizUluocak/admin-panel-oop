<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="nav-item" role="presentation"><a class="nav-link  active" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Ayarlar</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#tema" aria-controls="tema" role="tab" data-toggle="tab">Tema</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#seo" aria-controls="seo" role="tab" data-toggle="tab">Seo</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#contact" aria-controls="contact" role="tab" data-toggle="tab">İletişim</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#sms" aria-controls="sms" role="tab" data-toggle="tab">SMS</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="#mail" aria-controls="mail" role="tab" data-toggle="tab">SMTP</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="settings">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								GENEL AYARLAR
							</div>
							<div class="card-block">
								<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="controller/function.php">
									<div class="form-group">
										<input type="hidden" name="eskiyol_logo">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_logo">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_fav">
									</div>
									<div class="form-group">
										<label>Yüklü Logo2</label> <small> Logo max yüksekliği 50 olmalıdır.</small>
										<p><img style="max-height: 100px;max-width: 100px;" src="#"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="ayar_logo2">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="form-group">
										<label>Yüklü Logo</label> <small> Logo max yüksekliği 50 olmalıdır.</small>
										<p><img style="max-height: 100px;max-width: 100px;" src="#"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="ayar_logo">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="form-group">
										<label>Yüklü Favicon</label> <small> Logo max 36x36 olmalıdır.</small>
										<p><img style="max-height: 36px;max-width: 36px;" src="#"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="ayar_fav">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="form-group">
										<label for="ayar_siteurl">Site Link <small>Belirtilen linke <b style="color: red;">http://</b> veya <b style="color: red;">https://</b> dahil ediniz.</small></label>
										<input type="text" class="form-control" id="ayar_siteurl" name="ayar_siteurl"/>
									</div>
									<div class="form-group">
										<label for="ayar_firmaadi">Firma Adı</label>
										<input type="text" class="form-control" id="ayar_firmaadi" name="ayar_firmaadi"/>
									</div>
									<div class="form-group">
										<label for="ayar_harita">Harita Kodu</label>
										<textarea style="height: 100px;" class="form-control" name="ayar_harita" rows="5" id="ayar_harita">
									
										</textarea>
									</div>
									<div class="form-group">
										<label for="ayar_kod">Canlı Destek Kodu</label>
										<textarea style="height: 100px;" class="form-control" name="ayar_kod" rows="5" id="ayar_harita">
									
										</textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="genelayar" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="tema">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								TEMA AYARLARI
							</div>
							<div class="card-block">

								<form id="signupForm" method="post" class="form-horizontal" action="controller/function.php">
									<div class="form-group">
										<label>Tema Rengi</label> <small>- Şimdiki Renk </small>
										<select name="ayar_renk" class="form-control m-b">
											<option style="color: #000;">Yeni Renk Seç</option>
											<option style="color: #fff;background: #15807d;" value="petrol.css">#15807d-petrol.css</option>
											<option style="color: #fff;background: #2791d8;" value="bluemax.css">#2791d8-bluemax.css</option>
											<option style="color: #fff;background: #15bba4;" value="default.css">#15bba4-default.css</option>
											<option style="color: #fff;background: #f0b016;" value="buttercup.css">#f0b016-buttercup.css</option>
											<option style="color: #fff;background: #f37348;" value="jaffa.css">#f37348-jaffa.css</option>
											<option style="color: #fff;background: #e94f6c;" value="mandy.css">#e94f6c-mandy.css</option>
											<option style="color: #fff;background: #485d67;" value="fiord.css">#485d67-fiord.css</option>
											<option style="color: #fff;background: #45c1ea;" value="picton.css">#45c1ea-picton.css</option>
											<option style="color: #fff;background: #7ebd4f;" value="mantis.css">#7ebd4f-mantis.css</option>
											<option style="color: #fff;background: #28cac8;" value="turquoise.css">#28cac8-turquoise.css</option>
											<option style="color: #fff;background: #f38106;" value="gold.css">#f38106-gold.css</option>
											<option style="color: #fff;background: #666699;" value="kimberly.css">#666699-kimberly.css</option>
											<option style="color: #fff;background: #e35611;" value="christine.css">#e35611-christine.css</option>
											<option style="color: #fff;background: #78a9bb;" value="neptune.css">#78a9bb-neptune.css</option>
											<option style="color: #fff;background: #f22a4f;" value="amaranth.css">#f22a4f-amaranth.css</option>
											<option style="color: #fff;background: #ddd222;" value="sunflower.css">#ddd222-sunflower.css</option>
											<option style="color: #fff;background: #6c8b7d;" value="viridian.css">#6c8b7d-viridian.css</option>
											<option style="color: #fff;background: #e44f2a;" value="cinnabar.css">#e44f2a-cinnabar.css</option>
											<option style="color: #fff;background: #1e969d;" value="cadillac.css">#1e969d-cadillac.css</option>
											<option style="color: #fff;background: #eed31f;" value="golden.css">#eed31f-golden.css</option>
											<option style="color: #fff;background: #bb1515;" value="thunderbird.css">#bb1515-thunderbird.css</option>
											<option style="color: #fff;background: #4bb440;" value="apple.css">#4bb440-apple.css</option>
											<option style="color: #fff;background: #8a4e34;" value="potters.css">#8a4e34-potters.css</option>
											<option style="color: #fff;background: #c085b7;" value="viola.css">#c085b7-viola.css</option>
											<option style="color: #fff;background: #364fad;" value="azure.css">#364fad-azure.css</option>
											<option style="color: #fff;background: #9a2b4b;" value="stiletto.css">#9a2b4b-stiletto.css</option>
											<option style="color: #fff;background: #1cc075;" value="meadow.css">#1cc075-meadow.css</option>
											<option style="color: #fff;background: #b4a041;" value="tussock.css">#b4a041-tussock.css</option>
											<option style="color: #fff;background: #d39c54;" value="serria.css">#d39c54-serria.css</option>
											<option style="color: #fff;background: #517cbd;" value="steel.css">#517cbd-steel.css</option>
											<option style="color: #fff;background: #b08179;" value="brandy.css">#b08179-brandy.css</option>
											<option style="color: #fff;background: #2b3d43;" value="spruce.css">#2b3d43-spruce.css</option>
											<option style="color: #fff;background: #532d28;" value="saddle.css">#532d28-saddle.css</option>
											<option style="color: #fff;background: #bbe63a;" value="mahogany.css">#bbe63a-mahogany.css</option>
											<option style="color: #fff;background: #ef7f87;" value="froly.css">#ef7f87-froly.css</option>
											<option style="color: #fff;background: #f3d614;" value="lemon.css">#f3d614-lemon.css</option>
											<option style="color: #fff;background: #4c1b3c;" value="berry.css">#4c1b3c-berry.css</option>
											<option style="color: #fff;background: #E40000;" value="red.css">#E40000-red.css</option>
											<option style="color: #fff;background: #e0272f;" value="crimson.css">#e0272f-crimson.css</option>
										</select>
										<div class="form-group">
											<label>Mobil Üst Renk</label>
											<input type="text" name="ayar_mobil" class="form-control form-control-rounded">
										</div>
										<div class="form-group">
											<label>Site Yüklenme İconu</label>
											<select name="ayar_loader" class="form-control m-b">
													<option value="1">Aktif</option>
													<option value="0">Pasif</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="renkayar" value="Sign up">Güncelle</button>
									</div>
								</form>
								<!-- TEMA ARKAPLAN -->
								<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="controller/function.php">
									<div class="form-group">
										<input type="hidden" name="eskiyol_paralax">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_yorum">
									</div>
									<div class="form-group">
										<input type="hidden" name="eskiyol_counter">
									</div>
									<div class="form-group">
										<label>Yüklü Biz Kimiz? Görseli</label> <small> Ölçü max 1920*1080 olmalıdır.</small>
										<p><img style="max-height: 100px;max-width: 100px;" src="#"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="ayar_resimcounter">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="form-group">
										<label>Footer Arkaplan</label> <small> Ölçü max 1920x961 olmalıdır.</small>
										<p><img style="max-height: 100px;max-width: 100px;" src="#"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="ayar_resimparalax">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="arkaplan" value="Sign up">Güncelle</button>
									</div>
								</form>
								<!-- TEMA ARKAPLAN -->
							</div>
							<!-- FORM SON -->
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="seo">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SEO AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="ayar_title" class="form-control form-control-rounded">
									</div>

									<div class="form-group">
										<label>Description</label>
										<input name="ayar_description" type="text" class="form-control form-control-rounded">
									</div>

									<div class="form-group">
										<label>Keywords</label>
										<input type="text" name="ayar_keywords" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="seoayar" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="contact">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								İLETİŞİM AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="POST" class="form-horizontal" action="controller/function.php">
									<div class="form-group">
										<label for="ayar_adres">Adres</label>
										<input type="text" class="form-control" id="ayar_adres" name="ayar_adres"/>
									</div>

									<div class="form-group">
										<label for="ayar_il">İl</label>
										<input type="text" class="form-control" id="ayar_il" name="ayar_il"/>
									</div>

									<div class="form-group">
										<label for="ayar_ilce">İlçe</label>
										<input type="text" class="form-control" id="ayar_ilce" name="ayar_ilce"/>
									</div>

									<div class="form-group">
										<label for="ayar_mail">Email</label>
										<input type="text" class="form-control" id="ayar_mail" name="ayar_mail"/>
									</div>

									<div class="form-group">
										<label for="ayar_fax">Fax</label>
										<input type="text" class="form-control" id="ayar_fax" name="ayar_fax"/>
									</div>
									<div class="form-group">
										<label for="ayar_tel">Telefon</label>
										<input type="text" class="form-control" id="ayar_tel" name="ayar_tel"/>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="iletisimayar" value="Sign up">Güncelle</button>
									</div>
								</form>
								
							</div>
							<!-- FORM SON -->

						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="sms">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SMS AYARLARI
								<p>SMS firması İleti merkezi'dir Link: <a target="_blank" href="https://www.iletimerkezi.com">www.iletimerkezi.com</a></p><br><img style="height: 34px;background: #d83d3d;border-radius: 4px;padding: 5px;margin-top: -40px;" src="assets/img/genel/ileti-merkezi-logo.png">
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal">
									<div class="form-group">
										<label>Kullanıcı Adı</label>
										<input type="text" name="sms_kullanici" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Şifre</label>
										<input name="sms_sifre" type="text" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Başlık</label>
										<input type="text" name="sms_baslik" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Durum</label>
										<select name="sms_durum" class="form-control m-b">
												<option value="1">Aktif</option>
												<option value="0">Pasif</option>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="sms" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="mail">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								SMTP AYARLARI
							</div>
							<div class="card-block">
								<form id="signupForm" method="post" class="form-horizontal" action="controller/function.php">
									<div class="form-group">
										<label>Mail Adresi</label>
										<input type="text" name="mail_user" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Şifre</label>
										<input type="text" name="mail_pass" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Sunucu</label>
										<input type="text" name="mail_host" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Mail Port</label>
										<input type="text" name="mail_port" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="mailayarlari" value="Sign up">Güncelle</button>
									</div>
								</form>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- 						Content End 																				-->
	<!-- ============================================================== -->