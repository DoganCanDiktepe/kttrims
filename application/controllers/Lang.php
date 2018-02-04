<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends CI_Controller
{

    public function _remap($method)
    {

        if ($method) {
            $this->index($method);
        }

    }

    public function index($method)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referrer = $_SERVER['HTTP_REFERER'];

            $refReplace = str_replace(base_url(), '', $referrer);
            $refReplace = preg_split('/\//', $refReplace, -1, PREG_SPLIT_NO_EMPTY);


            if (isset($refReplace[1])) {
                $change = $refReplace[1];
                $redirectUrl = urlLangControl($method, $change);
                redirect(base_url($method . '/' . $redirectUrl));
            }else{
                redirect(base_url($method . '/'));
            }
        } else {
            redirect(base_url($method . '/'));
        }

    }
}