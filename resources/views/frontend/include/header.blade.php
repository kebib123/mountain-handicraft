<!DOCTYPE html>
<html lang="en-US">
   <head>
      <title>Mountain Handicraft</title>
      <meta charset="utf-8">
      <meta property="og:title" content="Join the best company in the world!" />
      <meta property="og:url" content="https://cyberlinknepal.com/design/mountainhandicraft" />
      <meta property="og:image" content="{{ asset('images/products/p1.jpg') }}" />
      <meta property="og:description" content="woolen jackets are made by 100% New Zealand wool with super cool pixie normal hood ." />
      <meta property="og:site_name" content="Ocean Blue Cashmere Color shawl (MHCS10)" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <meta name="google-translate-customization" content="e6d13f48b4352bb5-f08d3373b31c17a6-g7407ad622769509b-12">
      </meta>
   </head>
   <body>
      <header>
         <!-- top header -->
         <div class="uk-top-header bg-primary">
            <div class="uk-container">
               <nav  uk-navbar>
                  <div class="uk-navbar-left text-white">
                     <div class="uk-flex uk-flex-middle" uk-grid>
                        <div class="currency ">
                           <select>
                              <option value="select">Currency</option>
                              <option>CAD</option>
                              <option>Pound</option>
                              <option>Euro</option>
                              <option>USD</option>
                              <option>Swiss</option>
                              <option>AUD</option>
                           </select>
                        </div>
                        <div class="uk-visible@m">
                           <div id="google_translate_element" class="uk-light"></div>
                           <script type="text/javascript">
                              function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'en',}, 'google_translate_element');
                              }
                           </script>
                           <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        </div>
                     </div>
                  </div>
                  <div class="uk-navbar-right">
                     <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light">
                        <li>
                           <a href=""><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-tiktok"></i></a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- end top header -->
         <!-- small nav -->
         <div class="mh-header-mobile bg-white uk-hidden@m"  uk-sticky="uk-sticky" 
            media="@m"
            animation="uk-animation-slide-top">
            <div class="uk-navbar-container">
               <nav uk-navbar class="bg-white">
                  <div class="uk-navbar-left">
                     <ul class="uk-navbar-nav">
                        <li>
                           <a class="uk-navbar-toggle" uk-toggle="target: #mh-mobile" uk-icon="icon:menu;"></a>
                        </li>
                     </ul>
                     <a href="index.php" class="uk-navbar-item uk-logo">
                     <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="110">
                     </a>
                  </div>
                  <div class="uk-navbar-right uk-margin-small-right">
                     <ul class="uk-navbar-nav">
                        <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                        </li>
                        <li>
                           <a uk-tooltip="Login" href="{{route('login')}}" uk-icon="icon:user;"></a>
                        </li>
                        <li>
                           <a
                              class="uk-position-relative"
                              href="#"
                              uk-tooltip="Cart"
                              uk-toggle="target: #cart"
                              uk-icon="icon:cart;">
                              <div class="uk-cart-count">5</div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <!-- menu modal -->
            <div id="mh-mobile" class="uk-modal-full bg-white" uk-modal="uk-modal">
               <div
                  class="uk-modal-dialog uk-flex uk-flex-center  uk-mobile-menu"
                  uk-height-viewport="uk-height-viewport">
                  <div class="uk-width-1-1">
                       <!-- top header -->
                     <div class="uk-top-header bg-primary">
                        <div class="uk-container">
                           <nav  uk-navbar>
                              <div class="uk-navbar-left text-white">
                                 <div class="uk-flex uk-flex-middle" uk-grid>
                                    <div class="currency ">
                                       <select>
                                          <option value="select">Currency</option>
                                          <option>CAD</option>
                                          <option>Pound</option>
                                          <option>Euro</option>
                                          <option>USD</option>
                                          <option>Swiss</option>
                                          <option>AUD</option>
                                       </select>
                                    </div>
                                    <div class="uk-visible@m">
                                       <div id="google_translate_element" class="uk-light"></div>
                                       <script type="text/javascript">
                                          function googleTranslateElementInit() {
                                          new google.translate.TranslateElement({pageLanguage: 'en',}, 'google_translate_element');
                                          }
                                       </script>
                                       <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    </div>
                                 </div>
                              </div>
                              <div class="uk-navbar-right">
                                 <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light">
                                    <li>
                                       <a href=""><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-viber"></i></a>
                                    </li>
                                    <li>
                                       <a href=""><i class="fab fa-tiktok"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </nav>
                        </div>
                     </div>
                     <!-- end top header -->
                     <nav class="uk-navbar bg-white" uk-navbar="uk-navbar">
                        <div class="uk-navbar-left">
                           <ul class="uk-navbar-nav">
                              <li>
                                 <a class="uk-navbar-toggle uk-modal-close text-black" uk-icon="icon:close;"></a>
                              </li>
                           </ul>
                           <a class="uk-navbar-item uk-logo " href="index.php">
                           <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="110">
                           </a>
                        </div>
                        <div class="uk-navbar-right  uk-margin-small-right">
                           <ul class="uk-navbar-nav">
                           <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                        </li>
                           <li>
                              <a uk-tooltip="Login" href="{{route('login')}}" uk-icon="icon:user;"></a>
                           </li>
                           <li>
                              <a
                                 class="uk-position-relative"
                                 href="#"
                                 uk-tooltip="Cart"
                                 uk-toggle="target: #cart"
                                 uk-icon="icon:cart;">
                                 <div class="uk-cart-count">5</div>
                              </a>
                           </li>
                        </div>
                     </nav>
                     <nav class="uk-margin-large-top uk-margin-large-bottom">
                        <ul
                           class="uk-navsidebar   uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical"
                           uk-nav="multiple: false">
                           <li>
                              <a href="{{route('index')}}">Home</a>
                           </li>
                           <!-- -->
                           <li class="uk-parent">
                              <a href="#" class="uk-active">Product
                              </a>
                              <ul class="uknavsub  " uk-nav="multiple: false">
                                 <li>
                                    <a href="shop-list.php">Cashmere Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Cashmere Shawl</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Yak Wool Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Prayer Beads</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Singing bowl</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Cotton Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Jewellery</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Hemp Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Cotton Bag</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Felt Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Ritual Product</a>
                                 </li>
                                 <li>
                                    <a href="shop-list.php">Woolen Products</a>
                                 </li>
                              </ul>
                           </li>
                           <!-- -->
                           <li>
                              <a href="blog.php">Blog</a>
                           </li>
                           <li>
                              <a href="about.php">About Us</a>
                           </li>
                           <li>
                              <a href="contact.php">Contact Us</a>
                           </li>
                           <li>
                              <a href="login.php">Login</a>
                           </li>
                        </ul>
                     </nav>
                     <ul uk-grid="uk-grid" class="uk-grid-small uk-social-media uk-light uk-flex-center">
                        <li>
                           <a href=""><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                           <a href=""><i class="fab fa-tiktok"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- end -->
         </div>
         <!-- end small nav -->
         <!-- main nav -->
         <div class="mh-header uk-visible@m" uk-header="uk-header">
            <div class="bg-white "
               uk-sticky="uk-sticky" 
               media="@m"
               animation="uk-animation-slide-top"
               cls-active="uk-navbar-sticky uk-box-shadow-small bg-white">
               <div class="uk-container">
                  <nav class="uk-navbar" uk-navbar="uk-navbar">
                     <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                           <li>
                              <a href="#">Product
                              <span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                              <div class="uk-navbar-dropdown uk-margin-remove">
                                 <ul class="uk-nav uk-navbar-dropdown-nav uk-margin-remove">
                                    <!-- -->
                                    @foreach ($cat as $value)
                                    <li>

                                       <a href="{{route('product-list', $value->slug)}}">{{$value->name}}
                                       <span
                                          class="uk-margin-remove uk-align-right "
                                          uk-icon="icon: chevron-right; ratio: 1;"></span></a>
                                             @if($value->subCategory->isNotEmpty())
                                          <div
                                          uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;"
                                          class="uk-dropdown bg-grey">
                                          <ul class="uk-nav uk-dropdown-nav uk-margin-remove">
                                             @foreach($value->subCategory as $child)
                                                <li>
                                                <a href="{{route('product-list',$child->slug)}}">{{$child->name}}</a>
                                             </li>
                                             @endforeach
                                            
                                       
                                          </ul>
                                       </div>
                                        @endif
                                    </li>
                                        @endforeach

                                    <!-- -->
                                 
                                 </ul>
                              </div>
                           </li>
                           <li>
                              <a href="blog.php">Blog</a>
                           </li>
                           <li>
                              <a href="{{route('about')}}">About Us</a>
                           </li>
                        </ul>
                     </div>
                     <div class="uk-navbar-center">
                        <a href="{{route('index')}}" class="uk-navbar-item uk-logo">
                        <img alt="Mountain Handi Craft" src="{{asset('images/logo.png')}}" width="240">
                        </a>
                     </div>
                     <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-position-relative">
                          
                           <li>
                              <a href="contact.php">Contact Us</a>
                           </li>
                           <li>
                              <a href="#search" uk-toggle="#search" uk-tooltip="Search">
                              <i uk-icon="icon:search;"></i>
                              </a>
                         </li>
                           <li>
                              <a href="{{route('login')}}" uk-tooltip="Login">
                              <i uk-icon="icon:user;"></i>
                              </a>
                           </li>
                           <li>
                              <a
                                 class="uk-position-relative"
                                 href="#"
                                 uk-tooltip="Cart"
                                 uk-toggle="target: #cart"
                                 uk-icon="icon:cart;">
                                 <div class="uk-cart-count">5</div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
         <!-- end main nav -->
         @include('frontend.include.cart-offcanvas')
      </header>