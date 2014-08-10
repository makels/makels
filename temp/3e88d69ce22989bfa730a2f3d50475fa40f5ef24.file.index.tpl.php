<?php /* Smarty version Smarty-3.1.16, created on 2014-08-10 17:03:56
         compiled from "D:\ORDERS\MAKELS\makels.com\kernel\modules\ZSlider\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3261553e2417804e043-46381938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e88d69ce22989bfa730a2f3d50475fa40f5ef24' => 
    array (
      0 => 'D:\\ORDERS\\MAKELS\\makels.com\\kernel\\modules\\ZSlider\\templates\\index.tpl',
      1 => 1407679433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3261553e2417804e043-46381938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e2417804f460_96796938',
  'variables' => 
  array (
    'mod_vars' => 0,
    'mod_tmpl_url' => 0,
    'slider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e2417804f460_96796938')) {function content_53e2417804f460_96796938($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["mod_tmpl_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['mod_vars']->value['templates_url'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["mod_tmpl_dir"] = new Smarty_variable($_smarty_tpl->tpl_vars['mod_vars']->value['templates_dir'], null, 0);?>

<!-- ZSlider client styles -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/css/nivo-slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/css/zslider.css">

<!-- ZSlider client modules -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mod_tmpl_url']->value;?>
/js/jquery.nivo.slider.pack.js"></script>


<script type="text/javascript">
	$(window).load(function() {
	    $('#zslider').nivoSlider({
	    	effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
		    slices: 15,                     // For slice animations
		    boxCols: 8,                     // For box animations
		    boxRows: 4,                     // For box animations
		    animSpeed: 500,                 // Slide transition speed
		    pauseTime: 5000,                // How long each slide will show
		    startSlide: 0,                  // Set starting Slide (0 index)
		    directionNav: false,             // Next & Prev navigation
		    controlNav: false,               // 1,2,3... navigation
		    controlNavThumbs: false,        // Use thumbnails for Control Nav
		    pauseOnHover: true,             // Stop animation while hovering
		    manualAdvance: false,           // Force manual transitions
		    prevText: '',               // Prev directionNav text
		    nextText: '',               // Next directionNav text
		    randomStart: false,             // Start on a random slide
		    beforeChange: function(){},     // Triggers before a slide transition
		    afterChange: function(){},      // Triggers after a slide transition
		    slideshowEnd: function(){},     // Triggers after all slides have been shown
		    lastSlide: function(){},        // Triggers when last slide is shown
		    afterLoad: function(){}         // Triggers when slider has loaded
	    });
	});
</script>



<?php if (count($_smarty_tpl->tpl_vars['slider']->value)>0) {?>
<div class="zslider-wrapper">
	<div id="zslider" class="nivoSlider">

	<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value->link;?>
">
		<div class="zslider-descr"><?php echo $_smarty_tpl->tpl_vars['slide']->value->descr;?>
</div>
		<img src="/uploads/<?php echo $_smarty_tpl->tpl_vars['slide']->value->image;?>
" data-thumb="/uploads/<?php echo $_smarty_tpl->tpl_vars['slide']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value->name;?>
" title="" />
	</a>
	<?php } ?>

	</div>
</div>

<?php }?><?php }} ?>
