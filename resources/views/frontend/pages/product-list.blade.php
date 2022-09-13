@extends('frontend.include.master')
@section('content')
<section class="uk-section-xsmall">
   <div class="uk-container">
      <ul class="uk-breadcrumb">
         <li><a href="shop-list.php">Cashmere Product </a></li>
         <li><span>{{$category->first()->name}}</span></li>
      </ul>
   </div>
</section>
<!-- breadcrumb -->
<!-- banner -->
<div class="uk-container">
   <div class="uk-list-banner uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover 
      uk-background-top-center" data-src="assets/images/products/list-banner.jpg" uk-img >
      <div class="uk-hero-banner-content uk-width-1-1 uk-position-z-index ">
         <div class="uk-position-relative  uk-flex-middle uk-flex uk-light">
            <div class="uk-padding">
               <div class="uk-grid">
                  <div class="uk-width-expand@m uk-width-1-2">
                     <h3 class="f-w-600  uk-margin-remove"> Cashmere Cardigans </h3>
                     <div class="uk-visible@m uk-margin-top">
                        <p>
                           Our luxurious women's pure cashmere cardigans are all crafted by us with comfort and style in mind. Effortless elegance and the highest quality yarn combine to make the perfect cashmere cardigan collection.
                        </p>
                        <p>
                           Buttoned cardigans, zip cardigans, and those in-between, our cardigans offer year-round practicality in attractive colours in the finest cashmere.
                        </p>
                        
                     </div>
                  </div>
                  <div class="uk-width-1-3@m">
                  </div>
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
</div>
<!-- end banner -->
<!-- product list -->
<section class="uk-section-small bg-white">
   <div class="uk-container">
     <div class="uk-margin" >
         <div class="uk-width-medium">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                 <div>
                 <label for="" >Sort By</label>
                 </div>
                 <div>
                 <select class="uk-select" name="sortParam">
                     <option value="0">Select One</option>
                     <option value="1">A to Z</option>
                     <option value="2">Z to A</option>
                     <option value="3">Low to High (Price)</option>
                     <option value="4">High to Low (Price)</option>
                     <option value="5">Recent</option>
                     <option value="6">Older</option>
                  </select>
                 </div>
            </div>
         </div>
      </div>
      <ul class="uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
   <!--  -->
   @if($products->isNotEmpty())
                            @foreach($products->take(8) as $value)
   <li>
      <div class="uk-product-list">
         <a href="{{route('product-single',$value->slug)}}" class="uk-inline-clip uk-transition-toggle">
            <figure class="uk-product-img">
               <div class="uk-position-top uk-position-z-index uk-padding-small">
                  <div class="uk-label f-10 bg-primary uk-magin">New</div>
               </div>
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product">
               <img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" class="uk-position-cover uk-transition-scale-up" alt="Product">
                  <div class="uk-hover-hide-show">
                      <a  class="uk-addtocart uk-flex uk-flex-middle" onclick="UIkit.notification({message: '<span uk-icon=\'icon: cart\'></span> Added to cart <a  uk-toggle=\'target: #cart\'>Check </a>', pos: 'bottom-center', status: 'primary'})">
                           <span uk-icon="icon:cart;" class="uk-icon"></span> <span>Add to cart</span>
                     </a>
                  </div>
            </figure>
         </a>
         <div class="uk-product-description">
            <div class="uk-grid-small uk-flex uk-flex-middle uk-text-center" uk-grid>
               <div class="uk-width-1-1">
                  <h5 class="uk-margin-remove"><a href="{{route('product-single',$value->slug)}}">{{$value->product_name}} </a></h5>
               </div>
               <div class="uk-width-expand">
                  <div>
                     <h5 class="uk-margin-remove text-primary">${{$value->discount_price}} <del class="f-12">${{$value->price}}</del></h5>
                  </div>
               </div>
              
            </div>
         </div>
         
      </div>
   </li>
   @endforeach
   @endif
   <!--  -->
  
    
</ul> 
 
       <div class="uk-margin-large-top">
         <ul class="uk-pagination uk-flex-center uk-margin-remove" uk-margin>
            <li><a href="#"><span uk-pagination-previous></span></a></li>
            <li><a href="#">1</a></li>
            <li class="uk-disabled"><span>…</span></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li class="uk-active"><span>7</span></li>
            <li><a href="#">8</a></li>
            <li><a href="#"><span uk-pagination-next></span></a></li>
         </ul>
      </div>
   </div>
</section>
<!-- end product list -->
 
@endsection
{{-- @push('scripts')
    <script>


        $('.size_stock').click(function () {
            let free_size = $('.free_size').val();
            let color = this.value;
            getStock(free_size, color);
        });
        $('.free_size').on('change', function () {
            var color = $("input[type='radio'].size_stock:checked").val();
            console.log(color);
            var freesize = this.value;
            getStock(freesize, color);
        });

        $(window).on("load", function () {
            var color = $("input[type='radio'].size_stock:checked").val();
            var size = $('select[name=size] option').filter(':selected').val();
            getStock(size, color);

        });

       

        $('#cart_btn').on('click', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            let myform = document.getElementById('add_to_cart');
            let formData = new FormData(myform);

            $.ajax({
                type: 'POST',
                url: '{{route('cart-add')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    console.log(data);
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();

                    });
                    if (data.status == 'success') {
                        toastr.success(data.message);
                    }


                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });


        });
        // filter
        $(document).ready(function () {


            $('.product_filter').bind("click change keyup",function (e){
                let size_variations= multilple_values('size_filter');
                console.log(size_variations);
                let brand_variation=multilple_values('brand_filter');
                console.log(brand_variation);
                let price_variation_min=$('.price_filter_min').val();
                let price_variation_max=$('.price_filter_max').val();

                var slug= "{{$category_slug}}";

                function multilple_values(inputclass) {
                    var val = new Array();
                    $.each($("." + inputclass + ":checked"), function() {
                        val.push($(this).val());
                    });
                    return val;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{route('product-list')}}',
                    data:{
                        brand: brand_variation,
                        size: size_variations,
                        slug: slug,
                        min_price:price_variation_min,
                        max_price:price_variation_max,
                    },

                    success:function (response) {
                        $('.product_filter_result').replaceWith($('.product_filter_result')).html(response);
                    }
                });
            });
            $('.item_sort').change(function (e) {
                var val = $(this).find(':checked').val();
                console.log(val);

                $.ajax({
                    url: document.URL,
                    type: 'get',
                    data: {
                        value: val,
                    },
                    success: function (result) {
                        console.log(result);

                        $('.product_filter_result').replaceWith($('.product_filter_result')).html(result);
                    }
                });

            })

            //

        });
    </script>
@endpush --}}
