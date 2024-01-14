<?php

class Ayar extends Db
{
    private $ayar_id = 1;
    private $ayar_logo;
    private $ayar_logo_negative;
    private $ayar_favicon;
    private $ayar_siteurl;
    private $ayar_firma_adi;
    private $ayar_harita;

    private $ayar_adres;
    private $ayar_mail;
    private $ayar_fax;
    private $ayar_tel;

    private $ayar_title;
    private $ayar_description;
    private $ayar_keywords;

    private $ayar_renk;
    private $ayar_resim_paralax;
    private $ayar_loader;



    public function AyarGetir()
    {
        $query = "SELECT * FROM ayar WHERE ayar_id=:ayar_id ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute(['ayar_id' => $this->ayar_id]);
        return $stmt->fetch();
    }

    public function genelAyarGuncelle()
    {
        $this->ayar_siteurl = $_POST['ayar_siteurl'];
        $this->ayar_firma_adi = $_POST['ayar_firma_adi'];
        $this->ayar_harita = $_POST['ayar_harita'];
        
        //Ayar_logo Resim
        if(isset($_FILES['ayar_logo']) && $_FILES['ayar_logo']['error'] === UPLOAD_ERR_OK)
        {
            $this->ayar_logo = $_FILES['ayar_logo']['name'];
            $hedefKlasor = '../images/ayar/';
            $hedefDosya = $hedefKlasor . $this->ayar_logo;
            if(move_uploaded_file($_FILES['ayar_logo']['tmp_name'], $hedefDosya))
            {
                $this->ayar_logo = $this->ayar_logo;
            }
            else
            {
                echo "Logo Yükleme Başarısız.";
            }
        }

        // Ayar_logo_negative Resim
        if(isset($_FILES['ayar_logo_negative']) && $_FILES['ayar_logo_negative']['error'] === UPLOAD_ERR_OK)
        {
            $this->ayar_logo_negative = $_FILES['ayar_logo_negative']['name'];
            $hedefKlasor = '../images/ayar/';
            $hedefDosya = $hedefKlasor . $this->ayar_logo_negative;
            if(move_uploaded_file($_FILES['ayar_logo_negative']['tmp_name'], $hedefDosya))
            {
                $this->ayar_logo_negative = $this->ayar_logo_negative;
            }
            else
            {
                echo "Negatif Logo Yükleme Başarısız.";
            }
        }

        //Ayar_favicon Resim
        if(isset($_FILES['ayar_favicon']) && $_FILES['ayar_favicon']['error'] === UPLOAD_ERR_OK)
        {
            $this->ayar_favicon = $_FILES['ayar_favicon']['name'];
            $hedefKlasor = '../images/ayar/';
            $hedefDosya = $hedefKlasor . $this->ayar_favicon;

            if(move_uploaded_file($_FILES['ayar_favicon']['tmp_name'], $hedefDosya))
            {
                $this->ayar_favicon = $this->ayar_favicon;
            }
            else
            {
                echo "Favicon Yükleme Başarısız.";
            }

        }
    
        $query = "UPDATE ayar SET ayar_siteurl=:ayar_siteurl, ayar_firma_adi=:ayar_firma_adi, ayar_harita=:ayar_harita";

        if($this->ayar_logo)
        {
            $query .= ", ayar_logo=:ayar_logo";
        }
        if($this->ayar_logo_negative)
        {
            $query .= ", ayar_logo_negative=:ayar_logo_negative";
        }
        if($this->ayar_favicon)
        {
            $query .= ", ayar_favicon=:ayar_favicon";
        }
    
        $query .=" WHERE ayar_id = 1";
        $stmt = $this->connect()->prepare($query);

        $params = [
            'ayar_siteurl' => $this->ayar_siteurl,
            'ayar_firma_adi' => $this->ayar_firma_adi,
            'ayar_harita' => $this->ayar_harita
        ];


        if($this->ayar_logo)
        {
            $params['ayar_logo'] = $this->ayar_logo;
        }
        if($this->ayar_logo_negative)
        {
            $params['ayar_logo_negative'] = $this->ayar_logo_negative;
        }
        if($this->ayar_favicon)
        {
            $params['ayar_favicon'] = $this->ayar_favicon;
        }

        return $stmt->execute($params);


    }

    public function ıletisimAyarGuncelle()
    {
        $this->ayar_adres = $_POST['ayar_adres'];
        $this->ayar_mail = $_POST['ayar_mail'];
        $this->ayar_fax = $_POST['ayar_fax'];
        $this->ayar_tel = $_POST['ayar_tel'];

        $query = "UPDATE ayar SET ayar_adres=:adres, ayar_mail=:mail, ayar_fax=:fax, ayar_tel=:tel WHERE ayar_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            'id' => $this->ayar_id,
            'adres' => $this->ayar_adres,
            'mail' => $this->ayar_mail,
            'fax' => $this->ayar_fax,
            'tel' => $this->ayar_tel
        ]);
    }

    public function seoAyarGuncelle()
    {
        $this->ayar_title = $_POST['ayar_title'];
        $this->ayar_description = $_POST['ayar_description'];
        $this->ayar_keywords = $_POST['ayar_keywords'];

        $query = "UPDATE ayar SET ayar_title=:title, ayar_description=:descr, ayar_keywords=:keywords WHERE ayar_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            'id' => $this->ayar_id,
            'title' => $this->ayar_title,
            'descr' => $this->ayar_description,
            'keywords' => $this->ayar_keywords 
        ]);
    }

    public function temaAyarGuncelle()
    {
        $this->ayar_renk = $_POST['ayar_renk'];
        $this->ayar_loader = $_POST['ayar_loader'];

        if(isset($_FILES['ayar_resim_paralax']) && $_FILES['ayar_resim_paralax']['error'] === UPLOAD_ERR_OK)
        {
            $this->ayar_resim_paralax = $_FILES['ayar_resim_paralax']['name'];
            $hedefKlasor = '../images/ayar/';
            $hedefDosya = $hedefKlasor . $this->ayar_resim_paralax;

            if(move_uploaded_file($_FILES['ayar_resim_paralax']['tmp_name'], $hedefDosya))
            {
                $this->ayar_resim_paralax = $this->ayar_resim_paralax;
            }
            else
            {
                echo "Paralax Resim Yükleme Başarısız.";
            }
        }
        $query = "UPDATE ayar SET ayar_renk=:renk, ayar_loader=:loader";

        if($this->ayar_resim_paralax)
        {
            $query .= ", ayar_resim_paralax=:paralax";
        }
        $query .= " WHERE ayar_id=:id";
        $stmt = $this->connect()->prepare($query);

        $params = [
            'id' => $this->ayar_id,
            'renk' => $this->ayar_renk,
            'loader' => $this->ayar_loader
        ];

        if($this->ayar_resim_paralax)
        {
            $params['paralax'] = $this->ayar_resim_paralax;
        }

        return $stmt->execute($params);
    }

}

class Banka extends Db
{
    private $banka_id;
    private $banka_adi;
    private $hesap_adsoyad;
    private $hesap_sube;
    private $hesap_numarası;
    private $hesap_ıban;

