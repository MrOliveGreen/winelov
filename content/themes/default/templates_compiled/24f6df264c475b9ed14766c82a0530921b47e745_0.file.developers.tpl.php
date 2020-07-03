<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 10:38:34
  from '/home/winelov/public_html/content/themes/default/templates/developers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4132a7096a4_70079636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f6df264c475b9ed14766c82a0530921b47e745' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/developers.tpl',
      1 => 1587804021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea4132a7096a4_70079636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header bg-2">
    <?php if ($_smarty_tpl->tpl_vars['view']->value == "share") {?>
        <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_share_766i.svg">
    <?php } else { ?>
        <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_code_typing_7jnv.svg">
    <?php }?>
    <div class="crystal c03"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Developers");?>
</h2>
        <p><?php echo __("Explore the developer tools we offer");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -25px;">
    <div class="row">

        <!-- side panel -->
        <div class="col-12 d-block d-md-none offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- side panel -->

        <!-- content panel -->
        <div class="col-12 offcanvas-mainbar">

            <!-- tabs -->
            <div class="content-tabs rounded-sm shadow-sm clearfix">
                <ul>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers"><i class="fa fa-book mr5"></i><?php echo __("Documentation");?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "apps" || $_smarty_tpl->tpl_vars['view']->value == "new" || $_smarty_tpl->tpl_vars['view']->value == "edit") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/apps"><i class="fa fa-cubes mr5"></i><?php echo __("My Apps");?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "share") {?>class="active"<?php }?>>
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/share"><i class="fa fa-share-alt-square mr5"></i><?php echo __("Share Plugin");?>
</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <!-- tabs -->

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                <!-- docs -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-book mr10"></i><?php echo __("Documentation");?>

                    </div>
                    <div class="card-body page-content pt30" style="font-size: 1.1em;">
                        <p>
                            <small><?php echo __("API Version");?>
 <span class="badge badge-light">1.1</span></small>
                        </p>
                        <p>
                            <?php echo __("This documentation explain how to register, configure, and develop your app so you can successfully use our APIs");?>

                        </p>

                        <h5 class="mt30 mb20"><?php echo __("Create App");?>
</h5>
                        <p>
                            <?php echo __("In order for your app to access our APIs, you must register your app using the");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/apps"><?php echo __("App Dashboard");?>
</a>. <?php echo __("Registration creates an App ID that lets us know who you are, helps us distinguish your app from other apps");?>
.
                        </p>
                        <ol>
                            <li class="mb20">
                                <?php echo __("You will need to create a new App");?>
 
                                <a class="btn btn-sm btn-primary ml10" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/new">
                                    <i class="fa fa-plus-circle mr5"></i><?php echo __("Create New App");?>

                                </a>
                            </li>
                            <li class="mb20">
                                <?php echo __("Once you created your App you will get your");?>
 <span class="badge badge-primary">app_id</span> <?php echo __("and");?>
 <span class="badge badge-primary">app_secret</span>
                            </li>
                        </ol>

                        <h5 class="mt30 mb20"><?php echo __("Log in With");?>
</h5>
                        <p>
                            <?php echo __("Log in With system is a fast and convenient way for people to create accounts and log into your app. Our Log in With system enables two scenarios, authentication and asking for permissions to access people's data. You can use Login With system simply for authentication or for both authentication and data access");?>
.
                        </p>
                        <ol>
                            <li class="mb20">
                                <?php echo __("Starting the OAuth login process, You need to use a link for your app like this");?>
:
                                <pre class="mtb10">&lt;a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/api/oauth?app_id=YOUR_APP_ID"&gt;Log in With <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
&lt;/a&gt;</pre>
                                <p style="font-size: 15px;">
                                   <?php echo __("The user will be redirect to Log in With page like this");?>

                                </p>
                                <div class="text-center">
                                    <img class="img-fluid" width="400" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/screenshots/login_with.png">
                                </div>
                            </li>
                            <li class="mb20">
                                <?php echo __("Once the user accpeted your app, the user will be redirected to your App Redirect URL with");?>
 <span class="badge badge-info">auth_key</span> <?php echo __("like this");?>
:
                                <pre class="mtb10">https://mydomain.com/my_redirect_url.php?auth_key=AUTH_KEY</pre>
                                <?php echo __("This");?>
 <span class="badge badge-info">auth_key</span> <?php echo __("valid only for one time usage, so once you used it you will not be able to use it again and generate new code you will need to redirect the user to the log in with link again");?>
.
                            </li>
                        </ol>

                        <h5 class="mt30 mb20"><?php echo __("Access Token");?>
</h5>
                        <p>
                            <?php echo __("Once you get the user approval of your app Log in With window and returned with the");?>
 <span class="badge badge-info">auth_key</span> <?php echo __("which means that now you are ready to retrive data from our APIs and to start this process you will need to authorize your app and get the");?>
 <span class="badge badge-danger">access_token</span> <?php echo __("and you can follow our steps to learn how to get it");?>
.
                        </p>
                        <ol>
                            <li class="mb20">
                                <?php echo __("To get an access token, make an HTTP GET request to the following endpoint like this");?>
:
                                <pre class="mtb10">&lt;?php
$app_id = "YOUR_APP_ID"; // your app id
$app_secret = "YOUR_APP_SECRET"; // your app secret
$auth_key = $_GET['auth_key']; // the returned auth key from previous step

$get = file_get_contents("<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/api/authorize?app_id=$app_id&app_secret=$app_secret&auth_key=$auth_key");

$json = json_decode($get, true);
if(!empty($json['access_token'])) {
    $access_token = $json['access_token']; // your access token
}
?&gt;</pre>
                            <?php echo __("This");?>
 <span class="badge badge-danger">access_token</span> <?php echo __("valid only for only one 1 hour, so once it got invalid you will need to genarte new one by redirect the user to the log in with link again");?>
.
                            </li>
                        </ol>

                        <h5 class="mt30 mb20"><?php echo __("APIs");?>
</h5>
                        <p>
                            <?php echo __("Once you get your");?>
 <span class="badge badge-danger">access_token</span> <?php echo __("Now you can retrieve informations from our system via HTTP GET requests which supports the following parameters");?>

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo __("Endpoint");?>
</th>
                                        <th><?php echo __("Description");?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>api/<span class="badge badge-warning">get_user_info</span></td>
                                        <td>
                                            <p>
                                                <?php echo __("get user info");?>

                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>
                            <?php echo __("You can retrive user info like this");?>

                        </p>
                        <pre>if(!empty($json['access_token'])) {
   $access_token = $json['access_token']; // your access token
   $get = file_get_contents("<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/api/get_user_info?access_token=$access_token");
}</pre>
                        <p>
                            <?php echo __("The result will be");?>
:
                        </p>
                        <pre>{
    "user_info": {
        "user_id": "",
        "user_name": "",
        "user_email": "",
        "user_firstname": "",
        "user_lastname": "",
        "user_gender": "",
        "user_birthdate": "",
        "user_picture": "",
        "user_cover": "",
        "user_registered": "",
        "user_verified": "",
        "user_relationship": "",
        "user_biography": "",
        "user_website": ""
    }
}</pre>
                    </div>
                </div>
                <!-- docs -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "apps") {?>
                
                <!-- apps -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <a class="btn btn-sm btn-primary float-right" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/new">
                            <i class="fa fa-plus-circle mr5"></i><?php echo __("Create New App");?>

                        </a>
                        <i class="fa fa-cubes mr10"></i><?php echo __("My Apps");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['apps']->value) {?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover js_dataTable">
                                    <thead>
                                        <tr>
                                            <th><?php echo __("ID");?>
</th>
                                            <th><?php echo __("App Name");?>
</th>
                                            <th><?php echo __("App ID");?>
</th>
                                            <th><?php echo __("App Secret");?>
</th>
                                            <th><?php echo __("Created");?>
</th>
                                            <th><?php echo __("Actions");?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'app');
$_smarty_tpl->tpl_vars['app']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->iteration++;
$__foreach_app_0_saved = $_smarty_tpl->tpl_vars['app'];
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['app']->iteration;?>
</td>
                                                <td>
                                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/edit/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
                                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_icon'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>

                                                    </a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_secret'];?>
</td>
                                                <td>
                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_date'];?>
</span>
                                                </td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/edit/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_developers-delete-app" data-id="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <div class="text-center text-muted mtb10">
                                <img width="15%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                                <p class="mt10 mb10"><strong><?php echo __("No data to show");?>
</strong></p>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <!-- apps -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new") {?>

                <!-- new app -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-plus-circle mr10"></i><?php echo __("Create New App");?>

                        <div class="float-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/apps" class="btn btn-sm btn-light">
                                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                            </a>
                        </div>
                    </div>
                    <form class="js_ajax-forms" data-url="developers/app.php?do=create">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto">
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_name"><?php echo __("App Name");?>
</label>
                                        <input type="text" class="form-control" name="app_name">
                                        <span class="form-text">
                                            <?php echo __("Your App Name");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_domain"><?php echo __("App Domain");?>
