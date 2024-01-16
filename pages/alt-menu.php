<?php 
require_once('../classes/db.class.php');
include('../classes/functions.class.php');

include('../_inc/header.php');
include('../_inc/topbar.php');
include('../_inc/sidebar.php');

$added = false;
$updated = false;
$deleted = false;

$Footer = new FooterMenu();
$FooterIDGetir = $Footer->footerMenuIDGetir();
$FooterGetir = $Footer->footerMenuGetir();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['ekle']))
	{
        $FooterEkle = $Footer->footerMenuEkle();
        if ($FooterEkle) {
            $added = true;
            ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
                    setTimeout(function() {
                        window.location.href = 'alt-menu.php';
                    }, 1000);
                });
            </script>
            <?php
        }
    } 
	elseif (isset($_POST['submit']))
	{
        $footerGuncelle = $Footer->footerMenuGuncelle();
        if ($footerGuncelle) {
            $updated = true;
            ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var alertBox = document.getElementById('alertBox');
                    alertBox.style.display = 'block';
                    setTimeout(function() {
                        window.location.href = 'alt-menu.php';
                    }, 900);
                });
            </script>
            <?php
        }
    }
}

if (isset($_GET['footer_menu_id']) && isset($_GET['islem']) && $_GET['islem'] == 'sil')
{
    $Footer = new FooterMenu();
    $FooterSil = $Footer->footerMenuSil();
    if ($FooterSil) {
        $deleted = true;
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var alertBox = document.getElementById('alertBox');
                alertBox.style.display = 'block';
                setTimeout(function() {
                    window.location.href = 'alt-menu.php';
                }, 900);
            });
        </script>
        <?php
    }
}

?>

<!-- Content Start -->
<section class="main-content container">
    <div class="page-header">
        <h2>Footer Menü İşlemleri</h2>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-heading card-default">
                    Alt Menü Düzenle
                </div>
                <?php if ($added || $deleted): ?>
                    <div class="alert <?php echo ($added) ? 'alert-success bg-success' : 'alert-danger bg-danger'; ?> text-center" role="alert" id="alertBox">
                        <h5><?php echo ($added) ? 'Kayıt İşlemi Başarıyla Gerçekleştirildi.' : 'Silme İşlemi Başarıyla Gerçekleştirildi.'; ?></h5>
                    </div>
                <?php endif; ?>

                <div class="card-block">
                    <h5 style="color: green;">Yeni Alt Menü Ekle</h5>
                    <form method="POST" class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Menü Adı</label>
                                    <input type="text" name="footer_menu_adi" placeholder="Menü adı giriniz." class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>Menü Link</label>
                                    <input type="text" name="footer_menu_link" placeholder="Menü linki giriniz." class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label>*İşlem</label>
                                    <div>
                                        <button style="cursor: pointer;" type="submit" name="ekle" class="btn btn-success btn-icon"><i class="fa fa-plus "></i>Ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br />
                    <hr>
                    <br />
                    <?php if (!$FooterGetir): ?>
                        <div class="alert alert-warning text-center bg-warning" role="alert" id="alertBox">
                            <h5>Kayıt Bulunamadı. Yeni Kayıt Ekleyiniz.</h5>
                        </div>
                    <?php else: ?>
                        <h5 style="color: green;">Var Olan Alt Menüler</h5>
                        <?php if ($updated): ?>
                            <div class="alert alert-success text-center bg-success" role="alert" id="alertBox">
                                <h5>Güncelleme İşlemi Başarıyla Gerçekleştirildi.</h5>
                            </div>
                        <?php endif; ?>

                        <?php foreach ($FooterGetir as $ftr): ?>
                            <form method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" name="footer_menu_id" class="form-control" value="<?php echo $ftr->footer_menu_id; ?>">
                                        <div class="col-md-4">
                                            <label>Menü Adı</label>
                                            <input type="text" name="footer_menu_adi" class="form-control" value="<?php echo $ftr->footer_menu_adi; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Menü Link</label>
                                            <input type="text" name="footer_menu_link" class="form-control" value="<?php echo $ftr->footer_menu_link; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">    
                                                <div class="col-6">
                                                    <button href="#" style="cursor: pointer; margin-top:30px;" type="submit" name="submit" class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i>Güncelle</button>
                                                </div>
                                                <div class="col-6">
                                                    <a href="alt-menu.php?footer_menu_id=<?php echo $ftr->footer_menu_id; ?>&islem=sil" style="cursor: pointer; margin-top:30px;" class="btn btn-danger btn-icon"><i class="fa fa-trash"></i>Sil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../_inc/footer.php');
