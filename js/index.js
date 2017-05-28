/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// register modal component


var site = null, page = null, post = null, thumbnail = null, sidebar = null, slider = null;
$(document).ready(function () {
    $.getJSON("port/picker.php", function (data) {
//console.log(data.page[1].content);
        window.site = data.site;
        window.page = data.page;
        window.post = data.post;
        window.thumbnail = data.thumbnail;
        window.sidebar = data.sidebar;
        window.slider = data.slider;
        var sidebar = new Vue({
            el: '#sidebar',
            data: {
                widgets: window.sidebar
            }
        });
        var thumbnail = new Vue({
            el: 'thumbnail',
            data: {
                thumbnails: window.thumbnail
            }
        });
        var slider = new Vue({
            el: '#slider',
            data: {
                slider: window.slider
            }
        });
        var page = new Vue({
            el: '#page',
            data: {
                pages: window.page
            }
        });
//        var blog = new Vue({
//            el: 'blog',
//            data: {
//                posts: window.post
//            }
//        });

        $('.site-logo').attr("src", window.site.logo);
        $('.sidebar-ad').html('<img src="'+window.site.adsidebar+'" class="img-responsive" alt="" />');
        $('title').html(window.site.title);
        $('#slider').unslider({autoplay: true});
    });

    var container = $('.grid');
    
        container.imagesLoaded(function () {
        container.masonry({
            columnWidth: '.col-md-6',
            itemSelector: '.col-md-6'
        });
    });


});


