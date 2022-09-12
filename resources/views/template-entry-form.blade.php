{{--
    Template Name: Entry Form
    --}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.content-innerhero')
        @include('partials.content-intro')
        @include('partials.content-form')
        @include('partials.content-full-width')
    @endwhile
@endsection
