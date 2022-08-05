@extends('layouts.index')

@section('container')
<link rel="stylesheet" href="css/banner.css">
<link rel="stylesheet" href="css/guru.css">

<main>
    <div class="banner">
        <img src="img/bannerinfo.png">
        <div class="content-banner">
            <h3><a href="/">HOME /</a><a href="/literasi"> <span>TEACHERS</span> </a></h3>
        </div>
    </div>
      
<div class="teacher">
        <div class="judul">
            <h2>GURU DAN STAFF SMPN 2 MEGAMENDUNG</h2>
        </div>
        
    <div class="flex">
        <div class="content-teacher">
            <div class="isi-content">     
                @foreach ($data as $item )  
                <div class="foto">
                    <img src="{{ $item['image'] }}" alt="">
                </div>
                <div class="list-name">
                    <h3>{{ $item['title'] }}</h3>
                    <ul>
                      <li>{{ $item['guru1'] }}</li>
                      <li>{{ $item['guru2'] }}</li>
                      <li>{{ $item['guru3'] }}</li>
                      <li>{{ $item['guru4'] }}</li>
                      <li>{{ $item['guru5'] }}</li>
                      <li class="kosong">{{ $item['guru6'] }}</li>
                     
                    </ul>
                </div>
                
        @endforeach
                    
            </div>     
        </div>
 
    </div>
    {{ $data->links() }}


</div>
</main>

<script src="js/script.js"></script>
@endsection