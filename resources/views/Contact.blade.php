<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Contact us</title>
    <style>
        .container10{
            margin: 25%;
            padding: 15px;
        }
        .container11{
            /* margin: 25%;
            padding: 15px; */
        }
        body{
            background-image: url("https://cdn5.vectorstock.com/i/1000x1000/50/69/abstract-background-vector-4585069.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-clip: border-box;
            background-position: center;
        }
        .container10 input {
            border: 2px solid black;
            border-radius: 6px;
            background: rgb(211, 199, 199);
        }
        .container10 textarea {
            border: 2px solid black;
            border-radius: 6px;
            background: rgb(211, 199, 199);
        }
        @media screen and (max-width: 899px) {
             .container10{
            margin: 3%;
            padding: 4px;
        }
        }
    </style>

</head>

<body>
    @include('navbar2')

   {{$alert=null}}
        
    <div class="container10 my-4">
        <div class=" mb-3">
            <form action="/contacts" method="POST">
            @csrf
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Sahil pillania"><br>


            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"><br>


            <label for="form" class="form-label">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" id="mobile" placeholder="+91 9876543210"><br>


            <div class="mb-3">
                <label for="" class="form-label">Your Query/Concern</label>
                <textarea class="form-control" name="data" id="data" rows="3"></textarea><br>
            </div>
            <button class="submit btn btn-success">Submit</button>
            </form>
           
         

        </div>
   
    
</div>
    @include('footer')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
            -->
</body>