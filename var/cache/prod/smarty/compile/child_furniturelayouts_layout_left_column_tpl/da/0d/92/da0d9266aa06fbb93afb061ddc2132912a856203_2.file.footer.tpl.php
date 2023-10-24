<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:38:21
  from 'C:\wamp64\www\prestashop\themes\furniture\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537babd0d8b69_08975905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0d9266aa06fbb93afb061ddc2132912a856203' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\_partials\\footer.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537babd0d8b69_08975905 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">
  <div class="container">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybcCustom1'),$_smarty_tpl ) );?>

        <div class="footer_top">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        </div> 
  </div>
  <div class="footer_after">
      <div class="container">
       <div class="row">
          <div class="ybc_coppyright col-xs-12 col-md-6">
             <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT']) {?>
                <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'];?>

             <?php }?>
          </div>
          <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO']) {?>
             <div class="payment_footer col-xs-12 col-md-6">
                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" />
             </div>
          <?php }?>
        </div>
      </div>
  </div>
  <div class="footer_before">
      <div class="container">
          <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

                      </div>
      </div>
  </div>
  <div class="scroll_top"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TOP','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>
</div>
<?php }
}
