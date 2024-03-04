
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>show</title>
    <style>
      nav {
        margin-bottom: 30px;
      }
      .card-style {
        width: 80%;
        padding: 0 60px;
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SHOMAN BLOG POST</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}"
                >ALL POSTS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Start Cards -->
    <div class="container card-style">
      <div class="card">
        <div class="card-header">Post Info</div>
        <div class="card-body">
          <h5 class="card-title">Title:{{ $post['title']}}</h5>
          <p class="card-text">Description: {{ $post['description']}}</p>
        </div>
      </div>
    </div>

    <div class="container card-style">
      <div class="card">
        <div class="card-header">Creator Info</div>
        <div class="card-body">
          <h5 class="card-title">Email: ahmed@gmail.com</h5>
          <p class="card-text">
            Created At: Thursday 25th of December 1975 02:15:16 PM
          </p>
        </div>
      </div>
    </div>
  </body>
</html>























 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   





 
 
 
 
  </body>
</html> 