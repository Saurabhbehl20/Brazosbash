@if(isset($brazos_bash_entry) && $brazos_bash_entry)
@if($brazos_bash_entry['heading'] || $brazos_bash_entry['contant'] || $brazos_bash_entry['link'])
<section class="brazos-bash-entry-section bg-cover bg-center text-white relative pt-20 pb-12 px-9 lg:px-0 page-{{the_title()}}">
    <div class="container mx-auto relative lg:pb-0.5">
        <div class="block lg:grid grid-cols-12">
            <div class="col-span-8 col-start-3">
            @if($brazos_bash_entry['heading'])<h2 class="font-40 font-normal tk-modesto-poster tracking-wider pb-7 mb-0.5 text-center uppercase">{!! $brazos_bash_entry['heading'] !!}</h2>@endif
                @if($brazos_bash_entry['contant'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-6 text-left">
                    {!! $brazos_bash_entry['contant'] !!}
                </div>
                @endif
                @if($brazos_bash_entry['link'])
                @if($brazos_bash_entry['link']['target'])
                    @php $target = $brazos_bash_entry['link']['target']; @endphp
                @else
                    @php $target = "_blank"; @endphp
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
@endif

@if(isset($two_column_content) && $two_column_content)
@if($two_column_content['image'] || $two_column_content['starting_text'] || $two_column_content['middle_text_'] || $two_column_content['ending_text'] || $two_column_content['content'])
<section class="about-content-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto -mt-20">
        <div class="block lg:grid grid-cols-12 lg:gap-14 lg:px-14 items-center">
            @if($two_column_content['image'])
            <div class="col-span-5 intro-image lg:pl-3.5">
                <img src="{{$two_column_content['image']['url']}}" alt="{{$two_column_content['image']['alt']}}" class="img-drop-shadow rounded-md"> 
            </div>
            @endif
            @if($two_column_content['content'] ||  $two_column_content['starting_text'] || $two_column_content['middle_text_'] || $two_column_content['ending_text'])
            <div class="col-start-6 col-span-7 intro-content lg:pr-3.5 pt-14 lg:pt-0">
            @if($two_column_content['starting_text'] || $two_column_content['middle_text_'] || $two_column_content['ending_text'])<h2 class="font-40 font-normal tk-modesto-poster tracking-wider pb-7 mb-0.5 uppercase">{!! $two_column_content['starting_text'] !!} <span class="color-red">{!! $two_column_content['middle_text_'] !!} </span>{!! $two_column_content['ending_text'] !!}</h2>@endif
                <div class="wysiwyg-content">
                       {!! $two_column_content['content'] !!}                          
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif