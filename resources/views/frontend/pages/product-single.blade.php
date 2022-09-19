@extends('frontend.include.master')
@section('content')
<!-- breadcrumb -->
<section class="uk-section-xsmall"> 
   <div class="uk-container">
      <ul class="uk-breadcrumb">
         <li><a href="{{ route('index') }}">Home </a></li>
         <li><a href="{{route('product-list',$product->categories->first()->slug)}}">{{$product->categories->first()->name}}</a></li>
         <li><span>{{$product->product_name}}</span></li> 
      </ul>
   </div>
</section>
<!-- breadcrumb -->
<!-- product  -->
<section class="uk-section uk-padding-remove-top">
   <div class="uk-container">
   
   <!-- start -->
   <div uk-slideshow="ratio: 10:15; minHeight: 300; "  class="uk-grid-expand uk-grid-column-large uk-margin-large" uk-grid>
      <div class="uk-width-2-5@m">
         <div class="uk-margin uk-position-relative">
            <ul class="uk-slideshow-items"  uk-lightbox="animation: slide">
               <li class="uk-item uk-zoom-image">
                  <img class="uk-image" uk-cover uk-img="target: !.uk-slideshow-items"  
                   data-srcset="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}">       
               </li>
                @foreach($product->images->where('is_main',0) as $key=>$img)
               <li class="uk-item uk-zoom-image">
                  <img class="uk-image" uk-cover uk-img="target: !.uk-slideshow-items"  data-srcset="{{asset('images/products/'.$img->image)}}">       
               </li>
               @endforeach
                
            </ul>

            <a class="uk-slider-btn uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-slider-btn uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <!-- audio video -->
            <div class="uk-position-bottom-right uk-margin-small-right uk-margin-small-bottom">
               <!-- audio -->
               <a   href="avoide:javascript;" class="uk-product-btn uk-audio-btn uk-flex uk-flex-middle uk-flex-center " id="audio-btn"></a>
               <audio id="audio" src="https://cdn.freesound.org/previews/417/417117_8224400-lq.mp3" preload="metadata" type="audio/mpeg">
                  Your browser does not support the audio element.
               </audio>
               <!-- end -->
               <!-- video -->
               <a  data-youtube-id="93A2jOW5Mog" class="uk-product-btn uk-flex uk-flex-middle uk-flex-center  open-video" uk-tooltip="Watch Video">
                <i class="fa fa-video-camera"></i>
               </a>                     
               <!-- end -->
            </div>
            <!-- end audio video -->
            <!-- <div class="uk-hidden-hover uk-hidden-touch uk-visible@s">
               <a class="uk-slidenav uk-slider-btn uk-slidenav-large uk-position-medium uk-position-center-left" href="#" uk-slidenav-previous uk-slideshow-item="previous">
               </a>
               <a class="uk-slidenav uk-slider-btn uk-slidenav-large uk-position-medium uk-position-center-right" href="#" uk-slidenav-next uk-slideshow-item="next">
               </a>
               </div> -->
         </div>
         <ul class="uk-nav uk-thumbnav uk-flex-left uk-margin-small-top" uk-margin>
            <li uk-slideshow-item="0">
               <a href="#">
               <img alt data-src="{{asset('images/products/'.$product->images->where('is_main','=',1)->first()->image)}}" data-sizes="(min-width: 70px) 70px" width="70" height="70" uk-img>
               </a>
            </li>
            @php $i = 1; @endphp
            @foreach($product->images->where('is_main',0) as $key=>$img)
            <li uk-slideshow-item="{{$i}}">
               <a href="#">
               <img alt data-src="{{asset('images/products/'.$img->image)}}" data-sizes="(min-width: 70px) 70px" width="70" height="70" uk-img>
               </a>
            </li>
            @php $i++; @endphp
            @endforeach
         </ul>
      </div>
      <div class="uk-grid-item-match uk-width-expand@m">
         <div class="uk-panel uk-width-1-1">
            <h1 class="uk-h2 uk-margin uk-width-xlarge f-w-600">{{ $product->product_name }}</h1>
            <div class="uk-margin">
                {!! $product->short_description !!}
            </div>
            <div class="uk-margin">
               <div class="uk-h2 uk-margin-remove f-w-600 text-secondary">${{$product->discount_price}} <del class="uk-h4">$ {{$product->price}}</del></div>
            </div>
            <form class="mb-grid-gutter" id="add_to_cart">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="uk-margin">
               <label class="uk-margin-remove f-w-600 f-12" for="colour">Select Colour:</label>
               <ul class="uk-color uk-nav uk-thumbnav uk-flex-left uk-margin-small-top" id="colour" uk-margin>
                  <input type="hidden" name="color" id="hidden-color">
                  @if($product->size_variation==0)
                  @foreach($product->colorstocks as $color)
                  <li class="color-item">
                     <a href="#" uk-tooltip="{{$color->title}}">
                        <div class="uk-product-color" style="background:{{$color->title}};">
                        </div>
                     </a>
                  </li>
                  @endforeach
                  @else
                  @foreach($product->uniqueStockColor() as $stock)
                  <li class="color-item">
                     <a href="#" uk-tooltip="{{$stock->colors->title}}">
                        <div class="uk-product-color " style="background:{{$stock->colors->title}};">
                        </div>
                     </a>
                  </li>
                  @endforeach
                  @endif
               </ul>
            </div>
            <div class="uk-margin">
               <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m" uk-grid>
                  @if($product->size_variation==1)
                  <div>
                     <label class="uk-margin-remove f-w-600 f-12 uk-display-block" for="size">Select Size:</label>
                     <select onchange="updateMax()" name="size" id="size" class="uk-select  uk-margin-small-top">
                        <option value="0" option-id="{{$product->totalStock()}}">Choose an Option...</option>
                        @foreach($product->stocks as $data)
                        <option value="{{$data->size->title}}" option-id="{{$data->stock}}">{{$data->size->title}}</option>
                        @endforeach
                     </select>
                     <a href="" class="f-w-600 f-12 uk-margin-small-top uk-display-block text-secondary" uk-toggle="target: #SizeGuide">Size Guide</a>
                  </div>
                  @endif
                  <div>
                     <div>
                        <label class="uk-margin-remove f-w-600 f-12 uk-display-block" for="size">Qty:</label>
                        <div class="number-input  uk-margin-small-top">
                           <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                           <input class="quantity" id="quantity" min="1" max="{{$product->totalStock()}}" name="quantity" value="1" type="number">
                           <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
               <div class="uk-margin-medium uk-padding bg-grey uk-border-rounded">
                  
                  <div class="uk-grid-small" uk-grid>
                     <div>
                        <a class="uk-content uk-button uk-btn-primary uk-width-1-1" id="cart_btn">
                        <span uk-icon="icon:cart;"></span> Add to Cart
                        </a>
                     </div>
                     <div>
                        <a class="uk-content uk-button uk-btn-black uk-width-1-1" href="checkout.php">
                        Order Now
                        </a>
                     </div>
                     <div>
                        <a class="uk-content uk-button uk-btn-secondary uk-width-1-1" href="#quotation" uk-toggle>
                        Get Quotation  
                        </a>
                     </div>
                  </div>

                  <div class="f-10 uk-margin-small uk-margin-remove-bottom"><i><b> NOTE: </b> The actual color of the product may slightly differ due to photographic effects.</i></div>
                  <div class="uk-margin-small f-12 uk-flex uk-flex-middle">
                     <span class="uk-margin-small-right ">We accept</span>
                     <ul class="uk-grid-small" uk-grid>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/esewa.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/khalti.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/visa.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/master-card.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/american-express.svg')}}" alt="">
                           </div>
                        </li>
                        <li>
                           <div class="uk-box-shadow-small uk-payment-getway">
                              <img src="{{asset('images/payments/discover.svg')}}" alt="">
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="uk-margin-small-bottom f-12 uk-flex uk-flex-middle">
                     <div class="uk-margin-small-right">Share</div>
                     <div class="sharethis-inline-share-buttons"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end  -->
   </div>
    <div class="uk-container">
      <!-- tab start -->
      <div class=" ">
         <div class="uk-width-1-1">
            <div class="uk-grid-large uk-grid-match" uk-height-match="target: > div > ul" uk-grid>
               <div class="uk-width-1-4@m">
                  <ul class="uk-tab uk-tab-left f-w-600" uk-tab="connect: #uk-pd-tab; animation: uk-animation-slide-right-medium" >
                     <li><a href="/">Description</a></li>
                     <li><a href="/">Review</a></li>
                     <li><a href="/">Sizing information</a></li>
                     <li><a href="/">Shipping information</a></li>
                  </ul>
               </div>
               <div class="uk-width-expand@m">
                  <ul id="uk-pd-tab" class="uk-switcher">
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom">
                         {!! $product->short_description !!}
                        </div>
                     </li>
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom">
                           <h4 class="uk-margin-remove-top uk-flex">Ratings and reviews <a href="#review" uk-toggle class=""> <span class="material-icons-outlined">arrow_forward</span></a></h4>
                           <div class="uk-flex uk-flex-middle uk-grid" uk-grid>
                              <!--  -->
                              <div class="uk-width-auto@m uk-text-center">
                                 <h1 class="uk-margin-remove f-w-600">4.2</h1>
                                 <div class="uk-star">
                                    <span class="material-icons-outlined uk-active">star</span>
                                    <span class="material-icons-outlined uk-active">star</span>
                                    <span class="material-icons-outlined uk-active">star</span>
                                    <span class="material-icons-outlined uk-active">star</span>
                                    <span class="material-icons-outlined">star</span>
                                 </div>
                                 <div class="f-12">168M reviews</div>
                              </div>
                              <!--  -->
                              <!--  -->
                              <div class="uk-width-expand@m">
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">5</div>
                                    <div class="uk-width-expand">
                                       <progress value="90" max="100" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">4</div>
                                    <div class="uk-width-expand">
                                       <progress value="80" max="100" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">3</div>
                                    <div class="uk-width-expand">
                                       <progress value="60" max="100" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">2</div>
                                    <div class="uk-width-expand">
                                       <progress value="40" max="100" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                                 <!-- progress -->
                                 <div class="uk-flex uk-flex-middle uk-grid-collapse" uk-grid>
                                    <div class="uk-margin-small-right uk-width-auto">1</div>
                                    <div class="uk-width-expand">
                                       <progress value="20" max="100" class="bg-primary"></progress>
                                    </div>
                                 </div>
                                 <!-- progress -->
                              </div>
                              <!--  -->
                           </div>
                           <ul class="uk-list uk-review-list uk-margin-medium-top">
                              <li>
                                 <div class="uk-flex uk-flex-middle">
                                    <div class="uk-review-img uk-margin-small-right"> 
                                       <img src="assets/images/avater/1.png" alt="">
                                    </div>
                                    <div>
                                       <p class="f-w-600 uk-margin-remove">Argelie Ann Mabansag</p>
                                    </div>
                                 </div>
                                 <div class="uk-margin-top">
                                    <div class="uk-flex">
                                       <div>
                                          <div class="uk-star uk-margin-small-right">
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                          </div>
                                       </div>
                                       <div>
                                          <span>July 17, 2022</span>
                                       </div>
                                    </div>
                                    <p>This dress made me feel like a million bucks! It’s a tighter fit, but it made my confidence go up. And when you need to lose some lbs., it’s not easy trying on something that hugs your curves. My teenage daughter even loved how it looked, and we all know teenagers can be brutal!
                                       But keep in mind: The dress is shorter, and the slit in the front could open too far if you aren’t careful.
                                    </p>
                                 </div>
                              </li>
                              <li>
                                 <div class="uk-flex uk-flex-middle">
                                    <div class="uk-review-img uk-margin-small-right"> 
                                       <img src="assets/images/avater/2.png" alt="">
                                    </div>
                                    <div>
                                       <p class="f-w-600 uk-margin-remove">Maia</p>
                                    </div>
                                 </div>
                                 <div class="uk-margin-top">
                                    <div class="uk-flex">
                                       <div>
                                          <div class="uk-star uk-margin-small-right">
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined">star</span>
                                             <span class="material-icons-outlined">star</span>
                                             <span class="material-icons-outlined">star</span>
                                          </div>
                                       </div>
                                       <div>
                                          <span>Jan 08, 2022</span>
                                       </div>
                                    </div>
                                    <p>I love this dress! I wore it to a wedding and received so many compliments! It’s comfortable and wasn’t too snug in me. I felt like it was very flattering for my body type. I will say with a small chest I didn’t fill out the top the best so I had fabric gaping especially when I sat down and was relaxed. Other than that amazing dress! I love it and can’t wait to wear it again!</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="uk-flex uk-flex-middle">
                                    <div class="uk-review-img uk-margin-small-right"> 
                                       <img src="assets/images/avater/default.png" alt="">
                                    </div>
                                    <div>
                                       <p class="f-w-600 uk-margin-remove">Danielle Parsons</p>
                                    </div>
                                 </div>
                                 <div class="uk-margin-top">
                                    <div class="uk-flex">
                                       <div>
                                          <div class="uk-star uk-margin-small-right">
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined uk-active">star</span>
                                             <span class="material-icons-outlined">star</span>
                                             <span class="material-icons-outlined">star</span>
                                          </div>
                                       </div>
                                       <div>
                                          <span>June 3, 2022</span>
                                       </div>
                                    </div>
                                    <p>Perfect for a night out/date night. I’m 5’5” 135 pounds and bought a small (in blue and red). You’ll definitely need to be cautious of the slit in the front. In the pictures I have spandex on underneath, but you can see how high up the slit goes. I’ll also be wearing some when out since you can very quickly have a wardrobe malfunction in this. Overall it does a great job of hiding imperfections, specifically bra fat because of where the straps fall and extra tummy fat since it has the draping across the stomach. Highly recommend!</p>
                                 </div>
                              </li>
                           </ul>
                           <div class="uk-flex uk-flex-middle uk-flex-between" uk-grid>
                              <div>
                                 <a href="#review" uk-toggle class="uk-button uk-button-link f-w-600">See all reviews</a>
                              </div>
                              <div>
                              <a class="uk-button uk-btn-primary uk-flex uk-flex-middle togglecontent" href="#togglecontent" uk-toggle="target: .togglecontent; animation: uk-animation-fade"  >Write a review  <span class="material-icons-outlined">expand_more</span></a>
                	            <a class="uk-button uk-button-danger uk-flex uk-flex-middle togglecontent" href="#togglecontent" uk-toggle="target: .togglecontent; animation: uk-animation-fade"  hidden>Cancel review <span class="material-icons-outlined">expand_less</span></a>
                               </div>
                           </div>

                           <div class="togglecontent uk-margin-medium-top" id="togglecontent" hidden>
                        <form class="uk-grid-small uk-grid" uk-grid="">
                           <div class="uk-width-1-2@s">
                              <label>Full Name</label>
                              <input class="uk-input" type="text" placeholder=" " spellcheck="false" data-ms-editor="true"> 
                           </div>
                           <div class="uk-width-1-2@s  ">
                              <label>Email Address</label>
                              <input class="uk-input" type="email" placeholder=" "> 
                           </div>
                            
                           <div class="uk-width-1-1@s uk-margin-small uk-grid-margin">
                              <label>Your Photo</label>
                              <input type="file"class="uk-input">  
                           </div>
                           
                           <div class="uk-width-1-1@s uk-margin-small uk-grid-margin">
                              <label>Rating</label>
                              <div class="uk-rating">
                                 <input id="radio1" type="radio" name="star" value="5" class="uk-star">
                                 <label for="radio1">★</label>
                                 <input id="radio2" type="radio" name="star" value="4" class="uk-star">
                                 <label for="radio2">★</label>
                                 <input id="radio3" type="radio" name="star" value="3" class="uk-star">
                                 <label for="radio3">★</label>
                                 <input id="radio4" type="radio" name="star" value="2" class="uk-star">
                                 <label for="radio4">★</label>
                                 <input id="radio5" type="radio" name="star" value="1" class="uk-star">
                                 <label for="radio5">★</label>
                              </div>
                           </div>
                           <div class="uk-width-1-1@s uk-margin-small uk-grid-margin">
                              <label>Review </label>
                              <textarea name="" class="uk-textarea" rows="5" placeholder="Write Review" spellcheck="false" data-ms-editor="true"> </textarea>
                           </div>
                           <div class="uk-width-1-1@s uk-margin-top uk-grid-margin">
                              <button class="uk-button uk-btn-black" type="button">Submit Review </button>
                           </div>
                        </form>
                       </div>
                     </div>
                     </li>
                     <li>
                        <div class="uk-panel uk-margin-medium-bottom">
                           <p>Sizes stated are the underarm measurement of the garment. Therefore if your bust measurement is 41" then we would recommend a size 43" for comfort.</p>
                           <div class="uk-overflow-auto">
                              <table class="uk-table uk-table-striped">
                                 <tbody>
                                    <tr>
                                       <td>XS</td>
                                       <td>S</td>
                                       <td>M</td>
                                       <td>L</td>
                                       <td>XL</td>
                                       <td>2XL</td>
                                       <td>3XL</td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>37</td>
                                       <td>40</td>
                                       <td>43</td>
                                       <td>46</td>
                                       <td>49</td>
                                       <td>52</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </li>
                     <li>
                     <div class="uk-panel uk-margin-medium-bottom">
                           <p>Shipping from: Kathmandu Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>              

                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- tab end -->
   </div>
   <hr class="uk-margin-remove-top uk-margin">
