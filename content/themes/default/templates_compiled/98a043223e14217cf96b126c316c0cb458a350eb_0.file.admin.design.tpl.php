<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:41:57
  from '/home/winelov/public_html/content/themes/default/templates/admin.design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea405e5594209_16453388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a043223e14217cf96b126c316c0cb458a350eb' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.design.tpl',
      1 => 1587803999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea405e5594209_16453388 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-paint-brush mr10"></i><?php echo __("Design");?>

    </div>
    <form class="js_ajax-forms " data-url="admin/design.php">
        <div class="card-body">
            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Night Mode is Default");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Make the night mode is the default mode of your website");?>

                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_theme_night_on">
                        <input type="checkbox" name="system_theme_night_on" id="system_theme_night_on" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_night_on']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Users Can Change Mode");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Allow users to select between day and night mode");?>

                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_theme_mode_select">
                        <input type="checkbox" name="system_theme_mode_select" id="system_theme_mode_select" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_theme_mode_select']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Users Can Upload Profile Background Image");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Allow users to upload background image to their profiles");?>

                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_profile_background_enabled">
                        <input type="checkbox" name="system_profile_background_enabled" id="system_profile_background_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_profile_background_enabled']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Website Logo");?>

                </label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo'] == '') {?>
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
                            <input type="hidden" class="js_x-image-input" name="system_logo" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
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
                            <input type="hidden" class="js_x-image-input" name="system_logo" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
">
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Default Home Wallpaper");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Use the default");?>

                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_wallpaper_default">
                        <input type="checkbox" name="system_wallpaper_default" id="system_wallpaper_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Custom Home Wallpaper");?>

                </label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper'] == '') {?>
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
                            <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
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
                            <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
">
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Default Favicon");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png"><?php echo __("preview");?>
</a>)
                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_favicon_default">
                        <input type="checkbox" name="system_favicon_default" id="system_favicon_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Custom Favicon");?>

                </label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon'] == '') {?>
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
                            <input type="hidden" class="js_x-image-input" name="system_favicon" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
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
                            <input type="hidden" class="js_x-image-input" name="system_favicon" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
">
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Default OG-Image");?>
</div>
                    <div class="form-text d-none d-sm-block">
                        <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/og-image.jpg"><?php echo __("preview");?>
</a>)
                    </div>
                </div>
                <div class="text-right">
                    <label class="switch" for="system_ogimage_default">
                        <input type="checkbox" name="system_ogimage_default" id="system_ogimage_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage_default']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Custom OG-Image");?>

                </label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage'] == '') {?>
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
                            <input type="hidden" class="js_x-image-input" name="system_ogimage" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
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
                            <input type="hidden" class="js_x-image-input" name="system_ogimage" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
">
                        </div>
                    <?php }?>
                    <span class="form-text">
                        <?php echo __("The perfect size for your og-image should be (wdith: 590px & height: 300px)");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Enable Customization");?>
</div>
                    <div class="form-text d-none d-sm-block"><?php echo __("Turn the customization On and Off");?>
</div>
                </div>
                <div class="text-right">
                    <label class="switch" for="css_customized">
                        <input type="checkbox" name="css_customized" id="css_customized" <?php if ($_smarty_tpl->tpl_vars['system']->value['css_customized']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Background Color");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_background" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_background'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Link Color");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_link_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_link_color'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Header Color");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_header" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Header Search Background");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_header_search" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Header Search Font");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_header_search_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Button Primary");?>

                </label>
                <div class="col-md-9">
                    <div class="input-group js_colorpicker">
                        <input type="text" class="form-control" name="css_btn_primary" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Custom CSS");?>

                </label>
                <div class="col-md-9">
                    <textarea class="form-control" rows="10" name="css_custome_css" id="custom-css"><?php echo $_smarty_tpl->tpl_vars['system']->value['css_custome_css'];?>
</textarea>
                    <span class="form-text">
                        <?php echo __("Header Custom CSS");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Header Custom JavaScript");?>

                </label>
                <div class="col-md-9">
                    <textarea name="custome_js_header" id="custome_js_header"><?php echo $_smarty_tpl->tpl_vars['system']->value['custome_js_header'];?>
</textarea>
                    <span class="form-text">
                        <?php echo __("The code will be added in head tag");?>

                    </span>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Footer Custom JavaScript");?>

                </label>
                <div class="col-md-9">
                    <textarea name="custome_js_footer" id="custome_js_footer"><?php echo $_smarty_tpl->tpl_vars['system']->value['custome_js_footer'];?>
</textarea>
                    <span class="form-text">
                        <?php echo __("The code will be added at the end of body tag");?>

                    </span>
                </div>
            </div>

            <!-- error -->
            <div class="alert alert-danger mb0 x-hidden"></div>
            <!-- error -->
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
        </div>
    </form>
    
</div><?php }
}
