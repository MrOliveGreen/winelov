<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:14:28
  from '/home/winelov/public_html/content/themes/default/templates/admin.settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3ff741816b4_13437814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8a406568e728e4c686b97fab41de1f1d09fbaa' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.settings.tpl',
      1 => 1587804008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 5,
  ),
),false)) {
function content_5ea3ff741816b4_13437814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#General" data-toggle="tab">
                        <i class="fa fa-server fa-fw mr5"></i><strong><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Features" data-toggle="tab">
                        <i class="fa fa-microchip fa-fw mr5"></i><strong><?php echo __("Features");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tab-content -->
        <div class="tab-content">
            <!-- General -->
            <div class="tab-pane active" id="General">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=general_settings">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Website Public");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Make the website public to allow non logged users to view website content");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="system_public">
                                    <input type="checkbox" name="system_public" id="system_public" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_public']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Website Live");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the entire website On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="system_live">
                                    <input type="checkbox" name="system_live" id="system_live" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_live']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Shutdown Message");?>

                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="system_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_message'];?>
</textarea>
                                <span class="form-text">
                                    <?php echo __("The text that is presented when the site is closed");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website Title");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="system_title" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                                <span class="form-text">
                                    <?php echo __("Title of your website");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website Description");?>

                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="system_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_description'];?>
</textarea>
                                <span class="form-text">
                                    <?php echo __("Description of your website");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website Keywords");?>

                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="system_keywords" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
</textarea>
                                <span class="form-text">
                                    <?php echo __("Example: social, sngine, social site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website Email");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="system_email" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_email'];?>
">
                                <span class="form-text">
                                    <?php echo __("The contact email that all messages send to");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Datetime Format");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="system_datetime_format">
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_datetime_format'] == "d/m/Y H:i") {?>selected<?php }?> value="d/m/Y H:i">d/m/Y H:i (<?php echo __("Example");?>
: 30/05/2019 17:30)</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_datetime_format'] == "m/d/Y H:i") {?>selected<?php }?> value="m/d/Y H:i">m/d/Y H:i (<?php echo __("Example");?>
: 05/30/2019 17:30)</option>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Select the datetime format of the datetime picker");?>

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
            </div>
            <!-- General -->

            <!-- Features -->
            <div class="tab-pane" id="Features">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=features_settings">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Contact Us");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the contact us page On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="contact_enabled">
                                    <input type="checkbox" name="contact_enabled" id="contact_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"> <?php echo __("Directory");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable the directory for better SEO results");?>
<br>
                                    <?php echo __("Make the website public to allow non logged users to view website content");?>

                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="directory_enabled">
                                    <input type="checkbox" name="directory_enabled" id="directory_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Pages");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Users can create pages or only admins/moderators");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="pages_enabled">
                                    <input type="checkbox" name="pages_enabled" id="pages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Groups");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Users can create groups or only admins/moderators");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="groups_enabled">
                                    <input type="checkbox" name="groups_enabled" id="groups_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Events");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Users can create events or only admins/moderators");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="events_enabled">
                                    <input type="checkbox" name="events_enabled" id="events_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Blogs");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Allow users to create blogs");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="blogs_enabled">
                                    <input type="checkbox" name="blogs_enabled" id="blogs_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Users Can Write Articles?");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Users can write articles or only admins/moderators");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="users_blogs_enabled">
                                    <input type="checkbox" name="users_blogs_enabled" id="users_blogs_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['users_blogs_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Market");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Allow users to sell/buy products");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="market_enabled">
                                    <input type="checkbox" name="market_enabled" id="market_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Movies");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the movies On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="movies_enabled">
                                    <input type="checkbox" name="movies_enabled" id="movies_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Games");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the games On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="games_enabled">
                                    <input type="checkbox" name="games_enabled" id="games_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("DayTime Messages");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the DayTime Messages (Good Morning, Afternoon, Evening) On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="daytime_msg_enabled">
                                    <input type="checkbox" name="daytime_msg_enabled" id="daytime_msg_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['daytime_msg_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Pokes");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable users to poke each others");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="pokes_enabled">
                                    <input type="checkbox" name="pokes_enabled" id="pokes_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['pokes_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Gifts");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable users to send gifts to each others");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="gifts_enabled">
                                    <input type="checkbox" name="gifts_enabled" id="gifts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Profile Visit Notification");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the profile visit notification On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="profile_notification_enabled">
                                    <input type="checkbox" name="profile_notification_enabled" id="profile_notification_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['profile_notification_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Browser Notifications");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the browser notifications On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="browser_notifications_enabled">
                                    <input type="checkbox" name="browser_notifications_enabled" id="browser_notifications_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['browser_notifications_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Noty Notifications");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Turn the noty notifications On and Off");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/screenshots/noty_notification.png"><?php echo __("preview");?>
</a>)
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="noty_notifications_enabled">
                                    <input type="checkbox" name="noty_notifications_enabled" id="noty_notifications_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['noty_notifications_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Cookie Consent");?>
 (<?php echo __("GDPR");?>
)</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the cookie consent notification On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="cookie_consent_enabled">
                                    <input type="checkbox" name="cookie_consent_enabled" id="cookie_consent_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['cookie_consent_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Adblock Detector");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Turn the Adblock auto detector notification On and Off");?>
, <?php echo __("(Note: Admin is exception)");?>
<br>
                                    <?php echo __("Red block message will appear to make user disable adblock from his browser");?>
<br>
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="adblock_detector_enabled">
                                    <input type="checkbox" name="adblock_detector_enabled" id="adblock_detector_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['adblock_detector_enabled']) {?>checked<?php }?>>
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
            </div>
            <!-- Features -->
        </div>
        <!-- tab-content -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "posts") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Posts");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Posts -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=posts">
            <div class="card-body">
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Stories");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the stories On and Off");?>
<br>
                            <?php echo __("Stories are photos and videos that only last 24 hours");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="stories_enabled">
                            <input type="checkbox" name="stories_enabled" id="stories_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Popular Posts");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the popular posts On and Off");?>
<br>
                            <?php echo __("Popular posts are public posts ordered by most reactions, comments & shares");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="popular_posts_enabled">
                            <input type="checkbox" name="popular_posts_enabled" id="popular_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Discover Posts");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the discover posts On and Off");?>
<br>
                            <?php echo __("Discover posts are public posts ordered from most recent to old");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="discover_posts_enabled">
                            <input type="checkbox" name="discover_posts_enabled" id="discover_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Memories");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the memories On and Off");?>
<br>
                            <?php echo __("Memories are posts from the same day on last year");?>

                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="memories_enabled">
                            <input type="checkbox" name="memories_enabled" id="memories_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Wall Posts");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Users can publish posts on their friends walls");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="wall_posts_enabled">
                            <input type="checkbox" name="wall_posts_enabled" id="wall_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Colored Posts");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the colored posts On and Off");?>
