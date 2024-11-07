<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px;">
    <!-- Header -->
    <?php include "Header.php"; ?>
    <!-- End Header -->

<div class="container-lg">
  <div class="row">
    <!-- Sidebar -->
    <?php include "Sidebar.php"; ?>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="col-lg-9 mt-2">
      <div class="card">
        <div class="card-header">
          Dashboard
        </div>
        <div class="card-body">
          <h5 class="card-title">Ini bagian Home</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nihil fugit ab odio ipsum sed labore similique repellendus reiciendis, eveniet vero, harum tempore aut. Maiores magnam harum nemo in assumenda.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <!-- End Content -->
  </div>
</div>

<div class="fixed-bottom text-center mb-2">
  Copyright 2024 cafe kelas 1C
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
