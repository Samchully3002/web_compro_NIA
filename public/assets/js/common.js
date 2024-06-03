$(document).ready(function(){
    /* header-wrapper 개별 히든 메뉴 */
    $(function () {
        var includes = $('[data-include]');
        $.each(includes, function () {
            var file = $(this).data('include') + '.html';
            $(this).load(file);
        });
    });
    $('.hidden-box').mouseover(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().slideDown(200);
        }        
    });
    $('.hidden-box').mouseleave(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().slideUp(200);
        }                
    });

    /* header-wrapper scroll event */
    $(window).scroll(function(){
        if($(document).scrollTop() > 40){
            $("#header-wrapper").addClass("color-effect");
        } else{
            $("#header-wrapper").removeClass("color-effect");
        }
    });

    /* hambuger menu event */
    $('.pc-ham').on('click' , function(){        
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.pc-hidden').stop().slideDown();
            $('.pc-bg').stop().slideDown();
        } else{
            $(this).removeClass('active');
            $('.pc-hidden').stop().slideUp();
            $('.pc-bg').stop().slideUp();
        }
    });

    $('.mobile-ham').on('click' , function(){        
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.mobile-menu').stop().fadeIn();
            $('.mobile-menu .inner').stop().slideDown();
        } else{
            $(this).removeClass('active');
            $('.mobile-menu').stop().fadeOut();
            $('.mobile-menu .inner').stop().slideUp();
            $('.mobile-menu .second-menu').stop().slideUp();
            
        }
    });

    $('.mobile-menu .first-menu').on('click' , function(){
        if(!$(this).hasClass('active')){
            $('.mobile-menu .first-menu').removeClass('active');
            $(this).addClass('active');
            $('.mobile-menu .second-menu').stop().slideUp();
            $(this).next().stop().slideDown();
        } else{
            $(this).removeClass('active');
            $(this).next().stop().slideUp();
        }
    });

    /* main sld event */
    var owl = $('#main-carousel');

    $(owl).owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        touchDrag:false,
        mouseDrag:false,
        items:1,
        autoplay:true,
        autoplayTimeout:7000,
        // autoplayHoverPause:true,
        animateOut: 'fadeOut'
    });

    $(owl).on('changed.owl.carousel', function(e) {
        $(".sld-wrapper .item .bg-box").removeClass("active");
        $(".sld-wrapper .item .text-box p").removeClass("active");
        $(".sld-wrapper .item .text-box span").removeClass("active");
        $(".sld-wrapper .item .play-box").removeClass("active");
    });

    /* main sld number active event */
    var time = setInterval(function () {

        var i = $("#main-carousel .owl-item.active").index();

        $("#main-carousel .owl-item").eq(i).children(".item").children(".bg-box").addClass("active");
        $("#main-carousel .owl-item").eq(i).children(".item").children(".row").children(".imx").children(".text-box").children("p").addClass("active");
        $("#main-carousel .owl-item").eq(i).children(".item").children(".row").children(".imx").children(".text-box").children("span").addClass("active");
        $("#main-carousel .owl-item").eq(i).children(".item").children(".row").children(".imx").children(".play-box").addClass("active");

        if($(".owl-stage .owl-item").hasClass("active")){
            if(i == 2){
                $(".num-box span").removeClass("active");
                $(".num-box span:nth-child(1)").addClass('active');
            }
            else if(i == 3){
                $(".num-box span").removeClass("active");
                $(".num-box span:nth-child(2)").addClass('active');
            }
            else if(i == 4){
                $(".num-box span").removeClass("active");
                $(".num-box span:nth-child(3)").addClass('active');
            }
        }
    }, 100);

    $(".num-box span").on("click" , function(){
        $(".num-box span").removeClass("active");
        $(this).addClass('active');
        owl.trigger('stop.owl.autoplay');
        owl.trigger('play.owl.autoplay',[7000]);
    });

    /* berinovasi-wrapper event */
    $('#sub-carousel').owlCarousel({
        items:1,
        loop:false,
        margin:34,
        touchDrag:false,
        mouseDrag:false,
    });

    $('.berinovasi-wrapper .btn-box a').on('click' , function(){
        var i = $(this).parents('.fl').index();
        $('.berinovasi-wrapper .btn-box a').removeClass('active');
        $(this).addClass('active');
        $('#sub-carousel .owl-dots button').eq(i).click();
    });

    /* main contact-wrapper event */
    $("#file").on('change',function(){
        var fileName = $("#file").val();
        $(".upload-name").val(fileName);
    });                

    $('.contact-wrapper form button').on('click' , function(){

        let url = window.location.href;
        url = url.split('/');
        url = url.reverse();
        url = url[1];

        if($('.contact-wrapper form input[name="name"]').val() == ''){
            if(url === 'kr'){
                $('.contact-wrapper form input[name="name"]').focus();
                alert('이름을 입력해주세요.');
                return false;
            } else{
                $('.contact-wrapper form input[name="name"]').focus();
                alert('Silakan masukkan nama Anda.');
                return false;
            }
        } else if($('.contact-wrapper form input[name="phone"]').val() == ''){
            if(url === 'kr'){
                $('.contact-wrapper form input[name="phone"]').focus();
                alert('연락처를 입력해주세요.');
                return false;
            } else{
                $('.contact-wrapper form input[name="phone"]').focus();
                alert('Silakan masukkan informasi kontak Anda.');
                return false;
            }            
        } else if($('.contact-wrapper form input[name="email"]').val() == ''){
            if(url === 'kr'){
                $('.contact-wrapper form input[name="email"]').focus();
                alert('이메일을 입력해주세요.');
                return false;
            } else{
                $('.contact-wrapper form input[name="email"]').focus();
                alert('Masukkan email Anda.');
                return false;
            }
        } else if($('.contact-wrapper form input[name="title"]').val() == ''){
            if(url === 'kr'){
                $('.contact-wrapper form input[name="title"]').focus();
                alert('제목을 입력해주세요.');
                return false;
            } else{
                $('.contact-wrapper form input[name="title"]').focus();
                alert('Masukkan subjek.');
                return false;
            }
        } else if($('.contact-wrapper form textarea[name="content"]').val() == ''){
            if(url === 'kr'){
                $('.contact-wrapper form textarea[name="content"]').focus();
                alert('내용을 입력해주세요.');
                return false;
            } else{
                $('.contact-wrapper form textarea[name="content"]').focus();
                alert('Silakan masukkan konten Anda.');
                return false;
            }
        } else if($('.contact-wrapper form input[type="checkbox"]').prop('checked') == false){
            if(url === 'kr'){
                $('.contact-wrapper form input[type="checkbox"]').focus();
                alert('개인정보 수집 이용에 동의해주세요.');
                return false;
            } else{
                $('.contact-wrapper form input[type="checkbox"]').focus();
                alert('Harap setujui pengumpulan dan penggunaan informasi pribadi.');
                return false;
            }            
        }
        alert('등록이 완료됬습니다.')
        location.reload();
    });

    /* headquarters.html, business.html btn-box event */
    $('.page-scroll .btn-box a').on('click' , function(){
        let i = $(this).index();
        let h = $('#header-wrapper').height();
        let offSet = $('.section').eq(i).offset().top - h - 10;
        $('html, body').animate( { scrollTop : offSet }, 600 );
    });
  
    
});