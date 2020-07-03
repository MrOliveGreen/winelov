<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 13:07:11
  from '/home/winelov/public_html/content/themes/default/templates/ajax.share.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea435ffe39486_87496912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d809d56a48dac9e3ebb7f62f40b3108b9dc8c0d' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ajax.share.publisher.tpl',
      1 => 1587804018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea435ffe39486_87496912 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-share mr5"></i><?php echo __("Share");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms " data-url="posts/share.php?do=publish&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
    <div class="modal-body">
        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
            <div class="post-social-share">
                <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                    <i class="fab fa-reddit"></i>
                </a>
                <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        <?php }?>

        <div class="h5 text-center">
            <?php echo __("Share the post to");?>

        </div>

        <!-- share to options -->
        <div class="mb20 text-center">
            <!-- Timeline -->
            <input class="x-hidden input-label" type="radio" name="share_to" id="share_to_timeline" value="timeline" checked="checked"/>
            <label class="button-label" for="share_to_timeline">
                <div class="icon">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/newfeed.png">
                </div>
                <div class="title"><?php echo __("Timeline");?>
</div>
            </label>
            <!-- Timeline -->
            <!-- Page -->
            <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
                <input class="x-hidden input-label" type="radio" name="share_to" id="share_to_page" value="page"/>
                <label class="button-label" for="share_to_page">
                    <div class="icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/pages.png">
                    </div>
                    <div class="title"><?php echo __("Page");?>
</div>
                </label>
            <?php }?>
            <!-- Page -->
            <!-- Group -->
            <?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
                <input class="x-hidden input-label" type="radio" name="share_to" id="share_to_group" value="group"/>
                <label class="button-label" for="share_to_group">
                    <div class="icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/groups.png">
                    </div>
                    <div class="title"><?php echo __("Group");?>
</div>
                </label>
            <?php }?>
            <!-- Group -->
        </div>
        <!-- share to options -->

        <div id="js_share-to-page" class="x-hidden">
            <div class="form-group">
                <label class="form-control-label"><?php echo __("Select Page");?>
</label>
                <select name="page" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
            
        <div id="js_share-to-group" class="x-hidden">
            <div class="form-group">
                <label class="form-control-label"><?php echo __("Select Groups");?>
</label>
                <select name="group" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-control-label"><?php echo __("Message");?>
</label>
                    <textarea name="message" rows="3" dir="auto" class="form-control"></textarea>
                </div>
            </div>
        </div>

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><?php echo __("Share");?>
</button>
    </div>
</form>

<?php echo '<script'; ?>
 type="text/javascript">
    /* share post */
    $('input[type=radio][name=share_to]').on('change', function() {
        switch ($(this).val()) {
            case 'timeline':
                $('#js_share-to-page').hide();
                $('#js_share-to-group').hide();
                break;
            case 'page':
                $('#js_share-to-page').fadeIn();
                $('#js_share-to-group').hide();
                break;
            case 'group':
                $('#js_share-to-page').hide();
                $('#js_share-to-group').fadeIn();
                break;
          }
    });
<?php echo '</script'; ?>
><?php }
}
