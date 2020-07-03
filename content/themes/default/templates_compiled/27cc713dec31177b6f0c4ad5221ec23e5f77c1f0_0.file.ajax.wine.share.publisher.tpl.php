<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 08:24:01
  from '/home/winelov/public_html/content/themes/default/templates/ajax.wine.share.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed369a129ee83_52373848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27cc713dec31177b6f0c4ad5221ec23e5f77c1f0' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ajax.wine.share.publisher.tpl',
      1 => 1590911184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed369a129ee83_52373848 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-share mr5"></i><?php echo __("Share");?>

    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms " data-url="posts/article.php?do=create">
    <div class="modal-body">
        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
            <div class="post-social-share">
                <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                    <i class="fab fa-reddit"></i>
                </a>
                <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        <?php }?>

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                <?php echo __("Name");?>

            </label>
            <div class="col-md-10">
                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['wine']->value['name'];?>
" readonly>
            </div>
        </div>

        <div class="form-group form-row" style="display: none;">
            <label class="col-md-2 form-control-label">
                <?php echo __("Content");?>

            </label>
            <div class="col-md-10">
                <textarea name="text" class="form-control js_wysiwyg">&lt;p&gt;&lt;a title=&quot;sssssssdf&quot; href=&quot;<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['wine']->value['Id_item'];?>
&quot;&gt;<?php echo $_smarty_tpl->tpl_vars['wine']->value['name'];?>
&lt;/a&gt;&lt;/p&gt;</textarea>
            </div>
        </div>

        <div class="form-group form-row" style="display: none;">
            <label class="col-md-2 form-control-label">
                <?php echo __("Cover");?>

            </label>
            <div class="col-md-10">
                <div class="x-image">
                    <input type="hidden" class="js_x-image-input" name="cover" value="<?php echo $_smarty_tpl->tpl_vars['wine']->value['image_URL'];?>
">
                </div>
            </div>
        </div>

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                <?php echo __("Category");?>

            </label>
            <div class="col-md-10">
                <select class="form-control" name="category" readonly="">
                    <option value="23" selected>Wine</option>
                </select>
            </div>
        </div>

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                <?php echo __("Winery");?>

            </label>
            <div class="col-md-10">
                <input class="form-control" name="tags" value="<?php echo $_smarty_tpl->tpl_vars['wine']->value['winery'];?>
" readonly>
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
