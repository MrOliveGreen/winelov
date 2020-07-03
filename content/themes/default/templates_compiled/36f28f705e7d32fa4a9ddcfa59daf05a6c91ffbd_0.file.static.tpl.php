<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 10:34:00
  from '/home/winelov/public_html/content/themes/default/templates/static.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea41218403bd3_42836046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36f28f705e7d32fa4a9ddcfa59daf05a6c91ffbd' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/static.tpl',
      1 => 1587804034,
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
function content_5ea41218403bd3_42836046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="page-title">
	<div class="squares square-1"></div>
    <div class="squares square-2"></div>
    <div class="squares square-3"></div>
    <?php echo $_smarty_tpl->tpl_vars['static']->value['page_title'];?>

</div>

<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>" style="margin-top: -25px;">
    <div class="row">

	    <!-- side panel -->
	    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
		    <div class="col-12 d-block d-sm-none offcanvas-sidebar">
		        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		    </div>
	    <?php }?>
	    <!-- side panel -->

	    <!-- content panel -->
	    <div class="col-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
    		<div class="card shadow">
    			<div class="card-body page-content text-readable text-with-list">
			        <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

    			</div>
    		</div>
	    </div>
	    <!-- content panel -->
	    
	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
