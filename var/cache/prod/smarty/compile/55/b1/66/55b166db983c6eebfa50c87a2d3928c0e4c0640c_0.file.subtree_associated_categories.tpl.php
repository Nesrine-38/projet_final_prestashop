<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:26:26
  from 'C:\wamp64\www\prestashop\admin277gopvmghypcv494mc\themes\default\template\helpers\tree\subtree_associated_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b7f20812d7_40628547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55b166db983c6eebfa50c87a2d3928c0e4c0640c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin277gopvmghypcv494mc\\themes\\default\\template\\helpers\\tree\\subtree_associated_categories.tpl',
      1 => 1697982382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b7f20812d7_40628547 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
<?php if ((isset($_smarty_tpl->tpl_vars['selected_categories']->value)) && !empty($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('imploded_selected_categories', implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value));?>
	var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').tree('collapseAll');
	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').find(":input").each(
		function()
		{
			if ($.inArray($(this).val(), selected_categories) != -1)
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
				$(this).parents("ul.tree").each(
					function()
					{
						$(this).children().children().children(".icon-folder-close")
							.removeClass("icon-folder-close")
							.addClass("icon-folder-open");
						$(this).show();
					}
				);
			}
		}
	);
<?php }
echo '</script'; ?>
>
<?php }
}
