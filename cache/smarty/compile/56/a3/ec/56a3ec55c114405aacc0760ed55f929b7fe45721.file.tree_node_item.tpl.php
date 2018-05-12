<?php /* Smarty version Smarty-3.1.19, created on 2018-05-12 16:59:10
         compiled from "C:\wamp64\www\9\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89505af71d5eaa5f14-59107898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a3ec55c114405aacc0760ed55f929b7fe45721' => 
    array (
      0 => 'C:\\wamp64\\www\\9\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89505af71d5eaa5f14-59107898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af71d5ec86705_22218547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af71d5ec86705_22218547')) {function content_5af71d5ec86705_22218547($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
