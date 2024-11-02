<?php
require_once 'models/timesince.php';
require_once 'models/greetings.php';
require_once 'models/data.php';

$url        = 'https://myinvitation.online/azisnadya/';
$title      = 'Undangan Pernikahan Azis & Nadya';
$couple     = 'Azis & Nadya';
$coupleCap  = 'AZIS & NADYA';
$date       = 'Sabtu, 24 Desember 2022';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= $title; ?></title>
    <link href="<?= $url; ?>assets/favicon.png" rel="icon">
    <link href="<?= $url; ?>assets/favicon.png" rel="apple-touch-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:image" content="<?= $url; ?>assets/thumbnail.jpg" />
    <meta property="og:url" content="" />
    <meta property=" og:site_name" content="<?= $title; ?>" />
    <meta property="og:description" content="<?= $date; ?> - <?= $title; ?>" />
    <link rel="shortcut icon" href="assets/thumbnail.jpg" type="image/x-icon" />
    <meta name="description" content="<?= $title; ?> - <?= $date; ?>">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/themes/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/lib/bootstraps-5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/lib/aos/aos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>

<body class="position-relative overflow-hidden">
    <audio id="myAudio" loop="true" autoplay="true">
        <source src="assets/media/song.mp3" type="audio/ogg">
        <source src="assets/media/song.mp3" type="audio/mpeg">
    </audio>

    <div class="wrapper-container position-relative">
        <button onclick="topFunction()" id="myBtn" class="shadow" title="Go to top">
            <span class="material-icons">
                arrow_upward
            </span>
        </button>
        <button onclick="togglePlay()" id="btn-music" class="shadow" title="Play Song">
            <span class="material-icons">
                music_note
            </span>
        </button>

        <!-- COVER -->
        <div class="content">
            <section class="cover pb-5">
                <div class="text-center absolute h-100 w-100 d-flex justify-content-end flex-column" style="z-index: 99999;background-color: rgba(0,0,0,0.30);padding-bottom:10rem">
                    <div class="text-content ">
                        <h1 class="text-white font-size-40 ft-1 text-shadow-md"><?= $couple; ?></h1>
                        <div class="text-white pt-4">
                            <span class="text-shadow-sm fw-bold">Dear :</span>
                            <?php if (isset($_GET['to'])) : ?>
                                <p class="my-1 fw-bold h5 text-shadow-md">
                                    <u><?= str_replace('+', ' ', str_replace('dan', '&', ucfirst(@$_GET['to']))); ?></u>
                                </p>
                                <p>Di Tempat</p>
                            <?php endif; ?>
                        </div>
                        <button type="button" onclick="playAudio()" class="btn btn-theme-primary mt-3">
                            <i class='bx bxs-book-heart'></i> Buka Undangan
                        </button>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/cover/cover1.jpg');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/cover/cover.jpeg');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slides">
                <div class="absolute text-content d-flex align-items-center vh-100 w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.30);">
                    <div class="text-center w-100">
                        <h3 class="title-text-1 text-white text-shadow-sm ft-1 py-0 my-0">THE WEDDING</h3>
                        <h1 class="text-white font-size-36 text-shadow-md ft-1 py-0 my-0"><?= $couple; ?></h1>
                        <div class="divider-line"></div>
                        <h5 class="text-center text-white pt-2">Date:</h5>
                        <p class="text-white text-shadow-sm"><?= $date; ?></p>
                        <div class="divider-line"></div>
                        <p class="text-white font-size-12 px-3 pt-3">Assalamu'alaikum Wr. Wb.</p>
                        <p class="text-white font-size-12 px-3">
                            Maha suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, Perkenankanlah kami menikahkan putra putri kami:
                        </p>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-1/1.jpg');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-1/2_.jpg');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-1/3_.jpg');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-1/4_.jpg');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-1/5.jpeg');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Couple -->

            <section class="slides">
                <div class="absolute d-flex flex-column justify-content-end vh-100 w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.30);padding-bottom: 8rem">
                    <div class="text-white w-25 ms-3 pt-3 mb-4" style="border-top: 4px solid;" data-aos="fade-up-left" data-aos-duration="2000">
                        <h3 class="title-text-1 text-white text-shadow-sm ft-1 my-0" data-aos-delay="100" data-aos="fade-up-left" data-aos-duration="2000">MEMPELAI PRIA</h3>
                    </div>
                    <div class="p-3 mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="botom-bottom">
                        <div class="card text-white" style="border-radius:20px;background-color: rgba(0,0,0,0.30);border: 2px solid #fff;backdrop-filter: blur(3px);">
                            <div class="card-body p-3" data-aos-delay="300" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="h3 ft-1">SYAHRIL AZIS</span>
                                <p class="font-size-12">Putra Ketiga dari Keluarga <br> Bapak Marwono (Alm.) & Ibu Siti Djubaedah</p>
                                <a href="https://instagram.com/syahril.aziz" class="btn btn-sm bg-white"><i class="bx bxl-instagram mt-1"></i> syahril.aziz</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-3/1_.jpg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-3/2_.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slides">
                <div class="absolute d-flex flex-column justify-content-end vh-100 w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.30);padding-bottom: 8rem">
                    <div class="text-white w-25 ms-3 pt-3 mb-4" style="border-top: 4px solid;" data-aos="fade-up-left" data-aos-duration="2000">
                        <h3 class="title-text-1 text-white text-shadow-sm ft-1 my-0" data-aos="fade-up-left" data-aos-delay="100" data-aos-duration="2000">MEMPELAI WANITA</h3>
                    </div>
                    <div class="p-3 mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="botom-bottom">
                        <div class="card text-white" style="border-radius:20px;background-color: rgba(0,0,0,0.30);border: 2px solid #fff;backdrop-filter: blur(3px);">
                            <div class="card-body py-3" data-aos-delay="300" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                <span class="h3 ft-1">NADYA LESTARI</span>
                                <p class="font-size-12">Putri Pertama dari Keluarga <br> Bapak Untung Sugiarto & Ibu Sri Herwini</p>
                                <a href="https://instagram.com/ndylstr16" class="btn btn-sm bg-white"><i class="bx bxl-instagram mt-1"></i> ndylstr16</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-2/1_.jpg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-2/2_.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Event -->
            <section class="slides">
                <div class="absolute text-content d-flex align-items-center vh-100 w-100" style="z-index:1;background-color: rgba(0,0,0,0.50);">
                    <div class="w-100 px-3">
                        <h4 class=" font-size-16 text-white text-shadow-sm ft-1 py-0 fw-bold" style="margin-bottom: 4rem;" data-aos="fade-up-left" data-aos-duration="2000">EVENT</h4>
                        <h4 class=" font-size-16 text-white text-shadow-md ft-1 py-0 mb-2 mt-3 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">AKAD NIKAH</h4>
                        <h6 class="text-white text-shadow-sm font-size-12 mb-0 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">Sabtu, 24 Desember 2022</h6>
                        <h6 class="text-white text-shadow-sm font-size-12 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">08.00 - 10.00 WIB</h6>
                        <p class="font-size-12" data-aos="fade-up-left" data-aos-duration="2000">
                            <small class="text-white">Kediaman Mempelai Pria<br>
                                Rumah Susun Blok 27, Jl. Nusa Indah IV, Malaka Jaya, Duren Sawit, Jakarta Timur
                            </small>
                        </p>
                        <div class="divider-line"></div>
                        <h3 class=" font-size-16 text-white text-shadow-md ft-1 py-0 mb-2 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">RESEPSI</h3>
                        <h6 class="text-white text-shadow-sm font-size-12 mb-0 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">Sabtu, 24 Desember 2022</h6>
                        <h6 class="text-white text-shadow-sm font-size-12 fw-bold" data-aos="fade-up-left" data-aos-duration="2000">10.00 - 15.00 WIB</h6>
                        <p class="font-size-12" data-aos="fade-up-left" data-aos-duration="2000">
                            <small class="text-white">Kediaman Mempelai Pria<br>
                                Rumah Susun Blok 27, Jl. Nusa Indah IV, Malaka Jaya, Duren Sawit, Jakarta Timur
                            </small>

                        </p>
                        <div class="divider-line"></div>
                        <a target="_blank" href="https://maps.app.goo.gl/o3bRXvAN3juo5reb9?g_st=iw" class="btn btn-sm btn-theme-primary w-100px">MAPS</a>
                        <a target="_blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NHE2bWNqdG9pdW9saW1sbWFwYTJsODJnaDEgbmFkeWFsZXN0YXJpMTZAbQ&tmsrc=nadyalestari16%40gmail.com" class="btn btn-sm bg-white w-100px">SAVE</a>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-4/1.jpeg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-4/2.jpg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-4/3.jpeg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-4/4.jpg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-4/5.jpeg');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video -->
            <section class="position-relative">
                <video autoplay="true" muted="true" playSinline="true" loop id="myVideo" width="100%">
                    <source src="<?= $url;?>assets/media/untitled.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <div class="absolute w-100 h-100 d-flex align-items-center justify-content-center flex-column" style="z-index:0;top:0;background-color: rgba(255,255,255,0.2);">
                    <h3 class="ft-1 text-white text-shadow-sm typed-text"></h3>
                </div>
            </section>

            <!-- Gallery -->
            <section class="position-relative bg-white p-2" style="top: -26px;position: relative;border-radius: 20px;">
                <div class="bg-secondary rounded-pill m-auto mb-2" style="height:4px;width:75px;"></div>
                <h2 class="ft-1 text-center font-size-20 text-theme-primary">
                    Our Gallery
                </h2>
                <p class="text-center font-size-18 ft-2 text-theme-primary">Gallery from Our Prewedding</p>
                <div class="slider mb-0 mt-1 px-1">
                    <div class="slider-for overflow-hidden shadow-sm my-2 d-flex flex-row" style="">
                        <img src="assets/images/galleries/1.jpeg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/2.jpeg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/3.jpeg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/4.JPG" alt="" class="img-fluid">
                        <img src="assets/images/galleries/5.jpeg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/6.jpeg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/7.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/8.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/9.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/10.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/11.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/12.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/13.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/14.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/15.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/16.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/17.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/18.jpg" alt="" class="img-fluid">
                        <!-- <img src="assets/images/galleries/19.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/20.jpg" alt="" class="img-fluid"> -->
                        <!-- <img src="assets/images/galleries/21.jpg" alt="" class="img-fluid"> -->
                        <!-- <img src="assets/images/galleries/22.jpg" alt="" class="img-fluid"> -->
                        <!-- <img src="assets/images/galleries/23.JPG" alt="" class="img-fluid"> -->
                    </div>
                </div>
                <div class="slider slider-nav mb-0 px-1 d-flex justify-content-center overflow-hidden">
                    <div class="px-1">
                        <img src="assets/images/galleries/1.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/2.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/3.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/4.JPG" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/5.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/6.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/8.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/9.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/10.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/11.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/12.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/13.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/14.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/15.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/16.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/17.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/18.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- <div class="px-1">
                        <img src="assets/images/galleries/19.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/20.jpg" alt="" class="img-fluid">
                    </div> -->
                    <!-- <div class="px-1">
                        <img src="assets/images/galleries/21.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/22.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="px-1">
                        <img src="assets/images/galleries/23.JPG" alt="" class="img-fluid">
                    </div> -->
                </div>
            </section>

            <!-- Countdown -->
            <section class="position-relative" style="top:-25px;height: 50vh;">
                <div class="absolute text-content d-flex align-items-center w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.50);min-height: 50vh;">
                    <div class="text-center w-100">
                        <h3 class="title-text-1 text-white text-shadow-sm ft-1">MENUJU HARI BAHAGIA</h3>
                        <div class="card rounded-0" style="background-color: rgba(0,0,0,0.50) ;">
                            <div class="card-body p-2">
                                <div class="d-flex justify-content-center align-items-center text-white">
                                    <div class="d-flex justify-content-center flex-column px-2">
                                        <span id="days" class="h1 m-0 slim_summer">00</span>
                                        <small>Days</small>
                                    </div>
                                    <div class="d-flex justify-content-center flex-column px-2">
                                        <span id="hours" class="h1 m-0 slim_summer">00</span>
                                        <small>Hour</small>
                                    </div>
                                    <div class="d-flex justify-content-center flex-column px-2">
                                        <span id="minutes" class="h1 m-0 slim_summer">00</span>
                                        <small>Min</small>
                                    </div>
                                    <div class="d-flex justify-content-center flex-column px-2">
                                        <span id="seconds" class="h1 m-0 slim_summer">00</span>
                                        <small>Sec</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo-50" style="background-image:url('assets/images/slides/slide-5/1.jpeg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo-50" style="background-image:url('assets/images/slides/slide-5/2.JPG');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo-50" style="background-image:url('assets/images/slides/slide-5/3.JPG');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo-50" style="background-image:url('assets/images/slides/slide-5/4.JPG');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Ucapan -->
            <section class="bg-theme-primary py-3 px-3 position-relative" style="border-radius:20px 20px 0px 0px;top:-50px;z-index:1;">
                <div class="bg-white rounded-pill m-auto" style="height:4px;width:75px;"></div>
                <div class="text-white text-center py-3">
                    <h2 class="text-white font-size-20 ft-1">Ucapan & Do'a</h2>
                </div>

                <form id="form-wish" class="text-start">
                    <div class="mb-3">
                        <input type="text" class="form-control fw-bold" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <textarea name="greeting" id="greeting" class="form-control fw-bold" rows="5" placeholder="Best wishes"></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <select name="present" id="present" class="form-select fw-bold">
                            <option value="1" class="fw-bold">Hadir</option>
                            <option value="2" class="fw-bold">Tidak Hadir</option>
                            <option value="3" class="fw-bold">Semoga Hadir</option>
                        </select>
                    </div> -->
                    <div class="text-center d-grid">
                        <button type="button" id="send" class="btn bg-white text-center">
                            <i id="icon-send" class='bx bxs-paper-plane'></i> Kirim
                        </button>
                    </div>
                </form>

                <div class="fw-bold mb-3 mt-4">
                    <label for="" class="text-white">Best Wishes : <span id="total_comments"><?= count($getGreeting); ?></span></label>
                </div>
                <div class="new-greeting"></div>
                <div class="whises">
                    <?php foreach ($getGreeting as $greeting) : ?>
                        <div class="px-3">
                            <div class="card shadow-sm text-theme-primary" style="border-radius: 1rem;background-position: top center;background-repeat: repeat-y;background-size: cover;">
                                <div class="card-body position-relative">
                                    <div class="mb-3 px-1">
                                        <div class="mb-2 d-flex justify-content-between align-items-center">
                                            <span class="comments_name fw-bold"><?= $greeting['name']; ?></span>
                                        </div>
                                        <p class=" text-theme-primary font-size-14 rounded-3">
                                            <?= $greeting['greeting']; ?>
                                            <small class="text-muted font-size-10 d-block mt-2"><i><?= time_since(strtotime($greeting['created_at'])); ?></i></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- RSVP -->
            <section class="slides" style="top:-50px;height: 50vh;">
                <div class="absolute text-content d-flex align-items-center w-100" style="z-index:1;height: 50vh; background-color: rgba(0,0,0,0.30);">
                    <div class="text-center w-100">
                        <h3 class="title-text-1 text-white text-shadow-sm ft-1 py-0 my-0" data-aos="zoom-in">RSVP</h3>
                        <h3 class="text-white font-size-20 text-shadow-md ft-1 py-0 my-0">Reservasi / Buku Tamu</h3>
                        <div class="card bg-transparent border-0">
                            <div class="card-body" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <form name="rsvp-form">
                                    <div class="mb-2">
                                        <input type="text" name="guest_name" id="guest_name" placeholder="Nama Tamu" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <select name="person" id="person" class="form-select fw-bold">
                                            <option value="" class="fw-bold">~ Jml Tamu ~</option>
                                            <option value="1 orang" class="fw-bold">1 Orang</option>
                                            <option value="2 orang" class="fw-bold">2 Orang</option>
                                            <option value="3 orang" class="fw-bold">3 Orang</option>
                                        </select>
                                    </div>
                                    <div class="form-check form-check-inline text-white">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="present" value="HADIR"> Hadir
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline text-white">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="present" value="SEMOGA HADIR"> Semoga Hadir
                                        </label>
                                    </div>
                                    <div class="d-grid mt-2">
                                        <button type="submit" id="confirm" class="btn btn-sm btn-default bg-white text-center">KIRIM KONFIRMASI</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo-50" style="background-image:url('assets/images/slides/slide-6/1.JPG');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slides" style="top:-50px;height:50vh">
                <div class="absolute text-content d-flex align-items-center w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.50);height:50vh">
                    <div class="text-center w-100 px-5 d-flex flex-column align-items-center justify-content-center">
                        <h5 class="text-white text-shadow-sm ft-1 py-0 mb-3">Kirim Hadiah untuk Kedua Mempelai</h5>

                        <div class="card text-white shadow mb-5" style="border-radius: 1rem;background-color: #ffffff30;backdrop-filter: blur(2px);width:200px;">
                            <div class="card-body text-center">
                                <!-- <h3 class="fw-bold text-shadow-sm">NADYA LESTARI</h3> -->
                                <h5 class="text-shadow-sm  font-size-16">BCA</h5>
                                <h4 class="text-shadow-sm  font-size-14" style="letter-spacing: 5px;">4501576357</h4>
                            </div>
                        </div>

                        <div class="card text-white shadow" style="border-radius: 1rem;background-color: #ffffff30;backdrop-filter: blur(2px);width:200px;">
                            <div class="card-body text-center">
                                <!-- <h3 class="fw-bold text-shadow-sm">SYAHRIL AZIS</h3> -->
                                <h5 class="text-shadow-sm  font-size-16">BNI</h5>
                                <h4 class="text-shadow-sm  font-size-14" style="letter-spacing: 5px;">1255578937</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-8/1.jpg');background-size: auto;background-position: top center;background-repeat: no-repeat;">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-8/2.jpg');background-size: auto;background-position: top center;background-repeat: no-repeat;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="position-relative py-5" style="top:-50px;">
                <div class="card rounded-0 border-0">
                    <div class="card-body">
                        <h3 class="text-center ft-1">Protokol Kesehatan</h3>
                        <p class="text-center">Tamu undangan wajib menggunakan masker, mencuci tangan menggunakan sabun, gunakan hand sanitizer. Tidak berkerumunan dan saling menjaga jarak sesama tamu undangan.</p>
                        <div class="d-flex justify-content-evenly align-items-center">
                            <div class="d-flex justify-content-center align-items-center flex-column" style="max-width: 50px;">
                                <img src="assets/images/protocol/1.png" width="50px" alt="Cuci Tangan" class="img-fluid border-0">
                                <label for="" class="text-center">Cuci Tangan</label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column" style="max-width: 50px;">
                                <img src="assets/images/protocol/2.png" width="50px" alt="Gunakan Handsanitizer" class="img-fluid border-0">
                                <label for="" class="text-center">Gunakan Handsanitizer</label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column" style="max-width: 50px;">
                                <img src="assets/images/protocol/3.png" width="50px" alt="Pakai Masker" class="img-fluid border-0">
                                <label for="" class="text-center">Pakai Masker</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slides" style="top:-50px;">
                <div class="absolute text-content d-flex align-items-center vh-100 w-100" style="z-index:1 ;background-color: rgba(0,0,0,0.50);">
                    <div class="text-center w-100">
                        <h5 class="text-white text-shadow-sm ft-1 py-0 my-0">Kami Yang Berbahagia</h5>
                        <h1 class="text-white font-size-48 text-shadow-md ft-1 py-0 my-0"><?= $couple; ?></h1>
                    </div>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-7/1.JPG');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-7/2.JPG');">
                            </div>
                        </div>
                        <div class="single-photo-zoom">
                            <div class="photo" style="background-image:url('assets/images/slides/slide-7/3.JPG');">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="alertMsg" class="text-white text-center">
                <small>
                    You should check in on some of those fields below.
                </small>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="assets/themes/js/jquery-3.6.0.min.js"></script>
