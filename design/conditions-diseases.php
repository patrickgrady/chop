<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CHOP Conditions &amp; Diseases</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/styles.css">
    <link href="webfonts/ss-social-regular.css" rel="stylesheet" />
    <link href="webfonts/ss-standard.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6715652/764502/css/fonts.css" />
</head>
<body>
  <?php include "php-includes/site-header.php"; ?>

  <?php include "php-includes/hero-conditions-diseases.php"; ?>

  <?php include "php-includes/search-quick.php"; ?>

  <?php include "php-includes/topic-menu.php"; ?>

  <?php include "php-includes/site-footer.php"; ?>

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
