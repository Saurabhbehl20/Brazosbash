<section class="gallery-single-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12 text-center pb-10">
            <div class="intro-content col-span-10 col-start-2 lg:px-9">
                @php  $heading = get_the_title(); $title = explode(' ', $heading);@endphp
                <h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 uppercase"><span class="color-red">{{$title[0]}}</span>
                @for($i=1;$i< count($title);$i++)
                    {{$title[$i]}}
                @endfor
                </h1>
            </div>
        </div>
        <div class="block lg:px-28">
            <div class="swiper gallery-single pb-5">
                <div class="swiper-wrapper">
                    @if($gallery_images)
                        @foreach($gallery_images as $images)
                        <div class="swiper-slide">
                            <img src="{{$images['url']}}" alt="{{$images['alt']}}" class="img-drop-shadow rounded-md" />
                        </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-button-prev"><img src="{{get_template_directory_uri()}}/resources/images/left-red-arrow.svg"></div>
                <div class="swiper-button-next"><img src="{{get_template_directory_uri()}}/resources/images/right-red-arrow.svg"></div>
            </div>
            <div thumbsSlider="" class="swiper gallery-single-thumb py-5 px-4 sm:px-8">
                <div class="swiper-wrapper">
                    @if($gallery_images)
                    @foreach($gallery_images as $images)
                    <div class="swiper-slide">
                    <img src="{{$images['url']}}" alt="{{$images['alt']}}" class="img-drop-shadow rounded-md" />
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>