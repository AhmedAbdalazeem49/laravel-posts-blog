<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <!-- Adding A favicon -->
    <link rel="icon" type="image/png" href="/public/images/welcomePage.png">
    <title>Blog</title>
  </head>
  <body>
    <section>
      <header>
        <a href="{{route('posts.index')}}" class="logo">Shoman Posts Blog</a>
        <a style="--clr: #03a9f4" class="button" href="{{route('posts.index')}}">
            <span class="button__icon-wrapper">
                <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>
                
                <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                </svg>
            </span>
            All Posts
        </a>
      </header>
      <main>
        <h3 class="title">{{$post->title}}</h3>
        <p class="description">{{$post->description}}</p>
        <div class="creator">
          <p>Name: <span>{{$post->user? $post->user->name : 'not found'}}</span></p>
          <p>Email: <span>{{$post->user?$post->user->email: 'not found'}}</span></p>
          <p>Posted At: <span>{{$post->user?$post->user->created_at: 'not found'}}</span></p>
        </div>
      </main>
    </section>
</body>
</html>























 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   





 
 
 
 