    public function bankaGetir()
    {
        $query = "SELECT * FROM banka";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function bankaIDGetir()
    {
        $this->banka_id = $_GET['banka_id'];
        $query = "SELECT * FROM banka WHERE banka_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->banka_id]);
        return $stmt->fetch();
    }

    public function bankaEkle()
    {
        $this->banka_adi = $_POST['banka_adi'];
        $this->hesap_adsoyad = $_POST['hesap_adsoyad'];
        $this->hesap_sube = $_POST['hesap_sube'];
        $this->hesap_numarası = $_POST['hesap_numarası'];
        $this->hesap_ıban = $_POST['hesap_ıban'];

        $query = "INSERT INTO banka (banka_adi, hesap_adsoyad, hesap_suba, hesasp_numarası, hesap_ıban) VALUES (:banka_adi, :hesap_adsoyad, :hesap_suba, :hesap_numarası, :hesap_ıban)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':banka_adi' => $this->banka_adi,
            ':hesap_adsoyad' => $this->hesap_adsoyad,
            ':hesap_sube' => $this->hesap_sube,
            ':hesap_numarası' => $this->hesap_numarası,
            ':hesap_ıban' => $this->hesap_ıban
        ]);
    }

    public function bankaGuncelle()
    {
        $this->banka_id = $_GET['banka_id'];
        $this->banka_adi = $_POST['banka_adi'];
        $this->hesap_adsoyad = $_POST['hesap_adsoyad'];
        $this->hesap_sube = $_POST['hesap_sube'];
        $this->hesap_numarası = $_POST['hesap_numarası'];
        $this->hesap_ıban = $_POST['hesap_ıban'];

        $query = "UPDATE banka SET 
            banka_adi=:banka_adi,
            hesap_adsoyad=:hesap_adsoyad,
            hesap_sube=:hesap_sube,
            hesap_numarası=:hesap_numarası,
            hesap_ıban=:hesap_ıban 
            WHERE banka_id=:banka_id";

        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':banka_id' => $this->banka_id,
            ':banka_adi' => $this->banka_adi,
            ':hesap_adsoyad' => $this->hesap_adsoyad,
            ':hesap_sube' => $this->hesap_sube,
            ':hesap_numarası' => $this->hesap_numarası,
            ':hesap_ıban' => $this->hesap_ıban
        ]);
    }

    public function bankaSil()
    {
        $this->banka_id = $_GET['banka_id'];

        $query = "DELETE FROM banka WHERE banka_id=banka_id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':banka_id' => $this->banka_id]);
    }
}

class Belge extends Db
{
    private $belge_id;
    private $belge_baslik;
    private $belge_resim = null;
    private $belge = null;
    private $belge_durum;

    public function belgeGetir()
    {
        $query = "SELECT * FROM belgeler";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function belgeIDGetir()
    {
        $this->belge_id = $_GET['belge_id'];
        $query = "SELECT * FROM belgeler WHERE belge_id=:belge_id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':belge_id' => $this->belge_id]);
        return $stmt->fetch();
    }
    
    public function belgeGuncelle()
    {
        $this->belge_id = $_GET['belge_id'];
        $this->belge_baslik = $_POST['belge_baslik'];
        $this->belge_durum = $_POST['belge_durum'];

        //Belge Resmi
        if(isset($_FILES['belge_resim']) && $_FILES['belge_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->belge_resim = $_FILES['belge_resim']['name'];
            $hedefKlasor = '../images/belge/';
            $hedefDosya = $hedefKlasor . $this->belge_resim;

            if(move_uploaded_file($_FILES['belge_resim']['tmp_name'], $hedefDosya))
            {
                $this->belge_resim = $this->belge_resim;
            }
            else
            {
                echo "Belge Resmi Yükleme Başarısız.";
            }
        }
        //Belge Yükleme pdf vs
        if(isset($_FILES['belge']) && $_FILES['belge']['error'] === UPLOAD_ERR_OK)
        {
            $this->belge = $_FILES['belge']['name'];
            $hedefKlasor = '../images/belge/';
            $hedefDosya = $hedefKlasor . $this->belge;

            if(move_uploaded_file($_FILES['belge']['tmp_name'], $hedefDosya))
            {
                $this->belge = $this->belge;
            }
            else
            {
                echo "Belge Yükleme Başarısız.";
            }
        }

        $query = "UPDATE belgeler SET belge_baslik=:belge_baslik, belge_durum=:belge_durum";

        if($this->belge_resim)
        {
            $query .= ", belge_resim=:belge_resim";
        }
        if($this->belge)
        {
            $query .= ", belge=:belge";
        }

        $query .= " WHERE belge_id=:belge_id";

        $stmt = $this->connect()->prepare($query);

        $params = [
            ':belge_id' => $this->belge_id,
            ':belge_baslik' => $this->belge_baslik,
            ':belge_durum' => $this->belge_durum
        ];

        if($this->belge_resim)
        {
            $params['belge_resim'] = $this->belge_resim;
        }
        if($this->belge)
        {
            $params['belge'] = $this->belge;
        }
        return $stmt->execute($params);
    }

    public function belgeEkle()
    {
        $this->belge_baslik = $_POST['belge_baslik'];
        $this->belge_durum = $_POST['belge_durum'];

        //Belge Resim
        if(isset($_FILES['belge_resim']) && $_FILES['belge_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->belge_resim = $_FILES['belge_resim']['name'];
            $hedefKlasor = "../images/belge/";
            $hedefDosya = $hedefKlasor . $this->belge_resim;
            if(move_uploaded_file($_FILES['belge_resim']['tmp_name'], $hedefDosya))
            {
                $this->belge_resim = $this->belge_resim;
            }
            else
            {
                echo "Belge Resmi yüklenirken Hata Oluştu.";
            }
        }

        //Belge
        if(isset($_FILES['belge']) && $_FILES['belge']['error'] === UPLOAD_ERR_OK)
        {
            $this->belge = $_FILES['belge']['name'];
            $hedefKlasor = "../images/belge/";
            $hedefDosya = $hedefKlasor . $this->belge_resim;
            if(move_uploaded_file($_FILES['belge']['tmp_name'], $hedefDosya))
            {
                $this->belge = $this->belge;
            }
            else
            {
                echo "Belge yüklenirken Hata Oluştu.";
            }
        }

        $query = "INSERT INTO belgeler(belge_baslik, belge_durum, belge_resim, belge) VALUES (:belge_baslik, :belge_durum, :belge_resim, :belge)";

        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':belge_baslik' => $this->belge_baslik,
            ':belge_durum' => $this->belge_durum,
            ':belge_resim' => $this->belge_resim,
            ':belge' => $this->belge
        ]);
    }

    public function belgeSil()
    {
        $this->belge_id = $_GET['belge_id'];

        $query = "DELETE FROM belgeler WHERE belge_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->belge_id]);
    }
}

class Bilgi extends Db
{
    private $bilgi_id;
    private $bilgi_baslik;
    private $bilgi_aciklama;

    public function bilgiGetir()
    {
        $query = "SELECT * FROM bilgiler";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function bilgiIDGetir()
    {
        $this->bilgi_id = $_GET['bilgi_id'];
        $query = "SELECT * FROM bilgiler WHERE bilgi_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->bilgi_id]);
        return $stmt->fetch();
    }

    public function bilgiEkle()
    {
        $this->bilgi_baslik = $_POST['bilgi_baslik'];
        $this->bilgi_aciklama = $_POST['bilgi_aciklama'];

        $query = "INSERT INTO bilgiler (bilgi_baslik, bilgi_aciklama) VALUES (:bilgi_baslik, :bilgi_aciklama)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':bilgi_baslik' => $this->bilgi_baslik,
            ':bilgi_aciklama' => $this->bilgi_aciklama
        ]);
    }

    public function bilgiGuncelle()
    {
        $this->bilgi_id = $_GET['bilgi_id'];
        $this->bilgi_baslik = $_POST['bilgi_baslik'];
        $this->bilgi_aciklama = $_POST['bilgi_aciklama'];

        $query = "UPDATE bilgiler SET bilgi_baslik=:baslik, bilgi_aciklama=:aciklama WHERE bilgi_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            'id' => $this->bilgi_id,
            'baslik' => $this->bilgi_baslik,
            'aciklama' => $this->bilgi_aciklama
        ]);
    }

    public function bilgiSil()
    {
        $this->bilgi_id = $_GET['bilgi_id'];

        $query = "DELETE FROM bilgiler WHERE bilgi_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->bilgi_id]);
    }
}

