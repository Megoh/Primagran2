<?php /* Smarty version Smarty-3.1.14, created on 2020-09-10 18:25:54
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\modules\prestashop\adminps\themes\default\template\controllers\products\helpers\uploader\attachment_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214575f5a5392c0de21-40667332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5bb4f6b7e5c924224274513086647be0589a90' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\modules\\prestashop\\adminps\\themes\\default\\template\\controllers\\products\\helpers\\uploader\\attachment_ajax.tpl',
      1 => 1395069464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214575f5a5392c0de21-40667332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'url' => 0,
    'post_max_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5f5a5392dd7749_83052900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5a5392dd7749_83052900')) {function content_5f5a5392dd7749_83052900($_smarty_tpl) {?>
<div class="col-lg-8">
	<input id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['url']->value)){?> data-url="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"<?php }?> class="hide" />
	<button class="btn btn-default" data-style="expand-right" data-size="s" type="button" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button">
		<i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add file'),$_smarty_tpl);?>

	</button>
<!--
	<div class="alert alert-success" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success" style="display:none"><?php echo smartyTranslate(array('s'=>'Upload successful'),$_smarty_tpl);?>
</div>
	<div class="alert alert-danger" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors" style="display:none"></div>
-->
</div>

<script type="text/javascript">
	function humanizeSize(bytes)
	{
		if (typeof bytes !== 'number') {
			return '';
		}

		if (bytes >= 1000000000) {
			return (bytes / 1000000000).toFixed(2) + ' GB';
		}

		if (bytes >= 1000000) {
			return (bytes / 1000000).toFixed(2) + ' MB';
		}

		return (bytes / 1000).toFixed(2) + ' KB';
	}

	$( document ).ready(function() {
		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_add_button = Ladda.create( document.querySelector('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button' ));
		var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files = 0;
		var success_message = '<?php echo smartyTranslate(array('s'=>'Upload successful','js'=>1),$_smarty_tpl);?>
';

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').fileupload({
			dataType: 'json',
			autoUpload: true,
			singleFileUploads: true,
			maxFileSize: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
,
			success: function (e) {
				//showSuccessMessage(success_message);
			},
			start: function (e) {				
				<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_add_button.start();
			},
			fail: function (e, data) {
				showErrorMessage(data.errorThrown.message);
			},
			done: function (e, data) {
				if (data.result) {
					if (typeof data.result.attachment_file !== 'undefined') {
						if (typeof data.result.attachment_file.error !== 'undefined' && data.result.attachment_file.error.length > 0)
							$.each(data.result.attachment_file.error, function(index, error) {
								showErrorMessage(data.result.attachment_file.name + ' : ' + error);
							});
						else {
							showSuccessMessage(success_message);
							$('#selectAttachment2').append('<option value="'+data.result.attachment_file.id_attachment+'">'+data.result.attachment_file.filename+'</option>');
						}
					}
				}
			},
		}).on('fileuploadalways', function (e, data) {
			<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_add_button.stop();
		}).on('fileuploadprocessalways', function (e, data) {
			var index = data.index,	file = data.files[index];
			//if (file.error)
				//$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').append('<div class="row"><strong>'+file.name+'</strong> ('+humanizeSize(file.size)+') : '+file.error+'</div>').show();
		}).on('fileuploadsubmit', function (e, data) {
			var params = new Object();

			$('input[id^="attachment_name_"]').each(function()
			{
				id = $(this).prop("id").replace("attachment_name_", "attachment_name[") + "]";
				params[id] = $(this).val();
			});

			$('textarea[id^="attachment_description_"]').each(function()
			{
				id = $(this).prop("id").replace("attachment_description_", "attachment_description[") + "]";
				params[id] = $(this).val();
			});


			data.formData = params;			
		});

		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-add-button').on('click', function() {
			//$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-success').hide();
			//$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-errors').html('').hide();
			<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_total_files = 0;
			$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').trigger('click');
		});
	});
</script><?php }} ?>