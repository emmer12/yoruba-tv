<div class=''>
    @foreach ($categories as $category)
        <a class='badge bg-primary  m-1'
            href='{{ $category->categoryTranslations[0]->url($locale, $routeWithoutLocale) }}'>
            {{ $category->categoryTranslations[0]->category_name }}
        </a>
    @endforeach
</div>
