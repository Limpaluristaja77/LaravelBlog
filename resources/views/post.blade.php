@extends('partials.layout')
@section('title', $post->title)
@section('content')
    @include('partials.post-card', ['full' => true])
    @if(auth()->check())
        <div class="card bg-base-300 shadow-md my-4">
            <div class="card-body">
                <form method="POST" action="{{ route('comment.store', $post->id) }}">
                    @csrf

                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">@lang('Add a Comment')</legend>

                        <textarea name="body" class="textarea textarea-bordered w-full" rows="3" required
                            placeholder="Write your comment..."></textarea>

                        @error('body')
                            <p class="label">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <button class="btn btn-primary mt-2">@lang('Post Comment')</button>
                </form>
            </div>
        </div>
    @else
        <p class="mt-4 text-sm">
            <a href="{{ route('login') }}" class="link">@lang('Log in')</a> to comment.
        </p>
    @endif
    @foreach ($post->comments as $comment)
        <div class="card bg-base-300 shadow-sm my-2">
            <div class="card-body">
                <p>{{ $comment->body }}</p>
                <p class="text-base-content/50">{{ $comment->user->name }}</p>
            </div>
        </div>
    @endforeach
@endsection