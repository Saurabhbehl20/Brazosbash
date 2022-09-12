@if(isset($intro_section) && $intro_section)
@if($intro_section['starting_text'] || $intro_section['middle_text'] ||  $intro_section['ending_text'] || $intro_section['content'] || $intro_section['link'] || $intro_section['image'])
<section class="intro-section pattern-bg {{ get_the_ID() == '155' ? 'pt-16 pb-4 2xl:pb-16' : 'py-16' }}  bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto {{ get_the_ID() == '155' ? '' : 'lg:py-3.5' }}">
        <div class="block lg:grid grid-cols-2 lg:gap-14 lg:px-14 items-center {{ get_the_ID() == '155' ? 'xl:items-start' : '' }}">
            <div class="intro-content lg:pl-3.5">
                @if($intro_section['starting_text'] || $intro_section['middle_text'] ||  $intro_section['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 text-center lg:text-left uppercase">{{$intro_section['starting_text']}} <span class="color-red">{{$intro_section['middle_text']}}</span>{{$intro_section['ending_text']}}</h1>@endif
                @if($intro_section['content'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal {{ get_the_ID() == '155' ? '' : 'pb-6' }} pt-7">{!! $intro_section['content'] !!}</div>
                @endif
                @if($intro_section['link'])
                @if($intro_section['link']['target'])
                    @php $target = $intro_section['link']['target']; @endphp
                @else
                    @php $target = "_blank"; @endphp
                @endif 
                <div class="text-center lg:text-left">
                    <a href="{{$intro_section['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white" target="{{$target}}" >{{$intro_section['link']['title']}}</a>
                </div>
                @endif
            </div>
            @if($intro_section['image'])
            @if($intro_section['overlap_image'])
                @if(get_the_ID()==760)
                    @php $overlap = " -mb-24 " @endphp
                @else
                    @php  $overlap = " -mb-12 lg:-mb-0 xl:-mb-24   " @endphp
                @endif
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