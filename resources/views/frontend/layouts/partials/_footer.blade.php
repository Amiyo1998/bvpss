<div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
                <h3>{{ $setting->name}}<span>.</span></h3>
                <p>
                    {{ $setting->address}} <br><br>
                    <strong>Phone:</strong> {{ $setting->number}}<br>
                    <strong>Email:</strong> {{ $setting->email}}<br>
                </p>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home')}}">{{__('Home')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about')}}">{{__('About us')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog')}}">{{__('Blog')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact-us')}}">{{__('Contact')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login')}}">{{__('Login')}}</a></li>
          </ul>
        </div>

        {{-- <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $setting->copyright}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="{{ $setting->twitter}}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="{{ $setting->facebook}}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="{{ $setting->instagram}}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="{{ $setting->skype}}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="{{ $setting->linkedin}}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
