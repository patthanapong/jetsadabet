<!DOCTYPE html>
<!-- saved from url=(0033)https://www.jetsadabet.com/member -->
<html class="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css" id="nanobarcss">.nanobar{width:100%;height:4px;z-index:9999;top:0}.bar{width:0;height:100%;transition:height .3s;background:#000}</style>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JETSADABET</title>
  <script async="" src="../JETSADABET_files/prum.min.js"></script>
  <script async="" src="../JETSADABET_files/analytics.js"></script>
  <script src="../JETSADABET_files/a96brPStUf0Y6NN5f7Sye0dMsAs.js"></script>
  <link rel="icon" href="https://www.jetsadabet.com/assets/favicon.ico" type="image/x-icon">
  <link href="../JETSADABET_files/bootstrap.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/font-awesome.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/flag-icon.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/stylesheet.css" rel="stylesheet">
  <link href="../JETSADABET_files/custom.css" rel="stylesheet">
  <link href="../JETSADABET_files/jquery.fancybox.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/style.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/animate.min.css" rel="stylesheet">
  <link href="../JETSADABET_files/hamburgers.css" rel="stylesheet">

  <link href="../JETSADABET_files/pnotify.css" rel="stylesheet">
  <link href="../JETSADABET_files/pnotify.brighttheme.css" rel="stylesheet">
  <link href="../JETSADABET_files/pnotify.mobile.css" rel="stylesheet">

  <link href="../JETSADABET_files/custom(1).css" rel="stylesheet">
  <!-- Scripts -->
  <script>
    window.App = {
      csrfToken: 'BtrlaOnS-izrDLc-CypEfOHkMDlifCtBxl74',
      jwtToken: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwYXlsb2FkIjp7InVpZCI6NTkzMzMxfSwiaWF0IjoxNTE0MTczMjA4fQ.GBgJXNDdwAyrSxmrM67mQw04irIpiICcmWx9u6lITJQ',
    }
    window.Config = {
      PUSH_KEY: "57703597dbd0c93d85ca",
      LOCALE: "th_TH",
      USERID: 593331,
      AGENTUSERID: 10185
    }
  </script>
  
  
  <style>
    #flashnews {
      max-width: 800px;
      max-height: 600px;
      width: 80%;
      height: 70%;
    }
  </style>

  @yield('head')

</head>
<body class="top-navigation">
  <div id="wrapper">
    <div id="app">
      <div id="page-wrapper">
        <div class="row">

          @include('nevbar')

        </div>


        @yield('content')

        
          <div class="footer">
            <div>
              <strong>Copyright © 2015, JETSADABET All Rights Reserved.</strong>
            </div>
          </div>

        
      </div><!-- /#page-wrapper -->
    </div><!-- /#app -->
  </div><!-- /#wrapper -->
  <!-- Mainly scripts -->
  <script src="./JETSADABET_files/jquery-3.1.1.min.js"></script>
  <script src="./JETSADABET_files/bootstrap.min.js"></script>
  <script src="./JETSADABET_files/jquery.metisMenu.js"></script>
  <script src="./JETSADABET_files/jquery.slimscroll.min.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="./JETSADABET_files/inspinia.js"></script>
  <script src="./JETSADABET_files/icheck.min.js"></script>

  <!-- Components -->
  <script src="./JETSADABET_files/nanobar.min.js"></script>
  <script src="./JETSADABET_files/jquery.fancybox.min.js"></script>
  <script src="./JETSADABET_files/hotkeys.js"></script>

  <script src="./JETSADABET_files/pnotify.js"></script>
  <script src="./JETSADABET_files/pnotify.desktop.js"></script>
  <script src="./JETSADABET_files/pnotify.mobile.js"></script>
  <script>
  var _prum = [['id', '598ed967a834087e91b015aa'],
               ['mark', 'firstbyte', (new Date()).getTime()]];
  (function() {
      var s = document.getElementsByTagName('script')[0]
        , p = document.createElement('script');
      p.async = 'async';
      p.src = '//rum-static.pingdom.net/prum.min.js';
      s.parentNode.insertBefore(p, s);
  })();
  </script>

  

  <!-- compile from webpack -->
  <script src="./JETSADABET_files/custom.js"></script>

  <!-- Inject script -->
  
  
  <script>
    $(document).ready(function() {


      
        if ($('#flashnews').length > 0) {
          $("[data-fancybox-flashnews]").fancybox()
          $("[data-fancybox-flashnews]").eq(0).trigger('click')
        }

        var positionPopup = 'stack-bottomright'
        if ($(window).width() <= 480) {
          var positionPopup = 'stack-bottomleft'
        }

        var stack_bar_bottom = {"dir1": "up", "dir2": "left", "firstpos1": 0, "firstpos2": 0};
        

        var notice = new PNotify({
            title: 'คุณเข้าสู่ระบบครั้งล่าสุด',
            text: '24/12/2017 11:47:06 ',
            addclass: positionPopup,
            type: 'info',
            stack: stack_bar_bottom,
            // styling: 'bootstrap3',
            buttons: {
                closer: false,
                sticker: false
            },
        })
        notice.get().click(function() {
            notice.remove();
        });
      
      // $('.issue-tracker tbody td').click(function(event) {
      //   var id = $(this).parents('tr').data('id');
      //   $(location).attr('href', "/member/messages/"+id);
      // });
    });
  </script>



<div class="nanobar" style="position: fixed;"><div class="bar"></div></div></body></html>