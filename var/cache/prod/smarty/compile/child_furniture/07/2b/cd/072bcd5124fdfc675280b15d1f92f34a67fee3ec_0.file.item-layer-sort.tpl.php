<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:15
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\item-layer-sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48fbabe35_36455790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072bcd5124fdfc675280b15d1f92f34a67fee3ec' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\item-layer-sort.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48fbabe35_36455790 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['layer']->value)) && $_smarty_tpl->tpl_vars['layer']->value) {?>
    <li data-id-layer="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['id_layer'] ));?>
" class="mls_layers_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['id_layer'] ));?>
" data-obj="layer">
        <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type'] == 'image') {?>
            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['link_image'],'html','UTF-8' ));?>
" width="40px" />
        <?php } elseif (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['layer']->value['content_layer'] ?: '') )),'html','UTF-8' ))) {?>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['layer']->value['content_layer'] ?: ''),25,"..." )),'html','UTF-8' ));?>

        <?php } else { ?>
            #<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['layer']->value['id_layer'] ));?>

        <?php }?>
        <span data-title="&#xE14D;" class="mls_layer_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
        <span data-title="&#xE872;" class="mls_layer_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
        <span data-title="&#xE150;" class="mls_layer_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</span>
    </li>
<?php }
}
}
