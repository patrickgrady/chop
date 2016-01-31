<!DOCTYPE html>
<?php $thisPage="Navigation"; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chop Style Guide: Navigation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-social-regular.css" rel="stylesheet" />
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6715652/764502/css/fonts.css" />
    <link href="syntaxhighlighter/styles/shCore.css" rel="stylesheet" />
    <link href="syntaxhighlighter/styles/shThemeEclipse.css" rel="stylesheet" />
</head>

<body>
  <?php include "php-includes/_styleguide-header.php"; ?>

  <div class="container">
    <div class="l-styleguide">
      <h1>Navigation</h1>
      <p class="deck-copy">The following objects document the navigation structures for the header, footer, and sidebar navigation.</p>
    </div>
  </div>


  <div class="container">
    <div class="l-styleguide">
      <div class="style-label">
        <p id="header-nav"><b>Header Navigation.</b> The header navigation is designed to create a distinction between the primary organizational items (Conditions & Diseases, Doctors …), the secondary organizational items (For Healthcare Pros, Research …), and action items (filed under the "I Want To" dropdown). The navigation has been designed to quickly collapse into a touch-friendly interface around the tablet viewport.</p>
      </div>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/site-header.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: chop-logo</a>
        <div class="style-trigger-action">
          <p> Uses <code>chop-logo</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.chop-logo</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: chop-logo</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-chop-logo.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: search--header</a>
        <div class="style-trigger-action">
          <p> Uses <code>search--header</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.search--header</p>
            <p>.search--header__button</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-search-and-actions</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: search--header</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search--header.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: nav--actions</a>
        <div class="style-trigger-action">
          <p> Uses <code>nav--actions</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.nav--actions</p>
            <p>.nav--actions__navlink</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-search-and-actions</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: nav--actions</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-nav--actions.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: nav--primary</a>
        <div class="style-trigger-action">
          <p> Uses <code>nav--primary</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.nav--primary</p>
            <p>.nav--primary__navlink</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-nav-primary--left</p>
            <p>.l-nav-primary--right</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: nav--primary</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-nav--primary.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: nav--secondary</a>
        <div class="style-trigger-action">
          <p> Uses <code>nav--secondary</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.nav--secondary</p>
            <p>.nav--secondary__navlink</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: nav--secondary</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-nav--secondary.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-styleguide">
      <div class="style-label">
        <p id="sidebar-nav"><b>Sidebar Navigation.</b> The sidebar navigation appears on every non-landing page. The navigation block would use this <a href="http://tympanus.net/Development/ResponsiveMultiLevelMenu/index2.html">Responsive Multi-Level Menu</a> pattern. This pattern provides for a clean, mobile-friendly solution to nested navigation.</p>
      </div>
    </div>
  </div>
  <div class="container style-example">
    <div class="l-66-33__2">
      <?php include "php-includes/nav--side-nav.php"; ?>
    </div>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object:  nav--side-nav</a>
        <div class="style-trigger-action">
          <p> Uses <code>nav--side-nav</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>. nav--side-nav</p>
            <p>. nav--side-nav__link</p>
            <p>. nav--side-nav__back</p>
            <p>. nav--side-nav__forward</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: nav--side-nav</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-nav--side-nav.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-styleguide">
      <div class="style-label">
        <p id="footer-nav"><b>Footer Navigation.</b> The footer navigation exposes and reiterates the header navigation items, it also promotes CHOP's awards, and social media accounts. Clicking or tapping the Directory phone numbers would launch your mobile or desktop phone application.</p>
      </div>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/site-footer.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: chop-logo--footer</a>
        <div class="style-trigger-action">
          <p> Uses <code>chop-logo--footer</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.chop-logo--footer</p>
            <p>.chop-logo--footer__awards</p>
            <p>.chop-logo--footer__award-img</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-chop-logo--footer</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: chop-logo--footer</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-chop-logo--footer.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: nav--footer</a>
        <div class="style-trigger-action">
          <p> Uses <code>nav--footer</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.nav--footer</p>
            <p>.nav--footer__title</p>
            <p>.nav--footer__link</p>
            <p>.nav--footer__linklist</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-nav--footer-1</p>
            <p>.l-nav--footer-2</p>
            <p>.l-nav--footer-3</p>
            <p>.l-nav--footer-4</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: nav--footer</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-nav--footer.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: footer-small-text</a>
        <div class="style-trigger-action">
          <p> Uses <code>footer-small-text</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.footer-small-text</p>
            <p>.footer-small-text__copyright</p>
            <p>.footer-small-text__left</p>
            <p>.footer-small-text__right</p>
          </code>
          <b>Layout Classes:</b>
          <code>
            <p>.l-footer-small-text</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: footer-small-text</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-footer-small-text.php"; ?>
          ]]></script>
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
