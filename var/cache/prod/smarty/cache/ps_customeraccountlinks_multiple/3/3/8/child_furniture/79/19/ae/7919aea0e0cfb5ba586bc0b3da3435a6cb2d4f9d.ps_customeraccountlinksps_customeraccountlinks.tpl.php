<?php
/* Smarty version 4.3.1, created on 2023-10-24 16:04:31
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6537ceef886180_00459192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1698147972,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6537ceef886180_00459192 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="block_myaccount_infos" class="links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/mon-compte" rel="nofollow">
      My account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">My account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
         <i class="material-icons add">expand_more</i>
         <i class="material-icons remove">expand_less</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
        <li>
            <a href="http://localhost/prestashop/mon-compte" title="my account"> My account</a>
        </li>
            <li>
          <a href="http://localhost/prestashop/identite" title="Informations personnelles" rel="nofollow">
            Informations personnelles
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/historique-commandes" title="Commandes" rel="nofollow">
            Commandes
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/avoirs" title="Avoirs" rel="nofollow">
            Avoirs
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/adresses" title="Adresses" rel="nofollow">
            Adresses
          </a>
        </li>
       
    	</ul>
</div>
<?php }
}
