@extends ('layout.app')

@section('content')
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">Artikel Kategori</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('filamentblog.post.index') }}/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog</li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Category</li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{ $category->name }}</li>
                </ul>
            </div>
        </section>
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
    <section>
        <header class="container mx-auto mb-4 max-w-[800px] px-6 pb-4 mt-10 text-center">
            <p class="inherits-color text-balance leading-tighter relative z-10 text-3xl font-semibold tracking-tight">
                Category: {{ $category->name }}
            </p>
        </header>
    </section>
    <section class="pb-16 pt-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-x-14 gap-y-14">
                @forelse ($posts as $post)
                   <x-blog-card :post="$post"/>
                    @empty
                    <div class="mx-auto col-span-3">
                        <div class="flex items-center justify-center">
                            <p class="text-2xl font-semibold text-gray-300">No posts found</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="mt-20">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

</x-blog-layout> --}}
