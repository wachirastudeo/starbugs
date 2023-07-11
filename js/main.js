/* eslint-disable no-console */
/* global */
/* exported */

'use strict'
jQuery('.slider-block').slick({
  infinite: true,
  autoplay: false,
  speed: 300,
  slidesToShow: 1,
  dots: true
});

jQuery('.mobile-slider-block').slick({
  infinite: true,
  autoplay: false,
  speed: 300,
  slidesToShow: 1,
  dots: true
});

jQuery('.menu-slider').slick({
  infinite: true,
 autoplay:false,
  slidesToShow: 3,
  dots: false,
  arrows:true,
  prevArrow:'<a class="menu-prev" href="javascript:voice(0)"></a>',
  nextArrow:'<a class="menu-next"  href="javascript:voice(0)"></a>',
  responsive:[
    {
      breakpoint:992,
      settings:{
        slidesToShow:2
      }
    },
    {
      breakpoint:576,
      settings:{
        slidesToShow:1
      }
    }
  ]

});

jQuery('.mobile-show-menu').on('click',function(){
  jQuery('.mobile-menu-block').addClass('active')
  jQuery('body').addClass('lock')
})

jQuery('.mobile-close-menu ,.mobile-barkdrop').on('click',function(){
  jQuery('.mobile-menu-block').removeClass('active')
  jQuery('body').removeClass('lock')

})







