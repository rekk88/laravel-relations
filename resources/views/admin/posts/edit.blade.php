@extends('layouts.app')

@section('content')
    <div class="container">
       @if ($errors->any())
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
          </ul>
        @endif
      <form action="{{route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="titolo" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="titolo" value="{{old('title', $post->title)}}">
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">Descrizione</label>
          <textarea name="content" id="desc" cols="30" rows="10" class="form-control">{{old('content', $post->content)}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection