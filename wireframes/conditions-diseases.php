<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Centers &amp; Programs</title>
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
          <h1>Conditions and Diseases</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-1up">
      <div class="featured">
        <h3>Quick Find</h3>
        <form class="hero-search">
          <input type="search" placeholder="Cancer Center, Asthma Program, etc.">
          <button type="submit" value="Search">Go</button>
        </form>
        <nav class="">
          <h3>Or browse by letter</h3>
          <a class="" href="#a">A</a>
          <a class="" href="#b">B</a>
          <a class="" href="#c">C</a>
          <a class="" href="#d">D</a>
          <a class="" href="#e">E</a>
          <a class="" href="#">F</a>
          <a class="" href="#">G</a>
          <a class="" href="#">H</a>
          <a class="" href="#">I</a>
          <a class="" href="#">J</a>
          <a class="" href="#">K</a>
          <a class="" href="#">L</a>
          <a class="" href="#">M</a>
          <a class="" href="#">N</a>
          <a class="" href="#">O</a>
          <a class="" href="#">P</a>
          <a class="" href="#">Q</a>
          <a class="" href="#">R</a>
          <a class="" href="#">S</a>
          <a class="" href="#">T</a>
          <a class="" href="#">U</a>
          <a class="" href="#">V</a>
          <a class="" href="#">W</a>
          <a class="" href="#">X</a>
          <a class="" href="#">Y</a>
          <a class="" href="#">Z</a>
        </nav>
      </div>
    </div>
  </div>

  <div class="container">
    <section class="l-1up accordion">
      <ul class="accordion-parent accordion-container">

        <li>
          <a href="#" class="accordion-trigger">Airway, Chest, &amp; Lungs</a>
          <ul class="accordion-child accordion-container">
            <li><a href="#" class="">Condition Subcategory 1</a></li>
            <li><a href="#" class="accordion-trigger">Disease and Condition Subcategory 2 testing extra long title here</a>
              <ul class="accordion-grandchild accordion-container">
                <li><a href="#" class="">Condition Sub-subcategory 1</a></li>
                <li><a href="#" class="">Disease Sub-subcategory 2</a></li>
              </ul>
            </li>
            <li><a href="#" class="accordion-trigger">Disease and Condition Subcategory 3</a>
              <ul class="accordion-grandchild accordion-container">
                <li><a href="#" class="">Condition Sub-subcategory 1</a></li>
                <li><a href="#" class="">Disease Sub-subcategory 2</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li>
          <a href="#" class="accordion-trigger">Allergies and Asthma</a>
          <ul class="accordion-child accordion-container">
            <li><a href="#" class="">Condition Subcategory 1</a></li>
            <li><a href="#" class="">Digestive System and Metabolic Disorders</a>
          </ul>
        </li>

        <li>
          <a href="#" class="accordion-trigger">Cancer</a>
          <ul class="accordion-child accordion-container">
            <li>
              <a class="accordion-trigger" href="#">Bone Cancer</a>
              <ul class="accordion-grandchild accordion-container">
                <li><a href="#" class="">Qui facit eorum claritatem</a></li>
                <li><a href="#" class="">Tempor cum soluta nobis</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="accordion-trigger">Leukemia</a>
              <ul class="accordion-grandchild accordion-container">
                <li><a href="#" class="">Acute Lymphoblastic Leukemia</a></li>
                <li><a href="#" class="">Acute Myelogenous Leukemia</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="accordion-trigger">Liver Cancer</a>
              <ul class="accordion-grandchild accordion-container">
                <li><a href="#" class="">Qui facit eorum claritatem</a></li>
                <li><a href="#" class="">Tempor cum soluta nobis</a></li>
              </ul>
            </li>
          </ul>
        </li>

      </ul>
    </section>
  </div>

  <footer class="site-footer">
    <div class="container">
      <p class="label">footer</p>
    </div>
  </footer>

<!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
