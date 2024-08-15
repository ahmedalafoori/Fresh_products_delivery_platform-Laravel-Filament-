<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Farm | من نحن</title>
    <link rel="stylesheet" href="{{ asset('clinet/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('clinet/css/bootsrtap/bootstrap.css') }}" />
  </head>
  <body dir="rtl">
    <!-- Start Head and Nav  -->
    <div class="container-fluid">
      <div class="row">
        <header class="header">
          <div class="logo">
            <a href="{{ url('index.html') }}">
              <img src="{{ asset('clinet/images/heart.png') }}" width="50px" height="50px" />
              <label for="logo" class="gradient-text">My Farm</label>
            </a>
          </div>
          <nav class="nav">
            <a href="{{ url('/') }}">الرئيسية</a>
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

    <!-- Start About Us  -->
    <div class="about_us">
      <div class="about_us_icon"></div>
      <div>
        <h2 class="aboutus_description">
          نحن في My Farm نتيح لك كل ما تحتاج شراءه من المزرعة عن طريق التطبيق
          وبنقرة زر
        </h2>
      </div>
      <div class="additional_photo">
        <img src="{{ asset('clinet/images/additional_aboutus_picture.png') }}" alt="" />
      </div>
    </div>

    <div class="about_us" style="margin-top: -100px">
      <div class="about_us_icon"></div>
      <div>
        <h2 class="aboutus_description">
          من المزرعة إلى المائدة<br />
          يتضمن هذا المفهوم توصيل المنتجات الغذائية مباشرة من المزارع إلى
          المستهلكين. مما يقلل من عدد الوسطاء ويروج للمنتجات الطازجة والمحلية
        </h2>
      </div>
    </div>

    <div class="about_us">
      <div class="about_us_icon"></div>
      <div>
        <h2 class="aboutus_description">
          استمتع واقضي أجمل الأوقات بالشراء من المنزل
        </h2>
      </div>
    </div>
    <!-- End About Us  -->

    <!-- Start Footer  -->
    <footer class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-links">
            <a href="{{ url('index.html') }}" class="m-2">الرئيسية</a>
            <a href="{{ url('aboutus.html') }}" class="m-2">من نحن</a>
            <a href="{{ url('ourservices.html') }}" class="m-2">خدماتنا</a>
            <a href="{{ url('contactus.html') }}" class="m-2">تواصل معنا</a>
          </div>
          <hr style="margin-top: 28px; margin-left: -25px" />
          <div>
            <a href="#" class="m-3 copyright">Terms of Service</a>
            <a href="#" class="m-3 copyright">Privacy of Policy</a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="social">
            <a href="#">
              <i class="m-2">
                <img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/youtube.svg') }}" alt="" />
              </i>
            </a>
            <a href="#">
              <i class="m-2">
                <img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/vimeo.svg') }}" alt="" />
              </i>
            </a>
            <a href="#">
              <i class="m-2">
                <img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/twitter-x.svg') }}" alt="" />
              </i>
            </a>
            <a href="#">
              <i class="m-2">
                <img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/facebook.svg') }}" alt="" />
              </i>
            </a>
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
