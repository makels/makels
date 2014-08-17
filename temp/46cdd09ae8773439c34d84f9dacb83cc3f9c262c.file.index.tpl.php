<?php /* Smarty version Smarty-3.1.16, created on 2014-08-17 19:32:05
         compiled from "D:\ORDERS\MAKELS\makels.com\kernel\modules\ZMK\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366453e23adb08fb51-19494146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46cdd09ae8773439c34d84f9dacb83cc3f9c262c' => 
    array (
      0 => 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\modules\\ZMK\\templates\\index.tpl',
      1 => 1408293121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366453e23adb08fb51-19494146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e23adb100fb1_92919882',
  'variables' => 
  array (
    'mod_vars' => 0,
    'mod_tmpl_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e23adb100fb1_92919882')) {function content_53e23adb100fb1_92919882($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["mod_tmpl_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['mod_vars']->value['templates_url'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["mod_tmpl_dir"] = new Smarty_variable($_smarty_tpl->tpl_vars['mod_vars']->value['templates_dir'], null, 0);?>

<!-- ZMK client styles -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/css/style.css">

<!-- ZMK client modules -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/Components/main_menu.js"></script>
<!-- Makels APP-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/Makels/extensions.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/Makels/makels_mask.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/Makels/makels.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/Core/app.js"></script>

<div class="mod_ZMK">
	
	<!-- Main menu -->
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/photo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/face.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/eyes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/lips.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/skin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/hair.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['mod_tmpl_dir']->value)."/nails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div id="zmk_workpace_wrapper"></div>

</div>


<script type="text/javascript">

	$(function() {
		app.init();
	});

</script>
<?php }} ?>
