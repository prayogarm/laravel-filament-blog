@extends ('layout.app')

@section('content')
    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">LAYANAN TERBAIK</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">PT Home Interior Project</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <section class="w3l-bg-section py-5">
        <div class="container py-md-5 py-4">

        </div>
    </section>

    <!-- banner bottom section -->
    <section class="w3l-services pb-5">
        <div class="container pb-md-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <i class="fa fa-xing" aria-hidden="true"></i>
                        <h4><a class="title-head">Perfect Design</a></h4>
                        <p>Desain yang sempurna adalah inti dari setiap proyek kami, menghadirkan estetika dan fungsi yang harmonis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <h4><a class="title-head">Carefully Planned</a></h4>
                        <p>Perencanaan yang teliti memastikan setiap detail diperhatikan, menciptakan solusi interior sesuai keinginan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fa fa-angellist" aria-hidden="true"></i>
                        <h4><a class="title-head">Smartly Execute</a></h4>
                        <p>Eksekusi cerdas mewujudkan desain Anda dengan presisi, memastikan hasil akhir yang memuaskan dan tahan lama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->
     
    <!-- about-2 section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 about-2-secs-right mb-lg-0 mb-4 text-center">
                        <img src={{asset("images/CATALOGUE11.jpg")}} alt="" class="img-fluid img-responsive m-auto" />
                    </div>
                    <div class="col-lg-3 about-2-secs-left pl-lg-2">
                        <h6 class="mb-4">Blockboard Standard</h6>
                        
                        <p class="mt-3">Blockboard Standard menawarkan kekuatan dan daya tahan yang andal dengan harga yang terjangkau, ideal untuk kebutuhan interior sehari-hari.</p>
                        <a class="btn btn-style mt-5" href="assets/pdf/CATALOGUE PT. HOME INTERIOR PROJECT.pdf">Lihat Lainnya</a>
                    </div>
                <div class="col-lg-3 about-2-secs-right mb-lg-0 mb-4 text-center mt-3">
                    <img src={{asset("images/CATALOGUE10.jpg")}} alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-3 about-2-secs-left pl-lg-2">
                    
                    <h6 class="mb-4">Blockboard Medium</h6>
                    
                    <p class="mt-3">Blockboard Medium memberikan keseimbangan antara kualitas dan biaya, dengan ketahanan yang lebih baik dan finishing yang rapi untuk aplikasi interior menengah.</p>
                    <a class="btn btn-style mt-5" href="assets/pdf/CATALOGUE PT. HOME INTERIOR PROJECT.pdf">Lihat Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->
     
    <!-- about-2 section -->
    <section class="w3l-about-2">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 about-2-secs-right mb-lg-0 mb-4 text-center">
                    <img src={{asset("images/CATALOGUE9.jpg")}} alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-3 about-2-secs-left pl-lg-2">
                    <h6 class="mb-4">Multiplek Premium</h6>
                    
                    <p class="mt-3">Multiplek Premium adalah pilihan terbaik untuk hasil akhir yang berkualitas tinggi, memberikan kekuatan superior dan tampilan elegan untuk proyek interior yang lebih menuntut.</p>
                    <a class="btn btn-style mt-5" href="assets/pdf/CATALOGUE PT. HOME INTERIOR PROJECT.pdf">Lihat Lainnya</a>
                </div>
                <div class="col-lg-3 about-2-secs-right mb-lg-0 mb-4 text-center mt-3">
                    <img src={{asset("images/CATALOGUE8.jpg")}} alt="" class="img-fluid img-responsive m-auto" />
                </div>
                <div class="col-lg-3 about-2-secs-left pl-lg-2">
                    
                    <h6 class="mb-4">PVC Board</h6>
                    
                    <p class="mt-3">PVC Board menghadirkan solusi yang tahan air dan mudah perawatan, cocok untuk area yang memerlukan ketahanan ekstra dan tampilan modern yang praktis.</p>
                    <a class="btn btn-style mt-5" href="assets/pdf/CATALOGUE PT. HOME INTERIOR PROJECT.pdf">Lihat Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-2 section -->
@endsection