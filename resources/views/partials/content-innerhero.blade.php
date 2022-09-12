@php $heading = get_the_title(); @endphp
@if(isset($inner_hero_section) && $inner_hero_section)
@if($inner_hero_section['heading'])
    @php $heading =  $inner_hero_section['heading']; @endphp
@endif
@if($inner_hero_section['background_image']) 
<style>
    .inner-page-hero-section {
        background-image: url({{$inner_hero_section['background_image']['url']}}); 
    }
</style>
@endif
@endif
<section class="inner-page-hero-section relative bg-cover bg-center pt-56 pb-32 2xl:pt-64 2xl:pb-40">
    <div class="container mx-auto relative">
        <div class="block lg:grid grid-12 gap-4">
            <div class="col-start-1 col-span-6 lg:pl-12">
                <h1 class="text-4xl sm:text-5xl font-normal tk-modesto-poster tracking-wider pb-7 mb-0.5 text-center lg:text-left uppercase text-white pt-8 px-9 lg:px-0">{{$heading}}</h1>
            </div>
        </div>
    </div>
</section>

