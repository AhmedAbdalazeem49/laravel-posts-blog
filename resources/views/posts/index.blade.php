<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SHOMAN BLOG POST</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">ALL POSTS</a>
            </li>
            
          </form>
        </div>
      </div>
    </nav>
    
    <div class="mt-5">
      <center>
        <a href="{{route('posts.create')}}" class="text-center"><button type="button" class="btn btn-outline-success">Create post</button>
        </center>
      </div>
      <div>
      <!-- -->
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titled</th>
              <th scope="col">Posted by</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <th scope="row">1</th>
              <td>{{$post['id']}}</td>
              <td>{{$post['title']}}</td>
              <td>{{$post['posted_by']}}</td>
              <td>{{$post['created_at']}}</td>
              <td>
                <a href="{{route('posts.show',$post['id'])}}" class="btn btn-primary">View</button>
                <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-secondary">Edit</button>
                <a href="{{route('posts.delete',$post['id'])}}" class="btn btn-success">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
   
   
   
  
   
      
      
      
      


  </body>
</html> 