</section>
<!-- end product  -->
<!-- related products -->
<section class="uk-section uk-padding-remove-top bg-white">
   <div class="uk-container">
      <div class="uk-title uk-margin-large-bottom uk-display-block">
         <h2 class="uk-h3 f-w-600 uk-text-uppercase uk-text-center uk-margin-remove">Related Products</h2>
         <div class="uk-divider-small uk-text-center"></div>
      </div>
      <ul class="uk-child-width-1-2 uk-child-width-1-4@m  uk-grid-small" uk-height-match="target: .uk-product-list" uk-grid="uk-grid">
      @foreach($related_products->take(8) as $data)
         <li>
            <div class="uk-product-list">
               <a href="shop-single.php" class="uk-inline-clip uk-transition-toggle">
                  <figure class="uk-product-img">
                     <div class="uk-position-top uk-position-z-index uk-padding-small">
                        <div class="uk-label f-10 bg-primary uk-magin">New</div>
                     </div>
                     <img src="{{asset('images/products/'.$data->get_main_image($data->id))}}" alt="Product">
                     <img src="{{asset('images/products/'.$data->get_main_image($data->id))}}" class="uk-position-cover uk-transition-scale-up" alt="Product">
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
                        <h5 class="uk-margin-remove"><a href="{{route('product-single', $data->slug)}}">{{$data->product_name}} </a></h5>
                     </div>
                     <div class="uk-width-expand">
                        <div>
                           <h5 class="uk-margin-remove text-primary">${{$data->price}} <del class="f-12">${{$data->discount_price}}</del></h5>
                        </div>
                     </div>
                  
                  </div>
               </div>
               
            </div>
         </li>
         @endforeach
