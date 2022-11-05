<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Johari - <?php echo $title ?></title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <section class="header">
          <!-- This is where the navbar will be -->
          <div class="logo">

            <!--logo-->
            <a href="index.php"><img src="media/lion-logo.jpg" class="logo-image" alt="Logo"></a>

          </div>

          <button class="nav-toggle" aria-label="toggle-navigation">

            <span class="hamburger">

            </span>

          </button>
          <nav class="nav">
            <ul class="nav--list ">
              <li class="nav--item"><a href="index.php" class="nav--link"> Home</a></li>
              <li class="nav--item"><a href="index.php#cottage" class="nav--link"> The Cottage</a></li>
              <li class="nav--item"><a href="index.php#about-us" class="nav--link"> About Us</a></li>
              <li class="nav--item"><a href="index.php#testimonials" class="nav--link"> Testimonials</a></li>

              <li class="nav--item"><a href="index.php#contact" class="nav--link"> Contact Us</a></li>
              <li class="nav--item"><a href="viewrecords.php" class="nav--link"> View Records</a></li>
            </ul>
          </nav>
        </section>
      </div>
    </div>