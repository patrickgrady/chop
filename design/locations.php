<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CHOP Locations</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-social-regular.css" rel="stylesheet" />
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6715652/764502/css/fonts.css" />
</head>
<body>
  <?php include "php-includes/site-header.php"; ?>

  <div class="hero hero-locations">
    <div class="container">
      <div class="l-call-to-action--left">
        <div class="call-to-action">
          <header>
            <h1 class="call-to-action__title">Over 50 Locations</h1>
          </header>
          <p class="call-to-action__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
          <footer>
            <a class="call-to-action__link" href="#">About Our Network</a>
          </footer>
        </div>
      </div>
    </div>
  </div>

  <?php include "php-includes/search-locations.php"; ?>

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

  <?php include "php-includes/site-footer.php"; ?>

  <!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</body>
</html>
