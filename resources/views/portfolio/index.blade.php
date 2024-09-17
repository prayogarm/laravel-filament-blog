@extends ('layout.app')
    
@section('content')
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Portfolio</li>
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
                                    <a style="color: black; font-weight:600" href="">{{ $row->title }}</a>
                                </h4>
                                <p class="des mt-2 mb-2">{{ $row->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection