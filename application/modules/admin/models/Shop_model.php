<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->sidebar_menu();
	}

	public function sidebar_menu()
	{
		$data = array();
		$menu = array(
		  array(
		    'title' => 'Dashboard',
		    'icon' => 'fa-tachometer-alt',
		    'link' => base_url('admin')
		  ),
		  array(
		    'title' => 'product',
		    'icon' => 'fa-file-alt',
		    'link' => base_url('admin/product/'),
		    'list' => array(
		    	array(
		        'title' => 'Category',
		        'icon' => 'fa-list',
		        'link' => base_url('admin/product/category')
		      ),
		      array(
		        'title' => 'Add product',
		        'icon' => 'fa-pencil-alt',
		        'link' => base_url('admin/product/edit')
		      ),
		      array(
		        'title' => 'product List',
		        'icon' => 'fa-list',
		        'link' => base_url('admin/product/list')
		      ),
		    )
		  ),
		  array(
		    'title' => 'User',
		    'icon' => 'fa-user',
		    'link' => base_url('admin/user/list'),
		    'list' => array(
		      array(
		        'title' => 'User List',
		        'icon' => 'fa-dot-circle',
		        'link' => base_url('admin/user/list')
		      ),
		      array(
		        'title' => 'User Add',
		        'icon' => 'fa-dot-circle',
		        'link' => base_url('admin/user/edit')
		      ),
		      array(
		        'title' => 'User Role',
		        'icon' => 'fa-dot-circle',
		        'link' => base_url('admin/user/role'),
		      ),
		    )
		  ),
		  array(
		    'title' => 'shop',
		    'icon' => 'fa-list',
		    'link' => base_url('admin/shop/list'),
		    'list' => array(
		    	array(
		        'title' => 'Add shop',
		        'icon' => 'fa-pencil-alt',
		        'link' => base_url('admin/shop/edit')
		      ),
		      array(
		        'title' => 'shop List',
		        'icon' => 'fa-list',
		        'link' => base_url('admin/shop/list')
		      ),
		    )
		  ),
		  array(
		    'title' => 'wallet',
		    'icon' => 'fa-wallet',
		    'link' => base_url('admin/wallet/index'),
		    'list' => array(
		    	array(
		        'title' => 'balance',
		        'icon' => 'fa-dollar-sign',
		        'link' => base_url('admin/wallet/index')
		      ),
		    )
		  ),
		  array(
		    'title' => 'data',
		    'icon' => 'fa-database',
		    'link' => base_url('admin/visitor'),
		    'list' => array(
		    	array(
		        'title' => 'Visitor',
		        'icon' => 'fa-chart-bar',
		        'link' => base_url('admin/visitor')
		      )
		    )
		  ),
		  array(
		    'title' => 'Configuration',
		    'icon' => 'fa-cog',
		    'link' => base_url('admin/config/'),
		    'list' => array(
		      array(
		        'title' => 'logo',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/logo')
		      ),
		      array(
		        'title' => 'site',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/site')
		      ),
		      array(
		        'title' => 'templates',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/templates')
		      ),
		      array(
		        'title' => 'contact',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/contact')
		      ),
		      array(
		        'title' => 'style',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/style')
		      ),
		      array(
		        'title' => 'script',
		        'icon' => 'fa-cog',
		        'link' => base_url('admin/config/script')
		      ),
		    )
		  ),
		);
		$data['menu'] = $menu;
		$this->esg->set_esg('sidebar_menu', $data['menu']);
	}
}
