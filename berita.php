
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
                                        <a class="page-scroll" href="index.php#profilsekolah">Profil Sekolah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php#guru">Staff & Guru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="prestasi.php">Prestasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php#kontak">Kontak</a>
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

    </header>

    <!--====== HEADER PART ENDS ======-->

    <!-- <section class="mt-20 text-black">
        <div class="flex flex-col text-center w-full mb-4">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Berita Terbaru<br> SMP N 4 Juwana</h1>
        </div>
        <?php
            $data = $bt->TampilSemuaWeb();
            $no = 1;
                foreach($data as $d){ 
        ?>
        <section class="py-6 lg:flex lg:justify-center">            
            <div class=" lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                <div class="lg:w-1/2">
                    <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                        style="background-image:url('admin/img/berita/<?php print $d['gambar'] ?>')">
                    </div>
                </div>

                <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                    <h4 class="text-xl font-bold md:text-xl"><?php print substr($d['judul'],0,50) ?></span>
                    </h4>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        <?php print substr($d['text_berita'],0,200) ?> ...
                    </p>
                    <a href="detail-berita.php?id=<?php print $d['id']; ?>" 
                        class="inline-flex mt-10 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-black hover:text-white text-sm">Selengkapnya</a>
                </div>
            </div>
        </section>
        <?php 
            $no++;
        } ?>     

    </section> -->
    <section id="berita" class="text-gray-600 berita-area body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title" style="margin-top:80px">Berita Terbaru</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="flex flex-wrap -m-4">
          <?php
            $data = $bt->TampilHalamanDepan();
            $no = 1;
            foreach ($data as $d) {
                {
                            $text_berita = substr($d['text_berita'], 20, 20);

            ?>
                <div class="p-4 lg:w-1/3">
                    
                    <div
                    
                    class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="admin/img/berita/<?php print $d['gambar'] ?>" width="300" height="250" alt="blog">
                        <div class="p-6"> 
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php print $d['date_publish'] ?></h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-2"><?php print substr($d['judul'], 0, 50) ?></h1>
                        <div class=""><small><?php print $text_berita; ?></small></div>
                    <div class="flex items-center">
                                <a href="detail-berita.php?id=<?php print $d['id']; ?>" 
                        class="inline-flex mt-4 text-black bg-white border-2 border-black py-2 px-8 focus:outline-none hover:bg-black hover:text-white text-sm">Selengkapnya</a>
                            </div>   
                    </div>
                        
                    </div>   
                </div>
                <?php 
                  $no++;
                }
                } ?>
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

</body>

</html>