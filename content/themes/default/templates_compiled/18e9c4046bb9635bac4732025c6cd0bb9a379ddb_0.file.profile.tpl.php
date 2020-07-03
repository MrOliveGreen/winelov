<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:12:22
  from '/home/winelov/public_html/content/themes/default/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3fef6d628c0_46944300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e9c4046bb9635bac4732025c6cd0bb9a379ddb' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/profile.tpl',
      1 => 1587804031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea3fef6d628c0_46944300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
    <div class="row">

        <!-- side panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        <?php }?>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
            <!-- profile-header -->
            <div class="profile-header">
                <!-- profile-cover -->
                <div class="profile-cover-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover_id']) {?>
                        <!-- full-cover -->
                        <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_full'];?>
">
                        <!-- full-cover -->
                        
                        <!-- cropped-cover -->
                        <img class="js_position-cover-cropped <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['profile']->value['user_cover_lightbox']) {?>js_lightbox<?php }?>" data-init-position="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
                        <!-- cropped-cover -->
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                        <!-- buttons -->
                        <div class="profile-cover-buttons">
                            <div class="profile-cover-change">
                                <i class="fa fa-camera js_x-uploader" data-handle="cover-user"></i>
                            </div>
                            <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>x-hidden<?php }?>">
                                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                                <i class="fa fa-crop-alt js_init-position-picture" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"></i>
                            </div>
                            <div class="profile-cover-position-buttons">
                                <i class="fa fa-check fa-fw js_save-position-picture"></i>
                            </div>
                            <div class="profile-cover-position-buttons">
                                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
                            </div>
                            <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>x-hidden<?php }?>">
                                <i class="fa fa-trash js_delete-cover" data-handle="cover-user"></i>
                            </div>
                        </div>
                        <!-- buttons -->
                        
                        <!-- loaders -->
                        <div class="profile-cover-change-loader">
                            <div class="progress x-progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="profile-cover-position-loader">
                            <i class="fa fa-arrows-alt mr5"></i><?php echo __("Drag to reposition cover");?>

                        </div>
                        <!-- loaders -->
                    <?php }?>
                </div>
                <!-- profile-cover -->

                <!-- profile-avatar -->
                <div class="profile-avatar-wrapper">
                    <img <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_id']) {?> <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['profile']->value['user_picture_lightbox']) {?>class="js_lightbox"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_id'];?>
" data-context="album" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_full'];?>
" <?php } elseif (!$_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?> class="js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" <?php }?>  src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
                    
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                        <!-- buttons -->
                        <div class="profile-avatar-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                        </div>
                        <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default'] || !$_smarty_tpl->tpl_vars['profile']->value['user_picture_id']) {?>x-hidden<?php }?>">
                            <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                        </div>
                        <!-- buttons -->
                        <!-- loaders -->
                        <div class="profile-avatar-change-loader">
                            <div class="progress x-progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!-- loaders -->
                    <?php }?>
                </div>
                <!-- profile-avatar -->

                <!-- profile-name -->
                <div class="profile-name-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_subscribed']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['profile']->value['package_name'];?>
 <?php echo __('Member');?>
"><?php echo __("PRO");?>
</a>
                    <?php }?>
                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                            <!-- add friend -->
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                                <button type="button" class="btn btn-sm btn-success btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-check mr5"></i><?php echo __("Friends");?>

                                </button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                <button type="button" class="btn btn-sm btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</button>
                                <button type="button" class="btn btn-sm btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Decline");?>
