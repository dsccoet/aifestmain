(function($) {
    "use strict";

    // Windows load

    $(window).on("load", function() {

        // Site loader 

        $(".loader-inner").fadeOut();
        $(".loader").delay(200).fadeOut("slow");

    });


    // Scroll to

    $('a.scroll').smoothScroll({
        speed: 800,
        offset: -50
    });


    // Slider

    $('.slider').flexslider({
        animation: "fade",
        slideshow: true,
        directionNav: true,
        controlNav: false,
        pauseOnAction: false,
        animationSpeed: 500
    });


    $('.review-slider').flexslider({
        animation: "fade",
        slideshow: true,
        directionNav: false,
        controlNav: true,
        pauseOnAction: false,
        animationSpeed: 1000
    });



    // Mobile menu

    var mobileBtn = $('.mobile-but');
    var nav = $('.main-nav ul');
    var navHeight = nav.height();

    $(mobileBtn).on("click", function() {
        $(".toggle-mobile-but").toggleClass("active");
        nav.slideToggle();
        $('.main-nav li a').addClass('mobile');
        return false;


    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 320 && nav.is(':hidden')) {
            nav.removeAttr('style');
            $('.main-nav li a').removeClass('mobile');
        }

    });

    $('.main-nav li a').on("click", function() {
        if ($(this).hasClass('mobile')) {
            nav.slideToggle();
            $(".toggle-mobile-but").toggleClass("active");
        }

    });



    // Append images as css background

    $('.background-img').each(function() {
        var path = $(this).children('img').attr('src');
        $(this).css('background-image', 'url("' + path + '")').css('background-position', 'initial');
    });




    // Count down setup

    $('.countdown').countdown('2019/3/20', function(event) {
        $(this).html(event.strftime('%D days %H:%M:%S'));
    });


   //for the regsiter button countdown
    // Set the date we're counting down to
    var countDownDate = new Date("Mar 23, 2019 8:00:00").getTime();
   

    function change_date(){
        var replace = document.getElementById("time_change").value;
        document.getElementById("show_me").innerHTML = replace;
        var temp = countDownDate;
        var countDownDate = new Date(replace).getTime();
        if(countDownDate == temp){
            alert('fail');
        }
        else{
            alert('success');
        }
    }

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
        document.getElementById("show").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        var elem_1 =  document.getElementById('show');
        elem_1.parentNode.removeChild(elem_1);
        document.getElementById("show_2").innerHTML = "Registration link is closed";
        var elem = document.getElementById('clear');
        var elem_2 = document.getElementById('note');
        elem.parentNode.removeChild(elem);
        elem_2.parentNode.removeChild(elem_2);

      }

      
    }, 1000);



    // Tabbed content 

    $(".block-tabs li").on("click", function() {
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum + 1;
            $(".block-tabs li.active").removeClass("active");
            $(this).addClass("active");
            $(".block-tab li.active").removeClass("active");
            $(".block-tab li:nth-child(" + nthChild + ")").addClass("active");
        }
    });


    // Zoom	effect

    $('.block-gallery li').on("mouseenter", function() {
        $(this).closest('.gallery').find('.block-gallery li').removeClass('active');
        $(this).addClass('active');
    });



    $('.block-ticket').on("mouseenter", function() {
        $(this).closest('.tickets').find('.block-ticket').removeClass('active');
        $(this).addClass('active');
    });




    // Images zoom 

    $('.venobox').venobox({
        titleattr: 'data-title',
        numeratio: true
    });



    // Instagram feed setup

    var instaFeed = new Instafeed({
        get: 'user',
        userId: '305801553',
        accessToken: '305801553.1677ed0.3d872300c10c4ff687868875ee8abc5d',
        limit: 6,
        template: '<li class="col-sm-4"><a href="{{link}}"><img src="{{image}}"/></a></li>'
    });
    instaFeed.run();


    // Form validation 

    var resgistryForm = $('.registry-form');
    resgistryForm.validate({
        validClass: 'valid',
        errorClass: 'error',
        errorPlacement: function(error, element) {
            return true;
        },
        onfocusout: function(element, event) {
            $(element).valid();
        },
        rules: {
            email: {
                required: true,
                email: true
            }
        },

        rules: {
            name: {
                required: true,
                minlength: 3
            }
        }


    });



})(jQuery);


// Map setup 

function initializeMap() {



    var styles = [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#212121"
                }]
            },
            {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#212121"
                }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#bdbdbd"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#181818"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#1b1b1b"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#2c2c2c"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#8a8a8a"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#373737"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#3c3c3c"
                }]
            },
            {
                "featureType": "road.highway.controlled_access",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#4e4e4e"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#000000"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#3d3d3d"
                }]
            }
        ],

        lat = 39.148352,
        lng = -84.443999,




        customMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        }),


        mapOptions = {
            zoom: 14,
            scrollwheel: false,
            disableDefaultUI: true,
            draggable: true,
            center: new google.maps.LatLng(lat, lng),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP]
            }
        },
        map = new google.maps.Map(document.getElementById('map'), mapOptions),
        myLatlng = new google.maps.LatLng(lat, lng),




        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: {
                url: 'img/marker.png',
                scaledSize: new google.maps.Size(80, 80)
            }
        });




    map.mapTypes.set('map_style', customMap);
    map.setMapTypeId('map_style');



    var transitLayer = new google.maps.TransitLayer();
    transitLayer.setMap(map);



}
