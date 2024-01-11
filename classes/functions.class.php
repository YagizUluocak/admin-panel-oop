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
    public function blogGetir()
    {
        $query = "SELECT * FROM bloglar";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>