<x-layout>
    <div>
        <x-banner title="Gallery" subtitle="Brouse our photos" />
    </div>

    @php
        $data = json_decode($images[0], true);
        $filename = $data['uploaded_images']['binshopsblog_full_size']['filename'];
    @endphp

    <section class="my-[50px] ">
        <div class="container-x">
            <div class="grid-custom">
                <div class="grid-sizer"></div>

                @foreach ($images as $key => $image)
                    @php
                        $data = json_decode($image, true);
                        $filename = $data['uploaded_images']['binshopsblog_full_size']['filename'];

                        $bladeClass = ['grid-item--width2', 'grid-item'];
                        $random = $bladeClass[array_rand($bladeClass)];
                    @endphp

                    <div class="{{ $random }}">
                        <img src='{{ asset(config('binshopsblog.blog_upload_dir') . '/' . $filename) }}' />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>


<style>
    /* fluid 5 columns */
    .grid-sizer,
    .grid-item {
        width: 20%;
        padding: 5px;
    }

    /* 2 columns */
    .grid-item--width2 {
        width: 40%;
    }

    .grid-custom {}

    /* clear fix */
    .grid-custom:after {
        content: '';
        display: block;
        clear: both;
    }
</style>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid-custom');

    imagesLoaded(document.querySelector('.grid-custom'), function(instance) {

        var iso = new Isotope(elem, {
            itemSelector: 'grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });
        var iso = new Isotope('.grid-custom', {
            // options
        });
    });


    gsap.registerPlugin(ScrollTrigger)
    ScrollTrigger.batch(".grid-item", {
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
