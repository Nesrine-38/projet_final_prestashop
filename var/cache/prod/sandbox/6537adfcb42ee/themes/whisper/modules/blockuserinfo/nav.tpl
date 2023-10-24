<!-- Block user information module NAV  -->
<div class="header_user_info animated fadeIn ybc_delay06">
	{if $is_logged}
        <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
            <span><span class="hidden_mobile">{$cookie->customer_firstname} </span>{$cookie->customer_lastname}</span>
        </a>
		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Logout' mod='blockuserinfo'}
		</a>
	{else}
		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			{l s='Login' mod='blockuserinfo'}
		</a>
	{/if}
</div>
<!-- /Block usmodule NAV -->
