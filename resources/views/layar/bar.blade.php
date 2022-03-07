<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>halaman {{ $title }}</title>
  </head>
  <body style="background-color: #AED3EC">
      <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" 
    style="background-image: linear-gradient(to right, #4682B4, #00FFFF, #00FA9A)">
        <div class="container">
          <a class="navbar-brand" href="/"> Universitas Negeri Makassar</a>

          <!-- button di navbar -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">about</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kelas 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">PTIK A</a></li>
                  <li><a class="dropdown-item" href="#">PTIK B</a></li>
                  <li><a class="dropdown-item" href="#">PTIK C</a></li>
                  <li><a class="dropdown-item" href="#">PTIK D</a></li>
                  <li><a class="dropdown-item" href="#">PTIK E</a></li>
                  <li><a class="dropdown-item" href="#">PTIK F</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success border border-white border-3 rounded-3" type="submit" style="color: azure">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@yield('halaman')


   

    <footer style="background-color: black">
      <section id="nkel" style="margin-top: 40px">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-8">
              <a href="/home">laravel</a>
            </div>
          </div>
          <div class="row justify-content-center" style="color: aliceblue">
            <div class="col">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam tenetur magni aut molestias enim itaque pariatur nobis blanditiis ex adipisci?</p>
              Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
            <div class="col">
              <ul type="none">
                <li>Lisensi: Lisensi MIT</li>
                <li>Rilis stabil: 8.0 / 8 September 2020</li>
                <li>Rilis perdana: Juni 2011</li> 
                <li>Pengembang: Taylor Otwell</li> 
                <li>Bahasa pemrograman: PHP</li>
              </ul>
            </div>
            
          </div>
        </div>
      </section>
  </footer>
  </body>
  
</html>