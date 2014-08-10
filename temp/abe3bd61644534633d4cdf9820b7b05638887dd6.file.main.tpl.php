<?php /* Smarty version Smarty-3.1.16, created on 2014-08-10 20:37:58
         compiled from "D:\ORDERS\MAKELS\makels.com\kernel\modules\ZMK\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2468653e23adb148dc1-12086664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe3bd61644534633d4cdf9820b7b05638887dd6' => 
    array (
      0 => 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\modules\\ZMK\\templates\\main.tpl',
      1 => 1407692271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2468653e23adb148dc1-12086664',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e23adb17b609_63212953',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e23adb17b609_63212953')) {function content_53e23adb17b609_63212953($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\smarty\\plugins\\function.module.php';
?><!-- Main screen -->
<div id="zmk_mode_main" class="zmk_modes">
	<div class="zmode_title">
		<span></span>
	</div>
	<div class="zmode_content">
		<div class="left-side">
			<?php echo smarty_function_module(array('name'=>"ZSlider"),$_smarty_tpl);?>
	
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
