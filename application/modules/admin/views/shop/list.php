<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$form = new zea();
	$form->init('roll');
	$form->setTable('shop');
	
	$form->setField(array('title'));
	$form->search();

	$form->addInput('id','hidden');

	$form->addInput('title','plaintext');
	$form->setLabel('title','nama toko');
	
	$form->setFormName('shop');
	$form->setEdit(TRUE);
	$form->setDelete(TRUE);
	
	$form->form();
}else{
	msg('forbidden access','danger');
}