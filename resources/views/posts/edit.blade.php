<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>Edit</title>
  </head>
  <body>
    <div class="header">
        <a href="#">SHOMAN BLOG POST</a>
        <a href="{{route('posts.create')}}"><button class="Btn">
          <div class="sign">+</div>
          <div class="text">Create Post</div>
          </button>
        </a>
    </div>
    <form method="POST" action="{{route('posts.update',$post->id)}}">
      @csrf
      @method('put')
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" value="{{$post->title}}" id="title">
    </div>

    <div>
      <label for="desc">Description</label>
      <textarea rows="3" name="description" id="desc" >
      {{$post->description}}
      </textarea>  
    </div>
    <div>
      <label>post creator</label>
      <select name="post_creator">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div>
      <input type="submit" value="Update">
    </form> 
  </body>
</html> 