@extends ('layout.app')
    
@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Portfolio</li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{$kategori->name}}</li>
            </ul>
        </div>
    </section>
</div>

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
            @foreach ($portfolio as $row)
                <div class="col-md-4 mt-md-0 mb-4 col-6 p-2">
                    <div class="card shadow-sm">
                        <a href="#"> <img class="img-fluid img-responsive" style="max-height: 250px;" src="{{asset("storage/$row->cover")}}" alt="" /></a>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a style="color: black; font-weight:600" href="">{{ $row->description }}</a>
                                </h4>
                                <p class="des mt-2 mb-2">sfvdf adf </p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <a href="blog-single.html"> <img class="img-fluid img-responsive" src="{{asset("storage/$row->cover")}}"
                                alt="" /></a>
                        <div class="card-img-overlay">
                            <span class="badge-pill badge-pos">{{$kategori->name}}</span>
                        </div>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a href="blog-single.html">{{$row->title}}</a>
                                </h4>
                                <p class="mt-2 mb-4">{{ $row->description }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between card-text">
                                <a class="text-time">
                                    <span class="fa fa-user mr-1"></span>{{$row->designer->name}}
                                </a>
                                <a href="blog-single.html" class="btn blog-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection