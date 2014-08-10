<?php /* Smarty version Smarty-3.1.16, created on 2014-08-06 17:25:30
         compiled from "D:\ORDERS\MAKELS\makels.com\kernel\modules\Lang\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:925053e23adae5bd51-50739307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c848c8552c4a0168e58948a1ba89c7ec57f9ae' => 
    array (
      0 => 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\modules\\Lang\\templates\\index.tpl',
      1 => 1407079171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '925053e23adae5bd51-50739307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e23adb04bc87_65851420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e23adb04bc87_65851420')) {function content_53e23adb04bc87_65851420($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_label')) include 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\smarty\\plugins\\modifier.label.php';
?>
<script type="text/javascript">
	var ModLang = {
		onChange: function(lang) {
			$('#mod_lang_id').val(lang);
			$('#mod_lang_form').submit();
		}
	}
</script>


<div class="mod_Lang">
	<span>
		<?php echo smarty_modifier_label("lang");?>
:&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='us') {?><?php echo smarty_modifier_label('mod_lang_us');?>
<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='ua') {?><?php echo smarty_modifier_label('mod_lang_ua');?>
<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='ru') {?><?php echo smarty_modifier_label('mod_lang_ru');?>
<?php }?>
	</span>

	<form id="mod_lang_form" method="POST">
		<input id="mod_lang_id" type="hidden" name="mod_lang_value">
		<div onclick="ModLang.onChange('us');" class="l_flag l_flag_us <?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='us') {?>selected<?php }?>" title="<?php echo smarty_modifier_label('mod_lang_us');?>
"></div>
		<div onclick="ModLang.onChange('ua');" class="l_flag l_flag_ua <?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='ua') {?>selected<?php }?>" title="<?php echo smarty_modifier_label('mod_lang_ua');?>
"></div>
		<div onclick="ModLang.onChange('ru');" class="l_flag l_flag_ru <?php if ($_smarty_tpl->tpl_vars['current_lang']->value=='ru') {?>selected<?php }?>" title="<?php echo smarty_modifier_label('mod_lang_ru');?>
"></div>
	</form>
</div><?php }} ?>
