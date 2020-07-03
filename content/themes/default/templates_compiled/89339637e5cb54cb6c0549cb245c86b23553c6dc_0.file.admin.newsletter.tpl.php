<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 13:56:14
  from '/home/winelov/public_html/content/themes/default/templates/admin.newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4417e5b5f26_69504763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89339637e5cb54cb6c0549cb245c86b23553c6dc' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.newsletter.tpl',
      1 => 1587804004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea4417e5b5f26_69504763 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <i class="fa fa-paper-plane mr10"></i><?php echo __("Newsletter");?>

    </div>

    <!-- Newsletter -->
    <form class="js_ajax-forms " data-url="admin/newsletter.php">
        <div class="card-body">
            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Is HTML");?>
</div>
                    <div class="form-text d-none d-sm-block"><?php echo __("The message will be sent as HTML instead of plain text");?>
</div>
                </div>
                <div class="text-right">
                    <label class="switch" for="is_html">
                        <input type="checkbox" name="is_html" id="is_html">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-table-row">
                <div>
                    <div class="form-control-label h6"><?php echo __("Test Message");?>
</div>
                    <div class="form-text d-none d-sm-block"><?php echo __("The message will sent to Website Email only");?>
</div>
                </div>
                <div class="text-right">
                    <label class="switch" for="is_test">
                        <input type="checkbox" name="is_test" id="is_test">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Send to");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control" name="to">
                        <option value="all"><?php echo __("All Users");?>
</option>
                        <option value="active"><?php echo __("Active Users");?>
</option>
                        <option value="inactive"><?php echo __("Inactive Users");?>
</option>
                    </select>
                </div>
            </div>

            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Subject");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject">
                </div>
            </div>
            
            <div class="form-group form-row">
                <label class="col-md-3 form-control-label">
                    <?php echo __("Message");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="10" name="message"></textarea>
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
            <button type="submit" class="btn btn-success">
                <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

            </button>
        </div>
    </form>
    <!-- Newsletter -->

</div><?php }
}
