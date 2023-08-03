const navbar = document.querySelector("nav")
navbar.innerHTML = `
<div class="logo">
            <span class="logo-img">
                <img src="https://cdn-icons-png.flaticon.com/128/2983/2983067.png" alt="">
            </span>
            <span class="logo-name">
                White Shadow
            </span>
        </div>
        <div class="links">
            <span><a href="{{url('/about')}}">ABOUT</a></span>
            <span><a href="{{url('/')}}">HOME</a></span>
            <span><a href="{{url('/gallery')}}">GALLERY</a></span>
            <span><a href="{{url('/contact')}}">CONTACT</a></span>
        </div>
        <div class="socials">
            <div class="instagram">
                <img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" alt="">
            </div>
            <div class="whatsapp">
                <img src="https://cdn-icons-png.flaticon.com/128/3670/3670051.png" alt="">
            </div>
        </div>
`
