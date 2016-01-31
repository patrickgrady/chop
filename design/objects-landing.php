<!DOCTYPE html>
<?php $thisPage="Landing Pages"; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chop Style Guide: Landing Pages</title>
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
      <h1>Landing Pages</h1>
      <p class="deck-copy">Landing page types are used for all primary navigation items. Their role is to introduce groups of content at a high level, and attract the User further into the site. Many of the CHOP Landing Pages (Doctors, Locations, etc.) employ content-specific search interfaces and results.</p>
    </div>
  </div>

  <!-- Hero Video -->
  <div class="container">
    <div class="l-styleguide">
      <p id="hero-video-call-to-action"><b>Hero Video with Headline and Call to Action (right).</b> This hero video treatment is exclusive to the homepage. It includes a call-to-action block that anchors to the right of the page. The video asset swaps out to a background image at mobile.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/hero-video.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Call to action</a>
        <div class="style-trigger-action">
          <p> Uses <code>call-to-action</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.call-to-action</p>
            <p>.call-to-action__title</p>
            <p>.call-to-action__description</p>
            <p>.call-to-action__link</p>
            <p>.call-to-action--bg-alternate</p>
          </code>
          <b>Layout classes:</b>
          <code>
            <p>.l-call-to-action--right</p>
            <p>.l-call-to-action--left</p>
          </code>
        </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Call to action</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-call-to-action.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Hero</a>
        <div class="style-trigger-action">
          <p> Uses <code>hero</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.hero</p>
            <p>.hero--image</p>
            <p>.hero--map</p>
            <p>.hero--video</p>
          </code>
        </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Hero</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-hero.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>


  <!-- Hero Image -->
  <div class="container">
    <div class="l-styleguide">
      <p id="hero-image-call-to-action"><b>Hero Image with Call to Action.</b> This hero image is used at the top of most landing pages.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/hero-centers-programs.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>hero--image</code> design object</p>
        <p> Uses <code>l-call-to-action--left</code> layout class</p>
        <p> See <a href="#hero-video-call-to-action">Hero video with headline and call to action right</a> for more details.</p>
      </div>
    </div>
  </div>


  <!-- Hero Locations -->
  <div class="container">
    <div class="l-styleguide">
      <p id="hero--map-call-to-action--bg-alternate"><b>Hero Locations.</b> This location hero is unique to the homepage.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/hero-locations.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>hero--map</code> design object.</p>
        <p> Uses <code>l-call-to-action--left</code> layout class.</p>
        <p> Uses <code>call-to-action--bg-alternate</code> design object.</p>
        <p> See <a href="#hero-video-call-to-action">Hero video with headline and call to action right</a> for more details.</p>
      </div>
    </div>
  </div>

  <!-- Promoted Content Gallery -->
  <div class="container">
    <div class="l-styleguide">
      <p id="gallery"><b>Promoted Content Gallery.</b> This gallery interface allows content managers the ability to promote new content and curate specific groupings of content.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/gallery.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Gallery</a>
        <div class="style-trigger-action">
          <p> Uses <code>gallery</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.gallery</p>
            <p>.gallery-item</p>
            <p>.gallery-item__img</p>
            <p>.gallery-item__link</p>
            <p>.gallery-nav-item</p>
            <p>.gallery-nav-wrap</p>
          </code>
          <b>Layout classes:</b>
          <code>
            <p>.l-1up</p>
            <p>.l-1-3</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Gallery</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-gallery.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Search: Results -->
  <div class="container">
    <div class="l-styleguide">
      <p id="search-general"><b>Search: Results.</b> The Search Results interface allows the User to filter their search results by a single facet, as well as quickly perform a new search.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/search-results.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Search</a>
        <div class="style-trigger-action">
          <p> Uses <code>search</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.search</p>
            <p>.search-wrapper</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Search</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Filter links</a>
        <div class="style-trigger-action">
          <p> Uses <code>filter</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.filter</p>
            <p>.filter__link</p>
            <p>.is-selected</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Filter links</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-filter.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Search: Centers & Programs -->
  <div class="container">
    <div class="l-styleguide">
      <p id="search-centers"><b>Search: Centers & Programs.</b> The Search interface for Centers & Programs provides the User with the option to browse the directory alphabetically.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/search-centers-programs.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Search</a>
        <div class="style-trigger-action">
          <p> Uses <code>search</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.search</p>
            <p>.search-wrapper</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Search</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search.php"; ?>
          ]]></script>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Alpha links</a>
        <div class="style-trigger-action">
          <p> Uses <code>alpha</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.alpha</p>
            <p>.alpha__link</p>
            <p>.is-selected</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Alpha links</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-alpha.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Search: Doctors -->
  <div class="container">
    <div class="l-styleguide">
      <p id="search-doctors"><b>Search: Doctors.</b> The Search interface for Doctors provides the User with mulitple options of refinement unique to the act of finding a doctor.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/search-doctors.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Search--doctor</a>
        <div class="style-trigger-action">
          <p> Uses <code>search--doctor</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.search--doctor</p>
            <p>.search-item</p>
            <p>.featured</p>
          </code>
          <b>Layout classes:</b>
          <code>
            <p>.l-1-2-item</p>
            <p>.l-1-2-4-item</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Search--doctor</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search--doctor.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Search: Locations -->
  <div class="container">
    <div class="l-styleguide">
      <p id="search-location"><b>Search: Locations.</b> The Search interface for Locations provides the User with mulitple options of refinement unique to the act of finding a location.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/search-locations.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Search--location</a>
        <div class="style-trigger-action">
          <p> Uses <code>search--location</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.search--location</p>
            <p>.search-location__criteria</p>
            <p>.featured</p>
          </code>
          <b>Layout classes:</b>
          <code>
            <p>.l-1-2-item</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Search--location</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search--location.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Search: Quick Find -->
  <div class="container">
    <div class="l-styleguide">
      <p id="search-quick"><b>Search: Quick Find.</b> </p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/search-quick.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Search with error</a>
        <div class="style-trigger-action">
          <p> Uses <code>search</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.search</p>
            <p>.search-wrapper</p>
            <p>.search__error</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Search with error</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-search--error.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Results Counter -->
  <div class="container">
    <div class="l-styleguide">
      <p><b>Results Counter.</b> This object communicates the amount of search results at the top of a results list.</p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/search-results-counter.php"; ?>
    </section>
  </div>

  <!-- Pagination -->
  <div class="container">
    <div class="l-styleguide">
      <p id="pager"><b>Pagination.</b> This object appears at the bottom of any list requiring pagination.</p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/pager.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Pager</a>
        <div class="style-trigger-action">
          <p> Uses <code>pager</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.pager-item</p>
            <p>.is-disabled</p>
            <p>.is-active</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Pager</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-pager.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Alpha Menu -->
  <div class="container">
    <div class="l-styleguide">
      <p id="alpha-list"><b>Alphabetical Menu.</b> This object organizes lists of content alphabetically in an easy to parse grid layout.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/alpha-menu.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: Alpha list</a>
        <div class="style-trigger-action">
          <p> Uses <code>alpha-list</code> design object</p>
          <b>Component classes:</b>
          <code>
            <p>.alpha-list</p>
            <p>.alpha-list__item</p>
          </code>
          <b>Layout classes:</b>
          <code>
            <p>.l-1up</p>
            <p>.l-1-2-3-item</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: Alpha list</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-alpha-list.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Topic Menu -->
  <div class="container">
    <div class="l-styleguide">
      <p id="accordion"><b>Browse by Topic Menu.</b> This accordion based interface allows the User to drill down through a pre-arranged group of topics until they reach an active link.</p>
    </div>
  </div>
  <div class="style-example">
    <?php include "php-includes/topic-menu.php"; ?>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: accordion</a>
        <div class="style-trigger-action">
          <p> Uses <code>accordion</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.accordion</p>
            <p>.accordion-trigger</p>
            <p>.accordion-child</p>
            <p>.accordion-grandchild</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: accordion</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-accordion.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Bio -->
  <div class="container">
    <div class="l-styleguide">
      <p id="index-microformat-bio"><b>Microformat: Bio</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--doctors.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: results-item</a>
        <div class="style-trigger-action">
          <p> Uses <code>results-item</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.results-item</p>
            <p>.results-wrap</p>
            <p>.results-item__image</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: results-item</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-results-item.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Entity -->
  <div class="container">
    <div class="l-styleguide">
      <p id="index-microformat-entity"><b>Microformat: Entity.</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--entity.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>results-item</code> design object but has no image.</p>
        <p> See <a href="#index-microformat-bio">Microformat: Bio</a> for more details.</p>
      </div>
    </div>
  </div>

  <!-- Event -->
  <div class="container">
    <div class="l-styleguide">
      <p id="index-microformat-event"><b>Microformat: Event.</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--event.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Design object: results-item--alt</a>
        <div class="style-trigger-action">
          <p> Uses <code>results-item--alt</code> design object</p>
          <b>Component Classes:</b>
          <code>
            <p>.results-item--alt</p>
            <p>.results-item--alt__image</p>
            <p>.results-item__event-location-title</p>
            <p>.results-item__subtitle</p>
            <p>.results-wrap</p>
          </code>
        </div>
      </div>
      <div class="style-trigger-wrapper">
        <a href="#" class="style-trigger is-open">Markup: results-item</a>
        <div class="style-trigger-action">
          <script type="syntaxhighlighter" class="brush: php"><![CDATA[
            <?php include "php-includes/definitions/definition-results-item--alt.php"; ?>
          ]]></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Location -->
  <div class="container">
    <div class="l-styleguide">
      <p><b>Microformat: Location.</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--locations.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>results-item--alt</code> design object.</p>
        <p> See <a href="#index-microformat-event">Microformat: Event</a> for more details.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-styleguide">
      <p><b>Microformat: Video.</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--video.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>results-item--alt</code> design object.</p>
        <p> See <a href="#index-microformat-event">Microformat: Event</a> for more details.</p>
      </div>
    </div>
  </div>

  <!-- General Content -->
  <div class="container">
    <div class="l-styleguide">
      <p><b>Microformat: General Content.</b></p>
    </div>
  </div>
  <div class="container">
    <section class="l-1up">
      <?php include "php-includes/results-item--news.php"; ?>
      <?php include "php-includes/results-item--patient-story.php"; ?>
      <?php include "php-includes/results-item.php"; ?>
    </section>
  </div>
  <div class="style-definition container">
    <a href="#" class="style-trigger is-closed">Design object definition:</a>
    <div class="style-hide style-trigger-action">
      <div class="style-trigger-wrapper">
        <p> Uses <code>results-item</code> design object.</p>
        <p> See <a href="#index-microformat-bio">Microformat: Bio</a> for more details.</p>
      </div>
    </div>
  </div>


  <?php include "php-includes/_styleguide-footer.php"; ?>

