{include file='_head.tpl'}
{include file='_header.tpl'}

<!-- page content -->
{include file='_wine_topmenu.tpl'}

<section class="container mt20 offcanvas" >
    <div class="container detail-wine">
        <div class="row">
            <div class="col-lg-9 detail-wine-description">
                <div class="col-lg-4 col-md-4 col-sm-4 detail-image">
                    <img src="{$details['image_URL']}"/>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="detail-winery black-letter"><p>{$details['winery']}</p></div>
                    <div class="detail-name black-letter"><h3>{$details['name']}</h3></div>
                    {if $details['region'] && $details['country']}
                    <div class="detail-region">
                        <img width="20px" height="20px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$details['country']}-flag-round-xs.png">
                        <p class="detail-type black-letter">White wine</p>
                        <p>&nbsp;from</p>
                        <p class="detail-wine-region black-letter"><a>&nbsp;{$details['region']}</a></p>
                        <p>·</p>
                        <p class="detail-country black-letter"><a>{$details['country']}</a></p>
                    </div>
                    {/if}
                    {if $details['rating']}
                    <div class="detail-rating">
                        <div class="detail-rating-num black-letter">{$details['rating']}</div>
                        <div class="detail-rating-star" id="detail-rating-star{$details['Id_item']}" aria-valuetext="{$details['rating']}"></div>
                        <script>
                            var rating = $('#detail-rating-star{$details["Id_item"]}').attr('aria-valuetext');
                            $('#detail-rating-star{$details["Id_item"]}').rateit({
                                readonly: true,
                                step: 0.1,
                                value: rating,
                            });
                        </script>
                        <div class="detail-rating-count">2733 ratings</div>
                    </div>
                    {/if}
                    <div class="button-list">
                        <a class="btn-list btn-add-review" href="#review-section">
                            <i class="rbbb40-1 MxLSp sc-1kx5g6g-0 gyojlT" color="#FFFFFF" size="10"><svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" width="10" height="10" viewBox="0 0 20 20" aria-labelledby="icon-svg-title-StarEmpty icon-svg-desc-StarEmpty" role="img" class="rbbb40-0 fdFvgA"><linearGradient id="ckaf8znkc00wa3b6i6acbjj3j" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#FFFFFF"></stop><stop offset="100%" stop-color="#FFFFFF"></stop></linearGradient><title id="icon-svg-title-StarEmpty">Star Empty icon</title><desc id="icon-svg-desc-StarEmpty">It is an icon with title Star Empty</desc><title>star-empty</title><path d="M10 3.28l1.9 4.12 0.32 0.7 0.76 0.1 4.5 0.68-3.3 3.38-0.46 0.54 0.1 0.7 0.78 4.66-3.9-2.14-0.7-0.36-0.7 0.38-3.88 2.1 0.76-4.66 0.1-0.68-0.5-0.52-3.3-3.38 5.26-0.8 0.32-0.7 1.94-4.12zM6.76 6.8l-6.38 0.96c-0.22 0.040-0.38 0.22-0.38 0.44 0 0.12 0.040 0.24 0.12 0.32v0l4.64 4.76-1.1 6.66c0 0.020 0 0.040 0 0.080 0 0.24 0.2 0.44 0.44 0.44 0.1 0 0.16-0.020 0.24-0.060v0l5.7-3.12 5.68 3.12c0.060 0.040 0.14 0.060 0.22 0.060 0.24 0 0.44-0.2 0.44-0.44 0-0.040 0-0.060 0-0.080v0l-1.1-6.66 4.64-4.76c0.080-0.080 0.12-0.2 0.12-0.32 0-0.22-0.16-0.4-0.36-0.44h-0.020l-6.38-0.96-2.96-6.18c-0.060-0.12-0.18-0.2-0.32-0.2s-0.26 0.080-0.32 0.2v0z" fill="url(#ckaf8znkc00wa3b6i6acbjj3j)"></path></svg></i>
                            <p>Add Review</p>
                        </a>
                        {if $winery['Lat'] && $winery['Lon']}
                        <a href="https://www.google.com/maps/dir/?api=1{if $user->_logged_in && $user->_data['user_latitude'] && $user->_data['user_longitude']}&orgin={$user->_data['user_latitude']},{$user->_data['user_longitude']}{/if}&destination={$winery['Lat']},{$winery['Lon']}" target="_blank" class="btn-list btn-direction">
                            <i class="rbbb40-1 MxLSp" size="16" color="#ED5A6B"><svg xmlns="http://www.w3.org/2000/svg" fill="#ED5A6B" width="16" height="16" viewBox="0 0 20 20" aria-labelledby="icon-svg-title-DirectionLine icon-svg-desc-DirectionLine" role="img" class="rbbb40-0 kaLXAT"><linearGradient id="ckafbh67y00y83b6i4aivtdi6" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#ED5A6B"></stop><stop offset="100%" stop-color="#ED5A6B"></stop></linearGradient><title id="icon-svg-title-DirectionLine">Direction Line icon</title><desc id="icon-svg-desc-DirectionLine">It is an icon with title Direction Line</desc><title>direction-line</title><path d="M19.2 8.44l-7.22-7.22c-0.52-0.48-1.2-0.8-1.98-0.8s-1.46 0.32-1.98 0.8v0l-7.2 7.22c-0.52 0.5-0.82 1.2-0.82 1.98s0.3 1.46 0.82 1.98l7.2 7.2c0.5 0.52 1.2 0.82 1.98 0.82s1.48-0.3 1.98-0.82l7.22-7.2c0.5-0.52 0.8-1.22 0.8-1.98s-0.3-1.48-0.8-1.98v0zM18.16 11.38l-7.2 7.2c-0.24 0.24-0.58 0.38-0.94 0.38s-0.72-0.14-0.96-0.38v0l-7.22-7.2c-0.24-0.24-0.4-0.58-0.4-0.96s0.16-0.7 0.4-0.94v0l7.2-7.22c0.24-0.24 0.58-0.4 0.96-0.4s0.7 0.16 0.94 0.4l7.2 7.2c0.24 0.24 0.4 0.58 0.4 0.94s-0.16 0.72-0.4 0.96v0zM12.2 6.96c-0.040-0.040-0.080-0.060-0.12-0.060-0.1 0-0.18 0.080-0.18 0.18 0 0 0 0 0 0v0 1.66h-3.56c-1.18 0-2.14 0.96-2.14 2.16v0 2.38c0 0.26 0.2 0.46 0.46 0.46v0h0.48c0.26 0 0.48-0.2 0.48-0.46v0-2.38c0-0.4 0.32-0.72 0.72-0.72h3.56v1.66c0 0 0 0 0 0 0 0.1 0.080 0.18 0.18 0.18 0.040 0 0.080-0.020 0.12-0.060v0l2.34-2.32c0.040-0.040 0.080-0.1 0.080-0.18s-0.040-0.12-0.080-0.16v0z" fill="url(#ckafbh67y00y83b6i4aivtdi6)"></path></svg></i>
                            <p>Direction</p>
                        </a>
                        {/if}
                        <a class="btn-list btn-bookmark">
                            <i class="rbbb40-1 MxLSp" size="16" color="#F57082"><svg xmlns="http://www.w3.org/2000/svg" fill="#F57082" width="16" height="16" viewBox="0 0 20 20" aria-labelledby="icon-svg-title-BookmarkAdd icon-svg-desc-BookmarkAdd" role="img" class="rbbb40-0 kaLXAT"><linearGradient id="ckafbhvn600yz3b6i28bzbu3x" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#F57082"></stop><stop offset="100%" stop-color="#F57082"></stop></linearGradient><title id="icon-svg-title-BookmarkAdd">Bookmark Add icon</title><desc id="icon-svg-desc-BookmarkAdd">It is an icon with title Bookmark Add</desc><title>bookmark-add</title><path d="M12.38 7.8h-1.66v-1.68c0-0.26-0.22-0.46-0.48-0.46v0h-0.48c-0.26 0-0.48 0.2-0.48 0.46v0 1.68h-1.66c-0.26 0-0.48 0.2-0.48 0.48v0 0.46c0 0.28 0.22 0.48 0.48 0.48v0h1.66v1.68c0 0.26 0.22 0.46 0.48 0.46v0h0.48c0.26 0 0.48-0.2 0.48-0.46v0-1.68h1.66c0.26 0 0.48-0.2 0.48-0.48v0-0.46c0-0.28-0.22-0.48-0.48-0.48v0zM15.020 0.9h-10.020c-1.060 0-1.92 0.84-1.92 1.9v0 16.42c0 0.28 0.16 0.5 0.36 0.62v0c0.12 0.060 0.24 0.1 0.38 0.1s0.24-0.040 0.36-0.1v0l5.82-3.52 5.82 3.52c0.1 0.060 0.24 0.1 0.38 0.1v0c0 0 0 0 0 0 0.12 0 0.24-0.040 0.34-0.1v0c0.22-0.12 0.36-0.34 0.36-0.62v-16.46c-0.020-1.040-0.86-1.86-1.88-1.86v0zM15.48 17.96l-5.1-3.080c-0.12-0.060-0.24-0.1-0.38-0.1s-0.26 0.040-0.38 0.1v0l-5.1 3.080v-15.24c0.040-0.22 0.22-0.4 0.46-0.4 0 0 0 0 0.020 0v0h10.020c0 0 0 0 0 0 0.24 0 0.44 0.2 0.46 0.44v0z" fill="url(#ckafbhvn600yz3b6i28bzbu3x)"></path></svg></i>
                            <p>Bookmark</p>
                        </a>
                        <a class="btn-list btn-share action-btn" data-toggle="modal" data-url="posts/share.php?do=create&wine_id={$details['Id_item']}">
                            <i class="rbbb40-1 MxLSp" size="16" color="#F57082"><svg xmlns="http://www.w3.org/2000/svg" fill="#F57082" width="16" height="16" viewBox="0 0 20 20" aria-labelledby="icon-svg-title-Share icon-svg-desc-Share" role="img" class="rbbb40-0 kaLXAT"><linearGradient id="ckafbhvn600z03b6ikzclub00" x1="0" x2="100%" y1="0" y2="0"><stop offset="0" stop-color="#F57082"></stop><stop offset="100%" stop-color="#F57082"></stop></linearGradient><title id="icon-svg-title-Share">Share icon</title><desc id="icon-svg-desc-Share">It is an icon with title Share</desc><title>share</title><path d="M0.72 19.94c-0.020 0-0.060 0-0.080 0s-0.060 0-0.080 0v0c-0.32-0.080-0.56-0.36-0.56-0.7 0 0 0 0 0-0.020v0c0-10.1 6.32-12.92 9.52-13.28v-4.34c0 0 0 0 0 0 0-0.38 0.32-0.7 0.72-0.7 0.18 0 0.36 0.060 0.48 0.18v0l9.060 8.32c0.14 0.14 0.22 0.34 0.22 0.54v0c0 0.2-0.1 0.4-0.24 0.52v0l-9.040 8.12c-0.12 0.1-0.3 0.18-0.46 0.18-0.12 0-0.22-0.040-0.32-0.080h0.020c-0.26-0.1-0.44-0.36-0.44-0.64v-4.3c-3.66 0.22-6.74 2.48-8.12 5.66l-0.020 0.060c-0.1 0.28-0.36 0.48-0.66 0.48v0zM10.24 12.32c0.4 0 0.72 0.32 0.72 0.72v0 3.4l7.26-6.5-7.26-6.66v3.32c0 0.4-0.32 0.72-0.72 0.72v0c-2.18 0-7.48 1.7-8.58 9 2.060-2.46 5.14-4 8.56-4 0.020 0 0.020 0 0.020 0v0z" fill="url(#ckafbhvn600z03b6ikzclub00)"></path></svg></i>
                            <p>Share</p>
                        </a>
                    </div>
                </div>
            </div>
            {if $details['price']}
            <div class="col-lg-3 detail-wine-price">
                <div class="row">
                    <div class="detail-price black-letter"><h2>€{$details['price']}</h2></div>
                    <div>Price is per bottle</div>
                    {if $details['year']}
                    <div class="detail-year">Vintage: {$details['year']}</div>
                    {/if}
                </div>
            </div>
            {/if}
        </div>
    </div>
