<?php
/**
 * @file
 * Definition: accordion
 *
 * @copyright Copyright (c) 2013 Palantir.net
 */
?>

<section class="accordion">
  <header>
    <h4>Or browse by type:</h4>
  </header>
  <ul class="accordion-parent accordion-container">
    <li>
      <a href="#" class="accordion-trigger">Accordion Option 1</a>
      <ul class="accordion-child accordion-container">
        <li><a href="#">Accordion Child Option 1</a></li>
        <li><a href="#" class="accordion-trigger">Accordion Child Option 2</a>
          <ul class="accordion-grandchild accordion-container">
            <li><a href="#">Accordion Grandchild Option 1</a></li>
            <li><a href="#">Accordion Grandchild Option 2</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="accordion-trigger">Accordion Option 2</a>
    </li>
  </ul>
</section>
