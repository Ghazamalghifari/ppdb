<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SMAIT Quran Qordhova
  </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="demo/demo.css" rel="stylesheet" />
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate"><img src="img/logo.png" height="50p">
        <a class="navbar-brand" href="{{ url('/') }}">
         SMAIT Quran Qordhova </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto"> 
          @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}" >
              <i class="material-icons"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">
              <i class="material-icons"></i> Registrasi
            </a>
          </li>

            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                Specialis Class
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="{{ url('/leader-class') }}" class="dropdown-item">Leader Ship</a>
                <a href="{{ url('/programmer-class') }}" class="dropdown-item">Programmer class</a> 
                <a href="{{ url('/journalis-class') }}" class="dropdown-item">Journalis class</a> 
                <a href="{{ url('/tahfidzul-class') }}" class="dropdown-item">Tahfidzul quran class</a>
                <a href="{{ url('/chef-class') }}" class="dropdown-item">Chef class</a>  
                <a href="{{ url('/athlate-class') }}" class="dropdown-item">Athlate class</a> 
              </div>
            </li>

          @else 
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">person</i> {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="./index.html" class="dropdown-item">
                  <i class="material-icons">account_circle</i> Profil
                </a>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                  <i class="material-icons">close</i> Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                </form>
              </div>
            </li>
            @role('admin')
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                Halaman Admin
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="{{ url('/admin/specialis_class') }}" class="dropdown-item">Specialis Class</a> 
                <a href="{{ url('/admin/post') }}" class="dropdown-item">Post</a> 
                <a href="{{ url('/admin/pendaftaran-siswa') }}" class="dropdown-item">Pendaftaran Siswa</a> 
              </div>
            </li>
            @endrole
            
            <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                Specialis Class
              </a>
              <div class="dropdown-menu dropdown-with-icons">
                <a href="{{ url('/leader-class') }}" class="dropdown-item">Leader Ship</a>
                <a href="{{ url('/programmer-class') }}" class="dropdown-item">Programmer class</a> 
                <a href="{{ url('/journalis-class') }}" class="dropdown-item">Journalis class</a> 
                <a href="{{ url('/tahfidzul-class') }}" class="dropdown-item">Tahfidzul quran class</a>
                <a href="{{ url('/chef-class') }}" class="dropdown-item">Chef class</a>  
                <a href="{{ url('/athlate-class') }}" class="dropdown-item">Athlate class</a> 
              </div>
            </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/masjid.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          
        </div>
      </div>
    </div>
  </div>
 
    <div class="container"> 
        @yield('content') 
    </div> 

  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul> 
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="{{ url('/blog') }}">
              Blog
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li> 
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> SMAVA DEVELOPER
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

      $('#googlePlus').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-kit/index.html'
      });

    });
  </script>

@yield('scripts')
</body> 
</html>