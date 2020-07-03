<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:11:52
  from '/home/winelov/public_html/content/themes/default/templates/_sign_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3fed865bd97_43860731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2228d654ec1fde06b3107b311de636a7ba76ef' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/_sign_form.tpl',
      1 => 1587804044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_5ea3fed865bd97_43860731 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card card-register">

    <!-- signin -->
    <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>x-hidden<?php }?>">
        <div class="card-header">
            <img class="card-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/square1.jpg">
            <h4 class="card-title"><?php echo __("Login");?>
</h4>
        </div>
        <div class="card-body">
            <?php if ($_smarty_tpl->tpl_vars['highlight']->value) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
            <form class="js_ajax-forms" data-url="core/signin.php">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user fa-fw"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder='<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' name="username_email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder='<?php echo __("Password");?>
' name="password" required>
                    </div>
                </div>
                <div class="custom-control custom-checkbox mb10">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                    <label class="custom-control-label" for="remember"><?php echo __("Remember me");?>
</label>
                    <a class="float-right" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/reset"><?php echo __("Forgotten password?");?>
</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary bg-gradient-blue border-0 rounded-pill"><?php echo __("Login");?>
</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            <?php echo __("or");?>
 <?php echo __("login with");?>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                                <i class="fab fa-google"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                                <i class="fab fa-vk"></i>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled'] || (!$_smarty_tpl->tpl_vars['system']->value['registration_enabled'] && $_smarty_tpl->tpl_vars['system']->value['invitation_enabled'])) {?>
                <div class="mt20 text-center">
                    <?php echo __("Not registered?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="js_toggle-panel text-link"><?php echo __("Create an account");?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
    <!-- signin -->

    <!-- signup -->
    <div class="js_panel <?php if ($_smarty_tpl->tpl_vars['do']->value != 'up') {?>x-hidden<?php }?>">
        <div class="card-header">
            <img class="card-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/square1.jpg">
            <h4 class="card-title"><?php echo __("Register");?>
</h4>
        </div>
        <div class="card-body">
            <form class="js_ajax-forms" data-url="core/signup.php">
                <?php if (!$_smarty_tpl->tpl_vars['system']->value['registration_enabled'] && $_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-handshake fa-fw"></i></span>
                            </div>
                            <input name="invitation_code" type="text" class="form-control" placeholder='<?php echo __("Invitation Code");?>
' required>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                        </div>
                        <input name="first_name" type="text" class="form-control" placeholder='<?php echo __("First name");?>
' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
                        </div>
                        <input name="last_name" type="text" class="form-control" placeholder='<?php echo __("Last name");?>
' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-globe fa-fw"></i></span>
                        </div>
                        <input name="username" type="text" class="form-control" placeholder='<?php echo __("Username");?>
' required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
                        </div>
                        <input name="email" type="email" class="form-control" placeholder='<?php echo __("Email");?>
' required>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone fa-fw"></i></span>
                            </div>
                            <input name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (eg. +905...)");?>
' required>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" placeholder='<?php echo __("Password");?>
' required>
                        </div>
                    </div>
                </div>
                <div class="js_hidden-section x-hidden">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mars fa-fw"></i></span>
                            </div>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="none"><?php echo __("Select Sex");?>
:</option>
                                <option value="male"><?php echo __("Male");?>
</option>
                                <option value="female"><?php echo __("Female");?>
</option>
                                <option value="other"><?php echo __("Other");?>
</option>
                            </select>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
                        <div class="form-group">
                            <label class="form-control-label"><?php echo __("Birthdate");?>
</label>
                            <div class="form-row">
                                <div class="col">
                                    <select class="form-control" name="birth_month">
                                        <option value="none"><?php echo __("Month");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="birth_day">
                                        <option value="none"><?php echo __("Day");?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                        <?php }
}
?>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control" name="birth_year">
                                        <option value="none"><?php echo __("Year");?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1905) : 1905-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                        <?php }
}
?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
                    <?php }?>
                    <!-- custom fields -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                        <div class="form-group">
                            <!-- reCAPTCHA -->
                            <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                            <!-- reCAPTCHA -->
                        </div>
                    <?php }?>
                    <!-- newsletter consent -->
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['newsletter_consent']) {?>
                        <div class="custom-control custom-checkbox mb10">
                            <input type="checkbox" class="custom-control-input" name="newsletter_agree" id="newsletter_agree">
                            <label class="custom-control-label" for="newsletter_agree">
                                <?php echo __("I expressly agree to receive the newsletter");?>

                            </label>
                        </div>
                    <?php }?>
                    <!-- newsletter consent -->
                    <div class="custom-control custom-checkbox mb10">
                        <input type="checkbox" class="custom-control-input" name="privacy_agree" id="privacy_agree">
                        <label class="custom-control-label" for="privacy_agree">
                            <?php echo __("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/terms" target="_blank"><?php echo __("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/privacy" target="_blank"><?php echo __("Privacy Policy");?>
</a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success bg-gradient-green border-0 rounded-pill"><?php echo __("Sign Up");?>
</button>
                </div>
                <!-- error -->
                <div class="alert alert-danger mb0 x-hidden"></div>
                <!-- error -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                    <div class="hr-heading mt5 mb10">
                        <div class="hr-heading-text">
                            <?php echo __("or");?>
 <?php echo __("register with");?>

                        </div>
                    </div>
                    <div class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook" class="btn btn-sm btn-rounded btn-social-icon btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google" class="btn btn-sm btn-rounded btn-social-icon btn-google">
                                <i class="fab fa-google"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter" class="btn btn-sm btn-rounded btn-social-icon btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram" class="btn btn-sm btn-rounded btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte" class="btn btn-sm btn-rounded btn-social-icon btn-vk">
                                <i class="fab fa-vk"></i>
                            </a>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <div class="mt20 text-center">
                <?php echo __("Have an account?");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo __("Login Now");?>
</a>
            </div>
        </div>
    </div>
    <!-- signup -->
</div><?php }
}
