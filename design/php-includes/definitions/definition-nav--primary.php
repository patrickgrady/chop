<?php
/**
 * @file
 * Definition: nav--primary
 *
 * @copyright Copyright (c) 2013 Palantir.net
 */
?>

<nav class="nav--primary is-expanded">
  <header class="element-invisible">
    <h2>Primary Nav</h2>
  </header>
  <div class="l-nav-primary--left">
    <ul>
      <li><a class="nav--primary__navlink" href="#">Conditions &amp; Diseases</a></li>
      <li><a class="nav--primary__navlink" href="#">Doctors</a></li>
      <li><a class="nav--primary__navlink" href="#">Locations</a></li>
      <li><a class="nav--primary__navlink" href="#">Centers &amp; Programs</a></li>
      <li><a class="nav--primary__navlink" href="#">Visitor Information</a></li>
    </ul>
  </div>
  <div class="l-nav-primary--right">
    <?php include "php-includes/definitions/definition-nav--secondary.php"; ?>
  </div>
</nav>
