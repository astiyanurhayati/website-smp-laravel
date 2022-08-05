@extends('layouts.index')

@section('container')
<link rel="stylesheet" href="css/home.css">
<main>
    <div class="page1">
        <div class="content-page1">
            <h1>Selamat datang di Website</h1>
            <h1>SMPN 02 Megamendung</h1>
        </div>
        <a href="#page2">
            <div class="scroll-icon ex-1">
                <span class="wheel"></span>
            </div>
           </a>
    </div>
    <div id="page2"></div>
    <div class="page2">
        <div class="sambutan">
            <div class="kiri">
                <div class="judul">
                    <h2>Sambutan Kepala Sekolah</h2>
                    <hr class="garisbawah">
                </div>
                <h3><I>ROJAI, M.Pd.</I></h3><br>
                <p><b> <i>Assalamualaikum Wr.Wb</i></b></p><br>
                <p>Puji syukur kita panjatkan kehairat Allah SWT yang telah memberikan rahmat dan hidayahnya kepada kita, sholawat dan salam kita limpahkan kepada junjungan kita Nabi Muhammad SAW.</p><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus omnis culpa, dolorem nobis veritatis ullam vero eius aut maxime deleniti! Maxime vero ratione consequuntur! Praesentium, ipsum beatae esse totam accusamus qui obcaecati exercitationem enim eveniet minima tempore facilis ipsa sit quas consectetur magni quia accusantium inventore quaerat eius, aperiam doloremque! Aliquid unde doloribus eum quidem libero voluptates reprehenderit, perspiciatis tempore eligendi delectus eaque autem doloremque inventore cupiditate magni possimus aspernatur aut officia quaerat dignissimos. Animi distinctio iure aspernatur. Quod quos in repellat aspernatur excepturi animi aperiam vitae officiis? Laborum, nam explicabo! Itaque, aut qui. Deserunt omnis quos corrupti necessitatibus?</p><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil vero rem deleniti tenetur esse id commodi minus blanditiis harum ipsam?</p><br>
                <p><b><i>Billahi taufik wal hidayah, <br> Wassalamualaikum Wr. Wb.</i></b></p>
            </div>
            <div class="kanan">
                <img src="/img/timguruedit/kepala.jpg" alt="">
            </div>
        </div>
    </div>


    <div class="page3">
        <div class="profil">
            <hr>
            <div class="content-profile">
                <div class="kanan">
                    <video controls>
                        <source src="vidio/satu.mp4" type="video/webm" />
                    </video>
                </div>
                <div class="kiri">
                    <div class="judul">
                        <h3>Informasi Lengkap</h3>
                        <hr class="garisbawah">
                    </div>
                    <div class="text-content">
                        <p>Pembelajaran di SMP NEGERI 2 MEGAMENDUNG dilakukan pada Sehari Penuh. Dalam seminggu, pembelajaran dilakukan selama 5 hari.</p>
                        <p>SMP NEGERI 2 MEGAMENDUNG memiliki akreditasi A, berdasarkan sertifikat 02.00/111/BAP-SM/SK/X/2015.</p>
                        <p> SMP NEGERI 2 MEGAMENDUNG menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan..</p>
                    </div>
                    <div class="read-more">
                        <a href="/info"><button>Read More</button></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</main>

</div>
@endsection
