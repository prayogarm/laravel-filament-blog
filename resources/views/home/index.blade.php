@extends ('layout.app')
    
@section('content')
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-sm-4 mb-3 title">We turn your Furniture
                        <span>Fantastic to Reality!</span></h3>
                    <p>Kami lebih dari sekadar membangun. Tim profesional kami membantu menerjemahkan visi Anda ke dalam desain 3D realistis, memudahkan Anda melihat detail konsep sebelum pengerjaan dimulai. Mari ciptakan ruang yang Anda impikan bersama kami!</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn btn-style" href="https://wa.link/cnohtr" target="_blank">Konsultasi Gratis</a>
                    </div>
                </div>
                <div class="col-md-6 banner-right mt-md-0 mt-4 text-right">
                    <img class="img-fluid" src={{asset("images/poto1.jpg")}} alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <section class="d-flex justify-content-center py-5">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-heading mb-sm-5 mb-3">
                        <h3 class="title-style mb-2">Desain Interior Sesuai Ruangan</h3>
                        <p class="lead">
                            Koleksi inspirasi desain interior terbaik oleh tim profesional Home Interior Project
                        </p>
                    </div>
                </div>
            </div>
            <div class="row py-sm-3">
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Kitchen Set</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Lemari Custom</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Backdrop TV</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Kamar Set</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Sekat Ruangan</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src={{asset("images/9.jpg")}} alt="#" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="#">Lihat Lainnya..</a>
                                </h4>
                                <p class="des mt-2 mb-2">Desain dapur modern dengan kualitas premium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- banner bottom section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-sm-4">
            <div class="row">
                <div class="col-lg-5 left-wthree-img mb-lg-0 mb-5">
                    <img class="img-fluid img-responsive" src={{asset("images/about.png")}} alt=" ">
                </div>
                <div class="col-lg-7 about-right-faq align-self pl-lg-5">
                    <h3 class="title-style mb-2">Let's Make your Interior Better</h3>
                    <p class="mt-3">Kami berpengalaman lebih dari 7 tahun dalam bidang interior serta memiliki tim yang profesional.Kami tidak hanyak sekedar membangun, namun kami juga membantu anda dalam menerjemahkan keinginan anda kedalam desain 3D realistik, sehingga anda mudah dalam melihat hasil konsep secara lebih detail.</p>
                    <p class="mt-3">Spesialis Custom Interior & Furniture Berpengalaman Lebih Dari 7 Tahun. Kami siap memberikan sentuhan unik pada rumah Anda, menciptakan ruang yang sesuai dengan gaya hidup Anda.</p>
                    <div class="row mt-5">
                        <div class="col-4 about-info-m">
                            <div class="about-detail">
                                <h4>35</h4>
                                <p>Tenaga Ahli dan Profesional</p>
                            </div>
                        </div>
                        <div class="col-4 about-info-m">
                            <div class="about-detail">
                                <h4>500+</h4>
                                <p>Pesanan interior selesai</p>
                            </div>
                        </div>
                        <div class="col-4 about-info-m">
                            <div class="about-detail">
                                <h4>300+</h4>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- grids section -->
    <section class="w3l-grids-sec py-5" id="services">
        <div class="container py-md-4">
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 back-image-sec p-0">
                    <div class="grid-content-sec column-content p-4">
                        <h4><a href="#about" class="title-style-anchor">RAB Terbuka</a></h4>
                        <p class="para">Rencana Anggaran Biaya (RAB) transparan. Sehingga kedua belah pihak (penyedia jasa dan pelanggan) bisa mendiskusikan secara terbuka.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                    <div class="img-column">
                        <img src={{asset("images/poto3.jpg")}} alt="product" class="img-responsive rounded-0 ">
                    </div>
                    <div class="column-content mt-sm-4 p-4">
                        <h4><a href="#about" class="title-style-anchor">Bahan Berkualitas</a></h4>
                        <p class="para">Kami hanya menggunakan material berkualitas terbaik untuk memastikan hasil yang tahan lama dan memukau.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 p-0 mt-lg-0 mt-4 d-grid-res">
                    <div class="column-content respon-order-2 mb-lg-4 p-4">
                        <h4><a href="#about" class="title-style-anchor">Tenaga Profesional</a></h4>
                        <p class="para">Dikerjakan oleh tenaga profesional yang memiliki kompetensi serta berpengalaman. Sehingga menghasilkan produk berkualitas.</p>
                    </div>
                    <div class="img-column respon-order-1">
                        <img src={{asset("images/poto2.jpg")}} alt="product" class="img-responsive rounded-0">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->

    <!-- background section -->
    <div class="w3l-background-sec py-5">
        <div class="container py-md-4">
            <div class="content-section py-5">
                <div style="max-width:600px" class="ml-auto py-4 px-sm-5 px-4">
                    <h5 class="title-small mb-2">Promo Kemerdekaan</h5>
                    <h3 class="title-style mb-2">Potongan 500rb/m <br> Untuk 5 Orang Pertama!</h3>
                    <p>Jangan Sampai Ketinggalan! Diskon Kemerdekaan Terbatas! <br> Klik tombol dibawah dapatkan diskon Eksklusif.</p>
                    <ul class="list-coast mt-4">
                        <li>Rp 1.700.000</li>
                        <li class="ml-3 light-color"><del>Rp 2.200.000</del></li>
                    </ul>
                    <div class="mt-5">
                        <a href="promo.html" class="btn btn-style">Dapatkan Diskon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //background section -->

    <!-- gallery section -->
    <div class="gallery section-agile py-5" id="gallery">
        <div class="container py-lg-5 py-md-4">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2"> Portfolio Desain Interior Terbaru</h3>
                        <p class="lead">Koleksi inspirasi desain modern klasik terbaru, timeless, berkelas, dan sensasional. Temukan koleksi premiumnya di sini!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gallery_grids">
                <div class="col-4 gallery-img-grid gallery_grid1 hover14 column">
                    <div class="gallery_effect">
                        <a href={{asset("images/1.jpg")}} class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/1.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/2.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/2.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/3.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/3.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/4.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/4.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/5.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/5.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/6.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/6.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/7.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/7.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/8.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/8.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-4 gallery-img-grid hover14 column">
                    <div class="gallery_effect">
                        <a href="assets/images/9.jpg" class="js-img-viwer d-block">
                            <figure>
                                <img src={{asset("images/9.jpg")}} alt=" " class="img-fluid" />
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery section -->

    <!-- testimonials -->
    <section class="w3l-clients" id="testimonials">
        <div class="container">
            <div class="testimonial-row py-5 px-sm-5 px-4">
                <div class="row py-md-5 py-4">
                    <div class="col-lg-4 heading align-self pr-xl-5 mb-lg-0 mb-4">
                        <h3 class="title-style mb-2">Testimoni Pelanggan Kami</h3>
                        <p>Kepercayaan dan kepuasan pelanggan adalah prioritas utama kami. Inilah beberapa testimoni dari mereka yang telah merasakan manfaat dari produk dan layanan kami.
                        </p>
                    </div>
                    <div id="owl-demo1" class="col-lg-8 owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Sangat puas, rapi banget pengerjaanya. Bakal jadi langganan buat kedepannya</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Febry</h3>
                                            <p class="indentity">Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Terimakasih sudah dibuatkan kitchen set sesuai keinginan. kerjaanya rapi banget, gak salah pilih pokoknya</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Intan</h3>
                                            <p class="indentity">Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Alhamdulillah, hasilnya top banget, super rapi. pengerjaanya nya juga sangat cepat dan pemilihan bahannya sangat bagus</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Nauza</h3>
                                            <p class="indentity">Client</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->
@endsection