<!-- Toast: Added to Cart-->
<div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white">
            <i class="czi-check-circle mr-2"></i>
            <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
    </div>
</div>
<!-- Footer-->
<section class="border-top pt-5" id="footer">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media">
                    <i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base   mb-1">Fast and free delivery</h6>
                        <p class="mb-0 font-size-ms  opacity-50">Free delivery for all orders over $200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media">
                    <i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base  mb-1">Money back guarantee</h6>
                        <p class="mb-0 font-size-ms   opacity-50">We return money within 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media">
                    <i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base  mb-1">24/7 customer support</h6>
                        <p class="mb-0 font-size-ms   opacity-50">Friendly 24/7 customer support</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="media">
                    <i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                    <div class="media-body pl-3">
                        <h6 class="font-size-base   mb-1">Secure online payment</h6>
                        <p class="mb-0 font-size-ms   opacity-50">We possess SSL / Secure сertificate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="bg-dark pt-5">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">{{getConfiguration('site_title')}}</h3>
                    <p class="text-white">
                        {!! getConfiguration('site_description') !!}
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Information</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="{{route('about')}}">About company</a></li>
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="{{route('refund')}}">Return & Refund Policy</a></li>
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li class="widget-list-item mr-4"><a class="widget-list-link" href="{{route('faq-page')}}">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Account </h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="{{route('user-orders')}}">Your Orders</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Customer Support</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="media pb-1   text-white">
                            <i class="czi-location font-size-lg mt-2 mb-0 text-primary"></i>
                            <div class="media-body pl-3"> <a class="d-block   font-size-sm  text-white" href="#">{{getConfiguration('address')}}</a></div>
                        </li>
                        <li class="media pt-1 pb-1  ">
                            <i class="czi-phone font-size-lg  mb-0 text-primary"></i>
                            <div class="media-body pl-3"> <a class="d-block  font-size-sm text-white" href="tel:+977-9858745478">{{getConfiguration('contact_no')}} </a></div>
                        </li>
                        <li class="media pt-1">
                            <i class="czi-mail font-size-lg   mb-0 text-primary"></i>
                            <div class="media-body pl-3"> <a class="d-block  font-size-sm text-white" href="mailto:support@smarthome.com">{{getConfiguration('email')}}</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 bg-darker">
        <div class="container">
            <div class="row pb-2">
                <div class="col-md-6 text-center text-md-left mb-4">
                    <img class="d-inline-block" width="187" src="img/cards-alt.png" alt="Payment methods">
                    <div class="mt-3 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://cyberlink.com.np" target="_blank" rel="noopener">Cyberlink </a></div>
                </div>
                <div class="col-md-6 text-center text-md-right ">
                    <div class="mb-3">
                        <a class="social-btn btn-pill btn-icon sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a>
                        <a class="social-btn btn-pill btn-icon sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a>
                        <a class="social-btn btn-pill btn-icon sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a> <a class="social-btn btn-pill btn-icon sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('js/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('js/vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('js/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('js/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('js/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
<script src="{{asset('js/vendor/drift-zoom/dist/Drift.min.js')}}"></script>
<script src="{{asset('js/vendor/lightgallery.js/dist/js/lightgallery.min.js')}}"></script>
<script src="{{asset('js/vendor/lg-video.js/dist/lg-video.min.js')}}"></script>
<script src="{{asset('js/vendor/card/dist/card.js')}}"></script>
<script src="{{asset('js/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<!-- Main theme script-->
<script src="{{asset('js/theme.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>
