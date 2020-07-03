<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-02 14:00:43
  from '/home/winelov/public_html/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed65b8bb89df6_75278298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f39649e4947d1918c40a09e3f2be0921b4e7b8' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/index.tpl',
      1 => 1591106224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_wine_topmenu.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 8,
    'file:__feeds_page.tpl' => 2,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ed65b8bb89df6_75278298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_wine_topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>

<section class="wide-image" data-parallax="scroll" data-image-src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/main.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row">
                        <img width="150px" class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
"
                             alt="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                    </div>
                    <div class="row"><h2 class="search-title">Find the best Wines</h2></div>
                    <div class="row wine-searchbar">
                        <div class="wine-type">
                            <select>
                                <option value="Red Wine">Red Wine</option>
                                <option value="White Wine">White Wine</option>
                                <option value="Sparkling Wine">Sparkling Wine</option>
                                <option value="Rosé">Rose</option>
                                <option value="Dessert">Dessert</option>
                                <option value="Port">Port</option>
                            </select>
                        </div>
                        <div class="slider_div price-range">
                            <p class="black-letter">Price Range</p>
                            <input id="price" type="text" class="js-range-slider" value=""/>
                        </div>
                        <div class="slider_div rating-range">
                            <p class="black-letter">Rating</p>
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
<section class="testimonial-section section-padding border-top wide-image">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">Top rated wines</div>
        </div>
        <div class="swiper-container">
            <?php if ($_smarty_tpl->tpl_vars['high_rated']->value) {?>
            <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['high_rated']->value, 'wine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
?>
                    <div class="swiper-slide">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
">
                            <div class="up-detail">
                                <div class="col-lg-5">
                                    <?php if ($_smarty_tpl->tpl_vars['wine']->value['rating'] || $_smarty_tpl->tpl_vars['wine']->value['rating'] == 0.0) {?>
                                    <div class="rating-num"><h2><?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
</h2></div>
                                    <div id="total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
"></div>
                                    <?php echo '<script'; ?>
>
                                        $("#total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
").rateit({
                                            readonly: true,
                                            step: 0.1,
                                            value: <?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
,
                                        });
                                    <?php echo '</script'; ?>
>
                                    <div class="rating-count-num">630 ratings</div>
                                    <?php }?>
                                </div>
                                <div class="col-lg-7">
                                    <img class="wine-detail-image" src="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
"/>
                                </div>
                            </div>
                            <div class="down-detail">
                                <p class="wine-detail-description"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['winery'],'?',' ');?>
</p>
                                <h6 class="wine-title"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['name'],'?',' '),25,"...",true);?>
</h6>
                                <?php if ($_smarty_tpl->tpl_vars['wine']->value['region'] || $_smarty_tpl->tpl_vars['wine']->value['country']) {?>
                                <div class="wine-detail-region"><img width="14px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
-flag-round-xs.png"/>From <?php echo $_smarty_tpl->tpl_vars['wine']->value['region'];
if ($_smarty_tpl->tpl_vars['wine']->value['region'] && $_smarty_tpl->tpl_vars['wine']->value['country']) {?> - <?php }
echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
</div>
                                <?php }?>
                                <p class="wine-detail-price">
                                    <?php if ($_smarty_tpl->tpl_vars['wine']->value['price']) {?>
                                        €<?php echo $_smarty_tpl->tpl_vars['wine']->value['price'];?>

                                    <?php } else { ?>
                                        <span style="color: white;">€</span>
                                    <?php }?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <?php } else { ?>
                <div>No data to show</div>
            <?php }?>
        </div>
    </div>
