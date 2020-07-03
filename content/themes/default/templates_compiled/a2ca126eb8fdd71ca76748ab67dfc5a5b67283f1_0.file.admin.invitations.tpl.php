<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 09:00:09
  from '/home/winelov/public_html/content/themes/default/templates/admin.invitations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0a119d067d9_49202934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ca126eb8fdd71ca76748ab67dfc5a5b67283f1' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.invitations.tpl',
      1 => 1587804003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee0a119d067d9_49202934 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['view']->value == "generate") {?>
	<div class="modal-header">
        <h6 class="modal-title"><?php echo __("New Invitation Code");?>
</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
	</div>
	<div class="modal-body text-center">
	    <div class="text-readable">
	        <?php echo __("Your invitation code is");?>

	    </div>
        <h3><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</span></h3>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "prepare_email") {?>
	<div class="modal-header">
        <h6 class="modal-title"><?php echo __("Send Invitation Code");?>
</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
	</div>
    <form class="js_ajax-forms" data-url="admin/invitations.php?do=send_email">
        <div class="modal-body">
            <div class="form-group">
                <label class="form-control-label"><?php echo __("Email");?>
</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input name="email" id="email" type="email" class="form-control" required autofocus>
                    <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
                </div>
                <span class="form-text">
                    <?php echo __("To which email address you want to send this invitation code");?>
: <span class="badge badge-warning text-lg"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</strong>
                </span>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 x-hidden"></div>
            <!-- error -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
            <button type="submit" class="btn btn-success"><?php echo __("Send");?>
</button>
        </div>
    </form>
<?php }
}
}
