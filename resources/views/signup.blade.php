<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="icon" type="image/png" href="{{ asset('icon/favicon.jpg') }}">
      <link rel="stylesheet" href="{{ URL::asset('style.css') }}" />
  
  </head>
  <body>
      @include('navbar');
      {{-- {{$error = false}}
      @include('navbar');
      if($error){
       <div class="alert alert-danger" role="alert">
            Not signed up try again!
           </div>} --}}
<div class="container">
    <div class="container2">
       <div class="image">
           <img src="https://content.presentermedia.com/content/animsp/00008000/8701/cartoon_earth_walk_anim_300_wht.gif" alt="Image couldn't loaded"></div> 
    </div>
    <div class="container3">
        <h1 class="text-center">Enter details to signup</h1>
        
        <form method="POST" action="/signup">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name"  id="name" aria-describedby="f">
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone No.</label>
                <input type="number" class="form-control" name="phone" id="number" aria-describedby="">
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Accept all T & C.</label>
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
    
    </div>
    @include('footer');

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