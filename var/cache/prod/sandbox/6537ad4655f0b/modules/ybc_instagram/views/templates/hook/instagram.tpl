{*
* 2007-2022 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses.
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please, contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<script type="text/javascript">
    $(".ybc_instagram_fancy").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
</script>
<div class="ybc_instagram block_instagram">
    <h4 class="title_block_home">{l s='Instagram' mod='ybc_instagram'}</h4>
    {if $IMGs}
        <ul class="instagram_list_img">
            {foreach from=$IMGs item='img'}
                <li class="{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1}zoomIn wow {/if}instagram_item_img col-xs-3 col-sm-2 col-lg-2">
                    <a class="ybc_instagram_fancy" href="{$img.standard_resolution|escape:'html':'UTF-8'}">
                        <img {if $img.caption}alt="{$img.caption|escape:'html':'UTF-8'}"{/if} src="{$img.thumbnail|escape:'html':'UTF-8'}" alt=""/>
                    </a>
                </li>
            {/foreach}
        </ul>
    {/if}
</div>