<br>
                            <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/colored_posts"><?php echo __("Colored Posts");?>
</a>
                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="colored_posts_enabled">
                            <input type="checkbox" name="colored_posts_enabled" id="colored_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['colored_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Feelings/Activity Posts");?>
</div>
                        <div class="form-text d-none d-sm-block">
                            <?php echo __("Turn the feelings and activity posts On and Off");?>
<br>
                        </div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="activity_posts_enabled">
                            <input type="checkbox" name="activity_posts_enabled" id="activity_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['activity_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Polls");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the poll posts On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="polls_enabled">
                            <input type="checkbox" name="polls_enabled" id="polls_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['polls_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Geolocation");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the post Geolocation On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="geolocation_enabled">
                            <input type="checkbox" name="geolocation_enabled" id="geolocation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Geolocation Google Key");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="geolocation_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
">
                        <span class="form-text">
                            <?php echo __("Check the documentation to learn how to get this key");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("GIF");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the gif posts On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="gif_enabled">
                            <input type="checkbox" name="gif_enabled" id="gif_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['gif_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Giphy API Key");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="giphy_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['giphy_key'];?>
">
                        <span class="form-text">
                            <?php echo __("Check the documentation to learn how to get this key");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Post Translation");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the post translation On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="post_translation_enabled">
                            <input type="checkbox" name="post_translation_enabled" id="post_translation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['post_translation_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Yandex Key");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="yandex_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['yandex_key'];?>
">
                        <span class="form-text">
                            <?php echo __("Check the documentation to learn how to get this key");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Smart YouTube Player");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Smart YouTube player will save a lot of bandwidth");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="smart_yt_player">
                            <input type="checkbox" name="smart_yt_player" id="smart_yt_player" <?php if ($_smarty_tpl->tpl_vars['system']->value['smart_yt_player']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Social Media Share");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the social media share for posts On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="social_share_enabled">
                            <input type="checkbox" name="social_share_enabled" id="social_share_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Max Post Characters");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_post_length" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_post_length'];?>
">
                        <span class="form-text">
                            <?php echo __("The Maximum allowed post characters length (0 for unlimited)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Max Comment Characters");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_comment_length" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_comment_length'];?>
">
                        <span class="form-text">
                            <?php echo __("The Maximum allowed comment characters length (0 for unlimited)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Max Posts/Hour");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_posts_hour" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_posts_hour'];?>
">
                        <span class="form-text">
                            <?php echo __("The Maximum number of posts that user can publish per hour (0 for unlimited)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Max Comments/Hour");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_comments_hour" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_comments_hour'];?>
">
                        <span class="form-text">
                            <?php echo __("The Maximum number of comments that user can publish per hour (0 for unlimited)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Default Posts Privacy");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control selectpicker" name="default_privacy">
                            <option value="public" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "public") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Public");?>
</b><br><?php echo __("Anyone one can see the post");?>
</div></div>"><?php echo __("Public");?>
</option>
                            <option value="friends" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Friends");?>
</b><br><?php echo __("Only post author friends can see the post");?>
</div></div>"><?php echo __("Friends");?>
</option>
                            <option value="me" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-lg fa-fw'></i></div><div class='text'><b><?php echo __("Only Me");?>
</b><br><?php echo __("Only post author can see the post");?>
</div></div>"><?php echo __("Only Me");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Trending Hashtags");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the trending hashtags feature On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="trending_hashtags_enabled">
                            <input type="checkbox" name="trending_hashtags_enabled" id="trending_hashtags_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['trending_hashtags_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Trending Interval");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control" name="trending_hashtags_interval">
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['trending_hashtags_interval'] == "day") {?>selected<?php }?> value="day"><?php echo __("Last 24 Hours");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['trending_hashtags_interval'] == "week") {?>selected<?php }?> value="week"><?php echo __("Last Week");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['trending_hashtags_interval'] == "month") {?>selected<?php }?> value="month"><?php echo __("Last Month");?>
</option>
                        </select>
                        <span class="form-text">
                            <?php echo __("Select the interval of trending hashtags");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Hashtags Limit");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="trending_hashtags_limit" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['trending_hashtags_limit'];?>
">
                        <span class="form-text">
                            <?php echo __("How many hashtags you want to display");?>

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
        <!-- Posts -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "registration") {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Registration");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#General" data-toggle="tab">
                        <i class="fa fa-sign-in-alt fa-fw mr5"></i><strong><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Social" data-toggle="tab">
                        <i class="fab fa-facebook fa-fw mr5"></i><strong><?php echo __("Social Login");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Invitation" data-toggle="tab">
                        <i class="far fa-handshake fa-fw mr5"></i><strong><?php echo __("Invitation Codes");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tabs content -->
        <div class="tab-content">
            <!-- General -->
            <div class="tab-pane active" id="General">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=registration">
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-exclamation-triangle fa-2x"></i>
                            </div>
                            <div class="text pt5">
                                <?php echo __("If Registration is Free and Pro Packages enabled they will be used as an optional upgrading plans");?>
.
                            </div>
                        </div>
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Registration Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Allow users to create accounts");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="registration_enabled">
                                    <input type="checkbox" name="registration_enabled" id="registration_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Registration Type");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="registration_type" id="registration_free" value="free" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_type'] == "free") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="registration_free"><?php echo __("Free");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="registration_type" id="registration_paid" value="paid" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_type'] == "paid") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="registration_paid"><?php echo __("Subscriptions Only");?>
</label>
                                </div>
                                <span class="form-text">
                                    <?php echo __("Allow users to create accounts Free or via Subscriptions only");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/packages"><?php echo __("Pro Packages");?>
</a>
                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Invitation Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("This option is used to invite users by sending invitation code only by admin if the registration is turned off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="invitation_enabled">
                                    <input type="checkbox" name="invitation_enabled" id="invitation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Invite Friends Widget");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable users to invite their friends by sending invitation emails (registration must be enabled)");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="invitation_widget_enabled">
                                    <input type="checkbox" name="invitation_widget_enabled" id="invitation_widget_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_widget_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Invitations/Day");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="invitation_widget_max" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['invitation_widget_max'];?>
">
                                <span class="form-text">
                                    <?php echo __("Number of invitations allowed to each user per day (0 for unlimited)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Pro Packages Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable pro packages to be used as upgrading plans or for subscriptions");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/payments"><?php echo __("Payments Settings");?>
</a>
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="packages_enabled">
                                    <input type="checkbox" name="packages_enabled" id="packages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Users Can Buy Packages From Wallet Balance");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable users to buy packages from their wallet balance");?>
