<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Doctors</title>
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
          <header>
            <h1>Our World-Renowned Doctors</h1>
          </header>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="l-1up">
      <section class="featured doctors-finder">
        <header>
          <h2 class="h3">Find a Doctor</h2>
        </header>

        <form class="doctors-search">
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
    </div>
  </div>

  <div class="container">
    <section class="l-1up">
      <header>
        <h5>1-10 of 143</h5>
        <hr/>
      </header>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/results-item--doctors.php"; ?>
      <?php include "php-includes/pager.php"; ?>
    </section>
  </div>

  <footer class="site-footer">
    <div class="container">
      <p class="label">footer</p>
    </div>
  </footer>
<!--
  <script src="scripts/components/jquery/jquery.min.js"></script>
  <script src="scripts/site.js"></script>
-->
</body>
</html>
