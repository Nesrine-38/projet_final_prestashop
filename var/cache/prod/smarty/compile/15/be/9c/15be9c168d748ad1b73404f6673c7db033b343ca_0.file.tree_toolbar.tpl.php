<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:24:41
  from 'C:\wamp64\www\prestashop\admin277gopvmghypcv494mc\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b789c088a7_87517168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15be9c168d748ad1b73404f6673c7db033b343ca' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin277gopvmghypcv494mc\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1697982382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b789c088a7_87517168 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