<br>
                                    <?php echo __("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/ads"><?php echo __("Ads System");?>
</a>
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="packages_wallet_payment_enabled">
                                    <input type="checkbox" name="packages_wallet_payment_enabled" id="packages_wallet_payment_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_wallet_payment_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Activation Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable account activation to send activation code to user's email/phone");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="activation_enabled">
                                    <input type="checkbox" name="activation_enabled" id="activation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Activation Via");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="activation_type" id="activation_email" value="email" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "email") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="activation_email"><?php echo __("Email");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="activation_type" id="activation_sms" value="sms" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="activation_sms"><?php echo __("SMS");?>
</label>
                                </div>
                                <span class="form-text">
                                    <?php echo __("Select Email or SMS activation to send activation code to user's email/phone");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/sms"><?php echo __("SMS Settings");?>
</a>
                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Verification Requests");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn the verification requests from users & pages On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="verification_requests">
                                    <input type="checkbox" name="verification_requests" id="verification_requests" <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Age Restriction");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable age restriction");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="age_restriction">
                                    <input type="checkbox" name="age_restriction" id="age_restriction" <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Minimum Age");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="minimum_age" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['minimum_age'];?>
">
                                <span class="form-text">
                                    <?php echo __("The minimum age required to register (in years)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Getting Started");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable getting started page after registration");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="getting_started">
                                    <input type="checkbox" name="getting_started" id="getting_started" <?php if ($_smarty_tpl->tpl_vars['system']->value['getting_started']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Delete Account");?>
 (<?php echo __("GDPR");?>
)</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Allow users to delete their account");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="delete_accounts_enabled">
                                    <input type="checkbox" name="delete_accounts_enabled" id="delete_accounts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['delete_accounts_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Download User Information");?>
 (<?php echo __("GDPR");?>
)</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Allow users to download their account information from settings page");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="download_info_enabled">
                                    <input type="checkbox" name="download_info_enabled" id="download_info_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['download_info_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Newsletter Consent");?>
 (<?php echo __("GDPR");?>
)</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable newsletter consent during the registration");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="newsletter_consent">
                                    <input type="checkbox" name="newsletter_consent" id="newsletter_consent" <?php if ($_smarty_tpl->tpl_vars['system']->value['newsletter_consent']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max Accounts/IP");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_accounts" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_accounts'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum number of accounts allowed to register per IP (0 for unlimited)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max Friends/User");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_friends" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_friends'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum number of friends allowed per User (0 for unlimited)");?>

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
            </div>
            <!-- General -->

            <!-- Social -->
            <div class="tab-pane" id="Social">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=social_login">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Social Logins");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via social media (Facebook, Twitter and etc) On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="social_login_enabled">
                                    <input type="checkbox" name="social_login_enabled" id="social_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <!-- facebook -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-facebook-square fa-3x" style="color: #3B579D"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Facebook");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Facebook On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="facebook_login_enabled">
                                    <input type="checkbox" name="facebook_login_enabled" id="facebook_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Facebook App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="facebook_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Facebook App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="facebook_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_secret'];?>
">
                            </div>
                        </div>
                        <!-- facebook -->

                        <div class="divider"></div>

                        <!-- google -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-google fa-3x" style="color: #DC4A38"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Google");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Google On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="google_login_enabled">
                                    <input type="checkbox" name="google_login_enabled" id="google_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Google App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="google_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Google App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="google_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_secret'];?>
">
                            </div>
                        </div>
                        <!-- google -->

                        <div class="divider"></div>

                        <!-- twitter -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-twitter-square fa-3x" style="color: #55ACEE"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Twitter");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Twitter On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="twitter_login_enabled">
                                    <input type="checkbox" name="twitter_login_enabled" id="twitter_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="twitter_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Twitter App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="twitter_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_secret'];?>
">
                            </div>
                        </div>
                        <!-- twitter -->

                        <div class="divider"></div>

                        <!-- instagram -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-instagram fa-3x" style="color: #3f729b"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Instagram");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Instagram On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="instagram_login_enabled">
                                    <input type="checkbox" name="instagram_login_enabled" id="instagram_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="instagram_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['instagram_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Instagram App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="instagram_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['instagram_secret'];?>
">
                            </div>
                        </div>
                        <!-- instagram -->

                        <div class="divider"></div>

                        <!-- linkedin -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-linkedin fa-3x" style="color: #1A84BC"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Linkedin");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Linkedin On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="linkedin_login_enabled">
                                    <input type="checkbox" name="linkedin_login_enabled" id="linkedin_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Linkedin App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="linkedin_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['linkedin_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Linkedin App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="linkedin_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['linkedin_secret'];?>
">
                            </div>
                        </div>
                        <!-- linkedin -->

                        <div class="divider"></div>

                        <!-- vk -->
                        <div class="form-table-row">
                            <div class="avatar">
                                <i class="fab fa-vk fa-3x" style="color: #527498"></i>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Vkontakte");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Turn registration/login via Vkontakte On and Off");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="vkontakte_login_enabled">
                                    <input type="checkbox" name="vkontakte_login_enabled" id="vkontakte_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Vkontakte App ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="vkontakte_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['vkontakte_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Vkontakte App Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="vkontakte_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['vkontakte_secret'];?>
">
                            </div>
                        </div>
                        <!-- vk -->

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
            </div>
            <!-- Social -->

            <!-- Invitation -->
            <div class="tab-pane" id="Invitation">
                <div class="card-body">
                    <div class="alert alert-warning">
                        <div class="icon">
                            <i class="fa fa-exclamation-triangle fa-2x"></i>
                        </div>
                        <div class="text pt5">
                            <?php echo __("This system is used to invite users if the registration is turned off");?>
.
                        </div>
                    </div>

                    <div class="text-center">
                        <button data-toggle="modal" data-url="admin/invitations.php?do=generate" class="btn btn-md btn-success">
                            <i class="fa fa-handshake mr10"></i><?php echo __("Generate New Code");?>

                        </button>
                    </div>
                    <div class="divider"></div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover js_dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo __("ID");?>
</th>
                                    <th><?php echo __("Invitation Code");?>
</th>
                                    <th><?php echo __("Valid");?>
</th>
                                    <th><?php echo __("Created");?>
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
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code_id'];?>
</td>
                                        <td><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</span></td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['valid']) {?>
                                                <span class="badge badge-pill badge-lg badge-success"><?php echo __("Yes");?>
</span>
                                            <?php } else { ?>
                                                <span class="badge badge-pill badge-lg badge-danger"><?php echo __("No");?>
</span>
                                            <?php }?>
                                        </td>
                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date'],"%e %B %Y");?>
</td>
                                        <td>
                                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top" title='<?php echo __("Send to email");?>
'>
                                                <button data-toggle="modal" data-url="admin/invitations.php?do=prepare_email&code=<?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                                    <i class="fa fa-envelope"></i>
                                                </button>
                                            </div>
                                            <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="invitation_code" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['code_id'];?>
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
                <!-- Invitation -->
            </div>
        </div>
        <!-- tabs content -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "emails") {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Emails");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#SMTP" data-toggle="tab">
                        <i class="fa fa-server fa-fw mr5"></i><strong><?php echo __("SMTP");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Notifications" data-toggle="tab">
                        <i class="fa fa-envelope-open fa-fw mr5"></i><strong><?php echo __("Email Notifications");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tabs content -->
        <div class="tab-content">
            <!-- SMTP -->
            <div class="tab-pane active" id="SMTP">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=emails">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("SMTP Emails");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable/Disable SMTP email system");?>
