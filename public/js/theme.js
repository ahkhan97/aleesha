jQuery(document).ready(function($){ 

$('.test-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  prevArrow: '<button class="slick-prev slick-arrow"><i class="fas fa-angle-left"></i></button>',
  nextArrow: '<button class="slick-next slick-arrow"><i class="fas fa-angle-right"></i></button>',
  arrows: true
});


// $('.test-slider').slick({
//   infinite: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: false,
//   arrows: true,
//   dots: false,
//   fade: false,
// });




$('.product-categories .product-slider-2 ul.products').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  centerPadding: '10px',
});

$('.fashion-jackets ul.products').slick({
  slidesPerRow: 4,
  rows: 2,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});


$('.product-review-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});


$('.product-color-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  dots: false,
});



$('#videoslider').slick({
	infinite: true,
  slidesToShow: 1,
  arrows: true,
});


jQuery('.flex-control-thumbs').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  vertical: true,
  verticalScrolling: true,
  arrows: true,
  speed: 800,
  

  });


});


jQuery('.taxonomy_term_child_slider ul').slick({
/*  centerMode: true,
  centerPadding: '0px',*/
  infinite: true,
  lazyLoad: 'ondemand',
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  speed: 800,

  responsive: [
   {
      breakpoint: 980,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 500,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 2
      }
    }
  ]

  });

jQuery('.brand_term_child_slider ul').slick({
/*  centerMode: true,
  centerPadding: '0px',*/
  infinite: true,
  lazyLoad: 'ondemand',
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  speed: 800,

  responsive: [
   {
      breakpoint: 980,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 500,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 2
      }
    }
  ]

  });


jQuery('#categories_slider').slick({
/*  centerMode: true,
  centerPadding: '0px',*/
  infinite: true,
  lazyLoad: 'ondemand',
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  speed: 800,

  responsive: [
   {
      breakpoint: 980,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 500,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 1
      }
    }
  ]

  });

jQuery(document).ready(function(){
    AOS.init();
    setTimeout(AOS.init, 100);

    if (window.matchMedia('(max-width: 900px)').matches) {
       jQuery(".woocommerce-sidebar-1 h4 i.fa").removeClass("fa-minus");
       jQuery(".woocommerce-sidebar-1 h4 i.fa ").addClass("fa-plus");

    jQuery(".main-footer .footer-col-1 h4").click(function() {
    jQuery(this).next().slideToggle();
    jQuery(this).find('i').toggleClass("fa fa-minus  fa fa-plus");
    }); 
  }
    else {
      }

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = "100%";
    } 
  });
}

});

jQuery(".woocommerce-sidebar-1 h4 i.fa").click(function() {
   
    jQuery(this).parent().next().slideToggle();
    jQuery(this).toggleClass("fa-minus fa-plus");
});

 jQuery(window).on('load',function(){
      jQuery('#SubscriptionModal').modal('show');
  });

AOS.init({
  mobile:false,
});
window.addEventListener('load', AOS.refresh);

jQuery(".main-menu-icon").click(function() {
    jQuery('#nav-box').toggleClass('active');
    jQuery(this).toggleClass("");
});
jQuery(".rotate").click(function () {
    jQuery(this).toggleClass("down");
})


jQuery('.product_wishlist').click(function(){
 var id = jQuery(this).data('product-id');
 var str = '&id=' + id + '&action=add_to_wishlist';
 jQuery.ajax({
        type: "POST",
        url: the_ajax_script.ajaxurl,
        data: str,
        beforeSend: function () {

        },
        success: function (msgs) {
          
          jQuery("#prod"+msgs).fadeOut(1000, function(){ jQuery(this).after('<span class="button product_wishlist">Added to Wishlist</span>'); jQuery(this).remove(); });
         

        }
    });
});


jQuery('#mylogopicture').change(function(){
  //alert(jQuery(this).val());
  var fD = new FormData();
  jQuery.each(jQuery(this)[0].files, function(i, file) { 
    fD.append('image-' + i, file);
    fD.append("action", 'usercustomlogo');

  });
    jQuery.ajax({
            type: "POST",
            url: the_ajax_script.ajaxurl,
            data: fD,
            processData: false,
            contentType: false,
            beforeSend: function() {
                jQuery('.woocommerce div.product div.summary').addClass('fading');
            },
            success: function(msgs) {
              jQuery('#hidden_my_picture').val(msgs);
              jQuery('#hidden_my_logo_picture').attr('src',msgs);
              jQuery('.woocommerce div.product div.summary').removeClass('fading');
            }
        });
});