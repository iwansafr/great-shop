<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$form = new zea();

	$form->init('edit');
	$form->setTable('user_shop');
	$form->addInput('user_id', 'dropdown');
	$form->tableOptions('user_id','user','id','username');
	$form->addInput('shop_id', 'dropdown');
	$form->tableOptions('shop_id','shop','id','title');
	$form->form();

}