<br/>
                                    <?php echo __("PHP mail() function will be used in case of disabled");?>

                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="email_smtp_enabled">
                                    <input type="checkbox" name="email_smtp_enabled" id="email_smtp_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("SMTP Require Authentication");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable SMTP authentication");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="email_smtp_authentication">
                                    <input type="checkbox" name="email_smtp_authentication" id="email_smtp_authentication" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_authentication']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("SMTP SSL Encryption");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable/Disable SMTP SSL encryption");?>
<br/>
                                    <?php echo __("TLS encryption will be used in case of disabled");?>

                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="email_smtp_ssl">
                                    <input type="checkbox" name="email_smtp_ssl" id="email_smtp_ssl" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_ssl']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("SMTP Server");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email_smtp_server" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_server'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("SMTP Port");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email_smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_port'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("SMTP Username");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email_smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_username'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("SMTP Password");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email_smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_password'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Set From");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email_smtp_setfrom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_setfrom'];?>
">
                                <span class="form-text">
                                    <?php echo __("Set the From email address");?>
, <?php echo __("For example: email@domain.com");?>

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
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="smtp">
                            <i class="fa fa-bolt mr10"></i><?php echo __("Test Connection");?>

                        </button>
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </form>
            </div>
            <!-- SMTP -->

            <!-- Notifications -->
            <div class="tab-pane" id="Notifications">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=email_notifications">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Email Notifications");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable email notifications system");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="email_notifications">
                                    <input type="checkbox" name="email_notifications" id="email_notifications" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_notifications']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Email User When");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_post_likes"><?php echo __("Someone liked his post");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_post_comments"><?php echo __("Someone commented on his post");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_post_shares"><?php echo __("Someone shared his post");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_wall_posts"><?php echo __("Someone posted on his timeline");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_mentions"><?php echo __("Someone mentioned him");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_profile_visits"><?php echo __("Someone visited his profile");?>
</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>checked<?php }?>>
                                    <label class="custom-control-label" for="email_friend_requests"><?php echo __("Someone sent him or accepted his friend requset");?>
</label>
                                </div>
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
            </div>
            <!-- Notifications -->
        </div>
        <!-- tabs content -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "sms") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("SMS");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- SMS -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=sms">
            <div class="card-body">

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("SMS Provider");?>

                    </label>
                    <div class="col-md-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="sms_provider" id="sms_twilio" value="twilio" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['sms_provider'] == "twilio") {?>checked<?php }?>>
                            <label class="custom-control-label" for="sms_twilio"><?php echo __("Twilio");?>
</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="sms_provider" id="sms_bulksms" value="bulksms" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['sms_provider'] == "bulksms") {?>checked<?php }?>>
                            <label class="custom-control-label" for="sms_bulksms"><?php echo __("BulkSMS");?>
</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="sms_provider" id="sms_infobip" value="infobip" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['sms_provider'] == "infobip") {?>checked<?php }?>>
                            <label class="custom-control-label" for="sms_infobip"><?php echo __("Infobip");?>
</label>
                        </div>
                        <span class="form-text">
                            <?php echo __("Select your default SMS provider");?>
<br/>
                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Twilio -->
                <div class="heading-small mb20">
                    <?php echo __("Twilio");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Twilio Account SID");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="twilio_sid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_sid'];?>
">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Twilio Auth Token");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="twilio_token" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_token'];?>
">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Twilio Phone Number");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="twilio_phone" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_phone'];?>
">
                        </div>
                    </div>
                </div>
                <!-- Twilio -->

                <div class="divider"></div>

                <!-- BulkSMS -->
                <div class="heading-small mb20">
                    <?php echo __("BulkSMS");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("BulkSMS Username");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="bulksms_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bulksms_username'];?>
">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("BulkSMS Password");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="bulksms_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bulksms_password'];?>
">
                        </div>
                    </div>
                </div>
                <!-- BulkSMS -->

                <div class="divider"></div>

                <!-- Infobip -->
                <div class="heading-small mb20">
                    <?php echo __("Infobip");?>

                </div>
                <div class="pl-md-4">
                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Infobip Username");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="infobip_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['infobip_username'];?>
">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 form-control-label">
                            <?php echo __("Infobip Password");?>

                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="infobip_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['infobip_password'];?>
">
                        </div>
                    </div>
                </div>
                <!-- Infobip -->

                <div class="divider"></div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Test Phone Number");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="system_phone" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_phone'];?>
">
                        <span class="form-text">
                            <?php echo __("Your phone number to test the SMS service i.e +12344567890");?>
