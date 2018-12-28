<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
	}

	public function balance()
	{
		$data = $this->db->query('SELECT * FROM wallet ORDER BY id ASC')->result_array();
		if(!empty($data))
		{
			$balance = array();
			$balance['amount'] = 0;
			foreach ($data as $key => $value) 
			{
				if($value['status'] == 1)
				{
					$balance['amount'] += $value['amount'];
					$balance['debit'] = $value['amount'];
				}else{
					$balance['amount'] -= $value['amount'];
					$balance['credit'] = $value['amount'];
				}
			}
			$this->esg->set_esg('balance', $balance);
		}
	}
}
