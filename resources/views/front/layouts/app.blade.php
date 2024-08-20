<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profil->nama_perusahaan }}</title>
    <link rel="stylesheet" href="{{ asset('themplete/front') }}/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/upload/profil/{{ $profil->favicon }}">
    <style>
    .ytp-button ytp-overflow-button ytp-overflow-button-visible{
        display: none !important;
        visibility: hidden !important;
    }
</style>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="">
        <div class="navbar w-full flex justify-around">
            <div class="container flex items-center justify-between w-full">

                <div class="logo">
                    <img src="/upload/profil/{{ $profil->gambar }}" alt="logo" width="80px;">
                </div>
                <ul id="nav-list">
                    <li> <a href="{{route('home.produk')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500 ">Product</a> </li>
                    <li> <a href="{{route('service')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">Services</a> </li>
                    <li> <a href="{{route('feature')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">Features</a> </li>
                    <li> <a href="{{route('promo')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">Promo</a> </li>
                    <li> <a href="{{route('location')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">Location</a> </li>
                    <img class="cross" src="{{ asset('themplete/front') }}/images/close-116-512.png" alt="cross">
                </ul>
                <div class="nav-icons flex">
                    <img src="{{ asset('themplete/front') }}/images/search-icon-png-9969(1).png" alt="search">
                    <img src="{{ asset('themplete/front') }}/images/shopping-bag.png" alt="shopping">
                    <img class="menuopen" src="{{ asset('themplete/front') }}/images/hamburger-menu-5.png" alt="menu">
                </div>
            </div>
        </div>









        @yield('content')








        <div class="bg-[#00000019]">

            <div class="container">

                <div class="flex  py-10  flex-wrap ">
                    <div class="w-full md:w-1/5 text-start md:text-center">
                        <p class="font-bold ">Apple Online Store</p>
                        <img src="{{ asset('themplete/front/images/png-apple-logo-9711.png') }}" class="w-32 h-10 md:mx-auto mb-5 md:mb-0" alt="logo">
                    </div>
                    <div class="flex flex-col md:flex-row justify-around flex-wrap w-full md:w-4/5 gap-4">
                        <ul class="space-y-2">
                            <li class="font-bold">Shop and Learn</li>
                            <li><a href="" class="text-gray-900 hover:underline">Store</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Mac</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">iPad</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">iPhone</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Watch</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">AirPods</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">TV & Home</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">AirTag</a></li>
                        </ul>
                        <ul class="space-y-2">
                            <li class="font-bold">Apple Podcasts</li>
                            <li><a href="" class="text-gray-900 hover:underline">Account</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Manage Your Apple ID</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Apple Store Account</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">iCloud.com</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Entertainment</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Apple TV+</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Apple Music</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Apple Arcade</a></li>
                        </ul>
                        <ul class="space-y-2">
                            <li class="font-bold">Apple Values</li>
                            <li><a href="" class="text-gray-900 hover:underline">Accessibility</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Environment</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Privacy</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Supplier Responsibility</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">About Apple</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Newsroom</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Apple Leadership</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Career Opportunities</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Ethics & Compliance</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Events</a></li>
                            <li><a href="" class="text-gray-900 hover:underline">Contact Apple</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Copyright © 2023 Apple Inc. All rights reserved. Privacy Policy Terms of Use Sales Policy Legal Site Map Design By Ophone </p>
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
</body>

</html>