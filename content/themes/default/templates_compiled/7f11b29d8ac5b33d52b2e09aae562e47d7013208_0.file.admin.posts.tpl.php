<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:15:02
  from '/home/winelov/public_html/content/themes/default/templates/admin.posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3ff96184c59_92710711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f11b29d8ac5b33d52b2e09aae562e47d7013208' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.posts.tpl',
      1 => 1587804006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3ff96184c59_92710711 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/posts" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-newspaper mr10"></i><?php echo __("Posts");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?> &rsaquo; <?php echo __("Find");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '' || $_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>

        <div class="card-body">

            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                <div class="form-row">
                    <div class="col-sm-4">
                        <div class="stat-panel bg-gradient-indigo">
                            <div class="stat-cell">
                                <i class="fa fa-newspaper bg-icon"></i>
                                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts'];?>
</span><br>
                                <span class="text-lg"><?php echo __("Posts");?>
</span><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stat-panel bg-gradient-primary">
                            <div class="stat-cell">
                                <i class="fa fa-comments bg-icon"></i>
                                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_comments'];?>
</span><br>
                                <span class="text-lg"><?php echo __("Comments");?>
</span><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stat-panel bg-gradient-info">
                            <div class="stat-cell">
                                <i class="fa fa-thumbs-up bg-icon"></i>
                                <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts_likes'];?>
</span><br>
                                <span class="text-lg"><?php echo __("Total Reactions");?>
</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <!-- search form -->
            <div class="mb20">
                <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/posts/find" method="get">
                    <div class="form-group mb0">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search mr5"></i><?php echo __("Search");?>
</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-text small">
                    <?php echo __('Search by Post ID or Text');?>

                </div>
            </div>
            <!-- search form -->

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Author");?>
</th>
                            <th><?php echo __("Type");?>
</th>
                            <th><?php echo __("Time");?>
</th>
                            <th><?php echo __("Link");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
</td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_url'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['post_author_name'];?>

                                        </a>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value['post_type'] == '') {?>
                                            <?php echo __("Text");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "shared") {?>
                                            <?php echo __("Share");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "link") {?>
                                            <?php echo __("Link");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "album") {?>
                                            <?php echo __("Album");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "poll") {?>
                                            <?php echo __("Poll");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "product") {?>
                                            <?php echo __("Product");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "article") {?>
                                            <?php echo __("Article");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "video") {?>
                                            <?php echo __("Video");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "audio") {?>
                                            <?php echo __("Audio");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "file") {?>
                                            <?php echo __("File");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "photos") {?>
                                            <?php echo __("Photos");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "profile_picture") {?>
                                            <?php echo __("Profile Picture");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "profile_cover") {?>
                                            <?php echo __("Cover Photo");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "page_picture") {?>
                                            <?php echo __("Page Picture");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "page_cover") {?>
                                            <?php echo __("Page Cover");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "group_picture") {?>
                                            <?php echo __("Group Picture");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "group_cover") {?>
                                            <?php echo __("Group Cover");?>


                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['post_type'] == "event_cover") {?>
                                            <?php echo __("Event Cover");?>

                                            
                                        <?php }?>
                                    </td>
                                    <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</span></td>
                                    <td>
                                        <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
" target="_blank">
                                            <i class="fa fa-eye mr5"></i><?php echo __("View");?>

                                        </a>
                                    </td>
                                    <td>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="post" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['post_id'];?>
">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <?php echo __("No data to show");?>

                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        </div>

    <?php }?>
</div><?php }
}
