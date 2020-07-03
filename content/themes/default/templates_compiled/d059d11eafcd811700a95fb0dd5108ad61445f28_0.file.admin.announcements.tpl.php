<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 14:18:16
  from '/home/winelov/public_html/content/themes/default/templates/admin.announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebea4a80fc271_39300697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd059d11eafcd811700a95fb0dd5108ad61445f28' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.announcements.tpl',
      1 => 1587803995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebea4a80fc271_39300697 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/announcements/add" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Announcement");?>

                </a>
            </div>
        <?php } else { ?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/announcements" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-bullhorn mr10"></i><?php echo __("Announcements");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Announcement");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Type");?>
</th>
                            <th><?php echo __("Start Date");?>
</th>
                            <th><?php echo __("End Date");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['start_date'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['end_date'];?>
</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/announcements/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="announcement" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>

        <form class="js_ajax-forms " data-url="admin/announcements.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['announcement_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                        <span class="form-text">
                            <?php echo __("Announcement name will appear only in the admin panel (mandatory)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                        <span class="form-text">
                            <?php echo __("Announcement title will appear on the announcement block");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="type">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "success") {?>selected<?php }?> value="success" class="alert-success"><?php echo __("Success");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "warning") {?>selected<?php }?> value="warning" class="alert-warning"><?php echo __("Warning");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "danger") {?>selected<?php }?> value="danger" class="alert-danger"><?php echo __("Danger");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "info") {?>selected<?php }?> value="info" class="alert-info"><?php echo __("Info");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control js_wysiwyg-advanced" name="code"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Start Date");?>

                    </label>
                    <div class="col-md-9">
                        <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                            <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['start_date']);?>
" />
                            <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <span class="form-text">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("End Date");?>

                    </label>
                    <div class="col-md-9">
                        <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
                            <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['end_date']);?>
" />
                            <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <span class="form-text">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>

        <form class="js_ajax-forms " data-url="admin/announcements.php?do=add">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="name">
                        <span class="form-text">
                            <?php echo __("Announcement name will appear only in the admin panel");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title">
                        <span class="form-text">
                            <?php echo __("Announcement title will appear on the announcement block");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="type">
                            <option value="success" class="alert-success"><?php echo __("Success");?>
</option>
                            <option value="warning" class="alert-warning"><?php echo __("Warning");?>
</option>
                            <option value="danger" class="alert-danger"><?php echo __("Danger");?>
</option>
                            <option value="info" class="alert-info"><?php echo __("Info");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control js_wysiwyg-advanced" name="code"></textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Start Date");?>

                    </label>
                    <div class="col-md-9">
                        <div class="input-group date js_datetimepicker" id="start_date" data-target-input="nearest">
                            <input type='text' class="form-control datetimepicker-input" data-target="#start_date" name="start_date" />
                            <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <span class="form-text">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("End Date");?>

                    </label>
                    <div class="col-md-9">
                        <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
                            <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" />
                            <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <span class="form-text">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
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
