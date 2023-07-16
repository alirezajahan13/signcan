$(document).ready(function () {
    let galleryCount = $('.singleProductHeader .woocommerce-product-gallery .flex-control-nav').children('li').length - 4;
    $('.singleProductHeader .woocommerce-product-gallery .flex-control-nav li').eq(3).children('img').after('<span class="galleryCount">'+'+'+galleryCount+'</span>');
    $('.singleProductHeader .woocommerce-product-gallery .flex-control-nav li').eq(3).click(function () {
        // console.log('some');
        // $('.woocommerce-product-gallery__image a').trigger('click');
    });
});