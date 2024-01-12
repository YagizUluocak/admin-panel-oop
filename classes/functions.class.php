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
?>