<?php
/**
 * @file
 * Definition: search--doctor
 *
 * @copyright Copyright (c) 2013 Palantir.net
 */
?>

<section class="featured">
  <header>
    <h2 class="h3">Find a Doctor</h2>
  </header>

  <form class="search--doctor">
    <header class="element-invisible">
      <h3>Search Criteria</h3>
    </header>

    <div class="l-1-2-item search-item">
      <h5>Last Name</h5>
      <input type="text"/>
    </div>
    <div class="l-1-2-item search-item">
      <h5>Specialty</h5>
      <input type="text"/>
    </div>
    <div>
      <div class="l-1-2-4-item search-item">
        <h5>Distance</h5>
        <input type="text" placeholder="Zip"/>
        <input type="text" placeholder="Radius"/>
      </div>
      <div class="l-1-2-4-item search-item">
        <h5>Type</h5>
        <input type="radio" id="pediatrician" name="type"/>
        <label for="pediatrician">Pediatrician</label>
        <input type="radio" id="specialist" name="type"/>
        <label for="specialist">Specialist</label>
      </div>
      <div class="l-1-2-4-item search-item">
        <h5>Gender</h5>
        <input type="radio" id="male" name="sex"/>
        <label for="male">Male</label>
        <input type="radio" id="female" name="sex"/>
        <label for="female">Female</label>
      </div>
      <div class="l-1-2-4-item search-item">
        <h5>Language</h5>
        <select name="languages">
          <option value="english">English</option>
          <option value="french">French</option>
          <option value="german">German</option>
          <option value="italian">Italian</option>
          <option value="polish">Polish</option>
          <option value="russian">Russian</option>
        </select>
      </div>
    </div>
    <div class="buttons">
      <button type="reset">Clear</button>
      <button type="submit">Find Doctors</button>
    </div>
  </form>
</section>
