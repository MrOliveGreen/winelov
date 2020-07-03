<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:18:08
  from '/home/winelov/public_html/content/themes/default/templates/market.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea4005008e240_94013068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4d0ae463380f7fb29df37eaab3ee45b1e585e7' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/market.tpl',
      1 => 1587804027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5ea4005008e240_94013068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header market-header">
    <div class="container">
        <h2><?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 <?php echo __("Market");?>
</h2>
        <div class="row mt20">
            <div class="col-sm-9 col-lg-6 mx-sm-auto">
                <form class="js_search-form" data-handle="market">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for products");?>
'>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container mt20 offcanvas">
	<div class="row">

		<!-- left panel -->
		<div class="col-md-4 col-lg-3 offcanvas-sidebar">
			<!-- add new product -->
			<div class="mb10">
				<button type="button" class="btn btn-sm btn-primary btn-block rounded-pill" data-toggle="modal" data-url="posts/product.php?do=create">
	                <i class="fa fa-cart-plus mr10"></i><?php echo __("Add New Product");?>

	            </button>
			</div>
            <!-- add new product -->

            <!-- categories -->
			<div class="card">
				<div class="card-body with-nav">
					<ul class="side-nav">
						<li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                <?php echo __("All");?>

                            </a>
						</li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
							<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "category" && $_smarty_tpl->tpl_vars['category_id']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>class="active"<?php }?>>
								<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
	                                <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

	                            </a>
							</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
			<!-- categories -->
		</div>
		<!-- left panel -->

		<!-- right panel -->
		<div class="col-md-8 col-lg-9 offcanvas-mainbar">

			<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php if ($_smarty_tpl->tpl_vars['view']->value == "search") {?>
				<div class="bs-callout bs-callout-info mt0">
                    <!-- results counter -->
                    <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> <?php echo __("results were found for the search for");?>
 "<strong class="text-primary"><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</strong>"
                    <!-- results counter -->
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['view']->value == '' && $_smarty_tpl->tpl_vars['promoted_products']->value) {?>
				<div class="articles-widget-header">
                    <div class="articles-widget-title"><?php echo __("Promoted Products");?>
</div>
                </div>
				<div class="row mb20">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_products']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product boosted">
								<div class="boosted-icon" data-toggle="tooltip" title="<?php echo __("Promoted");?>
">
					                <i class="fa fa-bullhorn"></i>
					            </div>
								<div class="product-image">
									<div class="product-price">
										<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['price'] > 0) {?>
						                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>

						                <?php } else { ?>
						                    <?php echo __("Free");?>

						                <?php }?>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
">
									<?php } else { ?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.jpg">
									<?php }?>
									<div class="product-overlay">
										<a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
											<?php echo __("More");?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
									        <button type="button" class="btn btn-sm btn-info rounded-pill js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['author_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
"><i class="fa fa-comments mr5"></i><?php echo __("Buy");?>
</button>
									    <?php }?>
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</a>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i><?php echo __("Type");?>
: 
										<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {
echo __("New");
} else {
echo __("Used");
}?>
									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['location']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];
} else {
echo __("N/A");
}?>
									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
            <?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
						<div class="col-md-6 col-lg-4">
							<div class="card product">
								<div class="product-image">
									<div class="product-price">
										<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['price'] > 0) {?>
						                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>

						                <?php } else { ?>
						                    <?php echo __("Free");?>

						                <?php }?>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
">
									<?php } else { ?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.jpg">
									<?php }?>
									<div class="product-overlay">
										<a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
											<?php echo __("More");?>

										</a>
										<?php if ($_smarty_tpl->tpl_vars['post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
									        <button type="button" class="btn btn-sm btn-info rounded-pill js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['author_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
"><i class="fa fa-comments mr5"></i><?php echo __("Buy");?>
</button>
									    <?php }?>
									</div>
								</div>
								<div class="product-info">
									<div class="product-meta title">
										<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</a>
									</div>
									<div class="product-meta">
										<i class="fa fa-tag fa-fw mr5" style="color: #1f9cff;"></i><?php echo __("Type");?>
: 
										<?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {
echo __("New");
} else {
echo __("Used");
}?>
									</div>
									<div class="product-meta">
										<i class="fa fa-map-marker fa-fw"></i> <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['location']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];
} else {
echo __("N/A");
}?>
									</div>
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>

				<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

			<?php } else { ?>
				<div class="text-center text-muted">
                    <i class="fa fa-cart-plus fa-4x"></i>
                    <p class="mt10"><strong><?php echo __("No products to show");?>
</strong></p>
                </div>
			<?php }?>
		</div>
		<!-- right panel -->

	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
