<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:24:42
  from 'C:\wamp64\www\prestashop\admin277gopvmghypcv494mc\themes\default\template\helpers\tree\tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b78a4bf440_86174132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3be768d11171c40a7c8918255d2ea225ab77c2e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin277gopvmghypcv494mc\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1697982382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b78a4bf440_86174132 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
