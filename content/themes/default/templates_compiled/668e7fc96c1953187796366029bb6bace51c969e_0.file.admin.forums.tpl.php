<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:45:21
  from '/home/winelov/public_html/content/themes/default/templates/admin.forums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea406b1501bf4_44014224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668e7fc96c1953187796366029bb6bace51c969e' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.forums.tpl',
      1 => 1587804001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_rows.tpl' => 1,
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
),false)) {
function content_5ea406b1501bf4_44014224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/add_forum" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Forum");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "find_threads") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/threads" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "find_replies") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/replies" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-comments mr10"></i><?php echo __("Forums");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "settings") {?> &rsaquo; <?php echo __("Settings");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum") {?> &rsaquo; <?php echo __("Add New Forum");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['forum_name'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "threads") {?> &rsaquo; <?php echo __("Threads");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find_threads") {?> &rsaquo; <?php echo __("Threads");?>
 &rsaquo; <?php echo __("Find");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "replies") {?> &rsaquo; <?php echo __("Replies");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find_replies") {?> &rsaquo; <?php echo __("Replies");?>
 &rsaquo; <?php echo __("Find");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "settings") {?>

        <form class="js_ajax-forms " data-url="admin/forums.php?do=settings">
            <div class="card-body">
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Forums");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the forums On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="forums_enabled">
                            <input type="checkbox" name="forums_enabled" id="forums_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Online Users");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Show online users");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="forums_online_enabled">
                            <input type="checkbox" name="forums_online_enabled" id="forums_online_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_online_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Statistics");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Show forums statistics");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="forums_statistics_enabled">
                            <input type="checkbox" name="forums_statistics_enabled" id="forums_statistics_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_statistics_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover js_treegrid">
                    <thead>
                        <tr>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Description");?>
</th>
                            <th><?php echo __("Threads");?>
</th>
                            <th><?php echo __("Order");?>
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
                                <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <?php echo __("No data to show");?>

                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_forum") {?>

        <form class="js_ajax-forms " data-url="admin/forums.php?do=add_forum">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="forum_name">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="forum_description"></textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Section");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="forum_section">
                            <option value="0" class="text-success"><?php echo __("Set as a Section");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forums']->value, 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="forum_order">
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_forum") {?>

        <form class="js_ajax-forms " data-url="admin/forums.php?do=edit_forum&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="forum_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_name'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="forum_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['forum_description'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Section");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="forum_section">
                            <option value="0" class="text-success"><?php echo __("Set as a Section");?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['sections'], 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="forum_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['forum_order'];?>
">
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 x-hidden"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "threads" || $_smarty_tpl->tpl_vars['sub_view']->value == "find_threads") {?>

        <div class="card-body">

            <!-- search form -->
            <div class="mb20">
                <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/find_threads" method="get">
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
                    <?php echo __('Search by Thread Title or Text');?>

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
                            <th><?php echo __("Title");?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['thread_id'];?>
</td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_author_url'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_author_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['thread_author_name'];?>

                                        </a>
                                    </td>
                                    <td>
                                        <span title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],30);?>
</span>
                                    </td>
                                    <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</span></td>
                                    <td>
                                        <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_title_url'];?>
" target="_blank">
                                            <i class="fa fa-eye mr5"></i><?php echo __("View");?>

                                        </a>
                                    </td>
                                    <td>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="forum_thread" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_id'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "replies" || $_smarty_tpl->tpl_vars['sub_view']->value == "find_replies") {?>

        <div class="card-body">

            <!-- search form -->
            <div class="mb20">
                <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/forums/find_replies" method="get">
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
                    <?php echo __('Search by Reply Text');?>

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
                            <th><?php echo __("Thread");?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['reply_id'];?>
</td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['reply_author_url'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['reply_author_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['reply_author_name'];?>

                                        </a>
                                    </td>
                                    <td>
                                        <span title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],30);?>
</span>
                                    </td>
                                    <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</span></td>
                                    <td>
                                        <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['thread_title_url'];?>
/#reply-<?php echo $_smarty_tpl->tpl_vars['row']->value['reply_id'];?>
" target="_blank">
                                            <i class="fa fa-eye mr5"></i><?php echo __("View");?>

                                        </a>
                                    </td>
                                    <td>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="forum_reply" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['reply_id'];?>
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
