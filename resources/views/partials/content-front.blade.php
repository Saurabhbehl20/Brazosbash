@if(isset($hero_section) && $hero_section)
<section class="hero-section relative">
    @if($hero_section['video_url'] || $hero_section['poster'])
    <video autoplay="" loop="" preload="" muted="" playsinline="" poster="{{$hero_section['poster']['url']}}" class="w-full video">
        <source src="{{$hero_section['video_url']['url']}}" type="video/mp4">
    </video>
    @endif
    @if($hero_section['logo'])
    <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center sm:w-auto lg:w-full">
        <div class="container w-auto">
            <div class="block lg:grid grid-12 gap-4">
                <div class="col-start-4 col-span-6">
                    <img src="{{$hero_section['logo']['url']}}" alt="{{$hero_section['logo']['alt']}}">
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endif
@if(isset($intro_section) && $intro_section)
@if($intro_section['starting_text'] || $intro_section['middle_text'] ||  $intro_section['ending_text'] || $intro_section['content'] || $intro_section['link'] || $intro_section['image'])
<section class="intro-section pattern-bg py-14 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto lg:py-3.5">
        <div class="block lg:grid grid-cols-2 lg:gap-14 lg:px-14 items-center">
            <div class="intro-content lg:pl-3.5">
                @if($intro_section['starting_text'] || $intro_section['middle_text'] ||  $intro_section['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 text-center lg:text-left uppercase">{{$intro_section['starting_text']}} <span class="color-red">{{$intro_section['middle_text']}}</span>{{$intro_section['ending_text']}}</h1>@endif
                @if($intro_section['content'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-6  pt-7">{!! $intro_section['content'] !!}</div>
                @endif
                @if($intro_section['link'])
                @if($intro_section['link']['target'])
                    @php $target = $intro_section['link']['target']; @endphp
                @else
                    @php $target = "__self"; @endphp
                @endif 
                <div class="text-center lg:text-left">
                    <a href="{{$intro_section['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$target}}" >{{$intro_section['link']['title']}}</a>
                </div>
                @endif
            </div>
            @if($intro_section['image'])
            @if($intro_section['overlap_image'])
                @php $overlap = " -mb-24 " @endphp
            @else
                @php $overlap = "" @endphp
            @endif
            <div class="intro-image lg:pr-3.5 pt-14 lg:pt-0">
                <img src="{{$intro_section['image']['url']}}" alt="{{$intro_section['image']['alt']}}" class="{{$overlap}}img-drop-shadow rounded-md"> 
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif
@if(isset($brazos_bash_entry) && $brazos_bash_entry)
<section class="brazos-bash-entry-section bg-cover bg-center text-white relative pt-20 pb-12 px-9 lg:px-0">
    <div class="container mx-auto relative lg:pb-0.5">
        <div class="block lg:grid grid-cols-12">
            <div class="col-span-8 col-start-3">
                    @if($brazos_bash_entry['heading'])<h2 class="font-40 font-normal tk-modesto-poster tracking-wider pb-7 mb-0.5 text-center uppercase">{!! $brazos_bash_entry['heading'] !!}</h2>@endif
                @if($brazos_bash_entry['contant'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-6 text-left lg:text-center">
                    {!! $brazos_bash_entry['contant'] !!}
                </div>
                @endif
                @if($brazos_bash_entry['link'])
                @if($brazos_bash_entry['link']['target'])
                    @php $target = $brazos_bash_entry['link']['target']; @endphp
                @else
                    @php $target = "_self"; @endphp
                @endif 
                <div class="text-center">
                    <a href="{{$brazos_bash_entry['link']['url']}}" class="tracking-wider inline-block button-black uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$target}}">{{$brazos_bash_entry['link']['title']}}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
@if(isset($get_directions_section) && $get_directions_section)
@if($get_directions_section['image'] || $get_directions_section['link'] || $get_directions_section['mobile_image'])
<section class="get-directions-section bg-cover bg-center text-center relative">
    @if($get_directions_section['image'])<img src="{{$get_directions_section['image']['url']}}" alt="{{$get_directions_section['image']['alt']}}" class="w-full hidden lg:block">@endif
    @if($get_directions_section['mobile_image'])<img src="{{$get_directions_section['mobile_image']['url']}}" alt="{{$get_directions_section['mobile_image']['alt']}}" class="w-full lg:hidden">@endif
    @if($get_directions_section['link'])
    @if($get_directions_section['link']['target'])
        @php $get_target = $get_directions_section['link']['target']; @endphp
    @else
        @php $get_target = "_self"; @endphp
    @endif 
    <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center justify-center sm:w-auto lg:w-full">
        <div class="container mx-auto relative lg:pb-0.5">
            <div class="block md:grid grid-cols-12">
                <div class="md:col-span-6 md:col-start-4 lg:col-span-4 lg:col-start-5 px-9 md:px-0">
                    <div class="shadow-holder">
                        <div class="get-direction-container pt-6 pb-7">
                            <a href="{{$get_directions_section['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$get_target}}">{{$get_directions_section['link']['title']}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endif
@endif

@if(isset($joining_section) && $joining_section)
@if($joining_section['image'] || $joining_section['heading'] || $joining_section['link'])
<section class="joining-section py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12 lg:gap-14 lg:px-14 items-center">
            @if($joining_section['image'])
            <div class="intro-image col-span-5 col-start-2">
                <img src="{{$joining_section['image']['url']}}" alt="{{$joining_section['image']['alt']}}" class="img-drop-shadow rounded-md"> 
            </div>
            @endif
            @if($joining_section['heading'] || $joining_section['link'])
            <div class="intro-content col-span-5 col-start-7 pt-10 lg:pt-0 text-center lg:text-left">
                @if($joining_section['heading'])
                <h2 class="font-40 font-normal tk-modesto-poster tracking-wider pb-7 mb-0.5 uppercase">{{$joining_section['heading']['starting_text']}} <span class="color-red"> {{$joining_section['heading']['middle_text']}}</span>{{$joining_section['heading']['ending_text']}}</h2>
                @endif
                @if($joining_section['link'])
                @if($joining_section['link']['target'])
                    @php $target = $joining_section['link']['target']; @endphp
                @else
                    @php $target = "_self"; @endphp
                @endif 
                <a href="{{$joining_section['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$target}}">{{$joining_section['link']['title']}}</a>
                @endif
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif

@if(isset($sponsors_section) && $sponsors_section)
@if($sponsors_section['heading'] || $sponsors_section['logos'])
<section class="sponsors-section pattern-bg pt-20 pb-5 lg:pb-0 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover">
    <div class="container mx-auto">
        @if($sponsors_section['heading'])<h2 class="text-center pt-1.5 font-40 tk-modesto-poster tracking-wider uppercase">{!! $sponsors_section['heading'] !!}</h2>@endif
        <!-- Slider main container -->
        @if($sponsors_section['logos'])
        <div class="sponsor-swiper text-white relative w-full overflow-hidden py-12">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper items-center">
                <!-- Slides -->
                @foreach($sponsors_section['logos'] as $logo)
                <div class="swiper-slide px-3 lg:px-10 text-center p-0.5">
                    @if($logo['image'] || $logo['link'])
                    <a href="@if($logo['link']){{$logo['link']['url']}}@endif" target="@php  echo  empty($logo['link']['target']) ? '_self' : $logo['link']['target']; @endphp" class="block text-center"><img src="{{$logo['image']['url']}}" alt="{{$logo['image']['alt']}}" class="mx-auto"></a>
                    @endif
                </div>
                @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="sponsor-nav-buttons flex items-center justify-center text-center pt-11 lg:pt-0">
                <div class="swiper-button-prev"><img src="{{get_template_directory_uri()}}/resources/images/left-red-arrow.svg"></div>
                <div class="swiper-button-next"><img src="{{get_template_directory_uri()}}/resources/images/right-red-arrow.svg"></div>
            </div>
            @if($sponsors_section['show_button'])
            @if($sponsors_section['button']['target'])
                @php $sponsors_target = $sponsors_section['button']['target']; @endphp
            @else
                @php $sponsors_target = '_self'; @endphp
            @endif
            <div class="text-center pt-5"><a href="{{$sponsors_section['button']['url']}}" class="button-red font-bold inline-block text-base text-white tk-azo-sans-web tracking-wider uppercase" target="{{$sponsors_target}}">{{$sponsors_section['button']['title']}}</a></div>
            @endif
        </div>
        @endif
    </div>
</section>
@endif
@endif
@if(isset($full_image_section) && $full_image_section)
@if($full_image_section['image'] || $full_image_section['mobile_image'])
<section class="full-image-section">
    <div class="w-full">
        <img src="{{$full_image_section['image']['url']}}" alt="{{$full_image_section['image']['alt']}}" class="w-full hidden lg:block">
        <img src="{{$full_image_section['mobile_image']['url']}}" alt="{{$full_image_section['image']['alt']}}" class="w-full lg:hidden">
    </div>
</section>
@endif
@endif