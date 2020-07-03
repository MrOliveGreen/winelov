{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{include file='_wine_topmenu.tpl'}

<section class="wide-image country-banner" data-parallax="scroll" data-image-src="{$region['img_URL']}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row">
                        <div class="country-detail">
                            <div class="country-name">
                                <p class="region-title">Region</p>
                                <p class="region-content">{$region['name']}</p>
                                <div class="winery-country winery-detail-country">
                                    {assign var="splits" value="?"|explode:$region['country_id']}
                                    <img width="25px" height="25px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$splits[0]}-flag-round-xs.png">
                                    <p><a href="{$system['system_url']}/country/{$splits[0]}">&nbsp;{$splits[0]}&nbsp;</a></p>
                                    {if $splits[1]}
                                    <p>·</p>
                                    <p><a href="{$system['system_url']}/region/{$splits[1]}">&nbsp;{$splits[1]}</a></p>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{if $region['content']}
<section class="testimonial-section section-padding border-top region-guide">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">A Guide to the {$region['name']} Region</div>
        </div>
        <div class="region-guide-content">
            <p>{textformat wrap=40}{$region['content']}{/textformat}</p>
        </div>
    </div>
</section>
{/if}
{if $related_wines}
<section class="testimonial-section section-padding border-top wide-image country-best">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">Top rated wines in {$region['name']}</div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                {foreach $related_wines as $wines}
                <div class="swiper-slide">
                    <a href="{$system['system_url']}/detail/{$wines['Id_item']}">
                        <div class="up-detail">
                            <div class="col-lg-5">
                                {if $wines['rating']}
                                <div class="rating-num"><h2>{$wines['rating']}</h2></div>
                                <div class="rating-detail" id="rating_de{$wines['Id_item']}" aria-label="{$wines['rating']}"></div>
                                <script>
                                    var rating = $('#rating_de{$wines['Id_item']}').attr('aria-label');
                                    $('#rating_de{$wines['Id_item']}').rateit({
                                        readonly: true,
                                        step: 0.1,
                                        value: rating,
                                    });
                                </script>
                                <div class="rating-count-num">630 ratings</div>
                                {/if}
                            </div>
                            <div class="col-lg-7">
                                <img class="wine-detail-image" src="{$wines['image_URL']}"/>
                            </div>
                        </div>
                        <div class="down-detail">
                            <p class="wine-detail-description">{$wines['winery']}</p>
                            <h4 class="wine-title">{$wines['name']}</h4>
                            {if $wines['region'] && $wines['country']}
                            <div class="wine-detail-region"><img width="14px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$wines['country']}-flag-round-xs.png"/>{$wines['region']} - {$wines['country']}</div>
                            {/if}
                        </div>
                    </a>
                </div>
                {/foreach}
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
    </div>
</section>
{/if}







<section>
    <div class="container">
        <div class="row country-wine-search">
            <div class="col-lg-12">








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
