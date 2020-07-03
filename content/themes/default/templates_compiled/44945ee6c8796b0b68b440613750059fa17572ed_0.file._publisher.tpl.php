<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:12:01
  from '/home/winelov/public_html/content/themes/default/templates/_publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea3fee1174da6_64826349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44945ee6c8796b0b68b440613750059fa17572ed' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/_publisher.tpl',
      1 => 1587804043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3fee1174da6_64826349 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="publisher-overlay"></div>
<div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>

    <!-- publisher loader -->
    <div class="publisher-loader">
        <div class="loader loader_small"></div>
    </div>
    <!-- publisher loader -->

    <!-- publisher-message -->
    <div class="publisher-message">
        <?php if ($_smarty_tpl->tpl_vars['_handle']->value == "page") {?>
            <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
">
        <?php } else { ?>
            <img class="publisher-avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
">
        <?php }?>
        <div class="colored-text-wrapper">
            <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
' placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'><?php if ($_smarty_tpl->tpl_vars['page']->value == "share" && $_smarty_tpl->tpl_vars['url']->value) {
echo $_smarty_tpl->tpl_vars['url']->value;
}?></textarea>
        </div>
        <div class="publisher-emojis">
            <div class="position-relative">
                <span class="js_emoji-menu-toggle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Insert an emoji");?>
'>
                    <i class="far fa-smile-wink fa-lg"></i>
                </span>
            </div>
        </div>
    </div>
    <!-- publisher-message -->

    <!-- publisher-slider -->
    <div class="publisher-slider">
        <!-- publisher scraper -->
        <div class="publisher-scraper"></div>
        <!-- publisher scraper -->

        <!-- post attachments -->
        <div class="publisher-attachments attachments clearfix x-hidden"></div>
        <!-- post attachments -->

        <!-- post album -->
        <div class="publisher-meta" data-meta="album">
            <i class="fa fa-file-image fa-fw"></i>
            <input type="text" placeholder='<?php echo __("Album title");?>
'>
        </div>
        <!-- post album -->

        <!-- post location -->
        <div class="publisher-meta" data-meta="location">
            <i class="fa fa-map-marker fa-fw"></i>
            <input class="js_geocomplete" type="text" placeholder='<?php echo __("Where are you?");?>
'>
        </div>
        <!-- post location -->

        <!-- post feelings -->
        <div class="publisher-meta pl0" data-meta="feelings">
            <div id="feelings-menu-toggle" data-init-text='<?php echo __("What are you doing?");?>
'><?php echo __("What are you doing?");?>
</div>
            <div id="feelings-data" style="display: none">
                <input type="text" placeholder='<?php echo __("What are you doing?");?>
'>
                <span></span>
            </div>
            <div id="feelings-menu" class="dropdown-menu dropdown-widget">
                <div class="dropdown-widget-body ptb5">
                    <div class="js_scroller">
                        <ul class="feelings-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings']->value, 'feeling');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feeling']->value) {
?>
                                <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->tpl_vars['feeling']->value['action'];?>
" data-placeholder="<?php echo __($_smarty_tpl->tpl_vars['feeling']->value['placeholder']);?>
">
                                    <div class="icon">
                                        <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['feeling']->value['icon'];?>
"></i>
                                    </div>
                                    <div class="data">
                                        <?php echo __($_smarty_tpl->tpl_vars['feeling']->value['text']);?>

                                    </div>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="feelings-types" class="dropdown-menu dropdown-widget">
                <div class="dropdown-widget-body ptb5">
                    <div class="js_scroller">
                        <ul class="feelings-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                                <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['action'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
">
                                    <div class="icon">
                                        <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
"></i>
                                    </div>
                                    <div class="data">
                                        <?php echo __($_smarty_tpl->tpl_vars['type']->value['text']);?>

                                    </div>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- post feelings -->

        <!-- post colored -->
        <div class="publisher-meta pl0" data-meta="colored">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colored_patterns']->value, 'pattern');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
?>
                <div class="colored-pattern-item js_publisher-pattern" data-id="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['pattern_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['type'];?>
" data-background-image="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
" data-background-color-1="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
" data-background-color-2="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
" data-text-color="<?php echo $_smarty_tpl->tpl_vars['pattern']->value['text_color'];?>
" <?php if ($_smarty_tpl->tpl_vars['pattern']->value['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_1'];?>
, <?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['pattern']->value['background_image'];?>
)" <?php }?>>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- post colored -->

        <!-- post gif -->
        <div class="publisher-meta" data-meta="gif">
            <i class="fa fa-file-image fa-fw"></i>
            <input class="js_publisher-gif-search" type="text" placeholder='<?php echo __("Search GIFs");?>
