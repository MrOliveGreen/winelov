<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-27 05:33:13
  from '/home/winelov/public_html/content/themes/default/templates/__feeds_post_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea66e9932b408_60900124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca98c8aff30828737d9481dd52c12c52d1e41f68' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/__feeds_post_photo.tpl',
      1 => 1587804051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
  ),
),false)) {
function content_5ea66e9932b408_60900124 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- post body -->
<div class="post-body <?php if ($_smarty_tpl->tpl_vars['_lightbox']->value) {?>pt0<?php }?>">

    <!-- post header -->
    <div class="post-header">
        <!-- post picture -->
        <div class="post-avatar">
            <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_picture'];?>
);">
            </a>
        </div>
        <!-- post picture -->

        <!-- post meta -->
        <div class="post-meta">
            <!-- post author -->
            <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
</a>
            </span>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_author_verified']) {?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "user") {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php } else { ?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_subscribed']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
            <?php }?>
            <!-- post author -->

            <!-- post time & location & privacy -->
            <div class="post-time">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</a>

                <?php if ($_smarty_tpl->tpl_vars['post']->value['location']) {?>
                ·
                <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</span>
                <?php }?>

                - 
                <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "me") {?>
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Only Me");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                    <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Friends");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                    <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Public");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "custom") {?>
                    <i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
                <?php }?>
            </div>
            <!-- post time & location & privacy -->
        </div>
        <!-- post meta -->
    </div>
    <!-- post header -->

    <!-- photo -->
    <?php if (!$_smarty_tpl->tpl_vars['_lightbox']->value) {?>
        <div class="mt10 clearfix">
            <div class="pg_wrapper">
                <div class="pg_1x <?php if ($_smarty_tpl->tpl_vars['photo']->value['blur']) {?>x-blured<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>album<?php } else { ?>post<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
">
                    </a>
                </div>
            </div>
        </div>
    <?php }?>
    <!-- photo -->

    <!-- post stats -->
    <div class="post-stats clearfix">
        <!-- reactions stats -->
        <?php if ($_smarty_tpl->tpl_vars['photo']->value['reactions_total_count'] > 0) {?>
            <div class="float-left" data-toggle="modal" data-url="posts/who_reacts.php?<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else { ?>photo_id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
                <div class="reactions-stats">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo']->value['reactions'], 'reaction_count', false, 'reaction_type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reaction_type']->value => $_smarty_tpl->tpl_vars['reaction_count']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['reaction_count']->value > 0) {?>
                            <div class="reactions-stats-item">
                                <div class="inline-emoji no_animation">
                                    <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction_type']->value), 0, true);
?>
                                </div>
                            </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- reactions count -->
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['photo']->value['reactions_total_count'];?>

                    </span>
                    <!-- reactions count -->
                </div>
            </div>
        <?php }?>
        <!-- reactions stats -->

        <!-- comments & shares -->
        <span class="float-right">
            <!-- comments -->
            <span class="pointer js_comments-toggle">
                <i class="fa fa-comments"></i> <?php echo $_smarty_tpl->tpl_vars['photo']->value['comments'];?>
 <?php echo __("Comments");?>

            </span>
            <!-- comments -->

            <!-- shares -->
            <span class="pointer ml10 <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                <i class="fa fa-share"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
 <?php echo __("Shares");?>

            </span>
            <!-- shares -->
        </span>
        <!-- comments & shares -->
    </div>
    <!-- post stats -->

    <!-- post actions -->
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <div class="post-actions clearfix">
            <!-- reactions -->
            <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->tpl_vars['photo']->value['i_react']) {?>js_unreact-<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post<?php } else { ?>photo<?php }
}?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['photo']->value['i_reaction'];?>
">
                <!-- reaction-btn -->
                <div class="reaction-btn">
                    <?php if (!$_smarty_tpl->tpl_vars['photo']->value['i_react']) {?>
                        <div class="reaction-btn-icon">
                            <i class="fa fa-thumbs-up fa-fw"></i>
                        </div>
                        <span class="reaction-btn-name"><?php echo __("Like");?>
</span>
                    <?php } else { ?>
                        <div class="reaction-btn-icon">
                            <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['photo']->value['i_reaction']), 0, true);
?>
                            </div>
                        </div>
                        <span class="reaction-btn-name <?php echo $_smarty_tpl->tpl_vars['photo']->value['i_reaction_details']['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['photo']->value['i_reaction_details']['title'];?>
</span>
                    <?php }?>
                </div>
                <!-- reaction-btn -->

                <!-- reactions-container -->
                <div class="reactions-container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reactions']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->iteration++;
$__foreach_reaction_1_saved = $_smarty_tpl->tpl_vars['reaction'];
?>
                        <div class="reactions_item duration-<?php echo $_smarty_tpl->tpl_vars['reaction']->iteration;?>
 js_react-<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post<?php } else { ?>photo<?php }?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['color'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['title'];?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction']->value['reaction']), 0, true);
?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['reaction'] = $__foreach_reaction_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <!-- reactions-container -->
            </div>
            <!-- reactions -->

            <!-- comment -->
            <span class="action-btn js_comment <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_disabled']) {?>x-hidden<?php }?>">
                <i class="fa fa-comment"></i> <span><?php echo __("Comment");?>
</span>
            </span>
            <!-- comment -->

            <!-- share -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                    <i class="fa fa-share fa-fw mr5"></i><span><?php echo __("Share");?>
</span>
                </div>
            <?php }?>
            <!-- share -->
        </div>
    <?php }?>
    <!-- post actions -->
</div>

<!-- post footer -->
<div class="post-footer">
    <!-- comments -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_is_photo'=>!$_smarty_tpl->tpl_vars['photo']->value['is_single'] ? true : false), 0, false);
?>
    <!-- comments -->
</div>
<!-- post footer --><?php }
}
