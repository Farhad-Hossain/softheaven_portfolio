@extends('layouts.base')

@section('content')
    @if ( $blog != null )
        @include('inc.individual_blog_details')
    @endif

    @if ( $blogs != null )
        @include('inc.blog_section')
    @endif

@endsection