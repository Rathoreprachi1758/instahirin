$(document).ready(function () {
    AOS.init();

    // mobile menu

    $(".has_list .menu_icon").on("click", function (e) {
        $(this).parents(".has_list").find("ul").stop().slideToggle();
        $(this).toggleClass("menucollapse");
    });

    // pending status

    $(".facilityStatus_info span").on("click", function (e) {
        $(this).parent().find(".facilityStatus_dropdown").stop().slideToggle();
        $(this).parent(".facilityStatus_info").toggleClass("dropdowncollapse");
    });

    // custom tabs

    $(".custom_tabs ul li a").on("click", function (event) {
        event.preventDefault();

        $(".active").removeClass("active");
        $(this).addClass("active");
        $(".custom_tabs_data").hide();
        $($(this).attr("href")).show();
    });
    // $('.markServices_tabsBtn_info ul li a:first').trigger('click');

    // <!-- happyClients_slider slider -->

    $(".happyClients_slider").owlCarousel({
        nav: true,
        items: 3,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // <!-- approach slider -->

    $(".sliderApproach").slick({
        dots: true,
        infinite: true,
        speed: 800,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        verticalSwiping: true,
        arrows: false,
        swipeToSlide: true,
        focusOnSelect: true,
        cssEase: "linear",
    });
});

// custom file input
$("input[type=file]").change(function (e) {
    $(this)
        .parents(".uploadFile")
        .find(".filename")
        .text(e.target.files[0].name);
});

// menu code
document.getElementById("menu-toggle").addEventListener("click", function () {
    document.body.classList.toggle("nav-open");
});
