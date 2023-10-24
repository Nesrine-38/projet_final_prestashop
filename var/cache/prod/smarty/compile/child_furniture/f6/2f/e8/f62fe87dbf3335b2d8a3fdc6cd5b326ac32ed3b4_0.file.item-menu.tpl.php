<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:24:45
  from 'C:\wamp64\www\prestashop\modules\ets_megamenu\views\templates\hook\item-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b78d1922c9_77780528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62fe87dbf3335b2d8a3fdc6cd5b326ac32ed3b4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_megamenu\\views\\templates\\hook\\item-menu.tpl',
      1 => 1698147956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b78d1922c9_77780528 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="mm_menus_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['menu']->value['enabled']) {?>mm_disabled<?php }?>" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
" data-obj="menu">                        
    <div class="mm_menus_li_content">
        <span class="mm_menu_name mm_menu_toggle"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' ));?>
</span>
        <div class="mm_buttons">
            <span class="mm_menu_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this item','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>  
            <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                      
            <span class="mm_menu_edit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                
            <span class="mm_menu_toggle mm_menu_toggle_arrow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span> 
            <div class="mm_add_column btn btn-default" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div> 
        </div> 
    </div>
    <ul class="mm_columns_ul">
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?>                            
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['columns'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMMItemColumn','column'=>$_smarty_tpl->tpl_vars['column']->value),$_smarty_tpl ) );?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                            
        <?php }?>  
    </ul>   
</li><?php }
}
