<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ddiktepe
 * Date: 26.01.2018
 * Time: 12:57
 */
class Language extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		loginCheck();
	}
	
	public function index()
	{
		$this->load->model('Language_model');
		$data['list'] = $this->Language_model->getList();
		$this->load->view('manage/language', $data);
	}
	
	public function edit($id)
	{
		
		$post = $this->input->post(null, true);
		$this->load->model('Language_model');
		$this->Language_model->id = $id;
		$data['detail'] = $this->Language_model->getEdit();
		
		if (count($post)) {
			$post['activate'] = (isset($post['activate'])) ? 1 : 0;
			$this->Language_model->data = $post;
			$response = $this->Language_model->getUpdate();
			if ($response) {
				$data['detail'] = $post;
			}
		}
		
		$this->load->view('manage/language_edit', $data);
		
	}
	
	public function add()
	{
		$this->load->model('Language_model');
		$data['detail'] = array(
			'id' => null,
			'name' => '',
			'url' => '',
			'activate' => -1
		);
		
		$post = $this->input->post(null, true);
		
		if (count($post)) {
			$post['activate'] = (isset($post['activate'])) ? 1 : 0;
			$this->Language_model->data = $post;
			$response = $this->Language_model->getInsert();
			if ($response) {
				redirect(base_url('manage/language/edit/'.$response));
			}
		}
		
		$this->load->view('manage/language_edit', $data);
		
	}
	
	public function remove($id)
	{
		$this->load->model('Language_model');
		$this->Language_model->id = $id;
		$response = $this->Language_model->getRemove();
		if ($response) {
			redirect(base_url('manage/language/'));
		}
	}
	
}