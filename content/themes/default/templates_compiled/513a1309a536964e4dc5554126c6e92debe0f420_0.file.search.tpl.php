<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 10:26:06
  from '/home/winelov/public_html/content/themes/default/templates/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4103e282365_16912489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '513a1309a536964e4dc5554126c6e92debe0f420' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/search.tpl',
      1 => 1587804032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 2,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea4103e282365_16912489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header bg-1">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/hugo-searching.png">
    <div class="crystal c03"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Search");?>
</h2>
        <p><?php echo __("Discover new people, create new connections and make new friends");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>" style="margin-top: -45px;">
    <div class="row">

        <!-- side panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="col-12 d-block d-sm-none offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
            <!-- search form -->
            <div class="card">
                <div class="card-body">
                    <form class="js_search-form">
                        <div class="form-group mb0">
                            <div class="input-group">
                                <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for people, pages and #hashtags");?>
'>
                                <div class="input-group-append">
                                    <button type="submit" name="submit" class="btn btn-danger plr30"><i class="fas fa-search mr10"></i><?php echo __("Search");?>
</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- search form -->

            <div class="row">
                <!-- left panel -->
                <div class="col-lg-8">
                    <!-- panel nav -->
                    <ul class="nav nav-pills nav-fill nav-search mb10">
                        <li class="nav-item">
                            <a class="nav-link rounded-pill active" href="#posts" data-toggle="tab">
                                <i class="fa fa-newspaper mr5"></i><strong><?php echo __("Posts");?>
</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" href="#articles" data-toggle="tab">
                                <i class="fab fa-blogger-b mr5"></i><strong><?php echo __("Articles");?>
</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" href="#users" data-toggle="tab">
                                <i class="fa fa-user mr5"></i><strong><?php echo __("Users");?>
</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" href="#pages" data-toggle="tab">
                                <i class="fa fa-flag mr5"></i><strong><?php echo __("Pages");?>
</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" href="#groups" data-toggle="tab">
                                <i class="fa fa-users mr5"></i><strong><?php echo __("Groups");?>
</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill" href="#events" data-toggle="tab">
                                <i class="fa fa-calendar mr5"></i><strong><?php echo __("Events");?>
</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- panel nav -->
                    
                    <div class="tab-content">

                        <!-- posts -->
                        <div class="tab-pane active" id="posts">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['posts']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['posts'], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center text-muted mtb10">
                                    <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <!-- posts -->

                        <!-- blogd -->
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                            <div class="tab-pane" id="articles">
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value['articles']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['articles'], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php } else { ?>
                                    <div class="text-center text-muted mtb10">
                                        <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                        <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <!-- blogs -->

                        <!-- users -->
                        <div class="tab-pane" id="users">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['users']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['users'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center text-muted mtb10">
                                    <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <!-- users -->

                        <!-- pages -->
                        <div class="tab-pane" id="pages">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['pages']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['pages'], '_page');
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
                            <?php } else { ?>
                                <div class="text-center text-muted mtb10">
                                    <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <!-- pages -->

                        <!-- groups -->
                        <div class="tab-pane" id="groups">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['groups']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['groups'], '_group');
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
                            <?php } else { ?>
                                <div class="text-center text-muted mtb10">
                                    <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <!-- groups -->

                        <!-- events -->
                        <div class="tab-pane" id="events">
                            <?php if (count($_smarty_tpl->tpl_vars['results']->value['events']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <div class="text-center text-muted mtb10">
                                    <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                            <?php }?>
                        </div>
                        <!-- events -->

                    </div>
                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-lg-4">
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <!-- right panel -->
            </div>
        </div>
        <!-- content panel -->
        
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