<br/>
                            <?php echo __("A test SMS will be sent to this phone number when you test the connection");?>

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
                <button type="button" class="btn btn-danger js_admin-tester" data-handle="sms">
                    <i class="fa fa-bolt mr10"></i><?php echo __("Test Connection");?>

                </button>
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>
        <!-- SMS -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "chat") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Chat");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Chat -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=chat">
            <div class="card-body">
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Chat Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the chat system On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="chat_enabled">
                            <input type="checkbox" name="chat_enabled" id="chat_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("User Status Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the Last Seen On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="chat_status_enabled">
                            <input type="checkbox" name="chat_status_enabled" id="chat_status_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_status_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Typing Status Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the Typing Status On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="chat_typing_enabled">
                            <input type="checkbox" name="chat_typing_enabled" id="chat_typing_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_typing_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Seen Status Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the Seen Status On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="chat_seen_enabled">
                            <input type="checkbox" name="chat_seen_enabled" id="chat_seen_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_seen_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Video Call Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the video call system On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="video_call_enabled">
                            <input type="checkbox" name="video_call_enabled" id="video_call_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['video_call_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Audio Call Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn the audio call system On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="audio_call_enabled">
                            <input type="checkbox" name="audio_call_enabled" id="audio_call_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_call_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>


                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Twilio Account SID");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="twilio_sid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_sid'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Twilio API SID");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="twilio_apisid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_apisid'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Twilio API SECRET");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="twilio_apisecret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_apisecret'];?>
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
        <!-- Chat -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "uploads") {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Uploads");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#General" data-toggle="tab">
                        <i class="fa fa-upload fa-fw mr5"></i><strong class="pr5"><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#S3" data-toggle="tab">
                        <i class="fab fa-amazon fa-fw mr5"></i><strong class="pr5"><?php echo __("Amazon S3");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#DigitalOcean" data-toggle="tab">
                        <i class="fab fa-digital-ocean fa-fw mr5"></i><strong class="pr5"><?php echo __("DigitalOcean");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#FTP" data-toggle="tab">
                        <i class="fa fa-cloud-upload-alt fa-fw mr5"></i><strong class="pr5"><?php echo __("FTP");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tabs content -->
        <div class="tab-content">
            <!-- General -->
            <div class="tab-pane active" id="General">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=uploads">
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-exclamation-triangle fa-2x"></i>
                            </div>
                            <div class="text">
                                <?php echo __("Your server max upload size");?>
 = <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>
<br>
                                <?php echo __("You can't upload files larger than");?>
 <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>
 - <?php echo __("To upload larger files, contact your hosting provider");?>

                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Uploads Directory");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="uploads_directory" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['uploads_directory'];?>
">
                                <span class="form-text">
                                    <?php echo __("The path of uploads local directory");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Uploads Prefix");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="uploads_prefix" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['uploads_prefix'];?>
">
                                <span class="form-text">
                                    <?php echo __("Add a prefix to the uploaded files (No spaces or special characters only like 'mysite' or 'my_site')");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max Profile Photo Size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_avatar_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_avatar_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of profile photo");?>
 <?php echo __("in kilobytes (1 M = 1024 KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max Cover Photo Size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_cover_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_cover_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of cover photo");?>
 <?php echo __("in kilobytes (1 M = 1024 KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'width'=>"40px",'height'=>"40px"), 0, false);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Photo Upload");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable photo upload to share & upload photos to the site");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="photos_enabled">
                                    <input type="checkbox" name="photos_enabled" id="photos_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max Photo Size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_photo_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_photo_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of uploaded photo in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Photo Quality");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control selectpicker" name="uploads_quality">
                                    <option value="high" <?php if ($_smarty_tpl->tpl_vars['system']->value['uploads_quality'] == "high") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-battery-full fa-lg fa-fw'></i></div><div class='text'><b><?php echo __('High Quality');?>
</b><br><?php echo __('High quality photos with low compression');?>
</div></div>"><?php echo __("High Quality");?>
</option>
                                    <option value="medium" <?php if ($_smarty_tpl->tpl_vars['system']->value['uploads_quality'] == "medium") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-battery-half fa-lg fa-fw'></i></div><div class='text'><b><?php echo __('Medium Quality');?>
</b><br><?php echo __('Medium quality photos with medium compression');?>
</div></div>"><?php echo __("Medium Quality");?>
</option>
                                    <option value="low" <?php if ($_smarty_tpl->tpl_vars['system']->value['uploads_quality'] == "low") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-battery-empty fa-lg fa-fw'></i></div><div class='text'><b><?php echo __('Low Quality');?>
</b><br><?php echo __('Low quality photos with high compression');?>
</div></div>"><?php echo __("Low Quality");?>
</option>
                                </select>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Watermark Images");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable it to add watermark icon to all uploaded photos (except: profile pictures and cover images)");?>

                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="watermark_enabled">
                                    <input type="checkbox" name="watermark_enabled" id="watermark_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Watermark Icon");?>

                            </label>
                            <div class="col-md-9">
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_icon'] == '') {?>
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
                                        <input type="hidden" class="js_x-image-input" name="watermark_icon" value="">
                                    </div>
                                <?php } else { ?>
                                    <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['watermark_icon'];?>
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
                                        <input type="hidden" class="js_x-image-input" name="watermark_icon" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['watermark_icon'];?>
">
                                    </div>
                                <?php }?>
                                <span class="form-text">
                                    <?php echo __("Upload your watermark icon (PNG is recommended)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Watermark Position");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="watermark_position">
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "top left") {?>selected<?php }?> value="top left"><?php echo __("Top Left");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "top right") {?>selected<?php }?> value="top right"><?php echo __("Top Right");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "top") {?>selected<?php }?> value="top"><?php echo __("Top");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "bottom left") {?>selected<?php }?> value="bottom left"><?php echo __("Bottom Left");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "bottom right") {?>selected<?php }?> value="bottom right"><?php echo __("Bottom Right");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "bottom") {?>selected<?php }?> value="bottom"><?php echo __("Bottom");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "left") {?>selected<?php }?> value="left"><?php echo __("Left");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['watermark_position'] == "right") {?>selected<?php }?> value="right"><?php echo __("Right");?>
</option>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Select the position (the anchor point) of your watermark icon");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Watermark Opacity");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="watermark_opacity" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['watermark_opacity'];?>
">
                                <span class="form-text">
                                    <?php echo __("The opacity level of the watermark icon (value between 0 - 1)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Watermark X Offset");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="watermark_xoffset" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['watermark_xoffset'];?>
">
                                <span class="form-text">
                                    <?php echo __("Horizontal offset in pixels");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Watermark Y Offset");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="watermark_yoffset" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['watermark_yoffset'];?>
">
                                <span class="form-text">
                                    <?php echo __("Vertical offset in pixels");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Adult Images Detection");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable it to detect the adult images and system will blur or delete them");?>

                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="adult_images_enabled">
                                    <input type="checkbox" name="adult_images_enabled" id="adult_images_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_images_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Adult Images Action");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="adult_images_action" id="action_blue" value="blur" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_images_action'] == "blur") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="action_blue"><?php echo __("Blur");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="adult_images_action" id="action_delete" value="delete" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['adult_images_action'] == "delete") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="action_delete"><?php echo __("Delete");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Google Vision API Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="adult_images_api_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['adult_images_api_key'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Cloud Vision API Key");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Video Upload");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable video upload to share & upload videos to the site");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="videos_enabled">
                                    <input type="checkbox" name="videos_enabled" id="videos_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max video size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_video_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of uploaded video in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Video extensions");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="video_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
">
                                <span class="form-text">
                                    <?php echo __("Allowed video extensions (separated with comma ',)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("Audio Upload");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable audio upload to share & upload sounds to the site");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="audio_enabled">
                                    <input type="checkbox" name="audio_enabled" id="audio_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max audio size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_audio_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_audio_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of uploaded audio in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Audio extensions");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="audio_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['audio_extensions'];?>
