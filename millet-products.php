<?php include 'includes/header.php'; ?><section class='py-2'>
  <title>Kavilash Enterprises | Bio Fertilizer Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .hero-section {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slide4.png");
    }
  </style>

  <header class="hero-section">
    <div class="hero-text">
      <h1>Millet Food Products</h1>
      <!-- <p>And I'm a Photographer</p> -->

    </div>
  </header>

  <div class="container">
    <!-- Images Filter Buttons Section -->
    <div class="row mt-5" id="filter-buttons">
      <div class="col-12">
        <button class="btn mb-2 me-1 active" data-filter="all">Show all</button>
        <button class="btn mb-2 mx-1" data-filter="rte">Ready to Eat</button>
        <button class="btn mb-2 mx-1" data-filter="rtc">Ready to Cook</button>
        <button class="btn mb-2 mx-1" data-filter="cereals">Breakfast Cereals</button>
        <button class="btn mb-2 mx-1" data-filter="bars">Health Bars</button>
        <button class="btn mb-2 mx-1" data-filter="snacks">Millet Snacks</button>
        <button class="btn mb-2 mx-1" data-filter="sweets">Millet Sweets</button>
      </div>
    </div>

    <!-- Filterable Images / Cards Section -->
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
      <div class="card p-0" data-name="rte">
        <img src="images/millets/cookies.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Cookies</h6>
          <p class="card-text">Taste once. You will love it.</p>
        </div>
      </div>
      <div class="card p-0" data-name="rte">
        <img src="images/millets/almondhearts.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Almond Hearts</h6>
          <p class="card-text">Millets with Almonds, Crunchy and Sweet.</p>
        </div>
      </div>
      <div class="card p-0" data-name="cereals">
        <img src="images/millets/cereals.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Foxtail Cereal</h6>
          <p class="card-text">Ditch the corn and bring in the Millets.</p>
        </div>
      </div>
      <div class="card p-0" data-name="rtc">
        <img src="images/millets/noodles1.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Noodles</h6>
          <p class="card-text">Nutritious Noodles made with Millets</p>
        </div>
      </div>
      <div class="card p-0" data-name="bars">
        <img src="images/millets/beetbars.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Beet Bars</h6>
          <p class="card-text">Millets with the benefits of real Beet. Tasty Too.</p>
        </div>
      </div>
      <div class="card p-0" data-name="rtc">
        <img src="images/millets/pasta.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Pasta</h6>
          <p class="card-text">Your favourite food with Healthy Millets</p>
        </div>
      </div>
      <div class="card p-0" data-name="rte">
        <img src="images/millets/hiproteincookies.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Hi-Protein Cookies</h6>
          <p class="card-text">Plant Protein, Gluten Free Cookies with High Protein and Fibre.</p>
        </div>
      </div>
      <div class="card p-0" data-name="rtc">
        <img src="images/millets/vermicelli.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Vermicelli</h6>
          <p class="card-text">Soft and thin with all the nutrition</p>
        </div>
      </div>
      <div class="card p-0" data-name="cereals">
        <img src="images/millets/flakes.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Flakes</h6>
          <p class="card-text">Soak in milk, honey and eat. Quick Power.</p>
        </div>
      </div>
      <div class="card p-0" data-name="cereals">
        <img src="images/millets/oatschips.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Oats Chips</h6>
          <p class="card-text">Spicy gluten free chips made with oats.</p>
        </div>
      </div>
      <div class="card p-0" data-name="cereals">
        <img src="images/millets/muesli.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Muesli</h6>
          <p class="card-text">Fruits, Nuts, Seeds and Millets, Super Food.</p>
        </div>
      </div>
      <div class="card p-0" data-name="sweets">
        <img src="images/millets/ladoos.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Ladoos</h6>
          <p class="card-text">The great Ladoo, made with Millets.</p>
        </div>
      </div>
      <div class="card p-0" data-name="bars">
        <img src="images/millets/healthbar.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Health Bars</h6>
          <p class="card-text">High Protein, Plant Protein - Anytime food</p>
        </div>
      </div>
      <div class="card p-0" data-name="snacks">
        <img src="images/millets/snacks.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Millet Snacks</h6>
          <p class="card-text">Now, your favourite snacks - in Millets</p>
        </div>
      </div>
      <div class="card p-0" data-name="rte">
        <img src="images/millets/peanutballs.jpg" alt="img" />
        <div class="card-body">
          <h6 class="card-title">Peanut Balls</h6>
          <p class="card-text">Millet Balls with Peanuts - Healthy Snack</p>
        </div>
      </div>
    </div>
  </div>



  <?php include 'includes/footer.php'; ?>