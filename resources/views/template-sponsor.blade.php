{{--
  Template Name: Sponsor
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-innerhero')
    @include('partials.content-sponsor')
  @endwhile
@endsection
