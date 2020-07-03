<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 15:41:56
  from '/home/winelov/public_html/content/themes/default/templates/started.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb2dac49c8524_34958282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca5f405dcaeab39059861697b47942814f01d278' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/started.tpl',
      1 => 1587804034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5eb2dac49c8524_34958282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header bg-3">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_product_teardown_elol.svg">
    <div class="crystal c03"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
        <h2><?php echo __("Getting Started");?>
</h2>
        <p><?php echo __("This information will let us know more about you");?>
</p>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
    <div class="row">
    	<div class="col-12 col-md-10 mx-md-auto">
            <div class="card shadow">
                <div class="card-body">

                    <!-- nav -->
                    <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
                        <li class="nav-item">
                            <a class="nav-link active" href="#step-1">
                                <h4 class="mb5"><?php echo __("Step 1");?>
</h4>
                                <p class="mb0"><?php echo __("Upload your photo");?>
</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#step-2">
                                <h4 class="mb5"><?php echo __("Step 2");?>
</h4>
                                <p class="mb0"><?php echo __("Update your info");?>
</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#step-3">
                                <h4 class="mb5"><?php echo __("Step 3");?>
</h4>
                                <p class="mb0"><?php echo __("Add Friends");?>
</p>
                            </a>
                        </li>
                    </ul>
                    <!-- nav -->

                    <!-- tabs -->
                    <div class="js_wizard-content" id="step-1">
                        <div class="text-center">
                            <h3 class="mb5"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
</span></h3>
                            <p class="mb20"><?php echo __("Let's start with your photo");?>
</p>
                        </div>
                        
                        <!-- profile-avatar -->
                        <div class="position-relative" style="height: 170px;">
                            <div class="profile-avatar-wrapper static">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">

                                <!-- buttons -->
                                <div class="profile-avatar-change">
                                    <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                                </div>
                                <div class="profile-avatar-change-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default'] || !$_smarty_tpl->tpl_vars['user']->value->_data['user_picture_id']) {?>x-hidden<?php }?>">
                                    <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
"></i>
                                </div>
                                <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default']) {?>x-hidden<?php }?>">
                                    <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                                </div>
                                <!-- buttons -->
                            </div>
                        </div>
                        <!-- profile-avatar -->

                        <!-- buttons -->
                        <div class="clearfix mt20">
                            <button id="activate-step-2" class="btn btn-primary float-right"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                        </div>
                        <!-- buttons -->
                    </div>

                    <div class="js_wizard-content x-hidden" id="step-2">
                        <div class="text-center">
                            <h3 class="mb5"><?php echo __("Update your info");?>
</h3>
                            <p class="mb20"><?php echo __("Share your information with our community");?>
</p>
                        </div>

                        <form class="js_ajax-forms" data-url="users/started.php">
                            <div class="heading-small mb20">
                                <?php echo __("Location");?>

                            </div>
                            <div class="pl-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="country"><?php echo __("Country");?>
</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="none"><?php echo __("Select Country");?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="city"><?php echo __("Current City");?>
</label>
                                        <input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="hometown"><?php echo __("Hometown");?>
</label>
                                        <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                                    </div>
                                </div>
                            </div>

                            <div class="divider"></div>

                            <div class="heading-small mb20">
                                <?php echo __("Work");?>

                            </div>
                            <div class="pl-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="work_title"><?php echo __("Work Title");?>
</label>
                                    <input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="work_place"><?php echo __("Work Place");?>
</label>
                                        <input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="work_url"><?php echo __("Work Website");?>
</label>
                                        <input type="text" class="form-control" name="work_url" id="work_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_url'];?>
">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="divider"></div>

                            <div class="heading-small mb20">
                                <?php echo __("Education");?>

                            </div>
                            <div class="pl-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="edu_major"><?php echo __("Major");?>
</label>
                                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="edu_school"><?php echo __("School");?>
</label>
                                        <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="edu_class"><?php echo __("Class");?>
</label>
                                        <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                                    </div>
                                </div>
                            </div>
                                
                            <!-- success -->
                            <div class="alert alert-success x-hidden"></div>
                            <!-- success -->

                            <!-- error -->
                            <div class="alert alert-danger x-hidden"></div>
                            <!-- error -->

                            <!-- buttons -->
                            <div class="clearfix mt20">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo __("Save Changes");?>
</button>
                                    <button type="button" class="btn btn-primary" id="activate-step-3"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                                </div>
                            </div>
                            <!-- buttons -->
                        </form>
                    </div>

                    <div class="js_wizard-content x-hidden" id="step-3">
                        <div class="text-center">
                            <h3 class="mb5"><?php echo __("Add Friends");?>
</h3>
                            <p class="mb20"><?php echo __("Get latest activities from our popular users");?>
</p>
                        </div>
                        
                        <!-- new people -->
                        <?php if ($_smarty_tpl->tpl_vars['new_people']->value) {?>
                            <ul class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>"add"), 0, true);
?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                        <!-- new people -->

                        <!-- buttons -->
                        <div class="clearfix mt20">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/started/finished" class="btn btn-danger float-right"><i class="fas fa-check-circle mr5"></i><?php echo __("Finish");?>
</a>
                        </div>
                        <!-- buttons -->
                    </div>
                    <!-- tabs -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {

        var wizard_steps = $('.js_wizard-steps li a');
        var wizard_content = $('.js_wizard-content');

        wizard_content.hide();

        wizard_steps.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href'));
            if(!$(this).hasClass('disabled')) {
                wizard_steps.removeClass('active');
                $(this).addClass('active');
                wizard_content.hide();
                $target.show();
            }
        });

        $('.js_wizard-steps li a.active').trigger('click');

        $('#activate-step-2').on('click', function(e) {
            $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
            $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
        });

        $('#activate-step-3').on('click', function(e) {
            $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
            $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
        });

    });
<?php echo '</script'; ?>
><?php }
}
