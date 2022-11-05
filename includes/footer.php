</div>

<div class="row">

  <div class="col">
    
    <footer class="footer">
      <a href="mailto:andrew.ahn@hotmail.co.uk" class="footer--link">Email Us</a>
      <ul class="social-list">

        <li class="social-list-item">
          <a href="https://github.com/ANDREWAHN-UK" class="social-list-link">
            <i class="fa-brands fa-github"></i>
          </a>
        </li>
        <li class="social-list-item">
          <a href="https://dribbble.com/Andrew-Ahn-UK" class="social-list-link">
            <i class="fa-brands fa-dribbble"></i>
          </a>
        </li>
        <li class="social-list-item">
          <a href="https://www.linkedin.com/in/andrewahnuk/" class="social-list-link">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </li>
        <li class="social-list-item">
          <a href="" class="social-list-link">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
        <li class="social-list-item">
          <a href="" class="social-list-link">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </li>
        <li class="social-list-item">
          <a href="" class="social-list-link">
            <i class="fa-brands fa-airbnb"></i>
          </a>
        </li>

      </ul>

    </footer>    

  </div>

</div><!-- this div ends the container div started in the header -->


<!-- The below as an alternative navbar/footer -->
<!-- 
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#startDate" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "0:+20",
      dateFormat: "yy-mm-dd"
    });
  } );

  $( function() {
    $( "#endDate" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "0:+20",
      dateFormat: "yy-mm-dd"
    });
  } );

  $( function() {
    $( "#dateArrived" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "0:+20",
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</body>

</html>