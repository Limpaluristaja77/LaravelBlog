@extends('partials.layout')
@section('title', 'Tags')
@section('content')
<a href="{{ route('tags.create') }}" class="btn btn-primary">New Tag</a>
{{ $tags->links() }}
<div class="bg-base-100 border border-base-content/5 rounded-box">
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Posts</th>
            <th>Created</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr class="hover:bg-base-300">
                    <td>{{ $tag->id }}</td>
                    <td>
                        <a href="{{ route('tag', $tag) }}" class="link link-hover">{{ $tag->name }}</a>
                    </td>
                    <td>{{ $tag->posts_count }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>
                        <div class="join">
                            <a href="{{ route('tags.edit', $tag) }}" class="btn join-item btn-warning">Edit</a>
                            <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn join-item btn-error">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Name</th>
            <th>Posts</th>
            <th>Created</th>
            <th>Actions</th>
        </tfoot>
    </table>
</div>
{{ $tags->links() }}
@endsection
