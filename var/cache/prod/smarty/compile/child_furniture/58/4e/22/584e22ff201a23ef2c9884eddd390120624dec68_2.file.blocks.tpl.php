<?php
/* Smarty version 4.3.1, created on 2023-10-24 14:38:20
  from 'C:\wamp64\www\prestashop\themes\furniture\modules\ybc_blog_free\views\templates\hook\blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537babc7abeb2_11017417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '584e22ff201a23ef2c9884eddd390120624dec68' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\modules\\ybc_blog_free\\views\\templates\\hook\\blocks.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537babc7abeb2_11017417 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'ybc_blog_free_page') {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_CATEGORIES_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_CATEGORIES_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogCategoriesBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_SEARCH_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_SEARCH_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogSearchBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_NEWS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_NEWS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_POST_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_POST_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_TAGS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_TAGS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogTagsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock'),$_smarty_tpl ) );?>

    <?php }
}
}
}
