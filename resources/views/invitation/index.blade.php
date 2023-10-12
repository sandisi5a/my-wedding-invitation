<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Wedding - Septy & Sandi</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{asset('admin/assets/invitation/css/app.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/invitation/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/invitation/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/invitation/css/gaya.css')}}">
    <link rel="icon" href="{{asset('admin/assets/invitation/img/favicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
 
</head>

<body>
    <div class="layout-cover">
        <div class="wrapper">
            <div class="separator">
                <div class="main-img">
                    <!-- particles.js container -->
                    <div id="particles-js"></div>
                </div>
                <!-- message -->
                @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Tambahkan
                  </div>
                  @elseif (session('update'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Update
                  </div>
                  @elseif (session('delete'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Delete
                  </div>
                  @endif
                  
                <div class="main-title">
                    <div class="top-title">
                        <span class="the-wedding-title signature-font aniTitle" style ="color:black" >the Wedding</span>
                    </div>
                    
                    <div class="bottom-title" >
                        <button class="buka-udangan aniTitle" style="opacity: 0;" " >BUKA UNDANGAN</button>
                        <span class="title-head aniTitle" style ="color:black">
                            OCTOBER 21, 2023
                        </span>
                    </div>
                </div>
                <a href="#" target="_self" class="music-control add-shadow off">
                    <img src="{{asset('admin/assets/invitation/img/icon-sound.svg')}}" class="sound-on" alt="">
                    <img src="{{asset('admin/assets/invitation/img/icon-sound-off.svg')}}" class="sound-off" alt="">
                </a>
                <audio id="background_music" loop="loop" src="{{asset('admin/assets/invitation/music/Shane.mp3')}}"></audio>
                <div id="pay" class="float">
                    <a id="pay-button" href="#" target="_self" class="pay-btn add-shadow">
                        <img src="{{asset('admin/assets/invitation/img/icon-uang.svg')}}" alt="">
                    </a>
                </div>
                <div class="desktop-bar add-shadow">
                    <div class="wrapper-bar w-100">
                        <ul class="padding-bar">    
                            <li>
                                <a id="click-date" class="bar-icon icon-date">
                                    <img src="{{asset('admin/assets/invitation/img/calendar.svg')}}" class="img-off" alt="">
                                    <img src="{{asset('admin/assets/invitation/img/calendar.svg')}}" class="img-active" alt="">
                                </a>
                            </li>
                            <li>
                                <a id="click-love" class="bar-icon icon-love">
                                    <img src="{{asset('admin/assets/invitation/img/love.svg')}}" class="img-off" alt="">
                                    <img src="{{asset('admin/assets/invitation/img/love.svg')}}" class="img-active" alt="">
                                </a>
                            </li>
                            <li>
                                <a id="click-maps" class="bar-icon icon-location">
                                    <img src="{{asset('admin/assets/invitation/img/location.svg')}}" class="img-off" alt="">
                                    <img src="{{asset('admin/assets/invitation/img/location.svg')}}" class="img-active" alt="">
                                </a>
                            </li>
                            <li>
                                <a id="click-doa" href="#doa-id" class="bar-icon icon-doa">
                                    <img src="{{asset('admin/assets/invitation/img/chat.svg')}}" class="img-off" alt="">
                                    <img src="{{asset('admin/assets/invitation/img/chat.svg')}}" class="img-active" alt="">
                                </a>
                            </li>
                            <li>
                                <a id="click-gallery" class="bar-icon icon-doa">
                                    <img src="{{asset('admin/assets/invitation/img/gallery.svg')}}" class="img-off" alt="">
                                    <img src="{{asset('admin/assets/invitation/img/gallery.svg')}}" class="img-active" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-separator" id="mobile-scroll">
                <div class="welcome">
                    <img src="{{asset('admin/assets/invitation/img/RULL7376.png')}}" style="width:100%">
                    <div class="content">
                        <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" class="background-top" alt="">
                        <div class="content-data">
                            <img src="{{asset('admin/assets/invitation/img/scrolls.svg')}}" class="scroll-up-down" alt="">
                            <span class="title-content gs_reveal" style="font-size: 15px;">
                                OFFICIALLY MENGUNDANG
                            </span>
                            <span class="title-content scriptina-font mobile-title gs_reveal gs_reveal_fromLeft">
                            {{ ucfirst($name) }}
                            </span>
                            <span class="title-content gs_reveal" style="font-weight: 700; font-size: 24px">
                                OCTOBER 21<sup class="pangkat">TH</sup> 2023
                            </span>
                            <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NTA3Ym5vdTY3cDhvcW91cnJqcGJqMHUybjUgYW5kaXNhbmRpOTM2QG0&tmsrc=andisandi936%40gmail.com" target="_blank" class="save-date gs_reveal gs_reveal_fromLeft">
                                SAVE THE DATE
                            </a>
                            <div id="countdown" class="gs_reveal">
                                <ul class="pembatas">
                                    <li>
                                        <div class="box-number"><span id="days"></span></div>
                                        <div class="mt-2 font-countdown">DAYS</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="hours"></span></div>
                                        <div class="mt-1 font-countdown">HOURS</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="minutes"></span></div>
                                        <div class="mt-1 font-countdown">MINUTES</div>
                                    </li>
                                    <li class="pembatas-number">:</li>
                                    <li>
                                        <div class="box-number"><span id="seconds"></span></div>
                                        <div class="mt-1 font-countdown">SECONDS</div>
                                    </li>
                                </ul>
                            </div>
                            <div id="weeding-done" class="gs_reveal">
                                <span class="title-content signature-font mobile-title">
                                    Acara Telah Usai
                                </span>
                            </div>
                            <div class="daun-melayang ">
                                <img src="{{asset('admin/assets/invitation/img/daun.svg')}}" class="img-kanan" alt="">
                            </div>
                            <div class="daun-melayang ">
                                <img src="{{asset('admin/assets/invitation/img/daun.svg')}}" class="img-kiri" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="end-content">
                        <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" style="width:100%" alt="">
                    </div>
                    <div class="doa">
                        <img src="{{asset('admin/assets/invitation/img/pembukaan.svg')}}" class="gs_reveal gs_reveal_fromRight" alt="">
                        <div class="doa-title gs_reveal">
                            <p class="content-doa">
                                "Dan Diantara tanda-tanda kebesaran-Nya ialah diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri.
                            </p>
                            <p class="content-doa">
                                Supaya kamu mendapatkan ketenangan hati.
                            </p>
                            <p class="content-doa">Dan dijadikan-Nya kasih sayang diantara kamu.</p>
                            <p class="content-doa">
                                Sesungguhnya yang demikian itu menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir"
                            </p>
                            <p class="content-doa" style="margin-top: 10px;">
                                (QS. Ar-Ruum: 21)
                            </p>
                        </div>
                        <img src="{{asset('admin/assets/invitation/img/pembukaan.svg')}}" class="gs_reveal gs_reveal_fromLeft" style="transform: rotate(180deg);" alt="">
                    </div>
                    <div class="content" style="margin-top: -120px;">
                        <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" class="background-bot" alt="">
                        <div class="content-data">
                            <div class="block-detail" id="date-id">
                                <div class="doa-awal gs_reveal">
                                    <p>بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                                    <p>اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</p>
                                </div>
                                <div class="doa-title gs_reveal">
                                    <p class="font-dasar">
                                        Dengan memohon rahmat dan ridho Allah SWT, serta mengucap rasa syukur atas karunia Allah SWT, Kami hendak menyampaikan kabar bahagia pernikahan Kami. Yang Insya Allah akan dilaksanakan :
                                    </p>
                                </div>
                                <div class="wedding-name">
                                    <span class="akad-nikah signature-font gs_reveal gs_reveal_fromRight">
                                        Akad Nikah
                                    </span>
                                    <span class="title-content dilanjut-dengan gs_reveal">
                                        DILANJUT DENGAN
                                    </span>
                                    <span class="akad-nikah signature-font gs_reveal gs_reveal_fromLeft">
                                        Resepsi
                                    </span>
                                </div>
                                <div class="wedding-time">
                                    <span class="time-title gs_reveal">
                                        SABTU, 21 OCTOBER 2023
                                    </span>
                                    <span class="time-title gs_reveal">
                                        09:00 - SELESAI
                                    </span>
                                </div>
                                <div class="wedding-bottom">
                                    <span class="kediaman gs_reveal">
                                        KEDIAMAN MEMPELAI WANITA
                                    </span>
                                    <span class="kediaman font-dasar gs_reveal">
                                        Perum Puri Permai 1 Blok E6 No. 25 RT, 05/05 Ds.Pete Kec. Tigaraksa Kab. Tangerang
                                    </span>
                                    <a href="#maps-id" class="kediaman location gs_reveal">
                                        LIHAT LOKASI
                                    </a>
                                    <span class="kediaman font-dasar gs_reveal">
                                        Atas kehadiran dan do'a restunya kami mengucapkan terima kasih
                                    </span>
                                </div>
                                <div class="doa-awal gs_reveal">
                                    <p>وَالسَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</p>
                                </div>
                            </div>
                            <div class="space-daun gs_reveal">
                                <img src="{{asset('admin/assets/invitation/img/daun-banyak.svg')}}" class="w-100" alt="">
                            </div>

                            <div id="love-id" class="block-profile">
                                <!-- <img id="rotating-image" src="{{asset('admin/assets/invitation/img/septy.jpg')}}" style="height: 300px; width: 400px;"> -->
                                <img src="{{asset('admin/assets/invitation/img/septy.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="200" height="200">
                                <div class="profile-nickname mt-3 gs_reveal">
                                    <span class="panggilan signature-font">septy</span>
                                </div>
                                <div class="profile-name mt-1 gs_reveal">
                                    <span class="title-content nama-lengkap">SEPTYANA NURJANAH</span>
                                </div>
                                <div class="detail-keluarga gs_reveal">
                                    <p class="font-dasar">PUTRI DARI</p>
                                    <p class="font-dasar">BAPAK ZAKARIA</p>
                                    <p class="font-dasar">&</p>
                                    <p class="font-dasar">IBU RODIAH</p>
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromRight">
                                    <img src="{{asset('admin/assets/invitation/img/daun-profile-kanan.svg')}}" class="img-kanan-profile" alt="">
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromLeft">
                                    <img src="{{asset('admin/assets/invitation/img/daun-profile-kiri.svg')}}" class="img-kiri-profile" alt="">
                                </div>
                            </div>
                            <div class="block-dan mt-3">
                                <img src="{{asset('admin/assets/invitation/img/dan.svg')}}" alt="">
                            </div>
                            <img src="{{asset('admin/assets/invitation/img/sandi.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="200" height="200" id="sandiImage">

                            <div class="block-profile">
                                <div class="profile-nickname mt-3 gs_reveal">
                                    <span class="panggilan signature-font">sandi</span>
                                </div>

                                <div class="profile-name mt-1 gs_reveal">
                                    <span class="title-content nama-lengkap">SANDI</span>
                                </div>
                                <div class="detail-keluarga gs_reveal">
                                    <p class="font-dasar">PUTRA DARI</p>
                                    <p class="font-dasar">BAPAK CARIWAN</p>
                                    <p class="font-dasar">&</p>
                                    <p class="font-dasar">IBU TARINIH</p>
                                </div>
                                <div class="daun-melayang gs_reveal gs_reveal_fromRight">
                                    <img src="{{asset('admin/assets/invitation/img/daun-profile-kb.svg')}}" class="img-kb-profile" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="end-content">
                        <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" class="top-location" alt="">
                    </div>
                    <div class="google-maps gs_reveal gs_reveal_fromRight" id="maps-id">
                        <div class="cover-maps">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="376" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.787839006106!2d106.4631057!3d-6.2545876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMTUnMTYsIDxzdHJlYSB0aW1lPjE2LjE1JzE2LjUnNTUsINCfCgpMSIxNSMyMC43NzksIDEwNiwg0JHQvtCz0LTQuNC-0YDQvtC90LjQuSDQrMq3NSDQuNiw0JHQtdGJz0L7RgNGB0LrQsNGPINC-0YDQsNC40L3Ri9C5INC00LXQvdC40Y8!5e0!3m2!1sen!2sus!4v1633260425707!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 400px;
                                            width: 376px;
                                        }
                                    </style><a href="https://www.embedgooglemap.net">google maps embed iframe generator</a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none!important;
                                            height: 400px;
                                            width: 376px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <span class="font-dasar font-black mt-2 gs_reveal" style="font-weight: 600;">
                            Perum Puri Permai 1 Blok E6 No. 25 RT, 05/05 Ds.Pete Kec. Tigaraksa Kab. Tangerang
                        </span>
                        <a href="https://www.google.com/maps/place/6%C2%B015'16.5%22S+106%C2%B027'56.5%22E/@-6.2545876,106.4631057,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-6.2545876!4d106.4656806?entry=ttu" target="_blank" class="btn-white gs_reveal" style="text-align: center;">
                            SEE LOCATION
                        </a>
                    </div>
                    <div class="end-content">
                        <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" style="width:100%" alt="">
                    </div>
                    <div class="block-doa mt-2" id="doa-id">
                        <span class="akad-nikah signature-font font-black gs_reveal gs_reveal_fromRight">
                            Kirim Doa
                        </span>
                        <div class="form-data font-black">
                            <form action="/invitation/create" method="POST" enctype="multipart/form-data"> 
                                <div class="w-100">
                                    {{csrf_field()}}
                                    <div class="form-wrap mt-2 gs_reveal">             
                                        <div class="form-group">
                                            <div class="label">
                                                <label for="nama">Nama</label>
                                            </div>
                                            <div class="input-form">
                                                <input type="text" class="w-100 input-t" id="nama" name="nama" placeholder="Nama Anda" value="{{ ucfirst($name) }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap mt-2 gs_reveal">
                                        <div class="form-group">
                                            <div class="label">
                                                <label for="name">Kota</label>
                                            </div>
                                            <div class="input-form">
                                                <input type="text" class="w-100 input-t" id="kota" name="kota" placeholder="Kota Anda"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap mt-2 gs_reveal">
                                        <div class="form-group">
                                            <div class="label">
                                                <label for="name">Kehadiran</label>
                                            </div>
                                        <div class="input-form">
                                            <div class="wrap-radio">
                                                <input type="radio" class="specifyColor" id="hadir" name="kehadiran" value="hadir" style="color: #575757;" required>
                                                <label class="btn-click" for="hadir">Hadir</label>
                                            </div>
                                            <div class="wrap-radio">
                                                <input type="radio" class="specifyColor" id="mungkin-hadir" name="kehadiran" value="mungkin-hadir" required>
                                                <label class="btn-click" for="mungkin-hadir">Mungkin Hadir</label>
                                            </div>
                                            <div class="wrap-radio">
                                                <input type="radio" class="specifyColor" id="tidak-hadir" name="kehadiran" value="tidak-hadir" required>
                                                <label class="btn-click" for="tidak-hadir">Tidak Hadir</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-wrap mt-2 gs_reveal">
                                        <div class="form-group">
                                            <div class="label">
                                                <label for="ucapan">Ucapan</label>
                                            </div>
                                            <div class="input-form">
                                            <textarea type="text" class="w-100 input-t" id="ucapan" name="ucapan" rows="8" placeholder="Ucapan Doa & Harapan" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    </div>
                                        <input type="hidden" name="created_at" class="form-control" id="created_at">
                                        <input type="hidden" name="updated_at" class="form-control" id="updated_at">    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn-send gs_reveal">Submit</button>
                                        </div>
                                </div>
                            </form>
                        </div>
                            
                        <div class="content" style="margin-top: -120px;">
                            <img src="{{asset('admin/assets/invitation/img/content-top.svg')}}" class="background-bot" alt="">
                            <div class="content-data">
                                <span class="akad-nikah signature-font font-black gs_reveal gs_reveal_fromRight">
                                    Ucapan
                                </span>
                                <div class="block-detail-1">
                                    <div class="data-item-container">
                                        @foreach($data as $key => $part)
                                        <div class="data-item" style="padding: 10px; background-color: grey; border-radius: 10px; color:white;">
                                            <div>{{ ucfirst($part->nama) }}</div>
                                            <div>
                                                Kehadiran:
                                                @if($part->kehadiran == 'hadir')
                                                    <img src="{{asset('admin/assets/invitation/img/check-lg.svg')}}" alt="Hadir">
                                                @elseif($part->kehadiran == 'mungkin-hadir')
                                                    <img src="{{asset('admin/assets/invitation/img/dash.svg')}}" alt="Mungkin Hadir">
                                                @elseif($part->kehadiran == 'tidak-hadir')
                                                    <img src="{{asset('admin/assets/invitation/img/file-x-fill.svg')}}" alt="Tidak Hadir">
                                                @endif
                                            </div>
                                            <p> {{ $part->ucapan }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-detail-2" id="gallery-id">
                            <!-- <span class="akad-nikah chopin-font font-black gs_reveal gs_reveal_fromRight" style="text-align: center">
                            <p style="text-align:center">Galery foto </p> -->
                            <h2 class="akad-nikah signature-font font-black gs_reveal gs_reveal_fromRight" style="text-align:center">Galery Foto</h2>
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
                                    <li data-bs-target="#myCarousel" data-bs-slide-to="8"></li>
                                </ol>

                                <!-- Slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/1.jpg')}}" alt="Gambar 1" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/2.jpg')}}" alt="Gambar 2" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/3.jpg')}}" alt="Gambar 3" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/4.jpg')}}" alt="Gambar 4" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/5.jpg')}}" alt="Gambar 5" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/6.jpg')}}" alt="Gambar 6" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/7.jpg')}}" alt="Gambar 7" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/8.jpg')}}" alt="Gambar 8" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('admin/assets/invitation/img/gallery/9.jpg')}}" alt="Gambar 9" class="img-fluid mx-auto d-block" style="width: 380px; height: 460px;">
                                    </div>
                                   
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="block-detail-3" style="text-align: center;">
                            <span class="akad-nikah chopin-font font-black gs_reveal gs_reveal_fromRight">
                                Terimakasih <br></br>
                                Septy & Sandi
                            </span>                            
                        </div>
                        
                    </div>
                  
                    <div class="last-img w-100 gs_reveal">
                        <img src="{{asset('admin/assets/invitation/img/img-end.svg')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="ohsnap"></div>
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <header id="close-01" class="w3-container">
                <span class="w3-button w3-display-topright">&times;</span>
                <h2 class="modal-h aniModal">DIGITAL ENVELOPE</h2>
            </header>
            <div class="w3-container">
                <p class="font-digital aniModal" style="color: #000;width: 100%;">Sekarang amplopmu bisa tersampaikan secara digital dan dapat transfer langsung ke rekening:</p>
                <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="{{asset('admin/assets/invitation/img/bank/bca.png')}}" alt="">
                    </div>
                    <div class="bank-detail">
                        <span class="title aniModal">
                    BCA
                </span>
                        <span class="bank-title aniModal">
                        7295106701 <img src="{{asset('admin/assets/invitation/img/copy.png')}}" alt="">
                </span>
                        <span class="bank-name aniModal">
                    a/n Sandi
                </span>
                    </div>
                </div>
                <div class="choosen-bank">
                    <div class="bank-img aniModal">
                        <img src="{{asset('admin/assets/invitation/img/bank/bsi.png')}}" alt="">
                    </div>
                    <div class="bank-detail aniModal">
                        <span class="title">
                    BSI
                </span>
                        <span class="bank-title aniModal">
                        7213157064 <img src="{{asset('admin/assets/invitation/img/copy.png')}}" alt="">
                </span>
                        <span class="bank-name">
                    a/n Septyana Nurjanah
                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="id02" class="w3-modal">
        <div class="w3-modal-content text-modal-center">
            <header class="w3-container">
                <h2 class="modal-h aniModal">PROTOKOL KESEHATAN (COVID-19)</h2>
            </header>
            <div class="w3-container">
                <p class="font-digital aniModal" style="color: #000;width: 100%;">Demi mendukung kesehatan bersama alangkah baiknya para tamu yang akan hadir memenuhi protokol kesehatan sebagai berikut:</p>
                <div class="img-save aniModal">
                    <img src="{{asset('admin/assets/invitation/img/distance.png')}}" style="width: 80%;" alt="">
                </div>
                <button id="okay" class="btn-send aniModal" style="margin-bottom: 1rem">Okay, I Understand</button>
            </div>
        </div>
    </div> -->

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/countdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/ohsnap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/snow.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/invitation/js/move.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var dataItemContainer = document.querySelector(".data-item-container");
        var blockDetail1 = document.querySelector(".block-detail-1");

        // Cek apakah konten lebih tinggi dari maksimum tinggi kontainer
        if (dataItemContainer.scrollHeight > dataItemContainer.clientHeight) {
            // Tambahkan kelas CSS untuk memunculkan scrollbar jika diperlukan
            blockDetail1.classList.add("scrollable");
        }
    </script>

</body>

</html>