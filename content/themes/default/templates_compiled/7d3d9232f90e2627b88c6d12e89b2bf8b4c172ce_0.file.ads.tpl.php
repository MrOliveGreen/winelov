<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 12:12:23
  from '/home/winelov/public_html/content/themes/default/templates/ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec913276a5957_36728188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3d9232f90e2627b88c6d12e89b2bf8b4c172ce' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ads.tpl',
      1 => 1587804012,
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
function content_5ec913276a5957_36728188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/winelov/public_html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header bg-2">
    <?php if ($_smarty_tpl->tpl_vars['view']->value == "wallet") {?>
        <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_wallet_aym5.svg">
    <?php } else { ?>
        <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_growth_analytics_8btt.svg">
    <?php }?>
    <div class="crystal c03"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Ads Manager");?>
</h2>
        <p><?php echo __("Manage Ads, Create new Campaign and Access your Wallet");?>
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
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads"><i class="fa fa-chart-line mr5"></i><?php echo __("Ads Campaigns");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "wallet") {?>class="active"<?php }?>>
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet"><i class="fa fa-wallet mr5"></i><?php echo __("Wallet");?>
</a>
                    </li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- adblock-warning-message -->
            <div class="adblock-warning-message mtb10">
                <?php echo __("Turn off the ad blocker or add this web page's URL as an exception so you use ads system without any problems");?>
, <?php echo __("After you turn off the ad blocker, you'll need to refresh your screen");?>

            </div>
            <!-- adblock-warning-message -->

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                
                <!-- ads campaigns -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <a class="btn btn-sm btn-primary float-right" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/new">
                            <i class="fa fa-plus-circle mr5"></i><?php echo __("New Campaign");?>

                        </a>
                        <i class="fa fa-chart-line mr10"></i><?php echo __("My Campaigns");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['campaigns']->value) {?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover js_dataTable">
                                    <thead>
                                        <tr>
                                            <th><?php echo __("Title");?>
</th>
                                            <th><?php echo __("Start - End Date");?>
</th>
                                            <th><?php echo __("Budget");?>
</th>
                                            <th><?php echo __("Spend");?>
</th>
                                            <th><?php echo __("Bidding");?>
</th>
                                            <th><?php echo __("Clicks/Views");?>
</th>
                                            <th><?php echo __("Status");?>
</th>
                                            <th><?php echo __("Created");?>
</th>
                                            <th><?php echo __("Actions");?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campaigns']->value, 'campaign');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_title'];?>
</td>
                                                <td>
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['campaign']->value['campaign_start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['campaign']->value['campaign_end_date'],"%e %B %Y");?>

                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['campaign']->value['campaign_budget'],2);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['campaign']->value['campaign_spend'],2);?>
</td>
                                                <td>
                                                    <span class="label label-default">
                                                        <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == "click") {?>
                                                            <i class="fa fa-hand-pointer mr5"></i><?php echo __("Click");?>

                                                        <?php } else { ?>
                                                            <i class="fa fa-eye mr5"></i><?php echo __("View");?>

                                                        <?php }?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == "click") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_clicks'];?>
 <?php echo __("Clicks");?>

                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_views'];?>
 <?php echo __("Views");?>

                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_is_active']) {?>
                                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Active");?>
</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("Not Active");?>
</span>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_created_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_created_date'];?>
</span>
                                                </td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_is_active']) {?>
                                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Stop");?>
' class="btn btn-sm btn-icon btn-rounded btn-warning js_ads-stop-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
">
                                                            <i class="fas fa-stop-circle"></i>
                                                        </button>
                                                    <?php } else { ?>
                                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Resume");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-resume-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
">
                                                            <i class="fas fa-play-circle"></i>
                                                        </button>
                                                    <?php }?>
                                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-delete-campaign" data-id="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
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
                <!-- ads campaigns -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new") {?>

                <!-- new campaign -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-plus-circle mr10"></i><?php echo __("New Campaign");?>

                        <div class="float-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads" class="btn btn-sm btn-light">
                                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                            </a>
                        </div>
                    </div>
                    <form class="js_ajax-forms" data-url="ads/campaign.php?do=create">
                        <div class="card-body">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'] == 0) {?>
                                <div class="bs-callout bs-callout-warning mt0">
                                    <?php echo __("Your current wallet credit is");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2);?>
