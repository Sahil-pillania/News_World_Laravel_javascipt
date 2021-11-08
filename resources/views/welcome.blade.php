<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to News World | Home </title>
    <link rel="stylesheet" href="{{ URL::asset('style2.css') }}" />
    <style>
      div img{
        margin: 8px;
        border-radius: 4px;

      }
    </style>
  </head>
  <body>
    @include('navbar2')
    <div class="container7">
    {{-- <a href="/news"> News latest</a> --}}
    
    <h1 class="text-center mt-3 first-h1">Welcome to the News World</h1>
      <marquee width="100%" scrollamount="10" direction="left" height="30px">
      <b><i>Now, you are in the world of latest news where you can read latest news about lot of curious topics. You can fetch latest news accoding to the country. You just need to select any category defined below.</i></b>
      </marquee>
    {{-- <hr> --}}

    {{-- carousel  --}}
  <div class="container8">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1600x400/?news,world-news,rumour,tech,development" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Latest News</h5>
          <p>About whats happening in our world</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x400/?news,world-news,information,report" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Updated News</h5>
          <p>About whats happening in our world</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x400/?news,information,breaking-news,development" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>All way to go.</h5>
          <p>About whats happening in our world</p>
        </div>
      </div>
  </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>

    <div class="container9 my-4">
      <h1 class="text-center my-2">Select your News country.</h1>
      <a href="/news-india"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkvOokz64MDf2HS2gHUAbS1wMy4gdHP9_XfMRAv6Z9V87QEbLf7WHtgSB4MdnpxTKdeZU&usqp=CAU" class="img-fluid" alt="..." width="300vw"></a>
      
      <a href="/news2-Australia"><img src="https://www.commisceo-global.com/images/australia-outline-icon.png" class="img-fluid" alt="..." width="300vw"></a>
      
      <a href="/news3-HongKong"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZp0KMoRNoALCW9FMZc8rbMN0wq7c8p-CjNw&usqp=CAU" class="img-fluid" alt="..." width="300vw"></a>
      
      <a href="/news4-US"><img src="https://www.kindpng.com/picc/m/20-207546_usa-flag-typography-no-filters-no-background-by.png" class="img-fluid" alt="..." width="300vw"></a>
     
      <a href="/news5-canada"><img src="https://img.freepik.com/free-vector/canada-flag-floating-silk-background_183326-60.jpg?size=626&ext=jpg" class="img-fluid" alt="..." width="300vw"></a>
      
      <a href="/news6-germany"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png" class="img-fluid" alt="..." width="300vw"></a>

      <a href="/news7-japan"><img src="https://i.pinimg.com/originals/fb/ec/28/fbec28611198f341b68756d33ab56de1.jpg" class="img-fluid" alt="..." width="300vw"></a>

      <a href="/news8-mexico"><img src="https://m.media-amazon.com/images/I/61sIDOD1ajL._SL1500_.jpg " class="img-fluid" alt="..." width="300vw"></a>
     
</div>
    @include('footer')


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>