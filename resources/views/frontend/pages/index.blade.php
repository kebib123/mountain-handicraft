@extends('frontend.include.master')
@section('content')
   <!-- hero Banner -->
<section
   class="uk-home-banner uk-position-relative uk-visible-toggle" 
   tabindex="-1"
   uk-slideshow="animation: fade; min-height: 300; max-height: 600;">
   <ul class="uk-slideshow-items">
      <li>
         <div class="uk-hero-banner">
            <img src="{{ asset('images/banner/1.jpg') }}" class="uk-cover" alt="home banner">
            <div class="uk-position-bottom uk-caption-home uk-transition-slide-bottom">
               <div class="uk-container">
                  <div class="uk-padding-large uk-padding-remove-left">
                     <ul class="uk-grid-small" uk-grid="uk-grid">
                        <li class="uk-width-1-2@m">
                           <h1 class="uk-heading-small">
                              <span>Cloud-Soft Pure Cashmere</span>
                           </h1>
                           <p class="uk-visible@m f-18">Slow Fashion to Help our Environment</p>
                           <a href="" class="uk-button  uk-btn-primary ">Shop Now</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </li>
      <li>
         <div class="uk-hero-banner">
            <img src="{{ asset('images/banner/2.jpg') }}" class="uk-cover" alt="home banner">
         </div>
         <div class="uk-position-bottom uk-caption-home uk-transition-slide-bottom">
            <div class="uk-container">
               <div class="uk-padding-large uk-padding-remove-left">
                  <ul class="uk-grid-small" uk-grid="uk-grid">
                     <li class="uk-width-1-2@m">
                        <h1 class="uk-heading-small">
                           <span>The Summer Collection</span>
                        </h1>
                        <p class="uk-visible@m f-18">Luxurious Cashmere Softness</p>
                        <a href="" class="uk-button  uk-btn-primary ">Shop Now</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </li>
   </ul>
   <a
      class="uk-position-center-left uk-slider-btn uk-position-small uk-hidden-hover"
      href="#"
      uk-slidenav-previous="uk-slidenav-previous"
      uk-slideshow-item="previous"></a>
   <a
      class="uk-position-center-right uk-slider-btn uk-position-small uk-hidden-hover"
      href="#"
      uk-slidenav-next="uk-slidenav-next"
      uk-slideshow-item="next"></a>
</section>
<!-- end hero banner -->
<!-- categories -->
<section class="uk-section uk-position-relative bg-grey">
   <div class="uk-margin uk-container">
      <div
         class="uk-margin uk-container-item-padding-remove-right uk-position-relative uk-visible-toggle"
         tabindex="-1"
         uk-slider="autoplay:true; sets: true;">
         <ul
            class="uk-slider-items uk-grid   uk-child-width-1-5@l uk-child-width-1-2 uk-grid-match uk-text-center" >
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/1.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Prayer Beads</h4>
               </a>
            </li>
            <!-- -->
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/2.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Cashmere Product</h4>
               </a>
            </li>
            <!-- -->
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/3.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Yak Wool Product</h4>
               </a>
            </li>
            <!-- -->
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/4.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Bracelets</h4>
               </a>
            </li>
            <!-- -->
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/5.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Singing Bowl</h4>
               </a>
            </li>
            <!-- -->
            <!-- -->
            <li>
               <a
                  href="shop-list.php"
                  class="uk-transition-toggle uk-display-block uk-link-toggle">
                  <div class="uk-categories-img">
                     <img
                        src="assets/images/categories/6.jpg"
                        class="uk-transition-scale-up uk-transition-opaque"
                        alt="">
                  </div>
                  <h4 class="uk-margin-top uk-margin-remove-bottom">Cashmere Shawl</h4>
               </a>
            </li>
            <!-- -->
         </ul>
      </div>
   </div>
</section>
<!-- end categories -->
<!-- product list -->
<section class="uk-section bg-white">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Featured Products</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
             {{-- @include('frontend.pages.product-list')    --}}
      
   </div>
</section>
<!-- end product list -->
<!-- action banner -->
<section class="uk-section bg-grey">
   <div class="uk-container">
      <ul class="uk-grid uk-child-width-1-4@m  uk-child-width-1-2 uk-text-center" uk-grid>
         <li>
            <img src="assets/images/action/1.png" alt="" width="71" height="51">
            <div class="uk-margin-top">sizes from  <br>XS to XXXL </div>
         </li>
         <li>
            <img   src="assets/images/action/2.png" alt=" " width="53" height="42">
            <div class="uk-margin-top">Next day  <br>delivery available</div>
         </li>
         <li>
            <img src="assets/images/action/3.png" alt="" width="45" height="45">
            <div class="uk-margin-top">Customer<br> service available</div>
         </li>
         <li>
            <img src="assets/images/action/4.png" alt="" width="45" height="45">
            <div class="uk-margin-top">Customer<br> service available</div>
         </li>
      </ul>
   </div>
</section>
<!-- end action banner --> 
<!-- Best Selling Items -->
<section class="uk-section bg-white">
   <div class="uk-container"> 
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Best Selling Items</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
       {{-- @include('frontend.pages.product-list')    --}}
   </div>
</section>
<!-- end Best Selling Items-->

<!-- blog -->
<section class="uk-section bg-grey">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Latest from Blog</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
      <ul class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid" 
         uk-grid="uk-grid">
         <!--  -->
         <li>
            <a class="uk-transition-toggle uk-display-block uk-link-toggle" href="blog-single.php">
               <div class="uk-blog-img">
                  <img  src="assets/images/blog/1.jpg"  alt="" class="uk-transition-scale-up uk-transition-opaque">
               </div>
               <div class="uk-padding-small">
                  <div class="uk-meta uk-h6 text-secondary uk-margin-top uk-margin-remove-bottom">April 26, 2021</div>
                  <h5 class="uk-margin-small-top uk-margin-remove-bottom">
                     How to sign up for Mountain Handicraft
                  </h5>
               </div>
            </a>
         </li>
         <!--  --> 
         <!--  -->
         <li>
          <a class="uk-transition-toggle uk-display-block uk-link-toggle" href="blog-single.php">
               <div class="uk-blog-img">
                  <img  src="assets/images/blog/2.jpg"  alt="" class="uk-transition-scale-up uk-transition-opaque">
               </div>
               <div class="uk-padding-small">
                  <div class="uk-meta uk-h6 text-secondary uk-margin-top uk-margin-remove-bottom">April 26, 2021</div>
                  <h5 class="uk-margin-small-top uk-margin-remove-bottom">
                     How Mountain Handicraft employees celebrated Pride around the world 
                  </h5>
               </div>
            </a>
         </li>
         <!--  --> 
         <!--  -->
         <li>
          <a class="uk-transition-toggle uk-display-block uk-link-toggle" href="blog-single.php">
               <div class="uk-blog-img">
                  <img  src="assets/images/blog/3.jpg"  alt="" class="uk-transition-scale-up uk-transition-opaque">
               </div>
               <div class="uk-padding-small">
                  <div class="uk-meta uk-h6 text-secondary uk-margin-top uk-margin-remove-bottom">April 26, 2021</div>
                  <h5 class="uk-margin-small-top uk-margin-remove-bottom">
                     Get Same-Day Delivery from your favorite retail stores
                  </h5>
               </div>
            </a>
         </li>
         <!--  --> 
      </ul>
   </div>
</section>
<!-- end blog -->
@stop
