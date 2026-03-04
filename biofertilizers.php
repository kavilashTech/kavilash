<?php include 'includes/header.php'; ?><section class='py-2'>
    <title>Kavilash Enterprises | Bio Fertilizer Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/slide2.png");

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /* Ensures the image covers the entire section */
            position: relative;
            /* Needed for positioning text */
            height: 50vh!important;
            /* Sets a responsive height (50% of viewport height) */
            color: white;
            /* Ensures text is readable on a dark background */
            padding: 2rem 0;
            /* Adds some padding */
        }
    </style>
  <header class="hero-section">
    <div class="hero-text">
      <h1>Bio Fertilizer and Compost</h1>
      <!-- <p>And I'm a Photographer</p> -->

    </div>
  </header>
    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        /* body {
            font-family: 'Segoe UI', Arial, sans-serif;
            line-height: 1.7;
            background-color: #ffffff;
            color: #333;
        } */


        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .product {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
            padding: 80px 0;
        }

        .product img {
            width: 100%;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .product-content {
            flex: 1;
        }

        .product-content h2 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #0f3d2e;
        }

        .product-content p {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .product-content .btn {
            display: inline-block;
            padding: 12px 28px;
            background-color: var(--primary);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #fff;
            border: 2px solid var(--primary);
        }

        /* Alternating layout */
        .reverse {
            flex-direction: row-reverse;
        }

        /* Background Alternation */
        .bg-light {
            background-color: #f4f9f6;
        }

        .bg-white {
            background-color: #ffffff;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .product {
                flex-direction: column;
                text-align: center;
            }

            .reverse {
                flex-direction: column;
            }

            .header h1 {
                font-size: 32px;
            }
        }

        /* Footer */
        /* .footer {
            background-color: #0f3d2e;
            color: #fff;
            text-align: center;
            padding: 30px 20px;
            font-size: 14px;
        } */
    </style>


    <!-- Product 1 -->
    <section class="bg-light">
        <div class="container product">
            <div>
                <img src="images/cow-dung-powder.jpg" alt="Cow Dung Powder">
            </div>
            <div class="product-content">
                <h2>Cow Dung Powder</h2>
                <p>premium-quality Cow Dung Powder processed through controlled drying and screening methods to ensure consistency, reduced moisture content, and safe handling for global markets.</p>

                <P>Widely used as an organic fertilizer, soil conditioner, compost enhancer, and as a base material for bio-fertilizers, our cow dung powder improves soil structure, enhances microbial activity, and increases nutrient availability naturally.</p>
                <a href="contact.php" class="btn">Enquire Now</a>
            </div>
        </div>
    </section>

    <!-- Product 2 -->
    <section class="bg-white">
        <div class="container product reverse">
            <div>
                <img src="images/vermicompost.jpg" alt="Vermicompost">
            </div>
            <div class="product-content">
                <h2>Vermicompost</h2>
                <p>Cow dung vermicompost is a premium, nutrient-rich organic fertilizer produced by earthworms breaking down cow dung, serving as an excellent soil conditioner. It is superior to raw manure, offering high NPK levels, micronutrients (Zinc, Copper), and beneficial microbes. It improves soil aeration, water retention, and is ideal for potted plants, gardens, and organic farming.</p>
                <p>Improves soil structure, increases nutrient absorption, promotes healthy plant growth and provides nutrients in a form that is easier for plants to absorb.</p>
                <a href="contact.php" class="btn">Enquire Now</a>
            </div>
        </div>
    </section>

    <!-- Product 3 -->
    <section class="bg-light">
        <div class="container product">
            <div>
                <img src="images/cow-dung-briquettes.jpg" alt="Cow Dung Briquettes">
            </div>
            <div class="product-content">
                <h2>Cow Dung Briquettes</h2>
                <p>Cow dung briquettes are sustainable, eco-friendly, and cost-effective fuel sources made from compressed dried cattle manure, often mixed with agricultural waste like sawdust or rice husks. They serve as a clean-burning alternative to wood and coal for cooking, heating, and industrial boilers, providing high calorific value with low ash content.
                    Eco-friendly compressed briquettes made from processed cow dung, ideal for agricultural and energy applications.</p>
                <p>Low moisture content, easy handling, and sustainable fuel alternative reducing dependency on wood and coal.</p>
                <a href="contact.php" class="btn">Enquire Now</a>
            </div>
        </div>
    </section>

    <!-- Product 4 -->
    <section class="bg-white">
        <div class="container product reverse">
            <div>
                <img src="images/organic-compost.jpg" alt="Organic Compost">
            </div>
            <div class="product-content">
                <h2>Organic Compost</h2>
                <p>High-quality Organic Compost from India, processed under strict quality controls to meet international agricultural standards. Our compost is manufactured through scientific decomposition methods to ensure pathogen reduction, stable nutrient composition, and optimal organic carbon levels.
                    Premium organic compost formulated to improve soil fertility and long-term crop productivity.</p>
                <p>Designed for large-scale farming, organic cultivation, landscaping projects, and soil regeneration programs, our compost enhances soil structure, improves microbial activity, and increases water retention capacity.</p>
                <a href="contact.php" class="btn">Enquire Now</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>