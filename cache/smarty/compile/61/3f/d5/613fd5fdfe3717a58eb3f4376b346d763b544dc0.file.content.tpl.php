<?php /* Smarty version Smarty-3.1.19, created on 2018-05-12 19:09:54
         compiled from "C:\wamp64\www\9\admin449rbdhxw\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147625af71fe21000d1-92233122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613fd5fdfe3717a58eb3f4376b346d763b544dc0' => 
    array (
      0 => 'C:\\wamp64\\www\\9\\admin449rbdhxw\\themes\\default\\template\\content.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147625af71fe21000d1-92233122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af71fe23af974_94279990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af71fe23af974_94279990')) {function content_5af71fe23af974_94279990($_smarty_tpl) {?>
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
