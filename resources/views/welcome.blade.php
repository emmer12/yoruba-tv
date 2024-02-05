<x-layout>
    <section>
        <div class="container-x">
            <div class="flex flex-col sm:flex-row">
                <div class="left flex-1 py-14 pr-10">
                    <h2 class="tracking-tight text-[32px] font-bold">Welcome to <span
                            class="
                        bg-gradient-to-r from-blue-600 via-[#d6ac03] to-indigo-400 inline-block text-transparent bg-clip-text
                        ">Youruba
                            Nation</span> TV -
                    </h2>
                    <h2 class="tracking-tight text-[32px] font-bold text-gray-500"> Your Premier
                        Destination
                        for
                        Captivating Entertainment
                    </h2>
                    <p class="my-4 text-base text-gray-600">Elevate your viewing experience to new heights with [TV
                        Station Name]. As
                        your
                        ultimate
                        destination
                        for captivating entertainment, informative news, and enriching content, we're committed to
                        delivering the finest in television programming.</p>

                    <div class="action">
                        <button class="btn btn-primary">
                            Watch Live Tv
                        </button>
                    </div>
                </div>
                <div class="flex-1 w-1/2">
                    <div class="absolute top-0">
                        <img src={{ asset('images/hero-image.png') }} alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Letest News --}}


    <section class="bg-white mt-[100px] py-6">
        <div class="container-x">
            <div class="header mb-6">
                <h2>Latest news</h2>
                <p>Explore the latest in yoruba land </p>
            </div>

            <div>
                {{-- @foreach (\BinshopsBlog\Models\BinshopsPost::orderBy('posted_at', 'desc')->limit(5)->get() as $post)
                    <li class="nav-item">
                        <a class='nav-link' href='{{ $post->url() }}'>{{ $post->title }}</a>
                    </li>
                @endforeach --}}

                @forelse($posts as $post)
                    @include('binshopsblog::partials.index_loop')
                @empty
                    <div class="col-md-12">
                        <div class='alert alert-danger'>No posts!</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

</x-layout>
