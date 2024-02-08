<x-layout>
    <section>
        <div class="container-x">
            <div class="flex flex-col sm:flex-row">
                <div class="left flex-1 py-14 pr-10 ">
                    <h2 class="tracking-tighter text-[28px] sm:text-[32px] font-bold">Welcome to <span
                            class="
                        bg-gradient-to-r from-blue-600 via-[#d6ac03] to-indigo-400 inline-block text-transparent bg-clip-text
                        ">Youruba
                            Nation</span> TV
                    </h2>
                    <h2 class="tracking-tight text-[20px] sm:text-[32px]  font-bold text-gray-500"> Your Premier
                        Destination
                        for
                        Captivating Entertainment
                    </h2>
                    <p class="my-4 text-base text-gray-600">Elevate your viewing experience to new heights with Yoruba
                        Tv. As
                        your
                        ultimate
                        destination
                        for captivating entertainment, informative news, and enriching content, we're committed to
                        delivering the finest in television programming.</p>

                    <div class="action">
                        <button class="btn btn-primary flex gap-2">
                            Watch Live Tv

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                    fill="#fff" />
                                <path
                                    d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                    fill="#fff" />
                            </svg>

                        </button>
                    </div>
                </div>
                <div class="flex-1 w-full sm:w-1/2 hidden sm:block ">
                    <div class="absolute top-0">
                        <img src={{ asset('images/hero-image.png') }} alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Letest News --}}


    <section class="bg-white mt-[50px] sm:mt-[100px] py-6">
        <div class="container-x">
            <div class="header mb-6">
                <h2>Latest news</h2>
                <p>Explore the latest in yoruba land </p>
            </div>

            <div>
                <div class="news-animation grid sm:grid-cols-4 grid-cols-1 gap-2">
                    @forelse($posts as $post)
                        <x-post-card :post="$post" />
                    @empty
                        <div class="col-md-12">
                            <div class='alert alert-danger'>No posts!</div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

</x-layout>


<script>
    gsap.registerPlugin(ScrollTrigger)


    gsap.from(".header", {
        scrollTrigger: {
            trigger: ".header",
        },
        autoAlpha: 0,
    });

    ScrollTrigger.batch(".card-animation", {
        onEnter: elements => {
            gsap.from(elements, {
                autoAlpha: 0,
                y: 60,
                stagger: 0.15,
                delay: 0.5,
            });
        },
        once: true,
    });
</script>
