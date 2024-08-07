@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)


@section('content')

   


<div class="back-video">
   <video autoplay loop muted play-inline >
       <source src="{{ asset('themplete/front') }}/Videos/y2mate.com - iPhone Xr Official Trailer_1080p(1).mp4"  type="video/mp4">  
   </video>
</div>

<div class="section">
   <div class="titles">
       <h1> Store.The best way to buy theproducts you love.  </h1>
   </div>
   <div class="services">
        <img src="{{ asset('themplete/front') }}/images/pexels-italo-melo-2379004.jpg" alt="service">
        <p>Need a Shopping help ? </p>
        <a href="#">Ask a Specialist</a> <br>
        <img src="{{ asset('themplete/front') }}/images/png-apple-logo-9711.png" alt="service">
        <p>Visit an Apple Store</p>
        <a href="#">Find One Near You</a>
   </div>
   
   </div>
   <div class="products">
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/5ec26e0b6c295800046c81db.png" alt="product">
           <a href="#">Macbook</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/airpods-32430.png" alt="product">
           <a href="#">AirPods</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/Apple-Watch-PNG-Transparent.png" alt="product">
           <a href="#" >iWatch</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/darkbomber-552585104b2a15720d3c0b661ce5945c.png" alt="product">
           <a href="#">I Phone</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/61d4a6218b51e20004664d4c.png" alt="product">
           <a href="#">i Pad</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/kisspng-apple-macbook-pro-intel-apple-imac-retina-4k-21-5-imac-retina-transparent-amp-png-clipart-free-dow-5cb6725ce50a57.7376126715554607009382.png" alt="product">
           <a href="#">Monitor</a>
       </div>
       <div class="product">
           <img src="{{ asset('themplete/front') }}/images/pngwing.com(1).png" alt="product">
           <a href="#">New Phones</a>
       </div>
</div>
<div class="card-container">
   <h1>The latest. Take a look at what’s new right now. </h1>
   <div class="cards">
        <div class="card">
           <span>LIMITED TIME OFFER</span>
           <h1>Save on Mac or iPad for university.</h1>
           <p>You’ll also save on Apple Pencil, Magic Keyboard for iPad</p>
           <img src="{{ asset('themplete/front') }}/images/Apple_new-macbookair-wallpaper-screen_11102020_big.jpg.large.jpg" alt="macbook">
        </div>
        <div class="card">
           <span>LIMITED TIME OFFER</span>
           <h1>MacBook Air 15. Buy Now </h1>
           <p>You’ll also save on Apple Pencil, Magic Keyboard for iPad</p>
           <img src="{{ asset('themplete/front') }}/images/Apple-WWDC23-MacBook-Air-15-in-hero-230605.jpg.news_app_ed.jpg" alt="macbook">
        </div>
        <div style="background: black;" class="card">
           <span style="color: white;" >LIMITED TIME OFFER</span>
           <h1 style="color: white;" >MacBook Air 15. Buy Now</h1>
           <p style="color: white;">You’ll also save on Apple Pencil, Magic Keyboard for iPad, get 20% off AppleCare+, and more.²</p>
           <img style="height: 180px;" src="{{ asset('themplete/front') }}/images/gsmarena_001.jpg" alt="iphone">
        </div>
   </div>
</div>
<div class="apple-events">
   <h1>
       Let's Explore Apple Events
       photos photos</h1>
       <div class="event-pictures">
           <img src="{{ asset('themplete/front') }}/images/APPLE-EVENT-SEP-2023-WALLPAPER-mod1.jpg" alt="events">
           <img src="{{ asset('themplete/front') }}/images/apple-event-wallpaper-iphone.png" alt="events">
       </div>
</div>
<div class="section-3">
   <img src="{{ asset('themplete/front') }}/images/iphone-14-mockup-png-890-download-96223.png" alt="phone">
   <h1> iphone14
       iPhone 14 Pro Leather Case <br>
       with MagSafe - Ink
       </h1>
</div>





 @endsection
