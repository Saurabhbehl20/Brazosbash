@if(isset($intro_section) && $intro_section)
@if($intro_section['logo'] || $intro_section['starting_text'] || $intro_section['middle_text'] || $intro_section['ending_text'] || $intro_section['contact_details'] || $intro_section['image'])
<section class="intro-section pattern-bg pt-16 pb-6 2xl:pb-7 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-contain relative px-9 lg:px-0">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-2 lg:gap-14 lg:px-14 items-center xl:items-start">
            @if($intro_section['logo'] || $intro_section['starting_text'] || $intro_section['middle_text'] || $intro_section['ending_text'] || $intro_section['contact_details'])
            <div class="intro-content lg:pl-3.5">
                @if($intro_section['logo'] || $intro_section['starting_text'] || $intro_section['middle_text'] || $intro_section['ending_text'])
                <div class="sm:flex lg:block xl:flex items-center">
                    @if($intro_section['logo'])<img src="{{$intro_section['logo']['url']}}" alt="{{$intro_section['logo']['alt']}}">@endif
                    @if($intro_section['starting_text'] || $intro_section['middle_text'] || $intro_section['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 text-left uppercase  sm:pl-7 lg:pl-0 xl:pl-7 break-words sm:break-normal"><a href="{{$intro_section['heading_link']}}" target="_blank">{{$intro_section['starting_text']}} <span class="color-red">{{$intro_section['middle_text']}} </span>{{$intro_section['ending_text']}}</a></h1>@endif
                </div>
                @endif
                @if($intro_section['contact_details'])
                @foreach($intro_section['contact_details'] as $contact)
                <div class="contact-details text-base tracking-wider tk-azo-sans-web font-normal pt-7 pb-0.5">
                    @if($contact['title'])<h3 class="title pt-1.5 text-3xl tk-modesto-poster tracking-wider uppercase pb-4 2xl:pb-6 font-medium">{{$contact['title']}}</h3>@endif
                    @if($contact['location'])
                    <div class="contact-address flex items-baseline pb-4 2xl:pb-6 font-bold"><i class="fa-solid fa-location-dot color-red pr-2.5"></i> {!! $contact['location'] !!}</div>
                    @endif
                    @if($contact['contact_number'])
                    <div class="contact-phone flex items-baseline pb-4 2xl:pb-6 font-bold"><i class="fa-solid fa-phone color-red pr-2.5"></i> <a href="tel:{{$contact['contact_number']}}" class="color-red">{{$contact['contact_number']}}</a></div>
                    @endif
                    @if($contact['emaillink'])
                        @if($contact['email'])
                        <div class="contact-email flex items-baseline pb-7 font-bold"><i class="fa-solid fa-envelope color-red pr-2.5"></i> <a href="mailto:{{$contact['email']}}" class="color-red break-all sm:break-normal">{{$contact['email']}}</a></div>
                        @endif
                    @else
                        @if($contact['link'])
                        @if($contact['link']['target'])
                            @php $target = $contact['link']['target']; @endphp
                        @else
                        @php $target = "_blank" @endphp
                        @endif
                        <div class="contact-email flex items-baseline pb-7"><i class="fa-solid fa-envelope color-red pr-2.5"></i> <a href="{{$contact['link']['url']}}" target="{{$target}}" class="text-base tracking-wider tk-azo-sans-web color-red font-bold break-all sm:break-normal">{{$contact['link']['title']}}</a></div>
                        @endif
                    @endif
                </div>
                @endforeach
                @endif
            </div>
            @endif
            @if($intro_section['image'])
            @if($intro_section['overlap_image'])
                @php $overlap =  " -mb-24 " @endphp
            @else
                @php  $overlap =  ""  @endphp
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

@if(isset($map) && $map)
<secton class="contact-map">
    {!! $map !!}
</secton>
@endif

@if($form_section && isset($form_section))
@if($form_section['heading'] || $form_section['content'] || $form_section['form_shortcode'])
<section class="contact-form-section py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0 text-white">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12 lg:gap-4 items-center">
            @if($form_section['heading'] || $form_section['content'])
            <div class="col-span-8 col-start-3 text-center lg:px-10">
                @if($form_section['heading'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 uppercase">{{$form_section['heading']}}</h1>@endif
                @if($form_section['content'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-9 pt-8">{!! $form_section['content'] !!}</div>
                @endif
            </div>
            @endif
            @if($form_section['form_shortcode'])
            <div class="col-span-10 col-start-2 text-center">
                {!! do_shortcode($form_section['form_shortcode']) !!}
            </div>
            @endif
        </div>
    </div>
    
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-2 lg:gap-14 lg:px-14 items-center">
</section>
@endif
@endif