class Blog extends Db
{
    private $blog_id;
    private $blog_baslik;
    private $blog_detay;
    private $blog_title;
    private $blog_description;
    private $blog_keywords;
    private $blog_tarih;
    private $blog_resim;

    public function blogGetir()
    {
        $query = "SELECT * FROM bloglar";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function blogIDGetir()
    {
        $this->blog_id = $_GET['blog_id'];
        $query = "SELECT * FROM bloglar WHERE blog_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->blog_id]);
        return $stmt->fetch();
    }

    public function blogEkle()
    {
        $this->blog_baslik = $_POST['blog_baslik'];
        $this->blog_detay = $_POST['blog_detay'];
        $this->blog_title = $_POST['blog_title'];
        $this->blog_description = $_POST['blog_desrcipiton'];
        $this->blog_keywords = $_POST['blog_keywords'];
        $this->blog_resim = $_FILES['blog_resim']['name'];

        $hedefKlasor = "../images/blog/";
        $hedefDosya = $hedefKlasor . $this->blog_resim;
        if(move_uploaded_file(isset($_FILES['blog_resim']['tmp_name']), $hedefDosya))
        {
            $this->blog_resim = $this->blog_resim;
        }
        else
        {
            echo "Resim yükleme Başarısız.";
        }

        $query = "INSERT INTO bloglar (blog_baslik, blog_detay, blog_title, blog_descripiton, blog_keywords, blog_resim) VALUES (:blog_baslik, :blog_detay, :blog_title, :blog_descripiton, :blog_keywords, :blog_resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':blog_baslik' => $this->blog_baslik,
            ':blog_detay' => $this->blog_detay,
            ':blog_title' => $this->blog_title,
            ':blog_description' => $this->blog_description,
            ':blog_keywords' => $this->blog_keywords,
            ':blog_resim' => $this->blog_resim
        ]);
    }

    public function blogGuncelle()
    {
        $this->blog_id = $_GET['blog_id'];
        $this->blog_baslik = $_POST['blog_baslik'];
        $this->blog_detay = $_POST['blog_detay'];
        $this->blog_title = $_POST['blog_title'];
        $this->blog_description = $_POST['blog_desrcipiton'];
        $this->blog_keywords = $_POST['blog_keywords'];

        if(isset($_FILES['blog_resim']) && $_FILES['blog_Resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->blog_resim = $_FILES['blog_resim']['name'];
            $hedefKlasor = "../images/blog/";
            $hedefDosya = $hedefKlasor . $this->blog_resim;

            if(move_uploaded_file(isset($_FILES['blog_resim']['tmp_name']), $hedefDosya))
            {
                $this->blog_resim = $this->blog_resim;
            }
            else
            {
                echo "Resim Yüklenirken Bir Hata Oluştu.";
            }
        }

        $query = "UPDATE bloglar SET blog_baslik=:baslik, blog_detay=:detay, blog_title=:title, blog_description=:descr, blog_keywords=:keywords";

        if($this->blog_resim)
        {
            $query .= "blog_resim=:resim";
        }
        
        $query .= " WHERE blog_id=:id";
        $stmt = $this->connect()->prepare($query);

        $params = [
            ':id' => $this->blog_id,
            ':baslik' => $this->blog_baslik,
            ':detay' => $this->blog_detay,
            ':title' => $this->blog_title,
            ':descr' => $this->blog_description,
            ':keywords' => $this->blog_keywords
        ];
        if($this->blog_resim)
        {
            $params['resim'] = $this->blog_resim;
        }

        return $stmt->execute($params);
    }

    public function blogSil()
    {
        $this->blog_id = $_GET['blog_id'];

        $query = "DELETE FROM bloglar WHERE blog_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->blog_id]);
    }
}

class FooterMenu extends Db
{
    private $footer_menu_id;
    private $footer_menu_adi;
    private $footer_menu_link;

    public function footerMenuGetir()
    {
        $query = "SELECT * FROM footer-menu";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function footerMenuIDGetir()
    {
        $this->footer_menu_id = $_GET['footer_menu_id'];

        $query = "SELECT * FROM footer-menu WHERE footer_menu_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->footer_menu_id]);
        return $stmt->fetch();
    }

    public function footerMenuEkle()
    {
        $this->footer_menu_adi = $_POST['footer_menu_adi'];
        $this->footer_menu_link = $_POST['footer_menu_link'];

        $query = "INSERT INTO footer-menu (footer_menu_adi, footer_menu_link) VALUES (:adi, :link)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':adi' => $this->footer_menu_adi,
            ':link' => $this->footer_menu_link
        ]);
    }

    public function footerMenuGuncelle()
    {
        $this->footer_menu_id = $_GET['footer_menu_id'];
        $this->footer_menu_adi = $_POST['footer_menu_adi'];
        $this->footer_menu_link = $_POST['footer_menu_link'];

        $query = "UPDATE footer-menu SET footer_menu_adi=:adi, footer_menu_link=:link WHERE footer_menu_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->footer_menu_id,
            ':adi' => $this->footer_menu_adi,
            ':link' => $this->footer_menu_link
        ]);
    }

    public function footerMenuSil()
    {
        $this->footer_menu_id = $_GET['footer_menu_id'];

        $query = "DELETE FROM footer-menu WHERE footer_menu_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->footer_menu_id]);
    }
}

class Galeri extends Db
{
    private $galeri_id;
    private $galeri_resim;

    public function galeriGetir()
    {
        $query = "SELECT * FROM galeri";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function galeriIDGetir()
    {
        $this->galeri_id = $_GET['galeri_id'];
        $query = "SELECT * FROM galeri WHERE galeri_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function galeriEkle()
    {
        $this->galeri_resim = $_FILES['galeri_resim']['name'];
        
        $hedefKlasor = "../images/galeri/";
        $hedefDosya = $hedefKlasor . $this->galeri_resim;

        if(move_uploaded_file(isset($_FILES['galeri_resim']['tmp_name']), $hedefDosya))
        {
            $this->galeri_resim = $this->galeri_resim;
        }
        else
        {
            echo "resim Yükleme İşlemi Başarısız.";
        }

        $query = "INSERT INTO galeri galeri_resim=:resim";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':resim' => $this->galeri_resim]);
    }

    public function galeriGuncelle()
    {
        $this->galeri_id = $_GET['galeri_id'];
        $this->galeri_resim = $_FILES['galeri_resim']['name'];
        $hedefKlasor = "../images/galeri/";
        $hedefDosya = $hedefKlasor . $this->galeri_resim;

        if(move_uploaded_file(isset($_FILES['galeri_resim']['tmp_name']), $hedefDosya))
        {
            $this->galeri_resim = $this->galeri_resim;
        }
        else
        {
            echo "Resim Güncelleme İşlemi Başarısız.";
        }

        $query = "UPDATE galeri SET galeri_resim=:resim WHERE galeri_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->galeri_id,
            ':resim' => $this->galeri_resim
        ]);
    }

    public function galeriSil()
    {
        $this->galeri_id = $_GET['galeri_id'];

        $query = "DELETE FROM galeri WHERE galeri_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->galeri_id]);
    }
}

class Hizmet extends Db
{
    private $hizmet_id;
    private $hizmet_baslik;
    private $hizmet_icerik;
    private $hizmet_resim;
    private $hizmet_icon;
    private $hizmet_title;
    private $hizmet_description;
    private $hizmet_keywords;
    private $hizmet_durum;

