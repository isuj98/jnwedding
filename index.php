<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Justine & Noreen Wedding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .bg-dark {
            background: #d19b80!important;
        }
        .btn-primary {
            background: #d19b80!important;
            border-color: #d19b80!important;
            color: #fff!important;
        }
        .btn-primary span{
            color: #fff!important;
        }
        .bg-gallery {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/bonfire.jpg), no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/c-img02.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4 wow animate__animated animate__rubberBand">Justine &nbsp;&&nbsp; Noreen</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4 wow animate__animated animate__bounceInUp animate__slow">
                                <h3 class="text-uppercase font-weight-normal text-white m-0 " style="letter-spacing: 2px;">We're getting married</h3>
                                <h3 class="text-uppercase font-weight-bolder text-white m-0 mt-1">07.05.2025</h3>
                                <a href="#rsvp"><button class="btn btn-primary mt-3 pl-5 pr-5 pt-2 pb-2 border-0 wow animate__animated animate__bounceInUp animate__slow">RSVP</button></a>
                            </div>
                            <button type="button" class="btn-play mx-auto wow animate__animated animate__backInUp animate__slow" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/c-img03.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4 wow animate__animated animate__rubberBand">Justine &nbsp;&&nbsp; Noreen</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4 wow animate__animated animate__bounceInUp animate__slow">
                                <h3 class="text-uppercase font-weight-normal text-white m-0 " style="letter-spacing: 2px;">We're getting married</h3>
                                <h3 class="text-uppercase font-weight-bolder text-white m-0 mt-1">07.05.2025</h3>
                                <a href="#rsvp"><button class="btn btn-primary mt-3 pl-5 pr-5 pt-2 pb-2 border-0 wow animate__animated animate__bounceInUp animate__slow">RSVP</button></a>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px; background: #d19b80; border-color: #d19b80;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px; background: #d19b80; border-color: #d19b80;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3 wow animate__animated animate__backInDown" style="letter-spacing: 3px;">Event</h6>
                <h1 class="font-secondary display-4 wow animate__animated animate__backInDown">Our Wedding Event</h1>
                <i class="far fa-heart text-dark wow animate__animated animate__heartBeat animate__slow"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="font-weight-normal text-muted mb-3 pb-3 wow animate__animated animate__heartBeat animate__slow">We joyfully invite you to join us as we celebrate our love and commitment. Your presence will make our special day even more memorable as we begin our journey together as husband and wife.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary wow animate__animated animate__fadeInLeft">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1929.6917936998486!2d121.58625233938162!3d13.966722356334017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd4cf4ccfa4e6b%3A0xe2048afdba1dd013!2sM.I.%20Sevilla&#39;s%20Resort!5e1!3m2!1sen!2sph!4v1749205217919!5m2!1sen!2sph" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4 class="mb-3">The Reception</h4>
                        <p class="mb-2">M.I SEVILLAS RESORT</p>
                        <p class="mb-2">Brgy. Domoit, Lucena City</p>
                    </div>
                </div>
                <div class="col-md-6 wow animate__animated animate__fadeInRight">
                    <div class="text-center text-md-left ml-md-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m8!1m3!1d4764.437550163373!2d121.5658028!3d13.9555789!3m2!1i1024!2i768!4f13.1!4m12!3e6!4m4!1s0x33bd4d902c6c263b%3A0xc921610b7bb64b9!3m2!1d13.955661599999999!2d121.568394!4m5!1s0x33bd4d902c6c263b%3A0xc921610b7bb64b9!2sChapel%20of%20St.%20Joseph%20(Spouse%20of%20Mary)%20Church%2C%20Isabang%2C%204301%2C%20Quezon!3m2!1d13.955661599999999!2d121.568394!5e1!3m2!1sen!2sph!4v1749205336746!5m2!1sen!2sph" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4 class="mb-3">Ceremony at</h4>
                        <p class="mb-2">St. Joseph Spouse of Mary Church</p>
                        <p class="mb-2">Avida, Brgy. Isabang, Tayabas City</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->

    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Our Photo Gallery</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-1.jpg" alt="">
                <a href="img/gallery-1.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-2.jpg" alt="">
                <a href="img/gallery-2.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-3.jpg" alt="">
                <a href="img/gallery-3.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-4.jpg" alt="">
                <a href="img/gallery-4.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-5.jpg" alt="">
                <a href="img/gallery-5.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-6.jpg" alt="">
                <a href="img/gallery-6.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Join Our Party</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form id="rsvpForm" method="POST" action="data.php">
                            <div class="form-row">
                                <input type="text" id="name" name="name" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Your Name"/>
                            </div>
                            <div class="form-row mt-3">
                                <input type="text" id="contact" name="contact" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Contact Number"/>
                            </div>
                            <div class="form-row mt-3">
                                <select id="role" name="role" class="form-control bg-secondary border-0" style="height: 52px;">
                                    <option>Guest</option>
                                    <option>Groomsmen or Bridesmaid</option>
                                    <option>Principal Sponsor</option>
                                </select>
                            </div>
                            <div class="form-row mt-3">
                                <textarea id="message" name="message" class="form-control bg-secondary border-0 py-4 px-3" placeholder="Message"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5 mt-3" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <p class="m-0">&copy; Developed by JustCode 2025</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        new WOW().init();
        // document.addEventListener('contextmenu', event => event.preventDefault());
        // document.onkeydown = function(e) {
        //     if(e.keyCode == 123) { // F12
        //         return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) { // Ctrl+Shift+I
        //         return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) { // Ctrl+Shift+C
        //         return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) { // Ctrl+Shift+J
        //         return false;
        //     }
        //     if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) { // Ctrl+U
        //         return false;
        //     }
        // };
    </script>
</body>
</html>