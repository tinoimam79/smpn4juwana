<?php
    include "./admin/controller/c_berita.php";
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
                                <img src="assets/images/smp4.png" width="60" height="60" alt="shape">
                            </a>

                            <button class="block navbar-toggler focus:outline-none md:hidden" type="button"
                                data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <!-- justify-center hidden md:flex collapse navbar-collapse sub-menu-bar -->
                            <div class="absolute left-0 z-30 hidden w-full px-5 py-0 duration-300 bg-white shadow md:opacity-100 md:w-auto collapse navbar-collapse md:block top-100 mt-full md:static md:bg-transparent md:shadow-none"
                                id="navbarOne">
                                <ul
                                    class="items-center content-start mr-auto lg:justify-center md:justify-end navbar-nav md:flex">
                                    <!-- flex flex-row mx-auto my-0 navbar-nav -->
                                    <li class="nav-item ">
                                        <a class="page-scroll" href="index.php">Beranda</a>
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
                        <h4 class="title">Berita Terbaru</h4>
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