<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:45:51
  from '/home/winelov/public_html/content/themes/default/templates/admin.ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea406cf89d858_78100009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11eb8d5a408efaa19bdc08a42ddaed6cfb1e9c49' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.ads.tpl',
      1 => 1587803994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea406cf89d858_78100009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "system_ads") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/add" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Ads");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/system_ads" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-dollar-sign mr10"></i><?php echo __("Ads");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?> &rsaquo; <?php echo __("Settings");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "system_ads") {?> &rsaquo; <?php echo __("System Ads");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "users_ads") {?> &rsaquo; <?php echo __("Users Ads");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <?php echo __("Add New Ads");
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <form class="js_ajax-forms " data-url="admin/ads.php?do=settings">
            <div class="card-body">
                <!-- adblock-warning-message -->
                <div class="adblock-warning-message mb10">
                    <?php echo __("Turn off the ad blocker or add this web page's URL as an exception so you use ads system without any problems");?>
, <?php echo __("After you turn off the ad blocker, you'll need to refresh your screen");?>

                </div>
                <!-- adblock-warning-message -->

                <div class="alert alert-warning">
                    <div class="icon">
                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                        <?php echo __("Make sure you have configured");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
                    </div>
                </div>
            
            
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Ads");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Allow users to create ads");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="ads_enabled">
                            <input type="checkbox" name="ads_enabled" id="ads_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Cost by View");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ads_cost_view" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_view'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Cost by Click");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="ads_cost_click" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_click'];?>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "system_ads") {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Place");?>
</th>
                            <th><?php echo __("Date");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo __("Home  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo __("Search  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo __("Discover People  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo __("Notifications  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo __("Post  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {?><i class='fa fa-file-image fa-fw mr5'></i><?php echo __("Photo  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo __("Directory  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "market") {?><i class='fa fa-shopping-bag fa-fw mr5'></i><?php echo __("Market  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "movies") {?><i class='fa fa-film fa-fw mr5'></i><?php echo __("Movies  Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_1") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 1<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_2") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 2<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_3") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo __("Posts Feed");?>
 3<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "article") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo __("Article Page");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "header") {?><i class='fa fa-chevron-circle-up fa-fw mr5'></i><?php echo __("Header");
}?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "footer") {?><i class='fa fa-chevron-circle-down fa-fw mr5'></i><?php echo __("Footer");
}?>
                                </td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="ads_system" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
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

        <form class="js_ajax-forms " data-url="admin/ads.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control selectpicker" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Home");?>
</b><br><?php echo __("Appears on the right panel of home page");?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "search") {?>selected<?php }?> value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Search");?>
</b><br><?php echo __("Appears on the right panel of search page");?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "people") {?>selected<?php }?> value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Discover People");?>
</b><br><?php echo __("Appears on the right panel of discover people page");?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Notifications");?>
</b><br><?php echo __("Appears on the right panel of notifications page");?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Post");?>
</b><br><?php echo __("Appears on the right panel of post page");?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-file-image fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Photo");?>
</b><br><?php echo __("Appears on the right panel of photo page");?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "directory") {?>selected<?php }?> value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Directory");?>
</b><br><?php echo __("Appears on the right panel of directory");?>
.
                            </div></div>"><?php echo __("Directory");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "market") {?>selected<?php }?> value="market" data-content="<div class='option'><div class='icon'><i class='fa fa-shopping-bag fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Market");?>
</b><br><?php echo __("Appears on the top of products list");?>
.
                            </div></div>"><?php echo __("Market");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "movies") {?>selected<?php }?> value="movies" data-content="<div class='option'><div class='icon'><i class='fa fa-film fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Movies");?>
</b><br><?php echo __("Appears on the top of movies page");?>
.
                            </div></div>"><?php echo __("Movies");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_1") {?>selected<?php }?> value="newfeed_1" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 1</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 1</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_2") {?>selected<?php }?> value="newfeed_2" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 2</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*2;?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 2</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_3") {?>selected<?php }?> value="newfeed_3" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 3</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*3;?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 3</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "article") {?>selected<?php }?> value="article" data-content="<div class='option'><div class='icon'><i class='fa fa-file-alt fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Article Page");?>
