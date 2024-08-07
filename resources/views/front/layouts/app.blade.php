<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profil->nama_perusahaan }}</title>
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/upload/profil/{{ $profil->favicon }}">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="/upload/profil/{{ $profil->gambar }}" alt="logo" width="80px;">
            </div>
            <ul id="nav-list">
                <li> Product  </li>
                <li> Services </li>
                <li> Features </li>
                <li> Promo </li>
                <li>  Location </li>
               <img  class="cross" src="{{ asset('themplete/front') }}/images/close-116-512.png" alt="cross">
            </ul>
            <div class="nav-icons">
                <img src="{{ asset('themplete/front') }}/images/search-icon-png-9969(1).png" alt="search">
                <img src="{{ asset('themplete/front') }}/images/shopping-bag.png" alt="shopping">
                <img class="menuopen" src="{{ asset('themplete/front') }}/images/hamburger-menu-5.png" alt="menu">
            </div>
        </div>
        <div class="offers">
            <p>et up to ₹8000 instant savings on selected products with eligible HDFC Bank cards. Plus No Cost EMI from most leading banks.
                </p>
            <a href="#">See Offers </a>
        </div>
            







            @yield('content')









        <div class="menu-items">
            <div class="store">
                <img src="{{ asset('themplete/front') }}/images/png-apple-logo-9711.png" alt="logo">
                <p>Apple Online Store</p>
            </div>
            <div class="menu-list">
                <ul>
                    <li>Shop and Learn</li>
                    <li> Store</li>
                    <li>Mac</li>
                    <li>iPad </li>
                    <li>iPhone </li>
                    <li>Watch </li>
                    <li>AirPods </li>
                    <li> TV & Home </li>
                    <li>AirTag </li>
                </ul>
                <ul>
                    <li>Apple Podcasts </li>
                    <li>Account</li>
                    <li>Manage Your Apple ID</li>
                    <li> Apple Store Account</li>
                    <li> iCloud.com</li>
                    <li>Entertainment</li>
                    <li> Apple TV+</li>
                    <li> Apple Music</li>
                    <li>Apple Arcade</li>
                </ul>
                <ul>
                    <li>Apple Values</li>
                    <li>  Accessibility</li>
                    <li>  Environment</li>
                    <li> Privacy</li>
                    <li>  Supplier Responsibility</li>
                    <li>   About Apple </li>
                    <li>    Newsroom </li>
                    <li> Apple Leadership </li>
                    <li>  Career Opportunities </li>
                    <li> Ethics & Compliance </li>
                    <li>    Events </li>
                    <li>    Contact Apple </li>
                </ul>
            </div>
            <div class="footer">
                <p>Copyright © 2023 Apple Inc. All rights reserved. Privacy Policy Terms of Use Sales Policy Legal Site Map Design By Ophone </p>
            </div>
        </div>
    </div>
    <script>
      let nav_list = document.getElementById('nav-list')
      let openMenu = document.querySelector('.menuopen')
      let cross = document.querySelector('.cross')
      openMenu.addEventListener('click',()=>{
        nav_list.style.opacity = '100%'
        openMenu.style.display ='none'
      })
      cross.addEventListener('click',()=>{
        nav_list.style.opacity = '0%';
        setTimeout(()=>{
            openMenu.style.display ='block'
        },400)
      })

    </script>
</body>
</html>