<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty(@intval($user['id'])))
{
	$form = new zea();

	$form->init('edit');
	$form->setTable('shop');

	$form->setId($get_id);
	$form->setHeading('Shop');

	$form->addInput('title','text');
	$form->addInput('description', 'textarea');
	$form->setRequired('All');
	$form->form();
}