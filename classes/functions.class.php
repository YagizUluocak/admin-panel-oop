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