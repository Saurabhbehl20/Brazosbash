{{--
    Template Name: Contact    
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.content-innerhero')
    @include('partials.content-contact')
    @endwhile
@endsection