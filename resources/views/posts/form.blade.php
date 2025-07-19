@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $post->exists ? 'Edit' : 'Create' }} Post</h1>

  <form action="{{ route('posts.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $post->id }}">

    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" name="title" class="form-control"
             value="{{ old('title', $post->title) }}" maxlength="50" required>
      @error('title')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Content</label>
      <textarea name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
      @error('content')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Is Active?</label>
      <select name="is_active" class="form-select">
        <option value="Yes" {{ old('is_active', $post->is_active)=='Yes'?'selected':'' }}>Yes</option>
        <option value="No"  {{ old('is_active', $post->is_active)=='No'?'selected':'' }}>No</option>
      </select>
      @error('is_active')<div class="text-danger">{{ $message }}</div>@enderror
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to list</a>
  </form>
</div>
@endsection
