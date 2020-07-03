<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:17:49
  from '/home/winelov/public_html/content/themes/default/templates/people.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4003d01d941_56172254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e717fb86a07df7297bd36d78aafcd6bc646ec087' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/people.tpl',
      1 => 1587804030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 4,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea4003d01d941_56172254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- left panel -->

        <!-- content panel -->
        <div class="col-md-8 col-lg-9 offcanvas-mainbar">

            <!-- tabs -->
            <div class="content-tabs rounded-sm shadow-sm clearfix">
                <ul>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "find") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("Discover");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests">
                            <?php echo __("Friend Requests");?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
                                <span class="badge badge-lg badge-info ml5"><?php echo count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']);?>
</span>
                            <?php }?>
                        </a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/sent_requests">
                            <?php echo __("Sent Requests");?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) {?>
                                <span class="badge badge-lg badge-warning ml5"><?php echo count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']);?>
</span>
                            <?php }?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-lg-4 order-lg-2">
                    <!-- search panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-search mr5"></i><?php echo __("Search");?>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/find" method="post">
                                <div class="form-group">
                                    <label><?php echo __("Distance");?>
</label>
                                    <div>
                                        <input type="range" class="custom-range" min="1" max="5000" value="5000" name="distance_slider" oninput="this.form.distance_value.value=this.value">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><?php echo __("KM");?>
</span>
                                            </div>
                                            <input type="number" class="form-control" min="1" max="5000" value="5000" name="distance_value" oninput="this.form.distance_slider.value=this.value">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Keyword");?>
</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Gender");?>
</label>
                                    <select class="form-control" name="gender">
                                        <option value="any"><?php echo __("Any");?>
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
                                    <label><?php echo __("Relationship");?>
</label>
                                    <select class="form-control" name="relationship">
                                        <option value="any"><?php echo __("Any");?>
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
                                    <label><?php echo __("Online Status");?>
</label>
                                    <select class="form-control" name="status">
                                        <option value="any"><?php echo __("Any");?>
</option>
                                        <option value="online"><?php echo __("Online");?>
</option>
                                        <option value="offline"><?php echo __("Offline");?>
</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary" name="submit"><i class="fa fa-search mr5"></i><?php echo __("Search");?>
</button>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

                    <?php $_smarty_tpl->_subTemplateRender('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-lg-8 order-lg-1">
                    <div class="card">
                        
                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                            <div class="card-header bg-transparent">
                                <strong><?php echo __("People You May Know");?>
</strong>
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['people']->value) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>

                                    <!-- see-more -->
                                    <?php if (count($_smarty_tpl->tpl_vars['people']->value) >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                                        <div class="alert alert-info see-more js_see-more" data-get="new_people">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    <?php }?>
                                    <!-- see-more -->
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No people available");?>

                                    </p>
                                <?php }?>
                            </div>
                        
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "find") {?>
                            <div class="card-header bg-transparent">
                                <strong><?php echo __("Search Results");?>
</strong>
                            </div>
                            <div class="card-body">
                                <?php if (count($_smarty_tpl->tpl_vars['people']->value) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No people available for your search");?>

                                    </p>
                                <?php }?>
                            </div>
                        
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>
                            <div class="card-header bg-transparent">
                                <strong><?php echo __("Respond to Your Friend Request");?>
</strong>
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>
                            <div class="card-header bg-transparent">
                                <strong><?php echo __("Friend Requests Sent");?>
</strong>
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"cancel"), 0, true);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        
                        <?php }?>

                    </div>
                </div>
                <!-- right panel -->
            </div>
            <!-- content -->

        </div>
        <!-- content panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