</ul>
   </div>
</section>
<!-- end related products -->
<!-- Size Guide  -->
<div id="SizeGuide" uk-modal>
   <div class="uk-modal-dialog">
   <div class="uk-modal-header uk-flex uk-flex-between uk-flex-middle">     
      <h4 class="uk-margin-remove">Size guide</h4> 
      <button class="uk-modal-close" type="button" uk-close></button>
      </div>
      <div class=" uk-modal-body">
        
      <div class="uk-overflow-auto">
         <table class="uk-table uk-table-striped">
            <thead>
               <tr>
                  <th>Size</th>
                  <th>US</th>
                  <th>Bust</th>
                  <th>Waist</th>
                  <th>Low Hip</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>XS</td>
                  <td>2</td>
                  <td>32</td>
                  <td>24 - 25</td>
                  <td>33 - 34</td>
               </tr>
               <tr>
                  <td>S</td>
                  <td>4</td>
                  <td>34 - 35</td>
                  <td>26 - 27</td>
                  <td>35 - 26</td>
               </tr>
               <tr>
                  <td>M</td>
                  <td>6</td>
                  <td>36 - 37</td>
                  <td>28 - 29</td>
                  <td>38 - 40</td>
               </tr>
               <tr>
                  <td>L</td>
                  <td>8</td>
                  <td>38 - 29</td>
                  <td>30 - 31</td>
                  <td>42 - 44</td>
               </tr>
               <tr>
                  <td>XL</td>
                  <td>10</td>
                  <td>40 - 41</td>
                  <td>32 - 33</td>
                  <td>45 - 47</td>
               </tr>
               <tr>
                  <td>XXL</td>
                  <td>12</td>
                  <td>42 - 43</td>
                  <td>34 - 35</td>
                  <td>48 - 50</td>
               </tr>
            </tbody>
         </table>
      </div>
      <hr>
      <div class="uk-grid" uk-grid>
         <div class="uk-width-expand@m">
            <h4 class="f-w-600">Measuring Tips</h4>
            <h5 class="uk-margin-remove f-w-600">Bust</h5>
            <p class="uk-margin-small">Measure around the fullest part of your bust.</p>
            <h5 class="uk-margin-remove f-w-600">Waist</h5>
            <p class="uk-margin-small">Measure around the narrowest part of your torso.</p>
            <h5 class="uk-margin-remove f-w-600">Low Hip</h5>
            <p class="uk-margin-small">With your feet together measure around the fullest part of your hips/rear.</p>
         </div>
         <div class="uk-width-auto@m">
            <img src="assets/images/products/sizechart.jpg" alt="">
         </div>
          
      </div>
      </div>
   </div>
