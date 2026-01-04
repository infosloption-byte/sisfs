<footer id="footer" class="mt-0">
    <div class="container">
        <div class="row py-2 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">NEWSLETTER</h5>
                <p class="pr-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
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
                <h5 class="text-3 mb-3">Quick Links</h5>
                <ul class="list list-icons list-icons-lg">
                    <li class="mb-1">
                        <i class="fa fa-arrow-right text-color-primary"></i>
                        <a href="{{url('aboutus')}}">About Us</a>
                    </li>
                    <li class="mb-1">
                        <i class="fa fa-arrow-right text-color-primary"></i>
                        <p class="m-1">
                            <a href="{{url('services')}}">Services</a>
                        </p>
                    </li>
                    <li class="mb-1">
                        <i class="fa fa-arrow-right text-color-primary"></i>
                        <p class="m-1">
                            <a href="{{url('faq')}}">FAQs</a>
                        </p>
                    </li>
                    <li class="mb-1">
                        <i class="fa fa-arrow-right text-color-primary"></i>
                        <p class="m-1">
                            <a href="{{url('contactus')}}">Contacts</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">CONTACT US</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1">
                            <i class="far fa-dot-circle text-color-primary"></i>
                            <p class="m-0">3/595 , North East Road,</p>
                            <p class="m-0">Gilles Plains, South Australia</p>
                        </li>
                        <li class="mb-1">
                            <i class="fas fa-phone-alt text-color-primary"></i>
                            <p class="m-0">
                                <a href="tel:0883677035">(08) 8367 7035</a>
                            </p>
                        </li>
                        <li class="mb-1">
                            <i class="far fa-envelope text-color-primary"></i>
                            <p class="m-0">
                                <a href="mailto:inquiry@sisfs.com.au">inquiry@sisfs.com.au</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3">FOLLOW US</h5>
                <ul class="social-icons">
                    <li class="social-icons-facebook">
                        <a style="background-color: #3B5998!important;color: #fff!important" href="https://www.facebook.com/synergyintegratedservices" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-linkedin">
                        <a style="background-color: #0E76A8!important;color: #fff!important" href="https://www.linkedin.com/company/synergyintegratedservices/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background: #fff">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <p>© Copyright 2020 @ Synergy Integrated Service . All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>