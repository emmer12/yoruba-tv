<footer id="site-footer" class="nav-white-desktop" role="contentinfo">

    <div id="footer-wave"></div>

    <div class="footer-bg px-6 sm:px-0">

        <div class="footer-inner container-x m-auto">


            <div class="footer-top">
                <div class="row">

                    <div class="ft-col-1 col-sm-12 col-lg-4">
                        <div class="widget widget_text">
                            <div class="widget-content">
                                <div class="textwidget">
                                    <h4 class="text-sm font-semibold">Youruba Tv</h4>
                                    <p class="text-sm my-4 font-normal text-[#a3a3a3]">Elevate your viewing experience
                                        to
                                        new heights
                                        with Yoruba
                                        Tv. As
                                        your
                                        ultimate
                                        destination
                                        for captivating entertainment, informative news, and enriching content, we're
                                        committed to
                                        delivering the finest in television programming</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ft-col-2 col-sm-12 col-lg-4">
                        <div class="widget widget_text">
                            <div class="widget-content">
                                <h4 class="text-sm font-semibold">Contact Us</h4>
                                <div class="textwidget text-sm my-4 font-normal ">
                                    <p class="text-sm my-4 font-normal text-[#a3a3a3]">202 Helga Springs Rd, Ng</p>
                                    <p class="text-[#a3a3a3]">Call Us: <strong><a
                                                href="tel:800.275.8777">90094764732</a></strong></p>
                                    <p><a class="text-[#a3a3a3]" href="mailto:alex@company.com">emmer@company.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ft-col-3 col-lg-4">
                        <div class="widget widget_mc4wp_form_widget">
                            <div class="widget-content">
                                <h4 class="text-sm font-semibold">Important Links</h4>

                                <ul class="my-4 font-normal list-animation">
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('live-tv') }}">Live
                                            Tv</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('live-radio') }}">Live
                                            Radio</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="/donate">Donate</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('about') }}">About
                                            us</a>
                                    </li>
                                    <li class="my-1">
                                        <a class="hover:pl-1 transition-all text-[#a3a3a3] hover:text-primary"
                                            href="{{ route('registration') }}">Join
                                            Our
                                            Forum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="footer-bottom">

                <div class="footer-credits">

                    <p class="footer-copyright text-xs font-normal text-[#a3a3a3]">Copyright ©2024 Satka. All rights
                        reserved.
                    </p><!-- .footer-copyright -->

                </div><!-- .footer-credits -->


            </div><!-- .footer-bottom  -->

        </div><!-- .footer-inner -->

    </div>

</footer>


<script>
    gsap.registerPlugin(ScrollTrigger)

    ScrollTrigger.batch(".list-animation li", {
        onEnter: elements => {
            gsap.from(elements, {
                autoAlpha: 0,
                stagger: 0.15,
                delay: 0.5,
            });
        },
        once: true
    });
</script>
