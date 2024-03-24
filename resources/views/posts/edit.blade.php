 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SHOMAN BLOG POST</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
     aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href='/posts'>ALL POSTS</a>
              </li>
              
            </form>
          </div>
        </div>
      </nav>
    <form method="POST" action="{{route('posts.update',$post->id)}}">
      @csrf
      @method('put')
    <div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>

    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea class="form-control" rows="3" name="description" >
        {{$post->description}}
        </textarea>  
        </div>
        <div class="mb-3">
            <label class="form-label">post creator</label>
            <select class="form-control" name="post_creator">
              @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
             @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Update">
        

    </form> 

  </body>
</html> 