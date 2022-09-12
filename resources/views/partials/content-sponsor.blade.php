@if(isset($corporate_sponsors) && $corporate_sponsors)
@if($corporate_sponsors['starting_text'] || $corporate_sponsors['middle_text'] || $corporate_sponsors['ending_text'] || $corporate_sponsors['content'] || $corporate_sponsors['logos'])
<section class="corporate-sponsors-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 xl:px-0">
    <div class="container mx-auto">
        @if($corporate_sponsors['starting_text'] || $corporate_sponsors['middle_text'] || $corporate_sponsors['ending_text'] || $corporate_sponsors['content'])
        <div class="block lg:grid grid-cols-12 text-center">
            <div class="intro-content col-span-10 col-start-2 lg:px-9">
                @if($corporate_sponsors['starting_text'] || $corporate_sponsors['middle_text'] || $corporate_sponsors['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 uppercase">{{$corporate_sponsors['starting_text']}} <span class="color-red">{{$corporate_sponsors['middle_text']}}</span> {{$corporate_sponsors['ending_text']}}</h1>@endif
                @if($corporate_sponsors['content'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-9 pt-8">{!! $corporate_sponsors['content'] !!}</div>
                @endif
            </div>
        </div>
        @endif
        @if($corporate_sponsors['logos'])
        @php $target = "_self" @endphp 
        <div class="block sm:grid sm:grid-cols-2 lg:grid-cols-5 sm:gap-6 items-center pt-2 px-7 lg:px-0">
            @foreach($corporate_sponsors['logos'] as $logo)
                @php $image = $logo['image']; @endphp
                @php $link = $logo['link']; @endphp
                @if($link)
                    @php $target = $link['target'];  @endphp
                @endif
            <div class="shadow-holder">
                <div class="corporate-sponsors-image pt-3 pb-12 mb-5 px-4">
                    <a href="@if($link){{$link['url']}} @else {{'#'}} @endif" target="{{$target}}" class="block text-center"><img src="{{$image['url']}}" alt="{{$image['alt']}}" class="mx-auto"></a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if( (isset($platinum_sponsors) && $platinum_sponsors)  ||  (isset($diamond_sponsors) && $diamond_sponsors))
@if($platinum_sponsors['starting_text'] || $platinum_sponsors['middle_text_']  || $platinum_sponsors['ending_text']  || $platinum_sponsors['image'] || $diamond_sponsors['starting_text'] || $diamond_sponsors['middle_text'] || $diamond_sponsors['ending_text'] || $diamond_sponsors['image'] )
<section class="platinum-diamond-sponsors">
    <div class="block lg:grid grid-cols-2">
        @if($platinum_sponsors['starting_text'] || $platinum_sponsors['middle_text_']  || $platinum_sponsors['ending_text'] || $platinum_sponsors['image'] )
        <div class="platinum-sponsor text-center bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover ">
        @if($platinum_sponsors['starting_text'] || $platinum_sponsors['middle_text_']  || $platinum_sponsors['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-11 pb-2 uppercase">{{$platinum_sponsors['starting_text']}} <span class="color-red">{{$platinum_sponsors['middle_text_']}}</span> {{$platinum_sponsors['ending_text']}}</h1>@endif
            @if($platinum_sponsors['image'])
            @if($platinum_sponsors['link'])
                @php $platinum_link = $platinum_sponsors['link']['url']; @endphp
                @if($platinum_sponsors['link']['target'])
                    @php $platinum_target = $platinum_sponsors['link']['target'] @endphp 
                @else
                    @php $platinum_target = "_blank" @endphp
                @endif
            @else
                @php $platinum_target = "_blank" @endphp
                @php $platinum_link = "#" @endphp
            @endif
            <div class="shadow-holder">
                <div class="corporate-sponsors-image pt-3 pb-12 mb-5">
                    <a href="{{$platinum_link}}" target="{{$platinum_target}}" class="block text-center"><img src="{{$platinum_sponsors['image']['url']}}" alt="{{$platinum_sponsors['image']['alt']}}" class="mx-auto"></a>
                </div>
            </div>
            @endif
        </div>
        @endif
        @if($diamond_sponsors['starting_text'] || $diamond_sponsors['middle_text'] || $diamond_sponsors['ending_text'] || $diamond_sponsors['image'])
        <div class="diamond-sponsor text-center bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover">
            @if($diamond_sponsors['starting_text'] || $diamond_sponsors['middle_text'] || $diamond_sponsors['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-11 pb-2 uppercase">{{$diamond_sponsors['starting_text']}} <span class="color-red">{{$diamond_sponsors['middle_text']}}</span> {{$diamond_sponsors['ending_text']}}</h1>@endif
            @if($diamond_sponsors['image'])
            @if($diamond_sponsors['link'])
                @php $diamond_link = $diamond_sponsors['link']['url']; @endphp
                @if($diamond_sponsors['link']['target'])
                    @php $diamond_target = $diamond_link['target'] @endphp
                @else
                    @php $diamond_target = "_blank" @endphp
                @endif
            @else
                @php $diamond_target = "_blank" @endphp
                @php $diamond_link = "#" @endphp

            @endif
            <div class="shadow-holder">
                <div class="corporate-sponsors-image pt-3 pb-12 mb-5">
                    <a href="{{$diamond_link}}" target="{{$diamond_target}}" class="block text-center"><img src="{{$diamond_sponsors['image']['url']}}" alt="{{$diamond_sponsors['image']['alt']}}" class="mx-auto"></a>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if(isset($gold_sponsors) && $gold_sponsors)
@if($gold_sponsors['starting_text'] || $gold_sponsors['middle_text'] || $gold_sponsors['ending_text'] || $gold_sponsors['logos'])
<section class="gold-sponsors-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 xl:px-0">
    <div class="container mx-auto">
        @if($gold_sponsors['starting_text'] || $gold_sponsors['middle_text'] || $gold_sponsors['ending_text'])
        <div class="block lg:grid grid-cols-12 text-center">
            <div class="intro-content col-span-10 col-start-2 lg:px-9">
                <h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-11 uppercase">{{$gold_sponsors['starting_text']}} <span class="color-red">{{$gold_sponsors['middle_text']}}</span> {{$gold_sponsors['ending_text']}}</h1>
            </div>
        </div>
        @endif
        @if($gold_sponsors['logos'])
        <div class="block sm:grid sm:grid-cols-2 lg:grid-cols-5 sm:gap-6 items-center pt-2 px-7 lg:px-0">
            @foreach($gold_sponsors['logos'] as $gold_logos)
                @php $gold_image = $gold_logos['image']; $gold_link = $gold_logos['link']; @endphp
            @if($gold_link)
                @php $gold_url = $gold_link['url']; $gold_target = $gold_link['target']; @endphp
            @else
                @php $gold_url = "#"; $gold_target = "_blank" @endphp
            @endif
            <div class="shadow-holder">
                <div class="corporate-sponsors-image pt-3 pb-12 mb-5">
                    <a href="{{$gold_url}}" target="{{$gold_target}}" class="block text-center"><img src="{{$gold_image['url']}}" alt="{{$gold_image['alt']}}" class="mx-auto"></a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif

@if(isset($thank_you_section) && $thank_you_section)
@if($thank_you_section['starting_text'] || $thank_you_section['middle_text_'] || $thank_you_section['ending_text'] || $thank_you_section['logos'])
<section class="thanku-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 xl:px-0">
    <div class="container mx-auto">
        @if($thank_you_section['starting_text'] || $thank_you_section['middle_text_'] || $thank_you_section['ending_text'])
        <div class="block lg:grid grid-cols-12 text-center">
            <div class="intro-content col-span-10 col-start-2 lg:px-9">
                <h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-11 uppercase">{{$thank_you_section['starting_text']}} <span class="color-red">{{$thank_you_section['middle_text_']}}</span> {{$thank_you_section['ending_text']}}</h1>
            </div>
        </div>
        @endif
        @if($thank_you_section['logos'])
        <div class="block lg:grid grid-cols-12 items-center">
            <div class="col-span-8 col-start-3">
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 sm:gap-6 px-7 lg:px-9">
                    @foreach($thank_you_section['logos'] as $thankyou_logo)
                        @php $thanks_image = $thankyou_logo['image']; $thanks_link = $thankyou_logo['link']; $thanks_target = "_blank"; $thankyou_link = "#"; @endphp
                    @if($thanks_link)
                        @php $thanks_target = $thanks_link['target'] ; $thankyou_link = $thanks_link['url'] @endphp
                    @else
                        @php $thanks_target = "_blank"; $thankyou_link = "#"; @endphp
                    @endif
                    <div class="shadow-holder">
                        <div class="corporate-sponsors-image pt-3 pb-12 mb-5">
                            <a href="{{$thankyou_link}}" target="{{$thanks_target}}" class="block text-center"><img src="{{$thanks_image['url']}}" alt="{{$thanks_image['alt']}}" class="mx-auto"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif
@endif