">
                                <span class="form-text">
                                    <?php echo __("Allowed audio extensions (separated with comma ',)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-table-row">
                            <div class="avatar">
                                <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'width'=>"40px",'height'=>"40px"), 0, true);
?>
                            </div>
                            <div>
                                <div class="form-control-label h6 mb5"><?php echo __("File Upload");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable file upload to share & upload files to the site");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="file_enabled">
                                    <input type="checkbox" name="file_enabled" id="file_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Max file size");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="max_file_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_file_size'];?>
">
                                <span class="form-text">
                                    <?php echo __("The Maximum size of uploaded file in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("File extensions");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="file_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['file_extensions'];?>
">
                                <span class="form-text">
                                    <?php echo __("Allowed file extensions (separated with comma ',)");?>

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
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="google_vision">
                            <i class="fa fa-bolt mr10"></i> <?php echo __("Test Google Vision API");?>

                        </button>
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </form>
            </div>
            <!-- General -->

            <!-- S3 -->
            <div class="tab-pane" id="S3">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=s3">
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fab fa-amazon fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Amazon S3 Storage");?>
</strong><br>
                                <?php echo __("Before enabling Amazon S3, make sure you upload the whole 'uploads' folder to your bucket");?>
.<br>
                                <?php echo __("Before disabling Amazon S3, make sure you download the whole 'uploads' folder to your server");?>
.
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Amazon S3 Storage");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable Amazon S3 storage");?>
 (<?php echo __("Note: Enable this will disable all other options");?>
)
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="s3_enabled">
                                    <input type="checkbox" name="s3_enabled" id="s3_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bucket Name");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="s3_bucket" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_bucket'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Amazon S3 bucket name");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bucket Region");?>

                            </label>
                            <div class="col-md-9">
                                <select name="s3_region" class="form-control">
                                    <option value="us-east-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-east-2") {?>selected<?php }?>>US East (Ohio)</option>
                                    <option value="us-east-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-east-1") {?>selected<?php }?>>US East (N. Virginia)</option>
                                    <option value="us-west-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-west-1") {?>selected<?php }?>>US West (N. California)</option>
                                    <option value="us-west-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-west-2") {?>selected<?php }?>>US West (Oregon)</option>
                                    <option value="ap-east-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-east-1") {?>selected<?php }?>>Asia Pacific (Hong Kong)</option>
                                    <option value="ap-south-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-south-1") {?>selected<?php }?>>Asia Pacific (Mumbai)</option>
                                    <option value="ap-northeast-3" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-northeast-3") {?>selected<?php }?>>Asia Pacific (Osaka-Local)</option>
                                    <option value="ap-northeast-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-northeast-2") {?>selected<?php }?>>Asia Pacific (Seoul)</option>
                                    <option value="ap-southeast-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-southeast-1") {?>selected<?php }?>>Asia Pacific (Singapore)</option>
                                    <option value="ap-southeast-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-southeast-2") {?>selected<?php }?>>Asia Pacific (Sydney)</option>
                                    <option value="ap-northeast-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-northeast-1") {?>selected<?php }?>>Asia Pacific (Tokyo)</option>
                                    <option value="ca-central-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ca-central-1") {?>selected<?php }?>>Canada (Central)</option>
                                    <option value="eu-central-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-central-1") {?>selected<?php }?>>EU (Frankfurt)</option>
                                    <option value="eu-west-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-west-1") {?>selected<?php }?>>EU (Ireland)</option>
                                    <option value="eu-west-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-west-2") {?>selected<?php }?>>EU (London)</option>
                                    <option value="eu-west-3" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-west-3") {?>selected<?php }?>>EU (Paris)</option>
                                    <option value="eu-north-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-north-1") {?>selected<?php }?>>Europe (Stockholm)</option>
                                    <option value="me-south-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "me-south-1") {?>selected<?php }?>>Middle East (Bahrain)</option>
                                    <option value="sa-east-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "sa-east-1") {?>selected<?php }?>>South America (São Paulo)</option>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Your Amazon S3 bucket region");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Access Key ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="s3_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_key'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Amazon S3 Access Key ID");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Access Key Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="s3_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_secret'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Amazon S3 Access Key Secret");?>

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
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="s3">
                            <i class="fa fa-bolt mr10"></i> <?php echo __("Test Connection");?>

                        </button>
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </form>
            </div>
            <!-- S3 -->

            <!-- DigitalOcean -->
            <div class="tab-pane" id="DigitalOcean">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=digitalocean">
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fab fa-digital-ocean fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("DigitalOcean");?>
</strong><br>
                                <?php echo __("Before enabling DigitalOcean Space, make sure you upload the whole 'uploads' folder to your space");?>
.<br>
                                <?php echo __("Before disabling DigitalOcean Space, make sure you download the whole 'uploads' folder to your server");?>
.
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("DigitalOcean Space");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable DigitalOcean storage");?>
 (<?php echo __("Note: Enable this will disable all other options");?>
)
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="digitalocean_enabled">
                                    <input type="checkbox" name="digitalocean_enabled" id="digitalocean_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Space Name");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="digitalocean_space_name" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['digitalocean_space_name'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your DigitalOcean space name");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Space Region");?>

                            </label>
                            <div class="col-md-9">
                                <select name="digitalocean_space_region" class="form-control">
                                    <option value="sfo2" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_space_region'] == "sfo2") {?>selected<?php }?>>San Francisco</option>
                                    <option value="nyc3" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_space_region'] == "nyc3") {?>selected<?php }?>>New York</option>
                                    <option value="ams3" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_space_region'] == "ams3") {?>selected<?php }?>>Amsterdam</option>
                                    <option value="sgp1" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_space_region'] == "sgp1") {?>selected<?php }?>>Singapore</option>
                                    <option value="fra1" <?php if ($_smarty_tpl->tpl_vars['system']->value['digitalocean_space_region'] == "fra1") {?>selected<?php }?>>Frankfurt</option>
                                </select>
                                <span class="form-text">
                                    <?php echo __("Your DigitalOcean space region");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Access Key ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="digitalocean_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['digitalocean_key'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your DigitalOcean Access Key ID");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Access Key Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="digitalocean_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['digitalocean_secret'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your DigitalOcean Access Key Secret");?>

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
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="digitalocean">
                            <i class="fa fa-bolt mr10"></i> <?php echo __("Test Connection");?>

                        </button>
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </form>
            </div>
            <!-- DigitalOcean -->

            <!-- FTP -->
            <div class="tab-pane" id="FTP">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=ftp">
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="icon">
                                <i class="fa fa-cloud-upload-alt fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("FTP Storage");?>