</button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                <button type="button" class="btn btn-sm btn-warning js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-clock mr5"></i><?php echo __("Friend Request Sent");?>

                                </button>
                            <?php } elseif (!$_smarty_tpl->tpl_vars['profile']->value['friendship_declined']) {?>
                                <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-user-plus mr5"></i><?php echo __("Add Friend");?>

                                </button>
                            <?php }?>
                            <!-- add friend -->

                            <!-- follow -->
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                                <button type="button" class="btn btn-sm btn-info js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-check mr5"></i><?php echo __("Following");?>

                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-sm btn-info js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-rss mr5"></i><?php echo __("Follow");?>

                                </button>
                            <?php }?>
                            <!-- follow -->

                            <!-- message -->
                            <button type="button" class="btn btn-icon btn-rounded btn-primary mlr5 js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                                <i class="fa fa-comments fa-fw fa-lg"></i>
                            </button>
                            <!-- message -->

                            <!-- poke & report & block -->
                            <div class="d-inline-block dropdown">
                                <button type="button" class="btn btn-icon btn-rounded btn-light" data-toggle="dropdown" data-display="static">
                                    <i class="fa fa-ellipsis-v fa-fw"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- poke -->
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['pokes_enabled'] && !$_smarty_tpl->tpl_vars['profile']->value['i_poked']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_poke'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_poke'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <div class="dropdown-item pointer js_poke" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
                                                <i class="fa fa-hand-point-right fa-fw mr10"></i><?php echo __("Poke");?>

                                            </div>
                                        <?php }?>
                                    <?php }?>
                                    <!-- poke -->
                                    <!-- report -->
                                    <div class="dropdown-item pointer js_report" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <i class="fa fa-flag fa-fw mr10"></i><?php echo __("Report");?>

                                    </div>
                                    <!-- report -->
                                    <!-- block -->
                                    <div class="dropdown-item pointer js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <i class="fa fa-minus-circle fa-fw mr10"></i><?php echo __("Block");?>

                                    </div>
                                    <!-- block -->
                                    <!-- manage -->
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Admin Panel");?>

                                        </a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/users/edit/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Moderator Panel");?>

                                        </a>
                                    <?php }?>
                                    <!-- manage -->
                                </div>
                            </div>
                            <!-- poke & report & block -->
                        <?php } else { ?>
                            <!-- edit -->
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-icon btn-rounded btn-light">
                                <i class="fa fa-pencil-alt fa-fw"></i>
                            </a>
                            <!-- edit -->
                        <?php }?>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper custom-scrollbar">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                                <i class="fa fa-newspaper fa-fw mr5"></i><?php echo __("Timeline");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends" <?php if ($_smarty_tpl->tpl_vars['view']->value == "friends" || $_smarty_tpl->tpl_vars['view']->value == "followers" || $_smarty_tpl->tpl_vars['view']->value == "followings") {?>class="active"<?php }?>>
                                <i class="fa fa-users fa-fw mr5"></i><?php echo __("Friends");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active"<?php }?>>
                                <i class="fa fa-images fa-fw mr5"></i><?php echo __("Photos");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active"<?php }?>>
                                <i class="fa fa-video fa-fw mr5"></i><?php echo __("Videos");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes" <?php if ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>class="active"<?php }?>>
                                <i class="fa fa-flag fa-fw mr5"></i><?php echo __("Likes");?>
 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups" <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
                                <i class="fa fa-users fa-fw mr5"></i><?php echo __("Groups");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events" <?php if ($_smarty_tpl->tpl_vars['view']->value == "events") {?>class="active"<?php }?>>
                                <i class="fa fa-calendar fa-fw mr5"></i><?php echo __("Events");?>

                            </a>
                        </li>
                    </ul>
                </div>
                <!-- profile-tabs -->
            </div>
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- panel [mutual-friends] -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && !$_smarty_tpl->tpl_vars['profile']->value['we_friends'] && !$_smarty_tpl->tpl_vars['profile']->value['friendship_declined']) {?>
                    <div class="col-sm-12">
                        <div class="card panel-mutual-friends">
                            <div class="card-header text-uppercase">
                                <?php echo __("Do you know");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>

                            </div>
                            <div class="card-body">
                                <div>
                                    <?php echo __("To see what");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("shares with friends");?>
, 
                                    <span class="text-primary">
                                        <?php echo __("send a friend request");?>

                                    </span>
                                    <div class="float-right">
                                        <!-- add friend -->
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                            <button class="btn btn-primary btn-sm js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</button>
                                            <button class="btn btn-secondary btn-sm js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</button>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                            <button class="btn btn-secondary btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <i class="fa fa-user-plus mr5"></i><?php echo __("Friend Request Sent");?>

                                            </button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <i class="fa fa-user-plus mr5"></i><?php echo __("Add Friend");?>

                                            </button>
                                        <?php }?>
                                        <!-- add friend -->
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                                    <div class="mt10 clearfix">
                                        <ul class="float-left mr20">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['mutual_friends'], 'mutual_friend');
