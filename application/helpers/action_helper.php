<?php
/**
 * Created by PhpStorm.
 * User: development
 * Date: 29/01/2018
 * Time: 00:27
 */


function langList()
{
    $CI =& get_instance();
    $CI->load->model('Language_model');
    $data = $CI->Language_model->getList();

    return $data;
}

function loginCheck()
{
    $CI =& get_instance();
    $session = $CI->session->userdata('admin');
    if (!$session) {
        redirect('/manage/login');
    }
}

function referanceGetList(){
    $CI =& get_instance();
    $CI->load->model('Referance_model');
    $lang = langGet();
    $CI->Referance_model->lang = $lang['id'];
    $CI->Referance_model->activate = 1;
    $data = $CI->Referance_model->getList();




    return $data;
}

function categoryGlobal()
{
    $CI =& get_instance();
    $CI->load->model('Category_model');
    $lang = langGet();
    $CI->Category_model->lang = $lang['id'];
    $CI->Category_model->active = 1;
    $data = $CI->Category_model->getList();


    return $data;
}

function langGet()
{
    $arrayData = langList();
    $CI =& get_instance();
    $lang = $CI->uri->segment(1);
    if($lang == ''){
        $lang = 'en';
    }
    $langKey = array_search($lang, array_column($arrayData, 'url'));
    return $arrayData[$langKey];
}


