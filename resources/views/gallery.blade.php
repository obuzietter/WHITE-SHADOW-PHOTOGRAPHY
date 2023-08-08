<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/styles/gallery.css')}}">
    <link rel="stylesheet" href="{{url('/styles/navbar.css')}}">
    <script src="{{ url('/script/navbar.js')}}" defer></script>
    <title>GALLERY - WHITE SHADOW</title>
</head>
<body>
    <nav>

    </nav>
    <main>
        <div class="hero">
            <h1>GALLERY</h1>
        </div>
        <div class="gallery">
            @foreach ($images as $image)
            <div class="photo">
                <img src="{{$image->path}}" alt="">
            </div>  
            @endforeach
           
            
        </div>
    </main>
    <footer>
        &copy; 2023 by white shadow | All rights reserved.
    </footer>
</body>
</html>