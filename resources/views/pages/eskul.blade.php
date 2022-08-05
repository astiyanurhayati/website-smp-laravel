@extends('layouts.index')

@section('container')
<link rel="stylesheet" href="css/banner.css">
<link rel="stylesheet" href="css/eskul.css">
<main>
    <div class="banner">
        <img src="img/eskulbanner5.png" alt="">
        <div class="content-banner">
            <h3><a href="/">HOME /</a><a href="/eskul"> <span>EKSTRAKULIKULER</span> </a></h3>
        </div>
    </div>

    <div class="page1">
        <h2>EKSTRAKULIKULER</h2>
            <p>Sebelum pandemi menyerang, SMPN 02 Megamendung aktif dalam banyak Esktrakulikuler, dan mendapatkan banyak prestasi. Berikut adalah eksul yang ada di sekolah ini: </p>
        
        <div class="eskul">
            <div class="title">
                <h4>Pencak Silat</h4>
            </div>
           <div class="foto">
            <img src="img/silat1.jpg" alt="">
            <img src="img/silat2.jpg" alt="">
            <img src="img/silat4.jpg" alt="">
            <img src="img/silat3.jpg" alt="">
           </div>
        </div>
        <div class="eskul">
            <div class="title">
                <h4>Taekwondo</h4>
            </div>
            <div class="foto">
            <img src="img/taekwondo.jpg" alt="">

            </div>
        </div>

        <div class="eskul">
            <div class="title">
                <h4>Paduan Suara</h4>
            </div>
            <div class="foto">
            <img src="img/padus.jpg" alt="">

            </div>
        </div>
        <div class="eskul">
            <div class="title">
                <h4>Basket</h4>
            </div>
            <div class="foto">
            <img src="img/basker.jpeg" alt="">
            <img src="img/basket2.jpeg" alt="">

            </div>
        </div>
    </div>
</main>
@endsection