function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    var cate;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b = '', s, checked, i, j, val = this.value;
        var default_grape = ['Cabernet Franc', 'Cabernet Sauvignon', 'Chardonnay', 'Grenache', 'Malbec', 'Merlot', 'Pinot Noir', 'Riesling', 'Sauvignon Blanc', 'Shiraz/Syrah'];
        var default_region = ['Bordeaux', 'Bourgogne', 'Napa Valley', 'Piemonte', 'Rhone Valley', 'Toscana'];
        var default_country = ['Argentina', 'Australia', 'Austria', 'Chile', 'France', 'Germany', 'Italy', 'Portugal', 'Spain', 'United States'];
        var default_style = ['Argentinian Malbec', 'Californian Cabernet Sauvignon', 'Central Italy Red', 'Spanish Red', 'Spanish Rioja Red'];
        var default_pairing = ['Poultry', 'Rich fish (salmon, tuna etc)', 'Spicy food', 'Sweet desserts', 'Veal'];
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        currentFocus = -1;
        var category = this.id.replace('-input', '');
        cate = category;
        if(category === 'pairing') $('.show-list').css('display', 'none');
        /*set default selections for 5 types*/
        s = document.getElementsByClassName(category + '-button is-selected');
        switch (category) {
            case 'grape':
                a = document.getElementsByClassName("select-list")[0];
                if (!val) {
                    for(i=0;i<10;i++){
                        checked = 0;
                        for(j=0;j<s.length;j++) {
                            if(s[j].innerText === default_grape[i]) checked = 1;
                        }
                        if( checked ) continue;
                        b = document.createElement("DIV");
                        b.setAttribute("class", category + "-button");
                        b.innerHTML += default_grape[i];
                        a.appendChild(b);
                    }
                    return false;
                }
                break;
            case 'region':
                a = document.getElementsByClassName("select-list")[1];
                if (!val) {
                    for(i=0;i<6;i++){
                        checked = 0;
                        for(j=0;j<s.length;j++) {
                            if(s[j].innerText === default_region[i]) checked = 1;
                        }
                        if( checked ) continue;
                        b = document.createElement("DIV");
                        b.setAttribute("class", category + "-button");
                        b.innerHTML += default_region[i];
                        a.appendChild(b);
                    }
                    return false;
                }
                break;
            case 'country':
                a = document.getElementsByClassName("select-list")[2];
                if (!val) {
                    for(i=0;i<10;i++){
                        checked = 0;
                        for(j=0;j<s.length;j++) {
                            if(s[j].innerText === default_country[i]) checked = 1;
                        }
                        if( checked ) continue;
                        b = document.createElement("DIV");
                        b.setAttribute("class", category + "-button");
                        b.innerHTML += default_country[i];
                        a.appendChild(b);
                    }
                    return false;
                }
                break;
            case 'style':
                a = document.getElementsByClassName("select-list")[3];
                if (!val) {
                    for(i=0;i<5;i++){
                        checked = 0;
                        for(j=0;j<s.length;j++) {
                            if(s[j].innerText === default_style[i]) checked = 1;
                        }
                        if( checked ) continue;
                        b = document.createElement("DIV");
                        b.setAttribute("class", category + "-button");
                        b.innerHTML += default_style[i];
                        a.appendChild(b);
                    }
                    return false;
                }
                break;
            default:
                a = document.getElementsByClassName("select-list")[4];
                if (!val) {
                    for(i=0;i<23;i++){
                        checked = 0;
                        for(j=0;j<s.length;j++) {
                            if(s[j].innerText === pairings[i]) checked = 1;
                        }
                        if( checked ) continue;
                        b = document.createElement("DIV");
                        b.setAttribute("class", category + "-button");
                        b.innerHTML += pairings[i];
                        a.appendChild(b);
                        $('.less-lists').css('display', 'block');
                    }
                    return false;
                }
                break;
        }
        /*for each item in the array...*/
        var count = 0;
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].toUpperCase().includes(val.toUpperCase())) {
                checked = 0;
                if(count>=10) break;
                count++;
                for(j=0;j<s.length;j++) {
                    if(s[j].innerText === arr[i]) checked = 1;
                }
                if( checked ) continue;
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                b.setAttribute("class", category + "-button");
                b.innerHTML += arr[i];
                a.appendChild(b);
            }
        }
    });
    function closeAllLists() {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = $("."+ cate +"-button");
        for (var i = 0; i < x.length; i++) {
            if(x[i].className === cate + '-button is-selected') continue;
            x[i].remove();
        }
    }
    /*execute a function when someone clicks in the document:*/
    // document.addEventListener("click", function (e) {
    //     closeAllLists();
    // });
}


/*An array containing all the country names in the world:*/
var grapes = [];
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bosnia & Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Costa Rica","Cote D Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Greenland","Grenada","Guatemala","Guinea","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","New Zealand","Nicaragua","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vatican City","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"];
var regions = [];
var styles = [];
var pairings = ['Poultry', 'Any junk food will do', 'Aperitif', 'Appetizers and snacks', 'Beef', 'Blue cheese', 'Cured Meat', 'Fruity desserts', 'Game (deer, venison)', 'Goat cheese', 'Lamb', 'Lean fish', 'Mature and hard cheese', 'Mild and soft cheese', 'Mushrooms', 'Pasta', 'Pork', 'Rich fish (salmon, tuna etc)', 'Shellfish', 'Spicy food', 'Sweet desserts', 'Veal', 'Vegetarian'];

autocomplete(document.getElementById("grape-input"), grapes);
autocomplete(document.getElementById("region-input"), regions);
autocomplete(document.getElementById("country-input"), countries);
autocomplete(document.getElementById("style-input"), styles);
autocomplete(document.getElementById("pairing-input"), pairings);