</strong> <?php echo __("You need to");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet"><?php echo __("Replenish your wallet credit");?>
</a>
                                </div>
                            <?php }?>

                            <div class="row">
                                <!-- campaign details & target audience -->
                                <div class="col-sm-6">
                                    <!-- campaign details -->
                                    <div class="section-title mb20">
                                        <i class="fa fa-cog mr5"></i><?php echo __("Campaign Details");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_title"><?php echo __("Campaign Title");?>
</label>
                                        <input type="text" class="form-control" name="campaign_title" id="campaign_title">
                                        <span class="form-text">
                                            <?php echo __("Set a title for your campaign");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_start_date"><?php echo __("Campaign Start Date");?>
</label>
                                        <div class="input-group date js_datetimepicker" id="campaign_start_date" data-target-input="nearest">
                                            <input type='text' class="form-control datetimepicker-input" data-target="#campaign_start_date" name="campaign_start_date" />
                                            <div class="input-group-append" data-target="#campaign_start_date" data-toggle="datetimepicker">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set Campaign start datetime (UTC)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_end_date"><?php echo __("Campaign End Date");?>
</label>
                                        <div class="input-group date js_datetimepicker" id="campaign_end_date" data-target-input="nearest">
                                            <input type='text' class="form-control datetimepicker-input" data-target="#campaign_end_date" name="campaign_end_date" />
                                            <div class="input-group-append" data-target="#campaign_end_date" data-toggle="datetimepicker">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set Campaign end datetime (UTC)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_budget"><?php echo __("Campaign Budget");?>
</label>
                                        <div class="input-money">
                                            <span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
                                            <input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="campaign_budget">
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set a budget for your campaign, campaign will be paused if reached its limit");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_bidding"><?php echo __("Campaign Bidding");?>
</label>
                                        <select class="form-control" name="campaign_bidding">
                                            <option value="click"><?php echo __("Pay Per Click");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_click'];?>
)</option>
                                            <option value="view"><?php echo __("Pay Per View");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_view'];?>
)</option>
                                        </select>
                                    </div>
                                    <!-- campaign details -->

                                    <!-- target audience -->
                                    <div class="section-title mb20">
                                        <i class="fa fa-crosshairs mr5"></i><?php echo __("Target Audience");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_countries"><?php echo __("Audience Country");?>
</label>
                                        <select class="form-control selectpicker" multiple data-actions-box="true" name="audience_countries[]" id="js_ads-audience-countries">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_gender"><?php echo __("Audience Gender");?>
</label>
                                        <select class="form-control" name="audience_gender" id="js_ads-audience-gender">
                                            <option value="all"><?php echo __("All");?>
</option>
                                            <option value="male"><?php echo __("Male");?>
</option>
                                            <option value="female"><?php echo __("Female");?>
</option>
                                            <option value="other"><?php echo __("Other");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_relationship"><?php echo __("Audience Relationship");?>
</label>
                                        <select class="form-control" name="audience_relationship" id="js_ads-audience-relationship">
                                            <option value="all"><?php echo __("All");?>
</option>
                                            <option value="single"><?php echo __("Single");?>
</option>
                                            <option value="relationship"><?php echo __("In a relationship");?>
</option>
                                            <option value="married"><?php echo __("Married");?>
</option>
                                            <option value="complicated"><?php echo __("It's complicated");?>
</option>
                                            <option value="separated"><?php echo __("Separated");?>
</option>
                                            <option value="divorced"><?php echo __("Divorced");?>
</option>
                                            <option value="widowed"><?php echo __("Widowed");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="potential_reach"><?php echo __("Potential Reach");?>
</label>
                                        <div class="text-lg">
                                            <div class="float-right x-hidden" id="js_ads-potential-reach-loader">
                                                <div class="spinner-border text-info"></div>
                                            </div>
                                            <i class="fa fa-users"></i> <span class="badge badge-pill badge-lg badge-warning" id="js_ads-potential-reach"><?php echo $_smarty_tpl->tpl_vars['potential_reach']->value;?>
