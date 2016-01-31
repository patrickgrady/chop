<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Locations</title>
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

  <div class="hero">
    <div class="container">
      <div class="l-2up-1">
        <div class="call-to-action">
          <header>
            <h1>We have Over 50 Locations</h1>
          </header>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
          <footer>
            <a class="button" href="#">About Our Network</a>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-1up">
      <section class="featured locations-finder">
        <header>
          <h2 class="h3">Find a Location</h2>
        </header>
        <img src="imgs/fpo-16x9.jpg" />

        <form class="locations-search">
          <header>
            <h3 class="h4">Refine Results By:</h3>
          </header>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Type</h5>
            <input type="checkbox"/ id="pediatrician">
            <label for="pediatrician">Pediatrician</label>
            <input type="checkbox"/ id="specialty">
            <label for="specialty">Specialty</label>
            <input type="checkbox"/ id="urgent">
            <label for="urgent">Urgent</label>
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Distance</h5>
            <input type="text" placeholder="Zip" />
            <input type="text" placeholder="Radius" />
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Service</h5>
            <input type="text" />
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Insurance</h5>
            <input type="text" />
          </div>
          <div class="buttons">
            <button type="reset">Clear</button>
            <button type="submit">Find Locations</button>
          </div>
        </form>

      </section>
    </div>
  </div>

  <div class="container">
    <section class="l-1up">
      <header>
        <h5>1–10 of 50</h5>
        <hr/>
      </header>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
      <?php include "php-includes/results-item--locations.php"; ?>
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
