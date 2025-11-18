@extends('partials.layout')
@section('title', 'Home')
@section('content')
    {{ $posts->links() }}
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-2">
            @foreach ($posts as $post)
                @include('partials.post-card')
            @endforeach
        </div>
    </div>
@endsection