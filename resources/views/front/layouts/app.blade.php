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

.navbar {
    position: relative;
}

ul#nav-list li {
    position: relative;
}

ul#nav-list .dropdown {
    display: none; 
    position: absolute;
    top: 100%;
    left: 0;
    width: 200px;

    background-color: white;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    border-radius: 8px;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    transform: translateY(10px);
    z-index: 10;
}

ul#nav-list li:hover .dropdown,
ul#nav-list li:focus-within .dropdown {
    display: block;
    opacity: 1;
    transform: translateY(0);
}


ul#nav-list .dropdown li {
    transition: background-color 1s ease;
}

ul#nav-list .dropdown li:hover {
    background-color: #f1f1f1;
    transition: background-color 3s ease;
}

.nav-icons img {
    margin-left: 15px;
    cursor: pointer;
}

</style>
    @vite('resources/css/app.css')
    @stack('css')
 </head>

<body>
    <div class="">
    <div class="navbar w-full flex justify-around">
    <div class="container flex items-center justify-between w-full">
        <div class="logo">
            <img src="/upload/profil/{{ $profil->gambar }}" alt="logo" width="80px">
        </div>
        <ul id="nav-list" class="relative">
            @php
                $menu = App\Models\Menu::all();
                $submenu = App\Models\SubMenu::all();
            @endphp
            @foreach ($menu as $m )
            <li> 
                <a href="{{route($m->slug)}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">{{$m->name}}</a> 
                <!-- Dropdown for Product -->
                @foreach ($submenu as $sm)
                @if ($sm->menu_id == $m->id)
                <ul class="dropdown hidden absolute bg-white shadow-lg rounded">
                    <li><a href="{{$sm->slug}}" class="block px-4 -ml-10 py-2 hover:bg-gray-100">{{$sm->name}}</a></li>
                </ul>
                @endif
                @endforeach
            </li>
                
            @endforeach
         
            <li> 
                <a href="{{route('location')}}" class="hover:underline hover:text-gray-700 hover:transition duration-500">Location</a> 
            </li>
            <img class="cross" src="{{ asset('themplete/front') }}/images/close-116-512.png" alt="cross">
        </ul>
        <div class="nav-icons flex">
            <img src="{{ asset('themplete/front') }}/images/search-icon-png-9969(1).png" alt="search">
            <a href="https://wa.me/{{$profil->no_wa}}">
                <img src="{{ asset('themplete/front') }}/images/wa.png" alt="shopping">
            </a>
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
                            <li class="font-bold">Company</li>
                            <li><a href="{{route('blog')}}" class="text-gray-900 hover:underline">Blog</a></li>
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
        <div id="searchModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Search</h2>
        <form action="{{route('product')}}" method="get" >
            <input type="text" id="searchInput" name="keyword" placeholder="Search here..." autofocus>
        </form>
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
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
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


   
</body>

</html>