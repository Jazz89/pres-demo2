<?php /* Smarty version Smarty-3.1.19, created on 2018-05-12 16:16:47
         compiled from "C:\wamp64\www\9\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255695af7136fd67a93-57865478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ae3e2d5a96e1795940fab306de0e567d5ba6005' => 
    array (
      0 => 'C:\\wamp64\\www\\9\\admin\\themes\\default\\template\\content.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255695af7136fd67a93-57865478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af71370b3d2a4_18362896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af71370b3d2a4_18362896')) {function content_5af71370b3d2a4_18362896($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
