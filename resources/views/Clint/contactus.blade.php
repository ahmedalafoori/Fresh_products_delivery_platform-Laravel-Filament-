<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Farm | تواصل معنا</title>
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

    <!-- Start Contact Us -->
    <div class="contt">
      <div class="container" style="display: flex">
        <div class="row contact_form">
          <h2 class="display-6 text-center fw-bold">تواصل معنا</h2>
          <form action="">
            <div class="contact_field col-12">
              <input type="text" name="name" id="name" placeholder="الاسم كامل" />
            </div>
            <div class="contact_field">
              <input type="email" name="email" id="email" placeholder="الإيميل" />
            </div>
            <div class="contact_field">
              <textarea name="message" id="message" placeholder="نص الرسالة" class="bg-light pt-4"></textarea>
            </div>
            <div>
              <input
                type="submit"
                value="إرسال"
                name="submit"
                class="btn btn-success rounded-pill text-light contact_button"
              />
            </div>
            <div class="contact_icon">
              <a href="#"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/twitter-x.svg') }}" alt="Twitter" /></a>
              <a href="#"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/instagram.svg') }}" alt="Instagram" /></a>
              <a href="#"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/facebook.svg') }}" alt="Facebook" /></a>
            </div>
            <label for="contact-email" class="copyright">bigcart@green.com</label>
          </form>
        </div>
        <div>
          <img
            src="{{ asset('clinet/images/contact.png') }}"
            class="additional_photo contact_additional"
            alt="Contact"
          />
        </div>
      </div>
    </div>
    <div>
      <label class="bg-light m-5"></label>
    </div>
    <!-- End Contact Us -->

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
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/youtube.svg') }}" alt="YouTube" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/vimeo.svg') }}" alt="Vimeo" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/twitter-x.svg') }}" alt="Twitter" /></i></a>
            <a href="#"><i class="m-2"><img src="{{ asset('clinet/images/bootstrap-icons-1.11.3/facebook.svg') }}" alt="Facebook" /></i></a>
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
