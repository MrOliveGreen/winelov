<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 22:23:25
  from '/home/winelov/public_html/content/themes/default/templates/_region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed42e5d476c55_99062668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce21b1c114023b76c3467ac252edaff1e961c9e' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/_region.tpl',
      1 => 1590957010,
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
function content_5ed42e5d476c55_99062668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/block.textformat.php','function'=>'smarty_block_textformat',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_wine_topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="wide-image country-banner" data-parallax="scroll" data-image-src="<?php echo $_smarty_tpl->tpl_vars['region']->value['img_URL'];?>
">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row">
                        <div class="country-detail">
                            <div class="country-name">
                                <p class="region-title">Region</p>
                                <p class="region-content"><?php echo $_smarty_tpl->tpl_vars['region']->value['name'];?>
</p>
                                <div class="winery-country winery-detail-country">
                                    <?php $_smarty_tpl->_assignInScope('splits', explode("?",$_smarty_tpl->tpl_vars['region']->value['country_id']));?>
                                    <img width="25px" height="25px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['splits']->value[0];?>
-flag-round-xs.png">
                                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['splits']->value[0];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['splits']->value[0];?>
&nbsp;</a></p>
                                    <?php if ($_smarty_tpl->tpl_vars['splits']->value[1]) {?>
                                    <p>·</p>
                                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/region/<?php echo $_smarty_tpl->tpl_vars['splits']->value[1];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['splits']->value[1];?>
</a></p>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ($_smarty_tpl->tpl_vars['region']->value['content']) {?>
<section class="testimonial-section section-padding border-top region-guide">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">A Guide to the <?php echo $_smarty_tpl->tpl_vars['region']->value['name'];?>
 Region</div>
        </div>
        <div class="region-guide-content">
            <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>40));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>40), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['region']->value['content'];
$_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>40), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
        </div>
    </div>
</section>
<?php }
if ($_smarty_tpl->tpl_vars['related_wines']->value) {?>
<section class="testimonial-section section-padding border-top wide-image country-best">
    <div class="container">
        <div class="top-rated-wine">
            <div class="sub-title">Top rated wines in <?php echo $_smarty_tpl->tpl_vars['region']->value['name'];?>
</div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_wines']->value, 'wines');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wines']->value) {
?>
                <div class="swiper-slide">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wines']->value['Id_item'];?>
">
                        <div class="up-detail">
                            <div class="col-lg-5">
                                <?php if ($_smarty_tpl->tpl_vars['wines']->value['rating']) {?>
                                <div class="rating-num"><h2><?php echo $_smarty_tpl->tpl_vars['wines']->value['rating'];?>
</h2></div>
                                <div class="rating-detail" id="rating_de<?php echo $_smarty_tpl->tpl_vars['wines']->value['Id_item'];?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['wines']->value['rating'];?>
"></div>
                                <?php echo '<script'; ?>
>
                                    var rating = $('#rating_de<?php echo $_smarty_tpl->tpl_vars['wines']->value['Id_item'];?>
').attr('aria-label');
                                    $('#rating_de<?php echo $_smarty_tpl->tpl_vars['wines']->value['Id_item'];?>
').rateit({
                                        readonly: true,
                                        step: 0.1,
                                        value: rating,
                                    });
                                <?php echo '</script'; ?>
>
                                <div class="rating-count-num">630 ratings</div>
                                <?php }?>
                            </div>
                            <div class="col-lg-7">
                                <img class="wine-detail-image" src="<?php echo $_smarty_tpl->tpl_vars['wines']->value['image_URL'];?>
"/>
                            </div>
                        </div>
                        <div class="down-detail">
                            <p class="wine-detail-description"><?php echo $_smarty_tpl->tpl_vars['wines']->value['winery'];?>
</p>
                            <h4 class="wine-title"><?php echo $_smarty_tpl->tpl_vars['wines']->value['name'];?>
</h4>
                            <?php if ($_smarty_tpl->tpl_vars['wines']->value['region'] && $_smarty_tpl->tpl_vars['wines']->value['country']) {?>
                            <div class="wine-detail-region"><img width="14px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['wines']->value['country'];?>
-flag-round-xs.png"/><?php echo $_smarty_tpl->tpl_vars['wines']->value['region'];?>
 - <?php echo $_smarty_tpl->tpl_vars['wines']->value['country'];?>
</div>
                            <?php }?>
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
        </div>
    </div>
</section>
<?php }?>







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

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