$_smarty_tpl->tpl_vars['mutual_friend']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mutual_friend']->value) {
$_smarty_tpl->tpl_vars['mutual_friend']->index++;
$__foreach_mutual_friend_0_saved = $_smarty_tpl->tpl_vars['mutual_friend'];
?>
                                                <li>
                                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_lastname'];?>
" class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_picture'];?>
);">
                                                    </a>
                                                </li>
                                                <?php if ($_smarty_tpl->tpl_vars['mutual_friend']->index > 3) {
break 1;
}?>
                                            <?php
$_smarty_tpl->tpl_vars['mutual_friend'] = $__foreach_mutual_friend_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                        <div class="float-left mt10">
                                            <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("Mutual Friends");?>
</span>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <!-- panel [mutual-friends] -->

                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                    <!-- left panel -->
                    <div class="order-1 col-lg-3 order-lg-1">

                        <!-- panel [profile completion] -->
                        <?php if (isset($_smarty_tpl->tpl_vars['profile']->value['profile_completion']) && $_smarty_tpl->tpl_vars['profile']->value['profile_completion'] < 100) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
%</span>
                                    <strong><?php echo __("Profile Completion");?>
</strong>
                                    <div class="progress mt5">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_completion'];?>
%"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb5">
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?>
                                            <span class="text-link">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your profile picture");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your profile picture");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover_default']) {?>
                                            <span class="text-link">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your profile cover");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your profile cover");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_biography']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your biography");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your biography");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_birthdate']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your birthdate");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your birthdate");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_relationship']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your relationship");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your relationship");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_work_title'] || !$_smarty_tpl->tpl_vars['profile']->value['user_work_place']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/work">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your work info");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your work info");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_current_city'] || !$_smarty_tpl->tpl_vars['profile']->value['user_hometown']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/location">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your location info");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your location info");?>
</span>
                                        <?php }?>
                                    </div>
                                    <div class="mb5">
                                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_edu_major'] || !$_smarty_tpl->tpl_vars['profile']->value['user_edu_school']) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile/education">
                                                <i class="fas fa-plus-circle mr5"></i><?php echo __("Add your education info");?>

                                            </a>
                                        <?php } else { ?>
                                            <i class="fas fa-check-circle green mr5"></i>
                                            <span style="text-decoration: line-through;"><?php echo __("Add your education info");?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- panel [profile completion] -->


                        <!-- panel [about] -->
                        <div class="card">
                            <div class="card-body">
                                <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_biography'])) {?>
                                    <div class="about-bio">
                                        <div class="js_readmore overflow-hidden">
                                            <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_biography'];?>

                                        </div>
                                    </div>
                                <?php }?>
                                <ul class="about-list">
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_subscribed']) {?>
                                        <li class="package" <?php if ($_smarty_tpl->tpl_vars['profile']->value['package_color']) {?> style="background: <?php echo $_smarty_tpl->tpl_vars['profile']->value['package_color'];?>
" <?php }?>>
                                            <i class="fa fa-bolt fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['profile']->value['package_name'];?>
 <?php echo __("Member");?>

                                        </li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_title']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 
                                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_place']) {?>
                                                        <?php echo __("at");?>
 
                                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_url']) {?>
                                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</a>
                                                        <?php } else { ?>
                                                            <span><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                                                        <?php }?>
                                                    <?php }?>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_edu_major']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-graduation-cap fa-fw fa-lg"></i>
                                                    <?php echo __("Studied");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_major'];?>
 
                                                    <?php echo __("at");?>
  <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_school'];?>
</span>
                                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_edu_class']) {?>
                                                        <div class="details">
                                                            Class of <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_class'];?>

                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_current_city']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-home fa-fw fa-lg"></i>
                                                    <?php echo __("Lives in");?>
 <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_current_city'];?>
</span>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_hometown']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                                    <?php echo __("From");?>
 <span class="text-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <li>
                                        <div class="about-list-item">
                                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_gender'] == "male") {?>
                                                <i class="fa fa-male fa-fw fa-lg"></i>
                                                <?php echo __("Male");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['user_gender'] == "female") {?>
                                                <i class="fa fa-female fa-fw fa-lg"></i>
                                                <?php echo __("Female");?>

                                            <?php } else { ?>
                                                <i class="fa fa-user fa-fw fa-lg"></i>
                                                <?php echo __("Other");?>

                                            <?php }?>
                                        </div>
                                    </li>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-heart fa-fw fa-lg"></i>
                                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "relationship") {?>
                                                        <?php echo __("In a relationship");?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "complicated") {?>
                                                        <?php echo __("It's complicated");?>

                                                    <?php } else { ?>
                                                        <?php echo __(ucfirst($_smarty_tpl->tpl_vars['profile']->value['user_relationship']));?>

                                                    <?php }?>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'] != null) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-birthday-cake fa-fw fa-lg"></i>
                                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_datetime_format'] == "d/m/Y H:i") {?>
                                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'],"%d/%m/%Y");?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'],"%m/%d/%Y");?>

                                                    <?php }?>
                                                    
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_website']) {?>
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
</a>
                                            </div>
                                        </li>
                                    <?php }?>
                                    
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-rss fa-fw fa-lg"></i>
                                            <?php echo __("Followed by");?>
 
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("people");?>
</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- panel [about] -->

                        <!-- custom fields [basic] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <i class="fa fa-user mr5"></i>
                                        <strong><?php echo __("Basic Info");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="about-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                    <li>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                    </li>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <!-- custom fields [basic] -->


                        <!-- custom fields [work] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <i class="fa fa-briefcase mr5"></i>
                                        <strong><?php echo __("Work Info");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="about-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['work'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                    <li>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                    </li>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <!-- custom fields [work] -->

                        <!-- custom fields [location] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <i class="fa fa-home mr5"></i>
                                        <strong><?php echo __("Location Info");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="about-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['location'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                    <li>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                    </li>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <!-- custom fields [location] -->

                        <!-- custom fields [education] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <i class="fa fa-graduation-cap mr5"></i>
                                        <strong><?php echo __("Education Info");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="about-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['education'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                    <li>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                    </li>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <!-- custom fields [education] -->

                        <!-- custom fields [other] -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <div class="card">
                                    <div class="card-header bg-transparent">
                                        <i class="fa fa-info-circle mr5"></i>
                                        <strong><?php echo __("Other Info");?>
</strong>
                                    </div>
                                    <div class="card-body">
                                        <ul class="about-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['other'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                    <li>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                    </li>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                        <!-- custom fields [other] -->

                        <!-- social links -->
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-share-alt mr5"></i>
                                    <strong><?php echo __("Social Links");?>
</strong>
                                </div>
                                <div class="card-body text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_twitter']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                                           <i class="fab fa-twitter"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_youtube']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_instagram']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                                            <i class="fab fa-vk"></i>
                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                        <!-- social links -->
                    </div>
                    <!-- left panel -->
                    
                    <!-- right panel -->
                    <div class="order-2 col-lg-3 order-lg-3">
                        <!-- gifts -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && $_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_gifts'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_gifts'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                <button type="button" class="btn btn-block btn-md bg-gradient-pink border-0 rounded-pill mb20" data-toggle="modal" data-url="#gifts" data-options='{"uid": <?php echo $_smarty_tpl->tpl_vars['profile']->value["user_id"];?>
}'>
                                    <i class="fas fa-gift fa-lg mr10"></i><?php echo __("Send a Gift");?>

                                </button>
                            <?php }?>
                        <?php }?>
                        <!-- gifts -->

                        <!-- photos -->
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['photos']) {?>
                            <div class="card panel-photos">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-images mr5"></i>
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a></strong>
                                </div>
                                <div class="card-body ptb10 plr10">
                                    <div class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- photos -->

                        <!-- friends -->
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-users mr5"></i>
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a></strong>
                                    <span class="badge badge-pill badge-info ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</span> 
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                                        <small>
                                            (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>)
                                        </small>
                                    <?php }?>
                                </div>
                                <div class="card-body ptb10 plr10">
                                    <div class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_friend');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_friend']->value) {
?>
                                            <div class="col-3 col-lg-4">
                                                <div class="circled-user-box">
                                                    <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_name'];?>
">
                                                        <img alt="<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_lastname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_picture'];?>
" />
                                                        <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_lastname'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_lastname'];?>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- friends -->

                        <!-- pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-flag mr5"></i>
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a></strong>
                                </div>
                                <div class="card-body ptb10 plr10">
                                    <div class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <div class="col-3 col-lg-4">
                                                <div class="circled-user-box">
                                                    <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
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
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pages -->

                        <!-- groups -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-users mr5"></i>
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a></strong>
                                </div>
                                <div class="card-body ptb10 plr10">
                                    <div class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                            <div class="col-3 col-lg-4">
                                                <div class="circled-user-box">
                                                    <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
