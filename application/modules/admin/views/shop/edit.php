<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(is_root())
{
	$form = new zea();

	$get_id = @intval($_GET['id']);
	$form->init('edit');
	$form->setTable('shop');

	$form->setId($get_id);
	$form->setHeading('Shop');

	$form->addInput('title','text');
	$form->addInput('description', 'textarea');
	$form->setRequired('All');
	$form->form();
}