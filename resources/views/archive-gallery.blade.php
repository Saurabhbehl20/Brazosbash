@extends('layouts.app')

@php $inner_hero_section= $gallery @endphp
@section('content')
    @include('partials.content-innerhero')
    @include('partials.content-gallery')
@endsection