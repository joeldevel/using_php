<?php
require_once "partials/head.php";
 ?>
<title>Using php about page</title>
</head>
<body class="d-flex flex-column h-100">
  <header>
    <?php
      require_once "partials/top_nav.php";
    ?>
  </header>
  <!-- carousel taken from bootstrap examples -->
  <main class="flex-shrink-0 mt-1 pt-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  </main>
  <footer class="footer mt-auto py-3">
    <?php
      require_once "partials/footer.php";
    ?>
  </footer>
  <script src="js/jquery.min.js">

  </script>
  <script src="js/bootstrap.min.js">
  </script>
</body>
</html>
