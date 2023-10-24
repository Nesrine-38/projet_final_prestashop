<div class="ybc-newsletter-popup{if $YBC_NEWSLETTER_MOBILE_HIDE} ynp-mobile-hide{/if} {$YBC_NEWSLETTER_TEMPLATE|escape:'html':'UTF-8'}">
    <div class="ynp-div-l1">
        <div class="ynp-div-l2">
            <div class="ynp-div-l3">                
                <form class="ynp-form" action="{$YBC_NEWSLETTER_ACTION|escape:'html':'UTF-8'}" method="post">
                    <span class="ynp-close button" title="{l s='Close popup' mod='ybc_newsletter'}">{l s='Close' mod='ybc_newsletter'}</span>
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="{$YBC_NEWSLETTER_LOADING_IMG|escape:'html':'UTF-8'}" alt="{l s='Loading...' mod='ybc_newsletter'}" />
                        </div>
                        <div  class="ynp-inner-wrapper">
                            {$YBC_NEWSLETTER_POPUP_CONTENT nofilter}
                        </div>
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div>