</section>
<section class="wine-summary-section">
    <div class="container bottom-border">
        <div class="row wine-summary">
            <div class="col-lg-3 black-letter"><h3>Summary</h3></div>
            <div class="col-lg-9 row">
                <div class="col-lg-6 summary-list">
                    <div class="summary-title black-letter">Winery</div>
                    <div class="summary-content"><a href="{$system['system_url']}/winery/{$details['winery']}">{$details['winery']}</a></div>
                </div>
                {if $details['grapes']}
                <div class="col-lg-6 summary-list">
                    <div class="summary-title black-letter">Grapes</div>
                    <div class="summary-content">{$details['grapes']|replace:';':','}</div>
                </div>
                {/if}
                {if $details['region']}
                <div class="col-lg-6 summary-list">
                    <div class="summary-title black-letter">Region</div>
                    <div class="summary-content"><a href="{$system['system_url']}/region/{$details['region']}">{$details['region']}</a></div>
                </div>
                {/if}
                {if $details['wine_style']}
                <div class="col-lg-6 summary-list">
                    <div class="summary-title black-letter">Wine style</div>
                    <div class="summary-content">{$details['wine_style']}</div>
                </div>
                {/if}
                {if $details['foodpairing']}
                    <div class="col-lg-6 summary-list">
                        <div class="summary-title black-letter">Food pairing</div>
                        <div class="summary-content">{$details['foodpairing']|replace:';':','}</div>
                    </div>
                {/if}
                {if $details['alcohol']}
                    <div class="col-lg-6 summary-list">
                        <div class="summary-title black-letter">Alcohol</div>
                        <div class="summary-content">{$details['alcohol']}</div>
                    </div>
                {/if}
                {if $details['allergy']}
                    <div class="col-lg-6 summary-list">
                        <div class="summary-title black-letter">Allergy</div>
                        <div class="summary-content">{$details['allergy']}</div>
                    </div>
                {/if}
                {if $details['wine_seo']}
                    <div class="col-lg-6 summary-list">
                        <div class="summary-title black-letter">Wine SEO</div>
                        <div class="summary-content">{$details['wine_seo']}</div>
                    </div>
                {/if}
                {if $details['winery_seo']}
                    <div class="col-lg-6 summary-list">
                        <div class="summary-title black-letter">Winery SEO</div>
                        <div class="summary-content">{$details['winery_seo']}</div>
                    </div>
                {/if}
            </div>
        </div>
    </div>
