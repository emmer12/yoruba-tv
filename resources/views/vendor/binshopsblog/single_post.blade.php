{{-- @extends('layouts.app', ['title' => $post->gen_seo_title()]) --}}
<x-layout>

    <div class='container-x'>
        <div class='row'>
            <div class='col-sm-12 col-md-12 col-lg-12'>

                @include('binshopsblog::partials.show_errors')
                @include('binshopsblog::partials.full_post_details')


                <div class="w-full sm:w-[620px] m-auto">
                    @if (config('binshopsblog.comments.type_of_comments_to_show', 'built_in') !== 'disabled')
                        <div class="" id='maincommentscontainer'>
                            <h2 class='font-semibold my-2' id='binshopsblogcomments'>Comments</h2>
                            @include('binshopsblog::partials.show_comments')
                        </div>
                    @else
                        {{-- Comments are disabled --}}
                    @endif
                </div>


            </div>
        </div>
    </div>
</x-layout>