</span> <?php echo __("People");?>

                                        </div>
                                    </div>
                                    <!-- target audience -->
                                </div>
                                <!-- campaign details & target audience -->

                                <!-- ads details -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fa fa-bullhorn mr5"></i><?php echo __("Ads Details");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_title"><?php echo __("Ads Title");?>
</label>
                                        <input type="text" class="form-control" name="ads_title" id="ads_title">
                                        <span class="form-text">
                                            <?php echo __("Set a title for your ads");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_description"><?php echo __("Ads Description");?>
</label>
                                        <textarea class="form-control" name="ads_description" rows="5"></textarea>
                                        <span class="form-text">
                                            <?php echo __("Set a description for your ads (maximum 200 characters)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_type"><?php echo __("Advertise For");?>
</label>
                                        <select class="form-control" name="ads_type" id="js_campaign-type">
                                            <option value="url"><?php echo __("URL");?>
</option>
                                            <option value="page"><?php echo __("Page");?>
</option>
                                            <option value="group"><?php echo __("Group");?>
</option>
                                            <option value="event"><?php echo __("Event");?>
</option>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("You can advertise for a URL or one of your pages, groups or events");?>

                                        </span>
                                    </div>
                                    <div class="form-group" id="js_campaign-type-url">
                                        <label class="form-control-label" for="ads_url"><?php echo __("Target URL");?>
</label>
                                        <input type="text" class="form-control" name="ads_url">
                                        <span class="form-text">
                                            <?php echo __("Enter your URL you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group x-hidden" id="js_campaign-type-page">
                                        <label class="form-control-label" for="ads_page"><?php echo __("Target Page");?>
</label>
                                        <select class="form-control" name="ads_page">
                                            <option value="none"><?php echo __("Select Page");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['page']->value['page_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your pages you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group x-hidden" id="js_campaign-type-group">
                                        <label class="form-control-label" for="ads_group"><?php echo __("Target Group");?>
</label>
                                        <select class="form-control" name="ads_group">
                                            <option value="none"><?php echo __("Select Group");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['group']->value['group_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your groups you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group x-hidden" id="js_campaign-type-event">
                                        <label class="form-control-label" for="ads_event"><?php echo __("Target Event");?>
</label>
                                        <select class="form-control" name="ads_event">
                                            <option value="none"><?php echo __("Select Event");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['event']->value['event_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your events you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_placement"><?php echo __("Ads Placement");?>
</label>
                                        <select class="form-control" name="ads_placement">
                                            <option value="newsfeed"><?php echo __("Newsfeed");?>
</option>
                                            <option value="sidebar"><?php echo __("Sidebar");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_image"><?php echo __("Ads Image");?>
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
                                            <input type="hidden" class="js_x-image-input" name="ads_image">
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("The image of your ads, supported formats (JPG, PNG, GIF)");?>

                                        </span>
                                    </div>
                                </div>
                                <!-- ads details -->
                            </div>

                            <!-- error -->
                            <div class="alert alert-danger mb0 x-hidden"></div>
                            <!-- error -->
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus mr10"></i><?php echo __("Publish");?>

                            </button>
                        </div>
                    </form>
                </div>
                <!-- new campaign -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit") {?>

                <!-- edit campaign -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-edit mr10"></i><?php echo __("Edit Campaign");?>

                        <div class="float-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads" class="btn btn-sm btn-light">
                                <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                            </a>
                        </div>
                    </div>
                    <form class="js_ajax-forms" data-url="ads/campaign.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
">
                        <div class="card-body">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'] == 0) {?>
                                <div class="bs-callout bs-callout-warning mt0">
                                    <?php echo __("Your current wallet credit is");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2);?>
</strong> <?php echo __("You need to");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet"><?php echo __("Replenish your wallet credit");?>
</a>
                                </div>
                            <?php }?>

                            <div class="row">
                                <!-- campaign details & target audience -->
                                <div class="col-sm-6">
                                    <!-- campaign details -->
                                    <div class="section-title mb20">
                                        <i class="fa fa-cog mr5"></i><?php echo __("Campaign Details");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_title"><?php echo __("Campaign Title");?>
</label>
                                        <input type="text" class="form-control" name="campaign_title" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_title'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Set a title for your campaign");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_start_date"><?php echo __("Campaign Start Date");?>
</label>
                                        <div class='input-group date js_datetimepicker'>
                                            <div class="input-group date js_datetimepicker" id="campaign_start_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#campaign_start_date" name="campaign_start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['campaign']->value['campaign_start_date']);?>
" />
                                                <div class="input-group-append" data-target="#campaign_start_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set Campaign start datetime (UTC)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_end_date"><?php echo __("Campaign End Date");?>
</label>
                                        <div class='input-group date js_datetimepicker'>
                                            <div class="input-group date js_datetimepicker" id="campaign_end_date" data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#campaign_end_date" name="campaign_end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['campaign']->value['campaign_end_date']);?>
" />
                                                <div class="input-group-append" data-target="#campaign_end_date" data-toggle="datetimepicker">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set Campaign end datetime (UTC)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_budget"><?php echo __("Campaign Budget");?>
</label>
                                        <div class="input-money">
                                            <span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
                                            <input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="campaign_budget" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_budget'];?>
">
                                        </div>
                                        <span class="form-text">
                                            <?php echo __("Set a budget for your campaign, campaign will be paused if reached its limit");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="campaign_bidding"><?php echo __("Campaign Bidding");?>
</label>
                                        <select class="form-control" name="campaign_bidding">
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == "click") {?>selected<?php }?> value="click"><?php echo __("Pay Per Click");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_click'];?>
)</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == "view") {?>selected<?php }?> value="view"><?php echo __("Pay Per View");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['ads_cost_view'];?>
)</option>
                                        </select>
                                    </div>
                                    <!-- campaign details -->

                                    <!-- target audience -->
                                    <div class="section-title mb20">
                                        <i class="fa fa-crosshairs mr5"></i><?php echo __("Target Audience");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_countries"><?php echo __("Audience Country");?>
</label>
                                        <select class="form-control selectpicker" multiple data-actions-box="true" name="audience_countries[]" id="js_ads-audience-countries">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                <option <?php if (in_array($_smarty_tpl->tpl_vars['country']->value['country_id'],$_smarty_tpl->tpl_vars['campaign']->value['audience_countries'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_gender"><?php echo __("Audience Gender");?>
</label>
                                        <select class="form-control" name="audience_gender" id="js_ads-audience-gender">
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_gender'] == "all") {?>selected<?php }?> value="all"><?php echo __("All");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_gender'] == "male") {?>selected<?php }?> value="male"><?php echo __("Male");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_gender'] == "female") {?>selected<?php }?> value="female"><?php echo __("Female");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_gender'] == "other") {?>selected<?php }?> value="other"><?php echo __("Other");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="audience_relationship"><?php echo __("Audience Relationship");?>
</label>
                                        <select class="form-control" name="audience_relationship" id="js_ads-audience-relationship">
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "all") {?>selected<?php }?> value="all"><?php echo __("All");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo __("Single");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo __("In a relationship");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo __("Married");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo __("It's complicated");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo __("Separated");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo __("Divorced");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['audience_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo __("Widowed");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="potential_reach"><?php echo __("Potential Reach");?>
</label>
                                        <div class="text-lg">
                                            <div class="float-right x-hidden" id="js_ads-potential-reach-loader">
                                                <div class="spinner-border text-info"></div>
                                            </div>
                                            <i class="fa fa-users"></i> <span class="text-primary" id="js_ads-potential-reach"><?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_potential_reach'];?>
</span> <?php echo __("People");?>

                                        </div>
                                    </div>
                                    <!-- target audience -->
                                </div>
                                <!-- campaign details & target audience -->

                                <!-- ads details -->
                                <div class="col-sm-6">
                                    <div class="section-title mb20">
                                        <i class="fa fa-bullhorn mr5"></i><?php echo __("Ads Details");?>

                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_title"><?php echo __("Ads Title");?>
</label>
                                        <input type="text" class="form-control" name="ads_title" id="ads_title" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_title'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Set a title for your ads");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_description"><?php echo __("Ads Description");?>
</label>
                                        <textarea class="form-control" name="ads_description" rows="5"><?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_description'];?>
</textarea>
                                        <span class="form-text">
                                            <?php echo __("Set a description for your ads (maximum 200 characters)");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_type"><?php echo __("Advertise For");?>
</label>
                                        <select class="form-control" name="ads_type" id="js_campaign-type">
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] == "url") {?>selected<?php }?> value="url"><?php echo __("URL");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] == "page") {?>selected<?php }?> value="page"><?php echo __("Page");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] == "group") {?>selected<?php }?> value="group"><?php echo __("Group");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] == "event") {?>selected<?php }?> value="event"><?php echo __("Event");?>
</option>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("You can advertise for a URL or one of your pages, groups or events");?>

                                        </span>
                                    </div>
                                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] != 'url') {?>x-hidden<?php }?>" id="js_campaign-type-url">
                                        <label class="form-control-label" for="ads_url"><?php echo __("Target URL");?>
</label>
                                        <input type="text" class="form-control" name="ads_url" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_url'];?>
">
                                        <span class="form-text">
                                            <?php echo __("Enter your URL you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] != 'page') {?>x-hidden<?php }?>" id="js_campaign-type-page">
                                        <label class="form-control-label" for="ads_page"><?php echo __("Target Page");?>
</label>
                                        <select class="form-control" name="ads_page">
                                            <option value="none"><?php echo __("Select Page");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_page'] == $_smarty_tpl->tpl_vars['page']->value['page_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['page']->value['page_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your pages you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] != 'group') {?>x-hidden<?php }?>" id="js_campaign-type-group">
                                        <label class="form-control-label" for="ads_group"><?php echo __("Target Group");?>
</label>
                                        <select class="form-control" name="ads_group">
                                            <option value="none"><?php echo __("Select Group");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_group'] == $_smarty_tpl->tpl_vars['group']->value['group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['group']->value['group_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your groups you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_type'] != 'event') {?>x-hidden<?php }?>" id="js_campaign-type-event">
                                        <label class="form-control-label" for="ads_event"><?php echo __("Target Event");?>
</label>
                                        <select class="form-control" name="ads_event">
                                            <option value="none"><?php echo __("Select Event");?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_event'] == $_smarty_tpl->tpl_vars['event']->value['event_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['event']->value['event_title']);?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span class="form-text">
                                            <?php echo __("Select one of your events you want to advertise for");?>

                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_placement"><?php echo __("Ads Placement");?>
</label>
                                        <select class="form-control" name="ads_placement">
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_placement'] == "newsfeed") {?>selected<?php }?> value="newsfeed"><?php echo __("Newsfeed");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_placement'] == "sidebar") {?>selected<?php }?> value="sidebar"><?php echo __("Sidebar");?>
</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="ads_image"><?php echo __("Ads Image");?>
</label>
                                        <?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_image'] == '') {?>
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
                                                <input type="hidden" class="js_x-image-input" name="ads_image">
                                            </div>
                                        <?php } else { ?>
                                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_image'];?>
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
                                                <input type="hidden" class="js_x-image-input" name="ads_image" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_image'];?>
">
                                            </div>
                                        <?php }?>
                                        <span class="form-text">
                                            <?php echo __("The image of your ads, supported formats (JPG, PNG, GIF)");?>

                                        </span>
                                    </div>
                                </div>
                                <!-- ads details -->
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
                <!-- edit campaign -->

            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "wallet") {?>

                <!-- wallet -->
                <div class="card mt20">
                    <div class="card-header with-icon">
                        <i class="fa fa-wallet mr10"></i><?php echo __("Wallet");?>

                    </div>
                    <div class="card-body">
                        <?php if ($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Your");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['wallet_transfer_amount']->value,2);?>
</span> <?php echo __("transfer transaction successfuly sent");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['wallet_replenish_amount']->value,2);?>
</span>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['wallet_withdraw_affiliates_amount']->value,2);?>
</span> <?php echo __("from your affiliates credit");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Congratulation! Your wallet credit replenished successfully with");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['wallet_withdraw_points_amount']->value,2);?>
</span> <?php echo __("from your points credit");?>

                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value) {?>
                            <div class="alert alert-success mb20">
                                <i class="fas fa-check-circle mr5"></i>
                                <?php echo __("Your");?>
 <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['wallet_package_payment_amount']->value,2);?>
