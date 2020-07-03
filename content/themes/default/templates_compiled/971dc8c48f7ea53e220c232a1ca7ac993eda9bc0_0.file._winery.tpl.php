<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 08:47:51
  from '/home/winelov/public_html/content/themes/default/templates/_winery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecf7ab7ea73a4_33682259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '971dc8c48f7ea53e220c232a1ca7ac993eda9bc0' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/_winery.tpl',
      1 => 1590655670,
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
function content_5ecf7ab7ea73a4_33682259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_wine_topmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="wide-image country-banner" data-parallax="scroll" data-image-src="//images.vivino.com/regions/backgrounds/sbzA7h1ITnaHABaVqWJ4CA.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-area">
                    <div class="row">
                        <div class="country-detail">
                            <div class="country-name">
                                <p class="region-title">Winery</p>
                                <p class="region-content"><?php echo $_smarty_tpl->tpl_vars['winery']->value['Name'];?>
</p>
                                <div class="winery-country winery-detail-country">
                                    <img width="25px" height="25px" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/flag/<?php echo $_smarty_tpl->tpl_vars['winery']->value['Country'];?>
-flag-round-xs.png">
                                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['winery']->value['Country'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['winery']->value['Country'];?>
&nbsp;</a></p>
                                    <p>·</p>
                                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/region/<?php echo $_smarty_tpl->tpl_vars['winery']->value['Region'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['winery']->value['Region'];?>
</a></p>
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
                    <?php if ($_smarty_tpl->tpl_vars['winery']->value['business_name']) {?>
                    <div class="row">
                        <p class="winery-maker">Winemaker: <?php echo $_smarty_tpl->tpl_vars['winery']->value['business_name'];?>
</p>
                        <p class="winery-description"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['winery']->value['descrip+tion'],'\r','');?>
</p>
                    </div>
                    <?php }?>
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
                        <h2 class="search-title black-letter winery-contact-title">Contact <?php echo $_smarty_tpl->tpl_vars['winery']->value['Name'];?>
</h2>
                        <div class="col-lg-4 winery-contact-address">
                            <p><?php echo $_smarty_tpl->tpl_vars['winery']->value['street'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['winery']->value['city'];
if ($_smarty_tpl->tpl_vars['winery']->value['state']) {?>, <?php echo $_smarty_tpl->tpl_vars['winery']->value['state'];
}?></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['winery']->value['zip'];?>
</p>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['winery']->value['Country'];?>
"><?php echo $_smarty_tpl->tpl_vars['winery']->value['Country'];?>
</a></p>
                        </div>
                        <div class="col-lg-4 winery-contact-address">
                            <p><?php if ($_smarty_tpl->tpl_vars['winery']->value['website']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['winery']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['winery']->value['email'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['winery']->value['email'];
}?></p>
                            <?php if ($_smarty_tpl->tpl_vars['winery']->value['facebook']) {?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['winery']->value['facebook'];?>
"><?php echo $_smarty_tpl->tpl_vars['winery']->value['business_name'];?>
</a></p>
                            <?php }?>
                        </div>
                        <div class="col-lg-4 winery-contact-address">
                            <?php if ($_smarty_tpl->tpl_vars['winery']->value['instagram'] && $_smarty_tpl->tpl_vars['winery']->value['instagram1']) {?>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['winery']->value['instagram1'];?>
"><?php echo $_smarty_tpl->tpl_vars['winery']->value['instagram'];?>
</a></p>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['winery']->value['twitter'] && $_smarty_tpl->tpl_vars['winery']->value['Twitter1']) {?>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['winery']->value['Twitter1'];?>
"><?php echo $_smarty_tpl->tpl_vars['winery']->value['twitter'];?>
</a></p>
                            <?php }?>
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

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
