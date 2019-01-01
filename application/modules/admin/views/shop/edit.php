<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$form = new zea();
	$get_id = @intval($_GET['id']);
	$form->init('edit');
	$form->setTable('shop');

	$form->setId($get_id);
	$form->setHeading('Shop');

	$form->addInput('user_ids','multiselect');
	$form->setLabel('user_ids', 'Category');
	$form->setMultiSelect('user_ids','user','id,username AS title');
	$form->addInput('title','text');
	$form->addInput('description', 'textarea');
	$form->setRequired('All');
	$form->form();
}else{
	echo msg('Forbiden and dangerous menu', 'danger');
}