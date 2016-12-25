var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
    loop:true
});
window.addEventListener("DOMContentLoaded",function () {
    var slide=document.querySelector(".swiper-slide"),
        clientH=document.documentElement.clientHeight,
        offTop=[];
})