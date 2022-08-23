@extends('frontend.include.master')
@section('content')
    <!-- Hero slider-->
    @if($banner->count()>0)
    <section class="cz-carousel cz-controls-sm">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
            <!-- Item-->
            @foreach($banner as $row)
            <div>
                <a href="">
                    <img class="" src="{{asset('images/banner/'.$row->picture)}}" alt="">
                </a>
            </div>
            @endforeach
          
            <!-- Item-->
        </div>
    </section>
    @endif
    <!-- Products slider -->
    <section class=" position-relative pb-4 ">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-3 mb-3">
                <h2 class="h5 mb-0 pt-3 mr-3">Best of {{$featured_category->name}}</h2>

                <div class="pt-3"><a class="btn btn-primary btn-pill btn-sm" href="{{route('product-list').'/'.$featured_category->slug}}">View all<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
            </div>
            <div class="cz-carousel cz-controls-static  cz-dots-enabled pt-2 text-center  ">
                <div class="cz-carousel cz-controls-static cz-controls cz-dots-enabled pt-2">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:5}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                        <!-- Product-->
                        @if($featured_category != null)
                            @foreach($featured_category->products->take(10) as $value)
                        <div>
                            @if($value->on_sale==1)
                                <span class="badge badge-danger badge-shadow">Sale</span>
                            @endif
                            <div class="card product-card card-static">
                                <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>
                                <div class="card-body py-2">
                                    <a class="product-meta d-block font-size-xs pb-1" href="{{route('product-list').'/'.$featured_category->slug}}">{{$featured_category->name}} </a>
                                    <h3 class="product-title font-size-sm"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}}  </a></h3>
                                    <div class="product-price"><span class="text-accent">Rs.{{$value->discount_price}}</span>
                                        <del class="text-muted font-size-xs">Rs.{{$value->price}}</del></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                        <!-- Product-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products slider -->
    <!-- Products slider -->
    <section class=" position-relative pb-4 bg-secondary">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-3 mb-3">
                <h2 class="h5 mb-0 pt-3 mr-3">{{$featured_category2->name}} </h2>
                <div class="pt-3"><a class="btn btn-primary btn-pill btn-sm" href="{{route('product-list').'/'.$featured_category2->slug}}">View all<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
            </div>
            <div class="cz-carousel cz-controls-static  cz-dots-enabled pt-2 text-center  ">
                <div class="cz-carousel cz-controls-static cz-controls cz-dots-enabled pt-2">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                        <!-- Product-->
                        <!-- Product-->
                        @if($featured_category2 != null)
                            @foreach($featured_category2->products->take(10) as $value)
                                <div>
                                    @if($value->on_sale==1)
                                        <span class="badge badge-danger badge-shadow">Sale</span>
                                    @endif
                                    <div class="card product-card card-static">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="{{route('product-list').'/'.$featured_category2->slug}}">{{$featured_category2->name}} </a>
                                            <h3 class="product-title font-size-sm"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}}  </a></h3>
                                            <div class="product-price"><span class="text-accent">Rs.{{$value->discount_price}}</span>
                                                <del class="text-muted font-size-xs">Rs.{{$value->price}}</del></div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    @endif
                    <!-- Product-->
                        <!-- Product-->


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products slider -->

    <!-- Category -->
    <section class=" position-relative pb-4 ">
        <div class="container">
            <div class="cz-carousel cz-controls-static  cz-dots-enabled pt-2 text-center">
                <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:3}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                    <!-- categories -->
                    <div>
                        <a href="">
                            <img src="img/shop/categories/01.jpg">
                        </a>
                    </div>
                    <!-- categories -->
                    <!-- categories -->
                    <div>
                        <a href="">
                            <img src="img/shop/categories/02.jpg">
                        </a>
                    </div>
                    <!-- categories -->
                    <!-- categories -->
                    <div>
                        <a href="">
                            <img src="img/shop/categories/03.jpg">
                        </a>
                    </div>
                    <!-- categories -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category -->


    <!-- Product widgets-->
    <section class=" pb-4 pt-4 ">
        <div class="container">
            <div class="row">
                <!-- Bestsellers-->
                <div class="col-lg-4 col-md-6 mb-2 py-3">
                    <div class="widget">
                        <h3 class="widget-title">Bestsellers</h3>
                        @if($best != null)
                        @foreach($best as $value)
                        <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="{{route('product-details',$value->slug)}}"><img width="64" src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"/></a>
                            <div class="media-body">
                                <h6 class="widget-product-title"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}} </a></h6>
                                <div class="widget-product-meta"><span class="text-accent">Rs.{{$value->price}}</span></div>
                            </div>
                        </div>
                        @endforeach
                        @endif
{{--                        <a class="font-size-sm" href="shop-grid-ls.php">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>--}}
                    </div>

                </div>
                <!-- New arrivals-->
                <div class="col-lg-4 col-md-6 mb-2 py-3">
                    <div class="widget">
                        <h3 class="widget-title">New arrivals</h3>
                        @if($new != null)
                            @foreach($new as $value)
                                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="{{route('product-details',$value->slug)}}"><img width="64" src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"/></a>
                                    <div class="media-body">
                                        <h6 class="widget-product-title"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}} </a></h6>
                                        <div class="widget-product-meta"><span class="text-accent">Rs.{{$value->price}}</span></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
{{--                        <a class="font-size-sm" href="shop-grid-ls.php">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>--}}
                    </div>
                </div>
                <!-- Accessories-->
                <div class="col-lg-4 col-md-6 mb-2 py-3">
                    <div class="widget">
                        <h3 class="widget-title">Popular Picks</h3>
                        @if($popular != null)
                            @foreach($popular as $value)
                                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="{{route('product-details',$value->slug)}}"><img width="64" src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"/></a>
                                    <div class="media-body">
                                        <h6 class="widget-product-title"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}} </a></h6>
                                        <div class="widget-product-meta"><span class="text-accent">Rs.{{$value->price}}</span></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

{{--                        <a class="font-size-sm" href="shop-grid-ls.php">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related products-->
    <section class=" position-relative pb-5 pt-5  bg-secondary"  >
        <div class="container">
            <div class="bg-light rounded-lg box-shadow-lg py-3 px-grid-gutter">
                <h2 class="h5 text-center pt-2 pt-md-4 mb-2 mb-md-5">Trending Products</h2>
                <div class="cz-carousel cz-controls-static  cz-dots-enabled pt-2 text-center  ">
                    <div class="cz-carousel cz-controls-static cz-controls-outside  cz-dots-enabled pt-2">
                        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:5}, &quot;1500&quot;:{&quot;items&quot;:5}}}">

                            @if($product != null)
                        @foreach($product as $value)
                            <!-- Product-->
                            <div>
                                <div class="card product-card card-static">
                                    @if($value->on_sale==1)
                                    <span class="badge badge-danger badge-shadow">Sale</span>
                                    @endif
                                    <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>
                                    <div class="card-body py-2">
                                        <a class="product-meta d-block font-size-xs pb-1" href="{{route('product-details',$value->slug)}}">{{$value->categories->first()->name}}</a>
                                        <h3 class="product-title font-size-sm"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}} </a></h3>
                                        <div class="product-price"><span class="text-accent">Rs.{{$value->price}}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product-->
                            @endforeach
                                @endif



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
        <div class="d-table table-fixed w-100">
            <a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">रू 705,000</span></a>
        </div>
    </div>
@stop
