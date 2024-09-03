@foreach ($products as $p )
<li>
    <a href="/product/{{$p->slug}}" class="globalnav-submenu-link">{{ $p->nama_produk }}</a>
</li>
    
@endforeach