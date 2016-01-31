  <div class="container">
    <div class="l-1up">
      <section class="featured locations-finder">
        <header>
          <h2 class="h3">Find a Location</h2>
        </header>
        <img src="imgs/mapbox-4.png" />

        <form class="locations-search">
          <header>
            <h3 class="h4">Refine Results By:</h3>
          </header>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Type</h5>
            <input type="checkbox"/ id="pediatrician">
            <label for="pediatrician">Pediatrician</label>
            <input type="checkbox"/ id="specialty">
            <label for="specialty">Specialty</label>
            <input type="checkbox"/ id="urgent">
            <label for="urgent">Urgent</label>
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Distance</h5>
            <input type="text" placeholder="Zip code"/>
            <select name="Radius">
              <option value="Radius">Radius</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
              <option value="250">250</option>
            </select>
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Service</h5>
            <input type="text" />
          </div>
          <div class="l-1-2-4-item locations-criteria">
            <h5>Insurance</h5>
            <input type="text" />
          </div>
          <div class="buttons">
            <button type="submit">Find Locations</button>
            <button type="reset">Clear</button>
          </div>
        </form>

      </section>
    </div>
  </div>
