<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Smart Home Appliances</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Smart Home Appliances">
    <meta name="keywords" content="Smart Home Appliances">
    <meta name="author" content="Smart Home Appliances">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png"  href="{{asset('img/favicon.png')}}">
    <meta name="theme-color" content="#e8816">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/drift-basic.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/lightgallery.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/nouislider.min.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>
<!-- Body-->
<body>
<!-- Sign in / sign up modal-->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
                </ul>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body tab-content py-4">
                <form class="needs-validation tab-pane fade show active"  method="post" action="{{route('login')}}" autocomplete="off" novalidate id="signin-tab">
                    @csrf
                    <div class="form-group">
                        <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With social account:</h3>
                        <div class="d-inline-block align-middle">
                            <a class="social-btn sb-google mr-2 mb-2" href="/redirect/google" data-toggle="tooltip" title="" data-original-title="Sign in with Google"><i class="czi-google"></i></a>
                            <a class="social-btn sb-facebook mr-2 mb-2" href="/redirect/facebook" data-toggle="tooltip" title="" data-original-title="Sign in with Facebook"><i class="czi-facebook"></i></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="si-email">Email address</label>
                        <input class="form-control" type="email" name="email" id="si-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="form-group">
                        <label for="si-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" name="password" id="si-password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between">
                        <div class="custom-control custom-checkbox mb-2">
                            <input class="custom-control-input" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} id="si-remember">
                            <label class="custom-control-label" for="si-remember">Remember me</label>
                        </div>
                        <!--<a class="font-size-sm" href="account-password-recovery.php">Forgot password?</a>-->
                    </div>

                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                </form>
                <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" method="post" action="{{route('user-registration')}}">
                    @csrf
                    <div class="form-group">
                        <label for="reg-fn">First Name</label>
                        <input class="form-control" type="text" name="first_name"  id="reg-fn">
                        <div class="invalid-feedback">Please enter your first name!</div>
                    </div>
                    <div class="form-group">
                        <label for="reg-ln">Last Name</label>
                        <input class="form-control" type="text" name="last_name"  id="reg-ln">
                        <div class="invalid-feedback">Please enter your last name!</div>
                    </div>
                    <div class="form-group">
                        <label for="su-email">Email address</label>
                        <input class="form-control" type="email" name="email" id="su-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                    <div class="form-group">
                        <label for="reg-phone">Phone Number</label>
                        <input class="form-control" type="text" name="phone_number" id="reg-phone">
                        <div class="invalid-feedback">Please enter your phone number!</div>
                    </div>
                    <div class="form-group">
                        <label for="su-password">Password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" name="password" id="su-password" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="su-password-confirm">Confirm password</label>
                        <div class="password-toggle">
                            <input class="form-control" type="password" name="password_confirmation" id="su-password-confirm" required>
                            <label class="password-toggle-btn">
                                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<header class="bg-light box-shadow-sm ">
    <!-- Topbar-->
    <div class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky ">
        <div class="container">
            <a class="navbar-brand   mr-4 order-lg-1" href="{{route('index')}}" style="min-width: 7rem;">
                <img width="142" src="{{asset('img/logo.png')}}" alt="Cyberlink"/></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->roles=='user')


                    <div class="navbar-tool dropdown ml-2 mr-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="{{route('user-orders')}}"><i class="czi-user"></i></a><a class="navbar-tool-text ml-n1" href="{{route('user-orders')}}">
                            <small>My Account</small>Hi {{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->first_name : ''}}</a>
                        {{----}}

                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                            <h6 class="dropdown-header">Dashboard</h6>



                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-orders')}}"><i class="czi-bag opacity-60 mr-2"></i>Orders </a>


                            <a class="dropdown-item d-flex align-items-center" href="{{route('wishlist')}}"><i class="czi-heart opacity-60 mr-2"></i>Wishlist</a>


                            {{--                      <a class="dropdown-item d-flex align-items-center" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets <span class="font-size-xs text-muted ml-auto">3</span></a>--}}


                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Account settings</h6>

                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-profile')}}"><i class="czi-user opacity-60 mr-2"></i>Profile info </a>


                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-address')}}"><i class="czi-location  opacity-60 mr-2"></i>Addresses </a>


                            {{--                      <a class="dropdown-item d-flex align-items-center" href="account-payment.php"><i class="czi-card opacity-60 mr-2"></i>Payment methods</a>--}}


                            <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
                        </div>
                    </div>

                @elseif(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->roles=='admin')

                    <a href="{{route('dashboard')}}"><h6 class="dropdown-header">Dashboard</h6></a>

                    <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
                @elseif(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->roles=='wholeseller')


                    <div class="navbar-tool dropdown ml-2 mr-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="{{route('user-orders')}}"><i class="czi-user"></i></a><a class="navbar-tool-text ml-n1" href="{{route('user-orders')}}">
                            <small>My Account</small>Hi {{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->first_name : ''}}</a>
                        {{----}}

                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                            <h6 class="dropdown-header">Dashboard</h6>



                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-orders')}}"><i class="czi-bag opacity-60 mr-2"></i>Orders </a>


                            <a class="dropdown-item d-flex align-items-center" href="{{route('wishlist')}}"><i class="czi-heart opacity-60 mr-2"></i>Wishlist</a>


                            {{--                      <a class="dropdown-item d-flex align-items-center" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets <span class="font-size-xs text-muted ml-auto">3</span></a>--}}


                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Account settings</h6>

                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-profile')}}"><i class="czi-user opacity-60 mr-2"></i>Profile info </a>


                            <a class="dropdown-item d-flex align-items-center" href="{{route('user-address')}}"><i class="czi-location  opacity-60 mr-2"></i>Addresses </a>


                            {{--                      <a class="dropdown-item d-flex align-items-center" href="account-payment.php"><i class="czi-card opacity-60 mr-2"></i>Payment methods</a>--}}


                            <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
                        </div>
                    </div>

                @else

                    <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                        <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
                @endif
                <div class="container mini-cart">
                    <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{route('cart-item')}}"><span class="navbar-tool-label">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="{{route('cart-item')}}"><small>My Cart</small>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</a>
                        <!-- Cart dropdown-->
                        <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                            <div class="widget widget-cart px-3 pt-2 pb-3">
                                <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $value)
                                        <div class="widget-cart-item pb-2 border-bottom">
                                            <a class="close text-danger" type="button" href="{{route('cart-remove',$value->rowId)}}" aria-label="Remove"><span aria-hidden="true">&times;</span></a>
                                            <div class="media align-items-center"><a class="d-block mr-2" href="{{route('product-details',$value->options->slug)}}"><img width="64" src="{{url('images/products/'.$value->options->image)}}" alt="Product"/></a>
                                                <div class="media-body">
                                                    <h6 class="widget-product-title"><a href="{{route('product-details',$value->options->slug)}}">{{$value->name}}</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent mr-2">{{$value->price}}.<small>00</small></span><span class="text-muted">x {{$value->qty}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                    <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="{{route('cart-item')}}">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                                </div><a class="btn btn-primary btn-sm btn-block" href="{{route('checkout-address')}}"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                <!-- Search-->
                <form method="post" action="{{route('search-results')}}">
                    @csrf
                <div class="input-group-overlay d-lg-none my-3">
                    <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    <input class="form-control prepended-form-control" type="text" placeholder="Search Products">
                </div>
                </form>
                <!-- Categories dropdown-->
                <ul class="navbar-nav mega-nav pl-lg-2 pr-lg-2 mr-lg-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid align-middle mt-n1 mr-2"></i>Categories</a>
                        <ul class="dropdown-menu">
                            @foreach($cat as $value)
                                @if($value->subCategory->isNotEmpty())
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('product-list',$value->slug)}}">{{$value->name}} </a>
                                @else
                                    <li class="dropdown"><a class="dropdown-item " href="{{route('product-list',$value->slug)}}">{{$value->name}} </a>
                                        @endif
                                        @if($value->subCategory->isNotEmpty())
                                            <ul class="dropdown-menu">
                                                @foreach($value->subCategory as $child)
                                                    <li><a class="dropdown-item" href="{{route('product-list',$child->slug)}}">{{$child->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach
                        </ul>
                    </li>
                </ul>
                <!-- Primary menu-->
                <!-- <ul class="navbar-nav">
                   <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                   <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
                   </ul> -->
                <!-- search start  -->
                <form method="post" action="{{route('search-results')}}">
                    @csrf
                <div class="input-group-overlay d-none d-lg-block mx-5">
                    <input class="form-control prepended-form-control" name="search" type="text" placeholder="Search Product">
                    <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    <!-- <div class="input-group-append-overlay">
                       <select class="custom-select">
                          <option>All categories</option>
                          <option>Computers</option>
                          <option>Smartphones</option>
                          <option>TV, Video, Audio</option>
                          <option>Cameras</option>
                          <option>Headphones</option>
                          <option>Wearables</option>
                          <option>Printers</option>
                          <option>Video Games</option>
                          <option>Home Music</option>
                          <option>Data Storage</option>
                       </select>
                    </div> -->
                </div>
                </form>
                <!-- search end  -->
            </div>
        </div>
    </div>
</header>
