
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Informasi Pelayanan Damkar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('halaman_depan/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('halaman_depan/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">DISDAMKAR KAB. GARUT</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#contact">Contact</a></li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); confirmLogout();">
                    <i class="fas fa-sign-out-alt"></i> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>

              <script>
                    function confirmLogout() {
                     // Menampilkan SweetAlert konfirmasi
                       Swal.fire({
                       title: 'Apakah Anda yakin?',
                       text: "Anda akan logout dari halaman ini!",
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Ya, logout!',
                       cancelButtonText: 'Batal'
                    }).then((result) => {
                   if (result.isConfirmed) {
                // Jika dikonfirmasi, submit form logout
                 document.getElementById('logout-form').submit();
            }
        })
    }
</script>

                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="{{ asset('halaman_depan/assets/img/LogoDamkar.svg') }}" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">INFORMASI PELAYANAN DAMKAR</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0"> - Web Information - By. Mohammad NurHadi</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/lahan.jpg') }}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/biawak.jpg') }}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/rumah.jpg') }}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/kios.jpg') }}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/pohon.jpg') }}" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('halaman_depan/assets/img/portfolio/cincin.jpg') }}" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Layanan Damkar Meliputi:</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead"> - Pencegahan kebakaran, seperti menyiapkan sarana dan prasarana, memeriksa desain bangunan, dan kesiapsiagaan terhadap bahaya kebakaran.
                     , Pemadaman kebakaran, seperti melakukan pemadaman di lokasi kebakaran, melokalisir penyebaran api, dan berkoordinasi dengan pihak terkait 
                      , Penyelamatan, seperti mencari, menolong, dan menyelamatkan jiwa dan harta benda manusia dari musibah kebakaran 
                      , Investigasi kebakaran 
                       , Penyelamatan hewan peliharaan 
                        , Edukasi kewaspadaan dan penanganan kebakaran .</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Untuk memanggil Damkar, Anda bisa menghubungi nomor darurat 113. !!</p>
                </div>
            </div>
            <!-- About Section Button-->
         
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Call Center</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            </style>
            </head>
            <body>
            <h4 class="left-text">1. Markas Komando   (Tlp)     :(0262) 232113 | (WA):08112255113</h4>


            <h4 class="left-text">2. UPT Wilayah 1 (Limbangan)  :(0262) 431113</h4>


            <h4 class="left-text">3. UPT Wilayah 2 (Bungbulang) :(0262) 2816175</h4>


            <h4 class="left-text">4. UPT Wilayah 3 (Pamengpeuk) :(0262) 521113</h4>


            <h4 class="left-text">5. POS Sektor Kec. Leles      :(0262) 2851291</h4>


            <h4 class="left-text">6. POS Sektor Kec. Garut Kota :(0262) 7291091</h4>


            <h4 class="left-text">7. POS Sektor Kec. Cikajang   :(0262) 2810606</h4>


            <h4 class="left-text">8. POS Sektor Kec. Malangbong :(0262) 2820803</h4>


            <h4 class="left-text">9. POS Sektor Kec. Singajaya  :(0262) 7299004</h4>


            </body>
            </html>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Alamat</h4>
                    <p class="lead mb-0">
                     Jln. Patriot, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Sosial Media</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/damkargarut113"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/damkargarut113"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/damkargarut113" ><i
                            class="fab fa-fw fa-instagram"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4"> Pantang pulang sebelum Api Padam !!</h4>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Website Informasi Pelayanan Damkar By. Hadi</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Kebakaran Lahan</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/lahan.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">WARGA MELIHAT API DI ILALANG YANG SUDAH MEMBESAR!!
                                Garut. Garut Kota . Dinas Pemadam Kebakaran (DISDAMKAR) Kabupaten Garut Unit Mako Patriot kembali melaksanakan penanganan kebakaran, mendapatkan laporan adanya kebakaran Lahan lokasi area Kp. Kondangrege Desa Regol Kabupaten Garut, Provinsi Jawa barat, Rabu (14/08/2024) Kejadian ini terjadi sekitar pukul 13.55 WIB.
                                Lahan yang kebakaran Desa Regol Dinas Pemadam kebakaran Garut meluncur ke lokasi dengan membawa satu unit Kendaraan pancar dan beberapa personilnya.
                                 . Kronologis warga melihat api sudah membesar membakar ilalang, di khawtirkan akan merabat ke rumah warga, kemudian warga melapor ke call center DAMKAR GARUT untuk segera di tangani..</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evakuasi Seekor Biawak</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/biawak.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Petugas Damkar Garut Berhasil Mengevakuasi Seekor Biawak
                                Di Kandang Ayam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Kebakaran Rumah</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/rumah.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4"> ( Diduga Korsleting listrik Rumah Permanen Kebakaran ).
                                Garut. Wanaraja. Dinas Pemadam Kebakaran (DISDAMKAR) Kabupaten Garut kembali melaksanakan penanganan kebakaran, mendapatkan laporan adanya kebakaran Rumah Permanen di Kp. Ciloa Tengah RT 03 RW 03 Desa Sindangratu kecamatan Wanaraja Kabupaten Garut, Provinsi Jawa barat, 
                                Selasa (10/09/2024) Kejadian ini terjadi sekitar pukul 09.50 WIB.
                                Bangunan yang kebakaran Desa Sindangratu Dinas Pemadam kebakaran Garut meluncur ke lokasi dengan membawa Satu unit Kendaraan pancar dan Satu Unit Water Supply Pos Sektor Kota dengan beberapa personilnya. </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Kebakaran Kios Di Pasar Ciawitali Garut</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/kios.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">KIOS PASAR CIAWITALI TERBAKAR!!!
                                Garut.Tarogong Kidul.Dinas pemadam kebakaran (DISDAMKAR) Kabupaten Garut kembali melaksanakan penanganan kebakaran. Rabu,(17/07/2024) sekitar pukul 14.31 WIB ,mendapatkan laporan adanya kebakaran sebuah kios di pasar Ciawitali blok i kecamatan Tarogong Kidul kabupaten Garut .
                                Dinas Pemadam kebakaran (Disdamkar) Kabupaten Garut meluncurkan Satu Unit Kendaraan Pancar langsung meluncurkan tempat kejadian perkara(TKP) kebakaran.
                                Kebakaran kios tersebut dengan adanya kerugian di perkirakan : Rp. -+5.000.000 rupiah. Luas terbakar 1,5x1,5 m²
                                : Kronologis Awal mula kejadian kebakaran berawal dari korsleting listrik pemilik kios sedang tidak ada ditempat,warga melihat ada percikan api merambat dalam kios tersebut..</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evakuasi Pohon Tumbang</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/pohon.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Akibat Curah hujan yang tinggi pohon tumbang menimpa Rumah warga
                                     Desa Mekarwangi Kec. Tarogong Kaler, Setelah menerima infomasi tersebut petugas dengan sigap segera meluncur ke lokasi terjadinya pohon tumbang. Setibanya dilokasi petugas segera mempersiapkan peralatan yang dibutuhkan, yaitu berupa mesin chainsaw untuk memudahkan memotong batang pohong yang sangat besar.
                                     mengakibatkan rumah salah satu warga tertimpa pohon yang tumbang..</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Evakuasi Cincin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-fire"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('halaman_depan/assets/img/portfolio/cincin.jpg') }}"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-3">Petugas Mako Disdamkar kabupaten Garut berhasil mengeluarkan cincin dijarinya 
                                    bernama Adam (11) tahun. Adam menceritakan bahwa memakai cincin , cincin tersebut susah untuk dilepas dari jari tangannya dan jari tersebut menjadi bengkak sehingga korban langsung mendatangi Call center Disdamkar . 
                                    Setelah mendengar kronologi tersebut petugas segera mempersiapkan peralatan yang dibutuhkan.
                                    Peralatan yang digunakan anggota untuk mengevakuasi cincin tersebut yakni sebuah gerinda mini dan tang. Tak perlu waktu lama cincin di jari pelapor berhasil dilepaskan.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('halaman_depan/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>


    