@extends('layouts.adminLTE')

@section('title', 'Selamat Datang')

@section('title-body','Sistem Informasi')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="/">Home</a></li>
  </ol>
@endsection

@section('content')
    <h1>UAS KAPITA SELEKTA - KELOMPOK FIONA TJIA</h1>
    <h2>PERANCANGAN SISTEM INFORMASI POINT OF SALES BERBASIS WEB PADA RUMAH MAKAN KOKOBOP CHICKE</h2>
@endsection
    
Item Type
# Colomn Name Type Null Default
UK code varchar (20) No
description varchar (255) No


php artisan crud:generate ItemType --fields='code#string; description#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Tabel Item Category
# Colomn Name Type Null Default
UK code varchar (20) No
description varchar (255) No


php artisan crud:generate ItemCategory --fields='code#string; description#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html


Tabel Role
# Colomn Name Type Null Default

name varchar (255) No
guard_name varchar (255) No



php artisan crud:generate Role --fields='name#string; guard_name#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html


php artisan crud:generate Konsumen --fields='id_konsumen#string; nama_konsumen#string; hp_konsumen#string' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Supplier --fields='id_supplier#string; nama_supplier#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Category --fields='id_category#string; nama_category#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Produk --fields='id_produk#string; nama_produk#string; hargaJual_produk#string; modal_produk#string; product_id_category#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

php artisan crud:generate Stok --fields='id_stok#string; stok_id_produk#string; stok#string;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html