<!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shCore.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushPlain.js"></script>
  <script type="text/javascript" src="syntaxhighlighter/scripts/shBrushPhp.js"></script>

  <!-- Multi level accordion -->
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

  <!-- Multi level accordion -->
  <script type="text/javascript">
    $(function() {
      // Find the accordion
      var accordion = $(".accordion");
      // Find the the links that are triggers.
      var triggers = accordion.find('.accordion-trigger');

      triggers.each(function() {
        // store this trigger for later use.
        var trigger = $(this);
        // Find the parent of the trigger link.
        var trigger_parent = trigger.parent();
        // Find if there is a child accordion container.
        var child_container = trigger_parent.find('> .accordion-container');

        trigger.addClass('is-closed');

        // Attach a click function to each trigger.
        trigger.on('click', function(e) {
          // Prevent the link from clicking.
          e.preventDefault();
          // Find the sibling triggers by determing what links are in the parent
          // that were not clicked.
          sibling_triggers = trigger_parent.parent('.accordion-container').find('.accordion-trigger').not(e.target);
          // Slide up all of the sibling elements.
          sibling_triggers.parent().find('.accordion-container').slideUp(100);

          sibling_triggers.addClass('is-closed');
          sibling_triggers.removeClass('is-open');

          if(trigger.hasClass('is-open')){
            child_container.slideUp(100);
          }
          else {
            // Slide the child container down.
            child_container.slideDown(100);
          }

          trigger.toggleClass('is-open is-closed');
        });
      });
    });
  </script>

</body>
</html>
