
<?php
    include "admin/controller/c_staff.php";
    include "admin/controller/c_prestasi.php";
    include "admin/controller/c_berita.php";
    $pt = new Staff; 
    $pts = new Prestasi; 
    $bt = new Berita; 
?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>SMP Negeri 4 Juwana</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/smp4.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== tailwind css ======-->
    <link rel="stylesheet" href="assets/css/tailwind.css">

<style>
    .custom-image {
        width: 250px;
        /* height: auto; */
        height: 350px;
        object-fit: cover;
        padding-left: auto;
    }
    .fade-line {
  opacity: 0;
  animation: fadeAnimation 3s ease-in-out forwards;
}

@keyframes fadeAnimation {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
    @media (max-width: 767px) {
        /* Media query untuk perangkat mobile dengan lebar maksimal 767px */
        .custom-image {
            width: auto;
            /* margin: 10px; */
            padding-right: 1px; /* Padding untuk mobile */
            padding-left: 1px; /* Padding untuk mobile */
        }
    }
</style>

</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <nav class="flex items-center justify-between navbar navbar-expand-md">
                            <a class="lg:px-10 md:2 navbar-brand" href="index.php">               
                                <img src="assets/images/smp4.png" width="60" height="60" >
                            </a>

                            <button class="block navbar-toggler focus:outline-none md:hidden" type="button"
                                data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
                            <div class="absolute left-0 z-30 hidden w-full px-5 py-0 duration-300  shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none"
                                id="navbarOne">
                                <ul
                                    class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
                                    <!-- flex flex-row mx-auto my-0 navbar-nav -->
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#beranda">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#profilsekolah">Profil Sekolah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#guru">Staff & Guru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#prestasi">Prestasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#kontak">Kontak</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="unduhan.php">Unduhan</a>
                                    </li>
                                </ul>
                            </div>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="beranda" class="relative bg-center bg-no-repeat bg-cover z-10 w-full beranda-area header-hero"
            style="background-image: url(assets/images/sekolah2.jpeg);margin-top:100px;height:650px;" >
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-5/6 xl:w-2/3">
                        <div class="pt-48 pb-64 text-center header-content">
                            <h3  id="welcome-text" class="mb-5 text-4xl font-bold leading-8 text-white md:text-5xl" style="line-height:60px;">Selamat Datang di Website Official <br> SMP Negeri 4 Juwana</h3><hr class="mb-5 fade-line">
                                         <p id="description" class="mb-10 font-normal leading-8 text-white" style="line-height:20px">Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada setiap siswa. Selamat datang dan bersemangatlah untuk mengejar prestasi yang luar biasa</p>
                            <p class="px-5 mb-10 text-2xl text-black"> </p>
                            <!-- <ul class="flex flex-wrap justify-center">
                                <li><a class="mx-3 main-btn gradient-btn" href="javascript:void(0)">Selengkapnya</a>
                                </li>
                            </ul> -->
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col text-center w-full">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Sambutan Kepala Sekolah</h1>
                </div>
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <img src="assets/images/0.jpg"
                            class="w-30 h-30 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400" loading="lazy">
                        </img>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-bold title-font mt-4 text-gray-900 text-lg">Sri Nurhayati, S.Pd., M.Pd</h2>

                            <p class="text-base">Kepala Sekolah</p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">Assalamu'alaikum Wr. Wb. Salam sejahtera bagi kita semua. Oom swastiastu salam budaya namo kebajikan.<br>
                            <br>
                            Puji syukur kami panjatkan kehadirat ALLAH SWT atas limpahan rahmat, taufik serta hidayah-Nya sehingga website SMP NEGERI 4 JUWANA berhasil terbit, kehadiran website SMP NEGERI 4 JUWANA diharapkan dapat memudahkan dalam penyampaian informasi secara terbuka kepada warga sekolah, alumni dan masyarakat serta instansi lain yang terkait. 
                            Semoga dengan kehadiran website ini akan terjalin informasi, komunikasi antar alumni khususnya sebagai salah satu upaya sekolah mendapatkan informasi tentang SMP NEGERI 4 JUWANA.
                            <br><br>Wassalamu'alaikum Wr. Wb.</p>
                        <!-- <a class="text-red-500 inline-flex items-center">Selengkapnya
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profilsekolah" class="text-white profilsekolah-area bg-gray-800 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                    <h1 class="title-font font-bold text-3xl mb-2">SMP Negeri 4 Juwana</h1>
                    <div class="leading-relaxed text-lg">
                        SMP NEGERI 4 JUWANA adalah salah satu satuan pendidikan dengan jenjang 
                        SMP di TLUWAH, Kec. Juwana, Kab. Pati, Jawa Tengah. SMP NEGERI 4 JUWANA 
                        memiliki akreditasi A, berdasarkan sertifikat 220/BAP-SM/X/2016.
                    </div>
                    <!-- <a href="profil.html" -->
                    <a href="https://www.youtube.com/embed/4pS4JPIYwAA"
                        class="inline-flex mt-10 text-white bg-gray-800 border-2 border-white py-2 px-8 focus:outline-none hover:bg-white hover:text-black text-sm">TAMPILKAN
                        PROFIL SEKOLAH</a>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <iframe class="object-cover object-center w-full h-full" src="https://www.youtube.com/embed/4pS4JPIYwAA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
        </div>
    </section>

    <section id="guru" class="text-black berita-area body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Staff dan Guru</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
           <div class="flex flex-wrap -m-4">
    <!-- Dimulai dari sini ya mas beritanya -->

    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-12 items-center justify-start transition ease-out duration-700">

                    <?php
                    $data = $pt->TampilSemuaWeb();
                    $no = 1;
                    foreach($data as $d){ ?>
                    <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                        <img  class="custom-image" src="admin/img/staff/<?php print $d['foto_staff'] ?>" width="300" height="500" object-fit="cover" loading="lazy"  alt="kepala-sekolah" />
                        <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                            <h2 class="lg:text-l leading-4 text-base lg:leading-5 text-white"> <?php print $d['jabatan'] ?></h2>
                            <div class="flex h-full items-end pb-6">
                                <h3 class="text-s lg:text-s font-semibold leading-5 lg:leading-6 text-white"> <?php print $d['nama'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $no++;
                    } ?>

                    <div class="flex flex-shrink-0 relative w-1/3 sm:w-auto">
                    </div>

                </div>
            </div>
            <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</div>
            <!-- <a
                class="inline-flex mx-auto mt-10 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-gray-800 hover:text-white text-sm" href="berita.html">TAMPILKAN
                SEMUA BERITA</a> -->
        </div>
    </section>
    <section id="berita" class="text-gray-600 berita-area body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Berita Terbaru</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex flex-wrap -m-4">
          <?php
            $data = $bt->TampilHalamanDepan();
            $no = 1;
            foreach ($data as $d) {
                if ($no < 4) {
                            $text_berita = substr($d['text_berita'], 20, 20);

            ?>
                <div class="p-4 lg:w-1/3">
                    
                    <div
                    
                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="admin/img/berita/<?php print $d['gambar'] ?>" width="300" height="250" loading="lazy" alt="blog">
                        <div class="p-6"> 
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php print $d['date_publish'] ?></h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php print substr($d['judul'], 0, 50) ?></h1>
                        <div class=""><small><?php print $text_berita; ?></small></div>
                    <div class="flex items-center ">
                                <a href="detail-berita.php?id=<?php print $d['id']; ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>   
                    </div>
                        
                    </div>   
                </div>
                <?php 
                  $no++;
                }
                } ?>
            </div>
            <button
                class="flex mx-auto mt-10 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-gray-800 hover:text-white text-sm"><a href="berita.php">TAMPILKAN
                SEMUA BERITA</a>
            </button>
        </div>
    </section>

    <!-- <section id="berita" class="text-gray-600 prestasi-area body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                    <h4 class="title">Berita Terbaru</h4>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -m-4">
            <?php
            $data = $bt->TampilHalamanDepan();
            $no = 1;
            foreach ($data as $d) {
            ?>
                <div class="p-6 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="admin/img/berita/<?php print $d['gambar'] ?>" width="150" height="250" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php print $d['date_publish'] ?></h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?php print substr($d['judul'], 0, 50) ?></h1>
                            <p class="leading-relaxed mb-3"><?php print substr($d['text_berita'], 0, 100) ?> ...</p>
                            <div class="flex items-center flex-wrap">
                                <a href="detail-berita.php?id=<?php print $d['id']; ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $no++;
            } ?>
        </div>
         <button   class="flex mx-auto mt-10 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-gray-800 hover:text-white text-sm"><a href="prestasi.php">TAMPILKAN
                SEMUA PRESTASI</a>
            </button>
        </div>
</section> -->


    <section id="prestasi" class="text-gray-600 prestasi-area body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Prestasi Terbaru</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex flex-wrap -m-4">
                <?php
                $datapres = $pts->TampilSemuaWeb();
                $no = 1;
                    foreach($datapres as $p){ ?>
                <div class="p-4 lg:w-1/3">
                    <div
                        class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php print $p['nama_prestasi'] ?></h2>
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">JUARA <?php print $p['juara'] ?></h1>
                        <p class="leading-relaxed mb-3"><?php print $p['nama_peraih'] ?> meraih Juara <?php print $p['juara'] ?> <?php print $p['nama_prestasi']?> <?php print $p['tahun'] ?> </p>
                        
                    </div>
                </div>
                <?php 
                  $no++;
                } ?>
            </div>
            <button
                class="flex mx-auto mt-10 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-gray-800 hover:text-white text-sm"><a href="prestasi.php">TAMPILKAN
                SEMUA PRESTASI</a>
            </button>
        </div>
    </section>

    <section id="kontak" class="text-gray-600 kontak-area body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                    marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.253093932923!2d111.1488871!3d-6.731581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7827d9e9a85c9868!2sSmp%20N%204%20Juwana!5e0!3m2!1sid!2sid!4v1654415131561!5m2!1sid!2sid"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-2/3 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Tluwah, Kec. Juwana, Kabupaten Pati, Jawa Tengah 59185
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <!-- <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">123-456-7890</p> -->
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-xl mb-1 font-medium title-font">Kirim Pesan</h2>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                    <input type="text" id="name" name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Pesan</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="flex mx-auto text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-gray-800 hover:text-white text-sm">KIRIM</button>
            </div>
        </div>
    </section>
        <footer class="sticky-footer bg-white mt-10 mb-5">
             <div class="container bg-neutral-900 px-6 pt-6">
    <div class="mb-6 flex justify-center">
      <a
        href="#!"
        type="button"
        class="mr-3 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light"
           style="font-size: 20px; width: 40px; height: 40px;">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>

      <a
        href="#!"
        type="button"
        class="mr-3 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
         data-te-ripple-color="light"
           style="font-size: 20px; width: 40px; height: 40px;">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>


      <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light"
           style="font-size: 20px; width: 40px; height: 40px;">

        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>

      
    </div>
  </div
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; SMPN 4 JUWANA 2022</span>
            </div>
        </div>
    </footer>

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Validator js ======-->
    <script src="assets/js/validator.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
<script>
  const slider = document.getElementById('slider');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');

  function slideLeft() {
    const slideWidth = slider.firstElementChild.offsetWidth;
    slider.style.transform = `translateX(${slideWidth}px)`;

    setTimeout(() => {
      slider.style.transition = 'transform 0s';
      slider.insertBefore(slider.lastElementChild, slider.firstElementChild);
      slider.style.transform = 'translateX(0)';
      setTimeout(() => {
        slider.style.transition = '';
      }, 50);
    }, 700);
  }

  function slideRight() {
    const slideWidth = slider.firstElementChild.offsetWidth;
    slider.style.transform = `translateX(-${slideWidth}px)`;

    setTimeout(() => {
      slider.style.transition = 'transform 0s';
      slider.appendChild(slider.firstElementChild);
      slider.style.transform = 'translateX(0)';
      setTimeout(() => {
        slider.style.transition = '';
      }, 50);
    }, 700);
  }

  prevButton.addEventListener('click', slideLeft);
  nextButton.addEventListener('click', slideRight);

  // Fungsi untuk geser otomatis setiap beberapa detik
  function autoSlide() {
    slideRight();
  }

  setInterval(autoSlide, 3000); // Ubah angka 3000 menjadi waktu geser yang diinginkan dalam milidetik (misal: 5000 untuk geser setiap 5 detik)
</script>
<script>
const welcomeElement = document.getElementById("welcome-text");
const descriptionElement = document.getElementById("description");

const welcomeText = welcomeElement.innerHTML;
const descriptionText = descriptionElement.innerHTML;

welcomeElement.innerHTML = "";
descriptionElement.innerHTML = "";

let charIndexWelcome = 0;
let textWelcome = "";

let charIndexDescription = 0;
let textDescription = "";

function typeEffectWelcome() {
  if (charIndexWelcome < welcomeText.length) {
    textWelcome += welcomeText.charAt(charIndexWelcome);
    welcomeElement.innerHTML = textWelcome;
    charIndexWelcome++;
    setTimeout(typeEffectWelcome, 50);
  } else if (charIndexWelcome === welcomeText.length) {
    typeEffectDescription();
  }
}

function typeEffectDescription() {
  if (charIndexDescription < descriptionText.length) {
    textDescription += descriptionText.charAt(charIndexDescription);
    descriptionElement.innerHTML = textDescription;
    charIndexDescription++;
    setTimeout(typeEffectDescription, 30);
  }
}

window.addEventListener("DOMContentLoaded", typeEffectWelcome);

</script>
<script>
    
</script>


</body>

</html>