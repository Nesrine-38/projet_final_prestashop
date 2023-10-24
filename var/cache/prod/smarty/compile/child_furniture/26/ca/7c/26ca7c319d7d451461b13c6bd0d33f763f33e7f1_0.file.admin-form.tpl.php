<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:20:12
  from 'C:\wamp64\www\prestashop\modules\ets_multilayerslider\views\templates\hook\admin-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537c48cd1eba4_16697937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ca7c319d7d451461b13c6bd0d33f763f33e7f1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_multilayerslider\\views\\templates\\hook\\admin-form.tpl',
      1 => 1698147957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537c48cd1eba4_16697937 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var mmBaseAdminUrl = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value,'quotes','UTF-8' ));?>
';
    var mmCloseTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmOpenTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmDeleteTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmDuplicatedTxt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicated','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmEditTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmDeleteTitleTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this item','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmAddMenuTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new slide','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmEditMenuTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit slide','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmAddLayerTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmEditLayerTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmDeleteLayerTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this layer','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmDeleteBlockTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this block','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmEditBlockTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this block','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var mmAddBlockTxt = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new block','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var ets_mls_invalid_file = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image is invalid','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var layertitle ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
';
    var url_base_img ='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base_img']->value,'quotes','UTF-8' ));?>
';
    var width_slider =<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['width_slider']->value ));?>
;
    var height_slider =<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['height_slider']->value ));?>
;
    var id_lang =<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value ));?>
;
<?php echo '</script'; ?>
>
<div class="ets_multilayerslider_wrapper <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layoutDirection']->value,'html','UTF-8' ));?>
-wrapper mls_desktop_size <?php if ($_smarty_tpl->tpl_vars['multiLayoutExist']->value) {?>multi-layout<?php }?> mls-layout-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mls_layout']->value,'html','UTF-8' ));?>
">
    <div class="ets_multilayerslider">
        <div class="mls_slides_actions">
            <div data-title="&#xE8B8;" class="mls_config_button btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            <div class="mls_export_button btn btn-default">
                <i class="fa fa-exchange" data-title="&#xE8D4;"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('mod'=>'ets_multilayerslider','s'=>'Import/Export'),$_smarty_tpl ) );?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['multiLayoutExist']->value) {?>
                <div class="mls_change_mode_dir">
                    <div data-title="&#xE236;" class="mls_change_mode ltr <?php if ($_smarty_tpl->tpl_vars['layoutDirection']->value == 'ets-dir-ltr') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LTR','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                    <div data-title="&#xE237;" class="mls_change_mode rtl <?php if ($_smarty_tpl->tpl_vars['layoutDirection']->value == 'ets-dir-rtl') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RTL','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>                    
                </div>
            <?php }?>            
            
            <div class="msl_screen_type">
                <div data-title="&#xE30B;" class="active msl_screen_desktop" data-size="desktop" data-width="auto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktop','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                <div data-title="&#xE331;" class="msl_screen_tablet" data-size="tablet" data-zoom="0.615" data-width="768"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tablet','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                <div data-title="&#xE325;" class="msl_screen_mobile" data-size="mobile" data-zoom="0.282051" data-width="320"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            </div>
            <div class="mls_players">
                <div data-title="&#xE039;" class="mls_play_slider btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Play slider','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            </div>
        </div>
        <div class="mls_slides">
            <div class="mls_slide_list <?php if ((isset($_smarty_tpl->tpl_vars['mls_configs']->value['ETS_MLS_SLIDER_TYPE']))) {?>mls_slider_type_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['mls_configs']->value['ETS_MLS_SLIDER_TYPE']),'html','UTF-8' ));
}?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['layoutDirection']->value,'html','UTF-8' ));?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSConfigs'),$_smarty_tpl ) );?>
>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLSSlider','layout'=>$_smarty_tpl->tpl_vars['mls_layout']->value),$_smarty_tpl ) );?>

            </div>
            <div data-title="&#xE147;" class="mls_add_slide btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add slide','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
        </div>
    </div>
    <div class="mls_forms mls_overlay hidden">
        <div class="mls_slide_form hidden mls_pop_up">
            <div data-title="&#xE14C;" class="mls_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            <div class="mls_form"></div>
        </div>
        <div class="mls_slide_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['slideForm']->value;?>
</div>
        <div class="mls_layer_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['layerForm']->value;?>
</div>
    </div>
    <div class="mls_overlay hidden">
        <div class="mls_config_form hidden mls_pop_up">
            <div data-title="&#xE14C;" class="mls_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            <div class="mls_config_form_content"><div class="mls_close"></div><?php echo $_smarty_tpl->tpl_vars['configForm']->value;?>
</div>
        </div>
    </div>
    <div class="mls_preview_slider hidden mls_pop_up <?php if ((isset($_smarty_tpl->tpl_vars['mls_configs']->value['ETS_MLS_SLIDER_TYPE']))) {?>mls_preview_type_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['mls_configs']->value['ETS_MLS_SLIDER_TYPE']),'html','UTF-8' ));
}?>">
        <div data-title="&#xE14C;" class="mls_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
        <div class="mls_preview_loading">
            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base_img']->value,'html','UTF-8' ));?>
../ajax-loader.gif" />
        </div>
        <div class="mls_form_preview">
            <div data-title="&#xE14C;" class="mls_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
        </div>
    </div>
    <div class="mls_export_form mls_overlay hidden">
        <div data-title="&#xE14C;" class="mls_close"></div>
        <div class="mls_export mls_pop_up">
            <div data-title="&#xE14C;" class="mls_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
            <div class="mls_export_form_content">
                
                <div class="mls_export_option">
                    <div class="panel-heading">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export slider content','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>

                    </div>
                    <a class="btn btn-default mls_export_slider" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value,'html','UTF-8' ));?>
&exportSlider=1" target="_blank">
                    <i class="fa fa-download" data-title="&#xE2C4;"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export slider','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</a>
                    <p class="mls_export_option_note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export all slider data including slider images, text, custom CSS and configuration','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="mls_import_option">
                    <div class="panel-heading">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import slider data','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>

                    </div>
                    <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value,'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" class="mls_import_option_form">
                        <div class="mls_import_option_updata">
                            <label for="sliderdata"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data package','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</label>
                            <input id="image" type="file" name="sliderdata" id="sliderdata" />
                        </div>
                        <div class="mls_import_option_clean">
                            <input type="checkbox" value="1" id="importoverride" checked="checked" name="importoverride" />
                            <label for="importoverride"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all slides before importing','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</label>
                        </div>
                        <div class="mls_import_option_button">
                            <input type="hidden" name="importslider" value="1" />
                            <div class="mls_import_slider_loading"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base_img']->value,'html','UTF-8' ));?>
../loader.gif" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Importing data','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
</div>
                            <div class="mls_import_slider_submit">
                                <i class="fa fa-compress" data-title="&#xE864;"></i>
                                <input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import slider','mod'=>'ets_multilayerslider'),$_smarty_tpl ) );?>
" class="btn btn-default mls_import_slider"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
