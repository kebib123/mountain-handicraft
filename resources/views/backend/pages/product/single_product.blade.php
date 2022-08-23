@extends('backend.layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">

                <img src="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}" class="product-image" alt="Product Image">

              </div>
              <div class="col-12 product-image-thumbs">
{{--                <div class="product-image-thumb active">--}}
{{--                    <img src="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}" alt="Product Image">--}}
{{--                </div>--}}
                  @foreach($product->images as $image)
                <div class="product-image-thumb" ><img src="{{asset('/images/products/'.$image->image)}}" alt="Product Image"></div>
                  @endforeach
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$product->product_name}}</h3>
                <p>{!! $product->short_description !!}</p>
              <hr>
              <h4>Available Colors:</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  @if(isset($product->colorstocks))
                  @foreach($product->colorstocks as $value)
                <label class="btn btn-default text-center  active ">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                    {{$value->title}}
                    <label class="custom-option-label rounded-circle"
                           for="{{$value->title}}"><span
                            class="custom-option-color rounded-circle"
                            style="background-color:{{$value->title}}"></span></label>
                  <br>
                  <i class="fas fa-circle fa-2x text-white"></i>
                </label>
                  @endforeach
                 @endif
                      @if(isset($product->stocks))
                      @foreach($product->stocks as $value1)
                          <label class="btn btn-default text-center active">
                              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                              {{$value1->colors->title}}
                              <label class="custom-option-label rounded-circle"
                                     for="{{$value1->colors->title}}"><span
                                      class="custom-option-color rounded-circle"
                                      style="background-color:{{$value1->colors->title}}"></span></label>
                              <br>
                              <i class="fas fa-circle fa-2x text-white"></i>
                          </label>
                      @endforeach
                      @endif
              </div>

              <h4 class="mt-3">Available Sizes:</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                 @if(isset($product->stocks)&&($product->size_variation==1))
                  @foreach($product->stocks as $stock)
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl"> {{ $stock->size->title }}</span>
                  <br>
                </label>
                  @endforeach
                  @else

                      <label class="btn btn-default text-center">
                          <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                          <span class="text-xl">Free Size</span>
                          <br>
                      </label>
                     @endif
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                 Rs.{{$product->price}}
                </h2>
                <h4 class="mt-0">
                  <small>Discount Price: Rs.{{$product->discount_price}} </small>
                </h4>
              </div>

{{--              <div class="mt-4">--}}
{{--                <div class="btn btn-primary btn-lg btn-flat">--}}
{{--                  <i class="fas fa-cart-plus fa-lg mr-2"></i>--}}
{{--                  Add to Cart--}}
{{--                </div>--}}

{{--                <div class="btn btn-default btn-lg btn-flat">--}}
{{--                  <i class="fas fa-heart fa-lg mr-2"></i>--}}
{{--                  Add to Wishlist--}}
{{--                </div>--}}
{{--              </div>--}}

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Long Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                  {!! $product->long_description !!}
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                  Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                  Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  @stop
