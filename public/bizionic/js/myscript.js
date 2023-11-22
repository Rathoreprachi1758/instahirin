

   $(document).ready(function() {




    AOS.init();


     // mobile menu

     $('.menuIcon').on('click', function (e) {
        $('body').addClass('hidden');
        $('.main_nav').slideDown();
    });

    $('.closeNav').on('click', function (e) {
        $('body').removeClass('hidden');
        $('.main_nav').slideUp();
    });





    // <!-- feature week slider -->
    $('.clientBizionic_slider').owlCarousel({

      loop: true,
      autoplay: true,
      items: 1,
      nav: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5100,
      responsiveClass: true,
      responsive: {
          0: {
              items: 1,
          },
          600: {
              items: 1,
          },
          1000: {
              items: 1,

          },
          1400: {
              items: 1,

          }
      }
  });



 // clientBizionic_slider slick

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 3000,
    adaptiveHeight: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode:true,
    focusOnSelect: true,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 4
          }
        },
        {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
  });
 6




   // <!-- feature week slider -->
   $('.meetTeam_slider').owlCarousel({

    loop: true,
    autoplay: true,
    items: 1,
    nav: true,
    margin:30,
    autoplayHoverPause: true,
    autoplayTimeout: 5100,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,

        },
        1400: {
            items: 3,

        }
    }
});



 
  // sponsor slider 


  $('.sponsorSlider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      } 
    ]
  });







    // pick popup
    $('.onclick_forpick span').on('click', function(event) {
        $('body').addClass('hidden');
        $("#add_draw_popup").show();
    });
    $('.popup_overly').on('click', function(event) {
        $('body').removeClass('hidden');
        $(".custom_popup").hide();
    });




// mobile menu

  if (screen.width < 1023) {

    $('.chevRowDown').on('click', function(event) {
      $(this).parents('.floatingMenu_col').find('.floatingMenu_col_list').slideToggle();
      $(this).parent('h6').toggleClass('clickH6');
    });


    // $('.has_nav small').on('click', function(event) {
    //   $(this).parent('li').find('.floatingMenu').slideToggle();
    //   $(this).parent('li').toggleClass('rotate_icon');
    // });



  }


// grid list code 


    $('.grid_list a ').on('click', function (e) {
      $(this).parents('.grid_listing_outer').toggleClass('showListView');

  });



// Submit a form using ajax
$(function() {
  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val(), 'X-Requested-With': 'XMLHttpRequest' }
  });


  var form = $('.subscription_form');
  var success = $('#success');
  var failure = $('#failure');

  form.submit(function(e) {
      e.preventDefault();

      var formData = {
          name: $("#name").val(),
          email: $("#email").val(),
          lead_type: $("#lead_type").val(),
          honeypot: $("#honeypot").val(),
        };

      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: formData,
          dataType: "json",

      })
          .done(function() {
              $(".subscription_form")[0].reset();
              success.addClass('show');
              failure.removeClass('show');
              console.log('yay')
          })

          .fail(function() {
              $(".subscription_form")[0].reset();
              failure.addClass('show');
              success.removeClass('show');
              console.log('boo')
          });

      return false;
  });
});


// Submit a form using ajax
$(function() {
  $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val(), 'X-Requested-With': 'XMLHttpRequest' }
  });


  var form = $('.hire_form');
  var success = $('#hire_success');
  var failure = $('#hire_failure');

  form.submit(function(e) {
      e.preventDefault();

      var formData = {
          name: $("#hire_name").val(),
          email: $("#hire_email").val(),
          company: $("#company").val(),
          phone: $("#phone").val(),
          message: $("#message").val(),
          lead_type: $("#hire_lead_type").val(),
          honeypot: $("#hire_honeypot").val(),
        };

        console.log('HIre Form', formData);

      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: formData,
          dataType: "json",

      })
          .done(function() {
              $(".hire_form")[0].reset();
              success.addClass('show');
              failure.removeClass('show');
              console.log('yay')
          })

          .fail(function() {
              $(".hire_form")[0].reset();
              failure.addClass('show');
              success.removeClass('show');
              console.log('boo')
          });

      return false;
  });
});


// Submit a form using ajax
       $("#hire_developer").on('submit',(function(e) {
           var form = $('#hire_developer');
           var success = $('#hire_success');
           var failure = $('#hire_failure');

           $.ajax({
               url: form.attr('action'),
               type: form.attr('method'),
               data: new FormData(this),
               dataType: "json",
               contentType: false,
               cache: false,
               processData:false,

           })
               .done(function() {
                   $("#hire_developer")[0].reset();
                   success.addClass('show');
                   failure.removeClass('show');
                   console.log('yay');
                   $('html, body').animate({
                        scrollTop: ($("#hire_success").offset().top - 150)
                    }, 100);
               })

               .fail(function() {
                   // $("#hire_developer")[0].reset();
                   failure.addClass('show');
                   success.removeClass('show');
                   console.log('boo');
                   $('html, body').animate({
                        scrollTop: ($("#hire_failure").offset().top - 150)
                    }, 100);
               });

           return false;

       }));

