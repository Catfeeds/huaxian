var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    autoplay:true, //自动轮播
    autoplayDisableOnInteraction: false,  //用户点击之后不停止自动轮播,true为用户点击后停止自动轮播
    effect: 'flip', //切换效果
    grabCursor: true,
    speed: 2000,  //滑块切换速度
    // 如果需要分页器
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    // 如果需要前进后退按钮
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })   