<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:37:56
  from 'C:\wamp64\www\prestashop\modules\ets_purchasetogether\views\templates\hook\product_extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537baa482cf78_80831222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b4dccd0e7d2c30acd0890a2ae39f5dbfb070cd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_purchasetogether\\views\\templates\\hook\\product_extra.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537baa482cf78_80831222 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="product-purchasetogether" class="<?php if ((isset($_smarty_tpl->tpl_vars['is17']->value)) && !$_smarty_tpl->tpl_vars['is17']->value) {?>panel product-tab<?php }?>" data-url-ajax="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_ajax']->value,'html','UTF-8' ));?>
">
    <input name="submitted_tabs[]" value="PurchaseTogether" type="hidden" />
    <?php if ((isset($_smarty_tpl->tpl_vars['is17']->value)) && $_smarty_tpl->tpl_vars['is17']->value) {?><input name="id_product" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->id ));?>
" type="hidden" /><?php }?>
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Frequently purchased together','mod'=>'ets_purchasetogether'),$_smarty_tpl ) );?>
</h3>
    <div class="form-group">
		<label class="control-label col-lg-3" for="product_autocomplete_input_ets">
			<span class="label-tooltip" data-toggle="tooltip"
			title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can indicate existing products as purchase for this product.','mod'=>'ets_purchasetogether'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Frequently purchased together products','mod'=>'ets_purchasetogether'),$_smarty_tpl ) );?>

			</span>
		</label>
		<div class="col-lg-9">
			<input type="hidden" name="inputPurchaseTogether" id="inputPurchaseTogether" value="<?php if ($_smarty_tpl->tpl_vars['purchase_togethers']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product'],'html','UTF-8' ));?>
-<?php if ($_smarty_tpl->tpl_vars['purchase']->value['id_product_attribute']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product_attribute'],'html','UTF-8' ));
} else { ?>0<?php }?>,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" />
			<div id="ajax_choose_product">
				<div class="input-group">
					<input type="text" id="product_autocomplete_input_ets" class="ac_input form-control autocomplete search m-b-1 ui-autocomplete-input" name="product_autocomplete_input_ets" autocomplete="off" />
					<?php if ((isset($_smarty_tpl->tpl_vars['is17']->value)) && !$_smarty_tpl->tpl_vars['is17']->value) {?><span class="input-group-addon"><i class="icon-search"></i></span><?php }?>
				</div>
                <div class="result-ets">
                    <ul class="item_ets"></ul>
                </div>
			</div>
			<div id="divPurchaseTogether">
			<?php if ($_smarty_tpl->tpl_vars['purchase_togethers']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
?>
				<div class="form-control-static">
					<button type="button" class="btn btn-default delPurchaseTogether" data-id-product="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product'] ));?>
" data-id-product-attribute="<?php if ($_smarty_tpl->tpl_vars['purchase']->value['id_product_attribute']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product_attribute'] ));
} else { ?>0<?php }?>" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product'] ));?>
">
						<span class="purchase_icon_close"></span>
					</button>
                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value['image']) {?><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['image'],'html','UTF-8' ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['name'],'html','UTF-8' ));?>
" width="80px" height="auto" /><?php }?>
					<span class="productName"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['id_product'] ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value['name'],'html','UTF-8' ));
if (!empty($_smarty_tpl->tpl_vars['purchase']->value['ref'])) {?>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(ref: %s)','sprintf'=>$_smarty_tpl->tpl_vars['purchase']->value['ref']),$_smarty_tpl ) );
}?></span>
				</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			</div>
		</div>
	</div>
</div><?php }
}
