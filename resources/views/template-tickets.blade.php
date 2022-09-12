{{--
    Template Name: Tickets
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.content-innerhero')
        @include('partials.content-intro')
        @include('partials.content-tickets')
    @endwhile
@endsection
