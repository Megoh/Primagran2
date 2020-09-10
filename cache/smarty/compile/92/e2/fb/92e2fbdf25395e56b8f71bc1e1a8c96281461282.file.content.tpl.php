<?php /* Smarty version Smarty-3.1.14, created on 2014-03-22 06:51:21
         compiled from "C:\Program Files\EasyPHP-DevServer-14.1VC9\data\localweb\prestashop\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14521532d24d91339e9-63768327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e2fbdf25395e56b8f71bc1e1a8c96281461282' => 
    array (
      0 => 'C:\\Program Files\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1395047864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14521532d24d91339e9-63768327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_532d24d9170a75_94533004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532d24d9170a75_94533004')) {function content_532d24d9170a75_94533004($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>