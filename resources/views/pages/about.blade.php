<x-layout>
    <div>
        <x-banner title="About us" subtitle="Who we are"></x-banner>
    </div>

    <section class="sm:py-[100px] py-[50px] fadeIn">
        <div class="container-x">
            <div class="flex flex-col-reverse sm:flex-row gap-x-[60px] gap-y-5 items-center ">
                <div class="display w-full sm:w-1/2  rounded-3xl overflow-clip ">
                    <img src="{{ asset('images/img1.jpeg') }}" />
                </div>
                <div class="w-full sm:w-1/2 ">
                    <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                        Our Vision</h4>
                    <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter mb-3">We provide high quality services
                    </h2>
                    <p class="text-lg ">
                        Empower viewers with a diverse and immersive TV experience, offering captivating content that
                        entertains, informs, and inspires.
                    </p>

                    <a href="{{ route('contact') }}" class="btn primary mt-3">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="sm:py-[100px] py-[50px] fadeIn">
        <div class="container-x">
            <div class="sm:w-[600px] m-auto text-center">
                <h4 class="text-sm sm:text-base font-semibold tracking-tight  text-primary uppercase mb-2">
                    Our Mission</h4>
                <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter mb-3">We provide high quality services
                </h2>
                <p class="text-lg ">
                    Empower viewers with a diverse and immersive TV experience, offering captivating content that
                    entertains, informs, and inspires.
                </p>
            </div>


            <div class=" items-center my-4 ">
                <div class="display m-auto w-full sm:w-1/2  rounded-3xl overflow-clip ">
                    <img src="{{ asset('images/img2.jpeg') }}" />
                </div>

            </div>
        </div>
    </section>

</x-layout>
