@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)

<style>
    .price-wrapper {
        min-height: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .price-wrapper .original-price {
        font-size: smaller;
        text-decoration: line-through;
    }
</style>

@section('content')
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="card-container   py-16  gap-5">
    <h1 class="text-2xl font-medium">All Product </h1>
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
@endsection