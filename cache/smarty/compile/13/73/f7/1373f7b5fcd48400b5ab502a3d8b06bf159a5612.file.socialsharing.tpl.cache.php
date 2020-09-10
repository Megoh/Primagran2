<?php /* Smarty version Smarty-3.1.14, created on 2020-09-10 18:27:29
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\modules\prestashop\modules\socialsharing\views\templates\hook\socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166875f5a53f182dfa1-94453795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1373f7b5fcd48400b5ab502a3d8b06bf159a5612' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\modules\\prestashop\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1395069466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166875f5a53f182dfa1-94453795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f5a53f194fcb0_34859913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5a53f194fcb0_34859913')) {function content_5f5a53f194fcb0_34859913($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value){?>
	<p class="socialsharing_product list-inline no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value){?>
			<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('<?php echo addslashes($_smarty_tpl->tpl_vars['product']->value->name);?>
 <?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value));?>
');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/twitter.gif");?>
" alt="Tweet" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value){?>
			<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/facebook.gif");?>
" alt="Facebook Like" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value){?>
			<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/google.gif");?>
" alt="Google Plus" /> -->
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value){?>
			<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click();">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/pinterest.gif");?>
" alt="Pinterest" /> -->
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>