</span> <?php echo __("payment transaction successfuly done");?>

                            </div>
                        <?php }?>

                        <div class="row">
                            <!-- credit -->
                            <div class="col-md-5">
                                <div class="section-title mb20">
                                    <i class="fa fa-money-bill-alt mr10"></i> <?php echo __("Your Credit");?>

                                </div>
                                <div class="stat-panel bg-gradient-info">
                                    <div class="stat-cell small">
                                        <i class="fa fa-money-bill-alt bg-icon"></i>
                                        <div class="h3 mtb10">
                                            <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_wallet_balance'],2);?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- credit -->

                            <!-- send & recieve money -->
                            <div class="col-md-7">
                                <div class="section-title mb20">
                                    <i class="fas fa-donate mr10"></i> <?php echo __("Send & Recieve Money");?>

                                </div>
                                <button class="btn btn-success btn-block mb10" data-toggle="modal" data-url="#wallet-transfer">
                                    <i class="fa fa-gift"></i> <?php echo __("Send Money");?>

                                </button>
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled'] && ($_smarty_tpl->tpl_vars['system']->value['points_enabled'] && $_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled'])) {?>
                                    <div class="form-row">
                                        <div class="col-12 col-md-4">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-replenish">
                                                <i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>

                                            </button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-affiliates">
                                                <i class="fa fa-exchange-alt mr5"></i><?php echo __("Affiliates Credit");?>

                                            </button>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-points">
                                                <i class="fa fa-piggy-bank mr5"></i><?php echo __("Points Credit");?>

                                            </button>
                                        </div>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-replenish">
                                                <i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>

                                            </button>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-affiliates">
                                                <i class="fa fa-exchange-alt mr5"></i><?php echo __("Withdraw Affiliates Credit");?>

                                            </button>
                                        </div>
                                    </div>
                                <?php } elseif (($_smarty_tpl->tpl_vars['system']->value['points_enabled'] && $_smarty_tpl->tpl_vars['system']->value['points_money_transfer_enabled'])) {?>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-replenish">
                                                <i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>

                                            </button>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-withdraw-points">
                                                <i class="fa fa-piggy-bank mr5"></i><?php echo __("Withdraw Points Credit");?>

                                            </button>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <button class="btn btn-primary btn-block mb10" data-toggle="modal" data-url="#wallet-replenish">
                                        <i class="fab fa-paypal mr5"></i><?php echo __("Replenish Credit");?>

                                    </button>
                                <?php }?>
                            </div>
                            <!-- send & recieve money -->

                            <!-- wallet transactions -->
                            <div class="col-12">
                                <div class="section-title mt10 mb20">
                                    <i class="fas fa-file-alt mr10"></i> <?php echo __("Wallet Transactions");?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover js_dataTable">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __("ID");?>
</th>
                                                    <th><?php echo __("Amount");?>
</th>
                                                    <th><?php echo __("From / To");?>
</th>
                                                    <th><?php echo __("Time");?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transaction_id'];?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                                                <span class="badge badge-pill badge-lg badge-danger mr5"><i class="far fa-arrow-alt-circle-down"></i></span>
                                                                <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2);?>
</strong>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-success mr5"><i class="far fa-arrow-alt-circle-up"></i></span>
                                                                <strong class="text-success"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['transaction']->value['amount'],2);?>
</strong>
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['type'] == "out") {?>
                                                                <span class="badge badge-pill badge-lg badge-danger mr10"><?php echo __("To");?>
</span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-pill badge-lg badge-success mr10"><?php echo __("From");?>
</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "user") {?>
                                                                <a  target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_name'];?>
">
                                                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_picture'];?>
" style="float: none;">
                                                                    <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['transaction']->value['user_lastname'];?>

                                                                </a>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "recharge") {?>
                                                                <?php echo __("Replenish Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_affiliates") {?>
                                                                <?php echo __("Affiliates Credit");?>

                                                            <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "withdraw_points") {?>
                                                                <?php echo __("Points Credit");?>

                                                             <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['node_type'] == "package_payment") {?>
                                                                <?php echo __("Buy Pro Package");?>

                                                            <?php }?>
                                                        </td>
                                                        <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</span></td>
                                                    </tr>
                                                <?php
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
                            <!-- wallet transactions -->
                        </div>
                    </div>
                </div>
                <!-- wallet -->

            <?php }?>
        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
