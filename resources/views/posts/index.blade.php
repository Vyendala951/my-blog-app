@extends('layouts.app')

@section('content')
<div class="container">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">+ Create New Post</a>

  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr><th>#</th><th>Title</th><th>Content</th><th>Created</th><th>Updated at</th><th>Active?</th><th>Actions</th></tr>
    </thead>
    <tbody>
    @foreach($posts as $i => $post)
      <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ Str::limit($post->content, 70) }}</td>
        <td>{{ $post->created_at->format('d M Y') }}</td>
        <td>{{ $post->updated_at->format('d M Y') }}</td>
        <td>{{ $post->is_active }}</td>
        <td>
          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <a href="{{ route('posts.destroy', $post->id) }}"
             onclick="return confirm('Delete this post?')"
             class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
