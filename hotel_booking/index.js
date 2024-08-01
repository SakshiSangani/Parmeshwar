document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop:true,
        autoplay:{
            delay:3500,
            disableOnInteraction: false,
        }
    });
});
