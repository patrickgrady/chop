<!DOCTYPE html>
<?php $thisPage="General Pages"; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chop Style Guide: General Pages</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-social-regular.css" rel="stylesheet" />
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6715652/764502/css/fonts.css" />
</head>

<body>
  <?php include "php-includes/_styleguide-header.php"; ?>

  <div class="container">
    <div class="l-styleguide">
      <h1>General Pages</h1>
      <p class="deck-copy">General Pages are primarily used for single pieces of content such as News, Events, and Patient Stories. They should be designed to deliver text-based and multimedia content in an easy to read manner.</p>
    </div>

    <div class="l-styleguide">
      <p>Suggested objects for documentation:</p>
      <ul>
        <li>Page Title</li>
        <li>Metadata</li>
        <li>Inline Image with caption</li>
        <li>Inline Video with caption</li>
        <li>Inline Slideshow with caption</li>
        <li>Illustrated Lists</li>
        <li>Inline Tables</li>
        <li>Accordion Lists</li>
        <li>Inset Images</li>
      </ul>
    </div>


  </div>

  <?php include "php-includes/_styleguide-footer.php"; ?>

  <!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushPlain.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushPhp.js"></script>

  <!-- Design object definition level accordion -->
  <script type="text/javascript">
    $(function() {
      var styleShowHide = $('.style-trigger');
      styleShowHide.on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('is-open is-closed').next('.style-trigger-action').toggle();
      });
      SyntaxHighlighter.all();
    });
  </script>

</body>
</html>
