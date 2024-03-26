<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>All Posts</title>
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
    <main>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Creator</th>
              <th>Time</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->user? $post->user->name : 'not found'}}</td>
              <td>{{$post->created_at}}</td>
              <td class="actions">
                <button><a href="{{route('posts.show', $post->id) }}">View</a></button>
                <button><a href="{{route('posts.edit',$post->id)}}">Edit</a></button>
                <form method="POST" action="{{route('posts.destroy',$post['id'])}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn">
                      <svg viewBox="0 0 15 17.5" height="17.5" width="15" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path transform="translate(-2.5 -1.25)" d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z" id="Fill"></path>
                      </svg>
                    </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </main>
  </body>
</html> 