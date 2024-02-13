<x-layout>
    <div>
        <x-banner title="Donate" subtitle="Ignite hope. Make a difference."></x-banner>
    </div>

    <section class="py-[100px] fadeIn">
        <div class="container-x">

            <div class="flex flex-col sm:flex-row gap-5  ">
                <div
                    class="relative pt-4 px-4 sm:pb-0 pb-10 border-gray-200 border-b sm:border-r sm:border-b-0 donate-d">
                    <p class="font-semibold text-gray-600 text-base">Please make donations to the following account:</p>
                    <p class="text-sm text-gray-600 mt-2">Account Number: <span
                            class="font-semibold">XXXX-XXXX-XXXX-XXXX</span></p>
                    <p class="text-sm text-gray-600 mt-1">Bank Name: <span class="font-semibold">Your Bank</span></p>
                    <p class="text-sm text-gray-600 mt-1">Account Name: <span class="font-semibold">Your Name</span></p>
                    <p class="text-sm text-gray-600 mt-4">Once you've made the donation, please inform us by sending an
                        email to <span class="font-semibold">example@example.com</span>.</p>

                    <div
                        class="absolute sm:top-1/2 top-[calc(100%-20px)] bottom-[0px] sm:right-[-20px] border border-gray-200 h-10 w-10 flex items-center justify-center bg-white rounded-full">
                        Or
                    </div>
                </div>

                <div class="flex  flex-1 items-center justify-between mb-4">
                    <button onclick="donate()" class="btn btn-primary">
                        Donate
                    </button>
                    <img src="/images/paypal.svg" alt="PayPal Logo" class="h-[100px]">
                </div>
            </div>
        </div>
    </section>



</x-layout>