</div>
<!-- end Size Guide-->
<!-- all review -->
<div id="review" uk-modal>
   <div class="uk-modal-dialog">
      <div class="uk-modal-header">
         <div class="uk-flex uk-grid-small" uk-grid>
            <div class="uk-width-auto">
               <div class="uk-product-img-review">
                  <img src="assets/images/products/p1.jpg" alt="">
               </div>
            </div>
            <div class="uk-width-expand">
               <h4 class="uk-margin-remove">Ocean Blue Cashmere Color shawl (MHCS10)</h4>
               <span class="text-secondary">Ratings and reviews</span>
            </div>
            <div class="uk-width-auto">
               <button class="uk-modal-close-default uk-position-relative" type="button" uk-close></button>
            </div>
         </div>
      </div>
      <div class="uk-modal-body" uk-overflow-auto>
         <ul class="uk-list uk-review-list">
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/1.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Argelie Ann Mabansag</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                        </div>
                     </div>
                     <div>
                        <span>July 17, 2022</span>
                     </div>
                  </div>
                  <p>This dress made me feel like a million bucks! It’s a tighter fit, but it made my confidence go up. And when you need to lose some lbs., it’s not easy trying on something that hugs your curves. My teenage daughter even loved how it looked, and we all know teenagers can be brutal!
                     But keep in mind: The dress is shorter, and the slit in the front could open too far if you aren’t careful.
                  </p>
               </div>
            </li>
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/2.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Maia</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                        </div>
                     </div>
                     <div>
                        <span>Jan 08, 2022</span>
                     </div>
                  </div>
                  <p>I love this dress! I wore it to a wedding and received so many compliments! It’s comfortable and wasn’t too snug in me. I felt like it was very flattering for my body type. I will say with a small chest I didn’t fill out the top the best so I had fabric gaping especially when I sat down and was relaxed. Other than that amazing dress! I love it and can’t wait to wear it again!</p>
               </div>
            </li>
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/default.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Danielle Parsons</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                        </div>
                     </div>
                     <div>
                        <span>June 3, 2022</span>
                     </div>
                  </div>
                  <p>Perfect for a night out/date night. I’m 5’5” 135 pounds and bought a small (in blue and red). You’ll definitely need to be cautious of the slit in the front. In the pictures I have spandex on underneath, but you can see how high up the slit goes. I’ll also be wearing some when out since you can very quickly have a wardrobe malfunction in this. Overall it does a great job of hiding imperfections, specifically bra fat because of where the straps fall and extra tummy fat since it has the draping across the stomach. Highly recommend!</p>
               </div>
            </li>
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/1.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Argelie Ann Mabansag</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                        </div>
                     </div>
                     <div>
                        <span>July 17, 2022</span>
                     </div>
                  </div>
                  <p>This dress made me feel like a million bucks! It’s a tighter fit, but it made my confidence go up. And when you need to lose some lbs., it’s not easy trying on something that hugs your curves. My teenage daughter even loved how it looked, and we all know teenagers can be brutal!
                     But keep in mind: The dress is shorter, and the slit in the front could open too far if you aren’t careful.
                  </p>
               </div>
            </li>
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/2.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Maia</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                        </div>
                     </div>
                     <div>
                        <span>Jan 08, 2022</span>
                     </div>
                  </div>
                  <p>I love this dress! I wore it to a wedding and received so many compliments! It’s comfortable and wasn’t too snug in me. I felt like it was very flattering for my body type. I will say with a small chest I didn’t fill out the top the best so I had fabric gaping especially when I sat down and was relaxed. Other than that amazing dress! I love it and can’t wait to wear it again!</p>
               </div>
            </li>
            <li>
               <div class="uk-flex uk-flex-middle">
                  <div class="uk-review-img uk-margin-small-right"> 
                     <img src="assets/images/avater/default.png" alt="">
                  </div>
                  <div>
                     <p class="f-w-600 uk-margin-remove">Danielle Parsons</p>
                  </div>
               </div>
               <div class="uk-margin-top">
                  <div class="uk-flex">
                     <div>
                        <div class="uk-star uk-margin-small-right">
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined uk-active">star</span>
                           <span class="material-icons-outlined">star</span>
                           <span class="material-icons-outlined">star</span>
                        </div>
                     </div>
                     <div>
                        <span>June 3, 2022</span>
                     </div>
                  </div>
                  <p>Perfect for a night out/date night. I’m 5’5” 135 pounds and bought a small (in blue and red). You’ll definitely need to be cautious of the slit in the front. In the pictures I have spandex on underneath, but you can see how high up the slit goes. I’ll also be wearing some when out since you can very quickly have a wardrobe malfunction in this. Overall it does a great job of hiding imperfections, specifically bra fat because of where the straps fall and extra tummy fat since it has the draping across the stomach. Highly recommend!</p>
               </div>
            </li>
         </ul>
      </div>
      <div class="uk-padding">
      </div>
   </div>
