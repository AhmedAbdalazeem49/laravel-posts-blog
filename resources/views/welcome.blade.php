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
  <ul class="navigation">
  <li><a href="#">Login</a></li>
  <li><a href="#">Sign Up</a></li>
  </ul>
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
