<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->library('esg');
		$this->load->model('shop_model');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function edit()
	{
		$this->load->view('index');
	}
	public function user()
	{
		$this->load->view('index');
	}
}