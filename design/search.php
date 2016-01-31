<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CHOP Search</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-social-regular.css" rel="stylesheet" />
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6715652/764502/css/fonts.css" />
</head>
<body>
  <?php include "php-includes/site-header.php"; ?>

  <?php include "php-includes/search-results.php"; ?>

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

  <?php include "php-includes/site-footer.php"; ?>

  <!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</body>
</html>
