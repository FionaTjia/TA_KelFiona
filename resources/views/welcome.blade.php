@extends('layouts.adminLTE')

@section('title', 'Selamat Datang')

@section('title-body','Sistem Informasi')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="/">Home</a></li>
  </ol>
@endsection

@section('content')
    <h1 style="text-align: center">UAS KAPITA SELEKTA - KELOMPOK FIONA TJIA</h1><br>
    <h2 style="text-align: center">Perancangan Sistem Informasi Point of Sales Berbasis Web Pada Rumah Makan Kokobop Chicken</h2>
@endsection


{{-- php artisan crud:generate Role --fields='name#string; guard_name#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Konsumen --fields='id_konsumen#string; nama_konsumen#string; hp_konsumen#string' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Supplier --fields='id_supplier#string; nama_supplier#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Category --fields='id_category#string; nama_category#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Produk --fields='id_produk#string; nama_produk#string; gambar_produk#string; hargaJual_produk#string; modal_produk#string; product_id_category#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Stok --fields='stok_id_produk#string; stok#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Purchase --fields='id_purchase#string; jumlah_purchase#string; harga#string; id_produk#string; id_supplier#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Sales --fields='id_sales#string; id_produk#string; id_konsumen#string; jumlah_sales#string; total_harga_sales#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html --}}