</section>
<section class="about-winery-section">
    <div class="container bottom-border">
        <div class="row about-winery">
            <div class="col-lg-12 about-winery-title black-letter">
                <h2>About {$winery['Name']}</h2>
            </div>
            <div class="col-lg-5 winery-detail">
                <div class="winery-count">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.24,5.1251a15.5088,15.5088,0,0,0-.87-2.0257.9563.9563,0,0,0-.8374-.5291L6.5787,2.5a.9554.9554,0,0,0-.8437.5183,15.4823,15.4823,0,0,0-.8943,2.0146" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M19.9378,15.755a21.3526,21.3526,0,0,0,.3743-3.8847,21.3013,21.3013,0,0,0-.351-4.0161" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M4.7154,18.3818a15.2409,15.2409,0,0,0,1.1277,2.5488.9565.9565,0,0,0,.8229.5017L17.2181,21.5a.9555.9555,0,0,0,.8289-.4911,15.2319,15.2319,0,0,0,1.1582-2.5341" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M4.0871,7.7524a21.6813,21.6813,0,0,0-.0716,7.9005" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M15.6026,5.1019c-.1085-.6368-.2325-1.2409-.37-1.8069a.9578.9578,0,0,0-.9168-.7453l-4.5191-.029a.9569.9569,0,0,0-.9257.7335c-.1448.5642-.276,1.1667-.3921,1.8021" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M15.9155,15.7292c.12-1.23.1888-2.5343.1969-3.8858.0084-1.3981-.0485-2.7465-.1614-4.0148" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M8.3758,18.4052c.1381.8323.3026,1.61.49,2.3213a.9562.9562,0,0,0,.9121.7257l4.3285.0278a.9551.9551,0,0,0,.9207-.7139c.1959-.7089.37-1.4845.5177-2.3149" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M8.0973,7.7782c-.1282,1.2668-.2013,2.6143-.21,4.0124-.0082,1.3515.0447,2.6567.15,3.888" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M19.2345,7.85,4.8137,7.7572A.971.971,0,0,1,3.8822,6.625l.1153-.7622a.9586.9586,0,0,1,.9433-.8292L19.14,5.1247a.96.96,0,0,1,.9332.8412L20.18,6.73A.97.97,0,0,1,19.2345,7.85Z" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path><path d="M19.06,18.4737,4.8606,18.3826a.96.96,0,0,1-.9332-.8412l-.1062-.7637a.97.97,0,0,1,.945-1.12l14.4209.0925a.971.971,0,0,1,.9315,1.1322l-.1153.7622A.9589.9589,0,0,1,19.06,18.4737Z" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd"></path></svg>
                    <p><span class="black-letter">72</span> wines on Winelov</p>
                </div>
                <div class="winery-rating-ave">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.2518,7.1207V1.3381A.6.6,0,0,0,9.6435.75H8.1065a.6.6,0,0,0-.6083.5881V7.1207" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.4982,7.1207a3.7663,3.7663,0,0,0-2.374,3.488V22.0841A1.1653,1.1653,0,0,0,6.2888,23.25h5.1725a1.1652,1.1652,0,0,0,1.1645-1.1659V10.6087a3.7663,3.7663,0,0,0-2.374-3.488" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.8974,8.1423V3.3234a.5.5,0,0,0-.5069-.49H15.11a.5.5,0,0,0-.5069.49V8.1423" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.6028,8.1423a3.1384,3.1384,0,0,0-1.9783,2.9067v9.5628a.9709.9709,0,0,0,.97.9715h4.31a.9709.9709,0,0,0,.97-.9715V11.049a3.1384,3.1384,0,0,0-1.9783-2.9067" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></path><line x1="7.4982" y1="2.7743" x2="10.2518" y2="2.7743" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></line><line x1="14.6028" y1="4.8334" x2="16.8974" y2="4.8334" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></line><rect x="7" y="11.4055" width="3.8744" height="5" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></rect><rect x="14.2084" y="12.0418" width="3.0834" height="4.9424" fill="none" stroke="#a8a5a3" stroke-linecap="round" stroke-linejoin="round"></rect></svg>
                    <p>Average wine rating is <span class="black-letter">4</span> - based on <span class="black-letter">20595</span> ratings</p>
                </div>
                {if $details['region'] && $details['country']}
                <div class="winery-country">
                    <img width="25px" height="25px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$details['country']}-flag-round-xs.png">
                    <p>Located in</p>
                    <p class="black-letter"><a href="{$system['system_url']}/region/{$details['region']}">&nbsp;{$details['region']}</a></p>
                    <p>·</p>
                    <p class="black-letter"><a href="{$system['system_url']}/country/{$details['country']}">{$details['country']}</a></p>
                </div>
                {/if}
            </div>
            <div class="col-lg-7 winery-map" id="winery-map" onload="" height="300px"></div>
        </div>
    </div>
