<?php /* Smarty version Smarty-3.1.14, created on 2014-03-22 06:51:05
         compiled from "C:\Program Files\EasyPHP-DevServer-14.1VC9\data\localweb\prestashop\admin\themes\default\template\controllers\modules\quickview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8276532d24c9002719-17760453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e37e394c8bb680590ac94c8ab9245f3826e5a2' => 
    array (
      0 => 'C:\\Program Files\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\quickview.tpl',
      1 => 1395047864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8276532d24c9002719-17760453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'displayName' => 0,
    'badges' => 0,
    'badge' => 0,
    'nb_rates' => 0,
    'avg_rate' => 0,
    'description_full' => 0,
    'additional_description' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_532d24c91adb02_64518099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532d24c91adb02_64518099')) {function content_532d24c91adb02_64518099($_smarty_tpl) {?>
<div class="bootstrap">
	<div class="col-lg-2">
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
" class="img-thumbnail" />
		<?php if (isset($_smarty_tpl->tpl_vars['badges']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->key => $_smarty_tpl->tpl_vars['badge']->value){
$_smarty_tpl->tpl_vars['badge']->_loop = true;
?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value;?>
" alt="" class="clearfix quickview-badge" />
		<?php } ?>
		<?php }?>
	</div>
	<div class="col-lg-10">
		<h1><?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
</h1>
		<div class="row">
			<?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value>0){?>
			<div class="col-lg-4">
				<span class="rating">
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==5){?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==4){?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==3){?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==2){?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==1){?> active<?php }?>"></span>
				</span>
				<p class="small"><?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value>1){?><?php echo smartyTranslate(array('s'=>"(%s votes)",'sprintf'=>$_smarty_tpl->tpl_vars['nb_rates']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>"(%s vote)",'sprintf'=>$_smarty_tpl->tpl_vars['nb_rates']->value),$_smarty_tpl);?>
<?php }?></p>
			</div>
			<?php }?>
		</div>
		<h3><?php echo smartyTranslate(array('s'=>"Description"),$_smarty_tpl);?>
</h3>
		<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['description_full']->value;?>
</p>
		<?php if (isset($_smarty_tpl->tpl_vars['additional_description']->value)&&trim($_smarty_tpl->tpl_vars['additional_description']->value)!=''){?>
			<h3><?php echo smartyTranslate(array('s'=>"Merchant benefits"),$_smarty_tpl);?>
</h3>
			<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['additional_description']->value;?>
</p>
		<?php }?>
		<div class="row">
			<a class="btn btn-success btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" onclick="return !window.open(this.href);"><?php echo smartyTranslate(array('s'=>'View on PrestaShop Addons'),$_smarty_tpl);?>
</a>
		</div>
	</div>
</div><?php }} ?>