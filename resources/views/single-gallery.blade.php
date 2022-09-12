@extends('layouts.app')
@php $inner_hero_section= $gallery @endphp
@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.content-innerhero')
        @include('partials.content-single-gallery')
    @endwhile
@endsection