</section>
<script>
    {*{if $winery['Lat']}{$winery['Lat']}{else}0{/if}, {if $winery['Lon']}{$winery['Lon']}{else}0{/if}*}
    function initMap() {
        var mapProp= {
            center:new google.maps.LatLng({if $winery['Lat']}{$winery['Lat']}{else}0{/if},{if $winery['Lon']}{$winery['Lon']}{else}0{/if}),
            zoom:5,
        };
        var upload_path = '{$system['system_uploads']}';
        var map = new google.maps.Map(document.getElementById("winery-map"),mapProp);
        var mapMark = {
            position: new google.maps.LatLng({if $winery['Lat'] && $winery['Lon']}{$winery['Lat']}, {$winery['Lon']}{else}0, 0{/if}),
            map: map,
            icon: upload_path + '/photos/2020/04/map_icon.png'
        };
        var marker = new google.maps.Marker(mapMark);
    }
</script>
{if $related_wines}
<section class="testimonial-section section-padding border-top related-wines">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                {foreach $related_wines as $wines}
                <div class="swiper-slide">
                    <a href="{$system['system_url']}/detail/{$wines['Id_item']}">
                        <div class="up-detail">
                            <div class="col-lg-5">
                                {if $wines['rating']}
                                <div class="rating-num"><h2>{$wines['rating']}</h2></div>
                                <div class="rating-detail" id="rating_de{$wines['Id_item']}" aria-label="{$wines['rating']}"></div>
                                <script>
                                    var rating = $('#rating_de{$wines['Id_item']}').attr('aria-label');
                                    $('#rating_de{$wines['Id_item']}').rateit({
                                        readonly: true,
                                        step: 0.1,
                                        value: rating,
                                    });
                                </script>
                                <div class="rating-count-num">630 ratings</div>
                                {/if}
                            </div>
                            <div class="col-lg-7">
                                <img class="wine-detail-image" src="{$wines['image_URL']}"/>
                            </div>
                        </div>
                        <div class="down-detail">
                            <p class="wine-detail-description">{$wines['winery']}</p>
                            <h4 class="wine-title">{$wines['name']}</h4>
                            {if $wines['region'] && $wines['country']}
                            <div class="wine-detail-region"><img width="14px" src="{$system['system_url']}/content/themes/{$system['theme']}/images/flag/{$wines['country']}-flag-round-xs.png"/>{$wines['region']} - {$wines['country']}</div>
                            {/if}
                        </div>
                    </a>
                </div>
                {/foreach}
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
    </div>
