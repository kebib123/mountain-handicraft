@extends('frontend.include.master')
@section('content')
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="{{route('index')}}"><i class="czi-home"></i>Home</a></li>
{{--              <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.php">Shop</a>--}}
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Checkout</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
          <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="{{route('cart-item')}}">
                    <div class="step-progress"><span class="step-count">1</span></div>
                    <div class="step-label"><i class="czi-cart"></i>Cart</div></a><a class="step-item active current" href="{{route('checkout-address')}}">
                    <div class="step-progress"><span class="step-count">2</span></div>
                    <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><a class="step-item" href="{{'checkout-shipping'}}">
                    {{--              <div class="step-progress"><span class="step-count">3</span></div>--}}
                    {{--              <div class="step-label"><i class="czi-package"></i>Shipping</div></a><a class="step-item" href="{{route('checkout-payment')}}">--}}
                    <div class="step-progress"><span class="step-count">4</span></div>
                    <div class="step-label"><i class="czi-card"></i>Payment</div></a><a class="step-item" href="{{route('checkout-review')}}">
                    <div class="step-progress"><span class="step-count">5</span></div>
                    <div class="step-label"><i class="czi-check-circle"></i>Review</div></a></div>
          <!-- Order details-->
          <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Review your order</h2>
          <!-- Item-->
            @foreach($cartItem as $value)
                <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
                    <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{'/product-details'}}" style="width: 10rem;"><img src="{{url('images/products/'.$value->options->image)}}" alt="Product"></a>
                        <div class="media-body pt-2">
                            <h3 class="product-title font-size-base mb-2"><a href="{{'/product-details'}}">{{$value->name}}</a></h3>
                            @if($value->options->size=="")
                                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>Free Size</div>
                            @else
                                <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>{{$value->options->size}}</div>
                            @endif

                            <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>{{$value->options->color}}</div>
                            <div class="font-size-lg text-accent pt-2">{{$value->price}}.<small>00</small></div>
                        </div>
                    </div>
                    <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 9rem;">
                        <div class="form-group mb-0">
                            <label class="font-weight-medium" for="quantity1">Quantity</label>
                            <input class="form-control" name="quantity[]" min="1" type="text" disabled id="quantity1" value="{{$value->qty}}">
                        </div>
{{--                        <a href="{{route('cart-remove',$value->rowId)}}" class="btn btn-link px-0 text-danger" ><i class="czi-close-circle mr-2"></i><span class="font-size-sm">Remove</span></a>--}}
                    </div>
                </div>
        @endforeach

          <!-- Client details-->
          <div class="bg-secondary rounded-lg px-4 pt-4 pb-2">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="h6">Shipping to:</h4>
                <ul class="list-unstyled font-size-sm">
                  <li><span class="text-muted">Client:&nbsp;</span>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</li>
                  <li><span class="text-muted">Address:&nbsp;</span>{{$order->addresses->first()->address1}}</li>
                  <li><span class="text-muted">Phone:&nbsp;</span>{{$order->addresses->first()->phone}}</li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h4 class="h6">Payment method:</h4>
                <ul class="list-unstyled font-size-sm">
{{--                  <li><span class="text-muted">Credit Card:&nbsp;</span>**** **** **** 5300</li>--}}
                    <li><span class="text-muted">Cash on Delivery</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="{{route('checkout-payment',['order_id'=>$order->id])}}"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="{{route('checkout-complete',['order_id'=>$order->id])}}"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <h2 class="h6 text-center mb-4">Order summary</h2>
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">{{$order->subtotal}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right">{{$order->shippings->shipping_price}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">{{$order->tax}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">—</span></li>
            </ul>
            <h3 class="font-weight-normal text-center my-4">{{$order->grand_total}}</h3>
            <form class="needs-validation" method="post" novalidate>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Promo code" required>
                <div class="invalid-feedback">Please provide promo code.</div>
              </div>
              <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
            </form>
          </div>
        </aside>
      </div>
      <!-- Navigation (mobile)-->
      <div class="row d-lg-none">
        <div class="col-lg-8">
          <div class="d-flex pt-4 mt-3">
{{--            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-payment.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Payment</span><span class="d-inline d-sm-none">Back</span></a></div>--}}
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-complete.php"><span class="d-none d-sm-inline">Complete order</span><span class="d-inline d-sm-none">Complete</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
        <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
        <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item"
                                                  href="{{route('wishlist')}}"><span class="cz-handheld-toolbar-icon"><i
                        class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse"
                onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i
                        class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="{{route('cart-item')}}"><span
                    class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span
                        class="badge badge-primary badge-pill ml-1">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span></span><span
                    class="cz-handheld-toolbar-label">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span></a>
        </div>
    </div>
   @endsection


