@extends ('layout.app')
    
@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Portfolio</li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{$portfolio->title}}</li>
            </ul>
        </div>
    </section>
</div>

<section class="d-flex justify-content-center py-2 text11 text-11">
    <div class="container py-md-5 py-4">
        <div class="row">
            <div class="col-lg-9 text11-content m-auto">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($portfolio->images as $image)
                        <swiper-slide>
                            <img src="{{asset("storage/$image")}}" alt="{{$portfolio->title}}" style="width: auto; height:400px">
                        </swiper-slide>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <h4>{{$portfolio->title}}</h4>
                <h6>
                    <span class="fa fa-pencil mr-1"></span>{{$portfolio->type}}
                    <span class="fa fa-object-group mr-1 ml-1"></span>{{$portfolio->size}}m²
                    <span class="fa fa-home mr-1 ml-1"></span>{{$portfolio->kategori->name}}
                    <span class="fa fa-map-marker mr-1 ml-1"></span>{{$portfolio->location}}
                </h6>

                <h5 class="mb-1 mb-1 mt-3">Mengenai Project ini</h5>
                <p class="mb-4">{{$portfolio->description}}</p>

                <h5 class="mb-1 mb-1 mt-3">Desain Oleh</h5>
                <h6>{{$portfolio->designer->name}} - {{$portfolio->designer->bio}}</h6>

                <hr>

                <h4>Lihat isi desain!</h4>
                <h5 class="mt-3">Gambar Hasil</h5>
                <div class="gallery section-agile" id="gallery">
                    <div class="container py-md-4">
                        <div class="row gallery_grids">
                            @foreach($portfolio->gambar_hasil as $image)
                                <div class="col-4 gallery-img-grid gallery_grid1 hover14 column">
                                    <div class="gallery_effect">
                                        <a href="{{asset("storage/$image")}}" class="js-img-viwer d-block">
                                            <figure>
                                                <img src="{{asset("storage/$image")}}" alt=" " class="img-fluid" />
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <h5 class="mt-3">Gambar Sebelum dan Sesudah</h5>
                <div class="gallery section-agile" id="gallery">
                    <div class="container py-md-4">
                        <div class="row gallery_grids">
                            @foreach($portfolio->before_after as $image)
                                <div class="col-4 gallery-img-grid gallery_grid1 hover14 column">
                                    <div class="gallery_effect">
                                        <a href="{{asset("storage/$image")}}" class="js-img-viwer d-block">
                                            <figure>
                                                <img src="{{asset("storage/$image")}}" alt=" " class="img-fluid" />
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center pt-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Tertarik dengan project ini?</h5>
                            <a href="https://wa.link/7e6794" class="btn btn-danger" style="padding-left: 4rem;padding-right: 4rem;">Tanya Harga</a>
                            <p class="card-text small">Anda belum akan dikenakan biaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: "auto",
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
    </script>
@endpush
@endsection