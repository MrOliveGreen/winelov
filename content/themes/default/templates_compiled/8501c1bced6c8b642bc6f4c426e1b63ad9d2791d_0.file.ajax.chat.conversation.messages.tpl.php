<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 13:58:37
  from '/home/winelov/public_html/content/themes/default/templates/ajax.chat.conversation.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed1150de00ed6_87277067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8501c1bced6c8b642bc6f4c426e1b63ad9d2791d' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ajax.chat.conversation.messages.tpl',
      1 => 1587804013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
),false)) {
function content_5ed1150de00ed6_87277067 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
	<!-- see-more -->
	<div class="alert alert-chat see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
  data-get="messages">
	    <span><?php echo __("Loading Older Messages");?>
</span>
	    <div class="loader loader_small x-hidden"></div>
	</div>
	<!-- see-more -->
<?php }?>

<ul>
    <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>
</ul><?php }
}