'>
        </div>
        <!-- post gif -->

        <!-- post poll -->
        <div class="publisher-meta" data-meta="poll">
            <i class="fa fa-plus fa-fw"></i>
            <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
        </div>
        <div class="publisher-meta" data-meta="poll">
            <i class="fa fa-plus fa-fw"></i>
            <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
        </div>
        <!-- post poll -->

        <!-- post video -->
        <div class="publisher-meta" data-meta="video">
            <i class="fa fa-video fa-fw"></i>
            <?php echo __("Video uploaded successfully");?>

            <div class="float-right">
                <button type="button" class="close js_publisher-attachment-file-remover" data-type="video">
                    <span>&times;</span>
                </button>
            </div>
        </div>
        <div class="publisher-custom-thumbnail">
           <?php echo __("Custom Video Thumbnail");?>

           <div class="x-image">
                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                    <span>×</span>
                </button>
                <div class="x-image-loader">
                    <div class="progress x-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="video_thumbnail" value="">
            </div>
        </div>
        <!-- post video -->

        <!-- post audio -->
        <div class="publisher-meta" data-meta="audio">
            <i class="fa fa-music fa-fw"></i>
            <?php echo __("Audio uploaded successfully");?>

            <div class="float-right">
                <button type="button" class="close js_publisher-attachment-file-remover" data-type="audio">
                    <span>&times;</span>
                </button>
            </div>
        </div>
        <!-- post audio -->

        <!-- post file -->
        <div class="publisher-meta" data-meta="file">
            <i class="fa fa-file-alt fa-fw"></i>
            <?php echo __("File uploaded successfully");?>

            <div class="float-right">
                <button type="button" class="close js_publisher-attachment-file-remover" data-type="file">
                    <span>&times;</span>
                </button>
            </div>
        </div>
        <!-- post file -->

        <!-- publisher-tools-tabs -->
        <div class="publisher-tools-tabs">
            <ul class="row">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/camera.png" class="js_x-uploader" data-handle="publisher" data-multiple="true"><?php echo __("Upload Photos");?>

                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-tab" data-tab="album">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/album.png"><?php echo __("Create Album");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['colored_posts_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-tab" data-tab="colored">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/color-circle.png"><?php echo __("Colored Posts");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['activity_posts_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-feelings">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/smile.png"><?php echo __("Feelings/Activity");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/placeholder.png"><?php echo __("Check In");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['gif_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-tab" data-tab="gif">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/gif.png"><?php echo __("GIF");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled'] && $_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['_handle']->value != "group" && $_smarty_tpl->tpl_vars['_handle']->value != "event") {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab link js_publisher-tab" data-tab="product" data-toggle="modal" data-url="posts/product.php?do=create">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/cart.png"><?php echo __("Sell Something");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles'] && $_smarty_tpl->tpl_vars['_handle']->value != "page" && $_smarty_tpl->tpl_vars['_handle']->value != "group" && $_smarty_tpl->tpl_vars['_handle']->value != "event") {?>
                    <li class="col-md-6">
                        <a class="publisher-tools-tab link js_publisher-tab" data-tab="article" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/edit.png"><?php echo __("Write Article");?>

                        </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['polls_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab js_publisher-tab" data-tab="poll">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/bar-chart.png"><?php echo __("Create Poll");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/video-camera.png" class="js_x-uploader" data-handle="publisher" data-type="video"><?php echo __("Upload Video");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab attach js_publisher-tab" data-tab="audio">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/music-player.png" class="js_x-uploader" data-handle="publisher" data-type="audio"><?php echo __("Upload Audio");?>

                        </div>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>
                    <li class="col-md-6">
                        <div class="publisher-tools-tab attach js_publisher-tab" data-tab="file">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/icons/publisher/folder.png" class="js_x-uploader" data-handle="publisher" data-type="file"><?php echo __("Upload File");?>

                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>
        <!-- publisher-tools-tabs -->

        <!-- publisher-footer -->
        <div class="publisher-footer">
            <!-- publisher-buttons -->
            <?php if ($_smarty_tpl->tpl_vars['_privacy']->value) {?>
                <!-- privacy -->
                <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>
                    <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="me" title='<?php echo __("Shared with: Only Me");?>
'>
                        <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-lock mr10"></i><span class="btn-group-text"><?php echo __("Only Me");?>
</span>
                        </button>
                <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>
                    <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                        <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text"><?php echo __("Friends");?>
</span>
                        </button>
                <?php } else { ?>
                    <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                        <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" data-display="static">
                            <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo __("Public");?>
</span>
                        </button>
                <?php }?>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
                            <i class="fa fa-globe mr5"></i><?php echo __("Public");?>

                        </div>
                        <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
                            <i class="fa fa-users mr5"></i><?php echo __("Friends");?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                            <div class="dropdown-item pointer" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                                <i class="fa fa-lock mr5"></i><?php echo __("Only Me");?>

                            </div>
                        <?php }?>
                    </div>
                </div>
                <!-- privacy -->
            <?php }?>
            <button type="button" class="btn btn-sm btn-primary ml5 js_publisher"><?php echo __("Post");?>
</button>
            <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
    </div>
    <!-- publisher-slider -->
</div><?php }
}
