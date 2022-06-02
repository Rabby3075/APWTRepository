@extends('layout.home')
@section('content')
<div class="container">
<h1 class="text-success text-center fw-bold">Contact Us</h1>
</div>
<div class="footer">
          <div class="footer-header">
              <div>
                  <p class="header-link">Links</p>
                  <ol>
                      <li>Services</li>
                      <li>Contact</li>
        
                  </ol>
              </div>
          </div>

          <div class="footer-header">
            <div>
                <p class="header-link">Contact Us</p>
                <p class="footer-info">Contact us anytime at</p>
                <p class="footer-info">rashed.rabby43@gmail.com</p><br>
                <p class="footer-info">* All images from unsplash.com</p>
            </div>
        </div>

        <div class="footer-header">
            <div>
                <p class="header-link">Hours</p>
                <p class="footer-info">Monday-Friday</p>
                <p class="footer-info">9am - 5pm</p>
            </div>
        </div>

        <div class="footer-header">
            <div>
                <img  src="{{URL::asset('/image/facebook.png')}}" alt="twitter_icon" width="`15px" height="15px">
                <img  src="{{URL::asset('/image/youtube.png')}}" alt="twitter_icon" width="`15px" height="15px" ><br>
                <p class="header-link">© 2022</p>
            </div>
        </div>
      </div>
@endsection
