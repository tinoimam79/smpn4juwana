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
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#beranda">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php#profilsekolah">Profil Sekolah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.php#guru">Staff & Guru</a>
                                    </li>
                                    <li class="nav-item active">
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

    
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-1/6 mx-auto  ">
                <div class="flex flex-col text-center w-full mb-4 mt-10">
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