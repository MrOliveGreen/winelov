<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 12:57:30
  from '/home/winelov/public_html/content/themes/default/templates/ajax.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3a9ba7f4ff5_84589206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5337063084692fdfd8d9d262cead4b480937451' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/ajax.comments.tpl',
      1 => 1587804014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 1,
  ),
),false)) {
function content_5ed3a9ba7f4ff5_84589206 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
