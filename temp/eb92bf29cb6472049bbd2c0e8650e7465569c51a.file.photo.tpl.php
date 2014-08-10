<?php /* Smarty version Smarty-3.1.16, created on 2014-08-10 21:51:29
         compiled from "D:\ORDERS\MAKELS\makels.com\kernel\modules\ZMK\templates\photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1716753e23adb188fe8-54506595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb92bf29cb6472049bbd2c0e8650e7465569c51a' => 
    array (
      0 => 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\modules\\ZMK\\templates\\photo.tpl',
      1 => 1407696686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1716753e23adb188fe8-54506595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e23adb1964f5_41749157',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e23adb1964f5_41749157')) {function content_53e23adb1964f5_41749157($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\smarty\\plugins\\function.module.php';
?><!-- Photo screen -->
<div id="zmk_mode_photo" class="zmk_modes">
<div class="zmode_title">
		<!--span></span-->
	</div>
	<div class="zmode_content">
		<div class="left-side">
				
		</div>
		<div class="right-side">
			<div><?php echo smarty_function_module(array('name'=>"Lang"),$_smarty_tpl);?>
</div>
			<div><?php echo smarty_function_module(array('name'=>"PhotoUploader"),$_smarty_tpl);?>
</div>
			<div><?php echo smarty_function_module(array('name'=>"ChoiceModel"),$_smarty_tpl);?>
</div>
		</div>
	</div>
</div><?php }} ?>
