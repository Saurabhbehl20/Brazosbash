@if(isset($entertainment) && $entertainment)
@if($entertainment['starting_text'] || $entertainment['middle_text'] || $entertainment['ending_text'] || $entertainment['services'])
<section class="entertainment-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        @if($entertainment['starting_text'] || $entertainment['middle_text'] || $entertainment['ending_text'])
        <div class="block lg:grid grid-cols-1 items-center pb-16">
            <h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 text-center uppercase">{{$entertainment['starting_text']}} <span class="color-red">{{$entertainment['middle_text']}}</span>{{$entertainment['ending_text']}}</h1>
        </div>
        @endif
        @if($entertainment['services'])
        <div class="block lg:grid grid-cols-3 lg:gap-14">
            @foreach($entertainment['services'] as $services)
            <div class="entertainment-col mb-11 lg:mb-0">
                @if($services['image'])<img src="{{$services['image']['url']}}" alt="{{$services['image']['alt']}}" class="img-drop-shadow rounded-md">@endif
                @if($services['heading'])<h3 class="tracking-wider text-3xl font-normal tk-modesto-poster pt-10 pb-7 uppercase color-red">{!! $services['heading'] !!}</h3>@endif
                @if($services['content'])<div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-7 ">{!! $services['content'] !!}</div>@endif 
                @if($services['time'])
                <div class="hours text-base tracking-wider tk-azo-sans-web font-bold pb-5"><i class="fa-solid fa-clock color-red"></i> {{ $services['time']}}</div>
                @endif
                @if($services['link'])
                @if($services['link']['target'])
                    @php  $target = $services['link']['target'];  @endphp
                @else
                    @php   $target = "_blank";    @endphp
                @endif
                <div class="text-center lg:text-left">
                    <a href="{{$services['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$target}}">{{$services['link']['title']}}</a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif
@endif