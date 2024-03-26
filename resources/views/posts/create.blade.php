<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Create</title>
  </head>
  <body>
    <div class="header">
        <a href="#">SHOMAN BLOG POST</a>
    </div>
    <form method="POST" action="{{route('posts.store')}}">
      @csrf
    <div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="desc">Description</label>
        <textarea rows="3" name="description" id="desc"></textarea>
        </div>
        <div>
            <label>Creator</label>
            <select name="post_creator">
                <option value="1">ahmed</option>
                <option value="2">mohamed</option>
            </select>
        </div>
        <a href="{{route('posts.create')}}">
        <button class="Btn">
          <div class="sign">+</div>
          <div class="text">Create Post</div>
        </button>
        </a>
    </form> 
  </body>
</html> 