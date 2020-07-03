{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{include file='_wine_topmenu.tpl'}

<section class="search-result">
    <div class="container">
        <h4 class="row search-result-title ">Showing&nbsp;<span>{if $sort!='type'}wines{/if}{$title}</span></h4>
    </div>
</section>
<section class="search-wine">
    <div class="container">
        <div class="row">
            <div class="search-selected">
                <div class="selected-title"><h5>{$sub_title}</h5></div>
                <div class="selected-list">
                    {if $detail && $sort!='type'}
                        <div class="selected-list-detail" id="list-{$detail|replace:' ':'-'}"><a>&times; {$detail}</a></div>
                    {/if}
                </div>
            </div>
            <div class="col-lg-3 search-types js_sticky-sidebar">
                <div class="wine-types row">
                    <h4 class="">Wine Types</h4>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'Red'}is-selected{/if}">Red</div></div>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'White'}is-selected{/if}">White</div></div>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'Sparkling'}is-selected{/if}">Sparkling</div></div>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'Rose'}is-selected{/if}">Rose</div></div>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'Dessert'}is-selected{/if}">Dessert</div></div>
                    <div class="col-lg-4"><div class="type-button {if $type && $type == 'Port'}is-selected{/if}">Port</div></div>
                </div>
                <div class="wine-types row">
                    <h4 class="black-letter">Price Range</h4>
                    <div class="slider_div price-range explore-range">
                        <input id="price-type" type="text" class="js-range-slider" value=""/>
                        <script>
                            var custom_values = [];
                            for (var i = 0; i<=50 ; i++) {
                                custom_values.push(i);
                            }
                            for (i = 55; i<=100 ; i+=5) {
                                custom_values.push(i);
                            }
                            for (i = 110; i<=500 ; i+=10) {
                                custom_values.push(i);
                            }
                            $("#price-type").ionRangeSlider({
                                type: "double",
                                grid: false,
                                {if $min}
                                from: custom_values.indexOf({$min}),
                                to: custom_values.indexOf({$max}),
                                {else}
                                from: custom_values.indexOf(7),
                                to: custom_values.indexOf(30),
                                {/if}
                                values: custom_values,
                                hide_from_to: false,
                                hide_min_max: true,
                                prefix: "€",
                                max_postfix: "+",
                                onFinish: function () {
                                    myfunction.get_wines(1);
                                },
                            });
                        </script>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="black-letter">Winelov User Rating</h4>
                    <div class="rating-type {if $rating && $rating == 4.5}is-selected {/if}rating-4.5">
                        <input type="radio" name="rating" id="4.5" class="radioBtn" value="4.5"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort1"></div>
                        <div><span class="black-letter">4.5</span>&nbsp;&nbsp;Rare</div>
                    </div>
                    <div class="rating-type {if $rating && $rating == 4}is-selected {/if}rating-4.0">
                        <input type="radio" name="rating" id="4.0" class="radioBtn" value="4.0"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort2"></div>
                        <div><span class="black-letter">4.0</span>&nbsp;&nbsp;Very good stuff</div>
                    </div>
                    <div class="rating-type {if !$rating || $rating == 3.5}is-selected {/if}rating-3.5">
                        <input type="radio" name="rating" id="3.5" class="radioBtn" value="3.5"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort3"></div>
                        <div><span class="black-letter">3.5</span>&nbsp;&nbsp;Good stuff</div>
                    </div>
                    <div class="rating-type {if $rating && $rating == 3}is-selected {/if}rating-3.0">
                        <input type="radio" name="rating" id="3.0" class="radioBtn" value="3.0"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort4"></div>
                        <div><span class="black-letter">3.0</span>&nbsp;&nbsp;Average</div>
                    </div>
                    <div class="rating-type {if $rating && $rating == 1}is-selected {/if}rating-anything">
                        <input type="radio" name="rating" id="1" class="radioBtn" value="1"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div class="black-letter">Any rating</div>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="grape-title black-letter">Grapes</h4>
                    <div class="clear-lists" aria-label="grape"><a>Clear filters</a></div>
                    <input class="search-lists" name="grapes" id="grape-input" type="search" placeholder="Search grapes" value="" style="background-image: url({$system['system_url']}/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        {if $sort == 'grape'}
                            <div class="grape-button is-selected">{$detail}</div>
                        {/if}
                        <div class="grape-button">Cabernet Franc</div>
                        <div class="grape-button">Cabernet Sauvignon</div>
                        <div class="grape-button">Chardonnay</div>
                        <div class="grape-button">Grenache</div>
                        <div class="grape-button">Malbec</div>
                        <div class="grape-button">Merlot</div>
                        <div class="grape-button">Pinot Noir</div>
                        <div class="grape-button">Riesling</div>
                        <div class="grape-button">Sauvignon Blanc</div>
                        <div class="grape-button">Shiraz/Syrah</div>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="grape-title black-letter">Regions</h4>
                    <div class="clear-lists" aria-label="region"><a>Clear filters</a></div>
                    <input class="search-lists" name="regions" id="region-input" type="search" placeholder="Search grapes" value="" style="background-image: url({$system['system_url']}/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        {if $sort == 'region'}
                        <div class="region-button is-selected">{$detail}</div>
                        {/if}
                        <div class="region-button">Bordeaux</div>
                        <div class="region-button">Bourgogne</div>
                        <div class="region-button">Napa Valley</div>
                        <div class="region-button">Piemonte</div>
                        <div class="region-button">Rhone Valley</div>
                        <div class="region-button">Toscana</div>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="grape-title black-letter">Countries</h4>
                    <div class="clear-lists" aria-label="country"><a>Clear filters</a></div>
                    <input class="search-lists" name="countries" id="country-input" type="search" placeholder="Search countries" value="" style="background-image: url({$system['system_url']}/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        {if $sort == 'country'}
                            <div class="country-button is-selected">{$detail}</div>
                        {/if}
                        <div class="country-button">Argentina</div>
                        <div class="country-button">Australia</div>
                        <div class="country-button">Austria</div>
                        <div class="country-button">Chile</div>
                        <div class="country-button">France</div>
                        <div class="country-button">Germany</div>
                        <div class="country-button">Italy</div>
                        <div class="country-button">Portugal</div>
                        <div class="country-button">Spain</div>
                        <div class="country-button">United States</div>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="grape-title black-letter">Wine styles</h4>
                    <div class="clear-lists" aria-label="style"><a>Clear filters</a></div>
                    <input class="search-lists" name="styles" id="style-input" type="search" placeholder="Search wine styles" value="" style="background-image: url({$system['system_url']}/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        {if $sort == 'style'}
                            <div class="style-button is-selected">{$detail}</div>
                        {/if}
                        <div class="style-button">Argentinian Malbec</div>
                        <div class="style-button">Californian Cabernet Sauvignon</div>
                        <div class="style-button">Central Italy Red</div>
                        <div class="style-button">Spanish Red</div>
                        <div class="style-button">Spanish Rioja Red</div>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="grape-title black-letter">Food pairings</h4>
                    <div class="clear-lists" aria-label="pairing"><a>Clear filters</a></div>
                    <input class="search-lists" name="pairings" id="pairing-input" type="search" placeholder="Search food pairings" value="" style="background-image: url({$system['system_url']}/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        {if $sort == 'pairing'}
                            <div class="pairing-button is-selected">{$detail}</div>
                        {/if}
                        <div class="pairing-button">Poultry</div>
                        <div class="pairing-button">Any junk food will do</div>
                        <div class="pairing-button">Aperitif</div>
                        <div class="pairing-button">Appetizers and snacks</div>
                        <div class="pairing-button">Beef</div>
                        <div class="pairing-button" style="display: none;">Blue cheese</div>
                        <div class="pairing-button" style="display: none;">Cured Meat</div>
                        <div class="pairing-button" style="display: none;">Fruity desserts</div>
                        <div class="pairing-button" style="display: none;">Game (deer, venison)</div>
                        <div class="pairing-button" style="display: none;">Goat cheese</div>
                        <div class="pairing-button" style="display: none;">Lamb</div>
                        <div class="pairing-button" style="display: none;">Lean fish</div>
                        <div class="pairing-button" style="display: none;">Mature and hard cheese</div>
                        <div class="pairing-button" style="display: none;">Mild and soft cheese</div>
                        <div class="pairing-button" style="display: none;">Mushrooms</div>
                        <div class="pairing-button" style="display: none;">Pasta</div>
                        <div class="pairing-button" style="display: none;">Pork</div>
                        <div class="pairing-button" style="display: none;">Rich fish (salmon, tuna etc)</div>
                        <div class="pairing-button" style="display: none;">Shellfish</div>
                        <div class="pairing-button" style="display: none;">Spicy food</div>
                        <div class="pairing-button" style="display: none;">Sweet desserts</div>
                        <div class="pairing-button" style="display: none;">Veal</div>
                        <div class="pairing-button" style="display: none;">Vegetarian</div>
                        <script>
                            $('.pairing-button').each(function () {
                                if($(this).text() === '{$detail}' && !$(this).hasClass('is-selected')) $(this).remove();
                            })
                        </script>
                    </div>
                    <div class="show-list show-lists"><a>Show all</a></div>
                    <div class="show-list less-lists"><a>Show less</a></div>
                </div>
            </div>
            <div class="col-lg-6 search-result-part">
                <div class="wines-filter">
                    <div class="filter-dropdown">
                        <div class="filter-title">Sort: </div>
                        <span class="filter-label" aria-label="high_rating">Highest User Rating</span>
                        <svg class="filter-down-arrow" viewBox="0 0 7 14">
                            <g>
                                <path d="M-0.000,13.281 L6.568,7.001 L-0.000,0.722 " fill="none" stroke="#585858" stroke-width="1"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="filter-menu">
                        <a id="high_rating">Highest User Rating<span></span></a>
                        <a id="discount">Discount<span></span></a>
                        <a id="lowtohigh">Price: Low to High<span></span></a>
                        <a id="hightolow">Price: High to Low<span></span></a>
                        <a id="highcount">Popular<span></span></a>
                    </div>
                </div>
                <div class="main-explore">
                {if $wines}
                    {foreach $wines as $wine}
                    <div class="wine-list">
                        <div class="col-lg-3 wine-list-image color-div">
                            <a href="{$system['system_url']}/detail/{$wine['Id_item']}">
                                <img src="{$wine['image_URL']}"/>
                            </a>
                        </div>
                        <div class="col-lg-9 wine-list-content">
                            <div class="winery-title"><a href="{$system['system_url']}/winery/{$wine['winery']}" class="link-region">{$wine['winery']}</a></div>
                            <div class="wine-name black-letter">{$wine['name']}</div>
                            <div class="region-title">
                                {if $wine['region'] || $wine['country']}
                                <img width="14px" height="14px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$wine['country']}-flag-round-xs.png">
                                <p><a href="{$system['system_url']}/country/{$wine['country']}" class="link-region">{$wine['country']}</a></p>
                                <p>·</p>
                                <p><a href="{$system['system_url']}/region/{$wine['region']}" class="link-region">{$wine['region']}</a></p>
                                {/if}
                            </div>
                            <div class="wine-price">
                                {if $wine['price']}
                                    <h5>€{$wine['price']}</h5>
                                {/if}
                            </div>
                            <div class="wine-rating">
                                {if $wine['rating']}
                                <div><h1 class="black-letter">{$wine['rating']}</h1></div>
                                <div>
                                    <div id="wine-rating-star{$wine['Id_item']}"></div>
                                    <script>
                                        $("#wine-rating-star{$wine['Id_item']}").rateit({
                                            readonly: true,
                                            step: 0.1,
                                            value: {$wine['rating']},
                                        });
                                    </script>
                                    <div class="wine-rating-nums">74 ratings</div>
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                    {/foreach}
                    <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                {else}
                    <div class="main-no-showing">
                        <p>No wines made the cut</p>
                        <p>We salute your narrow taste but try changing the filters to broaden the search.</p>
                    </div>
                {/if}

                </div>
            </div>
            <div class="col-lg-3 top-wine-lists js_sticky-sidebar">
                <div class="wines-filter">
                    <div class="top-list-title black-letter">
                        <h4>Top Wines in Winelov</h2>
                    </div>
                </div>
                <div class="main-explore ">
                    <div class="top-list">
                        <div class="row">
                            <div class="col-lg-10 top-rating-title black-letter">
                                <h6>The best rating lists</h6>
                            </div>
                            <div class="col-lg-2 top-rating-image"></div>
                        </div>
                        <div class="row">
                            {foreach $high_rated as $wine}
                            <div class="col-lg-4 top-item">
                                <a href="{$system['system_url']}/detail/{$wine['Id_item']}">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>{$wine['rating']}</p></div>
                                        <img width="30px" src="{$wine['image_URL']}">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">{$wine['name']}</p>
                                    <p class="top-detail-region">
                                        <span>{$wine['country']} {if $wine['country'] != '' && $wine['region'] != ''}· {/if}{$wine['region']}</span>
                                    </p>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="top-list">
                        <div class="row">
                            <div class="col-lg-10 top-rating-title black-letter">
                                <h6>The best seller lists</h6>
                            </div>
                            <div class="col-lg-2 top-rating-image"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 top-item">
                                <a href="">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p>4.7</p></div>
                                        <img width="30px" src="//images.vivino.com/thumbs/uiYaQ6h2TNyekkq3sdi13A_pb_x600.png">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter">Sauvignon Blanc 2018</p>
                                    <p class="top-detail-region">
                                        <span>Italy · Waipara</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{$system['system_url']}/includes/assets/js/sngine/autocomplete.js"></script>
{include file='_footer.tpl'}
