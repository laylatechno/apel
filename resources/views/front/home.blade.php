@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)

@section('content')



<div class="offers md:pt-10 text-md">
            <p class="text-sm">et up to ₹8000 instant savings on selected products with eligible HDFC Bank cards. Plus No Cost EMI from most leading banks.
                </p>
            <a href="#" class="text-blue-500">See Offers </a>
        </div>
<div class="back-video">
    <video autoplay loop muted play-inline>
        <source src="video.mp4" type="video/mp4">
    </video>
    <!-- <iframe src="https://www.youtube.com/embed/zXJbdtxh0XE?autoplay=1&mute=1&controls=0&rel=0&modestbranding=1&showinfo=0" frameborder="0"
    style="width: 100%; height: calc(100vw * 9 / 16); max-width: 1920px; max-height: 1080px; margin: 0 auto; display: block; border: none;" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" 
    allowfullscreen></iframe> -->

</div>

<div class="section ">
    <div class="container flex">

        <div class="text-center md:text-start text-lg">
        <h1> Store.The best way to buy theproducts you love. </h1>

        </div>
       
    </div>

</div>
<div class="products py-10">
    
    <div class="container flex md:justify-between justify-center md:gap-0 w-full flex-wrap items-center gap-3">
        @foreach ($kategori_produk as $p)
        <div class="product md:w-[12%] w-[45%] bg-gray-100 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            
            <img src="/upload/kategori_produk/{{ $p->gambar }}" alt="{{ $p->nama_kategori_produk }}" class=" w-[80%]" >
            <a href="">{{ $p->nama_kategori_produk }}</a>
        </div>
        @endforeach
        
        {{-- <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300 ">
            <img src="{{ asset('themplete/front') }}/images/airpods-32430.png" alt="product" class="">
            <a href="#">AirPods</a>
        </div>
        <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            <img src="{{ asset('themplete/front') }}/images/Apple-Watch-PNG-Transparent.png" alt="product" class="">
            <a href="#">iWatch</a>
        </div>
        <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            <img src="{{ asset('themplete/front') }}/images/darkbomber-552585104b2a15720d3c0b661ce5945c.png" alt="product" class="">
            <a href="#">I Phone</a>
        </div>
        <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            <img src="{{ asset('themplete/front') }}/images/61d4a6218b51e20004664d4c.png" alt="product" class="">
            <a href="#">i Pad</a>
        </div>
        <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            <img src="{{ asset('themplete/front') }}/images/kisspng-apple-macbook-pro-intel-apple-imac-retina-4k-21-5-imac-retina-transparent-amp-png-clipart-free-dow-5cb6725ce50a57.7376126715554607009382.png" alt="product" class="">
            <a href="#">Monitor</a>
        </div>
        <div class="product md:w-[12%] w-[45%] bg-gray-50 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">
            <img src="{{ asset('themplete/front') }}/images/pngwing.com(1).png" alt="product" class="">
            <a href="#">New Phones</a>
        </div> --}}
    </div>
</div>
<div class="card-container   gap-5">
    <h1 class="text-2xl font-medium">The latest. Take a look at what’s new right now. </h1>
    <div class="cards flex justify-center gap-5">
         @foreach ($produk as $p)
        <div class="card md:w-1/4 w-full">
            <span class="text-lg text-red-700"><b>{{ $p->kategoriProduk->nama_kategori_produk }}</b></span>
            <a href="{{ route('produk_sale.produk_sale_detail', $p->slug) }}">
            <h1 class="font-bold text-3xl text-gray-900">{{ $p->nama_produk }}.</h1>
            <p class="text-gray-600"><b>Rp. {{ number_format($p->harga_jual, 0, ',', '.') }}</b></p>
            <a href="{{ route('produk_sale.produk_sale_detail', $p->slug) }}">
                <img src="/upload/produk/{{ $p->gambar }}" class="m-auto" alt="{{ $p->nama_produk }}">
            </a>
         
        </div>
        @endforeach
        
       
    </div>
</div>
<div class="apple-events">
    <h1 class="text-2xl font-medium leading-5 tracking-wide">
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