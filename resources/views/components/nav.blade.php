<nav class="h-[70px] border-b border-gray-200 z-50 relative">
    <div class="flex h-full justify-between items-center container-x m-auto">
        <span class="block sm:hidden animated-icon1" id="bar"
            ><span></span><span></span
        ></span>
        <div class="logo h-[70px] w-[70px]">
            <a href="/">
                <img
                    class="h-full w-full"
                    src="{{ asset('images/logo.png') }}"
                />
            </a>
        </div>

        <div class="sm:flex hidden">
            <ul class="flex gap-4">
                <li>
                    <a
                        class="font-semibold text-black px-2 live relative hover:text-primary transition"
                        href="{{ route('live-tv') }}"
                        >Live TV</a
                    >
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('live-radio') }}"
                        >Live Radio
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('about') }}"
                        >About
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('gallery') }}"
                        >Gallery
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('contact') }}"
                        >Contact
                    </a>
                </li>
            </ul>
        </div>
        <a href="{{ route('registration') }}" class="btn primary sm:flex hidden"
            >Become a member</a
        >
        <div class="block sm:hidden"></div>
    </div>
    <div class="sm:hidden block">
        <div class="mobile-menu absolute top-[78px] w-[90%] rounded-2xl p-4">
            <ul class="flex flex-col gap-4 mobile">
                <li>
                    <a
                        class="font-semibold text-black px-2 live relative hover:text-primary transition"
                        href="{{ route('live-tv') }}"
                        >Live TV</a
                    >
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('live-radio') }}"
                        >Live Radio
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('about') }}"
                        >About
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('gallery') }}"
                        >Gallery
                    </a>
                </li>
                <li>
                    <a
                        class="font-semibold text-black px-2 hover:text-primary transition"
                        href="{{ route('contact') }}"
                        >Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('registration') }}" class="btn primary"
                        >Become a member</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const bar = document.getElementById("bar");

    bar.addEventListener("click", toggleAnimation);
    gsap.set(".mobile-menu", { display: "none" });

    const nav = gsap.timeline({
        paused: true,
    });
    nav.fromTo(
        ".mobile-menu",
        0.4,
        {
            scale: 0.7,
        },
        {
            scale: 1,
            opacity: 1,
            display: "flex",
            ease: "power1.inOut",
        }
    ).from(".mobile li", 0.4, {
        opacity: 0,
        x: -20,
        stagger: 0.1,
    });

    function toggleAnimation(e) {
        const con = bar.classList.contains("open");
        if (con) {
            nav.reverse();
        } else {
            nav.play();
        }
        bar.classList.toggle("open");
    }
</script>
