<div class="modal-header">
    <h6 class="modal-title">
        <i class="fa fa-share mr5"></i>{__("Share")}
    </h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="js_ajax-forms " data-url="posts/article.php?do=create">
    <div class="modal-body">
        {if $system['social_share_enabled']}
            <div class="post-social-share">
                <a href="http://www.facebook.com/sharer.php?u={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://vk.com/share.php?url={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                    <i class="fab fa-vk"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://reddit.com/submit?url={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                    <i class="fab fa-reddit"></i>
                </a>
                <a href="https://pinterest.com/pin/create/button/?url={$system['system_url']}/detail/{$wine['Id_item']}" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        {/if}

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                {__("Name")}
            </label>
            <div class="col-md-10">
                <input class="form-control" name="title" value="{$wine['name']}" readonly>
            </div>
        </div>

        <div class="form-group form-row" style="display: none;">
            <label class="col-md-2 form-control-label">
                {__("Content")}
            </label>
            <div class="col-md-10">
                <textarea name="text" class="form-control js_wysiwyg">&lt;p&gt;&lt;a title=&quot;sssssssdf&quot; href=&quot;{$system['system_url']}/detail/{$wine['Id_item']}&quot;&gt;{$wine['name']}&lt;/a&gt;&lt;/p&gt;</textarea>
            </div>
        </div>

        <div class="form-group form-row" style="display: none;">
            <label class="col-md-2 form-control-label">
                {__("Cover")}
            </label>
            <div class="col-md-10">
                <div class="x-image">
                    <input type="hidden" class="js_x-image-input" name="cover" value="{$wine['image_URL']}">
                </div>
            </div>
        </div>

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                {__("Category")}
            </label>
            <div class="col-md-10">
                <select class="form-control" name="category" readonly="">
                    <option value="23" selected>Wine</option>
                </select>
            </div>
        </div>

        <div class="form-group form-row">
            <label class="col-md-2 form-control-label">
                {__("Winery")}
            </label>
            <div class="col-md-10">
                <input class="form-control" name="tags" value="{$wine['winery']}" readonly>
            </div>
        </div>

        <!-- error -->
        <div class="alert alert-danger mb0 x-hidden"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">{__("Share")}</button>
    </div>
</form>

<script type="text/javascript">
    /* share post */
    $('input[type=radio][name=share_to]').on('change', function() {
        switch ($(this).val()) {
            case 'timeline':
                $('#js_share-to-page').hide();
                $('#js_share-to-group').hide();
                break;
            case 'page':
                $('#js_share-to-page').fadeIn();
                $('#js_share-to-group').hide();
                break;
            case 'group':
                $('#js_share-to-page').hide();
                $('#js_share-to-group').fadeIn();
                break;
        }
    });
</script>