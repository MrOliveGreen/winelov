<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:15:13
  from '/home/winelov/public_html/content/themes/default/templates/admin.groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3ffa1ece2a2_18065650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c6de199a942d0b7dedf249e50349bd800b7cba' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.groups.tpl',
      1 => 1587804002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_5ea3ffa1ece2a2_18065650 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Go Back");?>
</span>
                </a>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
" class="btn btn-sm btn-info">
                    <i class="fa fa-tv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("View Group");?>
</span>
                </a>
                <button type="button" class="btn btn-sm btn-danger js_admin-deleter" data-handle="group_posts" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
">
                    <i class="fa fa-trash-alt"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Delete All Posts");?>
</span>
                </button>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/add_category" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Add New Category");?>
</span>
                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/categories" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Go Back");?>
</span>
                </a>
            </div>
        <?php }?>
        <i class="fa fa-users mr10"></i><?php echo __("Groups");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "find") {?> &rsaquo; <?php echo __("Find");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?> &rsaquo; <?php echo __("Categories");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?> &rsaquo; <?php echo __("Categories");?>
 &rsaquo; <?php echo __("Add New Category");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?> &rsaquo; <?php echo __("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '' || $_smarty_tpl->tpl_vars['sub_view']->value == "find") {?>

        <div class="card-body">

            <!-- search form -->
            <div class="mb20">
                <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/find" method="get">
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
                    <?php echo __('Search by Group Web Address or Title');?>

                </div>
            </div>
            <!-- search form -->

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Group");?>
</th>
                            <th><?php echo __("Admin");?>
</th>
                            <th><?php echo __("Privacy");?>
</th>
                            <th><?php echo __("Members");?>
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
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
</a>
                                    </td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['group_title'];?>

                                        </a>
                                    </td>
                                    <td>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                            <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>

                                        </a>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "public") {?>
                                            <i class="fa fa-globe fa-fw mr5"></i><?php echo __("Public");?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "closed") {?>
                                            <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo __("Closed");?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['group_privacy'] == "secret") {?>
                                            <i class="fa fa-lock fa-fw mr5"></i><?php echo __("Secret");?>

                                        <?php }?>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['group_members'];?>
</td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/edit_group/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_group") {?>

        <form class="js_ajax-forms " data-url="admin/groups.php?do=edit_group&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-2 text-center mb20">
                        <img class="img-fluid img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_picture'];?>
">
                    </div>
                    <div class="col-12 col-md-10 mb20">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
</span>
                                <?php echo __("Group ID");?>

                            </li>
                            <li class="list-group-item">
                                <span class="float-right badge badge-lg badge-pill badge-secondary"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_members'];?>
</span>
                                <?php echo __("Members");?>

                            </li>
                            <li class="list-group-item">
                                <span class="float-right badge badge-lg badge-pill badge-secondary">
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "public") {?>
                                        <i class="fa fa-globe fa-fw mr5"></i><?php echo __("Public");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "closed") {?>
                                        <i class="fa fa-unlock-alt fa-fw mr5"></i><?php echo __("Closed");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "secret") {?>
                                        <i class="fa fa-lock fa-fw mr5"></i><?php echo __("Secret");?>

                                    <?php }?>
                                </span>
                                <?php echo __("Privacy");?>

                            </li>
                        </ul>
                    </div>
                </div>

                <!-- tabs nav -->
                <ul class="nav nav-tabs mb20">
                    <li class="nav-item">
                        <a class="nav-link active" href="#group_settings" data-toggle="tab">
                            <i class="fa fa-cog fa-fw mr5"></i><strong><?php echo __("Group Settings");?>
</strong>
                        </a>
                    </li>
                </ul>
                <!-- tabs nav -->

                <!-- tabs content -->
                <div class="tab-content">
                    <!-- settings tab -->
                    <div class="tab-pane active" id="group_settings">
                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Founder");?>

                            </label>
                            <div class="col-md-9">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>

                                </a>
                                <a target="_blank" data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" class="btn btn-sm btn-light btn-icon btn-rounded ml10">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Name Your Group");?>

                            </label>
                            <div class="col-md-9">
                                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Web Address");?>

                            </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span>
                                    </div>
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Select Privacy");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control selectpicker" name="privacy">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-lg'></i></div><div class='text'><b><?php echo __("Public Group");?>
</b><br><?php echo __("Anyone can see the group, its members and their posts");?>
.
                                    </div></div>"><?php echo __("Public Group");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-lg'></i></div><div class='text'><b><?php echo __("Closed Group");?>
</b><br><?php echo __("Only members can see posts");?>
.
                                    </div></div>"><?php echo __("Closed Group");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-lg'></i></div><div class='text'><b><?php echo __("Secret Group");?>
</b><br><?php echo __("Only members can find the group and see posts");?>
.
                                    </div></div>"><?php echo __("Secret Group");?>
</option>
                                </select>
                                <span class="form-text">
                                    (<?php echo __("Note: Change group privacy to public will approve any pending join requests");?>
)
                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Category");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="category">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['data']->value['group_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("About");?>

                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_description'];?>
</textarea>
                            </div>
                        </div>

                        <!-- custom fields -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false,'_inline'=>true), 0, false);
?>
                        <?php }?>
                        <!-- custom fields -->

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Members Can Publish Posts?");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Members can publish posts or only group admins");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="group_publish_enabled">
                                    <input type="checkbox" name="group_publish_enabled" id="group_publish_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['group_publish_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Post Approval");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("All posts must be approved by a group admin");?>
<br>
                                    (<?php echo __("Note: Disable it will approve any pending posts");?>
)
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="group_publish_approval_enabled">
                                    <input type="checkbox" name="group_publish_approval_enabled" id="group_publish_approval_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['group_publish_approval_enabled']) {?>checked<?php }?>>
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
                    <!-- settings tab -->
                </div>
                <!-- tabs content -->
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Order");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_order'];?>
</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="group_category" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>

        <form class="js_ajax-forms " data-url="admin/groups.php?do=add_category">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="category_name">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="category_order">
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
        
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>

        <form class="js_ajax-forms " data-url="admin/groups.php?do=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category_order'];?>
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

    <?php }?>
</div><?php }
}
