<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SEO MEDIA INFOTECH</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    

    <!-- CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS CDN End -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tsukimi+Rounded&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>


<body>
    <!-- <div class="preloader">
        <div class="spinner-border" role="status">
            <span  class="visually-hidden">Loading...</span>
        </div>
    </div> -->
<a name="top"></a>
    <div class="button text-center"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
        <a href="tel:+916294637321">
        <!-- <i class="fa-solid fa-phone fa-2x" style="color: #ffffff;"></i> -->
            <img src="res/phone-call.png" alt="">
        </a>
    </div>
    <div class="up-button text-center"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
        <a href="#top">
        <!-- <i class="fa-solid fa-phone fa-2x" style="color: #ffffff;"></i> -->
            <img src="res/up.png" alt="">
        </a>
    </div>
    <div class="wp-button text-center"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
        <a href="https://wa.me/+918961432231">
        <!-- <i class="fa-solid fa-phone fa-2x" style="color: #ffffff;"></i> -->
            <img src="res/whatsapp.png" alt="">
        </a>
    </div>
    
    <!-- Enquire Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 5px solid rgb(31, 31, 85);">
                    <h5 class="modal-title text-center">QUERY FORM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="res/enquiry.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-6">
                                <form action="{{ route('contact') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Abram Hood" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Your Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="7777777777" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Your Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                                    </div>

                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                                    <center><button type="submit" class="enquire-btn">SEND</button></center>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- Enquire Modal End -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="res/logo2.png" class="img-fluid" alt="" style="height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{url('/whychooseus')}}">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{url('/services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{url('/blogs')}}">Our Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{url('/contactus')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="enquire-btn nav-link " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Enquire Now
                            </button>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>