<section class="w-full sm:w-[640px] m-auto py-6">

    @if (\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
        <a href="{{ $post->edit_url() }}" class="btn btn-primary">Edit
            Post</a>
    @endif

    <div class="mb-2">
        <h1 class='blog_title font-bold text-2xl sm:text-4xl tracking-tight'>{{ $post->title }}</h1>
        <h5 class='blog_subtitle text-base text-gray-500 font-medium'>{{ $post->subtitle }}</h5>

        <div class="flex gap-3">
            @includeWhen($post->author, 'binshopsblog::partials.author', ['post' => $post])
            <div>
                <strong>{{ $post->post->posted_at->diffForHumans() }}</strong>
            </div>
        </div>

    </div>


    <div class="[&>img]:w-full">
        <?= $post->image_tag('medium', false, 'd-block mx-auto') ?>
    </div>

    <p class="blog_body_content my-4">
        {!! $post->post_body_output() !!}

        {{-- @if (config('binshopsblog.use_custom_view_files') && $post->use_view_file) --}}
        {{--                                // use a custom blade file for the output of those blog post --}}
        {{--   @include("binshopsblog::partials.use_view_file") --}}
        {{-- @else --}}
        {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js --}}
        {{--   {{ $post->post_body }}          // for safe escaping --}}
        {{-- @endif --}}
    </p>


    @includeWhen($categories, 'binshopsblog::partials.categories', ['categories' => $categories])
</section>
