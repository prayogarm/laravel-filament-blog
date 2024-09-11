@extends ('layout.app')

@section('content')
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('filamentblog.post.index') }}/">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog</li>
                    <li class="active"><span title="{{ $post->title }}" class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{ $post->title }}</li>
                </ul>
            </div>
        </section>
    </div>

    <div style="margin: 8px auto; display: block; text-align:center;"></div>
    
    <section class="text-11 pb-5">
        <div class="text11 pb-md-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text11-content m-auto">
                        <img src="{{ $post->featurePhoto  }}" class="img-fluid img-responsive" alt="{{ $post->photo_alt_text }}" />
                        <h4>{{ $post->title }}</h4>
                        <h6><span title="{{ $post->user->name() }}" class="fa fa-user mr-1"></span>{{ $post->user->name() }}</h6>
                        @foreach ($post->categories as $category)
                            <a href="{{ route('filamentblog.category.post', ['category' => $category->slug]) }}" class="post"> > {{ $category->name }}</a>
                        @endforeach 
                        
                        <p class="mt-4 mb-3">{{ $post->sub_title }}</p>
                        <article class="m-auto leading-6">
                            {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                        </article>

                        @if($post->tags->count())
                            <div class="pt-10">
                                <h5 class="mb-3 block font-semibold">Tags :</h5>
                                <div class="space-x-2 space-y-1">
                                    @foreach ($post->tags as $tag)
                                    <a href="{{ route('filamentblog.tag.post', ['tag' => $tag->slug]) }}" class="rounded-full border border-slate-300 px-3 py-1 text-sm font-medium font-medium text-black text-slate-600 hover:bg-slate-100">
                                        {{ $tag->name }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="social-share-blog mt-4 pb-4">
                            <ul class="column3 social m-0 p-0">
                                <li>
                                    <p class="m-0 mr-4">Share this post :</p>
                                </li>
                                <li><a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                </li>
                                <li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //single post -->
@endsection

{{-- <x-blog-layout>
    <section class="pb-16">
        <div class="container mx-auto">
            <div class="mb-10 flex gap-x-2 text-sm font-semibold">
                <a href="{{ route('filamentblog.post.index') }}" class="opacity-60">Home</a>
                <span class="opacity-30">/</span>
                <a href="{{ route('filamentblog.post.all') }}" class="opacity-60">Blog</a>
                <span class="opacity-30">/</span>
                <a title="{{ $post->slug }}" href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" class="hover:text-primary-600 max-w-2xl truncate font-medium transition-all duration-300">
                    {{ $post->title }}
                </a>
            </div>
            <div class="mx-auto mb-20 space-y-10">
                <div class="grid gap-x-20 sm:grid-cols-[minmax(min-content,10%)_1fr_minmax(min-content,10%)]">
                    <div class="py-5">
                        <div class="sticky top-24 flex flex-col items-center gap-y-5 divide-y-2">
                            <button x-data="" x-on:click="document.getElementById('comments').scrollIntoView({ behavior: 'smooth'})" class="group/btn flex flex-col items-center justify-center gap-y-2">
                                <div class="flex items-center justify-center rounded-full bg-slate-100 px-4 py-4 group-hover/btn:bg-slate-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M13 11H7a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2m4-4H7a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2m2-5H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h11.59l3.7 3.71A1 1 0 0 0 21 22a.84.84 0 0 0 .38-.08A1 1 0 0 0 22 21V5a3 3 0 0 0-3-3m1 16.59l-2.29-2.3A1 1 0 0 0 17 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
                                    </svg>
                                </div>
                                <span class="text-xs font-semibold">COMMENTS</span>
                            </button>
                            <div class="pt-5">
                                {!! $shareButton?->html_code !!}
                            </div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <div>
                            <div class="flex flex-col justify-end">
                                <div class="mb-6 h-full w-full overflow-hidden rounded bg-slate-200">
                                    <img class="flex h-full min-h-[400px] items-center justify-center object-cover object-top text-sm text-xl font-semibold text-slate-400" src="{{ $post->featurePhoto  }}" alt="{{ $post->photo_alt_text }}">
                                </div>
                                <div class="mb-6">
                                    <h1 class="mb-6 text-4xl font-semibold">
                                        {{ $post->title }}
                                    </h1>
                                    <p>x`</p>
                                    <div class="mt-2">
                                        @foreach ($post->categories as $category)
                                        <a href="{{ route('filamentblog.category.post', ['category' => $category->slug]) }}">
                                            <span class="bg-primary-200 text-primary-800 mr-2 inline-flex rounded-full px-2 py-1 text-xs font-semibold">{{ $category->name }}
                                            </span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-5 flex items-center justify-between gap-x-3 py-5">
                                    <div>
                                        <div class="flex items-center gap-4">
                                            <img class="h-14 w-14 overflow-hidden rounded-full border-4 border-white bg-zinc-300 object-cover text-[0] ring-1 ring-slate-300" src="{{ $post->user->avatar }}" alt="{{ $post->user->name() }}">
                                            <div>
                                                <span title="{{ $post->user->name() }}" class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold">{{ $post->user->name() }}</span>
                                                <span class="block whitespace-nowrap text-sm font-medium font-semibold text-zinc-600">
                                                    {{ $post->formattedPublishedDate() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <article class="m-auto leading-6">

                                        {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                                    </article>

                                    @if($post->tags->count())
                                    <div class="pt-10">
                                        <span class="mb-3 block font-semibold">Tags</span>
                                        <div class="space-x-2 space-y-1">
                                            @foreach ($post->tags as $tag)
                                            <a href="{{ route('filamentblog.tag.post', ['tag' => $tag->slug]) }}" class="rounded-full border border-slate-300 px-3 py-1 text-sm font-medium font-medium text-black text-slate-600 hover:bg-slate-100">
                                                {{ $tag->name }}
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if($post->comments->count())
                        <div class="border-t-2 py-10">
                            <div class="mb-4">
                                <h3 class="mb-2 text-2xl font-semibold">Comments</h3>
                            </div>
                            <div class="flex flex-col gap-y-6 divide-y">
                                @foreach($post->comments as $comment)
                                <article class="pt-4 text-base">
                                    <div class="mb-4 flex items-center gap-4">
                                        <img class="h-14 w-14 overflow-hidden rounded-full border-4 border-white bg-zinc-300 object-cover text-[0] ring-1 ring-slate-300" src="{{ asset($comment->user->avatar) }}" alt="avatar">
                                        <div>

                                            <span class="block max-w-[150px] overflow-hidden text-ellipsis whitespace-nowrap font-semibold">
                                                {{ $comment->user->{config('filamentblog.user.columns.name')} }}
                                            </span>
                                            <span class="block whitespace-nowrap text-sm font-medium text-zinc-600">
                                                {{ $comment->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-gray-500">
                                        {{ $comment->comment }}
                                    </p>
                                </article>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <x-blog-comment :post="$post" />
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <div class="relative mb-6 flex items-center gap-x-8">
                        <h2 class="whitespace-nowrap text-xl font-semibold">
                            <span class="text-primary font-bold">#</span> Related Posts
                        </h2>
                        <div class="flex w-full items-center">
                            <span class="h-0.5 w-full rounded-full bg-slate-200"></span>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-x-12 gap-y-10">
                        @forelse($post->relatedPosts() as $post)
                        <x-blog-card :post="$post" />
                        @empty
                        <div class="col-span-3">
                            <p class="text-center text-xl font-semibold text-gray-300">No related posts found.</p>
                        </div>
                        @endforelse
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
            </div>
        </div>
    </section>
    {!! $shareButton?->script_code !!}
</x-blog-layout> --}}
