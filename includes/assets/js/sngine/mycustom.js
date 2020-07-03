var times = 2;
let prev = 2;
$(document).ready(function () {

    var i;
    var custom_values = [];
    var request = '';
    for (i = 0; i<=50 ; i++) {
        custom_values.push(i);
    }
    for (i = 55; i<=100 ; i+=5) {
        custom_values.push(i);
    }
    for (i = 110; i<=500 ; i+=10) {
        custom_values.push(i);
    }

    // run ajax when scroll down

    function getPosition(element) {
        var yPosition = 0;
        while(element) {
            yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
            element = element.offsetParent;
        }
        return yPosition;
    }

    $(window).scroll(function () {
        if($(window).scrollTop() + $(window).height() > $(document).height() - $(window).height() && $('.wine-list') ) {
            if( prev === times && $('.main-explore .spinner-grow')) {
                prev++;
                myfunction.get_wines(times);
            }
        }
    });

    // be careful! FROM and TO should be index of values array
    var my_from = custom_values.indexOf(7);
    var my_to = custom_values.indexOf(30);

    $("#price").ionRangeSlider({
        type: "double",
        grid: false,
        from: my_from,
        to: my_to,
        values: custom_values,
        hide_from_to: false,
        hide_min_max: true,
        prefix: "€",
        max_postfix: "+",
    });
    $("#price-type").ionRangeSlider({
        type: "double",
        grid: false,
        from: my_from,
        to: my_to,
        values: custom_values,
        hide_from_to: false,
        hide_min_max: true,
        prefix: "€",
        max_postfix: "+",
        onFinish: function (data) {
            get_data(1);
        },
    });
    $("#rating").ionRangeSlider({
        type: "double",
        grid: false,
        min: 1,
        max: 5,
        step: 0.5,
        hide_from_to: false,
        hide_min_max: true,
        to_fixed: true,
    });

    $(window).on('load', function(){
        // run test on initial page load
        checkSize();
        // run test on resize of the window
        $(window).resize(checkSize);
    });

    //Function to the css rule
    function checkSize(){
        if (window.matchMedia('(max-width: 1199px)').matches) {
            // js code for responsive drop-down-menu-item with swing effect
            $(document).on("click", '.navbar-collapse>ul>li>a', function() {
                var element = $(this).parent("li");
                if (element.hasClass("open")) {
                    element.removeClass("open");
                    element.find("li").removeClass("open");
                    $(this).parent().find('div.sub-menu').css('display', 'none');
                    element.find("ul").slideUp(500,"linear");
                }
                else {
                    element.addClass("open");
                    element.children("ul").slideDown();
                    $(this).parent().find('div.sub-menu').css('display', 'block');
                    element.siblings("li").children("ul").slideUp();
                    element.siblings("li").removeClass("open");
                    element.siblings("li").find("li").removeClass("open");
                    element.siblings("li").find("ul").slideUp();
                }
            });
        }
    }

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
        },
    });


    //js code for mobile menu
    $(".menu-toggle").on("click", function() {
        $(this).toggleClass("is-active");
    });

    //sort filter drop down javascript
    $('.filter-dropdown').on('click', function () {
        let status = $('.filter-menu').css('display');
        if(status === 'none') $('.filter-menu').css('display', 'flex');
        if(status === 'flex') $('.filter-menu').css('display', 'none');
    });
    //the drop down disappear when other part is clicked
    $(document).mouseup(function (e) {
        var container = $(".filter-menu");
        if(!container.is(e.target) &&
            container.has(e.target).length === 0) {
            container.css('display', 'none');
        }
    });

    // set or remove is-selected class when button is clicked
    $('.type-button').on('click', function () {
        $(this).toggleClass("is-selected");
        myfunction.get_wines(1);
    });
    $(document).on('click', '.rating-type', function (e) {
        if($(this).hasClass('is-selected')) {}
        else {
            $(this).toggleClass("is-selected");
            get_data(1);
        }
    });

    //make the selected list remove from selected lists when that is clicked
    $(document).on('click', '.selected-list-detail', function (e) {
        let context = $(this).attr('id').replace('list-', '').replace(/-/g, ' ');
        $('div.select-list div:contains("'+ context +'")').click();
    });

    //toogle function when select list's list is clicked
    $(document).on('click', '.select-list div', function (e) {
        if($(this).hasClass('is-selected')) $('#list-' + $(this).text().replace(/ /g , '-')).remove();
        else $('.selected-list').append('<div class="selected-list-detail" id="list-'+ $(this).text().replace(/ /g, '-') +'"><a>&times; '+ $(this).text() +'</a></div>');
        $(this).toggleClass("is-selected");
        myfunction.get_wines(1);
    });

    //show all and show less buttons in food pairings
    $(document).on('click', 'div.show-list', function (e) {
        var count_pair = 0;
        if($('.show-lists').css('display') === 'none') {
            $('.less-lists').css('display', 'none');
            $('.show-lists').css('display', 'block');
            $('.pairing-button').each(function () {
                if(count_pair >= 5){
                    $(this).css('display', 'none');
                }
                count_pair++;
            });
        }
        else {
            $('.show-lists').css('display', 'none');
            $('.less-lists').css('display', 'block');
            $('.pairing-button').each(function () {
                if(count_pair >= 5){
                    $(this).css('display', 'flex');
                }
                count_pair++;
            });
        }
    });

    //max letters in comments
    $(".add-review-textarea-part textarea").keyup(function(){
        $(".add-review-counter").text(512 - $(this).val().length);
    });

    //rating selection part javascript
    $('.rating-type').on('click', function () {
        $('.rating-type.is-selected').removeClass('is-selected');
        $(this).addClass('is-selected');
        myfunction.get_wines(1);
    });

    // clear filters button function
    $('.clear-lists').on('click', function () {
        var sort = $(this).attr('aria-label');
        $('.' + sort + '-button.is-selected').each(function () {
            $(this).click();
        });
    });

    //show wine button function in find more wines bar.
    $(document).on('click', '.btn-show-wine', function () {
        var wine_type = $('.select2-selection__rendered').text().replace(' Wine', '').toLowerCase();
        var from = $('.price-range .irs-from').text().replace('€', '');
        var to = $('.price-range .irs-to').text().replace('€', '');
        var rating = $('.rating-range .irs-from').text();
        window.location.href = site_path + '/explore/' + wine_type + '/' + from + '/' + to + '/' + rating;
    });


    // post ajax when sort filter drop down menu is clicked
    $('.filter-menu a').on('click', function () {
        let value = $(this).text();
        let id = $(this).attr('id');
        $('.filter-label').text(value);
        $('.filter-label').attr('aria-label', id);
        $('.filter-menu').css('display', 'none');
        myfunction.get_wines(1);
    });

    $('.wine-type select').select2();
    $('select.select-grapes').select2();
    $('.wine-rating-star').rateit({
        readonly: true,
        step: 0.1,
        value: 4.7,
        starWidth: "6px",
    });
    $('#rate-sort1').rateit({
        readonly: true,
        step: 0.1,
        value: 4.5,
        starWidth: "6px",
    });
    $('#rate-sort2').rateit({
        readonly: true,
        step: 0.1,
        value: 4.0,
        starWidth: "6px",
    });
    $('#rate-sort3').rateit({
        readonly: true,
        step: 0.1,
        value: 3.5,
        starWidth: "6px",
    });
    $('#rate-sort4').rateit({
        readonly: true,
        step: 0.1,
        value: 3.0,
        starWidth: "6px",
    });
    $('.modal-rating-add-onclick').starRating({
        initialRating: 0,
        minRating: 1,
        starShape: 'rounded',
        emptyColor: 'lightgray',
        hoverColor: '#f1a90d',
        activeColor: '#f1a90d',
        ratedColor: '#f1a90d',
        strokeWidth: 0,
        starSize: 50,
        useGradient: false,
        disableAfterRate: false,
        callback:function(currentRating){
            $('#rating-number').val(currentRating);
        },
    });
    $('.rating-add-onclick').starRating({
        initialRating: 0,
        minRating: 1,
        starShape: 'rounded',
        emptyColor: 'lightgray',
        hoverColor: '#f1a90d',
        activeColor: '#f1a90d',
        ratedColor: '#f1a90d',
        strokeWidth: 0,
        starSize: 35,
        useGradient: false,
        disableAfterRate: false,
        callback:function(currentRating){
            $('.rating-add-onclick').starRating('setRating', 0);
            $('.modal-rating-add-onclick').starRating('setRating', currentRating);
            $('#rating-number').val(currentRating);
            $('#add-rating').modal();
        },
    });

    //add rating and comment for wine.
    $(document).on('click', '.add-rating-comment', function(){
        var title = $('.add-review-modal-footer input[name="title"]').val();
        var text = $('.add-review-modal-footer textarea[name="text"]').text();
        var cover = $('.add-review-modal-footer input[name="cover"]').val();
        var category = $('.add-review-modal-footer select[name="category"]').val();
        var tags = $('.add-review-modal-footer input[name="tags"]').val();
        var wine_id = $('.add-review-modal-footer input[name="wine_id"]').val();
        var rating = $('.review-rating-add-star input[name="rating-number"]').val();
        console.log(title, text, cover, category, tags);
        console.log(rating);
        $.post(ajax_path+'posts/article.php?do=create', {'title': title, 'text': text, 'cover': cover, 'category': category, 'tags': tags}, function(response){
            if(!response['error']){
                var post_id = response['post_id'];
                var handle = 'post';
                var message = $('#wine-rating-comment').val();
                console.log(message);
                $.post(ajax_path + 'posts/comment.php', {'id': post_id, 'handle': handle, 'message': message});
                $.post(ajax_path + 'posts/rating.php', {'wine_id': wine_id, 'post_id': post_id, 'rating': rating, 'message': message}, function(result){
                    location.reload();
                });
            }
        });
    });
});
//get wines function
var myfunction = {
    get_wines: function get_data(time) {
        if(time === 1) { prev--; $('.wine-list').remove(); }
        if($('.main-no-showing')) $('.main-no-showing').remove();
        $('.main-explore .spinner-grow').remove();
        $('.search-result-part .main-explore').append('<div class="spinner-grow text-danger" role="status"> <span class="sr-only">Loading...</span> </div>');
        let data_filter;
        let type_sel = [];
        let style_sel = [];
        let grape_sel = [];
        let region_sel = [];
        let country_sel = [];
        let pairing_sel = [];
        let min, max, rating, arrange, title = '', subtitle = 'From';
        var i = 0;
        $('.type-button.is-selected').each(function () {
            type_sel[i] = $(this).text();
            i++;
        });
        if( i === 0 ) title += ' wines ';
        for(let j = 0;j < i;j++){
            if(j === 0) {
                if(i === 1) title += type_sel[j]+' wines ';
                else title += type_sel[j];
            }
            else if(j === i - 1) title += ' and ' + type_sel[j] + ' wines ';
            else title += ', ' + type_sel[j];
        }
        i = 0;
        $('.grape-button.is-selected').each(function () {
            grape_sel[i] = $(this).text();
            i++;
        });
        if( i !== 0 ) {
            if( i === 1) subtitle += ' ' + i + ' grape';
            else subtitle += ' ' + i + ' grapes';
        }
        i = 0;
        $('.region-button.is-selected').each(function () {
            region_sel[i] = $(this).text();
            i++;
        });
        if( i !== 0 ) {
            if( subtitle !== 'From'){
                if( i !== 1) subtitle += ', ' + i + ' regions';
                else subtitle += ', ' + i + ' region';
            }
            else {
                if( i !== 1) subtitle += ' ' + i + ' regions';
                else subtitle += ' ' + i + ' region';
            }
        }
        i = 0;
        $('.country-button.is-selected').each(function () {
            country_sel[i] = $(this).text();
            i++;
        });
        if( i !== 0 ) {
            if( subtitle !== 'From'){
                if( i !== 1) subtitle += ', ' + i + ' countries';
                else subtitle += ', ' + i + ' country';
            }
            else {
                if( i !== 1) subtitle += ' ' + i + ' countries';
                else subtitle += ' ' + i + ' country';
            }
        }
        i = 0;
        $('.style-button.is-selected').each(function () {
            style_sel[i] = $(this).text();
            i++;
        });
        if( i !== 0 ) {
            if( subtitle !== 'From'){
                if( i !== 1) subtitle += ', ' + i + ' styles';
                else subtitle += ', ' + i + ' style';
            }
            else {
                if( i !== 1) subtitle += ' ' + i + ' styles';
                else subtitle += ' ' + i + ' style';
            }
        }
        i = 0;
        $('.pairing-button.is-selected').each(function () {
            pairing_sel[i] = $(this).text();
            i++;
        });
        if( i !== 0 ) {
            if( subtitle !== 'From'){
                if( i !== 1) subtitle += ', ' + i + ' food pairings';
                else subtitle += ', ' + i + ' food pairing';
            }
            else {
                if( i !== 1) subtitle += ' ' + i + ' food pairings';
                else subtitle += ' ' + i + ' food pairing';
            }
        }
        min = $('.irs-from').text().replace('€', '');
        max = $('.irs-to').text().replace('€', '');
        rating = $('.rating-type.is-selected').find('input[name="rating"]').val();
        arrange = $('.filter-label').attr('aria-label');
        title += 'between €' + min + ' - €' + max + ' rated above ' + rating + ' stars';
        data_filter = {
            'type': type_sel,
            'grape': grape_sel,
            'region': region_sel,
            'country': country_sel,
            'style': style_sel,
            'pairing': pairing_sel,
            'min': min,
            'max': max,
            'rating': rating,
            'arrange': arrange,
            'title': title,
            'subtitle': subtitle,
            'number': 25,
            'time': time
        };
        $.post(ajax_path+"wine/get_wines.php", {
            'type': JSON.stringify(type_sel),
            'grape': JSON.stringify(grape_sel),
            'region': JSON.stringify(region_sel),
            'country': JSON.stringify(country_sel),
            'style': JSON.stringify(style_sel),
            'pairing': JSON.stringify(pairing_sel),
            'min': min,
            'max': max,
            'rating': rating,
            'arrange': arrange,
            'title': title,
            'subtitle': subtitle,
            'number': 25,
            'time': time
        }, function(wines) {
            let get_wines = JSON.parse(wines);
            let main_content;
            //set title and subtitle
            $('.search-result-title span').text(data_filter['title']);
            $('.selected-title h4').text('');
            if( data_filter['subtitle'] !== 'From') $('.selected-title h4').text(data_filter['subtitle']);
            $('.main-explore .spinner-grow').remove();
            var i = 0;
            if(get_wines.length === 0) {
                if(time === 1) {
                    main_content = '<div class="main-no-showing"><p>No wines made the cut</p><p>We salute your narrow taste but try changing the filters to broaden the search.</p></div>';
                    $('.search-result-part .main-explore').append(main_content);
                }
            }
            else {
                for( i = 0;i<get_wines.length;i++) {
                    main_content = '';
                    let name = get_wines[i]['name'], country = get_wines[i]['country'], region = get_wines[i]['region'], winery = get_wines[i]['winery'].replace('?', '');
                    if(get_wines[i]['name']) name = get_wines[i]['name'];
                    if(get_wines[i]['winery']) winery = get_wines[i]['winery'];
                    if(get_wines[i]['region']) region = get_wines[i]['region'];
                    if(get_wines[i]['country']) country = get_wines[i]['country'];
                    main_content += '<div class="wine-list">\n' +
                        '               <div class="col-lg-3 wine-list-image color-div">\n' +
                        '                   <a href="'+ site_path +'/detail/'+ get_wines[i]['Id_item'] +'">\n' +
                        '                       <img src="'+ get_wines[i]['image_URL'] +'"/>\n' +
                        '                   </a>\n' +
                        '               </div>\n' +
                        '               <div class="col-lg-9 wine-list-content">\n' +
                        '                   <div class="winery-title"><a href="'+ site_path +'/winery/'+ get_wines[i]['winery'] +'" class="link-region">'+ winery +'</a></div>\n' +
                        '                   <div class="wine-name black-letter">'+ name +'</div>\n' +
                        '                   <div class="region-title">';
                    if(get_wines[i]['region'] !== '' || get_wines[i]['country'] !== '') {
                        main_content += '       <img width="14px" height="14px" src="'+ site_path +'/content/themes/default/images/flag/'+ get_wines[i]['country'] +'-flag-round-xs.png">\n' +
                            '                   <p><a href="'+ site_path +'/country/'+ get_wines[i]['country'] +'" class="link-region">'+ country +'</a></p>\n' +
                            '                   <p>·</p>\n' +
                            '                   <p><a href="'+ site_path +'/region/'+ get_wines[i]['region'] +'" class="link-region">'+ region+'</a></p>';
                    }
                    main_content += '       </div>\n' +
                        '                   <div class="wine-price">';
                    if(get_wines[i]['price']) {
                        main_content += '       <h5>€'+ get_wines[i]['price'] +'</h5>';
                    }
                    main_content += '       </div>\n' +
                        '                   <div class="wine-rating">';
                    if(get_wines[i]['rating']) {
                        main_content += '       <div><h1 class="black-letter">'+ get_wines[i]['rating'] +'</h1></div>\n' +
                            '                   <div>\n' +
                            '                       <div id="wine-rating-star'+ get_wines[i]['Id_item'] +'"></div>\n' +
                            '                       <script>\n' +
                            '                           $("#wine-rating-star'+ get_wines[i]['Id_item'] +'").rateit({\n' +
                            '                               readonly: true,\n' +
                            '                               step: 0.1,\n' +
                            '                               value: '+ get_wines[i]['rating'] +',\n' +
                            '                           });\n' +
                            '                       </script>\n' +
                            '                       <div class="wine-rating-nums">74 ratings</div>\n' +
                            '                   </div>';
                    }
                    main_content +='        </div>\n' +
                        '               </div>\n' +
                        '           </div>';
                    $('.search-result-part .main-explore').append(main_content);
                }
                if( i === 25 ) {
                    $('.search-result-part .main-explore').append('<div class="spinner-grow text-danger" role="status"> <span class="sr-only">Loading...</span> </div>');
                    times++;
                }
                if(time === 1) { times = 2; prev = 2; }
            }
        });
    },
    //set filter data function for posting data.
    set_filter: function set_filter_data(){
    let data_filter;
    let type_sel = [];
    let style_sel = [];
    let grape_sel = [];
    let region_sel = [];
    let country_sel = [];
    let pairing_sel = [];
    let min, max, rating, arrange, title = '', subtitle = 'From';
    var i = 0;
    $('.type-button.is-selected').each(function () {
        type_sel[i] = $(this).text();
        i++;
    });
    if( i === 0 ) title += ' wines ';
    for(let j = 0;j < i;j++){
        if(j === 0) {
            if(i === 1) title += type_sel[j]+' wines ';
            else title += type_sel[j];
        }
        else if(j === i - 1) title += ' and ' + type_sel[j] + ' wines ';
        else title += ', ' + type_sel[j];
    }
    i = 0;
    $('.grape-button.is-selected').each(function () {
        grape_sel[i] = $(this).text();
        i++;
    });
    if( i !== 0 ) {
        if( i === 1) subtitle += ' ' + i + ' grape';
        else subtitle += ' ' + i + ' grapes';
    }
    i = 0;
    $('.region-button.is-selected').each(function () {
        region_sel[i] = $(this).text();
        i++;
    });
    if( i !== 0 ) {
        if( subtitle !== 'From'){
            if( i !== 1) subtitle += ', ' + i + ' regions';
            else subtitle += ', ' + i + ' region';
        }
        else {
            if( i !== 1) subtitle += ' ' + i + ' regions';
            else subtitle += ' ' + i + ' region';
        }
    }
    i = 0;
    $('.country-button.is-selected').each(function () {
        country_sel[i] = $(this).text();
        i++;
    });
    if( i !== 0 ) {
        if( subtitle !== 'From'){
            if( i !== 1) subtitle += ', ' + i + ' countries';
            else subtitle += ', ' + i + ' country';
        }
        else {
            if( i !== 1) subtitle += ' ' + i + ' countries';
            else subtitle += ' ' + i + ' country';
        }
    }
    i = 0;
    $('.style-button.is-selected').each(function () {
        style_sel[i] = $(this).text();
        i++;
    });
    if( i !== 0 ) {
        if( subtitle !== 'From'){
            if( i !== 1) subtitle += ', ' + i + ' styles';
            else subtitle += ', ' + i + ' style';
        }
        else {
            if( i !== 1) subtitle += ' ' + i + ' styles';
            else subtitle += ' ' + i + ' style';
        }
    }
    i = 0;
    $('.pairing-button.is-selected').each(function () {
        pairing_sel[i] = $(this).text();
        i++;
    });
    if( i !== 0 ) {
        if( subtitle !== 'From'){
            if( i !== 1) subtitle += ', ' + i + ' food pairings';
            else subtitle += ', ' + i + ' food pairing';
        }
        else {
            if( i !== 1) subtitle += ' ' + i + ' food pairings';
            else subtitle += ' ' + i + ' food pairing';
        }
    }
    min = $('.irs-from').text().replace('€', '');
    max = $('.irs-to').text().replace('€', '');
    rating = $('.rating-type.is-selected').find('input[name="rating"]').val();
    arrange = $('.filter-label').attr('aria-label');
    title += 'between €' + min + ' - €' + max + ' rated above ' + rating + ' stars';
    data_filter = {
        'type': type_sel,
        'grape': grape_sel,
        'region': region_sel,
        'country': country_sel,
        'style': style_sel,
        'pairing': pairing_sel,
        'min': min,
        'max': max,
        'rating': rating,
        'arrange': arrange,
        'title': title,
        'subtitle': subtitle
    };
    console.log(type_sel);
    return data_filter;
}
};


//color background in images wines.
$(document).ready(function(){

  var colors = ['#DCD7C0','#BCBCB0','#F7F3F0','#CEB7B7','#D8D9D3','#DECCC3'];

  $('.color-div').each(function(){
    var new_color = colors[Math.floor(Math.random()*colors.length)];
    $(this).css('background-color',new_color);
  });

});
