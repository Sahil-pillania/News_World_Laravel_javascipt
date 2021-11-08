<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style2.css') }}" />
    <title>About Us </title>
  </head>
  <body>
      @include('navbar2')
   <div class="container about my-4">
       <div class="content">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Importance of NEWS</h2>
                    <p>All of you must be reading newspapers. Why is it called a newspaper ?
            Because it contains news. Have you ever thought about how we get news?
            There are various sources of news . You can hear it on the radio, view it on a
            television channel, read it in a newspaper or surf it on internet in a computer.
            News is something that you come across everyday in your life.
            What makes news? John Bogart has given this comment that became
            synonymous with news . When a dog bites a man, that is not news, because
            it happens so often. But if a man bites a dog, that is news. Though this may
            seem true, sometimes, when a dog bites a man that can also become news.
            Suppose a dog bites a famous filmstar, it definitely makes big news.
            It is said that the letters in the word “NEWS” is derived from the four
            directions as indicated below:</p>
             <pre>                          N orth
                          E ast
                          W est
                          S outh  </pre>
             <p>This shows that news can come from anywhere. News is the report of a
            current event, something that was not known, information of recent events
            and happenings.</p>
          <button class="btn btn-outline-light" type="button" target="_blank" href="https://en.wikipedia.org/wiki/News">learn More</button>
        </div>
       </div>
       <div class="image">
                <img src="https://media.baamboozle.com/uploads/images/115857/1621899816_241821_gif-url.gif" alt="">
       </div>
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