<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:46:46
  from '/home/winelov/public_html/content/themes/default/templates/directory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea40706e622c7_13771372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db07189360248432976765ff4edebef37b65b1bc' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/directory.tpl',
      1 => 1587804021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea40706e622c7_13771372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header bg-1">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_bookmarks_r6up.svg">
    <div class="crystal c03"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Directory");?>
</h2>
        <p><?php echo __("Discover new people, create new connections and make new friends");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

    <div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>" style="margin-top: -25px;">
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
                <div class="card border-0 shadow">
                    <div class="card-body page-content pb25">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts" class="directory-card">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/newsfeed.png">
                                    <h5 class="title"><?php echo __("News Feed");?>
</h5>
                                    <p>
                                        <?php echo __("See what everyone’s up to and what’s on their minds");?>

                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users" class="directory-card">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/users.png">
                                    <h5 class="title"><?php echo __("Users");?>
</h5>
                                    <p>
                                        <?php echo __("Help friends know you better and show them what you have in common");?>

                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages" class="directory-card">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/pages.png">
                                    <h5 class="title"><?php echo __("Pages");?>
</h5>
                                    <p>
                                        <?php echo __("Never miss a thing out! Keep in touch with your fans and customers");?>

                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups" class="directory-card">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/groups.png">
                                    <h5 class="title"><?php echo __("Groups");?>
</h5>
                                    <p>
                                        <?php echo __("Communicate and collaborate with the people who share your interests");?>

                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events" class="directory-card">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/events.png">
                                    <h5 class="title"><?php echo __("Events");?>
</h5>
                                    <p>
                                        <?php echo __("Members can organize community events for online and offline doings");?>

                                    </p>
                                </a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums" class="directory-card">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/forums.png">
                                        <h5 class="title"><?php echo __("Forums");?>
</h5>
                                        <p>
                                            <?php echo __("Members can hold conversations in the form of posted messages");?>

                                        </p>
                                    </a>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games" class="directory-card">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/photos.png">
                                        <h5 class="title"><?php echo __("Games");?>
</h5>
                                        <p>
                                            <?php echo __("Playing games always fun, Play with the people who share your interests");?>

                                        </p>
                                    </a>
                                </div>
                            <?php } else { ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search" class="directory-card">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/search.png">
                                        <h5 class="title"><?php echo __("Games");?>
</h5>
                                        <p>
                                            <?php echo __("Discover new people, create new connections and make new friends");?>

                                        </p>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content panel -->
        </div>
    </div>

<?php } else { ?>

    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-md-4 col-lg-3 offcanvas-sidebar">
                <div class="card">
                    <div class="card-body with-nav">
                        <ul class="side-nav">
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts"><i class="fa fa-newspaper fa-fw mr10"></i> <?php echo __("Posts");?>
</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users"><i class="fa fa-user fa-fw mr10"></i> <?php echo __("Users");?>
</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages"><i class="fa fa-flag fa-fw mr10"></i> <?php echo __("Pages");?>
</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups"><i class="fa fa-users fa-fw mr10"></i> <?php echo __("Groups");?>
</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "events") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events"><i class="fa fa-calendar fa-fw mr10"></i> <?php echo __("Events");?>
</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games"><i class="fa fa-gamepad fa-fw mr10"></i> <?php echo __("Games");?>
</a>
                                </li>
                            <?php }?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search"><i class="fa fa-search fa-fw mr10"></i> <?php echo __("Search");?>
</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- left panel -->

            <!-- right panel -->
            <div class="col-md-8 col-lg-9 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-lg-8">
                        <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
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
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No posts to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "users") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No users to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_page');
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
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No pages to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_group');
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
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No groups to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_event');
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
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No events to show");?>

                                </p>
                            <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
                            <?php if (count($_smarty_tpl->tpl_vars['rows']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, '_game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No games to show");?>

                                </p>
                            <?php }?>

                        <?php }?>
                    </div>
                    <!-- center panel -->

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
            <!-- right panel -->

        </div>
    </div>

<?php }?>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
