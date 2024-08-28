<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profil->nama_perusahaan }}</title>
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/upload/profil/{{ $profil->favicon }}">
    <style>
        .ytp-button ytp-overflow-button ytp-overflow-button-visible {
            display: none !important;
            visibility: hidden !important;
        }
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 20px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #searchInput {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
        }

        #searchResults {
            margin-top: 20px;
        }
    </style>

    <style>
        .menu nav {
            ul {
                letter-spacing: -.3em;

                li {
                    background-color: transparent;
                    display: inline-block;
                    font-size: 13px;
                    letter-spacing: normal;

                    &.navParent {
                        position: relative;
                    }

                    a {
                        background-color: transparent;
                        color: #160b0a;
                        display: block;
                        padding: 12px;
                        text-decoration: none;

                        &:hover {
                            opacity: .8;
                        }
                    }

                    .navChild {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100vw;
                        height: 50vh;
                        z-index: -1;
                        /* blur sisa hieght */


                        background-color: #fafafc;

                        .navChildContainer {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: start;
                            gap: 10rem;
                            align-items: start;
                            width: 100%;
                            max-width: 1200px;
                            margin: 0 auto;
                            padding-left: 5rem;
                            padding-top: 3rem;
                            box-sizing: border-box;

                            .submenu-header {

                                font-size: 12px;
                                line-height: 1.3333733333;
                                font-weight: 400;
                                margin-left: 1rem;
                                letter-spacing: -.01em;
                                font-family: SF Pro Text, SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif;
                                color: rgb(110, 110, 115);
                                display: block;
                            }

                            li {
                                display: block;
                                margin: 0;

                                background: transparent;

                                a {
                                    font-size: 17px;
                                    margin-top: 5px;
                                    line-height: 1.1428571429;
                                    font-weight: 600;
                                    letter-spacing: 0.007em;
                                    font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
                                    color: #161617;
                                }
                            }
                        }
                    }
                }
            }
        }
    </style>

      <style>
      @import url(https://fonts.googleapis.com/css?family=Ek+Mukta:200);
body {
  margin: 0;
  line-height: 1.4;
  background: #E1E1E1;
}

.containernav {
  position: relative;
  display: block;
  overflow: hidden;
  height: 100%;
  transition: height  0.5s ease-in-out;


}
.containernav .header {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  height: 50px;
  width: 100%;
  background: #fafafc;
  overflow: hidden;
  transition: all 0.5s ease-out, background 1s ease-out;
  transition-delay: 0.2s;
  z-index: 1;
}
.containernav .header .burger-container {
  position: relative;
  display: inline-block;
  height: 50px;
  width: 50px;
  cursor: pointer;
  transform: rotate(0deg);
  transition: all 0.3s cubic-bezier(0.4, 0.01, 0.165, 0.99);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-tap-highlight-color: transparent;
}
.containernav .header .burger-container #burger {
  width: 18px;
  height: 8px;
  position: relative;
  display: block;
  margin: -4px auto 0;
  top: 50%;
}
.containernav .header .burger-container #burger .bar {
  width: 100%;
  height: 1px;
  display: block;
  position: relative;
  background: #160b0a;
  transition: all 0.3s cubic-bezier(0.4, 0.01, 0.165, 0.99);
  transition-delay: 0s;
}
.containernav .header .burger-container #burger .bar.topBar {
  transform: translateY(0px) rotate(0deg);
}
.containernav .header .burger-container #burger .bar.btmBar {
  transform: translateY(6px) rotate(0deg);
}
.containernav .header .icon {
  display: inline-block;
  position: absolute;
  height: 100%;
  line-height: 50px;
  width: 50px;
  height: 50px;
  text-align: center;
  color: #160b0a;
  font-size: 22px;
  left: 50%;
  transform: translateX(-50%);
}
.containernav .header .icon.icon-bag {
  right: 0;
  top: 0;
  left: auto;
  transform: translateX(0px);
  transition: transform 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99);
  transition-delay: 0.65s;
}
.containernav .header ul.menu {
  position: relative;
  display: block;
  padding: 0px 48px 0;
  list-style: none;
}
.containernav .header ul.menu li.menu-item {

  border-bottom: 1px solid #333;
  margin-top: 5px;
  transform: scale(1.15) translateY(-30px);
  opacity: 0;
  transition: transform 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99), opacity 0.6s cubic-bezier(0.4, 0.01, 0.165, 0.99);
}
.containernav .header ul.menu li.menu-item:nth-child(1) {
  transition-delay: 0.49s;
}
.containernav .header ul.menu li.menu-item:nth-child(2) {
  transition-delay: 0.42s;
}
.containernav .header ul.menu li.menu-item:nth-child(3) {
  transition-delay: 0.35s;
}
.containernav .header ul.menu li.menu-item:nth-child(4) {
  transition-delay: 0.28s;
}
.containernav .header ul.menu li.menu-item:nth-child(5) {
  transition-delay: 0.21s;
}
.containernav .header ul.menu li.menu-item:nth-child(6) {
  transition-delay: 0.14s;
}
.containernav .header ul.menu li.menu-item:nth-child(7) {
  transition-delay: 0.07s;
}
.containernav .header ul.menu li.menu-item a {
   padding-left: 1rem;
  display: block;
  position: relative;
  color: #160b0a;
  font-family: "Ek Mukta", sans-serif;
  font-weight: 100;
  text-decoration: none;
  font-size: 22px;
  line-height: 2.35;
  font-weight: 200;
  width: 100%;
}
.containernav .header.menu-opened {
  height: 100%;
  background-color:#fafafc;
  transition: all 0.3s ease-in, background 0.5s ease-in;
  transition-delay: 0.25s;
}
.containernav .header.menu-opened .burger-container {
  transform: rotate(90deg);
}
.containernav .header.menu-opened .burger-container #burger .bar {
  transition: all 0.4s cubic-bezier(0.4, 0.01, 0.165, 0.99);
  transition-delay: 0.2s;
}
.containernav .header.menu-opened .burger-container #burger .bar.topBar {
  transform: translateY(4px) rotate(45deg);
}
.containernav .header.menu-opened .burger-container #burger .bar.btmBar {
  transform: translateY(3px) rotate(-45deg);
}
.containernav .header.menu-opened ul.menu li.menu-item {
  transform: scale(1) translateY(0px);
  opacity: 1;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(1) {
  transition-delay: 0.27s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(2) {
  transition-delay: 0.34s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(3) {
  transition-delay: 0.41s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(4) {
  transition-delay: 0.48s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(5) {
  transition-delay: 0.55s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(6) {
  transition-delay: 0.62s;
}
.containernav .header.menu-opened ul.menu li.menu-item:nth-child(7) {
  transition-delay: 0.69s;
}
.containernav .header.menu-opened .icon.icon-bag {
  transform: translateX(75px);
  transition-delay: 0.3s;
}
.containernav .content {
  font-family: "Ek Mukta", sans-serif;
  padding: 67px 4% 0;
  text-align: justify;
  overflow: scroll;
  max-height: 100%;
}
.containernav .content::-webkit-scrollbar {
  display: none;
}
.containernav .content h2 {
  margin-bottom: 0px;
  letter-spacing: 1px;
}
.containernav .content img {
  width: 95%;
  position: relative;
  display: block;
  margin: 75px auto 75px;
}
.containernav .content img:nth-of-type(2) {
  margin: 75px auto;
}
@media (max-width: 600px) {

  .containernav .header {
    position: fixed;
  }
}
@media(max-width: 600px) {
  .containernav .content {
    padding: 67px 4% 0;
  }
  #globalnav{
   display: none;
  }
}
     </style>
     <style>
#search{
  /* translate x */
  transform: translateX(230px);
  padding: 0;
}
.navParent a{
  transform: translateY(-15px);
}
#searchInput{
  /* input style */
  transform: translateY(40px);
}
     </style>

    <link rel="stylesheet" href="{{asset('assets-globalheader.css')}}">
    @vite('resources/css/app.css')
    @stack('css')
</head>

<body>
<div id="globalheader">
      <aside id="globalmessage-segment" lang="en-US" dir="ltr" class="globalmessage-segment">
         <ul data-strings='{"view":"{%STOREFRONT%} Store Home","segments":{"smb":"Business Store Home","eduInd":"Education Store Home","other":"Store Home"},"exit":"Exit"}'
            class="globalmessage-segment-content"></ul>
      </aside>
      <nav id="globalnav" class="z-10" lang="en-US" dir="ltr" aria-label="Global"
         data-analytics-element-engagement-start="globalnav:onFlyoutOpen"
         data-analytics-element-engagement-end="globalnav:onFlyoutClose" data-store-api="/[storefront]/shop/bag/status"
         data-analytics-activitymap-region-id="global nav" data-analytics-region="global nav" class="globalnav js    ">
         <div class="globalnav-content ">
            <div class="globalnav-item globalnav-menuback">
               <button aria-label="Main menu" class="globalnav-menuback-button">
                  <span class="globalnav-chevron-icon">
                     <svg height="48" viewbox="0 0 9 48" width="9" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="m1.5618 24.0621 6.5581-6.4238c.2368-.2319.2407-.6118.0088-.8486-.2324-.2373-.6123-.2407-.8486-.0088l-7 6.8569c-.1157.1138-.1807.2695-.1802.4316.001.1621.0674.3174.1846.4297l7 6.7241c.1162.1118.2661.1675.4155.1675.1577 0 .3149-.062.4326-.1846.2295-.2388.2222-.6187-.0171-.8481z">
                        </path>
                     </svg>
                  </span>
               </button>
            </div>
            <ul id="globalnav-list" class="globalnav-list">
               <li data-analytics-element-engagement="globalnav hover - apple"
                  class="globalnav-item globalnav-item-apple">
                  <a href="/" data-globalnav-item-name="apple" data-analytics-title="apple home"
                     aria-label="Apple" class="globalnav-link globalnav-link-apple">
                     <img src="/upload/profil/{{ $profil->gambar }}" alt="logo" width="80px">

                     <span class="globalnav-image-compact globalnav-link-image">
                        <svg height="48" viewBox="0 0 17 48" width="17" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="m15.5752 19.0792a4.2055 4.2055 0 0 0 -2.01 3.5376 4.0931 4.0931 0 0 0 2.4908 3.7542 9.7779 9.7779 0 0 1 -1.2755 2.6351c-.7941 1.1431-1.6244 2.2862-2.8878 2.2862s-1.5883-.734-3.0443-.734c-1.42 0-1.9252.7581-3.08.7581s-1.9611-1.0589-2.8876-2.3584a11.3987 11.3987 0 0 1 -1.9373-6.1487c0-3.61 2.3464-5.523 4.6566-5.523 1.2274 0 2.25.8062 3.02.8062.734 0 1.8771-.8543 3.2729-.8543a4.3778 4.3778 0 0 1 3.6822 1.841zm-6.8586-2.0456a1.3865 1.3865 0 0 1 -.2527-.024 1.6557 1.6557 0 0 1 -.0361-.337 4.0341 4.0341 0 0 1 1.0228-2.5148 4.1571 4.1571 0 0 1 2.7314-1.4078 1.7815 1.7815 0 0 1 .0361.373 4.1487 4.1487 0 0 1 -.9867 2.587 3.6039 3.6039 0 0 1 -2.5148 1.3236z">
                           </path>
                        </svg>
                     </span>
                     <span class="globalnav-link-text">Apple</span>
                  </a>

               </li>

               <li data-topnav-flyout-item="menu" data-topnav-flyout-label="Menu" role="none"
                  class="globalnav-item globalnav-menu">
                  <div class="menu">
                     <nav>
                        <ul>
                        @php
                        $menu = App\Models\Menu::all();
                        $submenu = App\Models\SubMenu::all();
                        @endphp
                        @foreach ($menu as $m)
                           <li class="navParent">
                              <a href="{{ route($m->slug) }}">{{ $m->name }}</a>
                              <div class="navChild">
                                 <div class="navChildContainer">
                                    <div>

                                       <ul>
                                       @foreach ($submenu as $sm)
                                       @if ($sm->menu_id == $m->id)
                                          <li>
                                          <a href="#" class="globalnav-submenu-link" >{{ $sm->name }}</a>
                                          </li>
                                          @endif
                                          @endforeach

                                       </ul>
                                    </div>

                                 </div>
                              </div>
                           </li>
                        @endforeach
                        <li class="navParent " >
                        <a href="" id="search"><svg
                              xmlns="http://www.w3.org/2000/svg" width="15px" height="44px" viewbox="0 0 15 44">
                              <path
                                 d="M14.298,27.202l-3.87-3.87c0.701-0.929,1.122-2.081,1.122-3.332c0-3.06-2.489-5.55-5.55-5.55c-3.06,0-5.55,2.49-5.55,5.55 c0,3.061,2.49,5.55,5.55,5.55c1.251,0,2.403-0.421,3.332-1.122l3.87,3.87c0.151,0.151,0.35,0.228,0.548,0.228 s0.396-0.076,0.548-0.228C14.601,27.995,14.601,27.505,14.298,27.202z M1.55,20c0-2.454,1.997-4.45,4.45-4.45 c2.454,0,4.45,1.997,4.45,4.45S8.454,24.45,6,24.45C3.546,24.45,1.55,22.454,1.55,20z">
                              </path>
                           </svg>
                          </a>
                        </span>
                           </svg>
                              <div class="navChild">
                                 <div class="navChildContainer">
                                    <div>

                                    <form action="{{ route('product') }}" method="get">
                        <input type="text" id="searchInput" name="keyword" placeholder="Search here..." autofocus>
                    </form>
                                    </div>

                                 </div>
                              </div>
                           </li>



                        </ul>
                     </nav>
                  </div>

               </li>



               <li id="globalnav-bag" data-analytics-region="bag" class="globalnav-item globalnav-bag">
                  <div class="globalnav-bag-wrapper">
                     <a role="button" id="globalnav-menubutton-link-bag" href="bag.html" aria-label="Shopping Bag"
                        data-globalnav-item-name="bag" data-topnav-flyout-trigger-regular="true"
                        data-topnav-flyout-trigger-compact="true" data-analytics-title="open - bag"
                        class="globalnav-link globalnav-link-bag">
                        <span class="globalnav-image-regular">
                           <svg height="44" viewbox="0 0 14 44" width="14" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="m11.3535 16.0283h-1.0205a3.4229 3.4229 0 0 0 -3.333-2.9648 3.4229 3.4229 0 0 0 -3.333 2.9648h-1.02a2.1184 2.1184 0 0 0 -2.117 2.1162v7.7155a2.1186 2.1186 0 0 0 2.1162 2.1167h8.707a2.1186 2.1186 0 0 0 2.1168-2.1167v-7.7155a2.1184 2.1184 0 0 0 -2.1165-2.1162zm-4.3535-1.8652a2.3169 2.3169 0 0 1 2.2222 1.8652h-4.4444a2.3169 2.3169 0 0 1 2.2222-1.8652zm5.37 11.6969a1.0182 1.0182 0 0 1 -1.0166 1.0171h-8.7069a1.0182 1.0182 0 0 1 -1.0165-1.0171v-7.7155a1.0178 1.0178 0 0 1 1.0166-1.0166h8.707a1.0178 1.0178 0 0 1 1.0164 1.0166z">
                              </path>
                           </svg>
                        </span>
                        <span class="globalnav-image-compact">
                           <svg height="48" viewbox="0 0 17 48" width="17" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="m13.4575 16.9268h-1.1353a3.8394 3.8394 0 0 0 -7.6444 0h-1.1353a2.6032 2.6032 0 0 0 -2.6 2.6v8.9232a2.6032 2.6032 0 0 0 2.6 2.6h9.915a2.6032 2.6032 0 0 0 2.6-2.6v-8.9231a2.6032 2.6032 0 0 0 -2.6-2.6001zm-4.9575-2.2768a2.658 2.658 0 0 1 2.6221 2.2764h-5.2442a2.658 2.658 0 0 1 2.6221-2.2764zm6.3574 13.8a1.4014 1.4014 0 0 1 -1.4 1.4h-9.9149a1.4014 1.4014 0 0 1 -1.4-1.4v-8.9231a1.4014 1.4014 0 0 1 1.4-1.4h9.915a1.4014 1.4014 0 0 1 1.4 1.4z">
                              </path>
                           </svg>
                        </span>
                     </a>
                     <span aria-hidden="true" data-analytics-title="open - bag" class="globalnav-bag-badge"><span
                           class="globalnav-bag-badge-separator"></span><span
                           class="globalnav-bag-badge-number">0</span><span
                           class="globalnav-bag-badge-unit">+</span></span>
                  </div>
                  <div id="globalnav-submenu-bag" aria-labelledby="globalnav-menubutton-link-bag"
                     class="globalnav-flyout globalnav-submenu">
                     <div class="globalnav-flyout-scroll-container">
                        <div class="globalnav-flyout-content globalnav-submenu-content"></div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>

      </nav>

      <div class="containernav">

         <div class="header">
            <div class="burger-container">
               <div id="burger">
                  <div class="bar topBar"></div>
                  <div class="bar btmBar"></div>
               </div>
            </div>
            <div class="icon icon-apple"></div>
            <ul class="menu">
               <li class="menu-item"><a href="#">Mac</a></li>
               <li class="menu-item"><a href="#">iPad</a></li>
               <li class="menu-item"><a href="#">iPhone</a></li>
               <li class="menu-item"><a href="#">Watch</a></li>
               <li class="menu-item"><a href="#">TV</a></li>
               <li class="menu-item"><a href="#">Music</a></li>
               <li class="menu-item"><a href="#">Support</a></li>
            </ul>
            <div class="shop icon icon-bag"></div>
         </div>
      </div>


      <div id="globalnav-curtain" class="globalnav-curtain"></div>
      <div id="globalnav-placeholder" class="globalnav-placeholder"></div>
   </div>




        @yield('content')








        <div class="bg-[#00000019]">

            <div class="container">

                <div class="flex  py-10  flex-wrap ">
                    <div class="w-full md:w-1/5 text-start md:text-center">
                        <p class="font-bold ">Apple Online Store</p>
                        <img src="{{ asset('themplete/front/images/png-apple-logo-9711.png') }}"
                            class="w-32 h-10 md:mx-auto mb-5 md:mb-0" alt="logo">
                    </div>
                    <div class="flex flex-col md:flex-row justify-around flex-wrap w-full md:w-4/5 gap-4">
                        <ul class="space-y-2">
                            <li class="font-bold">Shop and Learn</li>
                            @foreach ($shopAndLearnFooters as $p)
                            <li><a href="{{ $p->link }}" class="text-gray-900 hover:underline">{{ $p->nama_footer }}</a></li>
                            @endforeach

                        </ul>
                        <ul class="space-y-2">
                            <li class="font-bold">Company</li>
                            @foreach ($companyFooters as $p)
                            <li><a href="{{ $p->link }}" class="text-gray-900 hover:underline">{{ $p->nama_footer }}</a></li>
                            @endforeach
                        </ul>
                        <ul class="space-y-2">
                            <li class="font-bold">Apple Values</li>
                            @foreach ($valueFooters as $p)
                            <li><a href="{{ $p->link }}" class="text-gray-900 hover:underline">{{ $p->nama_footer }}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div id="searchModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Search</h2>
                <form action="{{ route('product') }}" method="get">
                    <input type="text" id="searchInput" name="keyword" placeholder="Search here..." autofocus>
                </form>
            </div>
        </div>

        <div class="footer">
            <p>Copyright © {{ date('Y') }} {{ $profil->nama_perusahaan }}. All rights reserved. Privacy Policy Terms of Use Sales Policy Legal Site Map
                Design By {{ $profil->nama_perusahaan }} </p>
        </div>
    </div>
    <script>
        let nav_list = document.getElementById('nav-list')
        let openMenu = document.querySelector('.menuopen')
        let cross = document.querySelector('.cross')
        openMenu.addEventListener('click', () => {
            nav_list.style.opacity = '100%'
            openMenu.style.display = 'none'
        })
        cross.addEventListener('click', () => {
            nav_list.style.opacity = '0%';
            setTimeout(() => {
                openMenu.style.display = 'block'
            }, 400)
        })
    </script>
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var modal = $('#searchModal');
            var span = $('.close');

            $('.nav-icons img[src$="search-icon-png-9969(1).png"]').on('click', function() {
                modal.show();
            });
            span.on('click', function() {
                modal.hide();
            });
            $(window).on('click', function(event) {
                if ($(event.target).is(modal)) {
                    modal.hide();
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
         $(function(){
           $(".navParent").hover(
             function() {
               $(this).find('.navChild').stop().slideDown('slow').css('display', 'flex');

               $('.main').slideDown('slow').css('filter', 'blur(10px)');
             },
             function() {
               $(this).find('.navChild').stop().slideUp('slow');
               $('.main').css('filter', 'blur(0px)');
             }
           );
         });
         </script>
        <script>
   (function () {
    var burger = document.querySelector(".burger-container"),
        header = document.querySelector(".header"),
        containernav = document.querySelector(".containernav");

    burger.onclick = function () {

        if (containernav.style.height === "100vh") {
            // animation remove style

            containernav.style.height = "0";
        } else {
            containernav.style.height = "100vh";
        }
        header.classList.toggle("menu-opened");
    };
})();

         </script>


</body>

</html>
