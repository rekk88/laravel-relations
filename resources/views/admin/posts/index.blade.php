@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>
        @if ($post->category)
            {{$post->category->name}}
        @endif
      </td>
      <td>
        <a href="{{route('admin.posts.show', $post->slug)}}" class="btn btn-primary">Show</a>
        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{route('admin.posts.destroy', $post->id)}}" method="post" class="d-inline-block delete-post-form">
          @csrf
          @method('DELETE')
          <input type="submit" value="delete" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection