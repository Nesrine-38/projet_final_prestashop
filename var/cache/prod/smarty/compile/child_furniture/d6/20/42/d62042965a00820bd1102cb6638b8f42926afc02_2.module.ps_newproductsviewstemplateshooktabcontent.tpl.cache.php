<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:07:02
  from 'module:ps_newproductsviewstemplateshooktabcontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c176046970_63636943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62042965a00820bd1102cb6638b8f42926afc02' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshooktabcontent.tpl',
      1 => 1698147972,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6537c176046970_63636943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14815650896537c17602f7a1_19729539';
?>
<div id="new_products" class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <div class="products product_list">
    <?php $_smarty_tpl->_assignInScope('inp', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['inp']->value%2 == 0) {?>    
            <div class="group_item_products">
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('inp', $_smarty_tpl->tpl_vars['inp']->value+1);?>
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['inp']->value%2 == 0) {?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['inp']->value%2 != 0) {?>
            </div>
    <?php }?>
  </div>
</div>
<?php }
}
