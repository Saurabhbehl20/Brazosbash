@extends('layouts.app')
@php 
  global $post;
  if($post->post_name){
    $inner_hero_section=$inner_hero_section;
    $bottom_content = '';
  }
  else {
    $inner_hero_section=$events_hero_section;
  }
@endphp
@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-innerhero')
    @includeFirst(['partials.content-page', 'partials.content'])
    @include('partials.content-bottom')
  @endwhile
@endsection