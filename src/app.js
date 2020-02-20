import './scss/style.scss';
import 'bootstrap';
import { WOW } from 'wowjs';
import { Swiper, Pagination, Navigation } from 'swiper/js/swiper.esm.js';

Swiper.use([Pagination, Navigation]);

var page = $('body').data('page');

var wow = new WOW({
    live: false,
    scrollContainer: null
});

$('header').load("header.html");

$('footer').load("footer.html");

if ($.contains(document.body, document.getElementById('slider-main'))) {

    var mySwiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true
    });
}

wow.init();