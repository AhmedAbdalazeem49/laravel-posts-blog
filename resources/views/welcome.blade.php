<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<!-- Adding A favicon -->
<link rel="icon" type="image/png" href="./images/welcomePage.png">
<!-- Font Awesome Library -->
<script src="https://kit.fontawesome.com/5ef60b71ad.js" crossorigin="anonymous"></script>
<title>Welcome</title>
</head>
<body>
  <section>
  <header>
  <a href="#" class="logo">Posts Blog</a>
  <div class="buttons">
  <button class="Btn">
  <div class="sign"><svg viewBox="0 0 512 512"><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg></div>
  <div class="text">Login</div>
</button>
<button class="signupBtn">
  SIGN UP
  <span class="arrow">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="rgb(183, 128, 255)"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg>
  </span>
</button>
  </div>
</header>
<div class="content">
  <div class="contentBox">
  <h2>Dive into our blog for endless inspiration!</h2>
      <p>
        Explore our captivating blog filled with thought-provoking insights, inspiring stories, and informative articles. Unleash your imagination, broaden your horizons, and embark on a journey of discovery with us.
      </p>
      <a href="{{('/posts')}}" class="button">Recent Posts</a>
  </div>
  </div>
  <ul class="sci">
  <li><a href="https://www.facebook.com/profile.php?id=100011816132504" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
  <li><a href="https://github.com/Ahmed-Shoman" target="_blank"><i class="fa-brands fa-github"></i></a></li>
  <li><a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAADu_UukBhz_pJALfZRpWlXZfqcKZkG6sJ14&keywords=ahmed%20shoman&origin=RICH_QUERY_SUGGESTION&position=2&searchId=daaba311-0094-4174-88cc-42567da58eb5&sid=c2l&spellCorrectionEnabled=false" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
  </ul>
</section>
</body>
</html>