</section>
<section class="testimonial-section section-padding border-top wide-image bestseller-section">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">Bestsellers</div>
        </div>
        <div class="swiper-container">
            <?php if ($_smarty_tpl->tpl_vars['high_low']->value) {?>
            <div class="swiper-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['high_low']->value, 'wine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
?>
                        <div class="swiper-slide">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
">
                                <div class="up-detail">
                                    <div class="col-lg-5">
                                        <?php if ($_smarty_tpl->tpl_vars['wine']->value['rating']) {?>
                                        <div class="rating-num"><h2><?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
</h2></div>
                                        <div id="total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
"></div>
                                        <?php echo '<script'; ?>
>
                                            $("#total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
").rateit({
                                                readonly: true,
                                                step: 0.1,
                                                value: <?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
,
                                            });
                                        <?php echo '</script'; ?>
>
                                        <div class="rating-count-num">630 ratings</div>
                                        <?php }?>
                                    </div>
                                    <div class="col-lg-7">
                                        <img class="wine-detail-image" src="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
"/>
                                    </div>
                                </div>
                                <div class="down-detail">
                                    <p class="wine-detail-description"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['winery'],'?',' ');?>
</p>
                                    <h6 class="wine-title"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['name'],'?',' '),25,"...",true);?>
</h6>
                                    <?php if ($_smarty_tpl->tpl_vars['wine']->value['region'] || $_smarty_tpl->tpl_vars['wine']->value['country']) {?>
                                    <div class="wine-detail-region"><img width="14px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
-flag-round-xs.png"/>From <?php echo $_smarty_tpl->tpl_vars['wine']->value['region'];
if ($_smarty_tpl->tpl_vars['wine']->value['region'] && $_smarty_tpl->tpl_vars['wine']->value['country']) {?> - <?php }
echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
</div>
                                    <?php }?>
                                    <p class="wine-detail-price">
                                        <?php if ($_smarty_tpl->tpl_vars['wine']->value['price']) {?>
                                            €<?php echo $_smarty_tpl->tpl_vars['wine']->value['price'];?>

                                        <?php } else { ?>
                                            <span style="color: white;">€</span>
                                        <?php }?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <?php } else { ?>
                <div>No data to show</div>
            <?php }?>
        </div>
    </div>
</section>
<section class="testimonial-section section-padding border-top wide-image">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">Top rated wines in France</div>
        </div>
        <div class="swiper-container">
            <?php if ($_smarty_tpl->tpl_vars['high_france']->value) {?>
            <div class="swiper-wrapper" id="bestseller-carousel">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['high_france']->value, 'wine');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
?>
                        <div class="swiper-slide">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
">
                                <div class="up-detail">
                                    <div class="col-lg-5">
                                        <div class="rating-num"><h2><?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
</h2></div>
                                        <div id="total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
"></div>
                                        <?php echo '<script'; ?>
>
                                            $("#total-ratings<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
").rateit({
                                                readonly: true,
                                                step: 0.1,
                                                value: <?php echo $_smarty_tpl->tpl_vars['wine']->value['rating'];?>
,
                                            });
                                        <?php echo '</script'; ?>
>
                                        <div class="rating-count-num">630 ratings</div>
                                    </div>
                                    <div class="col-lg-7">
                                        <img class="wine-detail-image" src="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
"/>
                                    </div>
                                </div>
                                <div class="down-detail">
                                    <p class="wine-detail-description"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['winery'],'?',' ');?>
</p>
                                    <h6 class="wine-title"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['wine']->value['name'],'?',' '),25,"...",true);?>
</h6>
                                    <div class="wine-detail-region"><img width="14px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
-flag-round-xs.png"/>From <?php echo $_smarty_tpl->tpl_vars['wine']->value['region'];?>
 - <?php echo $_smarty_tpl->tpl_vars['wine']->value['country'];?>
</div>
                                    <p class="wine-detail-price">
                                        <?php if ($_smarty_tpl->tpl_vars['wine']->value['price']) {?>
                                            €<?php echo $_smarty_tpl->tpl_vars['wine']->value['price'];?>

                                        <?php } else { ?>
                                            <span style="color: white;">€</span>
                                        <?php }?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <?php } else { ?>
                <div>No data to show</div>
            <?php }?>
        </div>
    </div>
</section>


