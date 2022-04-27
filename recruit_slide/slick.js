const option = {
  lazyLoad: 'ondemand',
  dots: false,
  arrows: false,
  slidesToShow: 3,
}

const slickGoTo = $('#tns1-item0');
let navList = $('.tnsna1');
$(slickGoTo).slick(option);

navList.on('click',function(){
  index = $(this).index();
  slickGoTo.slick("slickGoTo", index, false);
});

const slickGoTo2 = $('#tns1-item5');
let navList2 = $('.tnsna2');
$(slickGoTo2).slick(option);

navList2.on('click',function(){
  index = $(this).index();
  slickGoTo2.slick("slickGoTo2", index, false);
});