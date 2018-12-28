<?php defined('BASEPATH') OR exit('No direct script access allowed');
$get_id = $this->input->get('id');
$form = new zea();

$form->init('edit');
$form->setTable('wallet');

$form->setId($get_id);
$form->setHeading('Wallet');

$form->addInput('status','dropdown');
$form->setLabel('status','status');
$form->setOptions('status',array_start_one(array('Debit','Credit')));
$form->addInput('amount','text');
$form->setAttribute('amount', array('type'=>'number'));
$form->addInput('description','textarea');
$form->setRequired('All');
$form->form();
$this->wallet_model->balance();
?>
<div class="col-md-4">
	<div class="small-box bg-aqua">
	  <div class="inner">
	    <h3><?php echo 'Rp. '.number_format(@$this->esg->get_esg('balance')['amount'],0,',','.') ?></h3>

	    <p>Balance</p>
	  </div>
	  <div class="icon">
	    <i class="fa fa-money"></i>
	  </div>
	  <a href="<?php echo base_url('admin/wallet/list') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-md-4">
	<div class="small-box bg-red">
	  <div class="inner">
	    <h3><?php echo 'Rp. '.number_format(@$this->esg->get_esg('balance')['credit'],0,',','.') ?></h3>

	    <p>Last Credit</p>
	  </div>
	  <div class="icon">
	    <i class="fa fa-money"></i>
	  </div>
	  <a href="<?php echo base_url('admin/wallet/list') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-md-4">
	<div class="small-box bg-green">
	  <div class="inner">
	    <h3><?php echo 'Rp. '.number_format(@$this->esg->get_esg('balance')['debit'],0,',','.') ?></h3>

	    <p>Last Debit</p>
	  </div>
	  <div class="icon">
	    <i class="fa fa-money"></i>
	  </div>
	  <a href="<?php echo base_url('admin/wallet/list') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>