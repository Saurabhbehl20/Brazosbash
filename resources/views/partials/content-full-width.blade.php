@if(isset($full_width_section) && $full_width_section)
<section class="full-width-section relative pb-12 px-9 lg:px-0">
    <div class="container mx-auto relative lg:pb-0.5">
        <div class="block lg:grid grid-cols-12 ">
            <div class="col-span-8 col-start-3">
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal  pt-7">
                    {!! $full_width_section !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endif