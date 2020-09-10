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
  'unifunc' => 'content_5f5a53f1a1d7e8_16099546',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5a53f1a1d7e8_16099546')) {function content_5f5a53f1a1d7e8_16099546($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Faded Short Sleeve T-shirts http://127.0.0.1/modules/prestashop/en/tshirts/1-faded-short-sleeve-tshirts.html');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://127.0.0.1/modules/prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://127.0.0.1/modules/prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://127.0.0.1/modules/prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click();">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://127.0.0.1/modules/prestashop/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>