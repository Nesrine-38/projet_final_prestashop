<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:38:07
  from 'C:\wamp64\www\prestashop\themes\furniture\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537baafbaff22_29047540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7db5e152d375ca0a80188bfbe562223eafa421a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\catalog\\listing\\category.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537baafbaff22_29047540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4502962486537baafafd5d7_43227425', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_4502962486537baafafd5d7_43227425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_4502962486537baafafd5d7_43227425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_NAME_CAT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_NAME_CAT'] == 1) {?>
        <h1 class="h1 title_category"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1 || (isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'] == 1) {?>    
        <div class="block-category card card-block">
            <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1) {?>
                <div class="category-cover">
                  <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'] == 1) {?> 
          <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
          <?php }?>
          <?php }?>
        </div>
    <?php }
}
}
/* {/block 'product_list_header'} */
}
