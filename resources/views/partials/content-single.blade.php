@php $categories = get_the_category(get_the_ID());
$author_id = get_post_field ('post_author', get_the_ID());
$display_name = get_the_author_meta( 'display_name' , $author_id );
@endphp
@if(has_post_thumbnail())
    @php $post_image = get_the_post_thumbnail_url( get_the_ID(), 'full'); @endphp
@else
    @php $post_image = get_template_directory_uri().'/resources/images/placeholder.jpg'; @endphp
@endif
@if($post_image)
    @php
        $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
        $alt=get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
    @endphp
@endif

<section class="blog-single-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 xl:px-0 mt-28">
    <div class="container mx-auto">
        <div class="back-to-blog block lg:px-14 text-center lg:text-right pb-16">
            <div class="px-3.5">
                <a href="{{get_home_url()}}/blog/" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white">Go Back to Blog</a>
            </div>
        </div>
        <div class="block lg:grid grid-cols-2 lg:gap-14 lg:px-14 items-center">
            <div class="short-description lg:pl-3.5">
                @php $title = explode(" ",get_the_title()); @endphp
                <h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 text-center lg:text-left uppercase">{{$title[0]}} <span class="color-red">
                    @for($i=1;$i< count($title);$i++)
                        {{$title[$i]}}
                    @endfor
                </span></h1>
                <ul class="post-meta text-sm tracking-wider tk-azo-sans-web font-normal pt-3 pb-1 flex items-center">
                    <li class="pr-3 sm:pr-6 lg:pr-2 xl:pr-6 color-red"><i class="fa-solid fa-user pr-1.5"></i> {{$display_name}}</li>
                    <li class="pr-3 sm:pr-6 lg:pr-2 xl:pr-6 color-red"><i class="fa-solid fa-calendar-days pr-1.5"></i> {{get_the_date('m/d/Y')}}</li>
                    @if($categories)
                    @php $count = count($categories); $i = 1; @endphp
                    <li class="color-red"><i class="fa-solid fa-tag fa-rotate-90 pt-1.5 pl-2"></i>
                    @foreach($categories as $category)
                        {{$category->name}}  @if($count!=$i) ,@endif
                        @php $i++; @endphp
                    @endforeach
                </li>
                    @endif
                </ul>
                @php $short_des = get_field('short_description_') @endphp
                @if($short_des)
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pt-5">
                    {!! $short_des !!}
                </div>
                @endif
            </div>
            @if($post_image)
            <div class="featured-image lg:pr-3.5 pt-14 lg:pt-0">
                <img src="{{$post_image}}" alt="{{$alt}}" class="img-drop-shadow rounded-md"> 
            </div>
            @endif
        </div>
        @php $long_des = get_field('long_description') @endphp
        @if($long_des)
        <div class="long-description lg:px-14 py-14">
            <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal px-0 lg:px-3.5">
                {!! $long_des !!}
            </div>
        </div>
        @endif
        {!! get_the_posts_navigation() !!}
        <div class="blog-navigation block lg:px-14 pb-5">
            <div class="flex justify-between ">
            @php  
                previous_post_link( '%link', __( '<span class="w-36 tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white text-center lg:ml-3.5 ml-0">Previous</span>' ), true );
                next_post_link( '%link', __( '<span class="w-36 tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white text-center lg:mr-3.5 mr-0">Next</span>'), true );
            @endphp
            </div>
        </div>
    </div>
</section>