">
                                                        <img alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" />
                                                        <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- groups -->

                        <!-- events -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <i class="fa fa-calendar mr5"></i>
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events"><?php echo __("Events");?>
</a></strong>
                                </div>
                                <div class="card-body ptb10 plr10">
                                    <div class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                            <div class="col-3 col-lg-4">
                                                <div class="circled-user-box">
                                                    <a class="user-box" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
">
                                                        <img alt="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
" />
                                                        <div style="" class="name" title="<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- events -->
                    </div>
                    <!-- right panel -->
                    
                    <!-- center panel -->
                    <div class="order-3 col-lg-6 order-lg-2">
                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled'] && ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'friends' && $_smarty_tpl->tpl_vars['profile']->value['we_friends'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'public')) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'_privacy'=>true), 0, true);
?>
                            <?php }?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>
                        <?php }?>
                        <!-- pinned post -->

                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id']), 0, false);
?>
                        <!-- posts -->
                    </div>
                    <!-- center panel -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friends") {?>
                    <!-- friends -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users mr10"></i><?php echo __("Friends");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                                            <?php echo __("Friends");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body pb0">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['friends']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more mt0 mb20 js_see-more" data-get="friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have friends");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- friends -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followers") {?>
                    <!-- followers -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users mr10"></i><?php echo __("Friends");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers">
                                            <?php echo __("Followers");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body pb0">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followers_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followers'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>

                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followers']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more mt0 mb20 js_see-more" data-get="followers" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have followers");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- followers -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followings") {?>
                    <!-- followings -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users mr10"></i><?php echo __("Friends");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers">
                                            <strong class="pr5"><?php echo __("Followers");?>
</strong>
                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings">
                                            <?php echo __("Followings");?>

                                            <span class="badge badge-pill badge-info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followings_count'];?>
</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body pb0">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followings_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followings'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>

                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followings']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more mt0 mb20 js_see-more" data-get="followings" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have followings");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- followings -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['photos']) {?>
                                    <ul class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more mt20 js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['albums']) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['albums'], 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-12">
                        <div class="card panel-photos">
                            <div class="card-header with-icon with-nav">
                                <!-- back to albums -->
                                <div class="float-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums" class="btn btn-sm btn-light">
                                        <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-images mr10"></i><?php echo __("Photos");?>

                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="card-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->

                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>
                    <!-- videos -->
                    <div class="col-12">
                        <div class="card panel-videos">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-video mr10"></i><?php echo __("Videos");?>

                                </div>
                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['videos']) {?>
                                    <ul class="row no-gutters">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['videos'], 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have videos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- videos -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>
                    <!-- likes -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <i class="fa fa-thumbs-up mr10"></i><?php echo __("Likes");?>

                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box"), 0, true);
?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="profile_pages" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
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
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No pages to show");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- likes -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
                    <!-- groups -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <i class="fa fa-users mr10"></i><?php echo __("Groups");?>

                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box"), 0, true);
?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="profile_groups" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No groups to show");?>

                                        </p>
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No groups to show");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- groups -->
                
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
                    <!-- events -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-icon">
                                <!-- panel title -->
                                <i class="fa fa-calendar mr10"></i><?php echo __("Events");?>

                                <!-- panel title -->
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box"), 0, true);
?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="profile_events" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No events to show");?>

                                        </p>
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No events to show");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- events -->
                
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['gift']->value) {?>
    <?php echo '<script'; ?>
>
        $(function () {
            modal('#gift');
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
