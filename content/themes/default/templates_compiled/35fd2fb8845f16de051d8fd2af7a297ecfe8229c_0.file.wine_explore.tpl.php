<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-12 13:14:03
  from '/home/winelov/public_html/content/themes/default/templates/wine_explore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee37f9bc87751_24923184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35fd2fb8845f16de051d8fd2af7a297ecfe8229c' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/wine_explore.tpl',
      1 => 1591967641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_wine_topmenu.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ee37f9bc87751_24923184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_wine_topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="search-result">
    <div class="container">
        <h4 class="row search-result-title ">Showing&nbsp;<span><?php if ($_smarty_tpl->tpl_vars['sort']->value != 'type') {?>wines<?php }
echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></h4>
    </div>
</section>
<section class="search-wine">
    <div class="container">
        <div class="row">
            <div class="search-selected">
                <div class="selected-title"><h5><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</h5></div>
                <div class="selected-list">
                    <?php if ($_smarty_tpl->tpl_vars['detail']->value && $_smarty_tpl->tpl_vars['sort']->value != 'type') {?>
                        <div class="selected-list-detail" id="list-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['detail']->value,' ','-');?>
"><a>&times; <?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</a></div>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-3 search-types js_sticky-sidebar">
                <div class="wine-types row">
                    <h4 class="">Wine Types</h4>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'Red') {?>is-selected<?php }?>">Red</div></div>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'White') {?>is-selected<?php }?>">White</div></div>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'Sparkling') {?>is-selected<?php }?>">Sparkling</div></div>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'Rose') {?>is-selected<?php }?>">Rose</div></div>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'Dessert') {?>is-selected<?php }?>">Dessert</div></div>
                    <div class="col-lg-4"><div class="type-button <?php if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['type']->value == 'Port') {?>is-selected<?php }?>">Port</div></div>
                </div>
                <div class="wine-types row">
                    <h4 class="black-letter">Price Range</h4>
                    <div class="slider_div price-range explore-range">
                        <input id="price-type" type="text" class="js-range-slider" value=""/>
                        <?php echo '<script'; ?>
>
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
                                <?php if ($_smarty_tpl->tpl_vars['min']->value) {?>
                                from: custom_values.indexOf(<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
),
                                to: custom_values.indexOf(<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
),
                                <?php } else { ?>
                                from: custom_values.indexOf(7),
                                to: custom_values.indexOf(30),
                                <?php }?>
                                values: custom_values,
                                hide_from_to: false,
                                hide_min_max: true,
                                prefix: "€",
                                max_postfix: "+",
                                onFinish: function () {
                                    myfunction.get_wines(1);
                                },
                            });
                        <?php echo '</script'; ?>
>
                    </div>
                </div>
                <div class="wine-types row">
                    <h4 class="black-letter">Winelov User Rating</h4>
                    <div class="rating-type <?php if ($_smarty_tpl->tpl_vars['rating']->value && $_smarty_tpl->tpl_vars['rating']->value == 4.5) {?>is-selected <?php }?>rating-4.5">
                        <input type="radio" name="rating" id="4.5" class="radioBtn" value="4.5"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort1"></div>
                        <div><span class="black-letter">4.5</span>&nbsp;&nbsp;Rare</div>
                    </div>
                    <div class="rating-type <?php if ($_smarty_tpl->tpl_vars['rating']->value && $_smarty_tpl->tpl_vars['rating']->value == 4) {?>is-selected <?php }?>rating-4.0">
                        <input type="radio" name="rating" id="4.0" class="radioBtn" value="4.0"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort2"></div>
                        <div><span class="black-letter">4.0</span>&nbsp;&nbsp;Very good stuff</div>
                    </div>
                    <div class="rating-type <?php if (!$_smarty_tpl->tpl_vars['rating']->value || $_smarty_tpl->tpl_vars['rating']->value == 3.5) {?>is-selected <?php }?>rating-3.5">
                        <input type="radio" name="rating" id="3.5" class="radioBtn" value="3.5"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort3"></div>
                        <div><span class="black-letter">3.5</span>&nbsp;&nbsp;Good stuff</div>
                    </div>
                    <div class="rating-type <?php if ($_smarty_tpl->tpl_vars['rating']->value && $_smarty_tpl->tpl_vars['rating']->value == 3) {?>is-selected <?php }?>rating-3.0">
                        <input type="radio" name="rating" id="3.0" class="radioBtn" value="3.0"/>
                        <div class="radio-style">
                            <span class="radio-check"></span>
                        </div>
                        <div id="rate-sort4"></div>
                        <div><span class="black-letter">3.0</span>&nbsp;&nbsp;Average</div>
                    </div>
                    <div class="rating-type <?php if ($_smarty_tpl->tpl_vars['rating']->value && $_smarty_tpl->tpl_vars['rating']->value == 1) {?>is-selected <?php }?>rating-anything">
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
                    <input class="search-lists" name="grapes" id="grape-input" type="search" placeholder="Search grapes" value="" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'grape') {?>
                            <div class="grape-button is-selected"><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</div>
                        <?php }?>
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
                    <input class="search-lists" name="regions" id="region-input" type="search" placeholder="Search grapes" value="" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'region') {?>
                        <div class="region-button is-selected"><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</div>
                        <?php }?>
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
                    <input class="search-lists" name="countries" id="country-input" type="search" placeholder="Search countries" value="" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'country') {?>
                            <div class="country-button is-selected"><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</div>
                        <?php }?>
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
                    <input class="search-lists" name="styles" id="style-input" type="search" placeholder="Search wine styles" value="" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'style') {?>
                            <div class="style-button is-selected"><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</div>
                        <?php }?>
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
                    <input class="search-lists" name="pairings" id="pairing-input" type="search" placeholder="Search food pairings" value="" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/default/images/svg/search.svg);">
                    <div class="select-list">
                        <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'pairing') {?>
                            <div class="pairing-button is-selected"><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</div>
                        <?php }?>
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
                        <?php echo '<script'; ?>
