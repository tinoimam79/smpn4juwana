<?php
    include "admin/controller/c_prestasi.php";
    $pts = new Prestasi; 
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

    
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-1/6 mx-auto">
                <div class="flex flex-col text-center w-full mb-4">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Prestasi SMPN 4 Juwana</h1>
                </div>
                <div class="overflow-x-auto">
                      <!-- Projects table -->
                      <table
                        class="items-center w-full bg-transparent border-collapse border border-slate-400"
                      >
                        <thead>
                          <tr>                          
                            <th class="px-4 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            No.
                            </th>                         
                            <th class="px-4 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Nama Peraih
                            </th>
                            <th class="px-2 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Nama Prestasi
                            </th>
                            <th class="px-2 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Juara
                            </th> 
                            <th class="px-2 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Tahun
                            </th> 
                            <th class="px-2 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Kategori 
                            </th> 
                            <th class="px-2 bg-blueGray-100 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-m uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Tingkat
                            </th>
                          </tr>
                        </thead>
                        <?php
                        $datapres = $pts->TampilSemuaList();
                        $no = 1;
                            foreach($datapres as $p){ ?>
                        <tbody class="bg-white hover:bg-gray-200">
                          <tr class="hover:text-lightBlue-500 ">
                            <td class="odd:bg-white even:bg-grey  border-t-0 px-4 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4 ">
                            <?php print $no; ?>
                            </td>    
                            <td class="odd:bg-white even:bg-grey  border-t-0 px-4 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4 ">
                              <?php print $p['nama_peraih'] ?>
                            </td>                            
                            <td class="odd:bg-white even:bg-grey  border-t-0 px-2 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4">
                              <?php print $p['nama_prestasi'] ?>
                            </td>
                            <td class="border-t-0 px-2 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4">
                              <?php print $p['juara'] ?>
                            </td>
                            <td class="border-t-0 px-2 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4">
                              <?php print $p['tahun'] ?>
                            </td>
                            <td class="border-t-0 px-2 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4">
                              <?php print $p['kategori'] ?>
                            </td>
                            <td class="border-t-0 px-2 align-middle border-l-0 border-r-0 border border-slate-300 text-s whitespace-nowrap p-4">
                              <?php print $p['tingkat'] ?>
                            </td>
                          </tr>
                          </tbody>

                          <?php 
                            $no++;
                          } ?>
                      </table>
                      <div class="bg-white py-4 px-6 rounded">
                      </div>
                    </div>
            </div>
        </div>
    </section>
    <!--====== BACK TO TOP PART START ======-->


    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i>JHJWHFSH</a>

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