<?php } else { ?>

<div class="container mt20 offcanvas">
        <div class="row">

            <!-- side panel -->
            <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-md-8 col-lg-9 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-lg-8">

                        <!-- announcments -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- announcments -->

                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                            <!-- stories -->
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom-0">
                                        <strong class="text-muted"><?php echo __("Stories");?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['has_story']->value) {?>
                                            <div class="float-right">
                                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete Your Story");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_story-deleter">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        <?php } else { ?>
                                            <div class="d-none d-sm-block text-muted pointer float-right">
                                                <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Stories are photos and videos that only last 24 hours");?>
'></i>
                                            </div>
                                        <?php }?>

                                    </div>
                                    <div class="card-body pt5 stories-wrapper">
                                        <div id="stories" data-json='<?php echo $_smarty_tpl->tpl_vars['stories']->value["json"];?>
'>
                                            <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                                                <div class="img" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
                                                </div>
                                                <div class="add">
                                                    <i class="fa fa-plus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- stories -->

                            <!-- publisher -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>
                            <!-- publisher -->

                            <!-- boosted post -->
                            <?php if ($_smarty_tpl->tpl_vars['boosted_post']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['boosted_post']->value), 0, false);
?>
                            <?php }?>
                            <!-- boosted post -->

                            <!-- posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0, false);
?>
                            <!-- posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "popular") {?>
                            <!-- popular posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"popular",'_title'=>__("Popular Posts")), 0, true);
?>
                            <!-- popular posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "discover") {?>
                            <!-- discover posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_title'=>__("Discover Posts")), 0, true);
?>
                            <!-- discover posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "saved") {?>
                            <!-- saved posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>__("Saved Posts")), 0, true);
?>
                            <!-- saved posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "memories") {?>
                            <!-- page header -->
                            <div class="page-header mini rounded-top mb10">
                                <div class="crystal c03"></div>
                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <div class="inner">
                                    <h2><?php echo __("Memories");?>
</h2>
                                    <p><?php echo __("Enjoy looking back on your memories");?>
</p>
                                </div>
                            </div>
                            <!-- page header -->

                            <!-- memories posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"memories",'_title'=>__("ON THIS DAY"),'_filter'=>"all"), 0, true);
?>
                            <!-- memories posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "articles") {?>
                            <!-- articles posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"article",'_title'=>__("My Articles")), 0, true);
?>
                            <!-- articles posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
                            <!-- products posts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"product",'_title'=>__("My Products")), 0, true);
?>
                            <!-- products posts -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin || $_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <!-- boosted posts -->
                                <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"boosted",'_title'=>__("My Boosted Posts")), 0, true);
