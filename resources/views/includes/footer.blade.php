<style>
  .social-div i{
    font-size: 30px;
    padding: 10px;                
  }
  .links ul li{
    display: block;
  }
  .footer-content h6{
    margin-bottom: 0px;
  }
  .footer-content h6 hr{
    border: 2px solid white;
  }
</style>
<footer class="footer">  
  <div class="row">
    <div class="col-md-4 col-sm-4 footer-section">
      <div class="footer-content">
        <div class="row">
          <div class="col-md-12">
            <img src="{{asset('assets/images/logo.jpeg')}}" alt="site-logo" class="img img-fluid">    
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="social-div">
              <!-- Facebook -->
              <a href="https://www.facebook.com/">
                <i class="zmdi zmdi-facebook" style="color: #3b5998;"></i>
              </a>
              <!-- Instagram -->
              <a href="https://www.instagram.com/">
                <i class="zmdi zmdi-instagram" style="color: #ac2bac;"></i>
              </a>
              <!-- Linkedin -->
              <a href="https://www.linkedin.com/">
                <i class="zmdi zmdi-linkedin" style="color: #0082ca;"></i>
              </a>
              <!-- Pinterest -->
              <a href="https://www.pinterest.com/">
                <i class="zmdi zmdi-pinterest" style="color: #c61118;"></i>
              </a>
              <!-- Youtube -->
              <a href="https://www.youtube.com/">
                <i class="zmdi zmdi-youtube" style="color: #ed302f;"></i>
              </a>
              <!-- Whatsapp -->
              <a href="https://www.whatsapp.com/">
                <i class="zmdi zmdi-whatsapp" style="color: #25d366;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            For Business or Blog post contact</br>
            <a href="mailto:admin@couponpercentoff.com">admin@couponpercentoff.com</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 footer-section">
      <div class="footer-content links">
        <h6>Links<hr></h6>
        <ul>
          <li>
            <a href="{{route('home')}}">Home</a>
          </li>
          <li>
            <a href="{{route('home.blogs')}}">Blog</a>
          </li>
          <li>
            <a href="{{route('home.terms-and-conditions')}}">Terms & Conditions</a>
          </li>
          <li>
            <a href="{{route('home.privacy-policy')}}">Privacy Policy</a>
          </li>
          <li>
            <a href="{{route('home.disclaimer')}}">Disclaimer</a>
          </li>
          <li>
            <a href="{{route('home.about-us')}}">About Us</a>
          </li>
          <li>
            <a href="{{route('home.contact-us')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 footer-section">
      <div class="footer-content links">
        <h6>Categories<hr></h6>
        <ul>
          <li>
            <a href="{{route('home.category','automotive')}}">Automotive</a>
          </li>
          <li>
            <a href="{{route('home.category','sports-fitness-outdoors')}}">SPORTS, FITNESS & OUTDOORS</a>
          </li>
          <li>
            <a href="{{route('home.category','technology')}}">TECHNOLOGY</a>
          </li>
          <li>
            <a href="{{route('home.category','home-and-garden')}}">HOME AND GARDEN</a>
          </li>
          <li>
            <a href="{{route('home.category','legal-services')}}">LEGAL SERVICES</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-12 footer-section">
      <div class="footer-content text-center">
        Copyright © 2022 – {{date('Y')}} Coupon Percent Off
      </div>
    </div>
  </div>
</footer>