<?php
/**
 * Created by PhpStorm.
 * User: development
 * Date: 04/02/2018
 * Time: 01:50
 */


function q($key)
{

    $lang = langGet();
    $array = [];

    if ($lang['url'] == 'tr') {
        $array['contact_url'] = 'iletisim';
        $array['contact_title'] = 'İletişim';
        $array['about_url'] = 'hakkimizda';
        $array['about_title'] = 'Hakkımızda';
        $array['our_url'] = 'essiz_sureci';
        $array['our_title'] = 'Eşsiz Süreci';
        $array['product_url'] = 'urunler';
        $array['location'] = 'Yerler';
        $array['view_map'] = 'Haritayı görüntüle';
        $array['stay_title'] = 'Bizimle iletişime geçin';
        $array['fullname'] = 'Ad Soyad';
        $array['youremail'] = 'E-Mail Adresi';
        $array['yourphone'] = 'Telefon Numarası';
        $array['subject'] = 'Konu';
        $array['message'] = 'Mesajınız';
        $array['submit'] = 'Gönder';
        $array['follow'] = 'Takip Et';
        $array['emailadres'] = 'E-mail adresi';
        $array['ftText'] = 'KT Trims hakkında güncellemeleri almak istiyor musunuz?';
        $array['backtop'] = 'Yukarı Çık';
    } else if ($lang['url'] == 'en') {
        $array['contact_url'] = 'contact';
        $array['contact_title'] = 'Contact Us';
        $array['about_url'] = 'about';
        $array['about_title'] = 'About';
        $array['our_url'] = 'our_unique_process';
        $array['our_title'] = 'Our Unique Process';
        $array['product_url'] = 'product';
        $array['location'] = 'Locations';
        $array['view_map'] = 'Views google maps';
        $array['stay_title'] = 'Stay in Touch';
        $array['fullname'] = 'Fullname';
        $array['youremail'] = 'Your Email';
        $array['yourphone'] = 'Your Phone';
        $array['subject'] = 'Subject';
        $array['message'] = 'Message';
        $array['submit'] = 'Submit';
        $array['follow'] = 'Follow';
        $array['emailadres'] = 'E-mail address';
        $array['ftText'] = 'Would you like to get updates about KT Trims?';
        $array['backtop'] = 'Back Top';

    }

    return $array[$key];
}

function urlLangControl($lang, $url)
{

    $array = [];
    if ($lang == "tr") {
        $array['about'] = 'hakkimizda';
        $array['product'] = 'urunler';
        $array['contact'] = 'iletisim';
    } else {
        $array['hakkimizda'] = 'about';
        $array['urunler'] = 'product';
        $array['iletisim'] = 'contact';
    }

    return $array[$url];
}