?>
                                <!-- boosted posts -->
                            <?php } else { ?>
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Membership");?>
</strong><br>
                                        <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                                <!-- upgrade -->
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin || $_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <div class="card">
                                    <div class="card-header">
                                        <strong><?php echo __("My Boosted Pages");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <?php if ($_smarty_tpl->tpl_vars['boosted_pages']->value) {?>
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boosted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>

                                            <?php if (count($_smarty_tpl->tpl_vars['boosted_pages']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                            <?php }?>
                                        <?php } else { ?>
                                            <p class="text-center text-muted mt10">
                                                <?php echo __("No pages to show");?>

                                            </p>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <!-- upgrade -->
                                <div class="alert alert-warning">
                                    <div class="icon">
                                        <i class="fa fa-id-card fa-2x"></i>
                                    </div>
                                    <div class="text">
                                        <strong><?php echo __("Membership");?>
</strong><br>
                                        <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>
                                </div>
                                <!-- upgrade -->
                            <?php }?>

                        <?php }?>
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-lg-4 js_sticky-sidebar">

                        <!-- pro users -->
                        <?php if ($_smarty_tpl->tpl_vars['pro_members']->value) {?>
                            <div class="card bg-gradient-indigo border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <h6 class="pb0"><i class="fa fa-user-shield mr5"></i> <?php echo __("Pro Users");?>
</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper <?php if (count($_smarty_tpl->tpl_vars['pro_members']->value) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pro_members']->value, '_member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_member']->value) {
?>
                                            <a class="user-box text-white" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_name'];?>
">
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_picture'];?>
" />
                                                <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>

                                                </div>
                                            </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pro users -->

                        <!-- pro pages -->
                        <?php if ($_smarty_tpl->tpl_vars['promoted_pages']->value) {?>
                            <div class="card bg-gradient-teal border-0">
                                <div class="card-header ptb20 bg-transparent border-bottom-0">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="float-right">
                                            <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <h6 class="pb0"><i class="fa fa-flag-checkered mr5"></i> <?php echo __("Pro Pages");?>
</h6>
                                </div>
                                <div class="card-body pt0 plr5">
                                    <div class="pro-box-wrapper <?php if (count($_smarty_tpl->tpl_vars['promoted_pages']->value) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <a class="user-box text-white" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
                                                <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>

                                                </div>
                                            </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pro pages -->

                        <!-- trending -->
                        <?php if ($_smarty_tpl->tpl_vars['trending_hashtags']->value) {?>
                            <div class="card bg-gradient-red border-0">
                                <div class="card-header pt20 pb10 bg-transparent border-bottom-0">
                                    <h6 class="mb0"><i class="fa fa-fire mr5"></i> <?php echo __("Trending");?>
</h6>
                                </div>
                                <div class="card-body pt0">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trending_hashtags']->value, 'hashtag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hashtag']->value) {
?>
                                        <a class="trending-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['hashtag']->value['hashtag'];?>
">
                                            <span class="hash">
                                                #<?php echo $_smarty_tpl->tpl_vars['hashtag']->value['hashtag'];?>

                                            </span>
                                            <span class="frequency">
                                                <?php echo $_smarty_tpl->tpl_vars['hashtag']->value['frequency'];?>
 <?php echo __("Posts");?>

                                            </span>
                                        </a>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php }?>
                        <!-- trending -->

                        <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- friend suggestions -->
                        <?php if ($_smarty_tpl->tpl_vars['new_people']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Friend Suggestions");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                         <!-- friend suggestions -->

                        <!-- suggested pages -->
                        <?php if ($_smarty_tpl->tpl_vars['new_pages']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Pages");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        <?php if ($_smarty_tpl->tpl_vars['new_groups']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Groups");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_groups']->value, '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested groups -->

                        <!-- suggested events -->
                        <?php if ($_smarty_tpl->tpl_vars['new_events']->value) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="float-right">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <?php echo __("Suggested Events");?>

                                </div>
                                <div class="card-body with-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_events']->value, '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested events -->

                        <!-- invitation widget -->
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_widget_enabled']) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-envelope-open-text mr5"></i> <?php echo __("Invite Your Friends");?>

                                </div>
                                <div class="card-body with-form">
                                    <form class="js_ajax-forms" data-url="users/invitation.php">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" placeholder='<?php echo __("Email");?>
'>
                                                <div class="input-group-append">
                                                    <button type="submit" name="submit" class="btn btn-primary plr20"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- success -->
                                        <div class="alert alert-success mb0 x-hidden"></div>
                                        <!-- success -->

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 x-hidden"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                        <?php }?>
                        <!-- invitation widget -->

                        <!-- mini footer -->
                        <?php if ($_smarty_tpl->tpl_vars['new_people']->value || $_smarty_tpl->tpl_vars['new_pages']->value || $_smarty_tpl->tpl_vars['new_groups']->value || $_smarty_tpl->tpl_vars['new_events']->value) {?>
                            <div class="mtb20 plr10 d-none d-sm-block">
                                <div class="col-12 mb5">
                                    <?php if ($_smarty_tpl->tpl_vars['static_pages']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration === $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_11_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
                                         ·
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
                                            <?php echo __("Contacts Us");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
                                         ·
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
                                            <?php echo __("Developers");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
                                         ·
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
                                            <?php echo __("Directory");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                                         ·
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                            <?php echo __("Market");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                                         ·
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
                                            <?php echo __("Forums");?>

                                        </a>
                                    <?php }?>
                                </div>
                                <div class="col-12">
                                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- mini footer -->

                    </div>
                    <!-- right panel -->
                </div>
            </div>
            <!-- content panel -->

        </div>
    </div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
