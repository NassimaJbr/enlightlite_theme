
var var1=getElementByClassName("info-block");
$(var1).click()






define(['jquery', 'theme_enlightlite_modified/slick'], function($, slick) {
    var enlightlite_modifiedFront = function() {
        this.frontPageAction();
        this.frontPageSliders();
    };


    enlightlite_modifiedFront.prototype.frontPageAction = function() {
        if ($('body').hasClass('dir-rtl') ) {
            rtl = true;
        } else {
            rtl = false;
        }
        if ($('body').hasClass('dir-rtl')) {
            $('.slidesContainer').css('float', 'left');
        }
        var prow = $(".course-slider").attr("data-crow");
        prow = parseInt(prow);
        if (prow < 2) {
            $("#available-courses .pagenav").hide();
        }
    };
   
      
    
    enlightlite_modifiedFront.prototype.frontPageSliders = function() {
        $(".course-slider").slick({
            arrows:true ,
            swipe:true,
            /*prevArrow:'#available-courses .pagenav .slick-prev',
            nextArrow: '#available-courses .pagenav .slick-next',*/
            rtl:rtl,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 991 ,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ],
        });
    };
    

    var availableClass = "frontpageblock-theme";
    var categoriesClass = "frontpageblock-theme";
    var mycourseClass = "frontpageblock-theme";

    $("#frontpage-available-course-list #available-courses").parents('div#frontpage-available-course-list').addClass('frontpage-available-course '+availableClass);
    $("#frontpage-course-list #mycourses").parents('div#frontpage-course-list').addClass('frontpage-mycourse-list');
    $(".frontpage-course-list-enrolled").parents('div#frontpage-course-list').addClass('frontpage-mycourse-list '+ mycourseClass);
    $("#frontpage-category-names").addClass(categoriesClass);

    if($('body').hasClass('dir-rtl')) {
        var rtl = true;
    } else {
        var rtl = false;
    }

    var autoplay = true;
    var pagination = true;


    var rtl = false;
    var ourteamAutoplay = true;
    var ourPartner_autoplay = false;
    /* var ourPartner_autotime = ;*/
    if (rtl == "") {
        if ($('body').hasClass('dir-rtl')) { rtl = true } else { rtl = false }
    }

    $(".course-slider").slick({

        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        rtl:rtl,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                   
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1, 
                    slidesToScroll: 1,                                               
                }
            }
        ],
        
    });

    var prow = $(".course-slider").attr("data-crow");
    

    prow = parseInt(prow);
    if(prow < 2)
    {
      $("#available-courses .pagenav").hide();
    }

    $(".mycourse-slider").slick({
        arrows:true,
        swipe:true,
       
       /* prevArrow:'#mycourses .pagenav .slick-prev',
        nextArrow: '#mycourses .pagenav .slick-next',*/
        rtl:rtl,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                     slidesToScroll: 2,                                               
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                     slidesToScroll: 1,                                                
                }
            }
        ],
    });

    var prow = $(".mycourse-slider").attr("data-crow");
    prow = parseInt(prow);
    if(prow < 2) {
        $("#mycourses .pagenav").hide();
    }

    $(".list_categories").slick({
        arrows:true ,
        swipe:true,
        infinite: false,
        slidesToShow:4,
        slidesToScroll:4,

        /*prevArrow:'#Listcategories .pagenav .slick-prev',
        nextArrow: '#Listcategories .pagenav .slick-next',*/
        rtl:rtl,
        responsive: [
             {
                breakpoint: 991,

                settings: {

                    slidesToShow: 3,
                    slidesToScroll:3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                   
                    slidesToShow: 2,
                    slidesToScroll:2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1,                                                
                }
            }
        ],
    });

    var prow = $(".list_categories").attr("data-crow");
    prow = parseInt(prow);
    if(prow < 2) {
        $("#Listcategories .pagenav").hide();
    }

    $(".popular_courses").slick({
        arrows:true ,
        swipe:true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll:4,
        /*prevArrow:'#Popular-Courses .pagenav .slick-prev',
        nextArrow: '#Popular-Courses .pagenav .slick-next',*/
        rtl:rtl,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                   
                    slidesToShow: 2,
                    slidesToScroll:2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1, 
                    slidesToScroll:1,                                               
                }
            }
        ],
    });

    var prow = $(".popular_courses").attr("data-crow");
    prow = parseInt(prow);
    if(prow < 2) {
        $("#Popular-Courses .pagenav").hide();
    }

    if (ourteamAutoplay == '') {
        ourteamAutoplay = "false";
    }
    $(".our_team_slider").slick({
        arrows:true ,
        swipe:true,
        infinite: false,
        slidesToShow : 4,
        slidesToScroll:2,
        /*prevArrow:'.our-team .pagenav .slick-prev',
        nextArrow:'.our-team .pagenav .slick-next',*/
        autoplay: ourteamAutoplay,
        rtl:rtl,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                   
                    slidesToShow: 2,
                    slidesToscroll:2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToscroll:1,                                               
                }
            }
        ],
    });


    $("#carouseltestimonials_slick").slick({
        //arrows:true,
        swipe:true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: pagination,
        prevArrow:false,
        nextArrow:false,
        speed:1000,
        autoplay: autoplay,
        rtl:rtl,
        adaptiveHeight: true
    });

    if(ourPartner_autoplay == ''){

        ourPartner_autoplay = "false";

    }
    $("#ourpartner-slider").slick({
        arrows:true,
        swipe:true,
        autoplay: ourPartner_autoplay,
        slidesToShow:6,
        slidesToScroll:1,
        rtl:rtl,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                   
                    slidesToShow: 3,

                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,                                                
                }
            }
        ],
        //speed:ourPartner_autotime
    });
    
    var infoelement = $(".enrolled");
    infoelement.each(function(){

        var self = $(this),
        selftooltiptext =self.data('tooltip-text');
        if(selftooltiptext){

            $('<span>',{class:'tooltip',text:selftooltiptext}).appendTo(self);

        }
    });

   

    return {
        init: function() {
            new enlightlite_modifiedFront();
        }
    };

});





  






