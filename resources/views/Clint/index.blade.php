<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Farm</title>
    <link rel="stylesheet" href="{{ asset('clinet/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('clinet/css/bootsrtap/bootstrap.css') }}" />
  </head>
  <body dir="rtl">
    <!-- Start Head and Nav  -->
    <div class="container-fluid">
      <div class="row">
        <header class="header">
          <div class="logo">
            <a href="{{ url('index') }}">
              <img src="{{ asset('clinet/images/heart.png') }}" width="50px" height="50px" />
              <label for="logo" class="gradient-text">My Farm</label>
            </a>
          </div>
          <nav class="nav">
            <a href="{{ url('index') }}">الرئيسية</a>
            <a href="{{ url('aboutus') }}">من نحن</a>
            <a href="{{ url('ourservices') }}">خدماتنا</a>
            <a href="{{ url('contactus') }}">تواصل معنا</a>
          </nav>
          <div>
            <a href="{{ url('register') }}" class="nav_button1">انشاء حساب</a>
            <a href="{{ url('login') }}" class="nav_button2">تسجيل دخول</a>
          </div>
        </header>
        <hr />
      </div>
    </div>
    <div class="bg-light">
      <label class="bg-light m-3"></label>
    </div>
    <!-- End Head and Nav  -->

    <!-- Start Content  -->
    <section class="hero">
      <h1 class="title">
        يهدف My Farm لتوصيل كافة المنتجات الزراعية عن طريق التطبيق وتسهيل الشراء
        من المزرعة مباشرة لمنتجات طازجة أكثر جودة
      </h1>
    </section>
    <!-- End Content  -->

    <!-- Start Footer  -->
    <footer class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-links">
            <a href="{{ url('index') }}" class="m-2">الرئيسية</a>
            <a href="{{ url('aboutus') }}" class="m-2">من نحن</a>
            <a href="{{ url('ourservices') }}" class="m-2">خدماتنا</a>
            <a href="{{ url('contactus') }}" class="m-2">تواصل معنا</a>
          </div>
          <hr style="margin-top: 28px; margin-left: -25px" />
          <div>
            <a href="{{ url('terms') }}" class="m-3 copyright">Terms of Service</a>
            <a href="{{ url('privacy') }}" class="m-3 copyright">Privacy of Policy</a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="social">
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/youtube.svg') }}" alt="" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/vimeo.svg') }}" alt="" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/twitter-x.svg') }}" alt="" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/facebook.svg') }}" alt="" /></i></a>
          </div>
          <hr />
          <div class="copyright">My Farm All rights reserved &copy; 2024</div>
        </div>
      </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start Script  -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".header .nav a");
        const currentUrl = window.location.href;

        navLinks.forEach((link) => {
          if (link.href === currentUrl) {
            link.classList.add("active");
          }
        });
      });
    </script>
    <!-- End Script  -->
  </body>
</html>
