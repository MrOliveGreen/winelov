<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-25 09:46:26
  from '/home/winelov/public_html/content/themes/default/templates/admin.movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea406f222cab2_14770363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6e2d9cea4e245cb3ac8f48cff970296788997f1' => 
    array (
      0 => '/home/winelov/public_html/content/themes/default/templates/admin.movies.tpl',
      1 => 1587804004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea406f222cab2_14770363 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies/add_movie" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Movie");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies/add_genre" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus mr5"></i><?php echo __("Add New Genre");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre" || $_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?>
            <div class="float-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies/genres" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-film mr10"></i><?php echo __("Movies");?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie") {?> &rsaquo; <?php echo __("Add New Movie");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?> &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?> &rsaquo; <?php echo __("Genres");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre") {?> &rsaquo; <?php echo __("Genres");?>
 &rsaquo; <?php echo __("Add New Genre");
}?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?> &rsaquo; <?php echo __("Genres");?>
 &rsaquo; <?php echo $_smarty_tpl->tpl_vars['data']->value['genre_name'];
}?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Source");?>
</th>
                            <th><?php echo __("Release");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>

                                </td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_url'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['poster'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

                                    </a>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "youtube") {?>
                                        <span class="badge badge-pill badge-lg badge-danger"><?php echo __("YouTube");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "vimeo") {?>
                                        <span class="badge badge-pill badge-lg badge-info"><?php echo __("Vimeo");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "link") {?>
                                        <span class="badge badge-pill badge-lg badge-secondary"><?php echo __("Link");?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['source_type'] == "uploaded") {?>
                                        <span class="badge badge-pill badge-lg badge-success"><?php echo __("Uploaded");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['release_year']) {
echo $_smarty_tpl->tpl_vars['row']->value['release_year'];
} else {
echo __("N/A");
}?>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies/edit_movie/<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['movie_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_movie") {?>

        <form class="js_ajax-forms " data-url="admin/movies.php?do=add_movie">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Source");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="source_url">
                        <span class="form-text">
                            <?php echo __("From YouTube, Vimeo or site.com/movie.mp4");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Or Upload Movie");?>

                    </label>
                    <div class="col-md-9">
                        <div class="x-image">
                            <div class="x-image-success">
                                <?php echo __("Uploaded Successfully");?>

                            </div>
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="x-image-loader">
                                <div class="progress x-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                            <input type="hidden" class="js_x-image-input" name="source_upload" value="">
                        </div>
                        <span class="form-text">
                            <?php echo __("Maximum file size is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];
echo __("KB");?>
 <?php echo __("and allowed extensions are");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
<br>
                            <?php echo __("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/uploads"><?php echo __("Uploads Settings");?>
</a>
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Title");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("IMDB");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="imdb_url">
                        <span class="form-text">
                            <?php echo __("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Stars");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="stars" rows="3"></textarea>
                        <span class="form-text">
                            <?php echo __("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Release Year");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="release_year">
                        <span class="form-text">
                            <?php echo __("Movie release year, Example: 1995");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Duration");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="duration">
                        <span class="form-text">
                            <?php echo __("Movie duration in minutes, Example: 120");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Genres");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['genre']->value['genre_name']);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Poster");?>

                    </label>
                    <div class="col-md-9">
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
                            <input type="hidden" class="js_x-image-input" name="poster" value="">
                        </div>
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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_movie") {?>

        <form class="js_ajax-forms " data-url="admin/movies.php?do=edit_movie&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['movie_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Source");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="source_url" <?php if ($_smarty_tpl->tpl_vars['data']->value['source_type'] != 'uploaded') {?>value="<?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
"<?php }?>>
                        <span class="form-text">
                            <?php echo __("From YouTube, Vimeo or site.com/movie.mp4");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Or Upload Movie");?>

                    </label>
                    <div class="col-md-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['source_type'] == 'uploaded' && $_smarty_tpl->tpl_vars['data']->value['source']) {?>
                            <div class="x-image">
                                <div class="x-image-success" style="display: block;">
                                    <?php echo __("Uploaded Successfully");?>

                                </div>
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                                <input type="hidden" class="js_x-image-input" name="source_upload" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['source'];?>
">
                            </div>
                        <?php } else { ?>
                            <div class="x-image">
                                <div class="x-image-success">
                                    <?php echo __("Uploaded Successfully");?>

                                </div>
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="x-image-loader">
                                    <div class="progress x-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <i class="fa fa-video fa-lg js_x-uploader" data-type="video" data-handle="x-video"></i>
                                <input type="hidden" class="js_x-image-input" name="source_upload" value="">
                            </div>
                        <?php }?>
                        <span class="form-text">
                            <?php echo __("Maximum file size is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];
echo __("KB");?>
 <?php echo __("and allowed extensions are");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
<br>
                            <?php echo __("You can change the");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/settings/uploads"><?php echo __("Uploads Settings");?>
</a>
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Title");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="description" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("IMDB");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="imdb_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['imdb_url'];?>
">
                        <span class="form-text">
                            <?php echo __("IMDB Link, Example:");?>
 <a target="_blank" href="https://www.imdb.com/title/tt0111161">https://www.imdb.com/title/tt0111161</a>
                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Movie Stars");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="stars" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['stars'];?>
</textarea>
                        <span class="form-text">
                            <?php echo __("Separated by a comma (,) Example: Tom Hanks, Julia Roberts, Jim Carrey");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Release Year");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="release_year" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['release_year'];?>
">
                        <span class="form-text">
                            <?php echo __("Movie release year, Example: 1995");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Duration");?>

                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="duration" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['duration'];?>
">
                        <span class="form-text">
                            <?php echo __("Movie duration in minutes, Example: 120");?>

                        </span>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Genres");?>

                    </label>
                    <div class="col-md-9">
                        <select class="form-control selectpicker" multiple data-actions-box="true" name="movie_genres[]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['movies_genres'], 'genre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                                <option <?php if (in_array($_smarty_tpl->tpl_vars['genre']->value['genre_id'],$_smarty_tpl->tpl_vars['data']->value['genres'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['genre']->value['genre_name']);?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Poster");?>

                    </label>
                    <div class="col-md-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['poster'] == '') {?>
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster">
                            </div>
                        <?php } else { ?>
                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['poster'];?>
')">
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="poster" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['poster'];?>
">
                            </div>
                        <?php }?>
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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "genres") {?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Order");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['genre_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['genre_order'];?>
</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/movies/edit_genre/<?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="movie_genre" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['genre_id'];?>
">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_genre") {?>

        <form class="js_ajax-forms " data-url="admin/movies.php?do=add_genre">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="genre_name">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="genre_order">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="genre_description" rows="3"></textarea>
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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_genre") {?>

        <form class="js_ajax-forms " data-url="admin/movies.php?do=edit_genre&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['genre_id'];?>
">
            <div class="card-body">
                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="genre_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['genre_name'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Order");?>

                    </label>
                    <div class="col-md-9">
                        <input class="form-control" name="genre_order" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['genre_order'];?>
">
                    </div>
                </div>

                <div class="form-group form-row">
                    <label class="col-md-3 form-control-label">
                        <?php echo __("Description");?>

                    </label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="genre_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['genre_description'];?>
</textarea>
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
                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
            </div>
        </form>

    <?php }?>
</div><?php }
}
