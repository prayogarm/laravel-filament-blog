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

<section class="d-flex justify-content-center py-5 w3l-blog-main">
    <div class="container py-md-5 py-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="section-heading mb-sm-5 mb-3">
                    <h3 class="title-style mb-2">Desain Interior {{$kategori->name}} Terbaru</h3>
                </div>
            </div>
        </div>
        <div class="row py-sm-3">
            @foreach ($portfolio as $row)
                <div class="col-md-4 mt-md-0 mb-4 p-2">
                    <div class="card">
                        <a href="{{ route('portfolio.detail', $row->id) }}"> <img class="img-fluid img-responsive" style="max-height: 300px;" src="{{asset("storage/$row->cover")}}"
                                alt="" /></a>
                        <div class="card-img-overlay">
                            <span class="badge-pill badge-pos">{{$kategori->name}}</span>
                        </div>
                        <div class="card-body">
                            <div class="news-title">
                                <h4 class="title-small">
                                    <a href="{{ route('portfolio.detail', $row->id) }}">{{$row->title}}</a>
                                </h4>
                                <p class="mt-2 mb-4">{{ $kategori->name }} · {{$row->size}}m² · {{$row->jumlah_ruangan}} Ruangan</p>
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