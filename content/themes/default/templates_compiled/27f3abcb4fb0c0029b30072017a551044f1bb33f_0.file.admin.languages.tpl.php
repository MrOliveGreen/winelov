<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:42:50
  from '/home/winelov/public_html/content/themes/default/templates/admin.languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4061a8751c0_03615275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f3abcb4fb0c0029b30072017a551044f1bb33f' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.languages.tpl',
      1 => 1587804003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea4061a8751c0_03615275 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/languages/add" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Language");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/languages" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-globe mr10"></i><?php echo __("Languages");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Language");
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
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Code");?>
</th>
                            <th><?php echo __("Dir");?>
</th>
                            <th><?php echo __("Default");?>
</th>
                            <th><?php echo __("Enabled");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
</td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/languages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['flag'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['enabled']) {?>
                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/languages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="language" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
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

        <form class="js_ajax-forms " data-url="admin/languages.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['language_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-md-9">
                        <label class="switch" for="default">
                            <input type="checkbox" name="default" id="default" <?php if ($_smarty_tpl->tpl_vars['data']->value['default']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="form-text">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-md-9">
                        <label class="switch" for="enabled">
                            <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="form-text">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                        <span class="form-text">
                            <?php echo __("Language country_code, For Example: en_us, ar_sa or fr_fr");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                        <span class="form-text">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Flag");?>

                    </label>
                    <div class="col-md-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['flag'] == '') {?>
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="flag" value="">
                            </div>
                        <?php } else { ?>
                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['flag'];?>
')">
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="flag" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['flag'];?>
">
                            </div>
                        <?php }?>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="dir">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "LTR") {?>selected<?php }?> value="LTR">LTR</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "RTL") {?>selected<?php }?> value="RTL">RTL</option>
                        </select>
                        <span class="form-text">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

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

        <form class="js_ajax-forms " data-url="admin/languages.php?do=add">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-md-9">
                        <label class="switch" for="default">
                            <input type="checkbox" name="default" id="default">
                            <span class="slider round"></span>
                        </label>
                        <span class="form-text">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-md-9">
                        <label class="switch" for="enabled">
                            <input type="checkbox" name="enabled" id="enabled">
                            <span class="slider round"></span>
                        </label>
                        <span class="form-text">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="code">
                        <span class="form-text">
                            <?php echo __("Language country_code, For Example: en_us, ar_sa or fr_fr");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title">
                        <span class="form-text">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Flag");?>

                    </label>
                    <div class="col-md-9">
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="flag" value="">
                        </div>
                    </div>
                </div>
                
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="dir">
                            <option value="LTR">LTR</option>
                            <option value="RTL">RTL</option>
                        </select>
                        <span class="form-text">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

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
