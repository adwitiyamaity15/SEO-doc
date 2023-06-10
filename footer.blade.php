<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p class="text-center"><img src="res/logo-w.png" class="img-fluid" alt="" style="height:120px"></p>
                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEO Media Infotech is a digital marketing company that helps companies connect with customers online. We provide strategic, creative and customised solutions to help your business succeed online.</p><br>
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> 45, New Santoshpur , Jadavpur, Kolkata-75.</p>
                <p><a href="mailto:help@seomediainfotech.in"><i class="fa-solid fa-envelopes-bulk"></i> help@seomediainfotech.in</a></p>
                <p><a href="tel:+916294637321" style="color: #cacaca;"><i class="fa-sharp fa-solid fa-phone"></i> +916294637321</a></p>
            </div>
            <div class="col-sm-2">
                <h5>Useful Links</h5>
                <p>
                    <a href="{{url('/')}}">Home</a><br><br>
                    <a href="{{url('/whychooseus')}}">Why Choose Us</a><br><br>
                    <a href="{{url('/services')}}">Services</a><br><br>
                    <a href="{{url('/blogs')}}">Our Blogs</a><br><br>
                    <a href="{{url('/contactus')}}">Contact Us</a>

                </p>
            </div>
            <div class="col-sm-3">
                <h5>Our Services</h5>
                <p>
                    &middot; Software Development<br><br>
                    &middot; Graphic Design<br><br>
                    &middot; SEO<br><br>
                    &middot; Pay-Per-Click Advertising<br><br>
                    &middot; Social Media Marketing<br><br>
                    &middot; Content Marketing<br><br>
                    &middot; Marketing And Branding<br><br>
                    &middot; Sales And Lead Generation

                </p>
            </div>
            <div class="col-sm-3">
                <h5>Our Social Networks</h5>
                <p>
                    <i class="fa-brands fa-square-facebook fa-2x fb-icon"></i>
                    <i class="fa-brands fa-instagram fa-2x in-icon"></i>
                    <i class="fa-brands fa-twitter fa-2x tw-icon"></i>
                </p>
                <h5 style="margin-top: 100px;">Stay Updated</h5>
                <p>Subscribe to get the latest news and updates.</p>
                <form action="{{ route('enquire') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control subscribeText" placeholder="Enter Your Mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn subscribeBtn" type="submit" id="button-addon2">Subscribe</button>
                    </div>
                </form>

            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-sm-5">&copy; Copyright Fast Digital Infotech. All Rights Reserved.</div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"><a href="{{url('/privacypolicy')}}">Privacy Policy</a> &middot; <a href="{{url('/termsandconditions')}}">Terms & Condition</a></div>
        </div>        
    </div>

</footer>


<!-- JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.16/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('msg'))

            <script>
                toastr.success("{{Session::get('msg')}}");
            </script>
        @endif

<script>
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 50) {
            nav.classList.add("bg-light", "shadow");
            // nav.classList.remove("menu-changed");
        } else {
            nav.classList.remove("bg-light", "shadow");
            // nav.classList.add("menu-changed");   
        }
    });

    const preloader = document.querySelector(".preloader");
    window.addEventListener("load", function() {
        preloader.classList.add("exit");
    });

    // $("#lastdate").datepicker({
    //     minDate: new Date()
    // })

    
</script>
</body>

</html>