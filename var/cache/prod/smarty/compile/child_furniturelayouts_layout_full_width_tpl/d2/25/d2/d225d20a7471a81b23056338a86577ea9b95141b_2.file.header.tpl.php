<?php
/* Smarty version 4.3.1, created on 2023-10-24 15:58:09
  from 'C:\wamp64\www\prestashop\themes\furniture\templates\checkout\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537cd7135b3f4_25499801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd225d20a7471a81b23056338a86577ea9b95141b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\furniture\\templates\\checkout\\_partials\\header.tpl',
      1 => 1698147973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6537cd7135b3f4_25499801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="header_content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780705296537cd712cd223_18250649', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9555268756537cd71325b73_90414999', 'header_top');
?>

</div>

<?php }
/* {block 'header_nav'} */
class Block_1780705296537cd712cd223_18250649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1780705296537cd712cd223_18250649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
        <div class="nav">
            <div class="left-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

              <div id="ybc_social_block" class="ybc_social_config">
            	<ul>
            		<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_FACEBOOK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_FACEBOOK']) {?>
            			<li class="tc_facebook">
            				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_FACEBOOK'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            					<span><i class="fa fa-facebook"></i></span>
            				</a>
            			</li>
            		<?php }?>
            		<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_TWITTER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_TWITTER']) {?>
            			<li class="tc_twitter">
            				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_TWITTER'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            					<span><i class="fa fa-twitter"></i></span>
            				</a>
            			</li>
            		<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_RSS'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_RSS']) {?>
                    	<li class="tc_rss">
            				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_RSS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            					<span><i class="fa fa-rss"></i></span>
            				</a>
            			</li>
                    <?php }?>
            		<?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_GOOGLE_PLUS'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_GOOGLE_PLUS']) {?>
            			
                        <li class="tc_google-plus">
                    		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_GOOGLE_PLUS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="publisher">
                    			<span><i class="fa fa-google-plus"></i></span>
                    		</a>
                    	</li>
            		<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_INSTAGRAM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_INSTAGRAM']) {?>
                    	<li class="tc_instagram">
                    		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_INSTAGRAM'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    			<span><i class="fa fa-instagram"></i></span>
                    		</a>
                    	</li>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_YOUTUBE'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_YOUTUBE']) {?>
            			<li class="tc_youtube">
                    		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_YOUTUBE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    			<span><i class="fa fa-youtube-play"></i></span>
                    		</a>
                    	</li>
            		<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_PINTEREST'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_PINTEREST']) {?>
                    	<li class="tc_pinterest">
                    		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_PINTEREST'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    			<span><i class="fa fa-pinterest-p"></i></span>
                    		</a>
                    	</li>
                    <?php }?>
                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_VIMEO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_VIMEO']) {?>
                    	<li class="tc_vimeo">
                    		<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_VIMEO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    			<span><i class="fa fa-vimeo-square"></i></span>
                    		</a>
                    	</li>
                    <?php }?>
                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_LINKEDIN'])) && $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_LINKEDIN']) {?>
                    	<li class="tc_linkedin">
            				<a class="_blank" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['BLOCKSOCIAL_LINKEDIN'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            					<span><i class="fa fa-linkedin" ></i></span>
            				</a>
            			</li>
                    <?php }?>
            	</ul>
             </div>
            </div>
            <div class="right-nav">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_9555268756537cd71325b73_90414999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_9555268756537cd71325b73_90414999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="mobile_logo">
    <div class="" id="_mobile_logo">
      <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
      </a>
    </div>
  </div>
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['base_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['logo'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="header_hook_top">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

            <span class="hidden-lg-up mobile closed" id="menu-icon">
              <i class="icon_menu"></i>
            </span>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