</label>
                                        <input type="text" class="form-control" name="app_domain">
                                        <span class="form-text">
                                            <?php echo __("Your App domain (example: www.domain.com)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_redirect_url"><?php echo __("Redirect URL");?>
</label>
                                        <input type="text" class="form-control" name="app_redirect_url">
                                        <span class="form-text">
                                            <?php echo __("Your App Redirect URL (example: https://www.domain.com/test.php)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_description"><?php echo __("App Description");?>
</label>
                                        <textarea class="form-control" name="app_description" rows="5"></textarea>
                                        <span class="form-text">
                                            <?php echo __("Set a description for your App (maximum 200 characters)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_category"><?php echo __("Category");?>
</label>
                                        <select class="form-control" name="app_category" id="app_category">
                                            <option><?php echo __("Select Category");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select a category for your App");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_icon"><?php echo __("App Icon (1024 x 1024)");?>
</label>
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
                                            <input type="hidden" class="js_x-image-input" name="app_icon">
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("App Icon (1024 x 1024), supported formats (JPG, PNG)");?>

                                        </span>
                                    </div>

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus mr10"></i><?php echo __("Create");?>

                            </button>
                        </div>
                    </form>
                </div>
                <!-- new app -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit") {?>

                <!-- edit app -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-edit mr10"></i><?php echo __("Edit App");?>

                        <div class="float-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers/apps" class="btn btn-sm btn-light">
                                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                            </a>
                        </div>
                    </div>
                    <form class="js_ajax-forms" data-url="developers/app.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto">
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_auth_id"><?php echo __("App ID");?>
</label>
                                        <input disabled type="text" class="form-control" name="app_auth_id" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_auth_secret"><?php echo __("App Secret");?>
</label>
                                        <input disabled type="text" class="form-control" name="app_auth_secret" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_secret'];?>
">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_name"><?php echo __("App Name");?>
</label>
                                        <input type="text" class="form-control" name="app_name" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Your App Name");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_domain"><?php echo __("App Domain");?>
</label>
                                        <input type="text" class="form-control" name="app_domain" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_domain'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Your App domain (example: www.domain.com)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_redirect_url"><?php echo __("Redirect URL");?>
</label>
                                        <input type="text" class="form-control" name="app_redirect_url" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_redirect_url'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Your App Redirect URL (example: https://www.domain.com/test.php)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_description"><?php echo __("App Description");?>
</label>
                                        <textarea class="form-control" name="app_description" rows="5"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_description'];?>
</textarea>
                                        <span class="form-text">
                                            <?php echo __("Set a description for your App (maximum 200 characters)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_category"><?php echo __("Category");?>
</label>
                                        <select class="form-control" name="app_category" id="app_category">
                                            <option><?php echo __("Select Category");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['app']->value['app_category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select a category for your App");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="app_icon"><?php echo __("App Icon (1024 x 1024)");?>
</label>

                                        <?php if ($_smarty_tpl->tpl_vars['app']->value['app_icon'] == '') {?>
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
                                                <input type="hidden" class="js_x-image-input" name="app_icon">
                                            </div>
                                        <?php } else { ?>
                                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_icon'];?>
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
                                                <input type="hidden" class="js_x-image-input" name="app_icon" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_icon'];?>
">
                                            </div>
                                        <?php }?>
                                        <span class="form-text">
                                            <?php echo __("App Icon (1024 x 1024), supported formats (JPG, PNG)");?>

                                        </span>
                                    </div>

                                    <!-- success -->
                                    <div class="alert alert-success mb0 x-hidden"></div>
                                    <!-- success -->

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 x-hidden"></div>
                                    <!-- error -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        </div>
                    </form>
                </div>
                <!-- edit app -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "share") {?>

                <!-- share plugin -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-share-alt-square mr10"></i><?php echo __("Share Plugin");?>

                    </div>
                    <div class="card-body page-content">
                        <h6>
                            <?php echo __("Add the following code in your site, inside the head tag");?>
:
                        </h6>
                        <pre>&lt;script&gt;
    function SocialShare(url) {
        window.open('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/share?url=' + url, '', 'height=600,width=800');
    }
&lt;/script&gt;</pre>
                        <h6>
                            <?php echo __("Then place the share button after changing the URL you want to share to your page HTML");?>
:
                        </h6>
                        <pre>&lt;button onclick="SocialShare('http://yoursite.com/')"&gt;Click me&lt;/button&gt;</pre>
                        <h6>
                            <?php echo __("Example");?>
:
                        </h6>
                        <?php echo '<script'; ?>
>
                            function SocialShare(url) {
                                window.open(site_path+'/share?url='+url, '', 'height=600,width=800');
                            }
                        <?php echo '</script'; ?>
>
                        <button class="btn btn-sm btn-primary" onclick="SocialShare(site_path)" ><?php echo __("Click Here");?>
</button>
                    </div>
                </div>
                <!-- share plugin -->

            <?php }?>
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
