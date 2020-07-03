<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:12:01
  from '/home/winelov/public_html/content/themes/default/templates/__svg_icons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3fee120fb28_99262470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b176beaeb67b8b1589b3d1dbed90a65b988bb9e3' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/__svg_icons.tpl',
      1 => 1587804053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../images/svg/2co.svg' => 1,
    'file:../images/svg/photo.svg' => 1,
    'file:../images/svg/play-button.svg' => 1,
    'file:../images/svg/record.svg' => 1,
    'file:../images/svg/file.svg' => 1,
    'file:../images/svg/sun.svg' => 1,
    'file:../images/svg/night.svg' => 1,
    'file:../images/svg/sunrise.svg' => 1,
  ),
),false)) {
function content_5ea3fee120fb28_99262470 (Smarty_Internal_Template $_smarty_tpl) {
?><svg 
    <?php if ($_smarty_tpl->tpl_vars['width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
"<?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
"<?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['class']->value) {?>class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"<?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['style']->value) {?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> 
    version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
    <?php if ($_smarty_tpl->tpl_vars['icon']->value == "2co") {?>

        <?php $_smarty_tpl->_subTemplateRender('file:../images/svg/2co.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "photos") {?>

    	<?php $_smarty_tpl->_subTemplateRender('file:../images/svg/photo.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "videos") {?>
    
    	<?php $_smarty_tpl->_subTemplateRender('file:../images/svg/play-button.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "audios") {?>
    
    	<?php $_smarty_tpl->_subTemplateRender('file:../images/svg/record.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "files") {?>
    
    	<?php $_smarty_tpl->_subTemplateRender('file:../images/svg/file.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "sun") {?>
    
        <?php $_smarty_tpl->_subTemplateRender('file:../images/svg/sun.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "night") {?>
    
        <?php $_smarty_tpl->_subTemplateRender('file:../images/svg/night.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value == "afternoon") {?>
    
        <?php $_smarty_tpl->_subTemplateRender('file:../images/svg/sunrise.svg', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
</svg><?php }
}
