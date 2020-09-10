<style type="text/css" media="all">
#ps_module {clear:both;margin:2px 0px 2px 0px;padding:5px;background-color:#EEEEEE;-moz-border-radius:2px;-khtml-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}
#ps_module .module_name {clear:both;float:left;width:500px;margin:0px;padding:0px;color:#306085;font-size:11px;}

#ps_module .module_button {float:right;width:120px;text-align:center;padding:1px;margin:0px 0px 0px 0px;}
#ps_module .module_button a {width:100%;display:block;padding:1px 0px 1px 0px;margin:0px;color:white;background-color:#63809F;-moz-border-radius:2px;-khtml-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}
#ps_module .module_button a:hover {color:white;background-color:#31699F;}

#ps_module .module_infobulle {margin:0px 4px 0px 4px;padding:0px;}
#ps_module .module_infobulle pre {margin:0px;padding:0px;font-size:11px;}
#ps_module .module_infobulle .info {position:relative;z-index:24;margin:0px 0px 0px 0px;padding:0px 2px 0px 2px;text-align:center;color:#cfcfcf;font-size:11px;font-weight:bold;background-color:#dfdfdf;text-decoration:none;-moz-border-radius:2px;-khtml-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}
#ps_module .module_infobulle .info:hover{z-index:25;background-color:#FBD825;color:#895902;}
#ps_module .module_infobulle .info .info_frame{display:none;}
#ps_module .module_infobulle .info:hover .info_frame{display:block;position:absolute;top:0px;left:9px;width:400px;text-align:left;margin:0px;padding:0px 15px 15px 15px;background-color:#FBD825;color:black;font-size:9px;font-weight:normal;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}

#ps_module .module_infobulle_admin {margin:0px;padding:0px;}
#ps_module .module_infobulle_admin pre {margin:0px;padding:0px;font-size:11px;}
#ps_module .module_infobulle_admin .info {position:relative;z-index:24;}
#ps_module .module_infobulle_admin .info:hover{z-index:25;}
#ps_module .module_infobulle_admin .info .info_frame{display:none;}
#ps_module .module_infobulle_admin .info:hover .info_frame{display:block;position:absolute;bottom:20px;left:-50px;width:180px;text-align:center;margin:0px;padding:10px;background-color:#313131;color:white;font-size:9px;font-weight:normal;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}

</style>

<?php
$module_version = '1.6.0.5';
$module_info = array();
$module_info = array(
	"module_name" 		=> array(
		"en"	=>	"PrestaShop",
		"fr"	=>	"PrestaShop"
		),
	"module_version" 	=> $module_version,
	"en"	=>	array(
		"Application"	=>	array(
				"Name"		=>	"Prestashop",
				"Version"	=>	$module_version,
				"Installation date"	=>	"2020-09-10 17:22:16",
				"Website"	=>	"<a href='http://www.prestashop.com/' target='_blank'>www.prestashop.com</a>"
		),
		"Installation Parameters"	=>	array(
				"E-mail address"	=>	"admin@domain.com",							
				"Password"			=>	"adminpwd",														
				"Database Name"		=>	"prestashop",							
				"Database Username"	=>	"root",							
				"Database Password"	=>	"'' (no password)"										
		),
		"How to uninstall this module ?"	=>	array(
				"If you want to uninstall this module, you just have to<br />delete the folder"	=>	"<br />[modules folder]\\prestashop",
		),	
	),
	"fr"	=>	array(
		"Application"	=>	array(
				"Name"		=>	"Prestashop",
				"Version"	=>	$module_version,
				"Date d'installation"	=>	"2020-09-10 17:22:16",
				"Website"	=>	"<a href='http://www.prestashop.com/' target='_blank'>www.prestashop.com</a>"
		),
		"Param&egrave;tres d'installation"	=>	array(
				"Adresse email"			=>	"admin@domain.com",						
				"Mot de passe"			=>	"adminpwd",														
				"Nom de la base"		=>	"prestashop",							
				"Nom utilisateur MySQL"	=>	"root",							
				"Mot de passe MySQL"	=>	"'' (no password)"				
		),
		"Comment d&eacute;sinstaller ce module ?"	=>	array(
				"Si vous voulez d&eacute;sinstaller ce module, il suffit de<br />supprimer le r&eacute;pertoire"	=>	"<br />[modules folder]\\prestashop",
		),		
	),	
);

$module_i18n = array();
$module_i18n = array(
	"en"	=>	array(
		"backoffice"	=>	"back office",
		"frontoffice"	=>	"front office"
	),
	"fr"	=>	array(
		"backoffice"	=>	"espace priv&eacute;",
		"frontoffice"	=>	"espace public"
	),
);

/* -- INFO -- */
$infobulle = '<pre>';
foreach($module_info[$lang] as $section_name => $section) {
	$infobulle .= '<br /><b style="color:#AF2D00">' . $section_name . '</b><br />';
	foreach($section as $title => $text) {
		$infobulle .= '<b>' . $title . '</b> : ' . $text . '<br />';
	}
}
$infobulle .= '</pre>';

$infobulle_admin = '<pre>';
$infobulle_admin .= '<b>Login</b>: admin@domain.com<br />';
$infobulle_admin .= '<b>Password</b>: adminpwd';
$infobulle_admin .= '</pre>';
$infobulle_admin .= '<div style="position:absolute;bottom:-4px;width:100%;text-align:center;margin:0px 0px 0px 0px;">';
$infobulle_admin .= '<img src="../modules/' . $file . '/triangle.png" alt="" />';
$infobulle_admin .= '</div>';
/* ---------- */

echo '<div id="ps_module">';
	echo '<div class="module_name" style="width:480px;padding:2px 0px 0px 24px;background-image:url(../modules/' . $file . '/favicon.png);background-repeat:no-repeat;">';
		echo $module_info['module_name'][$lang] . ' ' . $module_info['module_version'];
		echo '<span class="module_infobulle"><span class="info">?<span class="info_frame">' . $infobulle . '</span></span></span>';
	echo '</div>';
	echo '<div class="module_button"><a href="../modules/' . $file . '/" target="_blank">' . $module_i18n[$lang]['frontoffice'] . '</a></div>';
	echo '<div class="module_button"><div class="module_infobulle_admin"><div class="info"><a href="../modules/' . $file . '/adminps" target="_blank">' . $module_i18n[$lang]['backoffice'] . '</a><span class="info_frame">' . $infobulle_admin . '</span></div></div></div>';
	echo '<br style="clear:both;" / >';
echo "</div>";
?>
