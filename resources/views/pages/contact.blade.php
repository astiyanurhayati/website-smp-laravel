@extends('layouts.index')

@section('container')
<link rel="stylesheet" href="css/banner.css">
<link rel="stylesheet" href="css/contact.css">
<main>
    <div class="banner">
        <img src="img/contacbanner.png" alt="">
        <div class="content-banner">
            <h3><a href="/">HOME /</a><a href="/contact"> <span>CONTACT</span> </a></h3>
        </div>
    </div>
    <div class="contact">
    
        <div class="kiri">
                <div class="content-kontak">
                    <h3>Contact Us</h3>
                    <hr class="garis">
                    <h2>Keep in touch</h2>
                    
                    @if(Session::has('success'))
                        
                        <div class="alert-success">
                        <p>    {{Session::get('success')}}</p>
                        </div>
                    @endif
            <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data" >
                @csrf
                    <div class="kontak">
                      <input type="text" name="name" placeholder="Your name" required >
            
                      <input type="text"  name="email" placeholder="Email" required>
                    </div>
                    <div class="kontak">
                        <input type="text" name="subject" placeholder="Subject" required>
              
                        <input type="text" name="phone" placeholder="Phone" required>
                        
                      </div>
                      <div class="textarea">
                      <textarea name="message" cols="30" rows="10"  placeholder="Message" required></textarea>
                      <input type="submit" value="Send">
                      </div>
            
                </div>
            </form>
        </div>
        <div class="kanan">
            <div class="atas">
                   <div class="item">
                    <i class="fa-solid fa-house"></i>
                    <p>Jl. Raya Pasir Muncang No.218, Sukamanah, Kec. Megamendung, Kabupaten Bogor,  Jawa Barat 16770</p>
                   </div>
                   <div class="item">
                    <i class="fa-solid fa-phone"></i>
                    <p>0857574893202918</p>
                   </div>
                   <div class="item">
                    <i class="fa-regular fa-envelope"></i>
                    <p> smpn2mengamendung@gmail.com</p>
                   </div>
            </div>
            <div class="bawah">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=470&amp;height=200&amp;hl=en&amp;q=smp negeri 2 megamendung&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:470px;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:470px;height:200px;}.gmap_iframe {width:470px!important;height:200px!important; border-radius: 5px}</style></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