<script src="assets/lib/bootstraps-5/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/lib/slick/slick.js"></script>
<script src="assets/lib/aos/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
<script src="assets/themes/js/invitation.js"></script>
<script>
    var typing = new Typed(".typed-text", {
        strings: ["", "PREWEDDING VIDEO", "AZIS DAN NADYA"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true,
    });
</script>
<script>
        


	
// 		const btnLoading = document.querySelector('#btnloading')
// 		const showAlert = document.querySelector('#show-alert')
        const form = document.forms['rsvp-form']
		form.addEventListener('submit', e => {
			e.preventDefault()
			const scriptURL = 'https://script.google.com/macros/s/AKfycbwhpYC8rtTDu86oJqx4e6nvDIM9jeWBK0H5Q0ZUA1RkebHA68OfI6ixwc1r_ogo2ksx/exec'
		    
		    let btnKirim = $('#confirm')
			let name = $('#guest_name').val()
            let person = $('#person').val()
            let present = $("input[name='present']").is(":checked")
			if(!name){
                $('#guest_name').addClass('is-invalid')
                alert('Nama tidak boleh kosong')
                return false
            }else if(!person){
                $('#person').addClass('is-invalid')
                alert('Masukan Jumlah Tamu yang akan datang')
                return false
            }else if(present == false){
                alert('Pilih konfirmasi kehadiran')
                $('input[name="present"]').addClass('is-invalid')
                return false
            }
           
// 			btnLoading.classList.toggle('hidden')
			btnKirim.prop('disabled',true).html('Loading...')
			fetch(scriptURL, {
					method: 'POST',
					body: new FormData(form)
				})
				.then(response => {
				// 	showAlert.classList.toggle('hidden')
				btnKirim.prop('disabled',false).html('KIRIM KONFIRMASI')
				// 	btnLoading.classList.toggle('hidden')
				    $('#guest_name').removeClass('is-invalid')
				    $('#person').removeClass('is-invalid')
				    $('input[name="present"]').removeClass('is-invalid')
					form.reset()
					 alert('Reservasi Berhasil')
					console.log('Success!', response)
				})
				.catch(error => console.error('Error!', error.message))
		})
	</script>

</html>