</strong><br>
                                <?php echo __("Before enabling FTP Storage, make sure you upload the whole 'uploads' folder to your space");?>
.<br>
                                <?php echo __("Before disabling FTP Storage, make sure you download the whole 'uploads' folder to your server");?>
.
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("FTP Storage");?>
</div>
                                <div class="form-text d-none d-sm-block">
                                    <?php echo __("Enable FTP Storage upload");?>
 (<?php echo __("Note: Enable this will disable all other options");?>
)
                                </div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="ftp_enabled">
                                    <input type="checkbox" name="ftp_enabled" id="ftp_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['ftp_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Hostname");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_hostname" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_hostname'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Port");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_port" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_port'];?>
" placeholder="21">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_username'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Password");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_password'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("FTP Path");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_path" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_path'];?>
" placeholder="./">
                                <span class="form-text">
                                    <?php echo __("The path to your uploads folder (Examples: './' or 'public_html/uploads')");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("FTP Endpoint");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ftp_endpoint" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['ftp_endpoint'];?>
">
                                <span class="form-text">
                                    <?php echo __("The URL to your uploads folder (Examples: 'https://domain.com/uploads' or 'https://64.233.191.255/uploads')");?>

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
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="ftp">
                            <i class="fa fa-bolt mr10"></i> <?php echo __("Test Connection");?>

                        </button>
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </form>
            </div>
            <!-- FTP -->
        </div>
        <!-- tabs content -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "security") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Security");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Security -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=security">
            <div class="card-body">
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Unusual Login Detection");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable unusual login detection, System will not allow user to login with same session from different device or location");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="unusual_login_enabled">
                            <input type="checkbox" name="unusual_login_enabled" id="unusual_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['unusual_login_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Brute Force Detection");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable brute force attack detection, System will block the user account if hacker try to login with invalid password too many times to guess the correct account password");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="brute_force_detection_enabled">
                            <input type="checkbox" name="brute_force_detection_enabled" id="brute_force_detection_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['brute_force_detection_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Bad Login Limit");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="brute_force_bad_login_limit" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['brute_force_bad_login_limit'];?>
">
                        <span class="form-text">
                            <?php echo __("Number of bad login attempts till account get blocked");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Lockout Time");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="brute_force_lockout_time" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['brute_force_lockout_time'];?>
">
                        <span class="form-text">
                            <?php echo __("Number of minutes the account will still locked out");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Two-Factor Authentication");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable two-factor authentication to log in with a code from your email/phone as well as a password");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="two_factor_enabled">
                            <input type="checkbox" name="two_factor_enabled" id="two_factor_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-sm-3 form-control-label">
                        <?php echo __("Two-Factor Authentication Via");?>

                    </label>
                    <div class="col-md-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="two_factor_type" id="two_factor_email" value="email" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "email") {?>checked<?php }?>>
                            <label class="custom-control-label" for="two_factor_email"><?php echo __("Email");?>
</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="two_factor_type" id="two_factor_sms" value="sms" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "sms") {?>checked<?php }?>>
                            <label class="custom-control-label" for="two_factor_sms"><?php echo __("SMS");?>
</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="two_factor_type" id="two_factor_google" value="google" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['two_factor_type'] == "google") {?>checked<?php }?>>
                            <label class="custom-control-label" for="two_factor_google"><?php echo __("Google Authenticator");?>
</label>
                        </div>
                        <span class="form-text">
                            <?php echo __("Select Email, SMS or Google Authenticator to send log in code to user");?>
<br>
                            <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/sms"><?php echo __("SMS Settings");?>
</a>
                        </span>
                    </div>
                </div>

                <div class="divider"></div>
                        
                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("Censored Words Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Enable/Disable Words to be censored");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="censored_words_enabled">
                            <input type="checkbox" name="censored_words_enabled" id="censored_words_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['censored_words_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Censored Words");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="censored_words" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['censored_words'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("Words to be censored, separated by a comma (,)");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-table-row">
                    <div>
                        <div class="form-control-label h6"><?php echo __("reCAPTCHA Enabled");?>
</div>
                        <div class="form-text d-none d-sm-block"><?php echo __("Turn reCAPTCHA On and Off");?>
</div>
                    </div>
                    <div class="text-right">
                        <label class="switch" for="reCAPTCHA_enabled">
                            <input type="checkbox" name="reCAPTCHA_enabled" id="reCAPTCHA_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("reCAPTCHA Site Key");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="reCAPTCHA_site_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("reCAPTCHA Secret Key");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="reCAPTCHA_secret_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_secret_key'];?>
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
        <!-- Security -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

        <!-- card-header -->
        <div class="card-header with-icon with-nav">
            <!-- panel title -->
            <div class="mb20">
                <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Payments");?>

            </div>
            <!-- panel title -->

            <!-- panel nav -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#Paypal" data-toggle="tab">
                        <i class="fab fa-paypal fa-fw mr5"></i><strong class="pr5"><?php echo __("PayPal");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Stripe" data-toggle="tab">
                        <i class="fab fa-stripe-s fa-fw mr5"></i><strong class="pr5"><?php echo __("Stripe");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#CoinPayments" data-toggle="tab">
                        <i class="fab fa-bitcoin fa-fw mr5"></i><strong class="pr5"><?php echo __("CoinPayments");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#TwoCheckout" data-toggle="tab">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"2co",'width'=>"20px",'height'=>"20px",'class'=>"mr5"), 0, true);
?><strong class="pr5"><?php echo __("2Checkout");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Bank" data-toggle="tab">
                        <i class="fa fa-university fa-fw mr5"></i><strong class="pr5"><?php echo __("Bank Transfers");?>
</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Currency" data-toggle="tab">
                        <i class="fa fa-dollar-sign fa-fw mr5"></i><strong class="pr5"><?php echo __("Currency");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- panel nav -->
        </div>
        <!-- card-header -->

        <!-- tabs content -->
        <div class="tab-content">
            <!-- Paypal -->
            <div class="tab-pane active" id="Paypal">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=paypal">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Paypal Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via Paypal");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="paypal_enabled">
                                    <input type="checkbox" name="paypal_enabled" id="paypal_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Paypal Mode");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="paypal_mode" id="paypal_live" value="live" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_mode'] == "live") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="paypal_live"><?php echo __("Live");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="paypal_mode" id="paypal_sandbox" value="sandbox" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_mode'] == "sandbox") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="paypal_sandbox"><?php echo __("Sandbox");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("PayPal Client ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="paypal_id" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['paypal_id'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("PayPal Secret Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="paypal_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['paypal_secret'];?>
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
            </div>
            <!-- Paypal -->

            <!-- Stripe -->
            <div class="tab-pane" id="Stripe">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=stripe">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Credit Card Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via Credit Card");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="creditcard_enabled">
                                    <input type="checkbox" name="creditcard_enabled" id="creditcard_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Alipay Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via Alipay");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="alipay_enabled">
                                    <input type="checkbox" name="alipay_enabled" id="alipay_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Stripe Mode");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="stripe_mode" id="stripe_live" value="live" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "live") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="stripe_live"><?php echo __("Live");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="stripe_mode" id="stripe_test" value="test" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "test") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="stripe_test"><?php echo __("Test");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Test Secret Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="stripe_test_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_secret'];?>