>
                            $('.pairing-button').each(function () {
                                if($(this).text() === '<?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
' && !$(this).hasClass('is-selected')) $(this).remove();
                            })
                        <?php echo '</script'; ?>
>
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
                <?php if ($_smarty_tpl->tpl_vars['wines']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wines']->value, 'wine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
?>
                    <div class="wine-list">
                        <div class="col-lg-3 wine-list-image color-div">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
"/>
                            </a>
                        </div>
                        <div class="col-lg-9 wine-list-content">
                            <div class="winery-title"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/winery/<?php echo $_smarty_tpl->tpl_vars['wine']->value['winery'];?>
" class="link-region"><?php echo $_smarty_tpl->tpl_vars['wine']->value['winery'];?>
</a></div>
                            <div class="wine-name black-letter"><?php echo $_smarty_tpl->tpl_vars['wine']->value['name'];?>
</div>
                            <div class="region-title">
                                <?php if ($_smarty_tpl->tpl_vars['wine']->value['region'] || $_smarty_tpl->tpl_vars['wine']->value['country']) {?>
                                <img width="14px" height="14px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
-flag-round-xs.png">
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
" class="link-region"><?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
</a></p>
                                <p>·</p>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/region/<?php echo $_smarty_tpl->tpl_vars['wine']->value['region'];?>
" class="link-region"><?php echo $_smarty_tpl->tpl_vars['wine']->value['region'];?>
</a></p>
                                <?php }?>
                            </div>
                            <div class="wine-price">
                                <?php if ($_smarty_tpl->tpl_vars['wine']->value['price']) {?>
                                    <h5>€<?php echo $_smarty_tpl->tpl_vars['wine']->value['price'];?>
</h5>
                                <?php }?>
                            </div>
                            <div class="wine-rating">
                                <?php if ($_smarty_tpl->tpl_vars['wine']->value['rating']) {?>
                                <div><h1 class="black-letter"><?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
</h1></div>
                                <div>
                                    <div id="wine-rating-star<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
"></div>
                                    <?php echo '<script'; ?>
>
                                        $("#wine-rating-star<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
").rateit({
                                            readonly: true,
                                            step: 0.1,
                                            value: <?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
,
                                        });
                                    <?php echo '</script'; ?>
>
                                    <div class="wine-rating-nums">74 ratings</div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="spinner-grow text-danger" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                <?php } else { ?>
                    <div class="main-no-showing">
                        <p>No wines made the cut</p>
                        <p>We salute your narrow taste but try changing the filters to broaden the search.</p>
                    </div>
                <?php }?>

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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['high_rated']->value, 'wine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
?>
                            <div class="col-lg-4 top-item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
">
                                    <div class="top-image">
                                        <div class="top-rating-background"><p><?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
</p></div>
                                        <img width="30px" src="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
">
                                    </div>
                                </a>
                                <div class="top-detail">
                                    <p class="top-detail-name black-letter"><?php echo $_smarty_tpl->tpl_vars['wine']->value['name'];?>
</p>
                                    <p class="top-detail-region">
                                        <span><?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
 <?php if ($_smarty_tpl->tpl_vars['wine']->value['country'] != '' && $_smarty_tpl->tpl_vars['wine']->value['region'] != '') {?>· <?php }
echo $_smarty_tpl->tpl_vars['wine']->value['region'];?>
</span>
                                    </p>
                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/sngine/autocomplete.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
