@extends ('layout.app')
    
@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Portfolio</li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Semua</li>
            </ul>
        </div>
    </section>
</div>

<section class="w3l-bg-section py-5">
    <div class="container py-md-5 py-4">

    </div>
</section>

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

<section class="d-flex justify-content-center py-5 w3l-blog-main">
    <div class="container py-md-5 py-4">
        <div class="row py-sm-3">
            @foreach ($portfolio as $row)
                <div class="col-md-4 mt-md-0 mb-4 p-2">
                    <div class="card">
                        <a href="{{ route('portfolio.detail', $row->id) }}"> <img class="img-fluid img-responsive" style="max-height: 300px;" src="{{asset("storage/$row->cover")}}"
                                alt="" /></a>
                        <div class="card-img-overlay">
                            <span class="badge-pill badge-pos">{{$row->kategori->name}}</span>
                        </div>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a href="blog-single.html">{{$row->title}}</a>
                                </h4>
                                <p class="mt-2 mb-4">{{ $row->kategori->name }} · {{$row->size}}m² · {{$row->jumlah_ruangan}} Ruangan</p>
                            </div>
                            <div class="d-flex align-items-center card-text">
                                <a class="text-time">
                                    <span class="fa fa-user mr-1"></span> {{$row->designer->name}} 
                                    <a class="text-small pl-1" style="font-size: 13px">- {{$row->designer->bio}}</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection