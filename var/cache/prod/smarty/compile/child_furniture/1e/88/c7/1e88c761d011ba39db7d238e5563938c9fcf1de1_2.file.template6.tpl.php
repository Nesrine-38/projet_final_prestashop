<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:20:50
  from 'C:\wamp64\www\prestashop\modules\ybc_newsletter\views\templates\hook\template6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537b6a2290c24_28898679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e88c761d011ba39db7d238e5563938c9fcf1de1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_newsletter\\views\\templates\\hook\\template6.tpl',
      1 => 1698147965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537b6a2290c24_28898679 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="s6 ybc-newsletter-popup<?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_MOBILE_HIDE']->value) {?> ynp-mobile-hide<?php }?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-mail-wrapper">
    <div class="ynp-div-l2 ybc_animation">
        <div class="ynp-div-l3" >
            <div class="ybc_nlt_content ybc_animation">
                <span id="ynp-close" class="ynp-close button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close popup','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value != '') {?>
                    <div class="img_bg">
                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />
                        <div class="ynp-input-row">
                            <label for="ynp-email-input"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: ','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" id="ynp-email-input" class="ynp-email-input" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                            <input class="button ynp-submit" type="submit" name="ynpSubmit" id="ynp-submit" value="Subscribe" />
                        </div>
                    </div>
                <?php }?>
                <form class="ynp-form ynp-form-popup" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_ACTION']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOADING_IMG']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                        </div>                            
                        <div class="ynp-inner-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value) {?>
                                <div class="header_logo_center">
                                    <div class="nlt_header_logo_center">
                                        <div class="nlt_header_logo_table_cell">
                                            <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />    
                                        </div>
                                    </div>                                
                                </div>
                            <?php }?>
                            <div class="ynp_content_6">
                                <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value != '') {?>
                                    <h4><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_CONTENT']->value;?>

                            </div>              
                        </div>
                        <div class="ynp-input-checkbox">
                            <input type="checkbox" id="ynp-input-dont-show" class="ynp-input-dont-show" name="ynpcheckbox" />
                            <label for="ynp-input-dont-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this again','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</label>
                        </div> 
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div><?php }
}
