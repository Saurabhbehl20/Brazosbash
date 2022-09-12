@if(isset($form_section) && $form_section)
@if($form_section['form_shortcode'])
<section class="form-section py-20 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-contain relative px-9 lg:px-0">
    <div class="container mx-auto">
        <div class="block lg:grid grid-cols-12 lg:gap-14 lg:px-14 items-center pt-8">
            <div class="col-span-10 col-start-2">
                {!! do_shortcode( $form_section['form_shortcode'] ) !!}
            </div>
        </div>
    </div>
</section>
@endif
@endif