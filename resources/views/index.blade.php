@extends('layouts.app')

@php
global $wp_query;
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$max_num_pages = $wp_query->max_num_pages;
@endphp

@if(have_posts())
@section('content')
@include('partials.content-innerhero')
  <section class="blog-section pattern-bg pt-32 pb-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-5 xl:px-0">
    <div class="container mx-auto">
        <div class="block md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-5 xl:gap-8 lg:py-3">
            @while(have_posts()) @php the_post();
                      
                        $post_image = get_the_post_thumbnail_url( get_the_ID(), 'single-post-thumbnail'); 
                        $author_id = get_post_field ('post_author', get_the_ID());
                        $display_name = get_the_author_meta( 'nickname' , $author_id );
                                $categories = get_the_category( get_the_ID() );
                        @endphp
                        @if($post_image)
                            @php
                            $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                            $alt=get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
                            @endphp
                        @else
                            @php 
                            $alt=get_the_title();
                            $post_image= get_template_directory_uri().'/resources/images/placeholder.jpg';
                            @endphp
                        @endif
            <div class="blog-col pl-6 pr-6 pb-10 pt-7 md:pt-0 mb-20 xl:mb-16">
              @if($post_image)
                <a href="{{ get_the_permalink() }}"><img class="-mt-20 md:-mt-14 img-drop-shadow rounded-md" src="{{$post_image}}" alt="{{$alt}}" ></a>
              @endif
                <h3 class="tracking-wider text-2xl font-normal tk-modesto-poster pt-10 pb-7 uppercase text-center"><a href="{{get_the_permalink()}}">{{the_title()}}</a></h3>
                <ul class="post-meta text-sm tracking-wider tk-azo-sans-web font-normal pb-5 sm:flex items-center justify-center flex-wrap">
                    <li class="pr-3 sm:pr-6 lg:pr-2 xl:pr-6 color-red"><i class="fa-solid fa-user pr-1.5"></i> {{$display_name}}</li>
                    <li class="pr-3 sm:pr-6 lg:pr-2 xl:pr-6 color-red"><i class="fa-solid fa-calendar-days pr-1.5"></i> {{get_the_date('d/m/Y')}}</li>
                    @if($categories)
                        @php $count = count($categories); $i = 1; @endphp
                        <li class="color-red"><i class="fa-solid fa-tag fa-rotate-90 pt-1.5 pl-2"></i>
                        @foreach($categories as $category)
                          {{$category->name}} @if($count!=$i) ,@endif
                        @php $i++; @endphp
                        @endforeach
                      </li>
                    @endif
                </ul>
                <p class="text-base tracking-wider tk-azo-sans-web font-normal pb-7 ">{!! get_the_excerpt() !!}</p>
                <div class="text-center">
                    <a href="{{ get_the_permalink() }}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white">Read More</a>
                </div>
            </div>
          @endwhile
            
        </div>
        <div class="pagination flex content-center justify-center items-center text-base tracking-wider tk-azo-sans-web font-bold">
            @php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $max_num_pages,
                        'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                        'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
                    ) );
            @endphp
            
        </div>
    </div>
  </section>
@endsection
@endif