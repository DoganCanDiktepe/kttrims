<?php

/**
 * Created by PhpStorm.
 * User: development
 * Date: 31/01/2018
 * Time: 20:15
 */


class Attachment extends CI_Controller
{
    private $_folderName = UPLOAD_PATH;
    private $_resizeFolderName = UPLOAD_RESIZE;
    private $_allowedTypes = 'jpg|png|gif|jpeg';
    private $_err = 0;
    private $_fileInputName = 'files';
    private $_dbAdditionalData = [];

    public function __construct()
    {
        parent::__construct();
        loginCheck();
    }

    public function getResizeFolderName()
    {
        return $this->_resizeFolderName;
    }

    public function getAllowedTypes()
    {
        return $this->_allowedTypes;
    }

    public function getFolderName()
    {
        return $this->_folderName;
    }

    public function imageResize($data)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path']; //get original image
        $config['maintain_ratio'] = TRUE;
        $config['create_thumb'] = FALSE;
        $config['thumb_marker'] = '_resize';
        $config['new_image'] = FCPATH.$this->getResizeFolderName().$data['file_name'];
        $config['width'] = 1920;
        $config['height'] = 1080;

        $this->load->library('image_lib', $config);

        if (!$this->image_lib->resize()) {

            $this->_err = 1;
            $message = array(
                'error' => 1,
                'message' => strip_tags($this->image_lib->display_errors())
            );

            echo json_encode($message);
        } else {

            return $data['file_name'];

        }
    }

    public function upload_files()
    {

        $title = md5(date('Y-m-d H:i:s'));

        $config['upload_path'] = FCPATH.$this->getFolderName();
        $config['allowed_types'] = $this->getAllowedTypes();
        $config['max_size'] = '222024';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($this->_fileInputName)) {
            $this->_err = 1;
            $message = array(
                'error' => 1,
                'message' => strip_tags($this->upload->display_errors()),
            );

            echo json_encode($message);
        } else {
            $data = $this->upload->data();

            $this->imageResize($data);

            $this->_dbAdditionalData = array(
                'attach_file_name' => @$data['file_name'],
                'attach_file_name_orig' => @$data['orig_name'],
                'attach_file_ext' => @$data['file_ext'],
                'attach_file_size' => @$data['file_size']
            );

            echo json_encode($this->_dbAdditionalData);
        }

    }
}