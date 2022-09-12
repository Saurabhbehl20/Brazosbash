@if(isset($full_image_section) && $full_image_section)
@if($full_image_section['image'])
<section class="full-image-section has-overlay relative">
    <div class="w-full">
        <img src="{{$full_image_section['image']['url']}}" alt="{{$full_image_section['image']['alt']}}">
    </div>
</section>
@endif
@endif

@if(isset($about_content_section) && $about_content_section)
@if($about_content_section['image'] || $about_content_section['content'])
<section class="about-content-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12 lg:gap-14 lg:px-14 items-center">
            @if($about_content_section['image'])
            <div class="col-span-5 intro-image lg:pl-3.5">
                <img src="{{$about_content_section['image']['url']}}" alt="{{$about_content_section['image']['alt']}}" class="img-drop-shadow rounded-md"> 
            </div>
            @endif
            @if($about_content_section['content'])
            <div class="col-start-6 col-span-7 intro-content lg:pr-3.5 pt-14 lg:pt-0">
                <div class="wysiwyg-content">
                       {!! $about_content_section['content'] !!}                          
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
@endif