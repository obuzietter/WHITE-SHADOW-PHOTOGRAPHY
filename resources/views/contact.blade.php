<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('/styles/contact.css') }}">
    <script src="{{ url('script/navbar.js') }}" defer></script>
    <title>CONTACT - WHITE SHADOW</title>
</head>

<body>
    <nav>

    </nav>
    <main>
        <div class="contact">
            <div class="title">
                CONTACT US!
            </div>
            <div class="phone">
                <span class="icon">
                    <img src="https://cdn-icons-png.flaticon.com/128/724/724664.png" alt="">
                </span>
                <span class="text">
                    +254 796 974 327
                </span>
            </div>
            <div class="whatsapp">
                <span class="icon">
                    <img src="https://cdn-icons-png.flaticon.com/128/174/174879.png" alt="">
                </span>
                <span class="text">
                    +254 796 974 327
                </span>

            </div>
            <div class="instagram">
                <span class="icon">
                    <img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" alt="">
                </span>
                <span class="text">
                    white_shadow_photography_672
                </span>

            </div>
            <div class="email">
                <span class="icon">
                    <img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" alt="">
                </span>
                <span class="text">
                    whiteshadow3980@gmail.com
                </span>

            </div>
        </div>
        <div class="form">
            <form action="{{url('/review')}}" method="post">
                @csrf
                <div class="name-phone">
                    <input type="text" name="name" id="" placeholder="Full Name">
                <input type="tel" name="phone" id="" placeholder="Phone">
                </div>
                <input type="email" name="email" id="" placeholder="example@gmail.com">
                <textarea name="review" id="" cols="" rows="5" placeholder="Enter message here"></textarea>
                <button class="button-57" role="button"><span class="text">Submit</span><span>Send Review</span></button>
            </form>
        </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1614.9881060095317!2d36.88641964878618!3d-1.2192011684411164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fc955678a67%3A0x2c30e07746ac972a!2sTRM%20-%20Thika%20Road%20Mall!5e0!3m2!1sen!2ske!4v1691504400521!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <footer>
        &copy; 2023 by white shadow | All rights reserved.
    </footer>

</body>

</html>
