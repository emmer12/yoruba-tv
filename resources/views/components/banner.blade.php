@props(['title' => $title, 'subtitle' => $subtitle])
<div class="banner flex items-center">
    <div class="container-x">
        <h4 class="text-sm sm:text-base font-semibold tracking-tight whitespace-nowrap text-primary uppercase">
            {{ $subtitle }} </h4>
        <h2 class="text-3xl sm:text-5xl font-bold tracking-tighter  whitespace-nowrap">{{ $title }} </h2>
    </div>
</div>


<script>
    gsap.set(".banner h4,.banner h2", {
        width: "0%",
        overflow: 'hidden',

    });

    const anim = gsap.timeline()


    anim.to(".banner h4", {
        width: '100%',
    }).to('.banner h2', {
        width: '100%',
        duration: 2
    })
</script>
