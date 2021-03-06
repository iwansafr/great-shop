<?php defined('BASEPATH') OR exit('No direct script access allowed');
$template_names = array();

?>
<a href="<?php echo base_url().'admin/config/widget' ?>" class="btn btn-default pull-right" ><i class=" fa fa-cog"></i> Manage Widget</a>
<?php
if(is_admin() || is_root())
{
	$template_names = array();
	$template_admin = array();
	foreach(glob(FCPATH.'application/modules/home/views/templates/*/index.esg') as $file)
	{
		$template_dir = explode('/', $file);
		array_pop($template_dir);
		$template_name = end($template_dir);
		if(is_admin())
		{
			$template_names[$public_template] = $public_template;
		}else{
			$template_names[$template_name] = $template_name;
		}
	}
	foreach(glob(FCPATH.'application/modules/admin/views/templates/*/index.esg') as $file)
	{
		$template_dir = explode('/', $file);
		array_pop($template_dir);
		$template_admin = end($template_dir);
		if(is_admin())
		{
			$template_admin_names[$admin_template] = $admin_template;
		}else{
			$template_admin_names[$template_admin] = $template_admin;
		}
	}
	$form = new zea();

	$form->init('param');
	$form->setTable('config');
	$form->setId(1);
	$form->setHeading('templates');
	// $form->setParam($config);
	$form->setParamName('templates');
	$form->addInput('public_template', 'dropdown');
	$form->setLabel('public_template', 'Public Template');
	if(!empty($template_names))
	{
		$form->setOptions('public_template', $template_names);
	}

	$form->addInput('admin_template', 'dropdown');
	$form->setLabel('admin_template', 'Admin Template');
	if(!empty($template_admin_names))
	{
		$form->setOptions('admin_template', $template_admin_names);
	}
	$form->setFormName('templates');
	$form->form();
}else{
	msg('you dont have permission to access this section', 'danger');
}