</section>
{/if}
<section class="review-section" id="review-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 review-section-title black-letter"><h2>Community Reviews</h2></div>
            <div class="review-tabs">
                <a class="review-tab-selected">Helpful</a>
                <a class="review-tab review-recent">Recent</a>
                <a class="review-tab review-friends">Friends</a>
                <a class="review-tab review-you">You</a>
            </div>
            <div class="col-lg-9 review-main-part">
                <div class="review-content">
                    <div class="review-card">
                        <div class="review-item">
                            <div class="review-user-detail">
                                <a href="" class="review-user-avatar">
                                    <div class="avatar-avatar">
                                        <div style="background-image: url('//images.vivino.com/avatars/default_user_50x50.png');"></div>
                                    </div>
                                </a>
                                <div class="review-user-desc">
                                    <div class="review-user-rating" aria-label="4.5"></div>
                                    <div class="review-user-name">
                                        <a href="">
                                            <p class="black-letter">Phil Baker</p>
                                        </a>
                                        <p>6 Apr 2020</p>
                                    </div>
                                </div>
                            </div>
                            <p class="review-user-content">Amazing, delicious wine, with the aroma of sweet apricots. Taste - a mixture of pear, peach, sprinkled with lemon juice. Great wine!</p>
                            <div class="review-action">
                                <a class="review-thumb-up">
                                    <div>
                                        <svg x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve" width="20px" height="20px" class="likeButton__liked--2RS1k likeButton__active--3QILm" style="display: none;"><path fill="#1e1e1e" d="M4.2,6.5H2C1.7,6.5,1.5,6.7,1.5,7v8.6c0,0.3,0.2,0.5,0.5,0.5h2.2c0.5,0,1-0.4,1-1V7.5C5.2,7,4.7,6.5,4.2,6.5z "></path><path fill="#1e1e1e" d="M18.5,8.4c0-1.5-1.3-1.9-2-1.9h-4.6c-0.1,0-0.3-0.1-0.4-0.2c0,0,0,0,0,0l1.7-3c0.2-0.5,0.2-1.7-1-2.5 c-1.3-0.8-2.4,0-2.8,0.5L5.7,6.6C5.6,6.6,5.6,6.7,5.6,6.8v6.5c0,0,0,0,0,0c0.1,2.4,3.5,3,3.7,3.1l6.4,0c0.7-0.1,1.9-0.6,1.9-2 c0-0.6-0.2-1-0.4-1.3c0.7-0.3,1.3-0.8,1.3-1.7c0-0.7-0.3-1.2-0.7-1.5C18.2,9.6,18.5,9.1,18.5,8.4z"></path></svg>
                                        <svg class="likeButton__unliked--25495 likeButton__active--3QILm" width="20px" height="20px" viewBox="0 0 20 20"><path fill="none" stroke="#1e1e1e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2,15.6h2.2c0.3,0,0.5-0.2,0.5-0.5V7.5C4.7,7.2,4.4,7,4.2,7H2"></path><path fill="none" stroke="#1e1e1e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6.1,6.8l3.7-5.3c0,0,0.9-1.2,2.1-0.4s0.8,1.9,0.8,1.9L11.1,6c0,0-0.2,0.4,0.1,0.6c0.3,0.2,0.7,0.3,0.7,0.3 h4.7c0,0,1.5,0.1,1.5,1.4s-1.3,1.6-1.3,1.6s1.3,0.1,1.3,1.4s-2.1,1.5-2.1,1.5s1.2,0.1,1.2,1.4s-1.5,1.5-1.5,1.5H9.3 c0,0-3.1-0.5-3.2-2.6"></path></svg>
                                    </div>
                                    <div class="review-like-count black-letter">4</div>
                                </a>
                                <a class="review-comment"  data-toggle="collapse" href="#review-comment1" role="button" aria-expanded="false" aria-controls="review-comment1">
                                    <div>
                                        <svg x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve" width="20px" height="20px"><path fill="none" stroke="#1e1e1e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M10,2c4.4,0,8,3.6,8,8c0,2.1-0.8,4-2.1,5.4L18,18l-4.4-0.9C12.5,17.7,11.3,18,10,18c-4.4,0-8-3.6-8-8 S5.6,2,10,2z"></path></svg>
                                    </div>
                                    <div class="review-comment-count black-letter">2</div>
                                </a>
                            </div>
                        </div>
                        <div class="review-comment-part collapse" id="review-comment1" >
                            <div class="review-divide"></div>
                            <div class="review-comment-section">
                                {include file='__feeds_post.comments.tpl'}
                            </div>
                        </div>
                    </div>
                    <a class="review-show-all" data-toggle="modal" data-target="#review-all">Show more reviews</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="review-all" tabindex="-1" role="dialog" aria-labelledby="review-all" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content review-all-modal-content">
                            <div class="modal-header review-all-modal-header">
                                <h5 class="modal-title review-all-modal-title" id="review-all-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body review-all-modal-body">

                            </div>
                            <div class="modal-footer review-all-modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="wine-rating detail-wine-rating">
                    <div><h1 class="black-letter">4.7</h1></div>
                    <div>
                        <div class="wine-rating-star" aria-label="4.7"></div>
                        <div class="wine-rating-nums">74 ratings</div>
                    </div>
                </div>
                <div class="review-rating-filter">
                    <div class="review-rating-filter-part">
                        <div data-testid="ratingFilter" class="review-rating-filter-container">
                            <div role="img" aria-label="Rated 5 stars" class="review-rating-filter-stars">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                            </div>
                            <div class="review-rating-filter-bar">
                                <div class="review-rating-filter-bar-inner" style="width: 19%;"></div>
                            </div>
                            <div class="review-rating-filter-count">35</div>
                        </div>
                        <div data-testid="ratingFilter" class="review-rating-filter-container">
                            <div role="img" aria-label="Rated 4 stars" class="review-rating-filter-stars">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                            </div>
                            <div class="review-rating-filter-bar">
                                <div class="review-rating-filter-bar-inner" style="width: 66%;"></div>
                            </div>
                            <div class="review-rating-filter-count">118</div>
                        </div>
                        <div data-testid="ratingFilter" class="review-rating-filter-container">
                            <div role="img" aria-label="Rated 3 stars" class="review-rating-filter-stars">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                            </div>
                            <div class="review-rating-filter-bar">
                                <div class="review-rating-filter-bar-inner" style="width: 13%;"></div>
                            </div><div class="review-rating-filter-count">24</div>
                        </div>
                        <div data-testid="ratingFilter" class="review-rating-filter-container">
                            <div role="img" aria-label="Rated 2 stars" class="review-rating-filter-stars">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                            </div>
                            <div class="review-rating-filter-bar">
                                <div class="review-rating-filter-bar-inner" style="width: 1%;"></div>
                            </div>
                            <div class="review-rating-filter-count">1</div>
                        </div>
                        <div data-testid="ratingFilter" class="review-rating-filter-container">
                            <div role="img" aria-label="Rated 1 stars" class="review-rating-filter-stars">
                                <img class="rating-icon" src="{$system['system_url']}/includes/assets/js/plugins/rateit/star-gold32.png" alt="User rated star FullStar" style="height: 16px; width: 16px;">
                            </div>
                            <div class="review-rating-filter-bar">
                                <div class="review-rating-filter-bar-inner" style="width: 1%;"></div>
                            </div>
                            <div class="review-rating-filter-count">2</div>
                        </div>
                    </div>
                </div>
                <div class="review-rating-divide"></div>
                <div class="review-rating-add-new">
                    {if $has_review}
                    <p class="review-rating-add-new-content">You already added the review for this wine.</p>
                    {else}
                    <p class="review-rating-add-new-content">Add your own rating and help other Winelov users pick the right wine!</p>
                    <div class="review-rating-add-star">
                        <div role="img" aria-label="user image" class="review-rating-add-avatar">
                            <span data-testid="sentinel"></span>
                            <div class="review-rating-add-avatar-avatar" style="background-image: url('{if $user->_data['user_picture']}{$user->_data['user_picture']}{else}//images.vivino.com/avatars/default_user_50x50.png'){/if}"></div>
                        </div>
                        <div class="rating-add-onclick" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add rating!"></div>
                    </div>
                    {/if}
                </div>
                <div class="review-rating-divide"></div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="add-rating" tabindex="-1" role="dialog" aria-labelledby="add-rating" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered add-review-modal-dialog" role="document">
                        <div class="modal-content add-review-modal-content">
                            <div class="modal-header add-review-modal-header">
                                <h3 class="modal-title black-letter" id="add-rating-title">Your review</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body add-review-modal-body">
                                <h5 class="add-review-modal-name">You're rating the {$details['winery']}&nbsp;{$details['name']}</h5>
                                <div class="review-rating-add-star">
                                    <div role="img" aria-label="user image" class="review-rating-add-avatar">
                                        <span data-testid="sentinel"></span>
                                        <div class="review-rating-add-avatar-avatar" style="background-image: url({$user->_data['user_picture']});"></div>
                                    </div>
                                    <a type="button">
                                        <div class="modal-rating-add-onclick"></div>
                                        <input title="rating-number" type="text" id="rating-number" name="rating-number" style="display: none;"/>
                                    </a>
                                </div>
                                <div class="add-review-textarea-part">
                                    <textarea name="message" placeholder="Say a few words about this wine" class="add-review-textarea" maxlength="512" id="wine-rating-comment"></textarea>
                                    <div class="add-review-counter">512</div>
                                </div>
                            </div>
                            <div class="modal-footer add-review-modal-footer">
                                <input name="title" value="{$details['name']}" hidden/>
                                <textarea name="text" style="display: none;">&lt;p&gt;&lt;a title=&quot;sssssssdf&quot; href=&quot;{$system['system_url']}/detail/{$details['Id_item']}&quot;&gt;{$details['name']}&lt;/a&gt;&lt;/p&gt;</textarea>
                                <input type="hidden" class="js_x-image-input" name="cover" value="{$details['image_URL']}" hidden>
                                <input name="wine_id" value="{$details['Id_item']}" hidden/>
                                <select class="form-control" name="category" style="display: none;">
                                    <option value="23" selected>Wine</option>
                                </select>
                                <input class="form-control" name="tags" value="{$details['winery']}" hidden>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary add-rating-comment">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRcUCMzgJ0gHoFv2D8A8DvtXj-gTLeFKQ&callback=initMap"></script>-->
{include file='_footer.tpl'}
