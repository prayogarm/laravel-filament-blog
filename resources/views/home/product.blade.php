@extends ('layout.app')
    
@section('content')
    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">PRODUK BERKUALITAS</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">PT Home Interior Project</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- specialties section -->
    <section class="w3l-grids-6 py-5">
        <div class="container py-md-5 py-4">
            <div class="row text-center justify-content-center">
                @foreach ($kategori as $row)
                    <div class="col-md-3 col-sm-6 ">
                        <div class="gd-innf">
                            <a href="{{ route('category.portfolio', $row->slug) }}"><img class="img-fluid img-responsive" src={{ asset("storage/$row->cover") }}
                                    alt=" "></a>
                            <h3> <a href="{{ route('category.portfolio', $row->slug) }}" class="link-text">{{ $row->name }}</a></h3>
                            <a href="{{ route('category.portfolio', $row->slug) }}" class="btn blog-btn mt-2">{{ $row->desc }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- //specialties section -->

    <!-- image with content section -->
    <section class="image-with-content py-sm-5 py-4">
        <div class="container py-md-5">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5 content-sec-1">
                    <h4><a class="title-style-anchor">Comfortable Family</a></h4>
                    <p>Ciptakan kenyamanan sejati bagi keluarga Anda dengan desain interior yang hangat dan fungsional. Kami menghadirkan solusi yang tidak hanya estetis tetapi juga memberikan kenyamanan yang menyatukan seluruh keluarga.
                    </p>
                </div>
                <div class="col-lg-8 col-md-7 pl-lg-5 mt-md-0 mt-sm-5 mt-4">
                    <img src={{asset("images/poto5.jpg")}} alt="product" class="img-responsive">
                </div>
            </div>
            <div class="row align-items-center d-grid-res mt-5 pt-md-4">
                <div class="col-lg-8 col-md-7 pr-lg-5 mt-md-0 mt-sm-5 mt-4 respon-order-2">
                    <img src={{asset("images/poto6.jpg")}} alt="product" class="img-responsive">
                </div>
                <div class="col-lg-4 col-md-5 content-sec-1 respon-order-1">
                    <h4><a  class="title-style-anchor">Professional Work</a></h4>
                    <p>Dengan dedikasi dan keahlian tinggi, kami memberikan hasil kerja profesional yang memenuhi standar tertinggi. Setiap detail diperhatikan untuk memastikan bahwa hasil akhir tidak hanya memuaskan, tetapi juga melampaui ekspektasi Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //image with content section -->

    <!-- pricing section -->
    <section class="w3l-pricing py-5" id="price">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Pilihan Produk Terbaik</h3>
                        <p class="lead">
                            Perkiraan biaya pembangunan bisa menyesuaikan dengan ketersediaan anggaran dan keinginan Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row t-in justify-content-center">
                <div class="col-lg-4 col-md-6 price-main-info">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Kualitas Standard</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">Rp</span>1.700.000 <span class="sub-coast">/m</span>
                                <br>
                                <span class="align-top"><del>Rp 2.200.000</del></span>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                                <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                                <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                                <li> <span class="fa fa-check"></span> Inner Melamin</li>
                                <li> <span class="fa fa-check"></span> Bahan Blockboard</li>
                                <li class="disable"> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                                <li class="disable"> <span class="fa fa-check"></span> Bahan Multiplek</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="https://wa.link/7z50j7" class="btn btn-style"> Tanya Produk Ini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 price-main-info mt-md-0 mt-4">
                    <div class="price-inner card box-shadow active">

                        <div class="card-body">
                            <label class="price-label">Recommended</label>
                            <h4 class="text-uppercase text-center mb-3">Kualitas Medium</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">Rp</span>2.200.000 <span class="sub-coast">/m</span>
                                <br>
                                <span class="align-top"><del>Rp 2.700.000</del></span>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                                <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                                <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                                <li> <span class="fa fa-check"></span> Inner Melamin</li>
                                <li> <span class="fa fa-check"></span> Bahan Blockboard</li>
                                <li> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                                <li class="disable"> <span class="fa fa-check"></span> Bahan Multiplek</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="https://wa.link/9g2tny" class="btn btn-style"> Tanya Produk Ini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 price-main-info mt-lg-0 mt-4">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Kualitas Premium</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">Rp</span>2.700.000 <span class="sub-coast">/m</span> 
                                <br>
                                <span class="align-top"><del>Rp 3.200.000</del></span>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Survey Lokasi</li>
                                <li> <span class="fa fa-check"></span> Desain 3D Interior</li>
                                <li> <span class="fa fa-check"></span> Finishing HPL (ex TACO)</li>
                                <li> <span class="fa fa-check"></span> Inner Melamin</li>
                                <li> <span class="fa fa-check"></span> Sudut sambungan HPL ditusir</li>
                                <li> <span class="fa fa-check"></span> Bahan Multiplek</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="https://wa.link/zre350" class="btn btn-style"> Tanya Produk Ini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing section -->
@endsection