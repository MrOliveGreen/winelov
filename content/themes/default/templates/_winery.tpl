{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{include file='_wine_topmenu.tpl'}

{*<section class="wide-image country-banner" data-parallax="scroll" data-image-src="{if $winery['Logo_URL']}{$winery['Logo_URL']}{else}//images.vivino.com/regions/backgrounds/sbzA7h1ITnaHABaVqWJ4CA.jpg{/if}">*}
<section class="wide-image country-banner" data-parallax="scroll" data-image-src="//images.vivino.com/regions/backgrounds/sbzA7h1ITnaHABaVqWJ4CA.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row">
                        <div class="country-detail">
                            <div class="country-name">
                                <p class="region-title">Winery</p>
                                <p class="region-content">{$winery['Name']}</p>
                                <div class="winery-country winery-detail-country">
                                    <img width="25px" height="25px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$winery['Country']}-flag-round-xs.png">
                                    <p><a href="{$system['system_url']}/country/{$winery['Country']}">&nbsp;{$winery['Country']}&nbsp;</a></p>
                                    <p>·</p>
                                    <p><a href="{$system['system_url']}/region/{$winery['Region']}">&nbsp;{$winery['Region']}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="winery-rating">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area winery-rating-part">
                    <div class="row">
                        <div class="winery-average-rating">
                            <p>Average Rating</p>
                            <p><span class="black-letter">4,0</span>&nbsp;(18952 Ratings)</p>
                        </div>
                        <div class="winery-average-rating">
                            <p>Wines</p>
                            <p><span class="black-letter">11</span></p>
                        </div>
                    </div>
                    {if $winery['business_name']}
                    <div class="row">
                        <p class="winery-maker">Winemaker: {$winery['business_name']}</p>
                        <p class="winery-description">{$winery['descrip+tion']|replace:'\r':''}</p>
                    </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row country-wine-search">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row winery-contact-part">
                        <h2 class="search-title black-letter winery-contact-title">Contact {$winery['Name']}</h2>
                        <div class="col-lg-4 winery-contact-address">
                            <p>{$winery['street']}</p>
                            <p>{$winery['city']}{if $winery['state']}, {$winery['state']}{/if}</p>
                            <p>{$winery['zip']}</p>
                            <p><a href="{$system['system_url']}/country/{$winery['Country']}">{$winery['Country']}</a></p>
                        </div>
                        <div class="col-lg-4 winery-contact-address">
                            <p>{if $winery['website']}<a href="{$winery['website']}">{$winery['email']}</a>{else}{$winery['email']}{/if}</p>
                            {if $winery['facebook']}
                            <p><a href="{$winery['facebook']}">{$winery['business_name']}</a></p>
                            {/if}
                        </div>
                        <div class="col-lg-4 winery-contact-address">
                            {if $winery['instagram'] && $winery['instagram1']}
                                <p><a href="{$winery['instagram1']}">{$winery['instagram']}</a></p>
                            {/if}
                            {if $winery['twitter'] && $winery['Twitter1']}
                                <p><a href="{$winery['Twitter1']}">{$winery['twitter']}</a></p>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row country-wine-search">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row"><h2 class="search-title black-letter">Find more great wines from France</h2></div>
                    <div class="row wine-searchbar">
                        <div class="wine-type">
                            <select>
                                <option value="Red Wine">Red Wine</option>
                                <option value="White Wine">White Wine</option>
                                <option value="Sparkling Wine">Sparkling Wine</option>
                            </select>
                        </div>
                        <div class="slider_div price-range">
                            <p>Price Range</p>
                            <input id="price" type="text" class="js-range-slider" value=""/>
                        </div>
                        <div class="slider_div rating-range">
                            <p>Rating</p>
                            <input id="rating" type="text" class="js-range-slider" value=""/>
                        </div>
                        <div class="slider_div show-wine">
                            <a class="btn btn-show-wine">Show Wines</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file='_footer.tpl'}