    public function hizmetGetir()
    {
        $query = "SELECT * FROM hizmetler";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function hizmetIDGetir()
    {
        $this->hizmet_id = $_GET['hizmet_id'];

        $query = "SELECT * FROM hizmetler WHERE hizmet_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->hizmet_id]);
        return $stmt->fetch();
    }
    public function hizmetEkle()
    {
        $this->hizmet_baslik = $_POST['hizmet_baslik'];
        $this->hizmet_icerik = $_POST['hizmeet_icerik'];
        $this->hizmet_icon = $_POST['hizmet_icon'];
        $this->hizmet_title = $_POST['hizmet_title'];
        $this->hizmet_description = $_POST['hizmet_description'];
        $this->hizmet_keywords = $_POST['hizmet_keywords'];
        $this->hizmet_durum = $_POST['hizmet_durum'];

        $this->hizmet_resim = $_FILES['hizmet_resim']['name'];
        $hedefKlasor ="../images/hizmet/";
        $hedefDosya = $hedefKlasor . $this->hizmet_resim;

        if(move_uploaded_file(isset($_FILES['hizmet_resim']['tmp_name']), $hedefDosya))
        {
            $this->hizmet_resim = $this->hizmet_resim;
        }
        else
        {
            echo "Hizmet Resmi Yüklenirken Bir Hata Oluştu.";
        }

        $query = "INSERT INTO hizmetler (hizmet_baslik, hizmet_icerik, hizmet_icon, hizmet_title, hizmet_description, hizmet_keywords, hizmet_durum, hizmet_resim) VALUES (:hizmet_baslik, :hizmet_icerik, :hizmet_icon, :hizmet_title, :hizmet_description, :hizmet_keywords, :hizmet_durum, :hizmet_resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':hizmet_baslik' => $this->hizmet_baslik,
            ':hizmet_icerik' => $this->hizmet_icerik,
            ':hizmet_icon' => $this->hizmet_icon,
            ':hizmet_title' => $this->hizmet_title,
            ':hizmet_desctiption' => $this->hizmet_description,
            ':hizmet_keyowrds' => $this->hizmet_keywords,
            ':hizmet_durum' => $this->hizmet_durum,
            'hizmet_resim' => $this->hizmet_resim
        ]);
    }
    public function hizmetGuncelle()
    {
        $this->hizmet_id = $_GET['hizmet_id'];
        $this->hizmet_baslik = $_POST['hizmet_baslik'];
        $this->hizmet_icerik = $_POST['hizmeet_icerik'];
        $this->hizmet_icon = $_POST['hizmet_icon'];
        $this->hizmet_title = $_POST['hizmet_title'];
        $this->hizmet_description = $_POST['hizmet_description'];
        $this->hizmet_keywords = $_POST['hizmet_keywords'];
        $this->hizmet_durum = $_POST['hizmet_durum'];

        $this->hizmet_resim = $_FILES['hizmet_resim']['name'];
        $hedefKlasor ="../images/hizmet/";
        $hedefDosya = $hedefKlasor . $this->hizmet_resim;
        if(move_uploaded_file(isset($_FILES['hizmet_resim']['tmp_name']), $hedefDosya))
        {
            $this->hizmet_resim = $this->hizmet_resim;
        }
        else
        {
            echo "Hizmet Resmi Güncellenirken Bir Hata Oluştu.";
        }
        $query = "UPDATE hizmetler SET hizmet_baslik=:baslik, hizmet_icerik=:icerik, hizmet_icon=:icon, hizmet_title=:title, hizmet_description=:descr, hizmet_keywords=:keywords, hizmet_durum=:durum";
        if($this->hizmet_resim)
        {
            $query .= ", hizmet_resim=:resim";
        }
        $query .= " WHERE hizmet_id=:id";
        $stmt = $this->connect()->prepare($query);

        $params = [
            ':id' => $this->hizmet_id,
            ':baslik' => $this->hizmet_baslik,
            ':icerik' => $this->hizmet_icerik,
            ':icon' => $this->hizmet_icon,
            ':title' => $this->hizmet_title,
            ':descr' => $this->hizmet_description,
            ':keywords' => $this->hizmet_keywords,
            ':durum' => $this->hizmet_durum
        ];
        if($this->hizmet_resim)
        {
            $params['resim'] = $this->hizmet_resim;
        }
        return $stmt->execute($params);
    }
    public function hizmetSil()
    {
        $this->hizmet_id = $_GET['hizmet_id'];

        $query = "DELETE FROM hizmetler WHERE hizmet_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->hizmet_id]);
    }
}
class Icon extends Db
{
    private $icon_id;
    private $icon_adi;
    
    public function iconGetir()
    {
        $query = "SELECT * FROM icons";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function iconIDGetir()
    {
        $this->icon_id = $_GET['icon_id'];
        $query = "SELECT * FROM icons WHERE icon_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->icon_id]);
        return $stmt->fetch();
    }
    public function iconEkle()
    {
        $this->icon_adi = $_POST['icon_adi'];

        $query = "INSERT INTO icons(icon_adi) VALUES (:icon_adi)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute(['icon_adi' => $this->icon_adi]);
    }
    public function iconGuncelle()
    {
        $this->icon_id = $_GET['icon_id'];
        $this->icon_adi = $_POST['icon_adi'];

        $query = "UPDATE icons SET icon_adi=:icon_adi WHERE icon_id=:icon_id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':icon_id' => $this->icon_id,
            ':icon_adi' => $this->icon_adi
        ]);
    }
    public function iconSil()
    {
        $this->icon_id = $_GET['icon_id'];

        $query = "DELETE FROM icons WHERE icon_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->icon_id]);
    }
}

class Kategori extends Db
{
    private $kategori_id;
    private $kategori_adi;

    public function kategoriGetir()
    {
        $query = "SELECT * FROM kategoriler";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function kategoriIDGetir()
    {
        $this->kategori_id = $_GET['kategori_id'];

        $query = "SELECT * FROM kategoriler WHERE kategori_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function kategoriEkle()
    {
        $this->kategori_adi = $_POST['kategori_adi'];

        $query = "INSERT INTO kategoriler (kategori_adi) VALUES (:kategori_adi)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':kategori_adi' => $this->kategori_adi]);
    }
    public function kategoriGuncelle()
    {
        $this->kategori_id = $_GET['kategori_id'];
        $this->kategori_adi = $_POST['kategori_adi'];

        $query = "UPDATE kategoriler SET kategori_adi=:adi WHERE kategori_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->kategori_id,
            ':adi' => $this->kategori_adi
        ]);
    }
    public function kategoriSil()
    {
        $this->kategori_id = $_GET['kategori_id'];

        $query = "DELETE FROM kategoriler WHERE kategori_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->kategori_id]);
    }
}

class KolayErisim extends Db
{
    private $kolay_erisim_id;
    private $kolay_erisim_adi;
    private $kolay_erisim_link;
    private $durum;
    private $icon_id;

    public function erisimGetir()
    {
        $query = "SELECT * FROM kolay-erisim INNER JOIN icons ON kolay-erisim.icon_id = icons.icon_id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function erisimIDGetir()
    {
        $this->kolay_erisim_id = $_GET['kolay_erisim_id'];

        $query = "SELECT * FROM kolay-erisim 
            INNER JOIN icons ON 
            kolay-erisim.icon_id = icons.icon_id 
            WHERE kolay-erisim.kolay_erisim_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->kolay_erisim_id]);
        return $stmt->fetch();
    }
    public function erisimEkle()
    {
        $this->kolay_erisim_adi = $_POST['erisim_adi'];
        $this->kolay_erisim_link = $_POST['erisim_link'];
        $this->durum = $_POST['durum'];
        $this->icon_id = $_POST['icon_id'];

        $query = "INSERT INTO kolay-erisim (kolay_erisim_adi, kolay_erisim_link, durum, icon_id) VALUES (:erisim_adi, :ersim_link, :durum, :icon_id)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':erisim_adi' => $this->kolay_erisim_adi,
            ':erisim_link' => $this->kolay_erisim_link,
            ':durum' => $this->durum,
            ':icon_id' => $this->icon_id
        ]);
    }
    public function erisimGuncelle()
    {
        $this->kolay_erisim_id = $_GET['kolay_erisim_id'];
        $this->kolay_erisim_adi = $_POST['erisim_adi'];
        $this->kolay_erisim_link = $_POST['erisim_link'];
        $this->durum = $_POST['durum'];
        $this->icon_id = $_POST['icon_id'];

        $query = "UPDATE kolay-erisim SET kolay_erisim_adi=:erisim_adi, kolay_erisim_link=:erisim_link, durum=:durum, icon_id=:icon_id WHERE kolay_erisim_id=:erisim_id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':erisim_id' => $this->kolay_erisim_id,
            ':erisim_adi' => $this->kolay_erisim_adi,
            ':erisim_link' => $this->kolay_erisim_link,
            ':durum' => $this->durum,
            ':icon_id' => $this->icon_id
        ]);
    }
    public function erisimSil()
    {
        $this->kolay_erisim_id = $_GET['kolay_erisim_id'];
        $query = "DELETE FROM kolay-erisim WHERE kolay_erisim_id=:erisim_id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':erisim_id' => $this->kolay_erisim_id]);
    }

}

class MailAyar extends Db
{
    private $mail_id;
    private $mail_host;
    private $mail_port;
    private $mail_password;

    public function mailAyarIDGetir()
    {
        $this->mail_id = $_GET['mail_id'];
        $query = "SELECT * FROM mail-ayar WHERE mail_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->mail_id]);
    }
    public function mailAyarGuncelle()
    {
        $this->mail_id = $_GET['mail_id'];
        $this->mail_host = $_POST['mail_host'];
        $this->mail_port = $_POST['mail_port'];
        $this->mail_password = $_POST['mail_password'];

        $query = "UPDATE FROM mail-ayar SET mail_host=:host, mail_port=:port, mail_password=:pass WHERE mail_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->mail_id,
            ':host' => $this->mail_host,
            ':port' => $this->mail_port,
            ':pass' => $this->mail_password
        ]);
    }
}

class Mesaj extends Db
{
    private $mesaj_id;
    private $mesaj_adsoyad;
    private $mesaj_tel;
    private $mesaj_mail;
    private $mesaj_icerik;
    
    public function mesajGetir()
    {
        $query = "SELECT * FROM mesajlar";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function mesajIdGetir()
    {
        $this->mesaj_id = $_GET['mesaj_id'];
        $query = "SELECT * FROM mesajlar WHERE mesaj_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->mesaj_id]);
        return $stmt->fetch();
    }
}

class Meta extends Db
{
    private $meta_id;	
    private $meta_sayfa_ad;
    private $meta_title;
    private $meta_description;
    private $meta_keywords;

    public function metaGetir()
    {
        $query = "SELECT * FROM meta-tags";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function metaIDGetir()
    {
        $this->meta_id = $_GET['meta_id'];
        $query = "SELECT * FROM meta-tags WHERE meta_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->meta_id]);
        return $stmt->fetch();
    }
    public function metaEkle()
    {
        $this->meta_sayfa_ad = $_POST['meta_sayfa_ad'];
        $this->meta_title = $_POST['meta_title'];
        $this->meta_description = $_POST['meta_description'];
        $this->meta_keywords = $_POST['meta_keywords'];

        $query = "INSERT INTO meta-tags (meta_sayfa_ad, meta_title, meta_description, meta_keywords) VALUES (:ad, :title, :description, :keywords)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':ad' => $this->meta_sayfa_ad,
            ':title' => $this->meta_title,
            ':description' => $this->meta_description,
            ':keywords' => $this->meta_keywords
        ]);
    }
    public function metaGuncelle()
    {
        $this->meta_id = $_GET['meta_id'];
        $this->meta_sayfa_ad = $_POST['meta_sayfa_ad'];
        $this->meta_title = $_POST['meta_title'];
        $this->meta_description = $_POST['meta_description'];
        $this->meta_keywords = $_POST['meta_keywords'];

        $query = "UPDATE meta-tags SET meta_sayfa_ad=:ad, meta_title=:title, meta_description=:description, meta_keywords=:keywords WHERE meta_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->meta_id,
            ':ad' => $this->meta_sayfa_ad,
            ':title' => $this->meta_title,
            ':description' => $this->meta_description,
            ':keywords' => $this->meta_keywords
        ]);
    }
    public function metaSil()
    {
        $this->meta_id = $_GET['meta_id'];
        $query = "DELETE FROM meta-tags WHERE meta_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->meta_id]);
    }
}

class Proje extends Db
{
    private $proje_id;
    private $proje_adi;
    private $proje_icerik;
    private $proje_title;
    private $proje_description;
    private $proje_keywords;
    private $proje_durum;
    private $proje_resim;

    public function projeGetir()
    {
        $query = "SELECT * FROM projeler";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function projeIDGetir()
    {
        $this->proje_id = $_GET['proje_id'];
        $query = "SELECT * FROM projeler WHERE proje_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->proje_id]);
        return $stmt->fetch();
    }
    public function projeEkle()
    {
        $this->proje_adi = $_POST['proje_adi'];
        $this->proje_icerik = $_POST['proje_icerik'];
        $this->proje_title = $_POST['proje_title'];
        $this->proje_description = $_POST['proje_description'];
        $this->proje_keywords = $_POST['proje_keywords'];
        $this->proje_durum = $_POST['proje_durum'];

        $this->proje_resim = $_FILES['proje_resim']['name'];
        $hedefKlasor = "../images/proje/";
        $hedefDosya = $hedefKlasor . $this->proje_resim;

        $query = "INSERT INTO projeler (proje_adi, proje_icerik, proje_title, proje_description, proje_keywords, proje_durum, proje_resim) VALUES (:adi, :icerik, :title, :descr, :keywords, :durum, :resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':adi' => $this->proje_adi, 
            ':icerik' => $this->proje_adi, 
            ':title' => $this->proje_adi, 
            ':descr' => $this->proje_adi, 
            ':keywords' => $this->proje_adi, 
            ':durum' => $this->proje_adi, 
            ':resim' => $this->proje_adi
        ]);
    }
    public function projeGuncelle()
    {
        $this->proje_id = $_GET['proje_id'];
        $this->proje_adi = $_POST['proje_adi'];
        $this->proje_icerik = $_POST['proje_icerik'];
        $this->proje_title = $_POST['proje_title'];
        $this->proje_description = $_POST['proje_description'];
        $this->proje_keywords = $_POST['proje_keywords'];
        $this->proje_durum = $_POST['proje_durum'];

        $this->proje_resim = $_FILES['proje_resim']['name'];
        $hedefKlasor = "../images/proje/";
        $hedefDosya = $hedefKlasor . $this->proje_resim;

        if(move_uploaded_file(isset($_FILES['proje_resim']['tmp_name']), $hedefDosya))
        {
            $this->proje_resim = $this->proje_resim;
        }
        else
        {
            echo "Proje Resmi Güncellenirken Bir Hata Oluştu.";
        }

        $query = "UPDATE projeler SET proje_adi=:adi, proje_icerik=:icerik, proje_title=:title, proje_description=:descr, proje_keywords=:keywords, proje_durum=:durum";
    
        if($this->proje_resim)
        {
            $query .="proje_resim=:resim";
        }
        $query = " WHERE proje_id=:id";

        $stmt = $this->connect()->prepare($query);
        $params = [
            ':id' => $this->proje_id,
            ':adi' => $this->proje_adi,
            ':icerik' => $this->proje_icerik,
            ':title' => $this->proje_title,
            ':descr' => $this->proje_description,
            ':keywords' => $this->proje_keywords,
            ':durum' => $this->proje_keywords
        ];
        if($this->proje_resim)
        {
            $params['resim'] = $this->proje_resim;
        }
        return $stmt->execute($params);
    }
    public function projeSil()
    {
        $this->proje_id = $_GET['proje_id'];
        
        $query = "DELETE FROM projeler WHERE proje_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->proje_id]);
    }

}