</b><br><?php echo __("Appears on the sidebar on article page");?>
.
                            </div></div>"><?php echo __("Article Page");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "header") {?>selected<?php }?> value="header" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-up fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Header");?>
</b><br><?php echo __("Appears on all pages right after the header");?>
.
                            </div></div>"><?php echo __("Header");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "footer") {?>selected<?php }?> value="footer" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-down fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Footer");?>
</b><br><?php echo __("Appears on all pages right before the footer");?>
.
                            </div></div>"><?php echo __("Footer");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
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

        <form class="js_ajax-forms " data-url="admin/ads.php?do=add">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="title">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control selectpicker" name="place">
                            <option value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Home");?>
</b><br><?php echo __("Appears on the right panel of home page");?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Search");?>
</b><br><?php echo __("Appears on the right panel of search page");?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Discover People");?>
</b><br><?php echo __("Appears on the right panel of discover people page");?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Notifications");?>
</b><br><?php echo __("Appears on the right panel of notifications page");?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Post");?>
</b><br><?php echo __("Appears on the right panel of post page");?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-file-image fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Photo");?>
</b><br><?php echo __("Appears on the right panel of photo page");?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Directory");?>
</b><br><?php echo __("Appears on the right panel of directory");?>
.
                            </div></div>"><?php echo __("Directory");?>
</option>

                            <option value="market" data-content="<div class='option'><div class='icon'><i class='fa fa-shopping-bag fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Market");?>
</b><br><?php echo __("Appears on the top of products list");?>
.
                            </div></div>"><?php echo __("Market");?>
</option>

                            <option value="movies" data-content="<div class='option'><div class='icon'><i class='fa fa-film fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Movies");?>
</b><br><?php echo __("Appears on the top of movies page");?>
.
                            </div></div>"><?php echo __("Movies");?>
</option>

                            <option value="newfeed_1" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 1</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 1</option>

                            <option value="newfeed_2" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 2</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*2;?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 2</option>

                            <option value="newfeed_3" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Posts Feed");?>
 3</b><br><?php echo __("Appears after");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*3;?>
 <?php echo __("posts are loaded, between the posts");?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 3</option>

                            <option value="article" data-content="<div class='option'><div class='icon'><i class='fa fa-file-alt fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Article Page");?>
</b><br><?php echo __("Appears on the sidebar on article page");?>
.
                            </div></div>"><?php echo __("Article Page");?>
</option>

                            <option value="header" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-up fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Header");?>
</b><br><?php echo __("Appears on all pages right after the header");?>
.
                            </div></div>"><?php echo __("Header");?>
</option>

                            <option value="footer" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-down fa-fw fa-lg'></i></div><div class='text'><b><?php echo __("Footer");?>
</b><br><?php echo __("Appears on all pages right before the footer");?>
.
                            </div></div>"><?php echo __("Footer");?>
</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="message" rows="8"></textarea>
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

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "users_ads") {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("By");?>
</th>
                            <th><?php echo __("Budget");?>
</th>
                            <th><?php echo __("Spend");?>
</th>
                            <th><?php echo __("Clicks/Views");?>
</th>
                            <th><?php echo __("Status");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_title'];?>
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
                                
                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['row']->value['campaign_budget'],2);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['row']->value['campaign_spend'],2);?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_bidding'] == "click") {?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_clicks'];?>
 <?php echo __("Clicks");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_views'];?>
 <?php echo __("Views");?>

                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_is_active']) {?>
                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Active");?>
</span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Not Active");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['campaign_is_active']) {?>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Stop");?>
' class="btn btn-sm btn-icon btn-rounded btn-warning js_ads-stop-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                                            <i class="fas fa-stop-circle"></i>
                                        </button>
                                    <?php } else { ?>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Resume");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-resume-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                                            <i class="fas fa-play-circle"></i>
                                        </button>
                                    <?php }?>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-delete-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['campaign_id'];?>
">
                                        <i class="fas fa-trash"></i>
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

    <?php }?>
</div><?php }
}