// Submit a form using ajax
       $("#career_form").on('submit',(function(e) {
           var form = $('#career_form');
           var success = $('#career_success');
           var failure = $('#career_failure');

           $.ajax({
               url: form.attr('action'),
               type: form.attr('method'),
               data: new FormData(this),
               dataType: "json",
               contentType: false,
               cache: false,
               processData:false,

           })
               .done(function() {
                   $("#career_form")[0].reset();
                   success.addClass('show');
                   failure.removeClass('show');
                   console.log('yay')
               })

               .fail(function(result) {

                   var errors = result.responseJSON.errors;
                   console.log(errors )
                   
                   var message = '';
                   if(errors.name){
                    message += ' '+errors.name;
                   }
                   if(errors.email){
                    message += ' '+errors.email;
                   }
                   if(errors.document){
                    message += ' '+errors.document;
                   }
                   
                   $('#career_failure').html('Error! '+ message);
                   failure.addClass('show');
                   success.removeClass('show');
                   console.log('boo')
               });

            return false;

       }));

// Submit a form using ajax
       $("#insta_form").on('submit',(function(e) {
           var form = $('#insta_form');
           var success = $('#insta_success');
           var failure = $('#insta_failure');

           $.ajax({
               url: form.attr('action'),
               type: form.attr('method'),
               data: new FormData(this),
               dataType: "json",
               contentType: false,
               cache: false,
               processData:false,

           })
               .done(function() {
                   $("#insta_form")[0].reset();
                   success.addClass('show');
                   failure.removeClass('show');
                   console.log('yay')
               })

               .fail(function() {

                   failure.addClass('show');
                   success.removeClass('show');
                   console.log('boo')
               });

            return false;

       }));



       // tabs Order

 $('.markServices_tabsBtn_info ul li a').on('click', function(event) {
  event.preventDefault();

  $('.active').removeClass('active');
  $(this).addClass('active');
  $('.markServices_tabsInfo_detail').hide();
  $($(this).attr('href')).show();
});
// $('.markServices_tabsBtn_info ul li a:first').trigger('click');





    // address tabs Order

    $('.adress_tabs a').on('click', function(event) {
        event.preventDefault();

        $('.active').removeClass('active');
        $(this).addClass('active');
        $('.addressTab_data').hide();
        $($(this).attr('href')).show();
      });
       $('.adress_tabs a:first').trigger('click');





       // client reviews tabs

    $('.clientBizionic_partners ul li a').on('click', function(event) {
      event.preventDefault();

      $('.active').removeClass('active');
      $(this).addClass('active');
      $('.clientBizionic_reviews_info').hide();
      $($(this).attr('href')).show();
      $($(this).attr('href')).addClass('showMe');
    });
     $('.clientBizionic_partners ul li  a:first').trigger('click');




    //  core services tab

     $('.coreTabs ul li a').on('click', function(event) {
      event.preventDefault();

      $('.active').removeClass('active');
      $(this).addClass('active');
      $('.coreTabs_data_show').hide();
      $($(this).attr('href')).show();
    });
     $('.coreTabs ul li a:first').trigger('click');



});




// sticky header

$(window).scroll(function() {
    if ($(window).scrollTop() >= 100) {
        $('.wrapper ').addClass('fixed_header');
    } else {
        $('.wrapper ').removeClass('fixed_header');
    }



});


var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').length ? $('#counter').offset().top - window.innerHeight : 0;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});






var firstOpen = true;
var time;

// $('#timePicker').datetimepicker({
//   useCurrent: false,
//   format: "hh:mm A"
// }).on('dp.show', function() {
//   if(firstOpen) {
//     time = moment().startOf('day');
//     firstOpen = false;
//   } else {
//     time = "01:00 PM"
//   }

//   $(this).data('DateTimePicker').date(time);
// });




// wow

// wow = new WOW({
//     animateClass: 'animated',
//     offset: 100,
//     callback: function(box) {
//         console.log("WOW: animating < " + box.tagName.toLowerCase() + ">")
//     }
// });
// wow.init();
// document.getElementById('moar').onclick = function() {
//     var section = document.createElement('section');
//     section.className = 'section--purple wow fadeInDown';
//     this.parentNode.insertBefore(section, this);
// };
