@props(['post' => $post])

<article class="card-animation flex flex-col  gap-6">
    <div class="blog-card-display h-[181px] w-full rounded-lg overflow-hidden">
        <?= $post->image_tag('medium', true, '') ?>
    </div>
    <div class="flex flex-col gap-2  max-w-full">
        @foreach ($post->post->categories as $category)
            @php $trans =  $category->categoryTranslations->where('lang_id',1)->first();@endphp
            <h6 class="text-primary font-medium">
                {{ $trans->category_name }}
            </h6>
        @endforeach

        <a href="/post/${article?.slug">
            <h4 class="text-[20px] tracking-[-0.4px] font-bold mb-1">
                {{ $post->title }}
            </h4>
        </a>
        <div class="flex items-center gap-[14px] [&>span]:font-medium">
            <span class="text-xs text-[#667185]">
                {{ date('d M Y ', strtotime($post->post->posted_at)) }}
            </span>
            <div class="h-2 w-2 bg-[#D0D5DD] rounded-full" />
            <span class="text-xs text-[#667185]">
                {{ $post->content }}
            </span>
        </div>
        <div class="author-date flex justify-between items-center">
            {{-- <div class="flex items-center gap-[7px]">
                <img height={32} width={32} src="" />
                <span class="font-medium ">
                    name
                </span>
            </div> --}}

        </div>

    </div>
</article>
