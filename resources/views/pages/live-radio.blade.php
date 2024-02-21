<x-layout>
    <div class="h-[450px] flex justify-center  items-center radio-container">

        <button onclick="openPopup(this)" url="{{ route('radio-embed') }}" class="btn primary">Play Audio</button>


    </div>
</x-layout>

<style>
    /* Style your popup and button */
</style>

<script>
    function openPopup(element) {
        const url = element.getAttribute('url');
        let windowName = 'NewWindow';
        let windowFeatures = 'width=320,height=400';
        window.open(url, windowName, windowFeatures)

    }
</script>
