@extends ('layout.app')

@section('content')
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">BERIKUT ARTIKEL DARI KAMI</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home Interior Project</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <section class="w3l-blog-main py-5">
        <div class="container py-md-5 py-4">
            <div class="row py-sm-5">
                @foreach ($posts as $post)
                    <div class="col-md-4 mt-md-0 mb-4">
                        <div class="card">
                            <a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}"> <img class="img-fluid img-responsive" src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text }}" /></a>
                            <div class="card-img-overlay">
                                @foreach ($post->categories as $category)
                                    <a href="{{ route('filamentblog.category.post', ['category' => $category->slug]) }}">
                                        <span class="badge-pill badge-pos">{{ $category->name }}</span>
                                    </a>    
                                @endforeach
                            </div>
                            <div class="card-body">
                                <div class="news-title">
                                    <h4 class="title-small">
                                        <a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}">{{$post -> title}}</a>
                                    </h4>
                                    <p class="mt-2 mb-4">{{ Str::limit($post->sub_title, 100) }}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between card-text">
                                    <a class="text-time">
                                        <span class="fa fa-user mr-1"> </span> {{ $post->user->name() }}
                                    </a>
                                    <a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" class="btn blog-btn">{{ $post->formattedPublishedDate() }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

{{-- <x-blog-layout>
    @if(count($posts))
    <section class="py-8">
        <div class="container mx-auto">
            <div class="">
                
                @foreach ($posts->take(1) as $post)
                <div>
                    <x-blog-feature-card :post="$post" />
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <section class="pb-16 pt-8">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-3 gap-x-14 gap-y-14">
                @foreach ($posts->skip(1) as $post)
                <x-blog-card :post="$post" />
                @endforeach
            </div>
            <div class="flex justify-center pt-20">
                <a href="{{ route('filamentblog.post.all') }}" class="flex items-center justify-center md:gap-x-5 rounded-full bg-slate-100 px-20 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
                    <span>Show all blogs</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @else
    <div class="container  mx-auto">
        <div class="flex justify-center">
            <p class="text-2xl font-semibold text-gray-300">No posts found</p>
        </div>
    </div>
    @endif

</x-blog-layout> --}}