class Referans extends Db
{
    private $referans_id;	
    private $referans_adi;
    private $referans_resim;
    private $referans_aciklama;

   public function referansGetir()
   {
    $query = "SELECT * FROM referanslar";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
   }
   public function referansIDGetir()
   {
    $this->referans_id = $_GET['referans_id'];

    $query = "SELECT * FROM referanslar WHERE referans_id=:id";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([':id' => $this->referans_id]);
    return $stmt->fetch();
   }
   public function referansEkle()
   {
        $this->referans_adi = $_POST['referans_adi'];
        $this->referans_aciklama = $_POST['referans_aciklama'];

        $this->referans_resim = $_FILES['referans_resim']['name'];
        $hedefKlasor = "../images/referans/";
        $hedefDosya = $hedefKlasor.$this->referans_resim;

        $query = "INSERT INTO referanslar (referans_adi, referans_aciklama, referans_resim) VALUES (:adi, :aciklama, :resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':adi' => $this->referans_adi,
            ':aciklama' => $this->referans_aciklama,
            ':resim' => $this->referans_resim,
        ]);
   }
   public function referansGuncelle()
   {
        $this->referans_id = $_GET['referans_id'];
        $this->referans_adi = $_POST['referans_adi'];
        $this->referans_aciklama = $_POST['referans_aciklama'];

        $this->referans_resim = $_FILES['referans_resim']['name'];
        $hedefKlasor = "../images/referans/";
        $hedefDosya = $hedefKlasor.$this->referans_resim;

        if(isset($_FILES['referans_resim']) && $_FILES['referans_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->referans_resim = $_FILES['referans_resim']['name'];
            $hedefKlasor = "../images/referans/";
            $hedefDosya = $hedefKlasor . $this->referans_resim;

            if(move_uploaded_file(isset($_FILES['referans_resim']['tmp_name']), $hedefDosya))
            {
                $this->referans_resim = $this->referans_resim;
            }
            else
            {
                echo "Resim Yüklenirken Bir Hata Oluştu.";
            }
        }

        $query = "UPDATE referanslar SET referans_adi=:adi, referans_aciklama=:aciklama";

        if($this->referans_resim)
        {
            $query .= ", referans_resim=:resim";
        }
        $query .= " WHERE referans_id=:id";
        $stmt = $this->connect()->prepare($query);

        $params = [
            ':id' => $this->referans_id,
            ':adi' => $this->referans_adi,
            ':aciklama' => $this->referans_aciklama
        ];
        if($this->referans_resim)
        {
            $params[':resim'] = $this->referans_resim;
        }
        return $stmt->execute($params);
   }
   public function referansSil()
   {
     $this->referans_id = $_GET['referans_id'];
 
     $query = "DELETE FROM referanslar WHERE referans_id=:id";
     $stmt = $this->connect()->prepare($query);
     return $stmt->execute([':id' => $this->referans_id]);
   }
}

class Sayac extends Db
{
    private $sayac_id;
    private $sayac_baslik;
    private $sayac_icon;
    private $sayac_deger;

    public function sayacGetir()
    {
        $query = "SELECT * FROM sayac";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function sayacIDGetir()
    {
        $this->sayac_id = $_GET['sayac_id'];

        $query = "SELECT * FROM sayac WHERE sayac_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->sayac_id]);
        return $stmt->fetch();
    }
    public function sayacEkle()
    {
        $this->sayac_baslik = $_POST['sayac_baslik'];
        $this->sayac_icon = $_POST['sayac_icon'];
        $this->sayac_deger = $_POST['sayac_deger'];

        $query = "INSERT INTO sayac (sayac_baslik, sayac_icon, sayac_deger) VALUES (:baslik, :icon, :deger)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':baslik' => $this->sayac_baslik,
            ':icon' => $this->sayac_icon,
            ':deger' => $this->sayac_deger
        ]);
    }
    public function sayacGuncelle()
    {
        $this->sayac_id = $_GET['sayac_id'];
        $this->sayac_baslik = $_POST['sayac_baslik'];
        $this->sayac_icon = $_POST['sayac_icon'];
        $this->sayac_deger = $_POST['sayac_deger'];

        $query = "UPDATE sayac SET sayac_baslik=:baslik, sayac_icon=:icon, sayac_deger=:deger WHERE sayac_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->sayac_id,
            ':baslik' => $this->sayac_baslik,
            ':icon' => $this->sayac_icon,
            ':deger' => $this->sayac_deger
        ]);
    }
    public function sayacSil()
    {
        $this->sayac_id = $_GET['sayac_id'];

        $query = "DELETE FROM sayac WHERE sayac_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->sayac_id]);
    }
}

class Sayfa extends Db
{
    private $sayfa_id;
    private $sayfa_baslik;
    private $sayfa_icerik;
    private $sayfa_title;
    private $sayfa_description;
    private $sayfa_keywords;
    private $sayfa_resim;
    private $sayfa_durum;	

    private $sayfa_durum_kontrol = false;

    public function sayfaGetir($sayfa_durum_kontrol)
    {
        $this->sayfa_durum_kontrol = $sayfa_durum_kontrol;

        $query = "SELECT * FROM sayfalar";

        if($sayfa_durum_kontrol == true)
        {
            $query .=" WHERE sayfa_durum = 1";
        }
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute();
    }
    public function sayfaIDGetir()
    {
        $this->sayfa_id = $_GET['sayfa_id'];
        $query = "SELECT * FROM sayfalar WHERE sayfa_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->sayfa_id]);
        return $stmt->fetch();
    }
    public function sayfaEkle()
    {
        $this->sayfa_baslik = $_POST['sayfa_baslik'];
        $this->sayfa_icerik = $_POST['sayfa_icerik'];
        $this->sayfa_title = $_POST['sayfa_title'];
        $this->sayfa_description = $_POST['sayfa_description'];
        $this->sayfa_keywords = $_POST['sayfa_keywords'];

        $this->sayfa_resim = $_FILES['sayfa_resim']['name'];
        $hedefKlasor = "../images/sayfa/";
        $hedefDosya = $hedefKlasor.$this->sayfa_resim;

        if(isset($_FILES['sayfa_resim']) && $_FILES['sayfa_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->sayfa_resim = $_FILES['sayfa_resim']['name'];
            $hedefKlasor = "../images/sayfa/";
            $hedefDosya = $hedefKlasor. $this->sayfa_resim;
            if(move_uploaded_file(isset($_FILES['sayfa_resim']['tmp_name']), $hedefDosya))
            {
                $this->sayfa_resim = $this->sayfa_resim;
            }
        }
        $this->sayfa_durum = $_POST['sayfa_durum'];
        $query = "INSERT INTO sayfalar 
        (sayfa_baslik, sayfa_icerik, sayfa_title, sayfa_description, sayfa_keywords, sayfa_resim, sayfa_durum) 
        VALUES 
        (:baslik, :icerik, :title, :description, :keywords, :resim, :durum)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':baslik' => $this->sayfa_baslik,
            ':icerik' => $this->sayfa_icerik,
            ':title' => $this->sayfa_title,
            ':description' => $this->sayfa_description,
            ':keywords' => $this->sayfa_keywords,
            ':resim' => $this->sayfa_resim,
            ':durum' => $this->sayfa_durum
        ]);
    }
    public function sayfaGuncelle()
    {
        $this->sayfa_id = $_GET['sayfa_id'];
        $this->sayfa_baslik = $_POST['sayfa_baslik'];
        $this->sayfa_icerik = $_POST['sayfa_icerik'];
        $this->sayfa_title = $_POST['sayfa_title'];
        $this->sayfa_description = $_POST['sayfa_description'];
        $this->sayfa_keywords = $_POST['sayfa_keywords'];
        $this->sayfa_durum = $_POST['sayfa_durum'];

        $this->sayfa_resim = $_FILES['sayfa_resim']['name'];
        $hedefKlasor = "../images/sayfa/";
        $hedefDosya = $hedefKlasor.$this->sayfa_resim;
        if(isset($_FILES['sayfa_resim']) && $_FILES['sayfa_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->sayfa_resim = $_FILES['sayfa_resim']['name'];
            $hedefKlasor = "../images/sayfa/";
            $hedefDosya = $hedefKlasor. $this->sayfa_resim;
            if(move_uploaded_file(isset($_FILES['sayfa_resim']['tmp_name']), $hedefDosya))
            {
                $this->sayfa_resim = $this->sayfa_resim;
            }
        }

        $query = "UPDATE sayfalar SET 
        sayfa_baslik=:baslik, 
        sayfa_icerik=:icerik, 
        sayfa_title=:title, 
        sayfa_description=:description, 
        sayfa_keywords=:keywords, 
        sayfa_durum=:durum";

        if($this->sayfa_resim)
        {
            $query.=", sayfa_resim=:resim";
        }
        $query.=" WHERE sayfa_id=:id";
        $stmt = $this->connect()->prepare($query);
        $params = [
            ':id' => $this->sayfa_id,
            ':baslik' => $this->sayfa_baslik,
            ':icerik' => $this->sayfa_icerik,
            ':title' => $this->sayfa_title,
            ':description' => $this->sayfa_description,
            ':keywords' => $this->sayfa_keywords,
            ':durum' => $this->sayfa_durum,
        ];
        if($this->sayfa_resim)
        {
            $params[':resim'] = $this->sayfa_resim;
        }
        return $stmt->execute($params);
    }
    public function sayfaSil()
    {
        $this->sayfa_id = $_GET['sayfa_id'];

        $query = "DELETE FROM sayfalar WHERE sayfa_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->sayfa_id]);
    }
}

class Slider extends Db
{
    private $slider_id;
    private $slider_baslik;
    private $slider_aciklama;
    private $slider_durum;
    private $slider_resim;

    private $slider_durum_kontrol = false;

    public function sliderGetir($slider_durum_kontrol)
    {
        $this->slider_durum_kontrol = $slider_durum_kontrol;

        $query = "SELECT * FROM slider";
        if($this->slider_durum_kontrol == true)
        {
            $query.=" WHERE slider_durum = 1";
        }
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function sliderIDGetir()
    {
        $this->slider_id = $_GET['slider_id'];
        $query = "SELECT * FROM slider WHERE slider_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->slider_id]);
        return $stmt->fetch();
    }
    public function sliderEkle()
    {
        $this->slider_baslik = $_POST['slider_baslik'];
        $this->slider_aciklama = $_POST['slider_aciklama'];
        $this->slider_durum = $_POST['slider_durum'];

        $this->slider_resim = $_FILES['slider_resim']['name'];
        $hedefKlasor = "../images/slider/";
        $hedefDosya = $hedefKlasor.$this->slider_resim;
        if(isset($_FILES['slider_resim']) && $_FILES['slider_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->slider_resim = $_FILES['slider_resim']['name'];
            $hedefKlasor = "../images/slider/";
            $hedefDosya = $hedefKlasor. $this->slider_resim;
            if(move_uploaded_file(isset($_FILES['slider_resim']['tmp_name']), $hedefDosya))
            {
                $this->slider_resim = $this->slider_resim;
            }
        }
        $query = "INSERT INTO slider 
        (slider_baslik, slider_aciklama, slider_durum, slider_resim) 
        VALUES 
        (:baslik, :aciklama, :durum, :resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':baslik' => $this->slider_baslik,
            ':aciklama' => $this->slider_aciklama,
            ':durum' => $this->slider_durum,
            ':resim' => $this->slider_resim
        ]);
    }
    public function sliderGuncelle()
    {
        $this->slider_id = $_GET['slider_id'];
        $this->slider_baslik = $_POST['slider_baslik'];
        $this->slider_aciklama = $_POST['slider_aciklama'];
        $this->slider_durum = $_POST['slider_durum'];

        $this->slider_resim = $_FILES['slider_resim']['name'];
        $hedefKlasor = "../images/slider/";
        $hedefDosya = $hedefKlasor.$this->slider_resim;
        if(isset($_FILES['slider_resim']) && $_FILES['slider_resim']['error'] === UPLOAD_ERR_OK)
        {
            $this->slider_resim = $_FILES['slider_resim']['name'];
            $hedefKlasor = "../images/slider/";
            $hedefDosya = $hedefKlasor. $this->slider_resim;
            if(move_uploaded_file(isset($_FILES['slider_resim']['tmp_name']), $hedefDosya))
            {
                $this->slider_resim = $this->slider_resim;
            }
        }
        $query = "UPDATE slider SET 
        slider_baslik=:baslik, 
        slider_aciklama=:aciklama, 
        slider_durum=:durum";
        if($this->slider_resim)
        {
            $query.=", slider_resim=:resim";
        }
        $query.=" WHERE slider_id=:id";
        $stmt = $this->connect()->prepare($query);
        $params = [
            ':id' => $this->slider_id,
            ':baslik' => $this->slider_baslik,
            ':aciklama' => $this->slider_aciklama,
            ':durum' => $this->slider_durum
        ];
        if($this->slider_resim)
        {
            $params[':resim'] = $this->slider_resim;
        }
        return $stmt->execute($params);

    }
    public function sliderSil()
    {
        $this->slider_id = $_GET['slider_id'];
        $query = "DELETE FROM slider WHERE slider_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->slider_id]);
    }
}

class SosyalMedya extends Db
{
    private $sosyal_id;
    private $sosyal_link;
    private $sosyal_icon;

    public function sosyalMedyaGetir()
    {
        $query = "SELECT * FROM sosyal-medya";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function sosyalMedyaIDGetir()
    {
        $this->sosyal_id = $_GET['sosyal_id'];
        $query = "SELECT * FROM sosyal-medya WHERE sosyal_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->sosyal_id]);
        return $stmt->fetch();
    }
    public function sosyalMedyaEkle()
    {
        $this->sosyal_link = $_POST['sosyal_link'];
        $this->sosyal_icon = $_POST['sosyal_icon'];
        $query = "INSERT INTO sosyal-medya 
        (sosyal_link, sosyal_icon) 
        VALUES 
        (:link, :icon)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':link' => $this->sosyal_link,
            ':icon' => $this->sosyal_icon
        ]);
    }
    public function sosyalMedyaGuncelle()
    {
        $this->sosyal_id = $_GET['sosyal_id'];
        $this->sosyal_link = $_POST['sosyal_link'];
        $this->sosyal_icon = $_POST['sosyal_icon'];

        $query = "UPDATE sosyal-medya SET 
        sosyal_link=:link, 
        sosyal_icon=:icon WHERE sosyal_id =:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->sosyal_id,
            ':link' => $this->sosyal_link,
            ':icon' => $this->sosyal_icon
        ]);
    }
    public function sosyalMedyaSil()
    {
        $this->sosyal_id = $_GET['sosyal_id'];
        $query = "DELETE FROM sosyal-medya WHERE sosyal_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->sosyal_id]);   
    }
}

