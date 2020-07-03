<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:12:17
  from '/home/winelov/public_html/content/themes/default/templates/messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3fef1804215_70776216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f498590e82b71d8f411c20a3df159f5d6e53b4f3' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/messages.tpl',
      1 => 1587804027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_conversation.tpl' => 1,
    'file:ajax.chat.conversation.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea3fef1804215_70776216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- threads -->
        <div class="col-md-4 col-lg-3 offcanvas-sidebar">
            <div class="card">
                <div class="card-header with-icon bg-transparent">
                    <div class="float-right">
                        <a class="js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                            <i class="fa fa-edit fa-lg"></i>
                        </a>
                    </div>
                    <?php echo __("Messenger");?>

                </div>
                <div class="card-body ptb10 plr0 js_live-messages-alt">
                    <div class="js_scroller" data-slimScroll-height="490px">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], '_conversation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_conversation']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('conversation'=>$_smarty_tpl->tpl_vars['_conversation']->value), 0, true);
?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                            <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                <!-- see-more -->
                                <div class="alert alert-post see-more small mlr5 js_see-more" data-get="conversations">
                                    <span><?php echo __("Load Older Threads");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                                <!-- see-more -->
                            <?php }?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- threads -->

        <!-- conversation -->
        <div class="col-md-8 col-lg-9 offcanvas-mainbar js_conversation-container">
            <?php if ($_smarty_tpl->tpl_vars['view']->value == "new") {?>
                <div class="card panel-messages fresh">
                    <div class="card-header with-icon bg-transparent">
                        <?php echo __("New Message");?>

                    </div>
                    <div class="card-body">
                        <div class="chat-conversations js_scroller" data-slimScroll-height="440px"></div>
                        <div class="chat-to clearfix js_autocomplete-tags">
                            <div class="to"><?php echo __("To");?>
:</div>
                            <ul class="tags">
                                <?php if ($_smarty_tpl->tpl_vars['recipient']->value) {?>
                                    <li data-uid="<?php echo $_smarty_tpl->tpl_vars['recipient']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recipient']->value['user_fullname'];?>
<button type="button" class="close js_tag-remove" title="<?php echo __("Remove");?>
"><span>×</span></button></li>
                                <?php }?>
                            </ul>
                            <div class="typeahead">
                                <input type="text" size="1" autofocus>
                            </div>
                        </div>
                        <div class="chat-attachments attachments clearfix x-hidden">
                            <ul>
                                <li class="loading">
                                    <div class="progress x-progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>
                                </li>
                            </ul>
                        </div>
                        <div class="x-form chat-form">
                            <div class="chat-form-message">
                                <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo __("Write a message");?>
'></textarea>
                            </div>
                            <ul class="x-form-tools clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                                    <li class="x-form-tools-attach">
                                        <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
                                    </li>
                                <?php }?>
                                <li class="x-form-tools-emoji js_emoji-menu-toggle">
                                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                                </li>
                                <li class="x-form-tools-post js_post-message">
                                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                    <div class="card card-messages" style="padding-top: 60px;">
                        <div class="card-body text-center text-muted" style="min-height: 510px;">
                            <img width="25%" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/no_results.png">
                            <p class="mt10 mb0"><strong><?php echo __("No Conversation Selected");?>
</strong></p>
                            <a class="mt20 btn btn-sm rounded-pill btn-primary js_chat-new" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                                <i class="fa fa-edit mr5"></i><?php echo __("New Message");?>

                            </a>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
        </div>
        <!-- conversation -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
