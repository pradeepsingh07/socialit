// $('.logo-inner').slick({  
//     autoplaySpeed: 600,
//     autoplay: true,
//     infinite: true,
//     slidesToShow: 6,
//     slidesToScroll: 1,
//     dots: false,
//     arrows: false,
//     cssEase: 'linear',
//   });

$('.reviews').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll:1,
    arrows: false,
    dots: false,    
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow:1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow:1
          }
        }
      ]
});
$(".reviews-prev").click(function () {
   $(".reviews").slick("slickPrev");
});
$(".reviews-next").click(function () {
  $(".reviews").slick("slickNext");
});

$('.blogs-slide').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll:1,
    arrows: false,
    dots: false,    
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow:1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow:1
          }
        }
      ]
});
$(".blogs-prev").click(function () {
  $(".blogs-slide").slick("slickPrev");
});
$(".blogs-next").click(function () {
 $(".blogs-slide").slick("slickNext");
});

$('.logo-inner-slide').slick({  
    slidesToShow:7, 
    arrows: false,
    centeredSlides: true,
    dots: false, 
    loop: true,
    speed: 2500,
    autoplaySpeed:0,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    cssEase: 'linear',
    swipe: false,
    autoplay: {
        delay: 0,
    },   
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow:3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow:2
          }
        }
      ]
});

$('.platform-icons').slick({  
  slidesToShow:7, 
  vertical: true,
  arrows: false,
  centeredSlides: true,
  dots: false, 
  loop: true,
  speed: 2500,
  autoplaySpeed:0,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  cssEase: 'linear',
  swipe: false,
  autoplay: {
      delay: 0,
  },   
  responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow:3
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow:2
        }
      }
    ]
});

$('.work-slide').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll:1,
    arrows: false,
    dots: false,    
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow:1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow:1
          }
        }
      ]
});

$('.choosen').change( function(e){   
    const fileName = e.target.files[0].name;
    $('.filename').html(fileName);

}) 

$('.dropdown-toggle').on('click',function(){
  if($('#drop-show-menu').hasClass('show')){
       $('.overlay').show();  
   }else{
      $('.overlay').hide();
   }
})   



