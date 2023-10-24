<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:03:47
  from 'C:\wamp64\www\prestashop\modules\blockwishlist\blockwishlist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c0b315f847_99674388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7623142ec8268a36a6e9bbe6d3ec25f646530d47' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1698147953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c0b315f847_99674388 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['isQuickview']->value)) && !empty($_smarty_tpl->tpl_vars['isQuickview']->value)) {?>
    <button class="wishlist-button-add wishlist-button-product quickview-button"
            onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
', 1,'<?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && is_array($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>');
                    return false;">
        <i class="material-icons">favorite_border</i>
    </button>
<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && is_array($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
        <div class="wishlist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'wl', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['total'];
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] : null)) {?>
                    <a class="wishlist_button_list" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" data-placement="bottom">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </a>
                    <div hidden class="popover-content">
                    <table class="table" border="1">
                    <tbody>
                <?php }?>
                <tr title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
', 1, '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');">
                    <td>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to %s','sprintf'=>array($_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

                    </td>
                </tr>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] : null)) {?>
                    </tbody>
                    </table>
                    </div>
                <?php }?>
                <?php
}
if ($_smarty_tpl->tpl_vars['wishlist']->do_else) {
?>
                <a href="#" id="wishlist_button_nopop" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <div class="wishlist">
            <a class="addToWishlist wishlistProd_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" href="#" data-rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] )), ENT_QUOTES, 'UTF-8');?>
', 1); return false;">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>
        </div>
    <?php }
}
}
}
