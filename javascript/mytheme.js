
    $(document).ready(function(){
        $("#based_color").click(function(){
          $("nav").css({"background-color":"rgba(57,179,230,25)"});
        });
        $("#default_color").click(function(){
            $("nav").css({"background-color":"transparent"});
          });    
      });

      

      (function($){

        var interval = "3500";

        var autoplay = false;

        var slideHeight = "700";

        var thumbnails = true;

        var pagination = true;

        var json = ["false","false","true","false"];

        var imagePath = '..\moodle\theme\enlightlite_modified\images\10393398_ml.jpg';

        var loaderBgColor = "red";

        var loaderStatus = "bar";

        var navigation = true;



         $e = jQuery.noConflict(true);





        $(document).ready(function(){



            var wi = $(window).width();

            if (slideHeight >= wi || slideHeight == "") {

                slideHeight = '550';

            }

            var val = ( parseInt(slideHeight) / parseInt(wi) ) * parseInt(100);

            heightval = val + '%';



            $('#homepage-carousel').camera({

                height: heightval,

                pagination: pagination,

                thumbnails: thumbnails,

                time: interval,

                loaderColor: '#eeeeee',

                loaderBgColor: loaderBgColor, //'#222222',

                loaderOpacity: 0.6, // .8

                loader: loaderStatus,

                autoAdvance: autoplay,

                navigation: navigation,

                mobileAutoAdvance: true,

                mobileNavHover: false,

                imagePath: imagePath,

                overlayer: false,

                loaderOpacity:0.7,

                rows: 4,

                slicedCols: 7,

                slicedRows: 5,

                transPeriod: 1000,

                barPosition: 'top',

                easing: 'easeInOutExpo',

                onEndTransition: function() {

                   $this = $('.camera_target_content .cameracurrent');

                    animation();

                    $('.slide-text').show();

                },

                onLoaded: function() {



                    addOverlay();



                }

            });

            $("#homepage-carousel").cameraPause();

            $(window).on("load", function(){

                if (autoplay == true) {

                    $("#homepage-carousel").cameraResume();

                }

                if ($("#homepage-carousel").width() <= 800) {

                    $("#homepage-carousel").cameraResume();

                }

            });



            function animation() {

                $this = $('.camera_target_content .cameracurrent')

                $content = $this.find('.heading-content [data-animation ^= "animated"]');

                index = 0;

                if ($content != "undefined" && $content.length != ""){

                    $content.css({'opacity': 0});

                    $time = setInterval(function () {

                        $this = $content;

                        da = $content.eq(index);

                        ani = da.attr('data-animation');

                        da.addClass(ani);

                        da.css({'opacity': 1});

                        index++;

                        if (index == $this.length) {

                            clearInterval($time);

                        }

                        doAnimations(da);

                    }, 400);



                }

            }



            function doAnimations(elems) {

              var animEndEv = 'webkitAnimationEnd animationend';

              elems.each(function () {

                var $this = $(this),

                    $animationType = $this.data('animation');

                $this.addClass($animationType).one(animEndEv, function () {

                  $this.removeClass($animationType);

                });

              });

            }



            function addOverlay() {

                var json = ["false","false","true","false"];

                $.each(json, function(n, value) {

                    if (value == "true") {

                        cmr = $(".camera_target .cameraCont").find('.cameraSlide_'+n);

                        cmr.find('.camerarelative').addClass('content_overlayer');

                    }

                })

            }

        });

    })(jQuery);
