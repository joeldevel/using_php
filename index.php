<?php
  require_once "partials/head.php";
 ?>
<title>Using php</title>
</head>
<body class="d-flex flex-column h-100">
  <header>
    <?php
      require_once "partials/top_nav.php";
    ?>
  </header>
  <!-- card taken from bootstrap examples -->
  <main class="flex-shrink-0 mt-1 pt-2">
    <div class="card mt-5 ml-2" style="width: 18rem;">
      <img src="img/img1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Prrr!</h5>
        <p class="card-text">As Plato had an imagination...</p>
        <a href="https://devexcathedra.wordpress.com" class="btn btn-primary">Go devexcathedra</a>
      </div>
    </div>
  </main>
</body>
</html>