class SSS extends Db
{
    private $sss_id;
    private $sss_soru;
    private $sss_cevap;
    private $sss_durum;

    private $sss_durum_kontrol = false;

    public function sssGetir($sss_durum_kontrol)
    {
        $this->sss_durum_kontrol = $sss_durum_kontrol;

        $query = "SELECT * FROM sss";
        if($this->sss_durum_kontrol == true)
        {
            $query.=" WHERE sss_durum = 1";
        }
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function sssIDGetir()
    {
        $this->sss_id = $_GET['sss_id'];
        $query = "SELECT * FROM sss WHERE sss_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->sss_id]);
        return $stmt->fetch();
    }
    public function sssEkle()
    {
        $this->sss_soru = $_POST['sss_soru'];
        $this->sss_cevap = $_POST['sss_cevap'];
        $this->sss_durum = $_POST['sss_durum'];

        $query = "INSERT INTO sss 
        (sss_soru, sss_cevap, sss_durum) 
        VALUES 
        (:soru, :cevap, :durum)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':soru' => $this->sss_soru,
            ':cevap' => $this->sss_cevap,
            ':durum' => $this->sss_durum
        ]);
    }
    
    public function sssGuncelle()
    {
        $this->sss_id = $_GET['sss_id'];
        $this->sss_soru = $_POST['sss_soru'];
        $this->sss_cevap = $_POST['sss_cevap'];
        $this->sss_durum = $_POST['sss_durum'];

        $query = "UPDATE sss SET 
        sss_soru=:soru, 
        sss_cevap=:cevap, 
        sss_durum=:durum WHERE sss_id =:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':id' => $this->sss_id,
            ':soru' => $this->sss_soru,
            ':cevap' => $this->sss_cevap,
            ':durum' => $this->sss_durum
        ]);
    }
    public function sssSil()
    {
        $this->sss_id = $_GET['sss_id'];
        $query = "DELETE FROM sss WHERE sss_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->sss_id]);
    }

}

class Urun extends Db
{
    private $urun_id;	
    private $urun_adi;
    private $urun_aciklama;
    private $urun_fiyat;
    private $urun_durum;
    private $urun_title;
    private $urun_description;
    private $urun_keywords;
    private $urun_resim;

    private $urun_durum_kontrol;
    
    public function urunGetir($urun_durum_kontrol)
    {
        $this->urun_durum_kontrol = $urun_durum_kontrol;
        $query = "SELECT * FROM urunler";
        if($this->urun_durum_kontrol == true)
        {
            $query.=" WHERE urun_durum = 1";
        }
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function urunIDGetir()
    {
        $this->urun_id = $_GET['urun_id'];
        $query = "SELECT * FROM urunler WHERE urun_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->urun_id]);
        return $stmt->fetch();
    }

    public function urunEkle()
    {
        $this->urun_adi = $_POST['urun_adi'];
        $this->urun_aciklama = $_POST['urun_aciklama'];
        $this->urun_fiyat = $_POST['urun_fiyat'];
        $this->urun_durum = $_POST['urun_durum'];
        $this->urun_title = $_POST['urun_title'];
        $this->urun_description = $_POST['urun_description'];
        $this->urun_keywords = $_POST['urun_keywords'];

        $this->urun_resim = $_FILES['urun_resim']['name'];
        $hedefKlasor = "../images/urunler/";
        $hedefDosya = $hedefKlasor . $this->urun_resim;

        $query = "INSERT INTO urunler (urun_adi, urun_aciklama, urun_fiyat, urun_durum, urun_title, urun_desrciption, urun_keywords, urun_resim) VALUES (:adi, :aciklama, :fiyat, :durum, :title, :desrciption, :keywords, :urun_resim)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':adi' => $this->urun_adi,
            ':aciklama' => $this->urun_aciklama,
            ':fiyat' => $this->urun_fiyat,
            ':durum' => $this->urun_durum,
            ':title' => $this->urun_title,
            ':desrciption' => $this->urun_description,
            ':keywords' => $this->urun_keywords,
            ':urun_resim' => $this->urun_resim
        ]);
    }
    public function urunGuncelle()
    {
        $this->urun_id = $_GET['urun_id'];
        $this->urun_adi = $_POST['urun_adi'];
        $this->urun_aciklama = $_POST['urun_aciklama'];
        $this->urun_fiyat = $_POST['urun_fiyat'];
        $this->urun_durum = $_POST['urun_durum'];
        $this->urun_title = $_POST['urun_title'];
        $this->urun_description = $_POST['urun_description'];
        $this->urun_keywords = $_POST['urun_keywords'];
        $this->urun_resim = $_FILES['urun_resim']['name'];
        $hedefKlasor = "../images/urunler/";
        $hedefDosya = $hedefKlasor. $this->urun_resim;
        $query = "UPDATE urunler SET 
        urun_adi=:adi, 
        urun_aciklama=:aciklama, 
        urun_fiyat=:fiyat, 
        urun_durum=:durum,
        urun_title=:title, 
        urun_desrciption=:desrciption, 
        urun_keywords=:keywords";

        if(move_uploaded_file(isset($_FILES['urun_resim']['tmp_name']), $hedefDosya))
        {
            $this->urun_resim = $this->urun_resim;
        }
        else
        {
            echo "Ürün Resmi Güncellenirken Bir Hata Oluştu.";
        }

        if($this->urun_resim)
        {
            $query .= "urun_resim=:resim";
        }
        $query .= " WHERE urun_id=:id";
        $stmt = $this->connect()->prepare($query);
        $params = [
            ':id' => $this->urun_id,
            ':adi' => $this->urun_adi,
            ':aciklama' => $this->urun_aciklama,
            ':fiyat' => $this->urun_fiyat,
            ':durum' => $this->urun_durum,
            ':title' => $this->urun_title,
            ':desrciption' => $this->urun_description,
            ':keywords' => $this->urun_keywords
        ];
        if($this->urun_resim)
        {
            $params['resim'] = $this->urun_resim;
        }
        return $stmt->execute($params);
    }
    public function urunSil()
    {
        $this->urun_id = $_GET['urun_id'];
        $query = "DELETE FROM urunler WHERE urun_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->urun_id]);
    }

        

}

class Video extends Db
{
    private $video_id;
    private $video_url;
    
    public function videoGetir()
    {
        $query = "SELECT * FROM video-galeri";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();   
    }
    public function videoIDGetir()
    {
        $this->video_id = $_GET['video_id'];
        $query = "SELECT * FROM video-galeri WHERE video_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([':id' => $this->video_id]);
        return $stmt->fetch();
    }
    public function videoEkle()
    {
        $this->video_url = $_POST['video_url'];
        $query = "INSERT INTO video-galeri (video_url) VALUES (:url)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':url' => $this->video_url
        ]);
    }
    public function videoGuncelle()
    {
        $this->video_id = $_GET['video_id'];
        $this->video_url = $_POST['video_url'];
        $query = "UPDATE video-galeri SET video_url=:url WHERE video_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            ':url' => $this->video_url,
            ':id' => $this->video_id
        ]);
    }
    public function videoSil()
    {
        $this->video_id = $_GET['video_id'];
        $query = "DELETE FROM video-galeri WHERE video_id=:id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([':id' => $this->video_id]);
    }

}


?>