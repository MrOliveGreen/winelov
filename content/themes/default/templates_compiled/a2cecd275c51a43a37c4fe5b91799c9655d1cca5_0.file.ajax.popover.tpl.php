<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-10 13:53:42
  from '/home/winelov/public_html/content/themes/default/templates/ajax.popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb80766a9dad1_43798186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2cecd275c51a43a37c4fe5b91799c9655d1cca5' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ajax.popover.tpl',
      1 => 1587804016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb80766a9dad1_43798186 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == "user") {?>
    <!-- user popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');"<?php }?>>
            </div>
            <div class="user-card-avatar">
                <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <div class="info">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("followers");?>
</a>
                </div>
            </div>
        </div>
        <div class="user-card-meta">
            <!-- mutual friends -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                <div class="mb10">
                    <i class="fa fa-users fa-fw mr5"></i>
                    <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>
                </div>
            <?php }?>
            <!-- mutual friends -->
            <!-- work -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_work_title'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-briefcase fa-fw mr5"></i>
                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("at");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- work -->
            <!-- hometown -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_hometown'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-map-marker fa-fw mr5"></i>
                        <?php echo __("From");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- hometown -->
        </div>
        <div class="footer">
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
                        <i class="fa fa-user-plus mr5"></i><?php echo __("Friend Request Sent");?>

                    </button>
                <?php } else { ?>
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
                <button type="button" class="btn btn-sm btn-primary mlr5 js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                    <i class="fa fa-comments mr5"></i><?php echo __("Message");?>

                </button>
                <!-- message -->
            <?php } else { ?>
                <!-- edit -->
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-sm btn-light">
                    <i class="fa fa-pencil-alt mr5"></i><?php echo __("Update Info");?>

                </a>
                <!-- edit -->
            <?php }?>
        </div>
    </div>
    <!-- user popover -->
<?php } else { ?>
    <!-- page popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_cover'];?>
');"<?php }?>></div>
            <div class="user-card-avatar">
                <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <div class="info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
            </div>
        </div>
        <div class="footer">
            <!-- like -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_like']) {?>
                <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-up fa-fw mr5"></i><?php echo __("Unlike");?>

                </button>
            <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-up mr5"></i><?php echo __("Like");?>

                </button>
            <?php }?>
            <!-- like -->
        </div>
    </div>
    <!-- page popover -->
<?php }
}
}