</div>
<!-- end review -->

<!-- Quotation popup -->
<div id="quotation" uk-modal>
   <div class="uk-modal-dialog uk-modal-border-rounded">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header uk-background-muted uk-text-center uk-padding">
         <h3 class="uk-margin-remove">Get Quotation</h3>
         <h5 class="uk-margin-remove text-primary">Ocean Blue Cashmere Color shawl (MHCS10)</h5>
      </div>
      <div class="uk-modal-body uk-padding">
         <form class="" uk-grid>
             <div class="uk-width-1-2@s">
               <label>Full Name <span class="text-red">*</span></label>
               <input class="uk-input" type="text" placeholder=" "> 
            </div>
            
            <div class="uk-width-1-2@s">
               <label>Email Address <span class="text-red">*</span></label>
               <input class="uk-input" type="email" placeholder=" "> 
            </div>
            <div class="uk-width-1-2@s">
               <label>Country</label>
               <input class="uk-input" type="text" placeholder=" "> 
            </div>
            <div class="uk-width-1-2@s">
               <label>Contact Number</label>
               <input class="uk-input" type="text" placeholder=""> 
            </div>
            <div class="uk-width-1-1@s">
               <label>Your Message/Questions </label>
               <textarea name="" class="uk-textarea" rows="5" placeholder="Let us know all your enquiries and we will get back to you shortly.."> </textarea>
            </div>
            <div class="uk-width-1-1@s uk-text-center">
               <button class="uk-button uk-btn-primary" type="button">Submit </button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Quotation popup -->

@stop

@push('scripts')
    <script>
        $("#size").change(function() {
            var stockSize = $(this).children(":selected").attr("option-id");
            $("#quantity").attr("max",stockSize);

            if($("#quantity").val() > parseInt(stockSize)){
               $("#quantity").val(stockSize);
            }

         });

         $(".color-item a").click(function(event){
            event.preventDefault();
            $(this).addClass("uk-active");
            let selectedColor = $(this).attr("uk-tooltip");
            $("#hidden-color").val(selectedColor);
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
                    // console.log(data);
                    if (!data.errors) {

                        $('.mini-cart').replaceWith($('.mini-cart')).html(data);
                        toastr.success('Item added to cart');
                        // alert({{Gloudemans\Shoppingcart\Facades\Cart::count();}});
                        // $(".uk-cart-count").replaceWith($(".uk-cart-count")).html("c");

                    }
                    jQuery.each(data.errors, function (key, value) {

                        toastr.error(value);
                        // hideLoading();

                    })
                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });


        });
    </script>
@endpush 