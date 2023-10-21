
    jQuery(document).ready(function(){
         b=0;d=0;
        $('.next').click(function(){
            b++;
            if(b>0){
                $('#contentslider1').hide(0).delay(1000).show(200);
            }
        });
            $('.prev').click(function(){
                d++;
                if(d>0){
                    $('#contentslider1').hide(0).delay(1000).show(200);
                }
    });
    });
    jQuery(document).ready(function(){
        i=0;k=0;a=0;
        $('#contentslider1').css("animation",'moveToRight 1s ease-in-out forwards');
        $('button').click(function(){
            i++;k++;a++;
            
        if(i>0){
        $('#contentslider2').hide(0).delay(1000).show(200);
        }
        if(k>0){
            $('#contentslider3').hide(0).delay(1000).show(200);
        }
        if(a>0){
            $('#contentslider4').hide(0).delay(1000).show(200);
        }   
        });
    });

    function Slider() {
        const carouselSlides = document.querySelectorAll('.slide_slider1');
        const btnPrev = document.querySelector('.prev');
        const btnNext = document.querySelector('.next');
        const dotsSlide = document.querySelector('.dot-containers');
        let currentSlide = 0;
    
        const activeDot = function (slide) {
            document.querySelectorAll('.point').forEach(point => point.classList.remove('active'));
            document.querySelector(`.point[data-slide="${slide}"]`).classList.add('active');
        };
        activeDot(currentSlide);

        const changeSlide = function (slides) {
            carouselSlides.forEach((slide, index) => (slide.style.transform = `translateX(${100 * (slides-index)}%)`)
            );
        };
        changeSlide(currentSlide);

        btnPrev.addEventListener('click', function () {
            currentSlide++; 
            if (carouselSlides.length-1 < currentSlide && currentSlide>=4) {
                currentSlide = 0;
            };
            changeSlide(currentSlide);
            activeDot(3-currentSlide);
    });
            btnNext.addEventListener('click', function () {
            currentSlide++;
            if (carouselSlides.length - 1 < currentSlide) {
                currentSlide=0;
            }; 
            changeSlide(currentSlide);
            activeDot(3-currentSlide);
        });

        dotsSlide.addEventListener('click', function (e) {
            if (e.target.classList.contains('point')) {
                const slide = e.target.dataset.slide;
                changeSlide(slide);
                activeDot(slide);
            }
        });
    };
    Slider();
    

    $(document).ready(function(){
        
        $("#style1").click(function(){
            $("#headers").css({"background":"white","position":"relative","bottom":"730px","border":"1px solid white","box-shadow":"4px 4px 4px light"});
            $(".btn-secondary").css({"color":"black"});
            $("#myoverline").css({"opacity":"0"});
            $("#lastlogo").css({"opacity":"0"});
            $("#colors5").css({"margin-left":"200px"});
            $("#cntrdelogo").css({"opacity":"1","position": "absolute","left":"640px","top":"80px"});
            $("#headerdrup").css({"position": "absolute","left":"200px","top":"100px","width": "100%"});
            $("#sludshow").css({"position": "relative","top":"180px"});
            $(".dot-containers").css({"position": "relative","bottom":"-190px"});
            $("#header").css({"background":"rgba(57,179,230,25)"});
            $("#mysearch").css({"opacity":"0" });
          }); 
        $("#style2").click(function(){
            $("#headers").css({"background":"white","position":"relative","bottom":"700px","border":"1px solid white","box-shadow":"4px 4px 4px light"});
            $(".btn-secondary").css({"color":"black"});
            $("#cntrdelogo").css({"opacity":"1","position": "absolute","left":"473px","top":"40px"});
            $("#headerdrup").css({"position": "absolute","left":"230px","top":"125px"});
            $("#sludshow").css({"position": "relative","top":"200px"});
            $("#myoverline").css({"opacity":"1" ,"position": "absolute","top":"140px","left":"13px","left":"13px","border":"1px ridge #e0dcdc","width":"1327px"});
            $(".dot-containers").css({"position": "relative","bottom":"-190px"});
            $("#lastlogo").css({"opacity":"0"});
            $("#header").css({"background":"rgba(57,179,230,25)"});
            $("#colors5").css({"margin-left":"10px"});
            $("#mysearch").css({"opacity":"0" });
        });
        
        
        $("#style3").click(function(){
            $("#headers").css({"background":"white","position":"relative","bottom":"700px","border":"4px solid white","box-shadow":"1px 1px light gray"});
            $(".btn-secondary").css({"color":"black"});
            $("#headerdrup").css({"position": "absolute","left":"230px","top":"125px"});
            $("#sludshow").css({"position": "relative","top":"200px"});
            $("#myoverline").css({"position": "absolute","top":"140px","left":"13px","left":"13px","border":"1px ridge #e0dcdc","width":"1327px"});
            $(".dot-containers").css({"position": "relative","bottom":"-190px"});
            $("#cntrdelogo").css({"opacity":"1","position": "absolute","top":"38px","left":"20px"});
            $("#myoverline").css({"position": "absolute","bottom":"575px","left":"2px","border":"1px solid #cfcfcf","width":"1340px","opacity":"0.6"});
            $("#mysearch").css({"opacity":"1" });
            $("#lastlogo").css({"opacity":"0"});
            $("#header").css({"background":"rgba(57,179,230,25)"});
            $("#colors5").css({"margin-left":"10px"});
          }); 
          $("#style4").click(function(){
            $("#headers").css({"background":"white","position":"relative","bottom":"730px","border":"1px solid white","box-shadow":"4px 4px 4px light"});
            $(".btn-secondary").css({"color":"black"});
            $("#myoverline").css({"opacity":"0"});
            $("#lastlogo").css({"opacity":"0"});
            $("#cntrdelogo").css({"opacity":"1","position": "absolute","left":"20px","top":"80px"});
            $("#headerdrup").css({"position": "absolute","left":"510px","top":"100px"});
            $("#sludshow").css({"position": "relative","top":"180px"});
            $(".dot-containers").css({"position": "relative","bottom":"-190px"});
            $("#header").css({"background":"rgba(57,179,230,25)"});
            $("#colors5").css({"margin-left":"10px"});
            $("#mysearch").css({"opacity":"0" });
          }); 
          $("#style5").click(function(){
            $("#headers").css({"background":"rgba(57,179,230,25)","position":"relative","bottom":"700px","right":"0px","border":"5px solid rgba(57,179,230,25)"});
            $(".btn-secondary").css({"color":"white"});
            $("#myoverline").css({"opacity":"0"});
            $("#cntrdelogo").css({"opacity":"0"});
            $("#lastlogo").css({"opacity":"1","background":"url('../../moodle/theme/enlightlite_modified/images/blue-logo.png')","background-size":"150px 100px","width":"150px","height":"100px","position": "absolute","left":"20px","top":"70px"});
            $("#headerdrup").css({"position": "absolute","left":"510px","top":"100px"});
            $("#sludshow").css({"position": "relative","top":"180px"});
            $(".dot-containers").css({"position": "relative","bottom":"-190px"});
            $("#header").css({"background":"#333"});
            $("#colors5").css({"margin-left":"10px"});
            $("#mysearch").css({"opacity":"0" });
            
  
          }); 

       
      });
      

    
