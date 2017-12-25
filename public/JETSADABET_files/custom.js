$(function () {
  new Nanobar().go(100);

  $('[data-toggle="tooltip"]').tooltip()

  $('.navbar-collapse').on('hide.bs.collapse', function () {
    $('.hamburger').stop().removeClass('is-active');
  })
  $('.navbar-collapse').on('show.bs.collapse', function () {
    $('.hamburger').stop().addClass('is-active');
  })

  $('.credit-mobile-box, .credit-desktop-box').click(function() {
    var that = $(this)
    that.css('min-width', that.innerWidth())
    that.find('.fa-refresh').addClass('hide')
    that.find('a').removeClass('pulse')
    $.ajax({
      url: '/member/clear-credit-cache/'+$(this).data('id'),
      beforeSend: function(){
         that.find('.credit').html('<div class="sk-spinner sk-spinner-fading-circle">'
         +'<div class="sk-circle1 sk-circle"></div>'
         +'<div class="sk-circle2 sk-circle"></div>'
         +'<div class="sk-circle3 sk-circle"></div>'
         +'<div class="sk-circle4 sk-circle"></div>'
         +'<div class="sk-circle5 sk-circle"></div>'
         +'<div class="sk-circle6 sk-circle"></div>'
         +'<div class="sk-circle7 sk-circle"></div>'
         +'<div class="sk-circle8 sk-circle"></div>'
         +'<div class="sk-circle9 sk-circle"></div>'
         +'<div class="sk-circle10 sk-circle"></div>'
         +'<div class="sk-circle11 sk-circle"></div>'
         +'<div class="sk-circle12 sk-circle"></div>'
         +'</div>')
      }
    }).done(function(credit) {
       setTimeout(function(){
         that.find('.fa-refresh').removeClass('hide')
         that.find('span.credit').html(credit)
         that.find('a').css('display','none').addClass('animated pulse').css('display','block')
       }, 1000)
    })

  });

  // var pusher = new Pusher(window.Config.PUSH_KEY, {
  //   cluster: 'ap1',
  //   encrypted: true
  // });
  //
  // var notifyFunction = function(data){
  //     // data.message
  //     (new PNotify({
  //         title: 'คุณมีข้อความใหม่',
  //         text: data.message.title,
  //         addclass: "stack-bottomright",
  //         icon: 'fa fa-envelope-o',
  //         desktop: {
  //             desktop: true,
  //             icon: '/assets/imgs/pnotify/default.png',
  //         },
  //     })).get().click(function(e) {
  //         if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
  //         $(location).attr('href', '/member/messages/'+data.message.id)
  //     });
  // }
  //
  // var channel = pusher.subscribe('notify-message');
  // channel.bind('user-id-'+window.Config.USERID, function(data) { notifyFunction(data) });
  // channel.bind('alluser', function(data) { notifyFunction(data) });
  // channel.bind('agent-'+window.Config.AGENTUSERID, function(data) { notifyFunction(data) });


  // $.idleTimeout('#idle-timeout-dialog', '.modal-content button:last', {
  //   idleAfter: 3600, // 5 seconds - dafault 900
  //   timeout: 30000, //30 seconds to timeout
  //   pollingInterval: 500, // 5 seconds
  //   keepAliveURL: SITE_SECTION_URL +'/misc/keepalive',
  //   serverResponseEquals: 'OK',
  //   onTimeout: function(){
  //       window.location = SITE_URL + "/user/logout";
  //   },
  //   onIdle: function(){
  //     $('#idle-timeout-dialog').modal('show');
  //     $(".modal-backdrop").css("z-index", "1500");
  //     $countdown = $('#idle-timeout-counter');
  //
  //     $('#idle-timeout-dialog-keepalive').on('click', function () {
  //         $('#idle-timeout-dialog').modal('hide');
  //     });
  //
  //     $('#idle-timeout-dialog-logout').on('click', function () {
  //         $('#idle-timeout-dialog').modal('hide');
  //         $.idleTimeout.options.onTimeout.call(this);
  //     });
  //   },
  //   onCountdown: function(counter){
  //       $countdown.html(counter); // update the counter
  //   }
  // });

})
