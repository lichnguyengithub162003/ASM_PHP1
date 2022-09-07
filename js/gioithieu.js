$(document).ready(function() {
    $(".image-slider").slick({
        slidesToShow: 4,     /* 5: số bức ảnh hiển thị trên màn hình là 5 */
        slidesToScroll: 1,   /* 2: chuyển 2 ảnh 1 lần */
        infinite: true,      /* true: Chạy vô tận
                                false: hết hình thì k đi đc nữa */

        arrows: true,        /* false: bỏ arrow => kéo thả (draggable) */
        draggable: true,    /* Cấm dragg */

        autoplay: true,   /* Tự động chuyển ảnh */
        autoplaySpeed: 1500,

        prevArrow:`<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-arrow-left"></i></button>`,  /* `: backtick */
        nextArrow:`<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-arrow-right"></i></button>`, 

        dots: true,    //Hiện dots


        // Respontive
        responsive: [
            {
                breakpoint: 1028,
                settings: {
                    slidersToShow: 3,
                },
            },

            // ////////
            {
                breakpoint: 480,
                settings: {
                    slidersToShow: 1,
                    arrows: false,
                    infinite: false,
                },
            },

        ],


    });
});






// ----------------------- Respontive ----------------------------
$(document).ready(function(){
    $('#toggle').click(function(){
        // alert('ok')

        $('.nav1, .nav2').slideToggle();
    });
})