">
                                <span class="form-text">
                                    <?php echo __("Stripe secret key that starts with sk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Test Publishable Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="stripe_test_publishable" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_publishable'];?>
">
                                <span class="form-text">
                                    <?php echo __("Stripe publishable key that starts with pk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Live Secret Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="stripe_live_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_secret'];?>
">
                                <span class="form-text">
                                    <?php echo __("Stripe secret key that starts with sk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Live Publishable Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="stripe_live_publishable" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_publishable'];?>
">
                                <span class="form-text">
                                    <?php echo __("Stripe publishable key that starts with pk_");?>

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
            </div>
            <!-- Stripe -->

            <!-- CoinPayments -->
            <div class="tab-pane" id="CoinPayments">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=coinpayments">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("CoinPayments Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via CoinPayments");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="coinpayments_enabled">
                                    <input type="checkbox" name="coinpayments_enabled" id="coinpayments_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['coinpayments_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Merchant ID");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="coinpayments_merchant_id" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['coinpayments_merchant_id'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("IPN Secret");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="coinpayments_ipn_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['coinpayments_ipn_secret'];?>
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
            </div>
            <!-- CoinPayments -->

            <!-- 2Checkout -->
            <div class="tab-pane" id="TwoCheckout">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=2checkout">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("2Checkout Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via 2Checkout");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="2checkout_enabled">
                                    <input type="checkbox" name="2checkout_enabled" id="2checkout_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['2checkout_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("2Checkout Mode");?>

                            </label>
                            <div class="col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="2checkout_mode" id="2checkout_live" value="live" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['2checkout_mode'] == "live") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="2checkout_live"><?php echo __("Live");?>
</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="2checkout_mode" id="2checkout_sandbox" value="sandbox" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['system']->value['2checkout_mode'] == "sandbox") {?>checked<?php }?>>
                                    <label class="custom-control-label" for="2checkout_sandbox"><?php echo __("Sandbox");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Merchant Code");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="2checkout_merchant_code" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['2checkout_merchant_code'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("API Publishable Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="2checkout_publishable_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['2checkout_publishable_key'];?>
">
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("API Private Key");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="2checkout_private_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['2checkout_private_key'];?>
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
            </div>
            <!-- 2Checkout -->

            <!-- Bank -->
            <div class="tab-pane" id="Bank">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=bank">
                    <div class="card-body">
                        <div class="form-table-row">
                            <div>
                                <div class="form-control-label h6"><?php echo __("Bank Transfers Enabled");?>
</div>
                                <div class="form-text d-none d-sm-block"><?php echo __("Enable payments via Bank Transfers");?>
</div>
                            </div>
                            <div class="text-right">
                                <label class="switch" for="bank_transfers_enabled">
                                    <input type="checkbox" name="bank_transfers_enabled" id="bank_transfers_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['bank_transfers_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bank Name");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank_name" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bank_name'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Bank Name");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bank Account Number");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank_account_number" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bank_account_number'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Bank Account Number");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bank Account Name");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank_account_name" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bank_account_name'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Bank Account Name");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bank Account Routing Code");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank_account_routing" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bank_account_routing'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Bank Account Routing Code or SWIFT Code");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Bank Account Country");?>

                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank_account_country" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['bank_account_country'];?>
">
                                <span class="form-text">
                                    <?php echo __("Your Bank Account Country");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Transfer Note");?>

                            </label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="bank_transfer_note" rows="5"><?php echo $_smarty_tpl->tpl_vars['system']->value['bank_transfer_note'];?>
</textarea>
                                <span class="form-text">
                                    <?php echo __("This note will be displayed to the user while upload his bank transfer receipt");?>

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
            </div>
            <!-- Bank -->

            <!-- Currency -->
            <div class="tab-pane" id="Currency">
                <form class="js_ajax-forms " data-url="admin/settings.php?edit=currency">
                    <div class="card-body">
                        <div class="form-group form-row">
                            <label class="col-md-3 form-control-label">
                                <?php echo __("Website Currency");?>

                            </label>
                            <div class="col-md-9">
                                <select class="form-control" name="system_currency">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system_currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['currency']->value['default']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['currency_id'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
)
                                        </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <div class="form-text">
                                    <?php echo __("You can add, edit or delete currencies from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/currencies"><?php echo __("Currencies");?>
</a>
                                </div>
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
            </div>
            <!-- Currency -->
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "limits") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Limits");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Limits -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=limits">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Data Heartbeat");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="data_heartbeat" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['data_heartbeat'];?>
">
                        <span class="form-text">
                            <?php echo __("The update interval to check for new data (in seconds)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Chat Heartbeat");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="chat_heartbeat" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['chat_heartbeat'];?>
">
                        <span class="form-text">
                            <?php echo __("The update interval to check for new messages (in seconds)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Offline After");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="offline_time" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['offline_time'];?>
">
                        <span class="form-text">
                            <?php echo __("The amount of time to be considered online since the last user's activity (in seconds)");?>
<br>
                            <?php echo __("The maximim value is one day = 86400 seconds");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>
                
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Minimum Results");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="min_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results'];?>
">
                        <span class="form-text">
                            <?php echo __("The Min number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Maximum Results");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
">
                        <span class="form-text">
                            <?php echo __("The Max number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Minimum Even Results");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="min_results_even" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results_even'];?>
">
                        <span class="form-text">
                            <?php echo __("The Min even number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Maximum Even Results");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="max_results_even" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_results_even'];?>
">
                        <span class="form-text">
                            <?php echo __("The Max even number of results per request");?>

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
        <!-- Limits -->

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "analytics") {?>

        <!-- card-header -->
        <div class="card-header with-icon">
            <!-- panel title -->
            <i class="fa fa-cog mr10"></i><?php echo __("Settings");?>
 &rsaquo; <?php echo __("Analytics");?>

            <!-- panel title -->
        </div>
        <!-- card-header -->

        <!-- Analytics -->
        <form class="js_ajax-forms " data-url="admin/settings.php?edit=analytics">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Tracking Code");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="message" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['analytics_code'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("The analytics tracking code (Ex: Google Analytics)");?>

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
        <!-- Analytics -->

    <?php }?>

</div><?php }
}
