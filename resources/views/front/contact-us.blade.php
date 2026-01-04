<!DOCTYPE html>
<html lang="en">
    <head>
    	<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170444504-1"></script>
        <script>
            (function(w,d,s,l,i){
                w[l]=w[l]||[];
                w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
                var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MBPTDFR');
        </script>
        <!-- End Google Tag Manager -->
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-170444504-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>Facility Cleaning Services in South Australia - Contact SISFS</title>
        <meta name="title" content="Facility Cleaning Services in South Australia - Contact SISFS">
        <meta name="robots" content="index, follow">

        <meta name="keywords" content="Cleaning Services,Professional Cleaning Services,Home Cleaning Services,House cleaning services,cleaning services near me" />

        <meta name="description" content="Contact Synergy Integrated Service for your any integrated cleaning services. Call us 0883677035. We located in 3/595 , North East Road, Gilles Plains, South Australia">
        <meta name="author" content="Synergy Integrated Service">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.png')}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{asset('assets/front/img/apple-touch-icon.png')}}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="{{asset('assets/front/css/google-fonts.css')}}" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/vendor/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/vendor/animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
        

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('assets/front/css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/theme-elements.css')}}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{asset('assets/front/vendor/rs-plugin/css/navigation.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/vendor/circle-flip-slideshow/css/component.css')}}">
        
        <link rel="stylesheet" href="{{asset('assets/front/css/skins/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">

        <style type="text/css">
            .map-responsive{
                overflow:hidden;
                padding-bottom:56.25%;
                position:relative;
                height:0;
            }
            .map-responsive iframe{
                left:0;
                top:0;
                height:100%;
                width:100%;
                position:absolute;
            }
            .text-deco-none{
                text-decoration: none;
            }
            .service-img{
                width: 100%;
                height: 150px;
            }
            .social-fb{
                background-color: #3B5998!important;color: #fff!important;
            }
            .social-lnkd{
                background-color: #0E76A8!important;color: #fff!important;
            }
            .footer-copyright{
                background: #fff;
            }
            .footer-text-1{
                color: #fff!important;
                font-size: 13px!important;
            }
            .footer-text-1{
                color: #fff!important;
                font-size: 15px!important;
            }
        </style>
        @yield('css')
    </head>
    <body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
        <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <div class="body">
            @include('includes.front.header')
            <div role="main" class="main" ng-app="ngApp" ng-controller="InquiryController">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-lg-6">
                            <div class="overflow-hidden mb-1">
                                <h1 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Contact</strong> Us</h1>
                            </div>
                            <div class="overflow-hidden mb-4 pb-3">
                                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
                            </div>

                            <form role="form" id="form-inquiry" method="POST">
                                {{csrf_field()}}
                                <div class="contact-form-success alert alert-success d-none mt-4" id="success_msg">
                                    <strong>Success!</strong> Your message has been sent to us. We'll contact you ASAP<br>
                                    <div id="countdown"></div>
                                </div>
                            
                                <div class="contact-form-error alert alert-danger d-none mt-4" id="error_msg">
                                    <strong>Error!</strong> There was an error sending your request. Try Again
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">First Name</label>
                                        <input type="text" value="" placeholder="First Name" class="form-control" name="first_name" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">Last Name</label>
                                        <input type="text" value="" placeholder="Last Name" class="form-control" name="last_name" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">Email</label>
                                        <input type="email" value="" placeholder="Email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="required font-weight-bold text-dark text-2">Contact No</label>
                                        <input type="text" value="" placeholder="Phone No" class="form-control" name="contact_no" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Subject</label>
                                        <input type="text" value="" placeholder="Subject" class="form-control" name="subject" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="required font-weight-bold text-dark text-2">Message</label>
                                        <textarea maxlength="5000" class="form-control" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-modern btn-inquiry" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-6">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                                <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li>
                                        <i class="fas fa-map-marker-alt top-6"></i>
                                        <strong class="text-dark"></strong> 294B Payneham Road, Payneham SA 5070, South Australia
                                    </li>
                                    <li>
                                        <i class="fas fa-phone top-6"></i>
                                        <strong class="text-dark"></strong> (08) 8362 2220
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope top-6"></i>
                                        <strong class="text-dark"></strong>
                                        <a href="mailto:inquiry@sisfs.com.au">inquiry@sisfs.com.au</a>
                                    </li>
                                    <h4 class="mt-2 mb-1">Rapid <strong>Response</strong></h4>
                                    <li>
                                        <i class="fas fa-phone top-6"></i>
                                        <strong class="text-dark"></strong> 0411 964 661 (Dino)
                                    </li>
                                    <li>
                                        <i class="fas fa-phone top-6"></i>
                                        <strong class="text-dark"></strong> 0426 793 233 (Gayan)
                                    </li>
                                </ul>
                            </div>

                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                                <h4 class="pt-5">Business <strong>Hours</strong></h4>
                                <ul class="list list-icons list-dark mt-2">
                                    <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 4.30pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row py-4">
                        <div id="googlemaps" class="google-map mt-0 map-responsive" style="height: 500px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.2771204954677!2d138.63765956051182!3d-34.89912689148659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c97e4bbe06f9%3A0x1f4f37f3e4f36193!2s294%20Payneham%20Rd%2C%20Payneham%20SA%205070%2C%20Australia!5e1!3m2!1sen!2slk!4v1616669454601!5m2!1sen!2slk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer" class="mt-0">
                <div class="container">
                    <div class="row py-2 my-4">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <h5 class="text-3 mb-3 footer-text-2">NEWSLETTER</h5>
                            <p class="pr-1 footer-text-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
                            <div class="alert alert-success d-none" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                            <div class="alert alert-danger d-none" id="newsletterError"></div>
                            <form id="newsletterForm" action="#" method="POST" class="mr-4 mb-3 mb-md-0">
                                <div class="input-group input-group-rounded">
                                    <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                    <span class="input-group-append">
                                        <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <h5 class="text-3 mb-3 footer-text-2">Quick Links</h5>
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1">
                                    <i class="fa fa-arrow-right text-color-primary"></i>
                                    <a class="footer-text-1" href="{{url('aboutus')}}">About Us</a>
                                </li>
                                <li class="mb-1">
                                    <i class="fa fa-arrow-right text-color-primary"></i>
                                    <p class="m-1 footer-text-1">
                                        <a class="footer-text-1" href="{{url('services')}}">Services</a>
                                    </p>
                                </li>
                                <li class="mb-1">
                                    <i class="fa fa-arrow-right text-color-primary"></i>
                                    <p class="m-1 footer-text-1">
                                        <a class="footer-text-1" href="{{url('faq')}}">FAQs</a>
                                    </p>
                                </li>
                                <li class="mb-1">
                                    <i class="fa fa-arrow-right text-color-primary"></i>
                                    <p class="m-1 footer-text-1">
                                        <a class="footer-text-1" href="{{url('contactus')}}">Contacts</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <div class="contact-details">
                                <h5 class="text-3 mb-3 footer-text-2">CONTACT US</h5>
                                <ul class="list list-icons list-icons-lg">
                                    <li class="mb-1">
                                        <i class="far fa-dot-circle text-color-primary"></i>
                                        <p class="m-0 footer-text-1">294B Payneham Road</p>
                                        <p class="m-0 footer-text-1">Payneham SA 5070, South Australia</p>
                                    </li>
                                    <li class="mb-1">
                                        <i class="fas fa-phone-alt text-color-primary"></i>
                                        <p class="m-0 footer-text-1">
                                            <a class="footer-text-1" href="tel:0883622220">(08) 8362 2220</a>
                                        </p>
                                    </li>
                                    <li class="mb-1">
                                        <i class="far fa-envelope text-color-primary"></i>
                                        <p class="m-0 footer-text-1">
                                            <a class="footer-text-1">inquiry@sisfs.com.au</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <h5 class="text-3 mb-3 footer-text-2">FOLLOW US</h5>
                            <ul class="social-icons">
                                <li class="social-icons-facebook">
                                    <a class="social-fb" href="https://www.facebook.com/synergyintegratedservices" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f footer-text-1"></i>
                                    </a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a class="social-lnkd" href="https://www.linkedin.com/company/synergyintegratedservices/" target="_blank" title="Linkedin">
                                        <i class="fab fa-linkedin-in footer-text-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container py-2">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-center justify-content-center justify-content-lg-start">
                                <p class="footer-text-1">© Copyright 2020 @ Synergy Integrated Service . All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{asset('assets/front/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/front/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
        <script src="{{asset('assets/front/js/theme.js')}}"></script>
        <script src="{{asset('assets/front/js/theme.init.js')}}"></script>

        <script src="{{asset('assets/dist/angular/angular/angular.min.js')}}"></script>

        <script type="text/javascript">
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>

        <script type="text/javascript">

            $(document).ready(function()
            {

            });

            var app = angular.module("ngApp",[]);

            app.controller("InquiryController", function($scope,$http)
            {
                $("form#form-inquiry").submit(function(e)
                {
                    $(".btn-inquiry").prop("disabled",true);

                    e.preventDefault();    
                    var formData = new FormData(this);
                    $('.dialog-loader').show();

                    $.ajax({
                        url: "{{url('inquiry-create')}}",
                        type: 'POST',
                        data: formData,
                        success: function (data)
                        {
                            if(data.status_code==200)
                            {
                                $("#success_msg").addClass('d-block');

                                var timeleft = 5;
                                var downloadTimer = setInterval(function()
                                {
                                    if(timeleft <= 0){
                                        clearInterval(downloadTimer);
                                        document.getElementById("countdown").innerHTML = "redirecting...";
                                        location.reload();
                                    } else {
                                        document.getElementById("countdown").innerHTML = timeleft + " page redirect in";
                                    }
                                    timeleft -= 1;
                                }, 1000);

                            }else{
                                $("#error_msg").addClass('d-block');
                            }
                        },
                        error:function(data) {
                            $('.dialog-loader').hide();
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                    
                    return false;
                });
            });
        </script>
        
    </body>
</html>