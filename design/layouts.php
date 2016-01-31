<!DOCTYPE html>
<?php $thisPage="Layouts"; ?>
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
      <h1>Layouts</h1>
      <p class="deck-copy">The following describes the available layout classes and documents how each functions at the different breakpoints of the site.</p>
    </div>

    <!-- l-1-2-3 -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-1-2-3"><b>Layout: .l-1-2-3</b> A layout that is one column in mobile, two columns in tablet and three columns in desktop.</p>
      </div>
    </div>
    <div class="container">
      <div class="style-example">
        <div class="l-1-2-3">
          <div class="l-1-2-3-item">
            <div class="style-layout">.l-1-2-3-item</div>
          </div>
          <div class="l-1-2-3-item">
            <div class="style-layout">.l-1-2-3-item</div>
          </div>
          <div class="l-1-2-3-item">
            <div class="style-layout">.l-1-2-3-item</div>
          </div>
        </div>
      </div>
    </div>

    <!-- l-1-2-4 -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-1-2-4"><b>Layout: .l-1-2-4</b> A layout that is one column in mobile, two columns in tablet and four columns in desktop.</p>
      </div>
    </div>
    <div class="container">
      <div class="style-example">
        <div class="l-1-2-4">
          <div class="l-1-2-4-item">
            <div class="style-layout">.l-1-2-4-item</div>
          </div>
          <div class="l-1-2-4-item">
            <div class="style-layout">.l-1-2-4-item</div>
          </div>
          <div class="l-1-2-4-item">
            <div class="style-layout">.l-1-2-4-item</div>
          </div>
          <div class="l-1-2-4-item">
            <div class="style-layout">.l-1-2-4-item</div>
          </div>
        </div>
      </div>
    </div>

    <!-- l-1-2 -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-1-2"><b>Layout: .l-1-2</b> A layout that is one column in mobile, two columns in all other viewports.</p>
      </div>
    </div>
    <div class="container">
      <div class="style-example">
        <div class="l-1-2">
          <div class="l-1-2-item">
            <div class="style-layout">.l-1-2-item</div>
          </div>
          <div class="l-1-2-item">
            <div class="style-layout">.l-1-2-item</div>
          </div>
        </div>
      </div>
    </div>

    <!-- l-1up -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-1up"><b>Layout: .l-1up</b> A layout that is one column in all viewports.</p>
      </div>
    </div>
    <div class="style-example">
      <div class="l-1up">
        <div class="style-layout">.l-1up</div>
      </div>
    </div>

    <!-- l-2up -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-2up"><b>Layout: .l-2up</b> A layout that is one column in the mobile viewport and is two equal columns in all other viewports.</p>
      </div>
    </div>
    <div class="style-example">
      <div class="l-2up">
        <div class="l-2up-1">
          <div class="style-layout">.l-2up__1</div>
        </div>
        <div class="l-2up-2">
          <div class="style-layout">.l-2up__2</div>
        </div>
      </div>
    </div>

    <!-- l-3up -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-3up"><b>Layout: .l-3up</b> A layout that is one column in the mobile viewport and is three equal columns in all other viewports.</p>
      </div>
    </div>
    <div class="style-example">
      <div class="l-3up">
        <div class="l-3up-1">
          <div class="style-layout">.l-3up__1</div>
        </div>
        <div class="l-3up-2">
          <div class="style-layout">.l-3up__2</div>
        </div>
        <div class="l-3up-3">
          <div class="style-layout">.l-3up__3</div>
        </div>
      </div>
    </div>

    <!-- l-66-33 -->
    <div class="container">
      <div class="l-styleguide">
        <p id="layout-l-66-33"><b>Layout: .l-66-33</b> A layout that is one column in the mobile viewport and is two columns that are 2/3rds and 1/3rd in all other viewports.</p>
      </div>
    </div>
    <div class="style-example">
      <div class="l-66-33">
        <div class="l-66-33__1">
          <div class="style-layout">.l-66-33__1</div>
        </div>
        <div class="l-66-33__2">
          <div class="style-layout">.l-66-33__2</div>
        </div>
      </div>
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
