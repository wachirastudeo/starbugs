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

function popupWindow(url, windowName, win, w, h) {
  const y = win.top.outerHeight / 2 + win.top.screenY - ( h / 2);
  const x = win.top.outerWidth / 2 + win.top.screenX - ( w / 2);
  return win.open(url, windowName, `toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${y}, left=${x}`);
}

jQuery('.mobile-show-menu').on('click',function(){
  jQuery('.mobile-menu-block').addClass('active')
  jQuery('body').addClass('lock')
})

jQuery('.mobile-close-menu ,.mobile-barkdrop').on('click',function(){
  jQuery('.mobile-menu-block').removeClass('active')
  jQuery('body').removeClass('lock')

})

jQuery(document).on('click','.social-facebook',function(){

  let url=`https://www.facebook.com/sharer.php?u=${window.location.href}`;
  // window.location.href
  popupWindow(url, 'Facebook', window, 600, 300);

})

jQuery(document).on('click','.social-twitter',function(){

  let url=`https://twitter.com/intent/tweet?url=${window.location.href}`;
  // window.location.href
  popupWindow(url, 'Twitter', window, 600, 300);

})

jQuery(document).on('click','.social-line',function(){

  let url=`https://lineit.line.me/share/ui?url=${window.location.href}`;
  // window.location.href
  popupWindow(url, 'Line', window, 600, 300);

})







