<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Search</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
</head>

<body>
  <header class="site-header">
    <div class="container">
      <p class="label">header</p>
    </div>
  </header>

  <div class="container">
    <div class="l-1up">
      <div class="featured">
        <h3>Results for "Spina Bifida"</h3>
        <form class="hero-search">
          <input type="search" placeholder="Enter a new search term...">
          <button type="submit" value="Search">Go</button>
        </form>
        <nav class="filter">
          <a href="#">All&nbsp;(36)</a>
          <a href="#">Doctors&nbsp;(4)</a>
          <a href="#">Locations&nbsp;(4)</a>
          <a href="#">Conditions&nbsp;(4)</a>
          <a href="#">Centers&nbsp;(4)</a>
          <a href="#">Video&nbsp;(4)</a>
          <a href="#">News&nbsp;(4)</a>
          <a href="#">Events&nbsp;(4)</a>
          <a href="#">Clinical Pathways&nbsp;(4)</a>
          <a href="#">Research&nbsp;(4)</a>
        </nav>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="l-1up">
      <header>
        <h5>1-10 of 38</h5>
        <hr/>
      </header>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--patient-story.php"; ?>
      <?php include "php-includes/results-item--news.php"; ?>
      <?php include "php-includes/results-item.php"; ?>
      <?php include "php-includes/results-item--video.php"; ?>
      <?php include "php-includes/results-item--entity.php"; ?>
      <?php include "php-includes/results-item--event.php"; ?>
      <?php include "php-includes/pager.php"; ?>
    </section>
  </div>

  <footer class="site-footer">
    <div class="container">
      <p class="label">footer</p>
    </div>
  </footer>
<!--
  <script src="scripts/components/jquery/jquery.min.js"></script>
  <script src="scripts/site.js"></script>
-->
</body>
</html>
