$(document).ready(function () {
    // --------header scrolled---------
    var header = $("header");
    var headerWrap = $(".header-wrap");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > 0) {
            headerWrap.addClass("scrolled");
        } else {
            headerWrap.removeClass("scrolled");
        }
    });


    // --------手機nav下拉----------
    $(".arrowed").click(function () {
        var submenu = $(this).next(".submenu");
        // 關閉其他未被點選的submenu
        $(".submenu").not(submenu).removeClass("active");
        console.log(submenu.hasClass("active"));
        if (submenu.hasClass("active")) {
            submenu.removeClass("active");
            // alert("remove");
        } else {
            submenu.addClass("active");
            // alert("added");
        }
    });

    $(window).resize(function () {
        // 隱藏所有的submenu
        $(".submenu").removeClass("active");
        $("header").removeClass("open");
        $(".dark-mask").removeClass("open");

        //-----index news專用--------
        // updateSwiper();
    });


    // -----------手機nav漢堡開關----------------
    function navHandler() {
        $("header").toggleClass("open");
        $(".dark-mask").toggleClass("open");
    }

    $(".hamburger-btn").click(navHandler);


    // ------------gotop-----------
    $('#goTopBtn').on('click', function () {
        $('html,body').stop(true).animate({
            scrollTop: 0
        }, 1000);
    })
    //--------gotop位置-------------
    const $goTopBtn = $('#goTopBtn');
    const $footer = $('footer');

    $(window).on('scroll', function () {
        const scrollPos = $(this).scrollTop();
        const windowHeight = $(this).height();
        const footerOffset = $footer.offset().top;


        if (scrollPos + windowHeight > footerOffset + 85) {
            $goTopBtn.addClass('active');
        } else {
            $goTopBtn.removeClass('active');
        }
    });
    // -------------服務swiper--------<script>
    var swiper = new Swiper(".service-Swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    // -------------news-swiper-----------
    var newSwiper;

    function initSwiper() {
        newSwiper = new Swiper(".news-Swiper", {
            slidesPerView: 3,
            spaceBetween: 35,
            navigation: {
                nextEl: ".news-swiper-button-next",
                prevEl: ".news-swiper-button-prev",
            },
        });
    }

    function updateSwiper() {
        if (window.innerWidth < 991) {
            newSwiper.allowSlideNext = false;
            newSwiper.allowSlidePrev = false;
            newSwiper.params.direction = 'vertical';
            newSwiper.params.slidesPerView = 1;
        } else if (window.innerWidth >= 991 && window.innerWidth < 1600) {
            newSwiper.allowSlideNext = true;
            newSwiper.allowSlidePrev = true;
            newSwiper.params.direction = 'horizontal';
            newSwiper.params.slidesPerView = 2;
        } else {
            newSwiper.allowSlideNext = true;
            newSwiper.allowSlidePrev = true;
            newSwiper.params.direction = 'horizontal';
            newSwiper.params.slidesPerView = 3;
        }
        newSwiper.update(); // 更新 Swiper 以反映变更
    }

    // 初始化 Swiper
    initSwiper();


    // ---------service點選頁碼------------------
    $('.btn-wrap').on('click', function () {
        // 获取要跳转的 swiper-slide 的索引
        var slideIndex = parseInt($(this).data('slide-index'));

        // 切换到对应的 swiper-slide
        swiper.slideTo(slideIndex);

        //---按鈕樣式active------

        $('li').removeClass('active');

        $(this).closest('li').addClass('active');

    });

});