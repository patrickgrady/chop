<?php
/**
 * @file
 * Definition: search--location
 *
 * @copyright Copyright (c) 2013 Palantir.net
 */
?>

<section class="featured">
  <header>
    <h2 class="h3">Find a Location</h2>
  </header>
  <img src="imgs/mapbox-4.png" />

  <form class="search--location">
    <header>
      <h3 class="h4">Refine Results By:</h3>
    </header>
    <div class="l-1-2-4-item search--location__criteria">
      <h5>Type</h5>
      <input type="checkbox"/ id="pediatrician">
      <label for="pediatrician">Pediatrician</label>
      <input type="checkbox"/ id="specialty">
      <label for="specialty">Specialty</label>
      <input type="checkbox"/ id="urgent">
      <label for="urgent">Urgent</label>
    </div>
    <div class="l-1-2-4-item search--location__criteria">
      <h5>Distance</h5>
      <input type="text" placeholder="Zip" />
      <input type="text" placeholder="Radius" />
    </div>
    <div class="l-1-2-4-item search--location__criteria">
      <h5>Service</h5>
      <input type="text" />
    </div>
    <div class="l-1-2-4-item search--location__criteria">
      <h5>Insurance</h5>
      <input type="text" />
    </div>
    <div class="buttons">
      <button type="reset">Clear</button>
      <button type="submit">Find Locations</button>
    </div>
  </form>
</section>
