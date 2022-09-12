@if(isset($rules_and_regulations) && $rules_and_regulations)
@if($rules_and_regulations['info']['starting_text'] || $rules_and_regulations['info']['middle_text'] || $rules_and_regulations['info']['ending_text'] || $rules_and_regulations['heading'] || $rules_and_regulations['content'])
<section class="rules-regulations-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-contain relative px-9 xl:px-0 mt-28">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12">
            @if($rules_and_regulations['info']['starting_text'] || $rules_and_regulations['info']['middle_text'] || $rules_and_regulations['info']['ending_text']|| $rules_and_regulations['heading'])
            <div class="intro-content col-span-8 col-start-3 text-center">
                @if($rules_and_regulations['info']['starting_text'] || $rules_and_regulations['info']['middle_text'] || $rules_and_regulations['info']['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 uppercase"><span class="color-red">{!! $rules_and_regulations['info']['middle_text'] !!} </span>{!! $rules_and_regulations['info']['ending_text'] !!}</h1>@endif
                @if($rules_and_regulations['heading'])<h3 class="text-3xl tk-modesto-poster tracking-wider uppercase color-red mt-14">{!! $rules_and_regulations['heading'] !!}</h3>@endif
            </div>
            @endif
            @if($rules_and_regulations['content'])
            <div class="col-span-12">
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-6 pt-7 lg:px-14">
                    <ul class="list-decimal mx-3">
                        {!! $rules_and_regulations['content'] !!}
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif