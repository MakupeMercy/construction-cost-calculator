
   <?php
    include "header.php";
   ?>
<main>
      <div class="hero">
        <img id="image3" src="assets/images/one.jpeg" alt="" />
        <h2 id="hero-msg">We provide comprehensive housing services.</h2>
      </div>

      <section class="grid-container about-section">
        <div class="about-us">
          <div class="icon">
            <img
              id="image-about"
              src="assets/images/mission.jpeg"
              alt=""
              width="60px"
              height="60px"
            />
          </div>
          <div class="rest-info">
            <h3 class="sect-title">About Us</h3>
            <p>
              DreamHouse is a kenyan-based developer of integrated lifestyle
              company offering exceptional value to aspiring homeowners.
            </p>
          </div>
        </div>

        <div class="about-us">
          <div class="icon">
            <img
              id="image-mission"
              src="assets\images\setting.png"
              alt=""
              width="50px"
              height="50px"
            />
          </div>
          <div class="rest-info">
            <h3 class="sect-title">Our Mission</h3>
            <p>
              We provide comprehensive housing services to private investors,
              residential and commercial properties.
            </p>
          </div>
        </div>

        <div class="about-us">
          <div class="icon">
            <img
              id="image-vision"
              src="assets/images/vision.jpeg"
              alt=""
              width="70px"
              height="70px"
            />
          </div>
          <div class="rest-info">
            <h3 class="sect-title">Vission</h3>
            <p>
              Prospective house contractors and private home owners who require
              more than room measurements and photographs.
            </p>
          </div>
        </div>
      </section>

      <section class="grid-container projects">
        <div>
          <h3 style="text-transform: uppercase; color: green">What We Build</h3>
          <h4>Featured Projects</h4>
          <p id="project-counter">40+</p>
        </div>
      </section>
      <section class="grid-container complete-projects">
      
        <div class="feat-home">
          <div class="image">
            <img id="image4" src="assets/images/image4.jpeg" alt="" />
          </div>
          <h4>DreamHouse Home Projects</h4>
          <p>Our DreamHouse successful project at Bamburi</p>
        </div>

        <div class="feat-home">
          <div class="image">
            <img id="image4" src="assets/images/img4.jpg" alt="" />
          </div>
          <h4>DreamHouse Home Projects</h4>
          <p>Our DreamHouse successful project at Watamu</p>
        </div>

        <div class="feat-home">
          <div class="image">
            <img id="image4" src="assets/images/img1.jpg" alt="" />
          </div>
          <h4>DreamHouse Home Projects</h4>
          <p>Our DreamHouse successful project at Shanzu</p>
        </div>

        <div class="feat-home">
          <div class="image">
            <img id="image4" src="assets/images/img2.jpg" alt="" />
          </div>
          <h4>DreamHouse Home Projects</h4>
          <p>Our DreamHouse  successful project at Mtwapa</p>
        </div>
      </section>
    </main>

    <?php
         include_once "footer.php";
    ?>
  
</body>

<script src="assets/Home.js"></script>

</html>