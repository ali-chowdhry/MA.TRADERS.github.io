<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'whatsapp.php'; ?>
 <main>

    <!-- Carousel start -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./PIC1.jpg" class="d-block w-100" alt="Image 1" style="object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="./PIC2.jpg" class="d-block w-100" alt="Image 2" style="object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="./PIC3.jpg" class="d-block w-100" alt="Image 3" style="object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Carousel end -->

        <!-- card start -->
        <section class="featured-products">
            <h3>Featured Products</h3>
            <div class="product" >
                <img src="./PIC1.jpg"alt="Product 1">
                <a href="products.php">View More</a>
            </div>
            <div class="product">
                <img src="./PIC2.jpg" alt="Product 2">
                <a href="products.php">View More</a>
            </div>
            <div class="product">
                <img src="./PIC3.jpg" alt="Product 3">
                <a href="products.php">View More</a>
            </div>
        </section>
         <!-- card end -->

         <section class="hero" class="hero text-center py-5">
            <h2>Your Trusted Source for Quality Trades</h2>
            <a href="products.php" class="cta-button">Explor Now</a>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
</body>
</html>


   


