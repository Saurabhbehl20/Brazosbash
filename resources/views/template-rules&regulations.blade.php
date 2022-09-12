{{--
    Template Name: Rules and Regulations
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.content-rules&regulation')
    @endwhile
@endsection